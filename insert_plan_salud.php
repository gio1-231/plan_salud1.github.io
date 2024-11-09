<?php
$conexion = new mysqli("localhost", "root", "", "nueva_bd_plan_salud");
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
$dieta = $_POST['dieta'];
$recomendaciones = $_POST['recomendaciones'];
$sql = "INSERT INTO plan_salud (dieta, recomendaciones) VALUES ('$dieta', '$recomendaciones')";
if ($conexion->query($sql) === TRUE) {
    header(header: "Location: form_persona.html");
} else {
    echo "Error: " . $sql . "<br>" . $conexion->error;
}
$conexion->close();
?>
