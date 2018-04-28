<?php
include('./shared/ez_sql_core.php');
include('./mysql/ez_sql_mysql.php');
//$db = new ezSQL_mysql('nalvarez_uweb','oGvrtTH[z@Rk','nalvarez_web','localhost');
$db = new ezSQL_mysql('root','','local_211bd','localhost');
$nombre = $_GET['nombre_libro'];
$autor = $_GET['nombre_autor'];
$consulta="INSERT INTO `local_211bd`.`libros`(`id_libros`,`nombre`,`autor`)VALUES
        (NULL,
'".$nombre."',
'".$autor."');";


$db->query($consulta);
?>
<html>
    <head><title>Resultado</title></head>
    <body>
        <h1>Resultado Formulario</h1>
        <p>
        <table>
            <?php
            $libros = $db->get_results("select * from libros LIMIT 0,10");
            foreach ($libros as $value) {
                echo "<tr><td>".$value->nombre."</td><td>".$value->autor."</td></tr>";
            }
            ?>
        </table>
        
        </p>
    </body>
</html>