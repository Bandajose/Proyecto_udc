<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Investigadores extends CI_Controller {

	function __construct(){

		parent::__construct();
		$this->load->model('userdao_model');

		

	}

	public function index(){

		//El home de la vista de investigadores

		//El titulo de la pagina
		$dato['title']='Home';
		$this->load->view('head',$dato);

		//el usuario que esta logueado en ese momento

		$dato['menu1']='investigadores/registro';
		$dato['menu2']='investigadores';
		$dato['menu3']='investigadores/proyectos';

		$dato['nombre'] = $this->session->userdata('nombre');
		$this->load->view('Admin/div_menu',$dato);

		
		//este seria el buscador de los investigadores
		$this->load->view('Admin/div_buscador');
		//aqui deberia cargar todos los investigadores que ya existen

		$this->load->view('footer');


	}

	public function registro(){

		//vista del registro de investigadores

		//El titulo de la pagina
		$dato['title']='Registrar';
		$this->load->view('head',$dato);


		$dato['menu1']='investigadores/registro';
		$dato['menu2']='investigadores';
		$dato['menu3']='investigadores/proyectos';

		$dato['nombre'] = $this->session->userdata('nombre');
		$this->load->view('Admin/div_menu',$dato);


		//Aqui incluir el action del form
		$dato['action']='investigadores/registrar';
		$this->load->view('Admin/div_registrar_investigador',$dato);



		//en desiscion de que se enviara en el footer
		$this->load->view('footer');

	}

	public function registrar(){

		$boxNombre = $this->input->post("nombre");
		$boxCorreo = $this->input->post("correo");
		$boxPassword = $this->input->post("password");
		$boxTelefono = $this->input->post("telefono");
		$boxDependencia = $this->input->post("dependencia");

		if($boxNombre!='' && $boxCorreo!='' && $boxPassword!='' && $boxTelefono!='' && $boxDependencia!=''){

			if($this->userdao_model->agregarUsuario($boxNombre,$boxCorreo,$boxPassword,$boxTelefono,$boxDependencia,2))

				header("Location: ".base_url()."investigadores");

			else

				header("Location: ".base_url()."investigadores/registro");

		}
		else
		{
			header("Location: ".base_url()."investigadores/registro");
		}

			
	}


	public function proyectos(){

		//El titulo de la pagina
		$dato['title']='Proyectos';
		$this->load->view('head',$dato);

		//el usuario que esta logueado en ese momento
		$dato['menu1']='investigadores/registro';
		$dato['menu2']='investigadores';
		$dato['menu3']='investigadores/proyectos';

		$dato['nombre'] = $this->session->userdata('nombre');
		$this->load->view('Admin/div_menu',$dato);

		//este seria el buscador de los proyectos
		$this->load->view('Admin/div_buscador');
		//aqui deberia cargar todos los proyectos que ya existen

		$this->load->view('footer');


	}
}
?>