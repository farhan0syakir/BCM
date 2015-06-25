<?php

class BA_Model extends DataMapper {

    var $table = 'bus_act';
    // var $has_many = array('ra_model');

    function __construct($id = NULL){
        parent::__construct($id);
        $ci = &get_instance();
        $ci->load->library('session');
        $this->session = $ci->session;
    }

    function getAll(){
    	$bus_activity = new BA_Model();
    	$bus_activity->get();
		$result = array();
		foreach ($bus_activity as $ba)
		{
            $data = $this->getDetailsBusAct($ba);
            array_push($result, $data);
		}
		return $result;
    }

    function add($data){
        if(is_array($data)){
            $ba = $this->addDetailsBusAct($data);
            if($isSuccess = $ba->save_as_new()){
                return TRUE;
            } else {
                return FALSE;
            }
        }
        return FALSE;
    }

    function addDetailsBusAct($data){
        $ba = new BA_Model();
        $ba->number = $data['number'];
        $ba->name = $data['name'];
        $ba->description = $data['description'];
        $ba->critical_time_per = $data['cto'];
        $ba->rto = $data['rto'];

        $ba->less_4h = $data['less_4h'];
        $ba->less_1d = $data['less_1d'];
        $ba->less_2d = $data['less_2d'];
        $ba->less_3d = $data['less_3d'];
        $ba->less_7d = $data['less_7d'];
        $ba->more_7d = $data['more_7d'];

        $ba->type_less_4h = $data['type_less_4h'];
        $ba->type_less_1d = $data['type_less_1d'];
        $ba->type_less_2d = $data['type_less_2d'];
        $ba->type_less_3d = $data['type_less_3d'];
        $ba->type_less_7d = $data['type_less_7d'];
        $ba->type_more_7d = $data['type_more_7d'];

        $ba->non_type_less_4h = $data['non_type_less_4h'];
        $ba->non_type_less_1d = $data['non_type_less_1d'];
        $ba->non_type_less_2d = $data['non_type_less_2d'];
        $ba->non_type_less_3d = $data['non_type_less_3d'];
        $ba->non_type_less_7d = $data['non_type_less_7d'];
        $ba->non_type_more_7d = $data['non_type_more_7d'];

        return $ba;
    }

    function getDetailsBusAct($ba){
        $data = new stdClass();
        $data->id = $ba->id;
        $data->number = $ba->number;
        $data->name = $ba->name;
        $data->description = $ba->description;
        $data->cto = $ba->critical_time_per;
        $data->rto = $ba->rto;

        $data->less_4h = $ba->less_4h;
        $data->less_1d = $ba->less_1d;
        $data->less_2d = $ba->less_2d;
        $data->less_3d = $ba->less_3d;
        $data->less_7d = $ba->less_7d;
        $data->more_7d = $ba->more_7d;

        $data->type_less_4h = $ba->type_less_4h;
        $data->type_less_1d = $ba->type_less_1d;
        $data->type_less_2d = $ba->type_less_2d;
        $data->type_less_3d = $ba->type_less_3d;
        $data->type_less_7d = $ba->type_less_7d;
        $data->type_more_7d = $ba->type_more_7d;

        $data->non_type_less_4h = $ba->non_type_less_4h;
        $data->non_type_less_1d = $ba->non_type_less_1d;
        $data->non_type_less_2d = $ba->non_type_less_2d;
        $data->non_type_less_3d = $ba->non_type_less_3d;
        $data->non_type_less_7d = $ba->non_type_less_7d;
        $data->non_type_more_7d = $ba->non_type_more_7d;

        return $data;
    }

}

/* End of file country.php */
/* Location: ./application/models/country.php */