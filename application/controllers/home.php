<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){

		parent::__construct();

		
	}

	public function index(){

		if($this->session->userdata('tipo_usuario')==0)
		{
			header("Location: ".base_url()."login");
		}
		else
		{
			header("Location: ".base_url()."investigadores");
		}	
	}


}
	?>