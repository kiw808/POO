<?php

require('Bicycle.php');
require ('Car.php');

echo '<h4>Bike</h4>';

$bike = new Bicycle('blue');
echo $bike->forward();
echo $bike->brake();

echo '<hr>';

// Challenge : Car class
echo '<h4>Car</h4>';

// Instancing a new Car object
$citroen2Cv = new Car('red', 4, 'gazole');

// Filling energy
$citroen2Cv->setEnergyLevel(25);
echo "Energy level is : " . $citroen2Cv->getEnergyLevel() . '<br>';

// Starting the 2 Chevaux
echo $citroen2Cv->start();

// Riding the 2 Chevaux for 10 miles
for ($i = 0; $i < 10; $i ++) {
    echo $citroen2Cv->forward();
}

// Checking its energy level
echo "Energy level is : " . $citroen2Cv->getEnergyLevel() . '<br>';

// Applying brakes
echo $citroen2Cv->brake();

// Riding a bit more
for ($i = 0; $i < 16; $i ++) {
    echo $citroen2Cv->forward();
}

// Trying to start again
echo $citroen2Cv->start();

// But there is no more energy
echo "Energy level is : " . $citroen2Cv->getEnergyLevel() . '<br>';
