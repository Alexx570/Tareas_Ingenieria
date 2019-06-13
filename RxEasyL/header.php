<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SIAITPA | Sistema Administrativo del Instituto Tecnológico de Pabellón de Arteaga</title>
	<link rel="stylesheet" href="<?php echo base_url("bootstrap/css/bootstrap.min.css");?>"/>
	<link rel="stylesheet" href="<?php echo base_url("bootstrap/css/datepicker3.css");?>" />
	<link rel="stylesheet" href="<?php echo base_url("bootstrap/css/styles.css");?>" />
	<link rel="stylesheet" href="<?php echo base_url("bootstrap/font-awesome-4.7.0/css/font-awesome.css");?>" />
	<script src="<?php echo base_url(); ?>jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>


	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#">Sistema de Administrativo del Instituto Tecnológico de Pabellón de Arteaga</a>
				<ul class="nav navbar-top-links navbar-right">
					
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="images/user.png" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name"><?php echo $_SESSION['nombre'];?> <?php echo $_SESSION['apellido_p'];?></div>
				<!-- <div class="profile-usertitle-status">Estudiante</div> -->
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<ul class="nav menu">
			<li class="parent "><a data-toggle="collapse" href="#sub-item-1">
				<em class="fa fa-user">&nbsp;</em>Usuarios <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li><a class="" href="<?=base_url().'index.php/Admin/';?>">
						<span class="fa fa-arrow-right">&nbsp;</span> Lista de Usuarios </a></li>
					<li><a class="" href="<?=base_url().'index.php/Admin/agregarusuario';?>">
						<span class="fa fa-user-plus">&nbsp;</span> Agregar Usuarios </a></li>
				<li><a class="" href="<?=base_url().'index.php/Admin/editarusuarios';?>">
						<span class="fa fa-pencil">&nbsp;</span> Editar Usuarios </a></li>
					
					

				</ul>
			</li>
			<li class="parent "><a data-toggle="collapse" href="#sub-item-2">
				<em class="fa fa-book">&nbsp;</em>Catálogos <span data-toggle="collapse" href="#sub-item-2" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-2">
						<li><a class="" href="<?=base_url().'index.php/Admin/areas';?>">
						<span class="fa fa-arrow-right">&nbsp;</span> Áreas </a></li>
					<li><a class="" href="<?=base_url().'index.php/Admin/tiposdesolicitud';?>">
						<span class="fa fa-arrow-right">&nbsp;</span> Tipos de Solicitud </a></li>
					<li><a class="" href="<?=base_url().'index.php/Admin/areaseventos';?>">
						<span class="fa fa-arrow-right">&nbsp;</span> Áreas de Eventos </a></li>
					<li><a class="" href="<?=base_url().'index.php/Admin/tipossolicitudeventos';?>">
						<span class="fa fa-arrow-right">&nbsp;</span> Tipos de Solicitud de Eventos </a></li>
					<li><a class="" href="<?=base_url().'index.php/Admin/mediosdecomunicacion';?>">
						<span class="fa fa-arrow-right">&nbsp;</span> Tipos de Medios de Comunicación </a></li>

					
					

				</ul>
			</li>
			<li><a href="<?=base_url().'index.php/login/logout_ci';?>"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active"></li>
			</ol>
		</div><!--/.row-->