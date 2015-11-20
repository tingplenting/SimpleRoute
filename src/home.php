<?php 

/**
* 
*/
class Home
{
	
	public function __construct()
	{
		echo "this is home page";
		$this->_other();
	}

	protected function _other()
	{
		echo "this is other function";
	}

}

 ?>