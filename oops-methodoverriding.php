<?php
class base{
	
	public $name;
	
	public function __construct($n)
	{
		$this->name = $n;
	}
	public function cal($a,$b)
	{
		return $a*$b ."<br>".$this->name;
	}
}
class child extends base{
	public $name ='child class';
	
	public function cal($a,$b)
	{
		echo $a - $b;
	}
}

$test = new base('sarita');
echo $test->cal(5,7);

?>