<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Conversor de monedas. Resultados del formulario</title>
        <link rel="stylesheet" type="text/css" href="estilo.css">
    </head>
    <body>
        <h1>Conversor de monedas</h1>
        
        <?php
        $tablaconversion = array (
            "dolares" => 1.488,
            "libras" => 0.747,
            "yenes" => 158.339,
            "francos" => 1.605   
        );
        $euros = $_REQUEST['euros'];
        $moneda = $_REQUEST['moneda'];
        if ($euros == "")
            print ("<p>Debe introducir una cantidad</p>\n"); 
        else{
            $cantidad = $euros * $tablaconversion ["$moneda"];
            print ("<p>$euros euro(s) eqivale(n) a $cantidad $moneda</p>\n"); 
        }
        ?>
        
        <p>[<a href="Introducir.php">Volver</a>]</p>

    </body>
</html>




