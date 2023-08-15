<?php

/*
Inheritance : -

-class b and class a are two different class.
-class b can access the properties and methods of class a using inheritance
- class a will be called base class and class b will called as derived/child class
- to inherit a class we use extends keyword

*/

class fruits{
	//properties & methods
}
class vegetables extends fruits{
	//properties & methods
}

$f = new fruits(); //can access properties & methods of fruits class only
$v = new vegetables(); //can access properties & methods of both,fruits and vegetables class 


//--------------------------------------------example inheritance --------------------------------------------------------------------------

class emp{
	
	public $name,$age,$salary;
	
	function __construct($n,$a,$s)
	{
		$this->name =$n;
		$this->age =$a;
		$this->salary = $s;
	}
	
	function info()
	{
		echo"employee name is ".$this->name.", age is ".$this->age." and salary is ".$this->salary."<br/></br>";
	}
	
}

class manager extends emp
{ 
	public $ph =3000;
	public $ta=2000;
	public $totalsal;
	
	function info1()
	{
		$this->totalsal = $this->salary + $this->ph + $this->ta;
		echo "Managers name is ".$this->name." and age is ".$this->age." and salary is ".$this->totalsal;
	}
}

$e1 = new emp('sarita', 28, 30000);
$e2 = new manager('rekha',30,35000);

$e1->info();
$e2->info1();

?>