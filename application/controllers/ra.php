<?php
class Ra extends MY_Controller {

	public function index(){
		$data['ra'] = $this->get();
		$this->load->template('pages/ra/index',$data);
	}

	public function view($id){
		
		$data['id'] = $id;
		$ra = new RA_Model();
        $ra->where('id', $id)->get();
		$data['title'] = $ra->getBa()->name;
		$data['threat'] = $ra->threat;
		$data['vulnerabilities'] = 	$ra->getVulnerabilities();
		$data['existingMeasures'] = $ra->getExistingMeasures();
		$data['proposedMeasures'] = $ra->getProposedMeasures();
		// print_r($data['proposedMeasures']);
		// die();
		$this->load->template('pages/ra/view',$data);
	}
	
	public function edit($id){
		$this->load->template('pages/ra/edit',$id);
	}

	public function delete($id){
		$ra = new RA_Model();
		$ra->where('id', $id)->get();
		$ra->delete();
		$this->index();
	}

	public function create(){
		// die();
		$ra = new RA_Model();
		$data['raImpact'] = $ra->getRaImpact();
		$data['raProbability'] = $ra->getRaProbability();

		$ba = new BA_Model();
		$data['ba'] = $ba->getAll();
		
		$this->load->template('pages/ra/create',$data);
		// $this->load->template('pages/ra/form',$data);
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
		// print_r($data);
		// die();
		$isSuccessAddToDatabase = $ra->add($data);
		$this->index();
		// print_r($data);
	}
}