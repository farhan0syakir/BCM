<?php
class Home extends CI_Controller {
	
	function index()
	{
		$this->load->library('../controllers/login');
		$this->login->index();
	}
}