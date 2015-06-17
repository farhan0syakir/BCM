<?php
class Home_controller extends CI_Controller {

	public function index()
	{
		$bia = array	(
			array("id"=>"1" ,"name"=>"BA 1"),
			array("id"=>"2" ,"name"=>"BA 2"),
			array("id"=>"3" ,"name"=>"BA 3")
		);

		$data['bia'] = $bia;
		// $this->load->template('layout/content',$bia);
		$this->load->template('pages/bia/index',$data);

	}

	public function comments()
	{
		echo 'Look at this!';
	}
}