<?php
class Home_controller extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		$this->load->template('index');
	}

	public function comments()
	{
		echo 'Look at this!';
	}
}