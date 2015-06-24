<?php
class Home_controller extends CI_Controller {

	public function index()
	{
		$this->load->library('../controllers/bia_controller');
		$this->bia_controller->index();
	}

	public function comments()
	{
		echo 'Look at this!';
	}
}