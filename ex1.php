<?php

include ('Beverage.php');
include ('Beer.php');

$duvel = new Beer('blond', 3.5, 'Duvel', 8.5);
echo $duvel->getBeverageInfo();
echo 'The alcohol percentage for ' . $duvel->getName() . ' is ' . $duvel->getAlcoholPercentage() . '%. </br>';

$duvel->setColor('light');
echo $duvel->getBeverageInfo();

echo $duvel->beerInfo();

echo 'My favorite bar is ' . Beverage::BARNAME . '.</br>';
echo 'My favorite beer is ' . $duvel->getFavoriteBeer() . '.</br>';

$beer1 = new Beer('blond', 2.5, 'Carlsberg', 4);
$beer2 = new Beer('dark blond', 5, 'Cornet', 7.5);
$beer3 = new Beer('red', 4, 'Lindemans Kriek', 3);

echo 'I drunk ' . Beverage::getTimesServed() . ' beers.</br >';
