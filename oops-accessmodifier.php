<?php

/*
access  		|class itseld	|	ouside of class		|	derived class
				|				|						|
public :  		|	allowed		|		allowed			|		allowed    can override
				|				|						|
protected : 	|	allowed		|		not allowed		|		allowed		cannot override
				|				|						|
private : 		|	allowed		|		not allowed		|		not allowed	

*/


/*
PROTECTED : 

- if properties and methods of base class is protected while construct is public then we can access them in their derived class with public accessmodifier and can
  call through objects of derived class.
  
- but if we give protected for construct function then we will get an error of access. Construct function should be public, properties and methods can be protected.
 
*/
class base{
	
	protected $name;
	
	public function __construct($n)
	{
		$this->name = $n;
	}
	
	protected function show()
	{
		echo "your name : ".$this->name."<br/>";
	}
}

class child extends base{
	
	public function show()
	{
		echo "your name : ".$this->name."<br/>";
	}
	
}

$b1 = new child("Sarita Pal");
$b1->show();


/*
PRIVATE : 

cannot access private properties or methods outside of class. not even in derived class.

*/


class basep{
	
	private $nam;
	
	public function __construct($n){
		$this->nam =$n;
	}
	
	public function get()
	{
		echo "name is ".$this->nam."<br/>";
	}	
}


class childp extends basep
{
	public function get()
	{
		echo "name is ".$this->nam."<br/>";
	}
}

$bp = new childp("Shobha");
$bp->get();


/*o/p : Notice: Undefined property: childp::$nam in D:\PROJECTS\xampp\
\OOPS\oops-accessmodifier.php on line 83
name is       */
?>