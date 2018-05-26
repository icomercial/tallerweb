<?php
$minUserLevel=20;
$cfgProgDir="./phpSecurePages/";
include $cfgProgDir.'secure.php';
include './cabecera.php';
?>
<nav>
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="/inscripciones/">Inicio</a>
        </li>
        <?php
        if($userLevel==50 || $login=="usuario")
            {
        ?>
                    <li class="nav-item">
                        <a class="nav-link" href="/inscripciones/admin/">Administrador</a>
                    </li>
        <?php } ?>
        <li class="nav-item">
            <a class="nav-link" href="/inscripciones/salir/">Salir</a>
        </li>
    </ul>
</nav>
<?php
include './piedepagina.php';
?>
