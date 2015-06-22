<?php
class Ra_controller extends CI_Controller {

	public function index(){
		$data['ra'] = $this->get();
		$this->load->template('pages/ra/index',$data);
	}

	public function view($id){
		
		$this->load->template('pages/ra/view',$id);
	}
	
	public function create(){
		$ra = new RA_Model();
		$data['raImpact'] = $ra->getRaImpact();
		$data['raProbability'] = $ra->getRaProbability();
		$this->load->template('pages/ra/form',$data);
	}

	function get(){
		$ra = new RA_Model();
		$result = $ra->getAll();
		// print_r($result);
		return $result;
	}
	
	function add(){
		$ra = new RA_Model();
		$data['threat'] = $this->input->post('threat');
		$data['p'] = $this->input->post('P');
		$data['i'] = $this->input->post('I');
		$data['pm'] = $this->input->post('Pm');
		$data['im'] = $this->input->post('Im');
		// print_r($this->input->post('threat'));
		// die();
		$isSuccessAddToDatabase = $ra->add($data);
		$this->index();
		// print_r($data);
	}
}