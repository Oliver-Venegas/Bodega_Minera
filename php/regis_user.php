<?php 
    include 'conect_be.php';

    $name_user = $_POST['user_nombre'];
    $tipe_user = $_POST['user_tipo'];
    $passw_user = $_POST['user_contra'];

    $query_useradd = "INSERT INTO users_log(nombre_usuario,tipo_usuario,pass_usuario) 
                      VALUES('$name_user', '$tipe_user', '$passw_user')";

$verificar_user = mysqli_query($conexion, "SELECT * FROM users_log WHERE nombre_usuario='$name_user' ");

if (mysqli_num_rows($verificar_user) > 0) {
    echo '<script>
    alert ("este usuario ya esta registrado");
    window.location = "../Administrador/Ad_CrearUse.php";
    </script>' ;

    mysqli_close($conexion);
    exit();     

}

    $execute_user = mysqli_query($conexion, $query_useradd);

    if($execute_user){
        echo '
        <script>
        alert("Usuario ingresado");
        window.location = "../Administrador/Menu_Ad.html";
        </script>';
    }else{
       echo '
        <script>
        alert("Usuario no se pudo ingresar");
        window.location = "../Administrador/Menu_Ad.html";
        </script>
        ';
    }

mysqli_close($conexion);

?>