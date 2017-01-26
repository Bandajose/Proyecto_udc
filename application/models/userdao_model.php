<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Userdao_model extends CI_Model{

	function __construct(){

		parent::__construct();
		//$this->load->database();

	}

	function agregarUsuario($nombre,$email,$password,$telefono,$dependencia,$tipo_usuario){

			if(
			$this->db->insert(
			'usuario',array(
				'nombre' => $nombre, 
				'correo' => $email,
				'contraseña' => $password,
				'telefono' => $telefono,
				'tipo_usuario' => $tipo_usuario,
				'dependencia' => $dependencia
				)
			)
		)
			return true;
		else
			return false;

	}

	function eliminarUsuario($user){
		


	}

	function login($correo,$password){

		//esta funcion devuelve un objeto de tipo 'user_model' si existe la conbinacion de correo y contraseña de lo contrario devielve un valor null


		$user=null;
		$this->db->where('correo',$correo);
		$this->db->where('contraseña',$password);
		$consulta = $this ->db -> get('usuario');

		if($consulta->num_rows()>0)
			{			

				foreach ($consulta->result() as $fila) {

					$user = array(

					'id' => $fila->id,
					'nombre' => $fila->nombre,
					'correo' => $fila->correo,
					'password' => $fila->contraseña,
					'telefono' => $fila->telefono,
					'tipo_usuario' => $fila->tipo_usuario,
					'dependencia' => $fila->dependencia

					);
				}

				return $user;
			}

		else
			return $user;
	}
}
