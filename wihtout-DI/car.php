<?php 
	require_once('premium.php');

	class Car
	{
		private $fuel;

		public function __construct()
		{
			$this->fuel = new Premium();
		}

		public function fillUp()
		{
			$string = "This car is filled up with {$this->fuel->getName()}";
			$string .= " with octane {$this->fuel->getOctane()}";
			$string .= " and you have to pay {$this->fuel->getPrice()} ";

			echo $string;
		}
	}
 ?>