<!DOCTYPE html>
<?php
include './shared/ez_sql_core.php';
include './mysql/ez_sql_mysql.php';
$dbuser="root"; $dbpassword=""; $dbname="misistema"; $dbhost="localhost";
$db = new ezSQL_mysql($dbuser, $dbpassword, $dbname, $dbhost);
include './cabecera.php';
?>
<div class="container">
    <div class="row">
        <div class="col">
            <form>
            <table class="table table-bordered">
                <?php
                $consulta = "SELECT * FROM alumnos;";
                $resultado = $db->get_results($consulta);
                foreach ($resultado as $value) {
                    echo "<tr><td id=\"n_".$value->idalumnos
                            ."\" otrop=\"".$value->nombre."\">"
                            .$value->nombre."</td><td id=\"ap_".$value->idalumnos."\">"
                            .$value->apellido
                            ."</td><td><button class=\"modificar btn btn-primary\" id=\"".$value->idalumnos."\">Editar</button></td></tr>";
                }
                ?>
            </table>
            </form>
        </div>
    </div>
</div>

</body>
</html>
