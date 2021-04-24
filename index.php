<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'MotorWay.php';
require_once 'ResidentialWay.php';
require_once 'PedestrianWay.php';

$bike = new Bicycle('blue', 1);
$bike->setColor = 'blue';
$bike->setCurrentSpeed = 0;

echo $bike->start() . '<br>';
echo $bike->forward();
echo '<br> Bike speed : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Bike speed : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br>' . $bike->start();

echo '<br><br>';

$car = new Car('green', 4, 'electric');
$car->setCurrentSpeed(80);
echo $car->start() . '<br>';
echo $car->forward();
echo '<br> Car speed : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo '<br> Car speed : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo '<br>' . $car->start();

echo '<br><br>';

$truck = new Truck(100, 'pink', 6, 'fuel');
$truck->setCurrentSpeed(80);
echo $truck->start() . '<br>';
echo $truck->forward();
echo '<br> Truck speed : ' . $truck->getCurrentSpeed() . ' km/h' . '<br>';
echo $truck->brake();
echo '<br> Truck speed : ' . $truck->getCurrentSpeed() . ' km/h' . '<br>';
echo $truck->brake();
echo '<br>';
for ($i = $truck->getLoading(); $i <= $truck->getStockageCapacity(); $i+=10) {
    $truck->setLoading($i);
    echo $truck->getLoading() . '% loaded truck<br>';    
    echo $truck->truckFill() . '<br>';
}
echo $truck->start();

$motorWay = new MotorWay();
$motorWay->addVehicle($truck);
$motorWay->addVehicle($car);
$motorWay->addVehicle($bike);
var_dump($motorWay);

$residentialWay = new ResidentialWay();
$residentialWay->addVehicle($truck);
$residentialWay->addVehicle($car);
$residentialWay->addVehicle($bike);
var_dump($residentialWay);

$pedestrianWay = new PedestrianWay();
$pedestrianWay->addVehicle($truck);
$pedestrianWay->addVehicle($car);
$pedestrianWay->addVehicle($bike);
var_dump($pedestrianWay);



