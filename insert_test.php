<?php
$conexion = new mysqli("localhost", "root", "", "nueva_bd_plan_salud");
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
$preg1 = $_POST['preg1'];
$preg2 = $_POST['preg2'];
$preg3 = $_POST['preg3'];
$preg4 = $_POST['preg4'];
$preg5 = $_POST['preg5'];
$preg6 = $_POST['preg6'];
$preg7 = $_POST['preg7'];
$preg8 = $_POST['preg8'];
$preg9 = $_POST['preg9'];
$preg10 = $_POST['preg10'];
$sql = "INSERT INTO test (preg1, preg2, preg3, preg4, preg5, preg6, preg7, preg8, preg9, preg10) 
VALUES ('$preg1', '$preg2', '$preg3', '$preg4', '$preg5', '$preg6', '$preg7', '$preg8', '$preg9', '$preg10')";
if ($conexion->query($sql) === TRUE) {
    header(header: "Location: form_imc.html");
} else {
    echo "Error: " . $sql . "<br>" . $conexion->error;
}
$conexion->close();
?>