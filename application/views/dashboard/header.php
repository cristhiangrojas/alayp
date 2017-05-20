<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>::.. DASHBOARD ..::</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" href="<?php echo base_url(); ?>external/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>external/css/AdminLTE.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>external/css/skins/_all-skins.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>external/plugins/iCheck/flat/blue.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>external/plugins/morris/morris.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>external/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>external/plugins/datepicker/datepicker3.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>external/plugins/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>external/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>external/plugins/datatables/dataTables.bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>external/plugins/clockpicker/bootstrap-clockpicker.min.css">
	
	<link rel="stylesheet" href="<?php echo base_url(); ?>external/css/events.css">
	<link rel="icon" type="image/png"  href="<?php echo base_url(); ?>external/img/favicon.png">
	<script src="<?php echo base_url() ?>external/plugins/jQuery/jquery-2.2.3.min.js"></script>
	<script src="<?php echo base_url() ?>external/js/skills.js"></script>
	<script src="<?php echo base_url() ?>external/js/events.js"></script>
	<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>


<link rel="stylesheet" href="<? echo base_url() ?>external/plugins/select2/select2.min.css">
<script type="text/javascript" src="<? echo base_url() ?>external/plugins/select2/select2.min.js"></script>
<script src="<?php echo base_url(); ?>external/plugins/fileinput/fileinput.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>external/plugins/fileinput/themes/explorer/theme.js" type="text/javascript"></script>

<link href="<?php echo base_url(); ?>external/plugins/fileinput/themes/explorer/theme.css" media="all" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>external/plugins/fileinput/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
	
</head>
<body class="hold-transition skin-blue sidebar-mini">
<script>
	var base_url = "<?php echo base_url() ?>";
</script>
<div class="wrapper">

	<header class="main-header">
		<a href="<?php echo base_url() ?>administrador/dashboard" class="logo">
			<span class="logo-mini"><b>ADM</b></span>
			<span class="logo-lg"><b>ADMIN</b></span>
		</a>
		<nav class="navbar navbar-static-top">
			<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
				<span class="sr-only">Toggle navigation</span>
			</a>

			<div class="navbar-custom-menu">
				<ul class="nav navbar-nav">
					
					<li class="dropdown user user-menu">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<img src="<?php echo base_url(); ?>external/img/avatar5.png" class="user-image" alt="User Image">
							<?php 
								if($this->session->userdata('is_logued_in') == true)
								{
									?>
										<span class="hidden-xs"><?php echo $this->session->nombres; ?></span>
									<?php
								}else{
									echo " ";
								}
							?>
						</a>
						<ul class="dropdown-menu">
							<li class="user-header">
								<img src="<?php echo base_url(); ?>external/img/avatar5.png" class="img-circle" alt="User Image">

								<?php 
									if($this->session->userdata('is_logued_in') == true)
									{
										?>
											<p>
												<?php echo $this->session->nombres; ?>
												<?php 
													if ($this->session->id_rol == 1) 
													{
														?>
															<small>Administrador</small>
														<?php
													}else{
														echo "";
													}
												?>
											</p>
										<?php
									}else{
										echo " ";
									}
								?>
							</li>
							<li class="user-footer">
								<div class="pull-left">
									<a href="#" class="btn btn-default btn-flat">Perfil</a>
								</div>
								<div class="pull-right">
									<a href="<?php echo base_url() ?>administrador/dashboard/logout" class="btn btn-default btn-flat">Cerrar Sesión</a>
								</div>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
	</header>
	<aside class="main-sidebar">
		<section class="sidebar">
			<div class="user-panel">
				<div class="pull-left image">
					<img src="<?php echo base_url(); ?>external/img/avatar5.png" class="img-circle" alt="User Image">
				</div>
				<div class="pull-left info">
					<?php 
						if($this->session->userdata('is_logued_in') == true)
						{
							?>
								<p><?php echo $this->session->nombres; ?></p>
								<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
							<?php
						}else{
							echo " ";
						}
					?> 
				</div>
			</div>
			
			<ul class="sidebar-menu">
				<li class="header">MENÚ NAVEGACIÓN</li>

				<li><a href="<?php echo base_url() ?>administrador/dashboard"><i class="fa fa-home"></i> <span>Inicio</span></a></li>
				<li class="treeview">
					<a href="#">
						<i class="fa fa-share"></i> <span>Menu</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
					<ul class="treeview-menu">
						<li>
							<a href="aaw"><i class="fa fa-circle-o"></i> Events
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?php echo base_url() ?>administrador/dashboard/events_upcoming"><i class="fa fa-circle-o"></i> Upcoming</a></li>
								<li><a href="<?php echo base_url() ?>administrador/dashboard/events_past"><i class="fa fa-circle-o"></i> Past</a></li>
							</ul>
						</li>
						<li><a href="#"><i class="fa fa-circle-o"></i> Join</a></li>
						<li>
							<a href="aaw"><i class="fa fa-circle-o"></i> Dashboard
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li>
									<a href="#"><i class="fa fa-circle-o"></i> Newsfeed
										<span class="pull-right-container">
											<i class="fa fa-angle-left pull-right"></i>
										</span>
									</a>
									<ul class="treeview-menu">
										<li><a href="<?php echo base_url() ?>administrador/modulos/menu/newsfeed/newsfeed/panel_centro"><i class="fa fa-circle-o"></i> Panel Centro</a></li>
										<li><a href="<?php echo base_url() ?>administrador/modulos/menu/newsfeed/newsfeed/panel_derecha"><i class="fa fa-circle-o"></i> Panel Derecha</a></li>
									</ul>
								</li>
								<li><a href="#"><i class="fa fa-circle-o"></i> Connect</a></li>
								<li>
									<a href="#"><i class="fa fa-circle-o"></i> Migration & Visas
										<span class="pull-right-container">
											<i class="fa fa-angle-left pull-right"></i>
										</span>
									</a>
									<ul class="treeview-menu">
										<li><a href="#"><i class="fa fa-circle-o"></i> Panel Izquierdo</a></li>
										<li><a href="<?php echo base_url() ?>administrador/modulos/menu/migration_visas/migration_visas/panel_centro"><i class="fa fa-circle-o"></i> Panel Centro</a></li>
										<li><a href="<?php echo base_url() ?>administrador/modulos/menu/migration_visas/migration_visas/panel_derecha"><i class="fa fa-circle-o"></i> Panel Derecha</a></li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="fa fa-circle-o"></i> Starting a Business
										<span class="pull-right-container">
											<i class="fa fa-angle-left pull-right"></i>
										</span>
									</a>
									<ul class="treeview-menu">
										<li><a href="#"><i class="fa fa-circle-o"></i> Panel Izquierdo</a></li>
										<li><a href="<?php echo base_url() ?>administrador/modulos/menu/starting_business/starting_business/panel_centro"><i class="fa fa-circle-o"></i> Panel Centro</a></li>
										<li><a href="<?php echo base_url() ?>administrador/modulos/menu/starting_business/starting_business/panel_derecha"><i class="fa fa-circle-o"></i> Panel Derecha</a></li>
									</ul>
								</li>

								<li>
									<a href="#"><i class="fa fa-circle-o"></i> Work & Employability
										<span class="pull-right-container">
											<i class="fa fa-angle-left pull-right"></i>
										</span>
									</a>
									<ul class="treeview-menu">
										<li><a href="<?php echo base_url() ?>administrador/modulos/menu/work_employability/work/panel_derecho"><i class="fa fa-circle-o"></i> Panel Derecha</a></li>
										<li><a href="<?php echo base_url() ?>administrador/modulos/menu/work_employability/work/new_work"><i class="fa fa-circle-o"></i> New Work</a></li>
									</ul>
								</li>

								
								<li>
									<a href="#"><i class="fa fa-circle-o"></i> Civic Life
										<span class="pull-right-container">
											<i class="fa fa-angle-left pull-right"></i>
										</span>
									</a>
									<ul class="treeview-menu">
										<li><a href="#"><i class="fa fa-circle-o"></i> Panel Izquierdo</a></li>
										<li><a href="<?php echo base_url() ?>administrador/modulos/menu/civil_life/civil_life/panel_centro"><i class="fa fa-circle-o"></i> Panel Centro</a></li>
										<li><a href="<?php echo base_url() ?>administrador/modulos/menu/civil_life/civil_life/panel_derecha"><i class="fa fa-circle-o"></i> Panel Derecha</a></li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="fa fa-circle-o"></i> Study
										<span class="pull-right-container">
											<i class="fa fa-angle-left pull-right"></i>
										</span>
									</a>
									<ul class="treeview-menu">
										<li><a href="#"><i class="fa fa-circle-o"></i> Panel Izquierdo</a></li>
										<li><a href="<?php echo base_url() ?>administrador/modulos/menu/study/study/panel_centro"><i class="fa fa-circle-o"></i> Panel Centro</a></li>
										<li><a href="<?php echo base_url() ?>administrador/modulos/menu/study/study/panel_derecha"><i class="fa fa-circle-o"></i> Panel Derecha</a></li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="fa fa-circle-o"></i> Traveling
										<span class="pull-right-container">
											<i class="fa fa-angle-left pull-right"></i>
										</span>
									</a>
									<ul class="treeview-menu">
										<li><a href="#"><i class="fa fa-circle-o"></i> Panel Izquierdo</a></li>
										<li><a href="<?php echo base_url() ?>administrador/modulos/menu/traveling/traveling/panel_centro"><i class="fa fa-circle-o"></i> Panel Centro</a></li>
										<li><a href="<?php echo base_url() ?>administrador/modulos/menu/traveling/traveling/panel_derecha"><i class="fa fa-circle-o"></i> Panel Derecha</a></li>
									</ul>
								</li>
								<li><a href="#"><i class="fa fa-circle-o"></i> Forum</a></li>
								
							</ul>
						</li>
					</ul>
				</li>
				<li class="treeview">
					<a href="#">
						<i class="fa fa-users"></i>
						<span>Usuarios</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
					<ul class="treeview-menu">
						<li><a href="#"><i class="fa fa-circle-o"></i> Profesional</a></li>
						<li><a href="#"><i class="fa fa-circle-o"></i> Empresario</a></li>
					</ul>
				</li>
				<!-- <li><a href="<?php echo base_url() ?>administrador/dashboard"><i class="fa fa-gears"></i> <span>Configuración</span></a></li> -->
				<li class="treeview">
					<a href="#">
						<i class="fa fa-share"></i> <span>Configuración</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
					<ul class="treeview-menu">
						<li><a href="<?php echo base_url() ?>administrador/dashboard/skills"><i class="fa fa-circle-o"></i> Skills</a></li>
						<li><a href="<?php echo base_url() ?>administrador/dashboard/interest"><i class="fa fa-circle-o"></i> Interest</a></li>
						<li><a href="<?php echo base_url() ?>administrador/dashboard/countries"><i class="fa fa-circle-o"></i> Countries</a></li>
						<li><a href="<?php echo base_url() ?>administrador/dashboard/industry"><i class="fa fa-circle-o"></i> Industry</a></li>
						<li><a href="<?php echo base_url() ?>administrador/dashboard/languages"><i class="fa fa-circle-o"></i> Languages</a></li>
						<li><a href="<?php echo base_url() ?>administrador/dashboard/educational_background"><i class="fa fa-circle-o"></i> Educational Background</a></li>
					</ul>
				</li>
				<li><a href="<?php echo base_url() ?>administrador/dashboard"><i class="fa fa-tv"></i> <span>Sitio Web</span></a></li>
				<li><a href="<?php echo base_url() ?>administrador/dashboard/logout"><i class="fa fa-power-off"></i> <span>Salir</span></a></li>

			</ul>
		</section>
	</aside>