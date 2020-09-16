<?php

include ('Beverage.php');

$cola = new Beverage('black', 2);
echo $cola->getInfo();
echo 'The price is ' . $cola->temperature . 'eur.</br>';
