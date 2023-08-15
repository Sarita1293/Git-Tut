<?php
/*
- classes and interfaces are same.
- cannot define and assign value of properties in interface
- if we want to inherit multiple classes in one class, we should use interface.
- interface works same like abstract classes, we cannot create object of it.
- methods of interface will implement only in derived class not in inside interface.
- we only declare the methods inside interface.
*/

/*
interface A
{
	function hello($a);
}

interface B{
	
	function hi($a);
	
	function byeee($m);
	
	function seeyou();
}


class c implements A,B{
	
	public function hello($a)
	{
		echo $a."hellooo";
	}
	public function hi($a)
	{
		echo $a;
	}
	
	public function byeee($m)
	{
		echo $m;
	}
	
	public function seeyou()
	{
		echo "See youuuuu";
		
	}
}  */
//---------------------------------------------------------------example--------------------------------------------------------------

//cannot use access modifier protected and private but can use public because bydefault all the functions/methods are public


interface parent1{
	
	function calc($a,$b);
}
interface parent2{
	
	function subtr($a,$b);
}
class child implements parent1,parent2{
	
	public function calc($c,$d)
	{
		echo $c *$d ."<br/>";
	}
	
	public function subtr($m,$n)
	{
		echo $m- $n."<br/>";
	}
}

$test = new child();

$test-> calc(20,5);
$test-> subtr(35,16);



?>