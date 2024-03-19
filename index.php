<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Aplicación de Notas</h1>
    <form action="notas.php" method="POST">
        <label for="nota">Tomar Nota:</label><br>
        <input type="text" id="nota" name="nota"><br>
        <button type="submit">Guardar Nota</button>
    </form>

    <?php
        $archivo = 'notas.txt';
        if (file_exists($archivo)) {
            $notas = file($archivo);
            foreach ($notas as $nota) {
                echo "<p>$nota</p>";
            }
        } else {
            echo "<p>No hay notas disponibles.</p>";
        }
?>
    

    
</body>
</html>