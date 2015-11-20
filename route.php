<?php

class Route
{
	
	private $_uri = array();
	private $_method = array();

	public function add($uri, $method = null)
	{
		$this->_uri[] = '/' . trim($uri, '/');

		if ($method != null) {
			$this->_method []= $method;
		}
	}

	public function submit()
	{

		$uri = isset($_GET['uri']) ? '/'. $_GET['uri'] : '/';

		foreach ($this->_uri as $key => $value) {

			if (preg_match("#^$value$#", $uri)) {

				if (is_string($this->_method[$key])) {

					$useMethod = $this->_method[$key];
					new $useMethod();

				} else {

					call_user_func($this->_method[$key]);
					
				}

			}
		}
	}

}