<?php

class Beverage
{
    public $color;
    public $price;
    public $temperature;

    /**
     * Beverage constructor.
     * @param $color
     * @param $price
     * @param $temperature
     */
    public function __construct(string $color, float $price, string $temperature = 'cold')
    {
        $this->color       = $color;
        $this->price       = $price;
        $this->temperature = $temperature;
    }

    public function getInfo(): string
    {
        return 'This beverage is ' . $this->temperature . ' and ' . $this->color . '.</br>';
    }

}