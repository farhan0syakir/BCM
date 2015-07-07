<?php

class BU_Model extends DataMapper {

    var $table = 'business_unit';

    function __construct($id = NULL){
        parent::__construct($id);
        $ci = &get_instance();
        $ci->load->library('session');
        $this->session = $ci->session;
    }
    
    function getAll(){
        $bas = new BU_Model();
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
        $data->bu_code = $ba->bu_code;

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
        return FALSE;
        }
    }

    function addDetails($data){
        $temp = new BU_Model();
        $temp->bu_code = $data['bu_code'];
        $temp->name = $data['name'];
        $temp->mtpd = $data['mtpd'];
        $temp->mtpd_type = $data['mtpd_type'];
        $temp->impact_parameter = $data['impact_parameter'];
        $temp->impact_parameter_2 = $data['impact_parameter_2'];
        $temp->impact_parameter_3 = $data['impact_parameter_3'];
        $temp->impact_parameter_4 = $data['impact_parameter_4'];
        $temp->impact_parameter_5 = $data['impact_parameter_5'];
        
        $temp->impact_parameter_type = $data['impact_parameter_type'];
        $temp->impact_parameter_type_2 = $data['impact_parameter_type_2'];
        $temp->impact_parameter_type_3 = $data['impact_parameter_type_3'];
        $temp->impact_parameter_type_4 = $data['impact_parameter_type_4'];
        $temp->impact_parameter_type_5 = $data['impact_parameter_type_5'];

        return $temp;
    }

}