<?php

class Mor_Normal_Skill_Set_Model extends DataMapper {

    var $table = 'mor_normal_skill_set';

    function __construct($id = NULL){
        parent::__construct($id);
        $ci = &get_instance();
        $ci->load->library('session');
        $this->session = $ci->session;
    }
    
    function getAll(){
        $bas = new Mor_Normal_Skill_Set_Model();
        $bas->get();
        $result = array();
        foreach ($bas as $ba)
        {
            $data = $this->getDetails($ba);
            // $data = ('1' => 'farhan');
            array_push($result, $data);
        }
        // print_r($result);
        return $result;
    }

    function getDetails($ba){
        $data = new stdClass();
        $data->id = $ba->id;
        $data->mor_normal_id = $ba->mor_normal_id;
        $data->skill_set = $ba->skill_set;
        return $data;
    }


    function add($data){
        if(is_array($data)){
            $ba = $this->addDetails($data);
            if($isSuccess = $ba->save_as_new()){
                return TRUE;
            } else {
                return FALSE;
            }
        }
        return FALSE;
    }

    function addDetails($data){
        $temp = new Mor_Normal_Skill_Set_Model();
        $temp->mor_normal_id = $data['mor_normal_id'];
        $temp->skill_set = $data['skill_set'];
        return $temp;
    }

}