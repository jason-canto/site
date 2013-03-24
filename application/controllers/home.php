<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller{
	
	
	public function index(){
	
		$this->load->model('math');
		$lala = $this->math->lala(1,5);
		
		$this->primeira();
		
	}
	public function primeira(){
		$c['nome'] = 'codeigniter';       
		$c['sobrenome'] = 'codeigniter';
		$c['email'] = 'adasdsa';
		$c['telefone'] = 'slksadlksa';
		$c['cep'] = 'dlsfljsdl';
		$c['celular'] = '2321321321';
		$c['data_nascimento'] = date('d/M/y');
		$c['endereco'] = 'adalskdlakskl';
		$c['cidade'] = 'asdasdas';
		$c['estado'] = 'sp';
		$c['usuario'] = 'sasdasdsa';
		$c['senha'] = 'adsadsa';
		
		//$this->load->model('contato');
		
		
		
		$data['titulo'] = "Primeira pagina";
		$this->load->model('db_clientes');
		$data['resultado'] = $clientes = $this->db_clientes->selectValues();
		$this->db_clientes->insertValues($c);
		$this->load->view("view_home",$data);	
		
			
	}
	public function segunda($qc = ''){
		if(!empty($qc)){
			$data['qc']= $qc;
			$this->load->view('view_segunda',$data);
			echo $qc;
		}
		else{
			header('Location: /');
		}
	
	}
	
	
	

}