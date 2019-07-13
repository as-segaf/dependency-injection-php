<?php 
	require_once('fuel.php');

	class Premium implements Fuel
	{
		private $name;
		private $price;
		private $octane;

		public function __construct()
		{
			$this->name   = "premium";
			$this->price  = 6500;
			$this->octane = 90; 
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