<?php
class Ra_controller extends CI_Controller {

	public function index(){
		$ra = array	(
			array("id"=>"1" ,"name"=>"RA 1"),
			array("id"=>"2" ,"name"=>"RA 2"),

			array("id"=>"12" ,"name"=>"RA 232"),
			array("id"=>"24" ,"name"=>"RA 1233"),
			array("id"=>"21" ,"name"=>"RAv 11"),
			array("id"=>"233" ,"name"=>"RA 22"),
			array("id"=>"21" ,"name"=>"RA 1111"),
			array("id"=>"3" ,"name"=>"RA 3")
		);
		$data['ra'] = $ra;
		// $this->load->template('layout/content',$bia);
		$this->load->template('pages/ra/index',$data);
	}

	public function view($id){
		
		$this->load->template('pages/ra/view',$id);
	}
	public function create($id){
		
		$this->load->template('pages/ra/create',$id);
	}
	public function edit($id){
		
		$this->load->template('pages/ra/edit',$id);
	}
}