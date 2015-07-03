<?php
class Setting extends MY_Controller {

	public function index(){
		$this->load->template('pages/setting/version/index');
	}
	public function req(){
		$this->load->template('pages/setting/req/index');
	}
}