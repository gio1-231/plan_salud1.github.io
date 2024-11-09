<?php
$conexion = new mysqli("localhost", "root", "", "nueva_bd_plan_salud");
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

$id_nombre = $_POST['id_nombre'];
$ap_nombre = $_POST['ap_nombre'];
$am_nombre = $_POST['am_nombre'];
$edad = $_POST['edad'];
$sexo = $_POST['sexo'];

$sql = "INSERT INTO persona (id_nombre, ap_nombre, am_nombre, edad, sexo) VALUES ('$id_nombre', '$ap_nombre', '$am_nombre', $edad, '$sexo')";
if ($conexion->query($sql) === TRUE) {
    header(header: "Location: form_test.html");
} else {
    echo "Error: " . $sql . "<br>" . $conexion->error;
}

$conexion->close();
?>
