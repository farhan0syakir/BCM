<?php
session_start();

class Login extends CI_Controller {

	public function __construct() {
		parent::__construct();

		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('login_model');
	}

	function index() {
	//$this->load->template('pages/login/index');
	$this->load->template('pages/login/index');
	}
  
	function process() {
        /*$loginobject = new Login_Model();
		$loginobject -> where ('username', 'admin')->get();
		$username = $loginobject -> username;
		$password = $loginobject -> password;
		*/
		/*$result = $this->input->post();
		print_r($result);
		echo "hello";
die();*/
		$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
		

		if ($this->form_validation->run() == FALSE) {
			if(isset($this->session->userdata['logged_in'])){
				$this->load->template('pages/bia');
			}else{
				$this->load->template('pages/login/index');
			}
		} else {
			$data = array(
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password')
			);
		
			$result = $this->login_model->login($data);
			
		
			if ($result == TRUE) {

				$username = $this->input->post('username');
				//$result = $this->login_model->
				
				//$result = new Login_Model();
				//$result->where("username",$username)->get();


					if ($result != false) {
						$session_data = array('username' => $result->username);
					
						$this->session->set_userdata('logged_in', $session_data);
					  	redirect('bia/index');
					}
			
			} else {
				$data = array(
				'error_message' => 'Invalid Username or Password'
				);
				$this->load->template('pages/login/index', $data);
			}
		}
	}
 
    function logout() {
		$sess_array = array('username' => '');
		
		$this->session->unset_userdata('logged_in', $sess_array);
		$data['message_display'] = 'Successfully Logout';
		
		$this->load->template('pages/login/index', $data);
    }
}