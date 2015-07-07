<?php
class Bu extends MY_Controller {

	public function index()
	{
		$data['setting_bu'] = $this->get();
		$this->load->template('pages/setting/bu/index',$data);
	}

	public function view($id)
	{
		$this->load->template('pages/setting/bu/view',$id);
	}

	public function edit($id)
	{
		$bu = new BU_Model();
		$data['bu'] = $bu->where('id',$id)->get();
		$this->load->template('pages/setting/bu/edit',$data);
	}

	public function delete($id)
	{
		$bu = new BU_Model();
		$bu->where('id', $id)->get();
		$bu->delete();
		$this->index();
		// $this->load->template('pages/bia/edit',$id);
	}

	public function create()
	{
		$setting_bu = new BU_Model();
		$data['setting_bu'] = $setting_bu->getAll();

		$this->load->template('pages/setting/bu/create',$data);
	}

	function get(){
		$ba = new BU_Model();
		$result = $ba->getAll();
		// print_r($result);
		return $result;
	}
	
	function add($input){
		$ba = new BU_Model();
		
		$data['bu_code'] = $input['bu_code'];
		$data['name'] = $input['name'];
        $data['mtpd'] = $input['mtpd'];
        $data['mtpd_type'] = $input['mtpd_type'];
        $data['impact_parameter'] = $input['impact_parameter'];
        $data['impact_parameter_2'] = $input['impact_parameter_2'];
		$data['impact_parameter_3'] = $input['impact_parameter_3'];
        $data['impact_parameter_4'] = $input['impact_parameter_4'];
        $data['impact_parameter_5'] = $input['impact_parameter_5'];
        
        $data['impact_parameter_type'] = $input['impact_parameter_type'];
        $data['impact_parameter_type_2'] = $input['impact_parameter_type_2'];
		$data['impact_parameter_type_3'] = $input['impact_parameter_type_3'];
		$data['impact_parameter_type_4'] = $input['impact_parameter_type_4'];
        $data['impact_parameter_type_5'] = $input['impact_parameter_type_5'];
        
                

		echo $ba->add($data);
	}

	function make(){
		// echo $name."</br>";
		$result = $this->input->post();

		$this->add($result);
		$this->index();
		// $isSuccess = $temp->add($result);
		// return $isSuccess;
		// print_r($result);
	}

	function update($id){
		$result = $this->input->post();
		unset($result['bu_code']);
		$bu = new BU_Model();
		$bu->where('id', $id)->update($result);

		$this->index();
	}

}