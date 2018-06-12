<!--consulta del buscador global -->

<?php

$variable=trim($_REQUEST['nombre']);

if(empty($variable)){

   echo "";

}else{
      $con=mysqli_connect("localhost","root","","ch");
// Check connection
if (mysqli_connect_errno())
  {
  echo "No hay conexion a la base de datos  " . mysqli_connect_error();
  }
     $query="select nombre_manufactura, count(nombre_manufactura), unidad, nombre_bodega, delegacion, colonia, calle, numero_exterior, numero_interior, codigo_postal 
 from manufactura
 inner join entradas on entradas.id_manufactura = manufactura.id_manufactura
 inner join bodega on bodega.id_bodega = entradas.id_bodega
 inner join unidad on unidad.id_unidad = manufactura.id_unidad
where nombre_manufactura like '%$variable%'
group by nombre_manufactura;";

     $query2="select nombre_manufactura, count(nombre_manufactura), unidad, nombre_cliente, delegacion, colonia, calle, numero_exterior, numero_interior, codigo_postal 
 from manufactura
 inner join pedido on pedido.id_manufactura = manufactura.id_manufactura
 inner join responsable_pedido on responsable_pedido.id_pedido = pedido.id_pedido
 inner join obra on obra.id_responsable_pedido = responsable_pedido.id_responsable_pedido
 inner join unidad on pedido.id_unidad = unidad.id_unidad
 where nombre_manufactura like '%$variable%'
 group by nombre_manufactura;";

     $query3="select nombre_manufactura, existencias, unidad from manufactura
inner join unidad on unidad.id_unidad = manufactura.id_unidad
where nombre_manufactura like '%$variable%'
group by nombre_manufactura;";


     $res=mysqli_query($con,$query);
     $cantidad=mysqli_num_rows($res);

     $res2=mysqli_query($con,$query2);
     $cantidad2=mysqli_num_rows($res2);

     $res3=mysqli_query($con,$query3);
     $cantidad3=mysqli_num_rows($res3);

     if($cantidad || $cantidad2 || $cantidad3 >0) {

      echo "<table id='tabla'>
      <tr>
      <th><center>Manufactura</center></th>
      <th><center>Cantidad</center></th>
      <th><center>Unidad</center></th>
      <th><center>nombre_bodega</center></th>
      <th><center>delegacion</center></th>
      <th><center>colonia</center></th>
      <th><center>calle</center></th>
      <th><center>numero_exterior</center></th>
      <th><center>numero_interior</center></th>
      <th><center>codigo_postal</center></th>
      </tr>";

     while($rowb=mysqli_fetch_array($res)){
          echo "<tr>";
          echo "<td id='t1'><center>".$rowb["nombre_manufactura"]."</center></td>";
          echo "<td id='t2'><center>".$rowb["count(nombre_manufactura)"]."</center></td>";
          echo "<td id='t3'><center>".$rowb["unidad"]."</center></td>";
          echo "<td id='t3'><center>".$rowb["nombre_bodega"]."</center></td>";
          echo "<td id='t3'><center>".$rowb["delegacion"]."</center></td>";
          echo "<td id='t3'><center>".$rowb["colonia"]."</center></td>";
          echo "<td id='t3'><center>".$rowb["calle"]."</center></td>";
          echo "<td id='t3'><center>".$rowb["numero_exterior"]."</center></td>";
          echo "<td id='t3'><center>".$rowb["numero_interior"]."</center></td>";
          echo "<td id='t3'><center>".$rowb["codigo_postal"]."</center></td>";
                   
           echo "</tr>";
       }

       echo "</table><br><br><br>";




       echo "<table id='tabla' >
      <tr>
      <th><center>Manufactura</center></th>
      <th><center>Cantidad</center></th>
      <th><center>Unidad</center></th>
      <th><center>nombre_obra</center></th>
      <th><center>delegacion</center></th>
      <th><center>colonia</center></th>
      <th><center>calle</center></th>
      <th><center>numero_exterior</center></th>
      <th><center>numero_interior</center></th>
      <th><center>codigo_postal</center></th>
      </tr>";

     while($rowb=mysqli_fetch_array($res2)){
          echo "<tr>";
          echo "<td id='t1'><center>".$rowb["nombre_manufactura"]."</center></td>";
          echo "<td id='t2'><center>".$rowb["count(nombre_manufactura)"]."</center></td>";
          echo "<td id='t3'><center>".$rowb["unidad"]."</center></td>";
          echo "<td id='t3'><center>".$rowb["nombre_cliente"]."</center></td>";
          echo "<td id='t3'><center>".$rowb["delegacion"]."</center></td>";
          echo "<td id='t3'><center>".$rowb["colonia"]."</center></td>";
          echo "<td id='t3'><center>".$rowb["calle"]."</center></td>";
          echo "<td id='t3'><center>".$rowb["numero_exterior"]."</center></td>";
          echo "<td id='t3'><center>".$rowb["numero_interior"]."</center></td>";
          echo "<td id='t3'><center>".$rowb["codigo_postal"]."</center></td>";
                   
           echo "</tr>";
       }

       echo "</table><br><br><br>";

       



       echo "<table id='tabla' >
      <tr>
      <th><center>Manufactura</center></th>
      <th><center>Cantidad</center></th>
      <th><center>Unidad</center></th>
      </tr>";

     while($rowb=mysqli_fetch_array($res3)){
          echo "<tr>";
          echo "<td id='t1'><center>".$rowb["nombre_manufactura"]."</center></td>";
          echo "<td id='t2'><center>".$rowb["existencias"]."</center></td>";
          echo "<td id='t3'><center>".$rowb["unidad"]."</center></td>";              
           echo "</tr>";
       }

       echo "</table>";

     }                      
     else
     {
          echo "<br><br><br><br><br><br><br><br>"."<td><b><big><center>No se encontraron coincidencias</center></td>";
     }

     mysqli_close($con);
}

?>

<!--insertar usuario-->



<!---->
<!---->
<!---->
<!---->






