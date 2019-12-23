<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Registration - Gravity 2019</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="colorlib.com">

	<!-- BOOTSTRAP -->
	<link rel="stylesheet" href="assets/css/bootstrap341.css">
	<link rel="stylesheet" href="assets/css/datepicker.css">


	<!-- STYLE CSS -->
	<link rel="stylesheet" href="assets/css/style.css">

	<!-- FONTAWESOME -->
	<link rel="stylesheet" href="assets/css/font-awesome.css">

	<!-- SWAL -->
	<script src="assets/js/sweetalert2.min.js" charset="utf-8"></script>
	<link rel="stylesheet" href="assets/css/sweetalert2.min.css" id="theme-styles">
</head>

<body>
	<div class="loader-mask" style="display:none">
		<div class="loader">
			<div class="lds-facebook"><div></div><div></div><div></div></div>
			<h4>Please wait..</h4>
		</div>
	</div>
	<input type="hidden" name="base_url" value="<?= base_url(); ?>">
