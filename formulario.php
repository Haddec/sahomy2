<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "yomary 2023";


$conn = new mysqli($servername, $username, $password, $database);


if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}


$Nombre = $_POST['Nombre'];
$Apellido = $_POST['Apellido'];
$Cédula= $_POST['Cédula'];
$Correo_Eletrónico= $_POST['Correo_Eletrónico'];
$Contrasena= $_POST['Contrasena'];


$sql = "INSERT INTO formulario (Nombre, Apellido, Cédula, Correo_Eletrónico,Contrasena ) VALUES ('$Nombre', '$Apellido', '$Cédula',$Correo_Eletrónico,$Contrasena)";


if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>