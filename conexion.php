<?php
		
function conectar(){

     $con=mysqli_connect("localhost","root","","ch");

if (mysqli_connect_errno())
  {
  echo "No hay conexion a la base de datos  " . mysqli_connect_error();
  }
}


/*$mysqli = new MySQLi("localhost", "root","", "ch");
		if ($mysqli -> connect_errno) {
			die( "Fallo la conexión a MySQL: (" . $mysqli -> mysqli_connect_errno() 
				. ") " . $mysqli -> mysqli_connect_error());
		}
		else{}*/



?>
