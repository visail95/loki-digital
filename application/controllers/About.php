<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function __construct()
	{
		/*call CodeIgniter's default Constructor*/
		parent::__construct();
	
	}
	
	public function index()
	{

		

		$this->load->view('template/header');
		$this->load->view('template/topbar');
		$this->load->view('template/menu');
		$this->load->view('about-us/index');
		$this->load->view('template/footer');
		
	}
}