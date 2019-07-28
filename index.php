<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Universidad Elite</title>
</head>
<?php
    include('conexion/conexion.php');
    include('modelos/modelo_asistente.php');

?>
    <body>
        <h1>Universidad Elite</h1>
        
        <p>BEMO es el asistente virtual de la Universidad Elite.<br>Pregunta le algo</p>
        <form action="" method="POST">
            <label for="pre"><strong>¿Qué deseas preguntar?</strong></label>
            <input type="text" name="Pregunta" id="pre" required>
            <br>
            <input type="submit">
        </form>
        
    </body>
    <script>
        var  texto = document.getElelmentById.(pre).value;
    </script>
</html>