<?php 
	class Car
	{
		private $fuel;

		public function __construct(Fuel $data)
		{
			$this->fuel= $data;
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