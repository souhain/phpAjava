
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../../favicon.ico">
    
    <script src="javascript/jquery.min.js" type="text/javascript"></script>
    <script src="javascript/script.js" type="text/javascript"></script>
    
    <title>Usuario</title>
  
	<link rel="stylesheet" href="css/tables.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

  
    <link href="css/estilo.css" rel="stylesheet">
    <link href="css/tables.css"  rel="stylesheet">
   
  </head>

  <body background="imagenes/obras.jpg">

  <?php
session_start();  
    if(isset($_SESSION['btn']))//Verifico que el boton "iniciar sesion" fue oprimido
    {
      if ($_SESSION['usuario']  == 'admin') {
       header('Location:admin.php');
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
          <!--Barra de menu-->
          
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <span class="glyphicon glyphicon-user"></span>&nbsp; Administrador<b class="caret"></b></a>
                <ul class="dropdown-menu">
                 <li>
                    <a href="#"><span class="glyphicon glyphicon-off"></span> Cerrar secion</a>
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
        
      </div>
  <div class="col-sm-7 col-sm-offset-2 col-md-8 col-md-offset-2 main">
        <center><h1 class="page-header" aling="justify">BIENVENIDO USUARIO</h1></center>
    <br>
    <br>
    <br>
    
    <div><form class="navbar-form navbar-right" role="search">
  <div class="form-group">
    <input required type="text" id="nombre" onkeyup="cargar()" class="form-control" placeholder="Buscar" size="90%">
  </div>

      <section id="datos">
                   
      </section>
     <div class="col-sm-5 col-sm-offset-2 col-md-9 col-md-offset-10">
                </div>

                </form>

              </div>
        </div>
        <div id="mostrardatos"> 
    
   
    
    
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>

    

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    

    <script src="../../assets/js/vendor/holder.min.js"></script>
  

    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>


  </body>
</html>