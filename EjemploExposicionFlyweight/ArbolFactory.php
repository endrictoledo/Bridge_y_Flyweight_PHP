<?php
require_once 'ArbolFlyweight.php';
class ArbolFactory {
    private $flyweights = [];

    public function obtenerArbol(String $color) {
        if (!isset($this->flyweights[$color])) {
            $this->flyweights[$color] = new ArbolFlyweight($color);
        }
        return $this->flyweights[$color];
    }
}

?>