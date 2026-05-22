<<?php
require_once 'ArbolFactory.php';
require_once 'ArbolContexto.php';
require_once 'ClienteBosque.php';

$cliente = new ClienteBosque();
$bosque = $cliente->hacerBosque(2000);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Patrón Flyweight: Bosque</title>
</head>
<h1>Bosque patron Flyweight</h1>
<body style="position:relative; width:1920px; height:1200px; background:#ffffff;">
    <?php
    foreach ($bosque as $arbol) {
        $arbol->mostrar();
    }
    ?>
</body>
</html>