<?php 
    include 'conect_be.php';

    
    date_default_timezone_set('Chile/Continental');

    $tipe_nprod = $_POST['Ad_newpro_tipe'];
    $desc_nprod = $_POST['Ad_newpro_name'];
    $date_edit = date("Y-m-d");
    $cant_nprod = $_POST['Ad_newpro_cant'];

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['Ad_newpro_conf'])){

    $query_newproadd = "INSERT INTO producto_general(tipo_producto,descripcion_producto,fecha_producto,unidades_producto) 
                      VALUES('$tipe_nprod', '$desc_nprod', '$date_edit', '$cant_nprod')";

    $verificar_prod = mysqli_query($conexion, "SELECT * FROM producto_general WHERE descripcion_producto='$desc_nprod' ");

    if (mysqli_num_rows($verificar_prod) > 0) {
        echo '<script>
        alert ("Ya se encuentra un producto con ese nombre");
        window.location = "../Administrador/Ad_Editar.php";
        </script>' ;
    
        mysqli_close($conexion);
        exit();     
    
    }
    
        $execute_newproadd = mysqli_query($conexion, $query_newproadd);
    
        if($execute_newproadd){
            echo '
            <script>
            alert("Producto ingresado");
            window.location = "../Administrador/Ad_Editar.php";
            </script>';
        }else{
           echo '
            <script>
            alert("No se pudo ingresar el Producto");
            window.location = "../Administrador/Ad_Editar.php";
            </script>
            ';
        }
    
    mysqli_close($conexion);
    

}

    $codi_eliprod = $_POST['Ad_Elipro_codi'];
    $desc_eliprod = $_POST['Ad_Elipro_name'];

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['Ad_Elipro_conf'])){

    $query_prodelim = "DELETE FROM producto_general WHERE codigo_producto=$codi_eliprod";

    $verificar_eliprod = mysqli_query($conexion, "SELECT * FROM producto_general WHERE descripcion_producto='$desc_eliprod' ");

    if (mysqli_num_rows($verificar_eliprod) > 0) {
         
    $execute_prodelim = mysqli_query($conexion, $query_prodelim);
    
        if($execute_prodelim){
            echo '
            <script>
            alert("Producto eliminado");
            window.location = "../Administrador/Ad_Editar.php";
            </script>';
        }else{
           echo '
            <script>
            alert("No se encuentra producto con ese codigo");
            window.location = "../Administrador/Ad_Editar.php";
            </script>
            ';
        }
    
    mysqli_close($conexion);

    }else{
        echo '<script>
        alert ("No se encuentra producto con ese nombre");
        window.location = "../Administrador/Ad_Editar.php";
        </script>' ;
    
        mysqli_close($conexion);
        exit();    

    }
        

}


?>