<?php
// Conexión a la base de datos 'tienda'
$conexion = mysqli_connect("localhost", "root", "", "tienda");

if (!$conexion) {
    die("Error al conectar con la base de datos: " . mysqli_connect_error());
}

// Recibir los datos del formulario
$nombre   = $_POST['nombre'];
$correo   = $_POST['correo'];
$password = $_POST['password'];

// Insertar datos en la tabla usuarios
$sql = "INSERT INTO usuarios (nombre, correo, password) VALUES ('$nombre', '$correo', '$password')";

if (mysqli_query($conexion, $sql)) {
    echo "<script>
            alert('¡Usuario registrado con éxito!');
            window.location='index.html';
          </script>";
} else {
    echo "Error al guardar: " . mysqli_error($conexion);
}

mysqli_close($conexion);
?>