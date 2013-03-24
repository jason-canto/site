<?php

class Math extends CI_Model{
	
	private $lala;

	public function lala($val1, $val2){
		$this->lala = $val1 + $val2;
		return $this->lala;
	}

}