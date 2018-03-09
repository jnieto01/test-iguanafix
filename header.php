<!DOCTYPE html>
<html dir="ltr" lang="es">
<head>
<meta charset="UTF-8" />
<title>Iguanafix</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<script type="text/javascript" src="javascript/jquery/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="javascript/bootstrap/js/bootstrap.min.js"></script>
<link href="stylesheet/bootstrap.css" type="text/css" rel="stylesheet" />
<link href="javascript/font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet" />
<link type="text/css" href="stylesheet/stylesheet.css" rel="stylesheet" media="screen" />
<script src="javascript/common.js" type="text/javascript"></script>


</head>
<body>
<header>
  <div class="container-fluid myheader">
    <div class="container">
      <nav class="navbar">
        <div class="navbar-header">
          <button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"><i class="fa fa-bars fa-2x"></i></button>
          <a class="navbar-brand" href="#"><img src="http://localhost/img/logo.png" alt="iguanafix"  class="img-responsive" /></a>       
          <span class="pull-left hidden-xs hidden-sm"><i class="fa fa-phone"></i> 0810-220-6173</span>
        </div>
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Casa</a></li> 
            <li><a href="#">Auto</a></li>
            <li><a href="#">Empresas</a></li>
            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ingresar <i class="fa fa-user"></i></a>
              <ul class="dropdown-menu dropdown-menu-right">
                <?php $logged = '';
                if ($logged) { ?>
                  <li><a href="#">Opcion 1</a></li>
                  <li><a href="#">Opcion 2</a></li>                
                  <li><a href="#">Salir</a></li>
                <?php } else { ?>
                  <li><a href="#">Ingresar</a></li>
                <?php } ?>
              </ul> 
            </li>   
          </ul>    
        </div>
      </nav>
    </div>
  </div>
</header>