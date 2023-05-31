?php
// Datos de conexión a la base de datos
$servername = "localhost";
$username = "nombre_de_usuario";
$password = "contraseña_de_usuario";
$dbname = "nombre_de_la_base_de_datos";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Obtener los valores ingresados en los campos de usuario y contraseña
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

// Consultar la base de datos para verificar el usuario y contraseña
$sql = "SELECT * FROM tabla_usuarios WHERE usuario = '$usuario' AND contrasena = '$contrasena'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Usuario y contraseña válidos
    header("Location: Jefe_de_Bodega/Menu_Je.html"); // Redirige a la página de inicio de sesión exitoso
    exit();
} else {
    // Usuario o contraseña incorrectos
    echo "Usuario o contraseña incorrectos";
}

$conn->close();
?>
