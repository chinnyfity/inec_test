<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

		<title>INEC Polling Unit</title>
		<link rel="shortcut icon" type="image/x-icon" href="<?=base_url();?>assets/images/favicon.png">
		
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
		<link href="<?=base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link href="<?=base_url();?>assets/css/font-awesome.css" rel="stylesheet" type="text/css">
		<link href="<?=base_url();?>assets/css/ionicons.css" rel="stylesheet" type="text/css">
		<link href="<?=base_url();?>assets/css/jquery.fancybox.css" rel="stylesheet" type="text/css">
		
		<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/settings.css">
		<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/layers.css">
		
		<link href="<?=base_url();?>assets/css/layers.css" type="text/css" rel="stylesheet" media="screen">
		<link href="<?=base_url();?>assets/css/owl.carousel.min.css" type="text/css" rel="stylesheet" media="screen">
		
		<link href="<?=base_url();?>assets/css/magnific-popup.css" rel="stylesheet" type="text/css">


		<link href="<?=base_url();?>assets/css/dataTables.bootstrap.min.css" rel='stylesheet' type='text/css' />

  		<link href='<?=base_url();?>assets/css/responsive.bootstrap.min.css' rel='stylesheet' type='text/css'>

		<link href='<?=base_url();?>assets/css/jquery.dataTables.min1.css' rel='stylesheet' type='text/css'>


		<link href="<?=base_url();?>assets/css/style.css" rel="stylesheet">
		<link href="<?=base_url();?>assets/css/header2.css" rel="stylesheet" type="text/css" />
		<link href="<?=base_url();?>assets/css/footer2.css" rel="stylesheet" type="text/css" />
		<link href="<?=base_url();?>assets/css/index2.css" rel="stylesheet" type="text/css" /> <!--main css-->
		<link href="<?=base_url();?>assets/css/theme-color/default.css" rel="stylesheet" type="text/css" id="theme-color" />

		<link href="<?=base_url();?>assets/css/responsive.css" rel="stylesheet" type="text/css" />

		<link rel='stylesheet' href='<?=base_url();?>assets/css/custom-bootstrap-margin-padding.css' type='text/css' media='all' />

		<link href="<?=base_url()?>assets/sweetalert/sweetalert.css" rel="stylesheet" />


		
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="<?=base_url()?>assets/vendor_components/bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/css2/master_style.css">
	

	</head>
	<body class="js-sweetalert">
	<button class="btn btn-primary waves-effect btn_sweet" style="display: none;" data-type="success" data-msg="Result Entered Successfully">CLICK ME</button>








	<div class="modal center-modal fade" id="modal-center" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title font-size-20 lga_names">Burutu</h5>
					<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<p class="sub_title">All polling units in this LGA</p>

				<p class="show_u_details" style="margin-left: 15px; font-size: 15px;"></p>

				<div class="modal-body">
					<div class="data_table"></div>
				</div>


				<div class="modal-footer modal-footer-uniform">
					<button type="button" class="btn btn-bold btn-secondary cmd_close_modal float-right" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>








	

		<input type="hidden" value="<?=base_url();?>" id="txtsite_url">
		<input type="hidden" value="<?=$page_name?>" id="txtpage_name">
		
		<div id="preloader">
			<div class="sk-circle">
				<div class="sk-circle1 sk-child"></div>
				<div class="sk-circle2 sk-child"></div>
				<div class="sk-circle3 sk-child"></div>
				<div class="sk-circle4 sk-child"></div>
				<div class="sk-circle5 sk-child"></div>
				<div class="sk-circle6 sk-child"></div>
				<div class="sk-circle7 sk-child"></div>
				<div class="sk-circle8 sk-child"></div>
				<div class="sk-circle9 sk-child"></div>
				<div class="sk-circle10 sk-child"></div>
				<div class="sk-circle11 sk-child"></div>
				<div class="sk-circle12 sk-child"></div>
			</div>
		</div>

		
		<header id="header" class="header">
			<div class="nav-wrap">
				<div class="reletiv_box">
					<div class="container_">
						<div class="row">

							<div class="col-xl-3 col-lg-2 col-sm-3 d-flex align-items-center pl-40 pl-sm-20 pl-xs-20" style="backgrounds: pink">
								<div class="logo">
									<a href="<?=base_url();?>"><img src="<?=base_url();?>assets/images/logo.png" alt=""></a>
								</div>
								<!-- <button id="menu" class="menu d-md-none d-block"></button> -->
							</div>
							<button id="menu" class="menu d-md-none d-block"></button>

							<div class="col-xl-9 col-lg-6_ col-sm-9 pl-0 nav-bg" style="backgrounds:red">
								<nav class="navigation pl-xs-15 pt-xs-15">
									<ul>
										<li><a href="<?=base_url();?>">Home</a></li>
										<li><a href="<?=base_url();?>enter-results/">Enter Result</a></li>
										<li class="pr-30"><a href="<?=base_url();?>help-center/">Help Center</a></li>
									</ul>

								</nav>
							</div>


						</div>
					</div>
				</div>
			</div>
		</header>
