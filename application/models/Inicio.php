<?php

    if (!defined('BASEPATH'))
        exit('No direct script access allowed');

class Inicio_model extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function ver(){
		$query = $this->db->get('noticias');
		if($query->num_rows() > 0) return $query;
		else return false;
	}
}
?>