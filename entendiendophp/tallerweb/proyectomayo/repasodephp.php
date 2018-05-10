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
        echo "Imprimir algo en pantalla";
        //Declarar una variable
        $nombredevariable = "Texto";
        echo "<br>";
        echo $nombredevariable;
        for ($index = 0; $index <= 10; $index++) {
            echo "Linea Número: ".$index."<br>";
        }
        $variablearray = [1,2,3,4];
        print_r($variablearray);
        print_r($_GET);
        $variablesilla =1;
        while ($variablesilla<20) {
            echo "Soy menor a 20 y mi valor es ".$variablesilla;
            echo "<br>";
            $variablesilla++;
        }
        ?>
    </body>
</html>
