<style>
    .bamboo table thead tr {
        border-top-width: 0 !important;
    }

    .orderSide {
        border: 0;
    }

    .amountHrLine {
        width: 100%;
        border: 1px solid #ccc;
        margin-bottom: 40px;
    }


    @media screen and (min-width: 480px) {
        .orderSide {
            border-left: 2px solid #ccc !important;
        }

        .amountHrLine {
            width: 100%;
            border: 0px solid #ccc;
            margin-bottom: 0px;
        }

    }
    .successColor{
        color: #f9f9f9 !important;
        background: #52ac52 !important;
        width: 280px;
        border-radius: 10px;
        padding: 5px 7px;
        margin-bottom: 10px;
        display: none;
    }
    .errorColor{
        color: #f9f9f9 !important;
        background: #b83535 !important;
        width: 280px;
        border-radius: 10px;
        padding: 5px 7px;
        margin-bottom: 10px;
        display: none;
    }
</style>
<div class="divider-20"></div>

<?php

use Sabberworm\CSS\CSSList\Document;

function callToCouponCode($code)
{
    return $code;
    // return $coupon_code = $obj->crud->get_coupon($code);
}
?>
<?php
$txnid              = date("YmdHis");
$totals            =  number_format(intval($course_price), 2, '.', '');
$card_holder_name   =  $f_name . " " . $l_name;
$email              = $email;
$batch              = $batch;
// $batchs             = $this->session->userdata('batch');
$phone              = $mobile;
$percentage = 9;
$totalWidth = intval($course_price);

$courseDate = $course_date;
$batchHours = $batch_hours;
$batchTime = $batch_time;

$new_width = ($percentage / 100) * $totalWidth;
$subTotalPrice = $totalWidth + ($new_width + $new_width);
$total = number_format(intval($subTotalPrice), 2, '.', '');
$sub_total = number_format(intval($subTotalPrice), 2, '.', '');
$cgst = number_format(intval($new_width), 2, '.', '');
$sgst = number_format(intval($new_width), 2, '.', '');
// print_r( $data);
?>
<!-- course_id
sub_course_id
sub_course_name
course_name
course_price
f_name
l_name
mobile
email
address1
address2
city
pincode -->


<section id="event-details" class="section-padding">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-12">
                <?php
                $error = $this->session->flashdata('error');
                $success = $this->session->flashdata('success');
                if ($error) {
                    echo '<div class="alert alert-danger text-center" role="alert">
                            <div class="container" id="qr">' . $error . '
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">
                                        <i class="now-ui-icons ui-1_simple-remove"></i>
                                    </span>
                                </button>
                            </div>
                        </div>';
                }
                if ($success) {
                    echo '<h6 class="mx-auto alert alert-success text-center">' . $success . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">
                                <i class="now-ui-icons ui-1_simple-remove"></i>
                            </span>
                        </button></h6>';
                }
                ?>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title-header text-center ">
                    <h1 class="section-title wow fadeInUp text-logo-color_siilc" data-wow-delay="0.2s">Course details </h1>
                </div>
                <div class="divider-80"></div>
            </div>
            <div class="col-12 col-md-12 col-lg-12 ">
                <div class="about-item">
                    <div class="row p-3">
                        <div class="col-12 col-md-6 col-lg-6 ">
                            <h2><?php echo $course_name; ?> - <?php echo $sub_course_name; ?></h2>
                            <!-- <h6>
                                <i class="fa fa-calendar" aria-hidden="true"></i> <?php $dates = date_create($courseDate);
                                 echo date_format($dates, 'D, d M Y'); ?>
                                </h6> -->
                                <!-- <span><i class="fa fa-clock" aria-hidden="true"></i> Batch starts from - Wednesday, 01st February 2023 </span>  -->
                            <!--<?php $dates = date_create($courseDate);echo date_format($dates, 'D, d M Y'); ?> -->

                            <h3 class="divider-10">
                                <!-- <svg width="20px" height="16px" viewBox="0 0 169.76 250.39">
                                    <g transform="translate(0 -801.97)">
                                        <path style="stroke:#000000;stroke-width:.099084;fill:#000000" d="m99.017 1052.3-90.577-113.33 0.5232-22.46c42.51 2.93 75.559-1.57 83.248-41.78l-90.578-0.52 14.66-24.55 72.253 1.04c-11.009-22.88-41.286-25.7-88.484-24.02l16.231-24.03 153.41-0.22927-15.184 23.731h-42.409c7.7512 8.1823 13.424 17.597 13.613 25.591l43.98-0.52226-15.184 23.502-29.32 0.52229c-4.5772 35.058-36.787 55.815-77.489 60.584l91.184 116.44-39.874 0.022v0.0004z" />
                                    </g>
                                </svg> -->
                                <span id="oldRate">₹ <?php echo $course_price; ?></span>
                                <span id="newRate"></span>
                                <span id="discount"></span>
                            </h3>
                            <div class="divider-30">
                                <div class="row">
                                    <div class="col-12">
                                        <h4>Selected batch</h4>
                                        <?php echo $batch; ?>
                                    </div>
                                </div>
                            </div>

                            <div class="divider-30">
                                <div class="amountHrLine"></div>
                            </div>

                            <div>
                                <h3 class="text-logo-color_siilc">Promotion code <?php $coupon_code ?></h3>
                                <div class="mt-5 mb-5">
                                    <!-- <form onsubmit="return getCouponDetails(event)" id="couponForm"> -->
                                        <input type="text" style="width:50%;" class="form-control" id="coupon_code" name="coupon_code_name" placeholder="Coupon code" required data-error="Please enter coupon code" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode >= 48 && event.charCode <= 57)">
                                        <div class="help-block with-errors errorColor" id="error_lname"></div>
                                        <div class="help-block with-success successColor" id="success_alert"></div>
                                        <button class="btn btn-common btn-sm text-white" id="couponApply" type="button">Apply Coupon</button>
                                    <!-- </form> -->
                                    <!-- <?php var_dump($coupon_code) ?> -->
                                </div>
                            </div>
                        </div>
                        <div class="orderSide col-12 col-md-6 col-lg-6">
                            <div class="bamboo">
                                <h3 style="font-size: 1.375rem;margin-bottom:20px;" class="text-logo-color_siilc">Your order</h3>

                                <table class="table table-responsive" style="display: inline-table;">
                                    <thead>
                                        <tr>
                                            <th class="product-name"><?php echo $course_name; ?></th>
                                            <th class="product-total"><?php echo $totals; ?></th>
                                        </tr>

                                    </thead>
                                    <!-- <tbody>
                                        <tr class="wordbreak">
                                            <td class="product-name"><?php echo $course_name; ?> ×&nbsp;1</strong>
                                            </td>
                                            <td class="product-total">
                                                <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">₹</span>450.00</bdi></span> <small class="tax_label">(ex. VAT)</small>
                                            </td>
                                        </tr>
                                    </tbody> -->
                                    <tfoot>
                                        <tr class="cart-subtotal">
                                            <th>Subtotal</th>
                                            <td>
                                                <span class="woocommerce-Price-amount amount subtotal"><bdi>
                                                    <span class="woocommerce-Price-currencySymbol">₹</span>
                                                    <span id="subtotal"><?php echo $totals; ?></bdi></span>
                                                </span> 
                                                    <small class="tax_label"></small>
                                            </td>
                                        </tr>
                                        <tr class="tax-rate tax-rate-in-cgst-9-1">
                                            <th>CGST (9%)</th>
                                            <td><span class="woocommerce-Price-amount amount cgst">
                                                <span class="woocommerce-Price-currencySymbol">₹</span>
                                                <?php echo $cgst; ?></span>
                                            </td>
                                        </tr>
                                        <tr class="tax-rate tax-rate-in-sgst-9-2">
                                            <th>SGST (9%)</th>
                                            <td><span class="woocommerce-Price-amount amount sgst">
                                                <span class="woocommerce-Price-currencySymbol">₹</span>
                                                <?php echo $sgst; ?>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr class="order-total">
                                            <th>Total</th>
                                            <td><strong><span class="woocommerce-Price-amount amount total"><bdi>
                                                <span class="woocommerce-Price-currencySymbol">₹</span>
                                                <span id="_totalValue"><?php echo $total; ?></span></bdi></span></strong> 
                                            </td>
                                        </tr>
                                        <tr class="order-total" id="discount" style="display:none;">
                                            <th>Coupon Discount</th>
                                            <td><strong>
                                                    <span class="woocommerce-Price-amount amount"><bdi>
                                                    <span class="woocommerce-Price-currencySymbol">₹</span>
                                                    <span id="_discount"></span></bdi></span>
                                                </strong> 
                                            </td>
                                        </tr>
                                        <tr class="order-total" id="payable" style="display:none;">
                                            <th>Payable</th>
                                            <td><strong><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">₹</span><span id="_payable"></span></bdi></span></strong> </td>
                                        </tr>
                                        <!-- Apply coupon code -->
                                        <!-- <tr>
                                                <th></th>
                                                <td> </td>
                                            </tr>

                                            <tr>
                                                <th>Coupon code</th>
                                                <td></td>

                                                <tr>
                                                    <td class="noBorder">Coupon code</td>
                                                    <td class="noBorder"></td>
                                                </tr>

                                            </tr> -->

                                    </tfoot>
                                </table>
                                <div class="text-center divider-40">
                                    <form method="POST" name="easebuzz-form" id="easebuzz-form" action="<?php echo base_url('easebuzz_pay'); ?>">
                                        <input type="hidden" name="api_name" value="initiate_payment" />
                                        <input type="hidden" name="course_id" id="course_id" value="<?php echo $course_id; ?>" />
                                        <input type="hidden" name="course_name" id="course_name" value="<?php echo $course_name; ?>" />
                                        <input type="hidden" name="sub_course_id" id="sub_course_id" value="<?php echo $sub_course_id; ?>" />
                                        <input type="hidden" name="sub_course_name" id="sub_course_name" value="<?php echo $sub_course_name; ?>" />
                                        <input type="hidden" name="mobile" id="mobile" value="<?php echo $mobile; ?>" />
                                        <input type="hidden" id="txnid" name="txnid" value="<?php echo $txnid; ?>" />

                                        <input type="hidden" name="productinfo" id="productinfo" value="<?php echo $course_name; ?>" />
                                        <input type="hidden" name="batch" id="batch" value="<?php echo $batch; ?>" />
                                        <input type="hidden" name="surl" id="surl" value="<?php echo $surl; ?>" />
                                        <input type="hidden" name="furl" id="furl" value="<?php echo $furl; ?>" />

                                        <input type="hidden" name="firstname" id="firstname" value="<?php echo $card_holder_name; ?>" />
                                        <input type="hidden" name="phone" id="phone" value="<?php echo $mobile; ?>" />
                                        <input type="hidden" name="email" id="email" value="<?php echo $email; ?>" />
                                        <input type="hidden" name="address1" id="address1" value="<?php echo $address1; ?>" />
                                        <input type="hidden" name="address2" id="address2" value="<?php echo $address2; ?>" />
                                        <input type="hidden" name="city" id="city" value="<?php echo $city_name; ?>" />
                                        <input type="hidden" name="zipcode" id="zipcode" value="<?php echo $pincode; ?>" />
                                        <input type="hidden" name="amount" id="amount" value="<?php echo $total; ?>" />
                                        <input type="hidden" name="batch" id="batch" value="<?php echo $batch; ?>" />

                                        <div class="row">
                                            <div class="col-6 text-right">
                                                <button type="reset" class="btn btn-common btn-sm text-white mr-4" onclick="razorpayCancel(this);" value="cancel">Cancel</button>
                                            </div>
                                            <div class="col-6 text-left">
                                                <button class="btn btn-common btn-sm text-white" id="pay-btn" type="submit"> Pay now</button>
                                            </div>
                                            <div class="col-12 mt-4">
                                                <span style="font-size:10px;line-height:1;"> Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our <a href="https://www.siilc.edu.in/courses/privacy-policy/">privacy policy.</a>
                                                    <?php echo "<br/>";
                                                    ?>
                                                </span>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<script type="text/javascript">

      
$("#couponApply").on('click',function(){
        var coupon = $("#coupon_code").val();
        var phone  = $("#phone").val();
        var price  = "<?php echo $totals;?>";
        if(coupon === ''){
            
            $("#error_lname").text("Please Enter the coupon code");
            $("#error_lname").show(400);

        }else{

            $("#error_lname").hide(400);
            $("#error_lname").text("");

            $.ajax({
                type: "POST",
                data: {coupon:coupon,phone:phone,amt:price},
                url: "<?php echo base_url('Web/checkCouponData');?>",
                success: function(response){
                    var result = eval("(" + response +")");
                    //console.log(result);
                    if(result.status == '0'){

                        $("#error_lname").text(result.msg);
                        $("#error_lname").show(400);

                    }else{

                       // var dataSet = eval("("+ result.data +")");
                        var data = result.data;
                        
                        $("#error_lname").hide(400);
                        $("#error_lname").text();

                        $("#success_alert").text(result.msg);
                        $("#success_alert").show(400);

                        $("#coupon_code").attr('disabled','disabled');
                        $("#couponApply").attr('disabled','disabled');

                        $("#oldRate").text("");
                        $("#oldRate").html("<s>"+price+"</s><br>");
                        
                        $("#newRate").html(data.offerRate+"<br>");
                        $("#discount").html(data.discount+" Coupon value.");

                        
                        $(".product-total").text(data.offerRate);

                        $(".subtotal").text();
                        $(".subtotal").text(data.offerRate);

                        $(".cgst").text();
                        $(".cgst").text(data.cgst);

                        $(".sgst").text();
                        $(".sgst").text(data.sgst);

                        $(".total").text();
                        $(".total").text(data.totalAmt);
                        
                        $("#amount").val(data.totalAmt);
                    }
                }
            });
        }
        
    })


    function loaderClick() {
        console.log("----------------- loader click -----------------");
        $('#preloaderpdf').show();
    }

    function razorpayCancel(el) {
        location.replace("/");
    }

    function isCouponDateValid(sDate, eDate) {
        console.log("Full Date",sDate,eDate)
        sDate = sDate.split('T')[0].split('-');
        eDate = eDate.split('T')[0].split('-');
        let date = new Date();
        if (date.getFullYear() >= parseInt(sDate[0]) && date.getFullYear() <= parseInt(eDate[0])) {

            if (date.getMonth() + 1 >= parseInt(sDate[1]) && date.getMonth() + 1 <= parseInt(eDate[1])) {
                console.log("Start Date", sDate)
                console.log("End Date", eDate)
                console.log("Current Datet",date.getDate(),date.getMonth()+1, typeof(date.getFullYear()))
                console.log("Current Datet",eDate[2].split(' ')[0])

                if (date.getMonth() + 1 < parseInt(eDate[1])) {
                    return true;
                    
                } else if(date.getMonth() + 1 === parseInt(eDate[1]) && date.getDate() <= parseInt(eDate[2].split(' ')[0])) {
                    return true;
                }else{return false;}
            } else {
                return false;
            }
        } else {
            return false;
        }
        // console.log("Start Date",date.getDate())
    }

    function calculateCouponDiscount(type, discount) {
        let total = document.getElementById('_totalValue').innerHTML
        if (type === 1) {
            document.getElementById("_discount").innerHTML = discount.toFixed(2)
            document.getElementById("_payable").innerHTML = (parseFloat(total) - discount).toFixed(2)
            document.getElementById("amount").value = (parseFloat(total) - discount).toFixed(2)
            document.getElementById("discount").style.display = 'table-row'
            document.getElementById("payable").style.display = 'table-row'
            document.getElementById('coupon_code').value = "";

        } else if (type === 2) {
            let _payableDiscount = parseFloat(total) * discount / 100.0;
            document.getElementById("_discount").innerHTML = _payableDiscount + " (" + discount + "%)"
            console.log("Payable", _payable)
            document.getElementById("_payable").innerHTML = (parseFloat(total) - _payableDiscount).toFixed(2)
            document.getElementById("amount").value = (parseFloat(total) - _payableDiscount).toFixed(2)
            document.getElementById("discount").style.display = 'table-row'
            document.getElementById("payable").style.display = 'table-row'
            document.getElementById('coupon_code').value = "";
        } else {
            alert("Coupon code is invalid");
            document.getElementById('coupon_code').value = "";
        }
    }

    function checkBatch(e) {
        e.preventDefault();
        console.log("events", e);
        let val = document.getElementById('batch').value;
        if (val) {
            alert(val);
        } else {
            alert("Coupon Expired !!!");
        }

    }


</script>