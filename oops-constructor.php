
<?php
/*
- constructor reduces lines of code
- avoid repetition of code
- calls automatically when we create object of that class
- write inside class */

/*
class person{
	
	public $name,$age;
	function show()
	{
		echo  "my name is ".$this->name." and my age is ".$this->age;
	}
	
}

$p1 = new person();
$p1->name = "Sarita Pal";
$p1->age = 28;

$p1->show();
?>
*/

//----------------------- how to set default value of variable or properties--------------------------------------------------

class person{
	
	public $name = "no name";
	public $age = 0;
	function show()
	{
		echo  "my name is ".$this->name." and my age is ".$this->age."<br>";
	}
	
}

$p1 = new person();
//$p1->name = "Sarita Pal";
$p1->age = 28;

$p1->show();

//output  = my name is no name and my age is 28
?>

<?php

//----------------------------------- default value with constructor ---------------------------------------------------------------------
class people{
	public $name,$age;
	
	function __construct($n="no name",$a=0)//we can decalre default value with constructor
	{
		//assigning users given value to name and age variable
		$this->name = $n;
		$this->age =$a;
	}	
	function show()
	{
		echo  "my name is ".$this->name ." and my age is ".$this->age;
	}
}
$p2 = new people("shobha",21);
//$p2->name = "Shobha";
//$p2->age = 21;
$p2->show();
?>