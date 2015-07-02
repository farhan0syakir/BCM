<?php
class Bia extends CI_Controller {

	public function index()
	{
		$data['bia'] = $this->get();
		$this->load->template('pages/bia/index',$data);
	}

	public function view($id)
	{
		$this->load->template('pages/bia/view',$id);
	}

	public function edit($id)
	{
		$this->load->template('pages/bia/edit',$id);
	}

	public function delete($id)
	{
		// $this->load->template('pages/bia/edit',$id);
	}

	public function create()
	{
		$ba = new BA_Model();
		$data['baImpact'] = $ba->getImpact();

		$mor_software = new BA_Mor_Software_Model();
		$data['mor_software'] = $mor_software->getAll();
		
		$mor_hardware = new BA_Mor_Hardware_Model();
		$data['mor_hardware'] = $mor_hardware->getAll();
		
		$this->load->template('pages/bia/create',$data);
	}

	public function getDepedenciesForm($stream,$counter)
	{
		$data['stream'] = $stream;
		$data['counter'] = $counter;
		$this->load->view('pages/bia/depedenciesForm',$data);
	}

	function get(){
		$ba = new BA_Model();
		$result = $ba->getAll();
		// print_r($result);
		return $result;
	}
	
	
	function add($input){
		$ba = new BA_Model();
		// var_dump($input['finansialImpact'][0]);
		// die();
		$data['name'] = $input['name'];
		$data['description'] = $input['description'];
        $data['less_4h'] = $input['finansialImpact'][0];
        $data['less_1d'] = $input['finansialImpact'][1];
        $data['less_2d'] = $input['finansialImpact'][2];
        $data['less_3d'] = $input['finansialImpact'][3];
        $data['less_7d'] = $input['finansialImpact'][4];
        $data['more_7d'] = $input['finansialImpact'][5];
        $data['non_less_4h'] = $input['nonFinansialImpact'][0];
        $data['non_less_1d'] = $input['nonFinansialImpact'][1];
        $data['non_less_2d'] = $input['nonFinansialImpact'][2];
        $data['non_less_3d'] = $input['nonFinansialImpact'][3];
        $data['non_less_7d'] = $input['nonFinansialImpact'][4];
        $data['non_more_7d'] = $input['nonFinansialImpact'][5];
		$data['cto'] = $input['cto'];
		$data['cto_notes'] = $input['cto_notes'][0];
        $data['rto'] = $input['rto'];
		echo $ba->add($data);
	}

	function make($name){
		// echo $name."</br>";
		$result = $this->input->post();
		// var_dump($result);
		// die();
		if($name=="myDescForm"){
			$this->add($result);
		}else if($name=="myAlternativeForm"){
			$this->addAlternative($result);
		}else if($name=="myDepedenciesForm"){
			$temp = new BA_Depedencies_Model();
		}else if($name=="myNormalForm"){
			$temp = new BA_Normal_Model();
		}else if($name=="myItForm"){
			$temp = new BA_It_Model();
		}else if($name=="myNonItForm"){
			$temp = new BA_Non_It_Model();
		}else if($name=="myRecordForm"){
			$temp = new BA_Record_Model();
		}
		$isSuccess = $temp->add($result);
		return $isSuccess;
		// print_r($result);
	}



	function addAlternative($inputs){
		$ba = new BA_Model();
		// $name = $inputs['name'];
		var_dump($inputs);
		die();
		$ba_id = $ba->where('name',$name)->get()->id;
		foreach ($inputs['alternativeMethods'] as $input) {
			# code...
			$temp = new BA_Alternative_Model();
        	$data['ba_id'] = $ba_id;
        	$data['alternative_method'] = $input;
			$temp->add($data);
		}
	}
}