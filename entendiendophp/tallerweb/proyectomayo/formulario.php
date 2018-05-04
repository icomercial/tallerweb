<?php
include 'cabecera.php';
?>
<div class="container">
    <div class="row">
        <div class="col">
            <form action="insertarnombres.php" method="GET">
                <input name="Nombre" type="text">
                <input name="Apellido" type="text">
                <input name="Correo" type="text">
                <input type="submit" value="Enviar Formulario">
            </form>
        </div>
    </div>
</div>

<?php include 'pie.php';
?>