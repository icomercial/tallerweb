<?php
include("./shared/ez_sql_core.php");
include("./mysql/ez_sql_mysql.php");
include("cabecera.php");
$conexion = new ezSQL_mysql('root','','dai5501_diurno','localhost:3307');
$nombre = $_GET['Nombre'];
$apellido = $_GET['Apellido'];
$correo = $_GET['Correo'];
$consulta ="INSERT INTO `personas`(`idpersonas`,`nombre`,`apellido`,`correo`)
    VALUES
(NULL,'".$nombre."','".$apellido."','nalvarez@duoc.cl');";

$conexion->query($consulta);
$consultaparaleer ="SELECT * FROM personas";
?>
<div class="container">
    <div class="row">
        <div class="col">
            <?php
                include("menu.php");
            ?>
        </div>
    </div>
    <div class="row">
        <table class="table table-bordered">
        <?php
        $datosleidos = $conexion->get_results("SELECT * FROM personas");
        foreach ( $datosleidos as $persona )            
{
            echo "<tr>";
                echo "<td>";
                echo $persona->nombre;
                echo "</td>";
                echo "<td>";
                echo $persona->apellido;
                echo "</td>";
                echo "<td>";
                echo $persona->correo;
                echo "</td>";
                echo "</tr>";
            }
        ?>
        </table>
    </div>
</div>

<?php
include("pie.php");
?>
