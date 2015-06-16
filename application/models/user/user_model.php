<?php
class User_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function get_all(){
    	$query  = 'SELECT * FROM USER';
    	$result = $this->db->get();
    	return $result->result();
    }
}