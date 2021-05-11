<?php
namespace src;
use src\Circle;

class Cylinder extends Circle
{
    protected int $height;

    public function __construct(int $radius, string $color, int $height)
    {
        parent::__construct($radius, $color);
        $this->height = $height;
    }

    public function calculateVolume()
    {
        return $this->calculateArea() * $this->height;
    }

    public function __toString(): string
    {
        return "Cylinder's radius: " . $this->radius .
                "Cylinder's color: " . $this->color .
                "Cylinder's height:" . $this->height;
    }

}