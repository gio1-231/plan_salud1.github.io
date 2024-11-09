<?php
$conexion = new mysqli("localhost", "root", "", "nueva_bd_plan_salud");
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

$peso = $_POST['peso'];
$altura = $_POST['altura'];
$cal_imc = $peso / ($altura * $altura);

$sql = "INSERT INTO imc (peso, altura, cal_imc) VALUES ($peso, $altura, $cal_imc)";
if ($conexion->query($sql) === TRUE) {
    echo  "Registro exitoso, GRACIAS POR RESPONDER LOS FORMULARIOS" ;
} else {
    echo "Error: " . $sql . "<br>" . $conexion->error;
}

$conexion->close();
?>
