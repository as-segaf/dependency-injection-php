<?php 
	class Motorcycle
	{
		private $fuel;

		public function __construct(Fuel $fuel)
		{
			$this->fuel= $fuel;
		}

		public function fillUp()
		{
			$string = "This motorcycle is filled up with {$this->fuel->getName()}";
			$string .= " with octane {$this->fuel->getOctane()}";
			$string .= " and you have to pay {$this->fuel->getPrice()}";

			echo $string;
		}
	}
 ?>