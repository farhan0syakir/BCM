<?php
class User extends MY_Controller {

	public function index()
	{
		$data['bia'] = $this->get();
		$this->load->template('pages/setting/user/index',$data);
	}

	public function view($id)
	{
		$this->load->template('pages/setting/user/view',$id);
	}

	public function edit($id)
	{
		$this->load->template('pages/setting/user/edit',$id);
	}

	public function delete($id)
	{
		// $this->load->template('pages/bia/edit',$id);
	}

	public function create()
	{
		$ba = new BA_Model();
		$data['baImpact'] = $ba->getImpact();

		$this->load->template('pages/setting/user/create',$data);
	}

	function get(){
		$ba = new BA_Model();
		$result = $ba->getAll();
		// print_r($result);
		return $result;
	}
	
	function add(){
		$ba = new BA_Model();
		$data['number'] = $this->input->get('number');
		$data['name'] = $this->input->get('name');
		$data['description'] = $this->input->get('description');
		$data['cto'] = $this->input->get('cto');
        $data['rto'] = $this->input->get('rto');
        $data['less_4h'] = $this->input->get('less_4h');
        $data['less_1d'] = $this->input->get('less_1d');
        $data['less_2d'] = $this->input->get('less_2d');
        $data['less_3d'] = $this->input->get('less_3d');
        $data['less_7d'] = $this->input->get('');
        $data['more_7d'] = $this->input->get('');
        $data['type_less_4h'] = $this->input->get('');
        $data['type_less_1d'] = $this->input->get('');
        $data['type_less_2d'] = $this->input->get('');
        $data['type_less_3d'] = $this->input->get('');
        $data['type_less_7d'] = $this->input->get('');
        $data['type_more_7d'] = $this->input->get('');
        $data['non_type_less_4h'] = $this->input->get('');
        $data['non_type_less_1d'] = $this->input->get('');
        $data['non_type_less_2d'] = $this->input->get('');
        $data['non_type_less_3d'] = $this->input->get('');
        $data['non_type_less_7d'] = $this->input->get('');
        $data['non_type_more_7d'] = $this->input->get('');

		echo $ba->add($data);
	}
	
}