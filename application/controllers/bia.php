<?php
class Bia extends MY_Controller {

	public function index()
	{
		$data['bia'] = $this->get();
		$this->load->template('pages/bia/index',$data);
	}

	public function view($id)
	{
		$ba = new BA_Model();
		$ba_impact = new BA_Impact_Model();
		$alternative_method = new BA_Alternative_Model();
		$dependencies = new BA_Dependencies_Model();
		$mor_normal = new Mor_Normal_Model();
		$mor_normal_work_facility = new Mor_Normal_Work_Facility_Model();
		$mor_normal_skill_set = new Mor_Normal_Skill_Set_Model();
		
		$mor_software = new Mor_Software_Model();
		$mor_software_ba = new Mor_Software_BA_Model();
		
		$mor_hardware = new Mor_Hardware_Model();
		$mor_hardware_ba = new Mor_Hardware_BA_Model();

		$mor_non_it = new Mor_Non_It_Model();
		$mor_non_it_ba = new Mor_Non_It_BA_Model();

		$mor_record = new Mor_Record_Model();
		$mor_record_ba = new Mor_Record_BA_Model();

		$bu = new BU_Model();

		$data['ba'] = $ba->where('id',$id)->get();
		$data['ba_impact'] = $ba_impact->getAll();
		$data['alternative_method'] = $alternative_method->where('ba_id',$ba->id)->get();
		$data['dependencies'] = $dependencies->where('ba_id',$ba->id)->get();
		$data['mor_normal'] = $mor_normal->where('ba_id',$ba->id)->get();
		$data['mor_normal_work_facility'] = $mor_normal_work_facility->where('mor_normal_id',$mor_normal->id)->get();
		$data['mor_normal_skill_set'] = $mor_normal_skill_set->where('mor_normal_id',$mor_normal->id)->get();
		
		$data['mor_software'] = $mor_software->get();
		$data['mor_hardware'] = $mor_hardware->get();
		$data['mor_software_bas'] = $mor_software_ba->where('ba_id',$ba->id)->get();
		$data['mor_hardware_bas'] = $mor_hardware_ba->where('ba_id',$ba->id)->get();
		
		$data['mor_non_it'] = $mor_non_it->get();
		$data['mor_non_it_bas'] = $mor_non_it_ba->where('ba_id',$ba->id)->get();

		$data['mor_record'] = $mor_record->get();
		$data['mor_record_bas'] = $mor_record_ba->where('ba_id',$ba->id)->get();

		$bu = new BU_Model();
		$data['bu'] = $bu->where('name','default')->get();
		$this->load->template('pages/bia/view',$data);
	}

	public function edit($id)
	{
		$this->load->template('pages/bia/edit',$id);
	}

	public function delete($id)
	{
		$ba = new BA_Model();
		$ba->where('id', $id)->get();
		$ba->delete();
		$this->index();
	}

	public function create()
	{
		$ba = new BA_Model();
		$data['baImpact'] = $ba->getImpact();

		$mor_software = new Mor_Software_Model();
		$data['mor_software'] = $mor_software->getAll();
		
		$mor_hardware = new Mor_Hardware_Model();
		$data['mor_hardware'] = $mor_hardware->getAll();

		$mor_non_it = new Mor_Non_It_Model();
		$data['mor_non_it'] = $mor_non_it->getAll();

		$mor_record = new Mor_Record_Model();
		$data['mor_record'] = $mor_record->getAll();

		$bu = new BU_Model();
		$data['bu'] = $bu->where('name','default')->get();
		$data['impact_parameter'][1] = $bu->impact_parameter;
		$data['impact_parameter'][2] = $bu->impact_parameter_2;
		$data['impact_parameter'][3] = $bu->impact_parameter_3;
		$data['impact_parameter'][4] = $bu->impact_parameter_4;
		$data['impact_parameter'][5] = $bu->impact_parameter_5;

		$data['impact_parameter_type'][1] = $bu->impact_parameter_type;
		$data['impact_parameter_type'][2] = $bu->impact_parameter_type_2;
		$data['impact_parameter_type'][3] = $bu->impact_parameter_type_3;
		$data['impact_parameter_type'][4] = $bu->impact_parameter_type_4;
		$data['impact_parameter_type'][5] = $bu->impact_parameter_type_5;
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
			$this->	addMorNormal($result);
		}else if($name=="myItForm"){
			$this->	addMorIt($result);
		}else if($name=="myNonItForm"){
			$this->	addMorNonIt($result);
		}else if($name=="myRecordForm"){
			$this->	addMorRecord($result);
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
		$ba = new BA_Model();
		$name = $result['name'];
		$ba_id = $ba->where('name',$name)->get()->id;
		
		for($i = 0; $i < count($result['software_name']); $i++) {
			$soft = new Mor_Software_BA_Model();
		// var_dump($result);
		// die();
			$data['mor_software_id']=$result['software_name'][$i];
			$data['ba_id'] = $ba_id;
			$data['rto'] = $result['software_rto'][$i];
			$data['rpo'] = $result['software_rpo'][$i];
			$data['alternative_manual_method'] = $result['alternative_manual_method'][$i];
			$soft->add($data);
		}
		
		$temp_is_sharing = array();
		foreach ($result['is_sharing'] as $is_sharing ) {
			array_push($temp_is_sharing, $is_sharing);
		}

		for($i = 0; $i < count($result['hardware_id']); $i++) {
			$hard = new Mor_Hardware_BA_Model();
			$data['mor_hardware_id']=$result['hardware_id'][$i];
			$data['ba_id'] = $ba_id;
			$data['rto'] = $result['hardware_rto'][$i];
			$data['quantity'] = $result['hardware_quantity'][$i];
			$data['is_sharing'] = $temp_is_sharing[$i];
			
			$hard->add($data);
		}
	}

	function addMorNonIt($result){
		$ba = new BA_Model();
		$name = $result['name'];
		$ba_id = $ba->where('name',$name)->get()->id;
		$temp_is_sharing = array();
		foreach ($result['is_sharing_non_it'] as $is_sharing ) {
			array_push($temp_is_sharing, $is_sharing);
		}
				
		for($i = 0; $i < count($result['mor_non_it_id']); $i++) {
			$non_it = new Mor_Non_It_BA_Model();
			$data['ba_id']=$ba_id;
			$data['mor_non_it_id']=$result['mor_non_it_id'][$i];
			$data['rto']=$result['non_it_rto'][$i];
			$data['quantity']=$result['non_it_quantity'][$i];
			$data['is_sharing']=$temp_is_sharing[$i];
			
			$non_it->add($data);
		}
	}

	function addMorRecord($result){
		// var_dump($result);
		// die();
		$ba = new BA_Model();
		$name = $result['name'];
		$ba_id = $ba->where('name',$name)->get()->id;
				
		for($i = 0; $i < count($result['mor_record_id']); $i++) {
			$non_it = new Mor_Record_BA_Model();
			// echo "hello";
			// die();
			$data['ba_id']=$ba_id;
			$data['mor_record_id']=$result['mor_record_id'][$i];
			$data['rto']=$result['mor_record_rto'][$i];
			$data['rpo']=$result['mor_record_rpo'][$i];
			$data['media']=$result['mor_record_media'][$i];
			$data['current_storage_location']=$result['mor_record_current_storage_location'][$i];
			$data['ownership']=$result['mor_record_ownership'][$i];
			
			$non_it->add($data);
		}
	}

	function addMorNormal($result){
		// var_dump($result);
		// die();
		$ba = new BA_Model();
		$name = $result['name'];
		$ba_id = $ba->where('name',$name)->get()->id;
		
		$mor_normal = new Mor_Normal_Model();
		$data['ba_id']=$ba_id;
		$data['location']=$result['location'];
		$data['staff']=$result['staffs'];
		$data['shift']=$result['shifts'];
        $data['work_station']=$result['cubicles'];
        $data['pc']=$result['notebooks'];
        $data['s_less_4h']=$result['morNormalStaffs'][0];
        $data['s_less_1d']=$result['morNormalStaffs'][1];
        $data['s_less_2d']=$result['morNormalStaffs'][2];
        $data['s_less_3d']=$result['morNormalStaffs'][3];
        $data['s_less_7d']=$result['morNormalStaffs'][4];
        $data['s_more_7d']=$result['morNormalStaffs'][5];
        $data['war_less_4h']=$result['morWorkAreaRecoveries'][0];
        $data['war_less_1d']=$result['morWorkAreaRecoveries'][1];
        $data['war_less_2d']=$result['morWorkAreaRecoveries'][2];
        $data['war_less_3d']=$result['morWorkAreaRecoveries'][3];
        $data['war_less_7d']=$result['morWorkAreaRecoveries'][4];
        $data['war_more_7d']=$result['morWorkAreaRecoveries'][5];
        $data['p_less_4h']=$result['morNotebook'][0];
        $data['p_less_1d']=$result['morNotebook'][1];
        $data['p_less_2d']=$result['morNotebook'][2];
        $data['p_less_3d']=$result['morNotebook'][3];
        $data['p_less_7d']=$result['morNotebook'][4];
        $data['p_more_7d']=$result['morNotebook'][5];
		$mor_normal->add($data);

		$temp_mor_normal = new Mor_Normal_Model();
		$temp_mor_normal->where('ba_id',$ba_id)->get();
		$temp_mor_normal_id = $temp_mor_normal->id;
		for($i = 0; $i < count($result['facilities']);$i++){
            $mor_normal_work_facility = new Mor_Normal_Work_Facility_Model();
            $temp_data['mor_normal_id'] = $temp_mor_normal_id;
            $temp_data['work_facility'] = $result['facilities'][$i];
            $mor_normal_work_facility->add($temp_data);
        }
        for($i = 0; $i < count($result['skillSets']);$i++){
            $mor_normal_skill_set = new Mor_Normal_Skill_Set_Model();
            $temp_data['mor_normal_id'] = $temp_mor_normal_id;
            $temp_data['skill_set'] = $result['skillSets'][$i];
            $mor_normal_skill_set->add($temp_data);
        }
		
	}
}