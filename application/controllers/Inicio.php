<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {
	

	public function __construct(){
		parent::__construct();
		$this->load->model('Inicio_model');
	}

	function index()
	{
		
		$data = array(
			'contenido'=>$this->Inicio_model->ver(),
			'cat'=>$this->Inicio_model->cat(),
			'ultimas'=>$this->Inicio_model->ultimas(),
			'comentarios'=>$this->Inicio_model->comentarios());
		$this->load->view('cabeza');
		$this->load->view('Inicio',$data);
		$this->load->view('pie');
	}
}
