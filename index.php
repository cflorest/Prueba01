<?php
include('lib/constantes.php');
include('lib/vacaciones.php');
$_SESSION["hm"]="Hola Mundo";

$vacacion= new Vacaciones("1-9",
                          "TEST",
                          "CARGO TEST",
                           "",
                            "",
                            "");
$_SESSION["regvacacion"]=$vacacion;
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>HOSTALRIOAMAZONAS RESERVATION ONLINE</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link href="css/estiloprincipal.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        
        <div id="contenedor">
            <div style="text-align: center"id="titulo">HOSTALRIOAMAZONAS RESERVATION ONLINE</div>
            <div id="menu"><?php include('menu.php');?></div>
            <div id="contenido"></div>
            <footer>Antonio Varas #666, Fono de contacto: 000000000</footer>
        </div>
        
    </body>
    
    <script>
        $("#prisolicitud").on( "click", function( event ) {
            if(($("[id*=subsolicitud]").css("display")!="none")){
                 $("[id*=subsolicitud]").css("display","none");
            }
            else{
                $("[id*=subsolicitud]").show();
                $("[id*=subsolicitud]").css("display","block");
            }
                
                
            });
        
        $('[data-toggle="tooltip"]').tooltip(); 
    </script>
    
    
</html>
