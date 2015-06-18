<?php

class RA_Model extends DataMapper {

    var $table = 'risk_assesment';

    function __construct($id = NULL){
        parent::__construct($id);
        $ci = &get_instance();
        $ci->load->library('session');
        $this->session = $ci->session;
    }

    function getAll(){
    	$risk_assesment = new RA_Model();
    	$risk_assesment->get();
		$result = array();
		foreach ($risk_assesment as $ra)
		{
            $data = $this->getDetailsRiskAssestment($ra);
            array_push($result, $data);
		}
		return $result;
    }

    function getDetailsRiskAssestment($ra){
        $data = new stdClass();
        $data->id = $ra->id;
        $data->threat = $ra->threat;
        $data->p = $ra->p;
        $data->i = $ra->i;
        $data->pm = $ra->pm;
        $data->im = $ra->im;
        return $data;
    }

    function add($data){
        if(is_array($data)){
            $ra = $this->addDetailsRiskAssestment($data);
            if($isSuccess = $ra->save_as_new()){
                return TRUE;
            } else {
                return FALSE;
            }
        }
        return FALSE;
    }

    function addDetailsRiskAssestment($data){
        $ra = new RA_Model();
        $ra->threat = $data['threat'];
        $ra->p = $data['p'];
        $ra->i = $data['i'];
        $ra->pm = $data['pm'];
        $ra->im = $data['im'];
        return $ra;
    }
}