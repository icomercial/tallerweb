<?php
include("./shared/ez_sql_core.php");
include("./mysql/ez_sql_mysql.php");
$conexion = new ezSQL_mysql("root", "", "dai5501_vespertino", "localhost");
if (isset($_POST['Nombre'])) {
    $nombre = $_POST["Nombre"];
    $apellido = $_POST["Apellido"];
    $correo = $_POST["Correo"];
    $resultado1 = $conexion->query("INSERT INTO `dai5501_vespertino`.`personas`
(`idpersonas`,`nombre`,`apellido`,`correo`)
VALUES
(NULL,'" . $nombre . "','" . $apellido . "','" . $correo . "');");
    echo "success";
}

