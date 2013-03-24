<?php
class Contato extends CI_Model{
	private $nome;
	private $sobrenome;
	private $email;
	private $telefone;
	private $cep;
	private $celular;
	private $nascimento;
	private $endereco;
	private $cidade;
	private $uf;
	private $user;
	private $pass;
	
	public function __construct($nome,$sobrenome,$email,$telefone,$cep,$celular,$nascimento,$endereco,$cidade,$uf,$user,$pass){
	
		$this->nome       = $nome;
		$this->sobrenome  = $sobrenome;
	    $this->email      = $email;
	    $this->telefone   = $telefone;
	    $this->cep        = $cep;
	    $this->celular    = $celular;
	    $this->nascimento = $nascimento;
	    $this->endereco   = $endereco;
	    $this->cidade     = $cidade;
	    $this->uf         = $uf;
	    $this->user       = $user;
	    $this->pass       = $pass;
	    
	}



}