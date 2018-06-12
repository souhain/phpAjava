<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Principal</title>

	    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/estilo.css" rel="stylesheet">
    <link href="css/tables.css"  rel="stylesheet">

    <script src="javascript/jquery.min.js" type="text/javascript"></script>
    <script src="javascript/script.js" type="text/javascript"></script>

   
  </head> 

  <body background="imagenes/fondo8.jpg">
  <?php 
session_start();
ob_start();
    if(isset($_SESSION['btn']))//Verifico que el boton "iniciar sesion" fue oprimido
    {
      if ($_SESSION['usuario']  != 'admin') {
       header('Location:usuario.php');
      }
    }
      else
      { 
        header('Location:index.php');
    } 
 ?>


    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <!--barra de menu boton derecho y cerrado de secion-->
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <span class="glyphicon glyphicon-user"></span>&nbsp; Administrador<b class="caret"></b></a>
                <ul class="dropdown-menu">
                 <li >
                 <form action="destruir_sesion.php" method="post">
                  <a><span class="glyphicon glyphicon-off"></span> Cerrar secion</a>
                  </form>
                    </li>
                  </ul>
                </li>
              </ul>
           </div>
      </div>
    </nav>
    <!--Barra literal izquierda-->
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="admin.php"><span class="glyphicon glyphicon-search"></span>&nbsp;Buscar</a></li>
            <li><a href="p1.php"><span class="glyphicon glyphicon-user"></span>&nbsp; Admin. Usuarios</a></li>
            <li><a href="p2.php"><span class="glyphicon glyphicon-equalizer"></span>&nbsp; Tipo de Unidad</a></li>
            <li><a href="p3.php"><span class="glyphicon glyphicon-wrench"></span>&nbsp; Tipo de Utilizacion</a>
            <li><a href="javascript:;" data-toggle="collapse" data-target="#demo"> <span class="glyphicon glyphicon-book"></span>&nbsp; Catalogos<b class="caret"></b></a>
                  <ul id="demo" class="collapse">
                    <li>
                        <a href="eq.php"><span class="glyphicon glyphicon-wrench"></span>&nbsp; Equipo</a>
                          </li>
                            <li>
                                <a href="he.php"><span class="glyphicon glyphicon-cog"></span>&nbsp; Herramientas</a>
                            </li>
                            <li>
                                <a href="ma.php"><span class="glyphicon glyphicon-home"></span>&nbsp; Materiales</a>
                            </li>
                        </ul>
                    </li>
                    <li>
            <li><a href="p4.php"><span class="glyphicon glyphicon-compressed"></span>&nbsp; Obras</a></li>
            <li><a href="p5.php"><span class="glyphicon glyphicon-home"></span>&nbsp; Bodega</a></li>
            </li>
          </ul>
        </div>
        <!--titulo principal-->
        <div class="col-sm-7 col-sm-offset-2 col-md-10 col-md-offset-2 main">
          <center><h1>BIENVENIDO</h1></center>
          <br><br><br><br><br><br>
          
         <!--buscador-->
          <div class="col-sm-5 col-sm-offset-2 col-md-9 col-md-offset-1 main"> 
          <div><form class="navbar-form navbar-right" role="search">
                  <div class="form-group">
                  <input  id="nombre" name="nombre" required type="text" onkeyup="cargar()" class="form-control" placeholder="Buscar..." size="85%">
                  </div>
                </form>
              </div>
        </div>
        <div id="mostrardatos"> 

        

        <!--tabla-->
         
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
