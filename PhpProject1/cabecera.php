<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script>
        $(document).ready(function(){
            $("#enviarDatos").click(function(e){
                //voy a hacer algo cuando haga clic en el boton
                e.preventDefault();
                $.ajax({
                 url: "mostrar.php",
                 type: 'post',
                 dataType: 'application/json',
                 data: $("#form1").serialize()
                }).done(function(){
                    
                })
                        .fail(function(){
                            
                        })
                        .always(function(){
                            alert("DATOS INSERTADOS");
                        })
            });
         $(".modificar").click(function(e){
             e.preventDefault();
             var idc =$(this).attr("id");
             var otro = $("#n_"+idc).attr("otrop");
             //alert(otro);
             $("#n_"+idc).html("<input type=\"text\" id=\"v_"+idc+"\" value=\""+otro+"\">");
         });
        });    
        </script>
    </head>
    <body>
        <div class="container">
        