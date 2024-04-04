<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "informatica 2023";


$conn = new mysqli($servername, $username, $password, $database);


if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}


$Nombre = $_POST['Nombre']; 
$Apellido = $_POST['Apellido'];
$Cedula = $_POST['Cédula']
$Correo_Eletronico = $_POST['Correo Eletronico']
$Contrasena = $_POST['Contrasena']


$sql = "INSERT INTO formulario (Nombre, Apellido, Cédula, Correo Eletronico, Contrasena ) VALUES ('$Nombre', '$Apellido', '$Cédula','$Correo_Eletronico','$Contrasena')";


if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>