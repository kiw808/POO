<?php
require_once 'Bicycle.php';
require_once 'Skateboard.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'MotorWay.php';
require_once 'ResidentialWay.php';
require_once 'PedestrianWay.php';

// Car instance
echo '<h3>Car</h3>';
$myCar = new Car('red', 4, 'fuel');

$myCar->switchOn();
echo $myCar->lightsCheck() . '<br>';

$myCar->switchOff();
echo $myCar->lightsCheck() . '<br>';

// Bicycle instance
echo '<h3>Bike</h3>';
$myBike = new Bicycle('blue', 1); 

$myBike->switchOn();
echo $myBike->lightCheck() . '<br>';

$myBike->forward();
echo 'Current speed : ' . $myBike->getCurrentSpeed() . '<br>';

$myBike->switchOn();
echo $myBike->lightCheck() . '<br>';

$myBike->switchOff();
echo $myBike->lightCheck();

// Skateboard
echo '<h3>Skateboard</h3>';
$myBoard = new Skateboard('black', 1);

$myBoard->forward();
echo 'Current speed : ' . $myBoard->getCurrentSpeed() . '<br>';
