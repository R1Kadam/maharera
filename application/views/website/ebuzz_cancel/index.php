<style>
    .payment
	{
		border:1px solid #c1c1c1;
		height:100%;
        border-radius:20px;
        background:#fff;
	}
   .payment_header
   {
	   background:#f5a609;
	   padding:20px;
     border-radius:20px 20px 0px 0px;
	   
   }
   
   .paymentcheck
   {
	   margin:0px auto;
	   width:50px;
	   height:50px;
	   border-radius:100%;
	   background:#fff;
	   text-align:center;
   }
   
   .paymentcheck i
   {
	   vertical-align:middle;
	   line-height:50px;
	   font-size:30px;
   }

    .paymentcontent 
    {
        text-align:center;
    }

    .paymentcontent  h1
    {
        font-size:25px;
        padding-top:25px;
    }

    .paymentcontent a
    {
        width:90%;
        height:35px;
        color:#fff;
        display: inline;;
        border-radius:30px;
        padding:10px 60px;
        background: #090761;
        transition:all ease-in-out 0.3s;
    }

    .paymentcontent a:hover
    {
        text-decoration:none;
        background:#090761;
    }
    .downloadButton{
        width:90%;
        height:35px;
        display: inline;;
        color:#fff !important;
        border-radius:30px;
        padding:5px 10px;
        background: #090761;
        transition:all ease-in-out 0.3s;
    }
</style>
<div class="divider-80"></div>
<?php
$Paymentcancelled ="Payment cancelled !";
$cancelled_message ="We were unable to process your last payment. If your account has been debited then the status might take up to 2 working days to be updated or the money will be refunded automatically in 5-7 working days. Don't Worry! <br/>";
$orderID = "Order id";
$gotohome = "Go to home ";
?>
<section id="event-payment-Success" class="section-padding">
      <div class="container">
                <div class="row p-3">
                    <div class="col-12 col-md-10 col-lg-10 mx-auto">
                    <div class="payment">
                        <div class="payment_header">
                            <div class="paymentcheck" style="color:red;"><i class="fa fa-exclamation-circle" aria-hidden="true"></i></div>
                        </div>
                        <div class="paymentcontent">
                            <h1 style="color:red;"> <?php echo $Paymentcancelled; ?> </h1>
                            <p> <?php echo $cancelled_message; ?></p>
                            <div class="row pl-2 mt-3">
                                <div class="col-12"><?php echo $orderID; ?> : <span><?php echo $this->session->flashdata('ebuzz_payid'); ?></span>
                            </div>
                            </div>

                            <div class="row pl-2 mt-5">
                                <div class="col-12 mx-auto mb-5">
                                     <a  class="btn downloadButton" style="background-color:f5a609;"onclick="backToHome(this);"><?php echo $gotohome; ?> </a>
                                </div>

                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>

        </div>
    </section>

    <script type="text/javascript">
        function backToHome(el) {
            location.replace("/");
        }

        
    </script>
