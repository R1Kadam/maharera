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
$Paymentsuccess ="Payment Success !";
$downloadQRCode =" ";
$transaction_id = "Transaction id";
$order_id = "Order id";
$downloadPDF = "Download PDF ";
$note = "Note: do not refresh page";
$gotohome = "Next ";
?>

<section id="event-payment-Success" class="section-padding">
      <div class="container">
                <div class="row p-3">
                    <div class="col-12 col-md-10 col-lg-10 mx-auto">
                    <div class="payment">
                        <div class="payment_header">
                            <div class="paymentcheck" style="color:green;"><i class="fa fa-check" aria-hidden="true"></i></div>
                        </div>
                        <div class="paymentcontent">
                            <h1 style="color:green;"> <?php echo $Paymentsuccess; ?> </h1>
                            <p><?php echo $downloadQRCode; ?> </p>

                            <div class="row mt-4 p-2">
                                <div class="col-12 col-md-2 col-lg-2"></div>
                                <div class="col-6 col-md-2 col-lg-2 text-left"><?php echo $transaction_id; ?> : </div>
                                <div class="col-6"><?php echo $this->session->flashdata('ebuzz_txnid'); ?></div>
                            </div>

                            <div class="row pl-2">
                                <div class="col-12 col-md-2 col-lg-2"></div>
                                <div class="col-6 col-md-2 col-lg-2 text-left"><?php echo $order_id; ?> : </div>
                                <div class="col-6 "><?php echo $this->session->flashdata('ebuzz_payid'); ?> </div>
                            </div>
                            <div class="row pl-2 mt-5 mx-auto">
                                <!-- <div class="col-12 col-md-6 col-lg-6 mt-3">
                                    <a class="btn downloadButton mr-4" onclick="downloadqrcodepdf(this);"><?php echo $downloadPDF; ?> </a>
                                </div> -->
                                <div class="col-12 mt-3">
                                     <a  class="btn downloadButton text-white" style="background-color:f5a609;"onclick="backToHome(this);"> <?php echo $gotohome; ?> </a>
                                </div>
                                <div class="col-12 text-left mt-4">
                                    <span style="font-size:10px;" class="p-2"><span style="color:#c70303;">*</span> <?php echo $note; ?> </span>
                                </div>

                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>

        </div>
    </section>

    <script type="text/javascript">
        let check = "<?php echo $this->session->flashdata('ebuzz_payid') ?>";
        if(!check){
            location.replace("/");
        }
        function downloadqrcodepdf(el) {
            $('#preloaderpdf').show();
            location.replace("/htmltopdf?event_id=");
        }

        function backToHome(el) {
            location.replace("/web/thanks");
        }

        
    </script>
