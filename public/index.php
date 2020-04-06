<?php

// QUETE COMPOSER
require_once '../vendor/autoload.php';
require '../src/Wcs/Hello.php';
// QUETE POO PART 2
require '../src/POO_Heritage/Car.php';
require '../src/POO_Heritage/Bicycle.php';
require '../src/POO_Heritage/Truck.php';
// QUETE POO PART 3
require_once('../src/POO_Abstract/Vehicule.php');
require_once('../src/POO_Abstract/MotorWay.php');

use App\Wcs\Hello;
use HelloWorld\SayHello;

use App\POO_Heritage\Car;
use App\POO_Heritage\Bicycle;
use App\POO_Heritage\Truck;

use App\POO_Abstract\MotorWay;
use App\POO_Abstract\Vehicule;

$hello = new Hello();
echo $hello->talk();

echo SayHello::world();

// QUETE TWIG
$loader = new Twig\Loader\FilesystemLoader('./../src/views');
$twig = new Twig\Environment($loader);

$products = ['product1', 'product2', 'product3', 'product4', 'product5'];


try {
    echo $twig->render('home.html.twig', [
        'title' => 'My Mega Twig Shop !',
        'products' => $products,
    ]);
} catch (\Twig\Error\LoaderError $e) {
} catch (\Twig\Error\RuntimeError $e) {
} catch (\Twig\Error\SyntaxError $e) {
}


// QUETE POO.Part-2 heritage
$bicycle = new Bicycle('blue', 1);
$car = new Car('green', 4, 'electric');
$truck = new Truck('red', 3, 150, 'electric');
$truck->setStorageCapacyties(1);

$bike = new Bicycle('red', 1);

$peugeot = new Car('yellow', 2, 'diesel');

$bike->setCurrentSpeed(130);

echo $truck->inFilling();

echo'<br><br>';

echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->setCurrentSpeed(15) . ' 15 km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->setCurrentSpeed(0) . ' 0 km/h' . '<br>';
echo $bike->brake();

echo'<br><br>';


echo $peugeot->forward();
echo '<br> Vitesse de la voiture: ' . $peugeot->setCurrentSpeed(30) . ' 30 km/h' . '<br>';
echo $peugeot->brake();
echo '<br> Vitesse de la voiture : ' . $peugeot->setCurrentSpeed(0) . ' 0 km/h' . '<br>';
echo $peugeot->brake();

echo'<br><br>';

echo $truck->forward();
echo '<br> Vitesse du camion: ' . $truck->setCurrentSpeed(50) . ' 50 km/h' . '<br>';
echo $truck->brake();
echo '<br> Vitesse du camion : ' . $peugeot->setCurrentSpeed(0) . ' 0 km/h' . '<br>';
echo $truck->brake();


// QUETE POO.Part-3 Abstract
$autoroute = new MotorWay();

echo 'we are on a Motorway. Number of lanes is ' . $autoroute->getNbLane() . ' and max speed is ' . $autoroute->getMaxSpeed() . ' km/h<br>';

$car = new Vehicule('car');
echo 'on ajoute une voiture sur la route<br>';
echo $autoroute->addVehicule($car);
echo '<br>';

$bike =new Vehicule('bike');
echo 'on ajoute un vélo sur la route<br>';
echo $autoroute->addVehicule($bike);
echo '<br>';

var_dump($autoroute->getCurrentVehicles());