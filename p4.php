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

    <title>Pedidos</title>

	    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/estilo.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
   
  </head>

  <body background="imagenes/fondo3.jpg">

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
        <center><h1 class="page-header">Obras</h1></center>

         
<!--formulario-->

<h2>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  Alta Obra
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  Actualizar Obra
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  Eliminar Obra
</h2>
          <hr>



    <form  class="form-group row" method="post" action="">
    <div class="col-xs-4">
     <label  for="exampleInputEmail1">Id Obra</label>
     <input  type="text" class="form-control" name="id" placeholder="Id..." size="15%">
   </div>
    <div class="col-xs-4">
     <label for="exampleInputEmail1">ingrese Id o nombre de Obra a actualizar</label>
     <input type="text" class="form-control" name="TXT_Matricula" placeholder="Id o nombre..." size="15%">
   </div>
   <div class="col-xs-4">
     <label  for="exampleInputEmail1">ingrese id de Obra a eliminar</label>
     <input  type="text" class="form-control" name="eliminar" placeholder="Id..." size="15%">
   </div>


   
   <br>
   <br>
   <br>
   <br>
  

  <div class="col-xs-4">
    <label for="exampleInputPassword1">Nombre del cliente (empresa y/o persona)</label>
    <input type="text" class="form-control" name="nombre" placeholder="nombre...">
  </div>
   <button style="left:12.5%" type="submit" name="button" class="btn btn-info col-xs-1" >Buscar</button>

   <button style="left:37.5%" type="submit" name="delete" class="btn btn-danger col-xs-1" >Eliminar</button>
  

  <br>
  <br>
  <br>
  <br>
  

  <div class="col-xs-4">
    <label for="exampleInputPassword1">Descripcion de la obra</label>
    <input type="text" class="form-control" name="apellido_paterno" placeholder="descripcion...">
  </div>

   <div class="col-xs-4">
    <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Hacer Pedido</h2>
  </div>
   

   <br>
   <br>
   <br>
   <br>
  

  <div class="col-xs-4">
    <label for="exampleInputPassword1">Delegacion</label>
    <input type="text" class="form-control" name="apellido_materno" placeholder="delegacion...">
  </div>
  <div class="col-xs-4">
    <label for="exampleInputPassword1">Id Pedido</label>
    <input type="text" class="form-control" name="apellido_paterno" placeholder="descripcion...">
  </div>

   <div >
     <label for="exampleInputPassword1" class="col-xs-4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Obras en curso</label>
     <button style="left:12%" type="submit" name="Usuarios" class="btn btn-primary col-xs-1" >Obras</button>
   </div>
  <br>
  <br>
  <br>
  <br>
  

  <div class="col-xs-4">
    <label for="exampleInputPassword1">Colonia</label>
    <input type="text" class="form-control" name="contra_usuario" placeholder="colonia...">
  </div>   
  <div class="col-xs-4">
    <label for="exampleInputPassword1">Id Manufactura</label>
    <select class="selectpicker form-control" data-live-search="true">
    <option data-tokens="">5</option>
    <option data-tokens="">6</option>
    <option data-tokens="">5</option>
    <option data-tokens="">10</option>
    <option data-tokens=""> 4 </option>
    <option data-tokens="">2</option>
    <option data-tokens="">9</option>
    <option data-tokens="">7</option>
    <option data-tokens="">1 </option>
    <option data-tokens="">11</option>
    <option data-tokens="">8</option>
</select>

  </div>   
   <br>
   <br>
   <br>
   <br>
  

  <div class="col-xs-4">
    <label for="exampleInputPassword1">Calle</label>
    <input type="text" class="form-control " name="contra_admin" placeholder="calle...">
  </div>
  <div class="col-xs-4">
    <label for="exampleInputPassword1">Cantidad de Manufactura</label>
    <input type="text" class="form-control " name="contra_admin" placeholder="cantidad...">
  </div>

   <br>
   <br>
   <br>
   <br>

    <div class="col-xs-4">
    <label for="exampleInputPassword1">Numero exterior</label>
    <input type="text" class="form-control " name="contra_admin" placeholder="numero exterior...">
    </div>
    <div class="col-xs-4">
    <label for="exampleInputPassword1">Id Unidad</label>
    <select class="selectpicker form-control">
  <optgroup label="Masa">
    <option>kg</option>
    <option>Tn</option>
  </optgroup>
  <optgroup label="Volumen">
    <option>Gl</option>
    <option>Lt</option>
    <option>M3</option>
  </optgroup>
  </optgroup>
  <optgroup label="otros">
    <option>Pz</option>
  </optgroup>
</select>
    </div>

  <br>
   <br>
   <br>
   <br>


   <div class="col-xs-4">
    <label for="exampleInputPassword1">Numero interior</label>
    <input type="text" class="form-control " name="contra_admin" placeholder="numero interior...">
  </div>
  <div class="col-xs-4">
    <label for="exampleInputPassword1">Id Tipo Utilizacion</label>
    <select class="selectpicker form-control" data-live-search="true">
    <option data-tokens="">3</option>
    <option data-tokens="">6</option>
    <option data-tokens="">5</option>
    <option data-tokens="">10</option>
    <option data-tokens=""> 4 </option>
    <option data-tokens="">2</option>
    <option data-tokens="">9</option>
    <option data-tokens="">7</option>
    <option data-tokens="">1 </option>
    <option data-tokens="">11</option>
    <option data-tokens="">8</option>
</select>
  </div>
         
  <br>
   <br>
   <br>
   <br>

   <div class="col-xs-4">
    <label for="exampleInputPassword1">Codigo postal</label>
    <input type="text" class="form-control " name="contra_admin" placeholder="codigo postal...">
  </div>
  <div class="col-xs-4">
    <label for="exampleInputPassword1">Id Tipo Manufactura</label>
    <select class="selectpicker form-control" data-live-search="true">
    <option data-tokens="">Equipo</option>
    <option data-tokens="">Herramienta</option>
    <option data-tokens="">Material</option>
</select>
  </div>

   <br>
   <br>
   <br>
   <br>

   <div class="col-xs-4">
    <label for="exampleInputPassword1">Id responsable de obra</label>
    <input type="text" class="form-control " name="contra_admin" placeholder="id...">
  </div>
  <div class="col-xs-4">
    <label for="exampleInputPassword1">Fecha</label>
    <input type="text" class="form-control " name="contra_admin" placeholder="ejem. (2000/12/31)...">
  </div>

   <br>
   <br>
   <br>
   <br>

   <div class="col-xs-4">
    <label for="exampleInputPassword1">Id responsable pedido</label>
    <input type="text" class="form-control " name="contra_admin" placeholder="id...">
  </div>
   <button style="left:9%" type="submit" name="btn" class="btn btn-success col-xs-2" >Hacer Pedido</button>

   <br>
   <br>
   <br>
   <br>

   <div class="col-xs-4">
    <label for="exampleInputPassword1">Fecha de inicio</label>
    <input type="text" class="form-control " name="contra_admin" placeholder="ejem. (2000/12/31)...">
  </div>

  <br>
   <br>
   <br>
   <br>

   <div class="col-xs-4">
    <label for="exampleInputPassword1">Fecha de termino</label>
    <input type="text" class="form-control " name="contra_admin" placeholder="ejem. (2000/12/31)...">
  </div>

  <br>
   <br>
   <br>
   <br>

   <div class="col-xs-4">
    <label for="exampleInputPassword1">Exedente</label>
    <input type="text" class="form-control " name="contra_admin" placeholder="si o no...">
  </div>
  

   <br>
   <br>
   <br>
   <br>


  <div>
    
    <button style="left:12.1%" type="submit" name="btn" class="btn btn-success col-xs-1" >Alta</button>


  </div>


  
<?php

//INSERTAR
/* if(isset($_POST['btn'])){ 
  include('conexion.php'); 

// Configurar las dos lineas siguientes 
  $id=$_POST['id'];
  $Nombre=$_POST['nombre'];
  $Paterno=$_POST['apellido_paterno'];
  $Materno=$_POST['apellido_materno'];
  $C_usuario=$_POST['contra_usuario'];
  $C_admin=$_POST['contra_admin'];

// Inicio de validacion 

// Fin de la validacion 

// Comprobamos si el usuario esta registrado 
  if((empty($id) || empty($Nombre) || empty($Paterno) || empty($Materno)) || (empty($C_usuario) & empty($C_admin)))
  {
    echo '<script>alert("Campos vacios")</script> ';
      echo "<script>location.href='p1.php'</script>";
  }
  else{
$nuevo_id=mysqli_query($mysqli,"select id_responsable_obra from responsable_obra where id_responsable_obra='$id'"); 

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

$nuevo_usuario=mysqli_query($mysqli,"select nombre, apellido_paterno, apellido_materno from responsable_obra where nombre='$Nombre' and apellido_paterno= '$Paterno' and apellido_materno='$Materno'"); 

if(mysqli_num_rows($nuevo_usuario)>0) 
{ 
      echo '<script>alert("Este usuario ya esta registrado")</script> ';
      echo "<script>location.href='p1.php'</script>";
} 
// ------------ Si no esta registrado el e-mail continua el script 
else 
{ 
$result = mysqli_query($mysqli,"insert into responsable_obra(id_responsable_obra,nombre,apellido_paterno,apellido_materno,contra,contra_admin) values ('".$id."','".$Nombre."','".$Paterno."','".$Materno."','".$C_usuario."','".$C_admin."')");  

// Confirmamos que el registro ha sido insertado con exito 

          echo "<p class='avisos'>Registro insertado con exito</p>"; 
  
          print("<br>Se realizo la consulta y el resultado es: ");
  
  $resultado = mysqli_query($mysqli,"select * from responsable_obra where 
          (id_responsable_obra='$id' and 
           nombre='$Nombre' and 
           apellido_paterno='$Paterno' and 
           apellido_materno='$Materno' and 
           contra='$C_usuario')
           or
           (id_responsable_obra='$id' and 
           nombre='$Nombre' and 
           apellido_paterno='$Paterno' and 
           apellido_materno='$Materno' and 
           contra_admin='$C_admin')");

           echo "<table>
      <tr>
      <th><center>Id</center></th>
      <th><center>Nombre</center></th>
      <th><center>Apellido_paterno</center></th>
      <th><center>Apellido_materno</center></th>
      <th><center>Contraseña_usuario</center></th>
      <th><center>Contraseña_administrador</center></th>
      </tr>";

     while($row=mysqli_fetch_array($resultado))
        { 
          echo "<tr>";
          echo "<td id='t1'><center>".$row["id_responsable_obra"]."</center></td>";
          echo "<td id='t2'><center>".$row["nombre"]."</center></td>";
          echo "<td id='t3'><center>".$row["apellido_paterno"]."</center></td>";
          echo "<td id='t3'><center>".$row["apellido_materno"]."</center></td>";
          echo "<td id='t3'><center>".$row["contra"]."</center></td>";
          echo "<td id='t3'><center>".$row["contra_admin"]."</center></td>"; 
           echo "</tr>";
        }
        echo "</table>";
      }
    }
  }   
}



//Actualizar
if(isset($_POST['button'])){
if(isset($_POST['TXT_Matricula'])){

      @$Nombre = $_POST['TXT_Nombre'];
      @$Paterno = $_POST['TXT_A_Paterno'];
      @$Materno = $_POST['TXT_A_Materno'];
      @$Matricula = $_POST['TXT_Matricula'];
      @$Contra_admin = $_POST['Contra_admin'];       
      @$Contra = $_POST['Contra'];
      if($Matricula == ""){
        
      }
      else
      {
          $link = mysql_connect ('localhost','root','');
          mysql_select_db('ch',$link);

          print("<br>Conectando con el servidor MySQL y con la BD...");
    
          $resultado = mysql_query("select * from responsable_obra where id_responsable_obra='$Matricula' or nombre='$Matricula'");

          print("<br>Se realizo la consulta");

          while($row=mysql_fetch_array($resultado))
          { 
             print('<input name="TXT_Matricula" type="text" id="TXT_Matricula" value="'.$row['id_responsable_obra'].'" />');
                
               print('<input name="TXT_Nombre" type="text" id="TXT_Nombre" size="50" maxlength="50" value="'.$row['nombre'].'"/>');

               print('<input name="TXT_A_Paterno" type="text" id="TXT_A_Paterno" size="50" maxlength="50" value="'.$row['apellido_paterno'].'"/>');
              
               print('<input name="TXT_A_Materno" type="text" id="TXT_A_Materno" size="50" maxlength="50" value="'.$row['apellido_materno'].'"/>'); 


               print('<input name="Contra" type="text" id="Contra" size="50" maxlength="50" value="'.$row['contra'].'"/>'); 


               print('<input name="Contra_admin" type="text" id="Contra_admin" size="50" maxlength="50" value="'.$row['contra_admin'].'"/>'); 
          }
            echo "<input type=\"submit\" name=\"button\" id=\"button\" value=\"Modificar\"/>";


            if(isset($_POST['button'])){
       @$Contra_admin = $_POST['Contra_admin'];       
      @$Contra = $_POST['Contra'];
      $Matricula = $_POST['TXT_Matricula'];
      @$Nombre = $_POST['TXT_Nombre'];
      @$Paterno = $_POST['TXT_A_Paterno'];
      @$Materno = $_POST['TXT_A_Materno'];

      print("<br>Se recibio: ".$Nombre);
      
      if($Nombre == ""){
        print("ERROR: Introduce un nombre primero...");
      }
      else
      {             
          $SQL = "update responsable_obra set 
          id_responsable_obra='$Matricula',
          nombre='$Nombre',
          apellido_paterno='$Paterno',
          apellido_materno='$Materno',
          contra='$Contra',
          contra_admin='$Contra_admin'
          where id_responsable_obra='$Matricula'";
          print("<br>SQL: ".$SQL);
        
          $link = mysql_connect ('localhost','root','');
          mysql_select_db('ch',$link);
          print("<br>Conectando con el servidor MySQL y con la BD...");
  
          @mysql_query ($SQL);
          print("<br>Se ejecuto la sentencia SQL...");
  
          $resultado = mysql_query("select * from responsable_obra where id_responsable_obra='$Matricula'");
          print("<br>Se realizo la consulta de Actualizacion");
          while($row=mysql_fetch_array($resultado))
          { 
            print("<br>".$row['id_responsable_obra']." - ".$row['nombre']."-"
              .$row['apellido_paterno']." - ".$row['apellido_materno']."-"
              .$row['contra']."-".$row['contra_admin']);
          }
        }
      }
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

          $SQL = "delete from responsable_obra where id_responsable_obra='$Eliminar'";
          print("<br>SQL: ".$SQL);
        
          print("<br>Conectando con el servidor MySQL y con la BD...");
  
          @mysqli_query ($mysqli,$SQL);
          print("<br>Se ejecuto la sentencia SQL...");
  
          $resultado = mysqli_query($mysqli,"select * from responsable_obra where id_responsable_obra='$Eliminar'");
          print("<br>Se realizo la Eliminación de la Consulta");
          
          while($row=mysqli_fetch_array($resultado))
          { 
            print("<br>".$row['id_responsable_obra']." - ".$row['nombre']."...");
          }
      } 
}
*/
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