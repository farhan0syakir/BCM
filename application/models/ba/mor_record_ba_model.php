<?php

class Mor_Record_BA_Model extends DataMapper {

    var $table = 'mor_record_ba';

    function __construct($id = NULL){
        parent::__construct($id);
        $ci = &get_instance();
        $ci->load->library('session');
        $this->session = $ci->session;
    }
    
    function getAll(){
        $bas = new Mor_Record_BA_Model();
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
        $data->name = $ba->name;
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
        $temp = new Mor_Record_BA_Model();
        $temp->ba_id = $data['ba_id'];
        $temp->mor_record_id = $data['mor_record_id'];
        $temp->rto = $data['rto'];
        $temp->rpo = $data['rpo'];
        $temp->media = $data['media'];
        $temp->current_storage_location = $data['current_storage_location'];
        $temp->ownership = $data['ownership'];
        return $temp;
    }

}