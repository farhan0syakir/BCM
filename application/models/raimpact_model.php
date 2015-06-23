<?php

class RAImpact_Model extends DataMapper {

    var $table = 'ra_impact';

    function __construct($id = NULL){
        parent::__construct($id);
        $ci = &get_instance();
        $ci->load->library('session');
        $this->session = $ci->session;
    }
    
    function getAll(){
        $ra_impact = new RAImpact_Model();
        $ra_impact->get();
        $result = array();
        foreach ($ra_impact as $ra)
        {
            $data = $this->getDetails($ra);
            // $data = ('1' => 'farhan');
            array_push($result, $data);
        }
        // print_r($result);
        return $result;
    }

    function getDetails($ra){
        $data = new stdClass();
        $data->id = $ra->id;
        $data->impact = $ra->impact;
        return $data;
    }
}