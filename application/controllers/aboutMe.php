<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	/**
	 * 
	 */
	class AboutMe extends CI_Controller 
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->helper('url');
		}
		function aboutMe() {
			$this->load->view('aboutMeView');
		}
	}
	
?>