<!DOCTYPE html>

<html lang="en">



<head>

	<meta charset="utf-8" />

	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/logo.png">

	<link rel="icon" type="image/png" href="assets/img/logo.png">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>

		Gravity 2019

	</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

	<!--     Fonts and icons     -->

	<link href="assets/css/fonts.css" rel="stylesheet" />
	<link href="assets/css/font-awesome.css" rel="stylesheet" />
	<!-- CSS Files -->

	<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />

	<link href="assets/css/admin.css" rel="stylesheet" />

	<!-- CSS Just for demo purpose, don't include it in your project -->

	<link href="assets/demo/demo.css" rel="stylesheet" />


	<script src="assets/js/sweetalert2.min.js" charset="utf-8"></script>
	<link rel="stylesheet" href="assets/css/sweetalert2.min.css" id="theme-styles">


</head>



<body class="">

	<div class="wrapper ">

		<div class="sidebar" data-color="white" data-active-color="danger">

			<!--

        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"

    -->

			<div class="logo">

				<a href="<?= base_url(); ?>" class="simple-text logo-mini">

					<div class="logo-image-small">

						<img src="assets/img/logo.png">

					</div>

				</a>

				<a href="<?= base_url(); ?>" class="simple-text logo-normal">

					Gravity 2019

				</a>

			</div>

			<div class="sidebar-wrapper">

				<ul class="nav">

					<li class="<?= ($this->router->fetch_class() == 'admin') ? 'active' : '' ?> ">

						<a href="<?= base_url('admin') ?>">

							<i class="nc-icon nc-single-02"></i>

							<p>Campers</p>

						</a>

					</li>

					<li class="<?= ($this->router->fetch_class() == 'groups') ? 'active' : '' ?> ">
						<a href="<?= base_url('groups') ?>">
							<i class="nc-icon nc-bullet-list-67"></i>
							<p>Groups</p>
						</a>
					</li>

					<li class="<?= ($this->router->fetch_class() == 'printid') ? 'active' : '' ?> ">
						<a href="<?= base_url('printid') ?>">
							<i class="nc-icon nc-camera-compact"></i>
							<p>Print ID</p>
						</a>
					</li>
				</ul>

			</div>

		</div>

		<div class="main-panel">

			<!-- Navbar -->

			<nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">

				<div class="container-fluid">

					<div class="navbar-wrapper">

						<div class="navbar-toggle">

							<button type="button" class="navbar-toggler">

								<span class="navbar-toggler-bar bar1"></span>

								<span class="navbar-toggler-bar bar2"></span>

								<span class="navbar-toggler-bar bar3"></span>

							</button>

						</div>

						<a class="navbar-brand" href="#pablo">Campers</a>

					</div>

					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">

						<span class="navbar-toggler-bar navbar-kebab"></span>

						<span class="navbar-toggler-bar navbar-kebab"></span>

						<span class="navbar-toggler-bar navbar-kebab"></span>

					</button>

					<div class="collapse navbar-collapse justify-content-end" id="navigation">

						<ul class="navbar-nav">

							<li class="nav-item btn-rotate dropdown">

								<a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

									<i class="nc-icon nc-settings-gear-65"></i>

									<p>

										<span class="d-lg-none d-md-block">Account</span>

									</p>

								</a>

								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">

									<!-- <a class="dropdown-item" href="#">Change Password</a>
 -->
									<a class="dropdown-item" href="<?= base_url('admin/logout') ?>">Logout</a>

								</div>

							</li>

						</ul>

					</div>

				</div>

			</nav>

			<div class="content">

				<input type="hidden" id="base_url" value="<?= base_url(); ?>">
