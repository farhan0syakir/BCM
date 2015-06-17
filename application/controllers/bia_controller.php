<?php
class Bia_controller extends CI_Controller {

	public function index()
	{
		
		$this->load->template('index');
	}

	public function view($id)
	{
		
		$this->load->template('pages/bia/view',$id);
	}
	
	
}