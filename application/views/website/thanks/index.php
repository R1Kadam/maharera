<body class="bg-light">
<div class="divider-80"></div>

	<style>
		p{
			font-weight: bold;
		}
	</style>
	<div class="container my-5 px-5 text-center border card bg-white p-4">
	<!-- <div class="divider-80"></div> -->
	<br/>

	<div class="row">
		<div class="col-12 text-center">
		<img src="<?php echo base_url();?>/assets/images/siilclogo1.jpg" alt="Maharera" height="420" width="420">
		<h5 class="mt-4">Thank You for booking maharera course</h5>
		<br>
		<p style="font-weight: bold;">
		FOR ANY QUERIES RELATED TO MAHARERA COURSE, CONTACT HELPDESK ON <a href="tel:9130070132">9130070132</a> / <a href="tel:7350001602">7350001602</a> / <a href="tel:8956344475">8956344475</a> </p>
	</div>
	</div>
		<div class="row">
			<div class="col-6 text-center m-auto divider-60">
				<button type="reset" class="btn btn-common btn-sm text-white mr-4" onclick="razorpayCancel(this);" value="cancel" >Go to home</button>
			</div>
		</div>
		<div class="divider-80"></div>
	</div>


	<script type="text/javascript">
        function razorpayCancel(el) {
            location.replace("/");
        }

    </script>