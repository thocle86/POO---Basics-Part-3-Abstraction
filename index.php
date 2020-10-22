<?php

require_once "MotorWay.php";
require_once "PedestrianWay.php";
require_once "ResidentialWay.php";
require_once "Car.php";
require_once "Bicycle.php";

/****************************************************************/
/*MOTOR WAY*/
/*ONLY CARS ACCEPTED*/
/****************************************************************/

/*CREATION DE MOTOR WAY*/
$motorWay = new MotorWay();
echo $motorWay;
var_dump($motorWay->getCurrentVehicles());

/*CREATION DE VOITURE 1*/
$car1 = new Car("red", 4, "diesel");
echo $car1;

/*AJOUT DE VOITURE 1 SUR MOTOR WAY => ajout accepté*/
$motorWay->addVehicle($car1);
var_dump($motorWay->getCurrentVehicles());

/*CREATION DE VOITURE 2*/
$car2 = new Car("blue", 4, "diesel");
echo $car2;

/*AJOUT DE VOITURE 2 SUR MOTOR WAY => ajout accepté*/
$motorWay->addVehicle($car2);
var_dump($motorWay->getCurrentVehicles());

/*CREATION DE VELO 1*/
$bicycle1 = new Bicycle("green", 1);
echo $bicycle1;

/*AJOUT DE VELO 1 SUR MOTOR WAY => ajout refusé*/
$motorWay->addVehicle($bicylce1);
var_dump($motorWay->getCurrentVehicles());

echo "<hr>";
/****************************************************************/
/*PEDESTRIAN WAY*/
/*ONLY BICYCLES ACCEPTED*/
/****************************************************************/

/*CREATION DE PEDESTRIAN WAY*/
$pedestrianWay = new PedestrianWay();
echo $pedestrianWay;

/*CREATION DE VOITURE 3*/
$car3 = new Car("purple", 4, "diesel");
echo $car3;

/*AJOUT DE VOITURE 3 SUR PEDESTRIAN WAY => ajout refusé*/
$pedestrianWay->addVehicle($car3);
var_dump($pedestrianWay->getCurrentVehicles());

/*CREATION DE VELO 2*/
$bicycle2 = new Bicycle("yellow", 1);
echo $bicycle2;

/*AJOUT DE VELO 2 SUR MOTOR WAY => ajout accepté*/
$pedestrianWay->addVehicle($bicycle2);
var_dump($pedestrianWay->getCurrentVehicles());

echo "<hr>";
/****************************************************************/
/*RESIDENTIAL WAY*/
/*CARS AND BICYCLES ACCEPTED*/
/****************************************************************/

/*CREATION DE RESIDENTIAL WAY*/
$residentialWay = new ResidentialWay();
echo $residentialWay;

/*CREATION DE VOITURE 4*/
$car4 = new Car("black", 4, "diesel");
echo $car4;

/*AJOUT DE VOITURE 4 SUR RESIDENTIAL WAY => ajout accepté*/
$residentialWay->addVehicle($car4);
var_dump($residentialWay->getCurrentVehicles());

/*CREATION DE VELO 3*/
$bicycle3 = new Bicycle("colorful", 1);
echo $bicycle3;

/*AJOUT DE VELO 3 SUR MOTOR WAY => ajout accepté*/
$residentialWay->addVehicle($bicycle3);
var_dump($residentialWay->getCurrentVehicles());