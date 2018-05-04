<?php
require("clasesmias.php");
$variable = new menuItem();
?>
<nav>
    <ul class="nav">
        <li class="nav-item">
        <?php $variable->inicio();?>
    </li>
    <?php
    if($userLevel>10){
        echo "<li class=\"nav-item\">".$variable->administrador()."</li>";
    }
    ?>
</ul>
</nav>
