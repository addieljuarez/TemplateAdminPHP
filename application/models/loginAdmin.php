<?php
	/**
	* 
	*/
	class LoginAdmin extends AnotherClass
	{
		function __construct(){
			parent::__construct();
			$this->load->database();
			$this->load->model('usersAdmin');
		}
		function login($username, $password)
		{
			$this->db->select('id', 'username', 'password');
			$this->db->from('userAdmin');
			$this->db->where('emailAdmin', $username);
			$this->db->where('passwordAdmin', $password);
			$this->db->limit(1);

			$query = $this->db->get();

			if ($query->num_rows() == 1) {
				return $query->result();
			}else{
				print_r('error');
				return false();
			}

		}
	}
?>