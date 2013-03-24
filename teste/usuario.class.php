<?php
class Usuario{

	private $nome;
	private $sobrenome;
	private $user;
	private $pass;
	private $email;
	

	public function __construct($nome,$sobrenome,$user,$pass,$email){
		$this->nome = $nome;
		$this->sobrenome = $sobrenome;
		$this->user = $user;
		$this->pass = $pass;
		
	}
	public function get(){
	
		return $this->nome;
	}

}
?>