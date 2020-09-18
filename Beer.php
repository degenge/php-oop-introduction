<?php

class Beer extends Beverage
{
    private const BEERNAME = 'Jupiler';

    private string $name;
    private float $alcoholPercentage;

    public function __construct(string $color, float $price, string $name, float $alcoholPercentage, string $temperature = 'cold')
    {
        parent::__construct($color, $price, $temperature);
        $this->name              = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return float
     */
    public function getAlcoholPercentage(): float
    {
        return $this->alcoholPercentage;
    }

    /**
     * @param float $alcoholPercentage
     */
    public function setAlcoholPercentage(float $alcoholPercentage)
    {
        $this->alcoholPercentage = $alcoholPercentage;
    }

    public function beerInfo(): string
    {
        return "Hi, I'm a " . $this->name . ' and I have an alcohol percentage of  ' . $this->alcoholPercentage . '% and I have a ' . $this->color . ' color. </br>';
    }

    public function getFavoriteBeer(): string
    {
        return self::BEERNAME;
    }
}