<?php
class User_controller extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
	}
    public function retrieve()
    {
        $this->load->model('user/user_model');

        $data['query'] = $this->user_model->get_all_user();

        $this->load->view('user', $data);
    }
}