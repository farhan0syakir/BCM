<?php

class Mor_Normal_Model extends DataMapper {

    var $table = 'mor_normal';

    function __construct($id = NULL){
        parent::__construct($id);
        $ci = &get_instance();
        $ci->load->library('session');
        $this->session = $ci->session;
    }
    
    function getAll(){
        $bas = new Mor_Normal_Model();
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
        $temp = new stdClass();
        $temp->id = $ba->id;
        $temp->ba_id = $ba->ba_id;
        $temp->skill_set = $ba->skill_set;
        $temp->location = $ba->location;
        $temp->staff = $ba->staff;
        $temp->shift = $ba->shift;
        $temp->location = $ba->location;
        $temp->pc = $ba->pc;
        $temp->s_less_4h = $ba->s_less_4h;
        $temp->s_less_1d = $ba->s_less_1d;
        $temp->s_less_2d = $ba->s_less_2d;
        $temp->s_less_3d = $ba->s_less_3d;
        $temp->s_less_7d = $ba->s_less_7d;
        $temp->s_more_7d = $ba->s_more_7d;
        $temp->war_less_4h = $ba->war_less_4h;
        $temp->war_less_1d = $ba->war_less_1d;
        $temp->war_less_2d = $ba->war_less_2d;
        $temp->war_less_3d = $ba->war_less_3d;
        $temp->war_less_7d = $ba->war_less_7d;
        $temp->war_more_7d = $ba->war_more_7d;
        $temp->p_less_4h = $ba->p_less_4h;
        $temp->p_less_1d = $ba->p_less_1d;
        $temp->p_less_2d = $ba->p_less_2d;
        $temp->p_less_3d = $ba->p_less_3d;
        $temp->p_less_7d = $ba->p_less_7d;
        $temp->p_more_7d = $ba->p_more_7d;
        return $temp;
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
        $temp = new Mor_Normal_Model();
        $temp->ba_id = $data['ba_id'];
        $temp->skill_set = $data['skill_set'];
        $temp->location = $data['location'];
        $temp->staff = $data['staff'];
        $temp->shift = $data['shift'];
        $temp->location = $data['location'];
        $temp->pc = $data['pc'];
        $temp->s_less_4h = $data['s_less_4h'];
        $temp->s_less_1d = $data['s_less_1d'];
        $temp->s_less_2d = $data['s_less_2d'];
        $temp->s_less_3d = $data['s_less_3d'];
        $temp->s_less_7d = $data['s_less_7d'];
        $temp->s_more_7d = $data['s_more_7d'];
        $temp->war_less_4h = $data['war_less_4h'];
        $temp->war_less_1d = $data['war_less_1d'];
        $temp->war_less_2d = $data['war_less_2d'];
        $temp->war_less_3d = $data['war_less_3d'];
        $temp->war_less_7d = $data['war_less_7d'];
        $temp->war_more_7d = $data['war_more_7d'];
        $temp->p_less_4h = $data['p_less_4h'];
        $temp->p_less_1d = $data['p_less_1d'];
        $temp->p_less_2d = $data['p_less_2d'];
        $temp->p_less_3d = $data['p_less_3d'];
        $temp->p_less_7d = $data['p_less_7d'];
        $temp->p_more_7d = $data['p_more_7d'];

        return $temp;
    }

}