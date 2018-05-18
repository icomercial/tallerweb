<?php
$requiredUserLevel = 20;
$cfgProgDir =  './phpSecurePages/';
include($cfgProgDir . "secure.php");
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Contenido para <?php echo $login ?></h1>
        <?php
        $nombrevariable=7;
        $nombreotro = 3;
        $totalnombres = $nombrevariable + $nombreotro;
        
        echo $totalnombres;
        echo "<br>";
        echo "50";
        echo "otra cosa";
        echo $nombrevariable.$nombreotro;
        //Nos vamos a conectar a la BBDD
        //Importamos la clase necesaria
        include("./shared/ez_sql_core.php");
        include("./mysql/ez_sql_mysql.php");
        //llamamos a la clase
        $dbuser = "root"; $dbpassword=""; $dbname="prueba1"; $dbhost="localhost";
        $db = new ezSQL_mysql($dbuser, $dbpassword, $dbname, $dbhost);
        ?>
        <h2>
            Otro título
        </h2>
        <p>
            <?php
            $arreglo = $db->get_results("SELECT * FROM alumnos;");
            foreach ($arreglo as $value) {
                echo $value->apellido."<br>";
            }
            ?>
        </p>
    </body>
</html>
