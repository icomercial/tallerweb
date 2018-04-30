<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sorteo Local</title>
        <script src="jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script>
        $(document).ready(function(){
            //var sorteado = ["Juanito",
            // "Pepito",
            //  "Luchito",
            //   "Jorgito",
            //    "Claudito"];
            var sorteado = [
                <?php $db = new ezSQL_mysql("sasasasa");
                        $ganadores = $db->get_results("select * from ganadores");
                        $i=1;
                        foreach ($ganadores as $premiado){
                           echo "\"".$premiado->NombreGanador."\"";
                           if($i<5){
                           echo ",";
                           }
                            $i++;
                            } ?>
           "" ];
        $("#Participante1N").html("1");
        $("#Participante2N").html("2");
        $("#Participante3N").html("3");
        $("#Participante4N").html("4");
        $("#Participante5N").html("5");
        $("#Participante1Nombre").html(sorteado[0]);
        $("#Participante2Nombre").html(sorteado[1]);
        $("#Participante3Nombre").html(sorteado[2]);
        $("#Participante4Nombre").html(sorteado[3]);
        $("#Participante5Nombre").html(sorteado[4]);
        $("#verResultado").fadeOut(0);
            $("#verResultado1").fadeOut(0);
            $("#verResultado2").fadeOut(0);
            $("#verResultado3").fadeOut(0);
            $("#botonIniciar").click(function(){
                var primerResultado = Math.round(Math.random()*5);
                var primerResultado1 = Math.round(Math.random()*5);
                var primerResultado2 = Math.round(Math.random()*5);
                var primerResultado3 = Math.round(Math.random()*5);
                $("#verResultado").fadeIn(200);
                $("#verResultado").html(sorteado[primerResultado]);
                $("#verResultado").delay(900);
                $("#verResultado").fadeOut(200);
                $("#verResultado1").delay(1300);
                $("#verResultado1").fadeIn(200);
                $("#verResultado1").html(sorteado[primerResultado1]);
                $("#verResultado1").delay(900);
                $("#verResultado1").fadeOut(200);
                $("#verResultado2").delay(2600);
                $("#verResultado2").fadeIn(200);
                $("#verResultado2").html(sorteado[primerResultado2]);
                $("#verResultado2").delay(900);
                $("#verResultado2").fadeOut(200);
                $("#verResultado2").delay(3900);
                $("#verResultado2").fadeIn(200);
                $("#verResultado2").html(sorteado[primerResultado2]);
                $("#verResultado2").delay(900);
                $("#verResultado2").fadeOut(200);
            });
        });    
        </script>
            <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>Nuestro Sorteo Local</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <button class="btn btn-success" id="botonIniciar">Iniciar Tombola</button>
                </div>
                <div class="col-6">
                    <div id="verResultado">
                        Juan Perez
                    </div>
                    <div id="verResultado1">
                        Nelson Alvarez
                    </div>
                    <div id="verResultado2">
                        Julio Peralta
                    </div>
                    <div id="verResultado3">
                        Marcelo Rios
                    </div>
                </div>
                <div class="col-3">
                    <h3>Participantes</h3>
                    <p>
                    <table>
                        <tr>
                            <th>N</th>
                            <th>Participante</th>
                        </tr>
                        <tr>
                            <td id="Participante1N"></td>
                            <td id="Participante1Nombre"></td>
                        </tr>
                        <tr>
                            <td id="Participante1N"></td>
                            <td id="Participante1Nombre"></td>
                        </tr>
                        <tr>
                            <td id="Participante2N"></td>
                            <td id="Participante2Nombre"></td>
                        </tr>
                        <tr>
                            <td id="Participante3N"></td>
                            <td id="Participante3Nombre"></td>
                        </tr>
                        <tr>
                            <td id="Participante4N"></td>
                            <td id="Participante4Nombre"></td>
                        </tr>
                        <tr>
                            <td id="Participante5N"></td>
                            <td id="Participante5Nombre"></td>
                        </tr>
                    </table>
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>
