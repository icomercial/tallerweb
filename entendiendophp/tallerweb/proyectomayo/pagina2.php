        <?php
            include("cabecera.php");
            include("claseMenu.php");
            $palabrax = new claseMenu();
            $otravariable = $palabrax->generarMenuInicio();
            echo $otravariable;
        ?>
    </body>
</html>
