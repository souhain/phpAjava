
               
                  <?php

  session_start();
  ob_start();


      $nombre_bodega = $_POST['buscar'];
      print("<br>Se recibio: ".$nombre_bodega);
      
      if($nombre_bodega == ""){
        print("ERROR: Introduce un nombre de bodega primero...");
      }
      else
      {
          $link = mysql_connect ('localhost','root','');
          mysql_select_db('ch',$link);
          print("<br>Conectando con el servidor MySQL y con la BD...");
    
          $resultado = mysql_query("select * from bodega where nombre_bodega like \"%$nombre_bodega%\" ");
          print("<br>Se realizo la consulta y el resultado es: ");

          
          while($row=mysql_fetch_array($resultado))
          { 
            print(
            
              " <tr>
                  <td align=\"center\">".$row['id_bodega']."</td>
                  <td align=\"center\">".$row['nombre_bodega']."</td>
                  <td align=\"center\">".$row['delegacion']."</td>
                  <td align=\"center\">".$row['colonia']."</td>
                  <td align=\"center\">".$row['calle']."</td>
                  <td align=\"center\">".$row['numero_exterior']."</td>
                  <td align=\"center\">".$row['numero_interior']."</td>
                  <td align=\"center\">".$row['codigo_postal']."</td>
                </tr>
              
            ");

            
          } 
      }   
    
?>
</table>                