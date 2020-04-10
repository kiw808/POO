<?php
require_once 'Bicycle.php';
require_once 'Skateboard.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'MotorWay.php';
require_once 'ResidentialWay.php';
require_once 'PedestrianWay.php';

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

// POO basics - #3
$ferrari = new Car('red', 2, 'fuel');

$countryRoad = new MotorWay();

$countryRoad->addVehicle($daf);
$countryRoad->addVehicle($tesla);

echo '<hr>';

echo '<strong>Dump Country road (motor way)</strong><br>';
var_dump($countryRoad);

$quay = new PedestrianWay();
$quay->addVehicle($bike);
$quay->addVehicle($tesla);  // tesla object is not added to quay object because its class doesn't appear in ALLOWED_VEHICLES

echo '<strong>Dump quay (pedestrian way)</strong> ';
var_dump($quay);
