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
        $temps = new RA_Probability_Model();
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
}