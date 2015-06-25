<?php

class RA_Existing_Measures_Model extends DataMapper {

    var $table = 'ra_existing_measures';

    function __construct($id = NULL){
        parent::__construct($id);
        $ci = &get_instance();
        $ci->load->library('session');
        $this->session = $ci->session;
    }
    
    function getAll(){
        $temps = new RA_Existing_Measures_Model();
        $temps->get();
        $result = array();
        foreach ($temps as $temp)
        {
            $data = $this->getDetails($temp);
            // $data = ('1' => 'farhan');
            array_push($result, $data);
        }
        // print_r($result);
        return $result;
    }

    function getDetails($ra){
        $data = new stdClass();
        $data->id = $ra->id;
        $data->ra_id = $ra->ra_id;
        $data->existing_measure = $ra->existing_measure;
        return $data;
    }
    
    function getWhereRa($ra_id){
        $this->where('ra_id',$ra_id)->get();
        $result = array();
        foreach ($this as $ra)
        {
            $data = $this->getDetails($ra);
            // $data = ('1' => 'farhan');
            array_push($result, $data);
        }
        return $result;
    }
}