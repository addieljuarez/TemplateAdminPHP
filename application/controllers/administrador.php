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
		}

		function admin(){
			$this->load->view('Login/loginAdmin');
		}
	}

?>