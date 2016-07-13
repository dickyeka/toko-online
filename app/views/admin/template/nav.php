<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	
	<title>Admin</title>

	<!-- Font awesome -->

	<link rel="stylesheet" href="<?= asset('css/font-awesome.min.css')?>">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Sandstone Bootstrap CSS -->
	<link rel="stylesheet" href="<?= asset('css/bootstrap.min.css')?>">
	<!-- Bootstrap Datatables -->
	<link rel="stylesheet" href="<?= asset('css/dataTables.bootstrap.min.css')?>">
	<!-- Bootstrap social button library -->
	<link rel="stylesheet" href="<?= asset('css/bootstrap-social.css')?>">
	<!-- Bootstrap select -->
	<link rel="stylesheet" href="<?= asset('css/bootstrap-select.css')?>">
	<!-- Bootstrap file input -->
	<link rel="stylesheet" href="<?= asset('css/fileinput.min.css')?>">
	<!-- Awesome Bootstrap checkbox -->
	<link rel="stylesheet" href="<?= asset('css/awesome-bootstrap-checkbox.css')?>">
	<!-- Admin Stye -->
	<link rel="stylesheet" href="<?= asset('css/style.css')?>">

	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<div class="brand clearfix">
		<a href="<?= url('admin/index')?>" class="logo"><img src="<?= asset('img/logo.png') ?>" class="img-responsive" alt=""></a>
		<span class="menu-btn"><i class="fa fa-bars"></i></span>
		<ul class="ts-profile-nav">
			<li><a href="<?= url('admin/auth/logout') ?>">Logout </a></li>
		</ul>
	</div>

	<div class="ts-main-content">
		<nav class="ts-sidebar">
			<ul class="ts-sidebar-menu">
			
				<li ><a href="<?= url('admin/merchant/index')?>"><i class="fa fa-home"></i> Toko</a></li>
				<li ><a href="<?= url('admin/product/index')?>"><i class="fa fa-ticket"></i> Produk</a></li>
				<li ><a href="<?= url('admin/order/index')?>"><i class="fa fa-shopping-cart"></i> Order</a></li>
				<li ><a href="<?= url('admin/payment/index')?>"><i class="fa fa-money"></i> Pembayaran</a></li>


			</ul>
		</nav>
		<div class="content-wrapper">
			<div class="container-fluid">


