<<?php
class ArbolFlyweight {
    private $color;

    public function __construct($color) {
        $this->color = $color;
    }

    public function dibujar($x, $y) {
        echo "<div style=' width:20px; height:20px; background-color:{$this->color}; 
        border-radius:50%; position:absolute; left:{$x}px; top:{$y}px; '></div>";
    }
}

?>