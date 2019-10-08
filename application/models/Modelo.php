<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modelo extends CI_Model {

	public function listar_todos(){
		$this->db->select("id, nome, mensagem");
		
		$resultado = $this->db->get("mensagem")->result();
		
		return $resultado;
	}
	
	public function add_dados($mensagens){
		
		$this->db->insert("mensagem", $mensagens);
		
	}
}
