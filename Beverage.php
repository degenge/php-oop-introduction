<?php

class Beverage
{
    public const BARNAME = 'De Sixtijn';
    static private int $timesServed = 0;
    protected string $color;
    protected float $price;
    protected string $temperature;

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
        ++self::$timesServed;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getBeverageInfo(): string
    {
        return 'This beverage is ' . $this->temperature . ' and ' . $this->color . ' and costs ' . $this->price . '.</br>';
    }

    public function getFavoriteBar(): string
    {
        return self::BARNAME;
    }

    public static function getTimesServed(): int {
        return self::$timesServed;
    }

}