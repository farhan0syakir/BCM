<?php
class User_controller extends CI_Controller {

	public function index()
	{
		$this->load->template('pages/login/index');
	}
}