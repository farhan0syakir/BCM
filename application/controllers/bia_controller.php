<?php
class Bia_controller extends CI_Controller {

	public function index(){
		$bia = array	(
			array("id"=>"1" ,"name"=>"BA 1"),
			array("id"=>"2" ,"name"=>"BA 2"),

			array("id"=>"12" ,"name"=>"BA 232"),
			array("id"=>"24" ,"name"=>"BA 1233"),
			array("id"=>"21" ,"name"=>"BAv 11"),
			array("id"=>"233" ,"name"=>"BA 22"),
			array("id"=>"21" ,"name"=>"BA 1111"),
			array("id"=>"3" ,"name"=>"BA 3")
		);
		$data['bia'] = $bia;
		// $this->load->template('layout/content',$bia);
		$this->load->template('pages/bia/index',$data);
	}

	public function view($id){
		
		$this->load->template('pages/bia/view',$id);
	}
	
	
}