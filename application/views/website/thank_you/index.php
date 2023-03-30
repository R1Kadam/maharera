<body class="bg-light">
	<div class="divider-80"></div>
	<div class="container my-5 px-5 text-center border card bg-white p-4">
		<!-- <div class="divider-80"></div> -->
		<br />

		<div class="row">
			<div class="col-12 text-center">
				<img src="<?php echo base_url(); ?>/assets/images/siilclogo1.jpg" alt="Maharera" height="420" width="420">
				<h1 class="mt-4"> Thank You ! </h1>
				<h3>You have registered successfully.</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-6 text-center m-auto divider-60">
				<button type="reset" class="btn btn-common btn-sm text-white mr-4" onclick="razorpayCancel(this);" value="cancel">Go to home</button>
			</div>
		</div>
		<div class="divider-80"></div>
	</div>


	<script type="text/javascript">
        function razorpayCancel(el) {
            location.replace("/");
        }

    </script>