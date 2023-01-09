<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    function __construct() {
        parent::__construct();
		$this->load->library('session');
		$this->load->model('M_Login');
    }
	
	public function index()
	{
		$this->load->view('Login');
	}

	public function loginAuth() {
		$username = $this->input->post('username');
		$password = $this->input->post('password');
	
		$login = $this->M_Login->getUser($username, $password);

		if ($login) {
			$this->session->set_userdata('username', $username);
			redirect('DataPesanan');
		} else {
			$data['error_message']='Data yang diinputkan tidak valid';
			$this->load->view('Login', $data);
		}
	
		
	}

	public function logout() {
		$this->session->unset_userdata('username'); 
		redirect('Laundry');
	}
}
