<?php
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';

echo '<h3>Bycicle<h3>';

$bike = new Bicycle('blue', 1);
echo $bike->forward();
var_dump($bike);

echo '<hr>';

echo '<h3>Car</h3>';

$tesla = new Car('green', 4, 'electric');
echo $tesla->forward();
var_dump($tesla);

var_dump(Car::ALLOWED_ENERGIES);

echo '<hr>';

echo '<h3>Truck</h3>';

$daf = new Truck('white', 2, 'fuel', 50);
$daf->setCargoLoad(30);
echo $daf->howFull() . '<br>';
echo $daf->forward();

var_dump($daf);