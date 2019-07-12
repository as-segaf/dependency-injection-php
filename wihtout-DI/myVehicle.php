<?php 
	require_once('car.php');
	require_once('motorcycle.php');

	$car = new Car();
	$car->fillUp();

	$motorcycle = new Motorcycle();
	$motorcycle->fillUp();
 ?>