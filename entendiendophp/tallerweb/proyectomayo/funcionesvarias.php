<?php
function tituloWeb($param="No tengo titulo") {
    $titulo = "<title>".$param."</title>";
    return $titulo;
}
function incluirJavascript(){
    ?>
        <script src="jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<?php
}