<?php
class Home_controller extends CI_Controller {

	public function index()
	{
		$bia = array	(
			array("id"=>"1" ,"name"=>"BA 1"),
			array("id"=>"2" ,"name"=>"BA 2"),
			array("id"=>"3" ,"name"=>"BA 3")
		);

		 $this->load->template('pages/bia/index',$bia);
		//$this->load->template('pages/bia/layout/content',$bia);

	}

	public function comments()
	{
		echo 'Look at this!';
	}
}