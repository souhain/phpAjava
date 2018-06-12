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

    <title>Unidad</title>

	    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/estilo.css" rel="stylesheet">
     <link href="css/tabla2.css" rel="stylesheet">

    
  </head>

  <body background="imagenes/fondo1.jpg">

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
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <center><h1 class="page-header">Tipo de Unidad</h1></center>

       <!--formulario-->

<h2>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  Alta Unidad
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  Actualizar Unidad
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  Eliminar Unidad
</h2>
          <hr>



    <form  class="form-group row" method="post" action="">
    <div class="col-xs-4">
     <label  for="exampleInputEmail1">Id Unidad...</label>
     <input  type="text" class="form-control" name="id" placeholder="Id..." size="15%">
   </div>
    <div class="col-xs-4">
     <label for="exampleInputEmail1">ingrese Id o nombre de unidad a actualizar</label>
     <input type="text" class="form-control" name="TXT_Matricula" placeholder="Id o nombre..." size="15%">
   </div>
   <div class="col-xs-4">
     <label  for="exampleInputEmail1">ingrese Id de la unidad a eliminar</label>
     <input  type="text" class="form-control" name="eliminar" placeholder="Id..." size="15%">
   </div>


   
   <br>
   <br>
   <br>
   <br>
  

  <div class="col-xs-4">
    <label for="exampleInputPassword1">Unidad</label>
    <input type="text" class="form-control" name="nombre" placeholder="nombre de unidad...">
  </div>
   <button style="left:12.5%" type="submit" name="button" class="btn btn-info col-xs-1" >Buscar</button>

   <button style="left:37.5%" type="submit" name="delete" class="btn btn-danger col-xs-1" >Eliminar</button>
  
   
   <br>
   <br>
   <br>
   <br>

  <div>
    
    <button style="left:12.1%" type="submit" name="btn" class="btn btn-success col-xs-1" >Alta</button>

      
  </div>
  <div class="col-xs-4"></div>
  <div class="col-xs-4"></div>
  <div>
     <label for="exampleInputPassword1">&nbsp;&nbsp;&nbsp;&nbsp;Unidades existentes</label>
   </div>
   <br>
   <button style="left:79.2%" type="submit" name="unidad" class="btn btn-primary col-xs-1" >Unidades</button>
   
  
<?php

//Todos los usuarios
if(isset($_POST['unidad'])){ 
  include('conexion.php'); 

$Usuarios=mysqli_query($con,"select*from unidad"); 
  
           echo "<table>
      <tr>
      <th><center>Id</center></th>
      <th><center>Nombre</center></th>
      </tr>";

     while($row=mysqli_fetch_array($Usuarios))
        { 
          echo "<tr>";
          echo "<td id='t1'><center>".$row["id_unidad"]."</center></td>";
          echo "<td id='t2'><center>".$row["unidad"]."</center></td>";
           echo "</tr>";
        }
        echo "</table>";
      }  



//INSERTAR
if(isset($_POST['btn'])){ 
  include('conexion.php'); 

// Configurar las dos lineas siguientes 
  $id=$_POST['id'];
  $Nombre=$_POST['nombre'];


// Inicio de validacion 

// Fin de la validacion 

// Comprobamos si el usuario esta registrado 
  if((empty($id) || empty($Nombre)))
  {
    echo '<script>alert("Campos vacios")</script> ';
      echo "<script>location.href='p2.php'</script>";
  }
  else{

$nuevo_id=mysqli_query($con,"select*from unidad where id_unidad='$id'"); 

if(mysqli_num_rows($nuevo_id)>0) 
{ 
      echo '<script>alert("Este id ya existe")</script> ';
      echo "<script>location.href='p1.php'</script>";
} 
// ------------ Si no esta registrado el usuario continua el script 
else 
{ 
// ============================================== 
// Comprobamos si el email esta registrado 

$nuevo_unidad=mysqli_query($con,"select*from unidad where unidad='$Nombre'"); 

if(mysqli_num_rows($nuevo_unidad)>0) 
{ 
      echo '<script>alert("Esta unidad ya existe")</script> ';
      echo "<script>location.href='p1.php'</script>";
} 
// ------------ Si no esta registrado el e-mail continua el script 
else 
{ 
$result = mysqli_query($con,"insert into unidad(id_unidad,unidad) values ('".$id."','".$Nombre."')");  

// Confirmamos que el registro ha sido insertado con exito 

          echo "<p class='avisos'>Registro insertado con exito</p>"; 
  
          //print("<br>Se realizo la consulta y el resultado es: ");
  
  $resultado = mysqli_query($con,"select * from unidad where 
          (id_unidad='$id' and 
           unidad='$Nombre')");

           echo "<table>
      <tr>
      <th><center>Id</center></th>
      <th><center>Unidad</center></th>
      </tr>";

     while($row=mysqli_fetch_array($resultado))
        { 
          echo "<tr>";
          echo "<td id='t1'><center>".$row["id_unidad"]."</center></td>";
          echo "<td id='t2'><center>".$row["unidad"]."</center></td>";
           echo "</tr>";
        }
        echo "</table>";
      }
    }
  }   
}



//Actualizar
if(isset($_POST['button'])){


      @$Nombre = $_POST['TXT_Nombre'];
      @$Matricula = $_POST['TXT_Matricula'];
     
      if($Matricula == ""){}
      else
      {
           $link = mysqli_connect ('localhost','root','','ch');

          //print("<br>Conectando con el servidor MySQL y con la BD...");
    
          $resultado = mysqli_query($link,"select * from unidad where id_unidad='$Matricula' or unidad='$Matricula'");

         // print("<br>Se realizo la consulta");

            print( "<table >
      <tr>
      <th><center>Id</center></th>
      <th><center>Unidad</center></th>
      </tr>");

          while($row=mysqli_fetch_array($resultado))
          { 
              print ("<tr>");
             print('<td ><center><input size="10" name="TXT_Matricula" type="text" id="TXT_Matricula" value="'.$row['id_unidad'].'" /></center></td>');
                
               print('<td><center><input size="10" name="TXT_Nombre" type="text" id="TXT_Nombre" value="'.$row['unidad'].'"/></center></td>');

               print ("</tr>"); 
          }
          print ("</table>");
          print('<input type="submit" name="Modificar" class="btn btn-success col-xs-1" value="Modificar">');
}

}


            if(isset($_POST['Modificar'])){
       
      $Matricula = $_POST['TXT_Matricula'];
      @$Nombre = $_POST['TXT_Nombre'];


      if($Nombre == ""){
        print("");
      }
      else
      {             
          $SQL = "update unidad set 
          id_unidad='$Matricula',
          unidad='$Nombre'
          where id_unidad='$Matricula'";
          
        
          $link = mysqli_connect ('localhost','root','','ch');
          //print("<br>Conectando con el servidor MySQL y con la BD...");
  
           @mysqli_query ($link,$SQL);
          //print("<br>Se ejecuto la sentencia SQL...");
  
           $resultado = mysqli_query($link,"select * from unidad where id_unidad='$Matricula'");
          print("<br>Se realizo la Actualizacion");
          while($row=mysqli_fetch_array($resultado))
          { 
            print("<br>".$row['id_unidad']." - ".$row['unidad']);
          }
        }
      }
    


  //eliminar
if(isset($_POST['delete'])){

  $Eliminar = $_POST['eliminar'];
      print("<br>Se recibio: ".$Eliminar);
      
      if($Eliminar == ""){}
      else
      {
        include('conexion.php');

          $SQL = "delete from unidad where id_unidad='$Eliminar'";
          //print("<br>SQL: ".$SQL);
        
         // print("<br>Conectando con el servidor MySQL y con la BD...");
  
          @mysqli_query ($con,$SQL);
          //print("<br>Se ejecuto la sentencia SQL...");
  
          $resultado = mysqli_query($con,"select * from responsable_obra where id_responsable_obra='$Eliminar'");
          print("<br>Se realizo la Eliminación");
          
          while($row=mysqli_fetch_array($resultado))
          { 
            print("<br>".$row['id_responsable_obra']." - ".$row['nombre']."...");
          }
      } 
}

?>

</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    </form>

  </body>
</html>
