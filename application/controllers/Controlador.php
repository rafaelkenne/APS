<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controlador extends CI_Controller {
	
	
	
	public function listar(){
		
		$this->load->model("Modelo", "modelo");
		
		$resultado = $this->modelo->listar_todos();
		
		$dados = array("modelo" => $resultado);
		
		$this->load->view("visao", $dados);
		
	}
	
	public function salvar(){
		if(empty($this->input->post('nome')) || empty($this->input->post('mensagem'))){
			echo '<script>alert("Preencha todos os campos");</script>';
		}
		else{
			$this->load->model("Modelo", "modelo");
			
			$mensagens['nome'] = $this->input->post('nome');
			
			$mensagens['mensagem'] = $this->input->post('mensagem');
			
			$this->modelo->add_dados($mensagens);
		
		}
		
		$this->listar();
	}
}
