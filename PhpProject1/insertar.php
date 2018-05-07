<?php

include("./shared/ez_sql_core.php");
include("./mysql/ez_sql_mysql.php");
$conexion = new ezSQL_mysql("root","","dai5501_vespertino","localhost");
$accion = $_GET['accion'];
if(($_GET['accion'])&&($accion=="1")){
    $nombre = $_GET["Nombre"];
$apellido = $_GET["Apellido"];
$correo = $_GET["Correo"];


$resultado1 = $conexion->query("INSERT INTO `dai5501_vespertino`.`personas`
(`idpersonas`,`nombre`,`apellido`,`correo`)
VALUES
(NULL,'".$nombre."','".$apellido."','".$correo."');");
echo "success";
}

if($accion==3){
    include 'cabecera.php';
?>
<div class="container">
    <table class="table table-bordered">
        <?php
        $resultado2 = $conexion->get_results("SELECT * FROM personas");
        foreach ($resultado2 as $value) {
            echo "<tr>";
            echo "<td>";
            echo $value->nombre;
            echo "</td>";
            echo "<td>";
            echo $value->apellido;
            echo "</td>";
            echo "<td>";
            echo $value->correo;
            echo "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>

<?php
include("piedepagina.php");
}


