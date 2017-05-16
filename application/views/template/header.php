<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>::.. ALAYP ..::</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="<?php echo base_url() ?>external/css/font-awesome.min.css" rel="stylesheet">	
	<link href="<?php echo base_url() ?>external/css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>external/css/estilos_general.css?<? echo strtotime(date('Y-m-d H:i:s')); ?>" rel="stylesheet">
	<link href="<?php echo base_url() ?>external/css/connect.css?<? echo strtotime(date('Y-m-d H:i:s')); ?>" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="<?php echo base_url() ?>external/js/events.js"></script>
</head>
<body>
	<script type="text/javascript">var base_url = '<? echo base_url(); ?>';</script>
	<?php 
	/*echo "<pre>";
	var_dump($_SESSION);
	echo "</pre>";*/
	 ?>
	<header id="menu">
		<div class="container pt-4 cabecera">
		  	<div class="row equal_row">
		    	<div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 py-2">
		    		<a href="<?php echo base_url() ?>home">
		    			<img src="<?php echo base_url() ?>external/img/logo.jpg" alt="Logo" class="img-responsive" style="margin: 0 auto;">
		    		</a>
		    	</div>
		    	<div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 py-2">
					<div class="input-group center_vertical_relative">
						<input type="text" class="form-control" id="input_buscar" placeholder="Search">
						<div class="input-group-addon"><span class="glyphicon glyphicon-search" aria-hidden="true" style="color:#fff;"></span></div>
					</div><br />
		    	</div>
		    	<div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 py-2">
					<div class="center_vertical_relative text-center">
		    		<?php if (is_logued()): ?>
							<div class="profile_icon"><i class="fa fa-user"></i></div>
							<div class="name_profile"><? echo $_SESSION['nombres'] ?></div>
		    		<?php else: ?>
		    			<a href="<? echo base_url() ?>login" class="btn btn-primary pull-right bottom" style="">Sign In</a>
		    		<?php endif ?>
					</div>	    			
		    	</div>
		  	</div>
		</div>
		
		<div class="container-fluid fondo_menu">
			<div class="container">
				<!-- Navbar -->
				<div class="navbar navbar-default" role="navigation">
				  <div class="navbar-header">
				    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				      <span class="sr-only">Toggle navigation</span>
				      <span class="icon-bar"></span>
				      <span class="icon-bar"></span>
				      <span class="icon-bar"></span>
				    </button>
				    <a class="navbar-brand" href="#"></a>
				  </div>
				  <div class="navbar-collapse collapse">
				    <!-- Left nav -->
				    <ul class="nav navbar-nav">
				      <li class="active"><a href="<?php echo base_url() ?>home">HOMEEE</a></li>
				      <li><a href="<?php echo base_url() ?>home/about">ABOUT ALAYP </a>
				        <ul class="dropdown-menu">
				          <li><a href="#">TEAM</a></li>
				          <li><a href="#">CHAPTERS</a>
				            <ul class="dropdown-menu">
				              <li><a href="<?php echo base_url() ?>home/brisbane">Brisbane</a></li>
				              <li><a href="<?php echo base_url() ?>home/perth">Perth</a></li>
				              <li><a href="<?php echo base_url() ?>home/santiago">Santiago</a></li>
				              <li><a href="<?php echo base_url() ?>home/buenos_aires">Buenos Aires</a></li>
				            </ul>
				          </li>
				        </ul>
				      </li>
				      <li><a href="<?php echo base_url() ?>home/events">EVENTS </a>
				        <ul class="dropdown-menu">
				          <li><a href="<?php echo base_url() ?>home/upcoming">UPCOMING</a></li>
				          <li><a href="<?php echo base_url() ?>home/past">PAST</a></li>
				        </ul>
				      </li>
				      <li><a href="<?php echo base_url() ?>home/join">JOIN</a></li>
				      <li><a href="#">DASHBOARD</a></li>
				    </ul>
				  </div><!--/.nav-collapse -->
				</div>
			</div>
		</div>
		<?php if (is_logued()): ?>
			<div class="container-fluid fondo_menu_acceso">
				<div class="container">
					<!-- Navbar -->
					<div class="navbar navbar-default" role="navigation">
					  <!--<div class="navbar-header">
					    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					      <span class="sr-only">Toggle navigation</span>
					      <span class="icon-bar"></span>
					      <span class="icon-bar"></span>
					      <span class="icon-bar"></span>
					    </button>
					    <a class="navbar-brand" href="#"></a>
					  </div>!-->
					  <div class="navbar-collapse collapse">
					    <!-- Left nav -->
					    <ul class="nav navbar-nav">
					      	<li><a href="<?php echo base_url() ?>newsfeed">NEWSFEED</a></li>
					      	<li><a href="<? echo base_url() ?>connect">CONNECT</a></li>
					      	<li><a href="<?php echo base_url() ?>migration_visas">MIGRATION  &  VISAS</a></li>
					      	<li><a href="<?php echo base_url() ?>starting">STARTING A BUSINESS</a></li>
					      	<li><a href="<?php echo base_url() ?>work_employability">WORK & EMPLOYABILITY</a></li>
					      	<li><a href="<?php echo base_url() ?>civic_life">CIVIC LIFE</a></li>
					      	<li><a href="<?php echo base_url() ?>study">STUDY</a></li>
					      	<li><a href="<?php echo base_url() ?>traveling">TRAVELING</a></li>
					      	<li><a href="<?php echo base_url() ?>forum">FORUM</a></li>
					    </ul>
					  </div><!--/.nav-collapse -->
					</div>
				</div>
			</div>
		<?php endif ?>
	</header>