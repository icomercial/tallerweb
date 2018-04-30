<?php
$requiredUserLevel = 50;
$cfgProgDir =  './phpSecurePages/';
include($cfgProgDir . "secure.php");
include('./shared/ez_sql_core.php');
include('./mysql/ez_sql_mysql.php');
$db = new ezSQL_mysql('nalvarez_uweb','^YTJ,jB3*Rk{','nalvarez_web','localhost');
//$db = new ezSQL_mysql('root','','local_211bd','localhost');
$nombre = $_GET['nombre_libro'];
$autor = $_GET['nombre_autor'];
$consulta="INSERT INTO `nalvarez_web`.`libros`(`id_libros`,`nombre`,`autor`)VALUES
        (NULL,
'".$nombre."',
'".$autor."');";
//echo $consulta;

$db->query($consulta);
?>
<html>
    <head><title>Resultado</title></head>
    <body>
        <h1>Resultado Formulario</h1>
        <h2><?php echo $login; ?></h2>
        <h3><?php echo $userLevel; ?></h3>
        <p>
        <table>
            <?php
            $otraconsulta="select * from libros LIMIT 0,10";
            $libros = $db->get_results($otraconsulta);
            foreach ($libros as $value) {
                echo "<tr><td>".$value->nombre."</td><td>".$value->autor."</td></tr>";
            }
            ?>
        </table>
        
        </p>
    </body>
</html>