<?php

/*
- with abstract class , we cannot create the object of the class.
- we should add 'abstract' keyword before the class name ex. abstract class A.
abstract class A{
	
	protected $name;
	protected function __construct($n)
	{
		$this->name = $n;
	}
}

- In abstract class there should be atleast one abstract method present.

abstract class A{
	
	protected $name;
	protected function __construct($n)
	{
		$this->name = $n;
	}
	abstract protected function show();  //only declairing, not implementing
}

- here we only declare the method but not implementing it(no code).
- to use the method of abstract class we should use inheritance. 
- when we inherit the abstract class we should implement that abstract method in derived class.

class B extends class A{
	public function show()
	{
		echo $this->name;
	}
}

*/
 abstract class parentclass
 {
	// public $name;
	 
	abstract protected function cal($a,$b);
 }
 
 class childclass extends parentclass
 {
	 public function cal($m,$n)
	 {
		//echo  $m+$n;
		
		echo 'helllo sarita';
	 }
 }
 
 $obj = new childclass();
 $obj->cal(5,9);





?>