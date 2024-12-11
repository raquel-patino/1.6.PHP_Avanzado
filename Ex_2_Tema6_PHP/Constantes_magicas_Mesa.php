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

public function espacioOcupado () : string{
    if ($this->ancho >= 1.50) {
        return "Gracias a la función <b> " . __FUNCTION__. "</b> sabemos que la " . __CLASS__ .
        " no cabe en nuestro salón";
    }else {
        return "Gracias a la función <b>" . __FUNCTION__. "<b> sabemos que la " . __CLASS__ .
        " si cabe en nuestro salón";
    }
    
}


}



?>