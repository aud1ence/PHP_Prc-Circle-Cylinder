<?php

namespace src;

class Circle
{
    protected int $radius;
    protected string $color;

    public function __construct(int $radius, string $color )
    {
        $this->radius = $radius;
        $this->color = $color;
    }

    /**
     * @return int
     */
    public function getRadius(): int
    {
        return $this->radius;
    }

    /**
     * @param int $radius
     */
    public function setRadius(int $radius): void
    {
        $this->radius = $radius;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function toString(): string {
        return "Circle's radius: {$this->radius} <br> Circle's color: {$this->color} ";
    }

    public function calculateArea(): string {
        return "The Area: " . pow($this->radius, 2) * pi();
    }

}