<?php
class MY_Controller extends CI_Controller
{
 function __construct()
 {
  parent::__construct();
  $this->load->library('session');

  $logged_in_data = $this->session->userdata('logged_in');
  //       $this->data['username'] = $this->user_lib->get($logged_in_data);
 //echo $logged_in_data["username"];
	$data['logged_in_data'] = $logged_in_data;

  if(!$logged_in_data){
  	
  	$data['error_message']="salah login";
  	redirect('login/index', $data);
  	die();
  }
  // die();
  //print_r($this->session->userdata('logged_in')['username']);
  }

}
