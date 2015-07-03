<?php
class Login_model extends DataMapper {

	var $table = 'user';
	
   function __construct($id = NULL) {
        parent::__construct($id);
        $ci = &get_instance();
        $ci->load->library('session');
        $this->session = $ci->session;
    }
    
    function getAll(){
        $bas = new Login_Model();
        $bas->get();
        $result = array();
        foreach ($bas as $ba)
        {
            $data = $this->getDetails($ba);
            array_push($result, $data);
        }
        // print_r($result);
        return $result;
    }

    function getDetails($ba){
        $data = new stdClass();
        $data->username = $ba->username;
        $data->password = $ba->password;

        return $data;
    }
	
    function login($data){
        $loginobject = new Login_Model();
        $password= $loginobject->where("username",$data["username"])->get()->password;

        if($password===$data["password"]) {
            return $this->getDetails($loginobject);
        } else {
            return false;
        }
    }
}
?>