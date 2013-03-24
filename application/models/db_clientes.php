<?php 

class Db_clientes extends CI_Model{
	
	public function selectValues(){
		$clientes = $this->db->query('select * from contato');
		return $clientes->result();
	}
	public function insertValues($contato){
		$this->db->insert('contato',$contato);
	
	}

}