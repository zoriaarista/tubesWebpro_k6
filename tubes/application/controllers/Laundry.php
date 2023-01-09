<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laundry extends CI_Controller {
    function __construct() {
        parent::__construct();
    }
	
	public function index()
	{
		$this->load->view('template/top');
		$this->load->view('Laundry');
		$this->load->view('template/bottom');
	}
}
