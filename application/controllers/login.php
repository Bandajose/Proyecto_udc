<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){

		parent::__construct();
		$this->load->model('userdao_model');
		
	}

	public function index()
	{

		$boxCorreo = $this->input->post("correo");
		$boxPassword = $this->input->post("password");

		if( $boxCorreo!='' && $boxPassword !='') {

			$estado=$this->userdao_model->login($boxCorreo,$boxPassword);

			if($estado!=null)
			{
				
				//$this->session->sess_destroy();

				//se crea la sesion del usuario

				$this->session->set_userdata($estado);
				
					header("Location: ".base_url());
			}
			else
			{

				// se redirecciona a la pagina de Login si no existe existe la combinaci坦n de correo y contrase単a 
				$dato['title']='Login';
				$this->load->view('head',$dato);

				$dato['info']='Datos incorrectos';
				$this->load->view('vista_login',$dato);

				$this->load->view('footer');


			}


		}
		else
		{
			// se redirecciona a la pagina de Login si no lleno todo los campos	
			$dato['title']='Login';
			$this->load->view('head',$dato);

			$this->load->view('vista_login');

			$this->load->view('footer');
		}

		
	}


	public function logout(){

		//se destruye la sesion

		$this->session->sess_destroy();

		// se redirecciona a la pagina de Login

		header("Location: ".base_url()."login");
	
	}
	
}

?>