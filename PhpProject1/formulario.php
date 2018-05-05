<?php
include 'cabecera.php';
include("./shared/ez_sql_core.php");
include("./mysql/ez_sql_mysql.php");
?>
<div class="container">
    <div class="row">
        <div class="col">
            <form action="insertar.php" method="GET">
                <input type="text" id="Nombre">
                <input type="text" id="Apellido">
                <input type="text" id="Correo">
                <input type="submit" value="Enviar Datos">
            </form>
        </div>
    </div>
</div>

<?php
include 'piedepagina.php';
?>