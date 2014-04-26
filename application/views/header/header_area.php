<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <base href="<?php echo base_url();  ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard - Sistema Activo Fijo</title>


    <!-- Bootstrap core CSS -->
     <link href="<?php echo base_url().'seteo/css/bootstrap.css';  ?>" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="<?php echo base_url().'seteo/css/sb-admin.css'; ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url().'seteo/font-awesome/css/font-awesome.min.css'; ?>">
    <!-- Page Specific CSS -->
    <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
  </head>

 <body>

    <div id="wrapper">


     <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">Sistema AF</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li><a href="<?php echo base_url().'direccion/hrefini'; ?>"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li><a href="<?php echo base_url().'direccion/hrefaf'; ?>"><i class="fa fa-edit"></i> Activo Fijo</a></li>
            <li><a href="<?php echo base_url().'direccion/hrefb'; ?>"><i class="fa fa-edit"></i> Baja de AF</a></li>
            <li><a href="<?php echo base_url().'form/index'; ?>"><i class="fa fa-edit"></i> Empleados</a></li>
            <li><a href="<?php echo base_url().'direccion/hrefp'; ?>"><i class="fa fa-edit"></i> Proveedores</a></li>
            <li><a href="<?php echo base_url().'direccion/hrefd'; ?>"><i class="fa fa-edit"></i> Depreciacion</a></li>
            <li><a href="<?php echo base_url().'direccion/hrefc'; ?>"><i class="fa fa-edit"></i> Cuentas</a></li>
            <li><a href="<?php echo base_url().'direccion/hrefsucur'; ?>"><i class="fa fa-edit"></i></i> Sucursales</a></li>
            <li class="active"><a href="<?php echo base_url().'direccion/hrefarea'; ?>"><i class="fa fa-edit"></i> Areas</a></li>
            <li><a href="<?php echo base_url().'direccion/hreft'; ?>"><i class="fa fa-edit"></i> TrasladoAF</a></li>
            <li><a href="<?php echo base_url().'direccion/hrefs'; ?>"><i class="fa fa-edit"></i> Saldos</a></li>
            <li><a href="<?php echo base_url().'direccion/hrefr'; ?>"><i class="fa fa-edit"></i> Reportes</a></li>
            <li><a href="<?php echo base_url().'direccion/hrefs'; ?>"><i class="fa fa-wrench"></i> Settings</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i> Dropdown <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Dropdown Item</a></li>
                <li><a href="#">Another Item</a></li>
                <li><a href="#">Third Item</a></li>
                <li><a href="#">Last Item</a></li>
              </ul>
            </li>
          </ul>

          <ul class="nav navbar-nav navbar-right navbar-user">
            <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i><?php echo(isset($nombre_usuario)&&$nombre_usuario!=false)?'Bienvenido:'.$nombre_usuario['nombre_usuario']:'' ?><b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                <li><a href="#"><i class="fa fa-envelope"></i> Inbox <span class="badge">7</span></a></li>
                <li><a href="#"><i class="fa fa-gear"></i> Settings</a></li>
                <li class="divider"></li>
                <li><a href="#"><i class="fa fa-power-off"></i> Log Out</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>
     <div id="page-wrapper">