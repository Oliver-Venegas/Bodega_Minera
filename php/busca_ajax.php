<?php 
include "../php/conect_be.php";

//Tabla columna que va a buscar
$nombre_usuario = $_POST['nombre_usuario'];

//Tabla de base de datos y columna a buscar
$sql = "SELECT * FROM users_log WHERE nombre_usuario LIKE '$nombre_usuario%'";
  $pro_query = mysqli_query($conexion,$sql);
  $data = '';
  while($prod_row = mysqli_fetch_assoc($pro_query)){

    $data .=  

      "<tr>
        <td>".$prod_row['id_usuario']."</td>

        <td>".$prod_row['nombre_usuario']."</td>

        <td>".$prod_row['tipo_usuario']."</td>

        <td>".$prod_row['pass_usuario']."</td>

      </tr>";

       }

      echo $data;

      ?>
