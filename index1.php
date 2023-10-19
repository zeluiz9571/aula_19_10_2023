<?php

class Car
{
    public $color = 'red';
    public $numberOfTires = 4;
    public static $country = "Canada";
    public function _construct($color)
    {
        $this->color = $color;
    }
    Public function __destruct()
    {
        echo "<br>";
        echo "Objeto está sendo destruído";
        
    }

    public function setColor($val)
    {
        $this->color = $val;
    }

    public function getColor()
    {
        return $this->color;
    }
}

$bmw = new Car("white");

echo $bmw->color;

echo $bmw->getColor(); //Isso imprimirá "branco" à propriedade color

//$bmw->setColor("black"); //Isso irá sobrescrever a propriedade de cor para preto

//echo $bmw->numberOfTires;
echo "<br>";
echo $bmw->getColor();
echo "<br>";
echo Car::$country;
?>