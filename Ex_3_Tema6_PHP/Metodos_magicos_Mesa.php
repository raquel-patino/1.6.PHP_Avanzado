<?php
declare (strict_types=1);
class Mesa {
    private $color;
    private $alto;
    private $ancho;

public function  __construct (string $color, float $alto, float $ancho){

    $this->color= $color;
    $this->alto= $alto;
    $this->ancho=$ancho;
}

public function __toString() : string 
{
    return "Esta mesa es de color ". $this->color. " tiene un ancho de " . $this->ancho. 
    " cm, y una altura de ". $this->alto. " cm";
    
}
    }
    







?>