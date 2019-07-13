<?php 
	require_once('premium.php');
	require_once('pertamax.php');
	require_once('car.php');
	require_once('motorcycle.php');

	$pertamax = new Pertamax();
	$premium = new Premium();

	$car = new Car($pertamax);
	$car->fillUp();

	$motorcycle = new Motorcycle($premium);
	$motorcycle->fillUp();
 ?>