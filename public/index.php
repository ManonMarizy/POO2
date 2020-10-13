<?php
require_once 'Bicycle.php';
require_once 'Cars.php';
require_once 'Vehicle.php';
require_once  'Truck.php';
$bike = new Bicycle("red", 1);

$cars = new Cars("red", 4, "diesel");

$truck = new Truck("red", 4, "diesel", 40);




// Moving bike
echo $bike->start();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();

// Moving cars
echo $cars->start();
echo '<br> Vitesse de la voiture : ' . $cars->getCurrentSpeed(). ' km/h' . '<br>';
echo $cars->forward();
echo '<br> Vitesse de la voiture : ' . $cars->getCurrentSpeed() . ' km/h' . '<br>';
echo $cars->brake();
echo '<br> Vitesse de la voiture : ' . $cars->getCurrentSpeed(). ' km/h' . '<br>';
echo $cars->brake();

//Moving truck
echo $truck->start();
echo '<br> Vitesse du camion : ' . $truck->getCurrentSpeed(). ' km/h' . '<br>';
echo $truck->forward();
echo '<br> Vitesse deu camion : ' . $truck->getCurrentSpeed() . ' km/h' . '<br>';
echo $truck->brake();
echo '<br> Vitesse du camion : ' . $truck->getCurrentSpeed(). ' km/h' . '<br>';
echo $truck->brake() . '<br>';
echo $truck->storageStatus(). '<br>';
echo $truck->setLoading(30);
echo $truck->storageStatus(). '<br>';
echo $truck->setLoading(40);
echo $truck->storageStatus(). '<br>';
