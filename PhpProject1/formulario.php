<?php
include 'cabecera.php';
include("./shared/ez_sql_core.php");
include("./mysql/ez_sql_mysql.php");
?>
<div class="container">
    <div class="row">
        <div class="col">
            <form name="form1" id="form1" action="insertar.php" method="GET">
                <input type="text" id="Nombre" name="Nombre">
                <input type="text" id="Apellido" name="Apellido">
                <input type="text" id="Correo" name="Correo">
                <button id="enviarDatos" class="btn btn-success">Enviar</button>
            </form>
        </div>
    </div>
</div>

<?php
include 'piedepagina.php';
?>