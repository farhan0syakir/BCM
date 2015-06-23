<?php
class Home extends CI_Controller {

	public function index()
	{
		$this->load->library('../controllers/bia');
		$this->bia->index();
	}

	public function comments()
	{
		echo 'Look at this!';
	}
}