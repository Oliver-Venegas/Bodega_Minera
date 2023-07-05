<?php 
include "../php/conect_be.php";

//Tabla columna que va a buscar
$descripcion_producto = $_POST['descripcion_producto'];

//Tabla de base de datos y columna a buscar
$sql = "SELECT * FROM producto_general WHERE descripcion_producto LIKE '$descripcion_producto%'";
  $pro_query = mysqli_query($conexion,$sql);
  $data = '';
  while($prod_row = mysqli_fetch_assoc($pro_query)){

    $data .=  

      "<tr>
        <td>".$prod_row['codigo_producto']."</td>

        <td>".$prod_row['tipo_producto']."</td>

        <td>".$prod_row['descripcion_producto']."</td>

        <td>".$prod_row['fecha_producto']."</td>

        <td>".$prod_row['unidades_producto']."</td>

      </tr>";

       }

      echo $data;

      ?>
