<?PHP
                $minUserLevel = 5;
                $cfgProgDir =  'phpSecurePages/';
                include($cfgProgDir . "secure.php");
        ?>
<?php
include("cabecera.php");
?>
<div class="container">
    <div class="row">
        <div class="col">
            <?php include 'menu.php'; ?>
        </div>
        <div class="col">
            Nombre de usuario: <b><?php echo $login;?></b>
        </div>
    </div>
    <h1>Página cualquiera</h1>
    <p>Párrafo de texto</p>
</div>



<?php
include("pie.php");
?>