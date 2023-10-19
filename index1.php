<?php

class Car
{
    public $color = 'red';
    public $numberOfTires = 4;

    public function _construct($color)
    {
        $this->color = $val;
    }

    public function getColor()
    {
        return $this->color;
    }
}

$bmw = new Car("white");

echo $bmw->getColor(); //Isso imprimirá "branco" à propriedade color

$bmw->setColor("black"); //Isso irá sobrescrever a propriedade de cor para preto

//echo $bmw->numberOfTires;
echo "<br>";
echo $bmw->getColor();
?>