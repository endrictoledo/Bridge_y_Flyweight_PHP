<?php
Class ClienteBosque {
    private $bosque = [];
    private $factory;

    public function __construct() {
        $this->factory = new ArbolFactory();
    }

    public function hacerBosque ($cantidad){
        $arbolVerde = $this->factory->obtenerArbol("green");

        for ($i = 0; $i < $cantidad; $i++) {
            $x = rand(10, 1920);
            $y = rand(70, 1200);
            $this->bosque[] = new ArbolContexto($x, $y, $arbolVerde);
        }

        return $this->bosque;
    }
}
?>