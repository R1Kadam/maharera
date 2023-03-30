<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// include_once('easebuzz-lib/easebuzz_payment_gateway.php');
    
class Easebuzz_pay extends CI_Controller
{
    
    public function __construct()
     {
         parent::__construct();
            $this->load->database();
            $this->load->library('session');
            $this->load->library('Easebuzz');
            $this->load->library('Payment');
     }
     
    public function index() {
        $this->load->library('session');
        if(!empty($_POST) && (sizeof($_POST) > 0)){
            $this->session->set_userdata('batch', $this->input->post('batch'));
       // print_r($_POST);exit;
        /*
        * There are three approch to call easebuzz API.
        *
        * 1. using hidden api_name which is $_POST from form.
        * 2. using pass api_name into URL.
        * 3. using extract html file name then based on file name call API.
        *
        */

        // first way
        $apiname = trim(htmlentities($_POST['api_name'], ENT_QUOTES));

        // second way
        //$apiname = trim(htmlentities($_GET['api_name'], ENT_QUOTES));

        // third way
        // $url_link = $_SERVER['HTTP_REFERER'];
        // $apiname = explode('.', ( end( explode( '/',$url_link) ) ) )[0];
        // $apiname = trim(htmlentities($apiname, ENT_QUOTES));


        /*
        * Based on API call change the Merchant key and salt key for testing(initiate payment).
        */
        // Testing
        // $MERCHANT_KEY = "2PBP7IABZ2";
        // $SALT = "DAH88E3UWQ";
        // $ENV = "test";    // setup test enviroment (testpay.easebuzz.in).

        //Production
        $MERCHANT_KEY = "7KRDEXI4QH";
        $SALT = "YYNP5F2C9D";
        $ENV = "prod";   // setup production enviroment (pay.easebuzz.in).
        
        // print_r($_POST);
        $PaymentObj = new Payment();

        if($apiname === "initiate_payment"){ 

            /*  Very Important Notes
            * 
            * Post Data should be below format.
            *
                Array ( [txnid] => T3SAT0B5OL [amount] => 100.0 [firstname] => jitendra [email] => test@gmail.com [phone] => 1231231235 [productinfo] => Laptop [surl] => http://localhost:3000/response.php [furl] => http://localhost:3000/response.php [udf1] => aaaa [udf2] => aa [udf3] => aaaa [udf4] => aaaa [udf5] => aaaa [address1] => aaaa [address2] => aaaa [city] => aaaa [state] => aaaa [country] => aaaa [zipcode] => 123123 ) 
            */
            $PaymentObj->initiate_payment($_POST, $MERCHANT_KEY, $SALT, $ENV);

        }
    }
   
    } 

    public function success(){
        $this->load->library('crud');
        $this->load->library('session');
        // Testing
        // $MERCHANT_KEY = "2PBP7IABZ2";
        // $SALT = "DAH88E3UWQ";
        // $ENV = "test";    // setup test enviroment (testpay.easebuzz.in).

        //Production
        $MERCHANT_KEY = "7KRDEXI4QH";
        $SALT = "YYNP5F2C9D";
        $ENV = "prod";   // setup production enviroment (pay.easebuzz.in).

        $easebuzzObj = new Easebuzz($MERCHANT_KEY = null, $SALT, $ENV = null);
        $result = $easebuzzObj->easebuzzResponse( $_POST , $SALT);
        // echo "Your payment Successfully done ";
        // print_r($_POST);
        // var_dump($result);

        if($result){
                $e = json_decode($result);
            if($e->status){
                $this->session->set_flashdata('ebuzz_txnid', $e->data->easepayid);
                $this->session->set_flashdata('ebuzz_payid', $e->data->txnid);
                $this->session->set_flashdata('event_payment_success', true);

                $this->new_transaction($result);
                $meta=array(
                    'result' =>$result
                );

                $data['success'] = $this->session->flashdata('success');
                $data['error']   = $this->session->flashdata('error');
                $data['page']    = 'ebuzz_success';
                $data['title']    = 'Payment Success';
                $this->load->view('website/index',$data,$meta);
            }else{
                
                $data['success'] = $this->session->flashdata('success');
                $data['error']   = $this->session->flashdata('error');
                $data['page']    = 'ebuzz_direct_cancel';
                $data['title']    = 'Payment Failed';
                $this->load->view('website/index',$data);
            }

        }else{
            redirect('/');
        }
        


    }

    public function failed(){
        $this->load->library('crud');
        $this->load->library('session');

        // Testing 
        // $MERCHANT_KEY = "2PBP7IABZ2";
        // $SALT = "DAH88E3UWQ";
        // $ENV = "test";    // setup test enviroment (testpay.easebuzz.in). 

        // Production
        $MERCHANT_KEY = "7KRDEXI4QH";
        $SALT = "YYNP5F2C9D";
        $ENV = "prod";   // setup production enviroment (pay.easebuzz.in).

        $easebuzzObj = new Easebuzz($MERCHANT_KEY = null, $SALT, $ENV = null);
        $result = $easebuzzObj->easebuzzResponse( $_POST, $SALT);
        // print_r($result);
        if($result){

            $e = json_decode($result);
            // var_dump($e->status);
            $this->new_transaction($result);
            if($e->status){
                $this->session->set_flashdata('ebuzz_txnid', $e->data->easepayid);
                $this->session->set_flashdata('ebuzz_payid', $e->data->txnid);
                $this->session->set_flashdata('event_payment_success', false);
                $data['success'] = $this->session->flashdata('success');
                $data['error']   = $this->session->flashdata('error');
                $data['page']    = 'ebuzz_cancel';
                $data['title']    = 'Payment Failed';
                $this->load->view('website/index',$data);

            }else{
                
                $data['success'] = $this->session->flashdata('success');
                $data['error']   = $this->session->flashdata('error');
                $data['page']    = 'ebuzz_direct_cancel';
                $data['title']    = 'Payment Failed';
                $this->load->view('website/index',$data);
            }
            
        }else{
            redirect('/');
        }
    }

    /*
    *  Show All API Response except initiate Payment API
    */
    function easebuzzAPIResponse($data){
        print_r($data);
    }

    // Add response in database
    public function new_transaction($data){
        $this->load->library('session');

        $e = json_decode($data);
        $course_id = $e->data->udf1;
        $userMobile = $e->data->phone;
        $amount = $e->data->amount;
        $batchs = $this->session->userdata('batch');
		$storeData = array(
			'easepayid' => $e->data->easepayid,
            'taxid' => $e->data->txnid,
            'course_id' => $e->data->udf1,
            'course_name' => $e->data->udf2,
            'sub_course_id' => $e->data->udf3,
            'sub_course_name' => $e->data->udf4,
            'batch' => $batchs,
            'fullname' => $e->data->firstname,
            'email' => $e->data->email,
            'mobile' => $e->data->phone,
            'productinfo' => $e->data->productinfo,
            'amount' => $e->data->amount,
            'net_amount_debit' => $e->data->net_amount_debit,
            'payment_source' => $e->data->payment_source,
            'surl' => $e->data->surl,
            'furl' => $e->data->furl,
            'status' => $e->data->status,
            'error_message' => $e->data->error_Message,
            'issuing_bank' => $e->data->issuing_bank,
            'cardCategory' => $e->data->cardCategory,
            'cardnum' => $e->data->cardnum,
            'card_key' => $e->data->key,
            'unmappedstatus' => $e->data->unmappedstatus,
            'pg_type' => "NA",
            'cash_back_percentage' => $e->data->cash_back_percentage,
            'deduction_percentage' => $e->data->deduction_percentage,
            'bankcode' => $e->data->bankcode,
            'name_on_card' => $e->data->name_on_card,
            'bank_ref_num' => $e->data->bank_ref_num,
            'error' => $e->data->error,
            'mode' => $e->data->mode,
            'hash' => $e->data->hash,
            'addedon' => $e->data->addedon,
        );
	
        $checkPayment = $this->session->flashdata('event_payment_success');
        $insertData = $this->db->insert('easebuzz_transactions', $storeData);

        $storeDataUserBatch = array(
			'easepayid' => $e->data->easepayid,
            'course_id' => $e->data->udf1,
            'sub_course_id' => $e->data->udf3,
            'taxid' => $e->data->txnid,
            'mobile' => $e->data->phone,
        );

        $this->db->set($storeDataUserBatch);
		$this->db->where('mobile', $e->data->phone);
		$this->db->update('userBatches');

        return $insertData;

	}

    public function update_booking($userDetails, $eventId){
		$data = array(
			'is_registered' => 1,
			);
		   $this->db->set($data);
		   $this->db->where('mobile', $userDetails);
		   $this->db->where('course_id', $eventId);
		   $this->db->update('users');
		return true;

	}

}
?>