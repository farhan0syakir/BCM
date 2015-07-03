<?php

class BA_Dependencies_Model extends DataMapper {

    var $table = 'dependencies';

    function __construct($id = NULL){
        parent::__construct($id);
        $ci = &get_instance();
        $ci->load->library('session');
        $this->session = $ci->session;
    }
    
    function getAll(){
        $bas = new BA_Dependencies_Model();
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
        $data->type = $ba->type;
        $data->description = $ba->description;
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
        $temp = new BA_Dependencies_Model();
        $temp->ba_id = $data['ba_id'];
        $temp->is_internal = $data['is_internal'];
        $temp->party_name = $data['party_name'];
        $temp->rto = $data['rto'];
        $temp->rto_type = $data['rto_type'];
        $temp->arrangement_in_place = $data['arrangement_in_place'];
        $temp->type_stream = $data['type_stream'];
        return $temp;
    }
}