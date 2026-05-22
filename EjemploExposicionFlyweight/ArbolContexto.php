<?php
require_once 'ArbolFlyweight.php';
class ArbolContexto {
    private $x;
    private $y;
    private $arbol;

    public function __construct(int $x, int $y, ArbolFlyweight $arbol) {
        $this->x = $x;
        $this->y = $y;
        $this->arbol = $arbol;
    }

    public function mostrar() {
        $this->arbol->dibujar($this->x, $this->y);
    }
}
?>