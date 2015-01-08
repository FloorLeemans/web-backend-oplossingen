<?php 

class Lion extends Animal
{
	protected $species	=	'';

	public function __construct($name, $gender, $health, $species)
	{
		//parent roept de klasse 'Animal' al aan omdat je dat boven al gezet hebt, __construct is de functie die je wil uitvoeren
		parent::__construct($name, $gender, $health);
		$this->species 	=	$species;
	}

	public function getSpecies ()
	{
		return $this->species;
	}

	public function doSpecialMove ()
	{
		return 'roar';
	}
}

?>