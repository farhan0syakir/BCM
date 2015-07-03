<?php
class Bia extends MY_Controller {

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

	public function getDependenciesForm($stream,$counter)
	{

		$data['stream'] = $stream;
		$data['counter'] = $counter;
		$this->load->view('pages/bia/dependenciesForm',$data);
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
		if(!empty($input['cto_notes'][0])){
			$data['cto_notes'] = $input['cto_notes'][0];
		}
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
		}else if($name=="myDependenciesForm"){
			$this->	addDependencies($result);
		}else if($name=="myNormalForm"){
			$temp = new BA_Normal_Model();
		}else if($name=="myItForm"){
			$this->	addMorIt($result);
		}else if($name=="myNonItForm"){
			$temp = new BA_Non_It_Model();
		}else if($name=="myRecordForm"){
			$temp = new BA_Record_Model();
		}
		// $isSuccess = $temp->add($result);
		// return $isSuccess;
		// print_r($result);
	}

	function addAlternative($result){
		$ba = new BA_Model();
		$name = $result['name'];
		$ba_id = $ba->where('name',$name)->get()->id;
		foreach ($result['alternativeMethods'] as $input) {
			$temp = new BA_Alternative_Model();
        	$data['ba_id'] = $ba_id;
        	$data['alternative_method'] = $input;
			$temp->add($data);
		}
	}

	function addDependencies($result){
		$ba = new BA_Model();
		$name = $result['name'];
		$ba_id = $ba->where('name',$name)->get()->id;
		// var_dump($result);
		// echo "helo";
		// die();
		for($i = 0; $i < count($result['radioInternalExternalUpstream']); $i++) {
			$temp = new BA_Dependencies_Model();
        	$data['ba_id'] = $ba_id;
	        $data['is_internal'] = $result['radioInternalExternalUpstream'][$i];
	        $data['party_name']=$result['nameUpstream'][$i];
	        $data['rto']=$result['rtoUpstream'][$i];
	        $data['rto_type']=$result['rtoTypeUpstream'][$i];
	        $data['arrangement_in_place']=$result['radioBCMArrangmentPlaceUpstream'][$i];
	        $data['type_stream']=0;//0 untuk upstream
			$temp->add($data);
		}
		for($i = 0; $i < count($result['radioInternalExternalDownstream']); $i++) {
			$temp = new BA_Dependencies_Model();
        	$data['ba_id'] = $ba_id;
	        $data['is_internal'] = $result['radioInternalExternalDownstream'][$i];
	        $data['party_name']=$result['nameDownstream'][$i];
	        $data['rto']=$result['rtoDownstream'][$i];
	        $data['rto_type']=$result['rtoTypeDownstream'][$i];
	        $data['arrangement_in_place']=$result['radioBCMArrangmentPlaceDownstream'][$i];
	        $data['type_stream']=1;//0 untuk Downstream
			$temp->add($data);
		}
	}

	function addMorIt($result){
		// Create objects
		var_dump($result);
		die();
		$ba = new BA_Model();
		$name = $result['name'];
		$ba_id = $ba->where('name',$name)->get()->id;
		
		for($i = 0; $i < count($result['softMorId']); $i++) {
			$soft = new BA_Mor_Software_Model();
			$soft->get_by_id($result['softMorId'][$i]);
			
			$soft->set_join_field($ba, 'rto', $result['soft_rto'][$i]);
			$soft->set_join_field($ba, 'quantity', $result['soft_quantity'][$i]);
			$soft->set_join_field($ba, 'is_sharing', $result['soft_is_sharing'][$i]);
		}
		
		for($i = 0; $i < count($result['hardMorId']); $i++) {
			$hard = new BA_Mor_Hardware_Model();
			$hard->get_by_id($result['hardMorId'][$i]);
			
			$hard->set_join_field($ba, 'rto', $result['hard_rto'][$i]);
			$hard->set_join_field($ba, 'quantity', $result['hard_quantity'][$i]);
			$hard->set_join_field($ba, 'is_sharing', $result['hard_is_sharing'][$i]);
		}
	}
}