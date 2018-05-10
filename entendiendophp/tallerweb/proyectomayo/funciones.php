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
        <?php
        // put your code here
        function mesesdelanio($nmes) {
            $meses = ["Enero", "Febrero", "Marzo"];
            return $meses[$nmes];
        }
        ?>
        <h2>Funciones</h2>
        <p>
            <?php
            for ($index = 0; $index < 3; $index++) {
                echo mesesdelanio($index);
                echo "<br>";
            }
           
            ?>
        </p>
    </body>
</html>
