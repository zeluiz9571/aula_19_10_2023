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

$bmw = new Car;
//$bmw->setColor("black");
echo $bmw->numberOfTires;
echo "<br>";
echo $bmw->getColor();
?>