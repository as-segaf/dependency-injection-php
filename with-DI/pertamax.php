<?php 
	require_once('fuel.php');

	class Pertamax implements Fuel
	{
		private $name;
		private $price;
		private $octane;

		public function __construct()
		{
			$this->name   = "pertamax";
			$this->price  = 8000;
			$this->octane = 92;
		}

		public function getName()
		{
			return $this->name;
		}

		public function getPrice()
		{
			return $this->price;
		}

		public function getOctane()
		{
			return $this->octane;
		}
	}
 ?>