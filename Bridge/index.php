<?php

require_once 'Implementador/Color.php';
require_once 'Implementador concreto/Azul.php';
require_once 'Implementador concreto/Rojo.php';
require_once 'Abstracción/Forma.php';
require_once 'Abstracción refinada/Cuadrado.php';
require_once 'Abstracción refinada/Circulo.php';


$colorAzul = new Azul();
$colorRojo = new Rojo();
$formaCuadrado = new Cuadrado($colorAzul);
$formaCirculo = new Circulo($colorRojo);


echo $formaCuadrado->dibujar()."<br>"; 
echo $formaCirculo->dibujar();