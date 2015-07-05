<?php

class Mor_Non_It_Model extends DataMapper {

    var $table = 'mor_non_it';

    function __construct($id = NULL){
        parent::__construct($id);
        $ci = &get_instance();
        $ci->load->library('session');
        $this->session = $ci->session;
    }
    
    function getAll(){
        $bas = new Mor_Non_It_Model();
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
        $data->equipment = $ba->equipment;
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
        $temp = new Mor_Non_It_Model();
        $temp->equipment = $data['equipment'];
        return $temp;
    }

}