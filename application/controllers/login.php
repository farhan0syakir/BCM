<?php
class Login extends CI_Controller {

	public function index(){
		$data['ra'] = $this->get();
		$this->load->template('pages/ra/index',$data);
	}

	public function view($id){
		
		$this->load->template('pages/ra/view',$id);
	}
	
	public function edit($id){
		$this->load->template('pages/ra/edit',$id);
	}

	public function delete($id){	
		$this->load->template('pages/ra/delete',$id);
	}

	public function create(){
		$this->load->template('pages/ra/create');
		// die();
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
		$data['bia'] = $this->input->post('bia');
		$data['threat'] = $this->input->post('threat');
		$data['p'] = $this->input->post('P');
		$data['i'] = $this->input->post('I');
		$data['pm'] = $this->input->post('Pm');
		$data['im'] = $this->input->post('Im');
		$data['vulnerabilities'] = $this->input->post('vulnerabilities');
		$data['existingMeasures'] = $this->input->post('existingMeasures');
		$data['proposedMeasures'] = $this->input->post('proposedMeasures');
		print_r($data);
		die();
		$isSuccessAddToDatabase = $ra->add($data);
		$this->index();
		// print_r($data);
	}
}