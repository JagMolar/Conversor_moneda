<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Conversor de monedas</title>
        <link rel="stylesheet"  type="text/css" href="estilo.css">
    </head>
    <body>
        <h1>Conversor de monedas</h1>
        
        <form action="Convertir.php" method="post">
            <p>Cantidad en euros: 
                <input type="text" name="euros">
                Convertir a: 
                <select name="moneda" id="">
                    <option value="dolares" selected="">Dólares USA</option>
                    <option value="libras">Libras esterlinas</option>
                    <option value="yenes">Yenes japoneses</option>
                    <option value="francos">Francos suizos</option>
                </select>
            </p>
            <input type="submit" name="enviar" value="Convertir">
        </form>
    </body>
</html>
