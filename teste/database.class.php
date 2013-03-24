<?php
class Database{
	
	
	private $banco;
	private $host ;
	private $user ;
	private $pass ;
	
	
	public function __construct(){
		
	}
	public function conexao($host, $user, $pass, $banco){
		
		$this->host  = $host;
		$this->user  = $user;
		$this->pass  = $pass;
		$this->banco = $banco;
		
		mysql_connect($this->host,$this->user,$this->pass);
		$conexao = mysql_select_db($this->banco);
		return $conexo;
	}
	
	public function insert(Usuario $usuario){
		
		echo $usuario->get();
		
		$query = "insert into usuario (nome,sobrenome,user,pass,email) 
				  values('" .$usuario->nome."','"
						    .$usuario->sobrenome."','"
						    .$usuario->user."','"
							.$usuario->pass."','"
							.$usuario->email."')"; 
		mysql_query($query);
		
		$select = mysql_query('select * from usuario');
		
		print_r($select);
	
		/*foreach($data as $key => $value){
			echo $key.' =>'.$value.'<br />';
			
		$this->key = $value;
			
		}*/
		
	}
}
?>