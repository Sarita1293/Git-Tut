<?php 

class calculation{//this is a class
	
	public $a,$b,$c;//properties of class
	
	function sum()//method of class
	{
		$this->c = $this->a + $this->b;
		return $this->c;//returning some values
	}
	function sub()
	{
		$this->c = $this-> a - $this->b;
		return $this->c;
	}
	
}

$c1 = new calculation();//creating object of class calculation

$c1-> a =10; //assigning some values to object
$c1-> b =20;

echo $c1->sum();//calling methods and print the value //output is 30

echo "<br/>";

$c2 = new calculation();

$c2->a = 40;
$c2->b = 20;


echo $c2->sub();//output is 20



?>