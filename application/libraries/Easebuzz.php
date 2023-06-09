<?php
class Easebuzz extends CI_Controller
{ 
    public function __construct()
    {
      
    }

    function initiate_payment($params, $merchant_key, $salt, $env){
        $result = $this->_payment($params, $merchant_key, $salt, $env);
        $this->_paymentResponse((object)$result); 
    }

    function _payment($params, $merchant_key, $salt, $env){

        $postedArray = '';
        $URL = '';

        // argument validation
        $argument_validation = $this->_checkArgumentValidation($params, $merchant_key, $salt, $env);
        if(is_array($argument_validation) && $argument_validation['status'] === 0){
            return $argument_validation;
        }

        // push merchant key into $params array.
        $params['key'] =  $merchant_key;

        // remove white space, htmlentities(converts characters to HTML entities), prepared $postedArray.
        $postedArray = $this->_removeSpaceAndPreparePostArray($params);

        // empty validation
        $empty_validation = $this->_emptyValidation($postedArray, $salt);
        if(is_array($empty_validation) && $empty_validation['status'] === 0){
            return $empty_validation;
        }

        // check amount should be float or not 
        if(preg_match("/^([\d]+)\.([\d]?[\d])$/", $postedArray['amount'])){
            $postedArray['amount'] = (float)$postedArray['amount'];
        }

        // type validation
        $type_validation = $this->_typeValidation($postedArray, $salt, $env);
        if($type_validation !== true){
            return $type_validation;
        }

        // again amount convert into string
        $diff_amount_string = abs( strlen($params['amount']) - strlen("".$postedArray['amount']."") );
        $diff_amount_string = ($diff_amount_string === 2) ? 1 : 2;
        $postedArray['amount'] = sprintf("%.".$diff_amount_string."f", $postedArray['amount']);

        // email validation
        $email_validation = $this->_email_validation($postedArray['email']);
        if($email_validation !== true)
            return $email_validation;

        // get URL based on enviroment like ($env = 'test' or $env = 'prod')
        $URL = $this->_getURL($env);

        // process to start pay
        $pay_result = $this->_pay($postedArray, $salt, $URL);
        
        return $pay_result;        
    }

    function _checkArgumentValidation($params, $merchant_key, $salt, $env){
        $args = func_get_args();
        $argsc = count($args);
        if($argsc !== 4){
            return array(
                'status' => 0,
                'data' => 'Invalid number of arguments.'
            );
        }
        return 1;
    }
 
    function _removeSpaceAndPreparePostArray($params){
        $temp_array = array(
            'key' => trim( htmlentities($params['key'], ENT_QUOTES) ),
            'txnid' => trim( htmlentities($params['txnid'], ENT_QUOTES) ),
            'amount' => trim( htmlentities($params['amount'], ENT_QUOTES) ),
            'firstname' => trim( htmlentities($params['firstname'], ENT_QUOTES) ),
            'email' => trim( htmlentities($params['email'], ENT_QUOTES) ),
            'phone' => trim( htmlentities($params['phone'], ENT_QUOTES) ),
            'productinfo' =>trim( htmlentities($params['productinfo'], ENT_QUOTES) ),
            'batch' =>trim( htmlentities($params['batch'], ENT_QUOTES) ),
            'surl' => trim( htmlentities($params['surl'], ENT_QUOTES) ),
            'furl' => trim( htmlentities($params['furl'], ENT_QUOTES) )
            
        );
        return $temp_array;
    }

    function _emptyValidation($params, $salt){
        $empty_value = false;
        if(empty($params['key'])) 
            $empty_value = 'Merchant Key';

        if(empty($params['txnid'])) 
            $empty_value = 'Transaction ID';

        if(empty($params['amount'])) 
            $empty_value = 'Amount';
            
        if(empty($params['firstname'])) 
            $empty_value = 'First Name';

        if(empty($params['email'])) 
            $empty_value ='Email';

        if(empty($params['phone'])) 
            $empty_value = 'Phone';

        if(empty($params['productinfo'])) 
            $empty_value ='Product Infomation';
            
        if(empty($params['surl'])) 
            $empty_value ='Success URL';
        
        if(empty($params['furl'])) 
            $empty_value ='Failure URL';

        if(empty($salt))
            $empty_value = 'Merchant Salt Key';

        if($empty_value !== false){
            return array(
                'status' => 0,
                'data' => 'Mandatory Parameter '.$empty_value.' can not empty'
            );
        }
        return true;
    }


    function _typeValidation($params, $salt, $env){
        $type_value = false;
        if(!is_string($params['key']))
            $type_value = "Merchant Key should be string";

        if(!is_float($params['amount']))
            $type_value = "The amount should float up to two or one decimal.";

        if(!is_string($params['productinfo']))
            $type_value =  "Product Information should be string";

        if(!is_string($params['firstname']))
            $type_value =  "First Name should be string";
        
        if(!is_string($params['phone']))
            $type_value = "Phone Number should be number";

        if(!is_string($params['email']))
            $type_value = "Email should be string";

        if(!is_string($params['surl']))
            $type_value = "Success URL should be string";
        
        if(!is_string($params['furl']))
            $type_value = "Failure URL should be string";

        if($type_value !== false){
            return array(
                'status' => 0,
                'data' => $type_value
            );
        }
        return true;
    }

    function _email_validation($email){
        $email_regx = "/^([\w\.-]+)@([\w-]+)\.([\w]{2,8})(\.[\w]{2,8})?$/";
        if(!preg_match($email_regx, $email)){
            return array(
                'status' => 0,
                'data' => 'Email invalid, Please enter valid email.'
            );
        }
        return true;
    }

    function _getURL($env){
        $url_link = '';
        switch($env){
            case 'test' :
                $url_link = "https://testpay.easebuzz.in/";
                break;
            case 'prod' :
                $url_link = 'https://pay.easebuzz.in/';
                break;
            default :
                $url_link = "https://testpay.easebuzz.in/";
        }
        return $url_link;
    }


    function _pay($params_array, $salt_key, $url){
        $hash_key = '';

        // generate hash key and push into params array.
        $hash_key = $this->_getHashKey($params_array, $salt_key);
        $params_array['hash'] = $hash_key;

        // call curl_call() for initiate pay link
        $curl_result = $this->_curlCall( $url.'payment/initiateLink', http_build_query($params_array) );
        
        $accesskey = ($curl_result->status === 1) ? $curl_result->data : null;

        if( empty($accesskey) ){
           return $curl_result;
        }else{
            $curl_result->data = $url.'pay/'.$accesskey;
            return $curl_result;
        }
    }

    function _getHashKey($posted, $salt_key){
        $hash_sequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";

        // make an array or split into array base on pipe sign.
        $hash_sequence_array = explode( '|', $hash_sequence );
        $hash = null;

        // prepare a string based on hash sequence from the $params array.
        foreach($hash_sequence_array as $value ) {
            $hash .= isset($posted[$value]) ? $posted[$value] : '';
            $hash .= '|';
        }

        $hash .= $salt_key;

        // generate hash key using hash function(predefine) and return
        return strtolower( hash('sha512', $hash) );
    }


    function _curlCall($url, $params_array){
        // Initializes a new session and return a cURL.
        $cURL = curl_init();

        // Set multiple options for a cURL transfer.
        curl_setopt_array( 
            $cURL, 
            array ( 
                CURLOPT_URL => $url, 
                CURLOPT_POSTFIELDS => $params_array, 
                CURLOPT_POST => true, 
                CURLOPT_RETURNTRANSFER => true, 
                CURLOPT_USERAGENT => 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.125 Safari/537.36', 
                CURLOPT_SSL_VERIFYHOST => 0, 
                CURLOPT_SSL_VERIFYPEER => 0 
            ) 
        );

        // Perform a cURL session
        $result = curl_exec($cURL);

        // check there is any error or not in curl execution.
        if( curl_errno($cURL) ){
            $cURL_error = curl_error($cURL);
            if( empty($cURL_error) )
                $cURL_error = 'Server Error';
            
            return array(
                'curl_status' => 0, 
                'error' => $cURL_error
            );
        }

        $result = trim($result);
        $result_response = json_decode($result);

        return $result_response;
    }
    
    function _paymentResponse($result){

        if ($result->status === 1){
            // first way
            header( 'Location:' . $result->data );

            // second way
            // echo "
            //    <script type='text/javascript'>
            //           window.location ='".$result->data."'
            //    </script>
            // ";

            exit(); 
        }else{
            //echo '<h3>'.$result['data'].'</h3>';
            print_r(json_encode($result));
        }
    }

    function response($response_params, $salt_key){

        // check return response params is array or not
        if(!is_array($response_params) || count($response_params) === 0 ){
            return array(
                'status' => 0,
                'data' => 'Response params is empty.'
            );
        }

        // remove white space, htmlentities, prepared $easebuzzPaymentResponse.
        $easebuzzPaymentResponse = $this->_removeSpaceAndPrepareAPIResponseArray($response_params);

        // empty validation 
        $empty_validation = $this->_emptyValidation($easebuzzPaymentResponse, $salt_key);
        if(is_array($empty_validation) && $empty_validation['status'] === 0){
            return $empty_validation;
        }

        // empty validation for response params status
        if( empty($easebuzzPaymentResponse['status']) ){
            return array(
                'status' => 0,
                'data' => 'Response status is empty.'
            );
        }

        // check response the correct or not
        $response_result = $this->_getResponse($easebuzzPaymentResponse, $salt_key);

        return $response_result;
    }

    function _removeSpaceAndPrepareAPIResponseArray($response_array){
        $temp_array = array();
        foreach( $response_array as $key => $value ){
            $temp_array[$key] = trim( htmlentities($value, ENT_QUOTES) );
        }
        return $temp_array;
    }


    function _getResponse($response_array, $s_key){
       
        // reverse hash key for validation means response is correct or not.
        $reverse_hash_key = $this->_getReverseHashKey($response_array, $s_key);

        if($reverse_hash_key === $response_array['hash']){
            switch ($response_array['status']) {
                case 'success' :
                    return array(
                        'status' => 1,
                        'url' => $response_array['surl'],
                        'data' => $response_array
                    );
                    break;
                case 'failure' :
                    return array(
                        'status' => 1,
                        'url' => $response_array['furl'],
                        'data' => $response_array
                    );
                    break;
                default :
                    return array(
                        'status' => 1,
                        'data' => $response_array
                    );
            }
        }else{
            return array(
                'status' => 0,
                'data' => 'Hash key Mismatch'
            );
        }
    }


    function _getReverseHashKey($response_array, $s_key){
        $reverse_hash_sequence = "udf10|udf9|udf8|udf7|udf6|udf5|udf4|udf3|udf2|udf1|email|firstname|productinfo|amount|txnid|key";

        // make an array or split into array base on pipe sign.
        $reverse_hash = "";
        $reverse_hash_sequence_array = explode( '|', $reverse_hash_sequence );
        $reverse_hash .= $s_key. '|' . $response_array['status'];

        // prepare a string based on reverse hash sequence from the $response_array array.
        foreach($reverse_hash_sequence_array as $value ) {
            $reverse_hash .= '|';
            $reverse_hash .= isset($response_array[$value]) ? $response_array[$value] : '';
        }

        // generate reverse hash key using hash function(predefine) and return
        return strtolower( hash('sha512', $reverse_hash) );        
    }

    

        public function easebuzzResponse($params,$salt){
            // include file
            include_once('Payment.php');
            $SALT = $salt;
            $result = $this->response($params, $SALT);
            return json_encode($result);
        }

    
}
?>


