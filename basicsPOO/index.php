<?php
include 'basics-1.php';


require_once 'basics-1.php';
$bike = new Bicycle('blue');


echo $bike->forward();
echo '<br>';
echo $bike->brake();
echo '<br>';

$car = new Car('yellow', 100, 'diesel');


echo $car->start();
echo '<br>';
echo $car->forward();
echo '<br>';
echo $car->brake();
?>