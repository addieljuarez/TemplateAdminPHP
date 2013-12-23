<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	/**
	* 
	*/
	class Administrador extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->helper('form');
			$this->load->helper('url');
		}

		function admin(){
			$this->load->view('Login/loginAdmin');
		}

		function loginSucces(){
			
			$parametrosAdminLogin = array(
				'email' => $this->input->post('email'), 
				'pass' => $this->input->post('Password'),
			);

			print_r($parametrosAdminLogin);

			print_r($parametrosAdminLogin['email']);
			print_r($parametrosAdminLogin['pass']);

		}
	}

?>