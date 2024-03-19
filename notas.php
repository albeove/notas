<?php
    header("Location:index.php");
    $nota = $_POST['nota'];
    $archivo = 'notas.txt';
    file_put_contents($archivo, $nota . PHP_EOL, FILE_APPEND);

?>