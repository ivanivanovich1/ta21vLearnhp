<?php

class Box
{
    protected $width;
    protected $height;
    protected $length;

    public function _construct($_width, $_height, $_length)
    {
        $this->width = $_width;
        $this->height = $_height;
        $this->length = $_length;
    }

    public function volume()
    {
        return $this->width * $this->height * $this->length;
    }
}

trait Colorful
{
    public $color;

    public function getColor()
    {
        return $this->color;
    }
}

class MetalBox extends Box
{
    use Colorful;

    public $weight;

    public function mass()
    {
        return $this->volume() * $this->weight;
    }
}

$metalBox = new MetalBox(3, 2, 1);

$metalBox->color = "white";

echo $metalBox->getColor();
