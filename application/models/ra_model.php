<?php

class RA_Model extends DataMapper {

    var $table = 'ra';
    // var $has_many = array("ra_vulnerability_model");
    // var $has_one = array("ba_model");

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
        $data->ba_id = $ra->bia;
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
                $this->addVulnerabilities($data);
                $this->addExistingMeasures($data);
                $this->addProposedMeasures($data);
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

    function getRaImpact(){
        $ra_impact = new RAImpact_Model();
        $result = $ra_impact->getAll();
        return $result;
    }

    function getRaProbability(){
        $ra_probability = new RA_Probability_Model();
        $result = $ra_probability->getAll();
        return $result;
    }

    function addVulnerabilities($data){
        $isSuccess = TRUE;
        foreach ($data['vulnerabilities'] as $vulnerability) {
            $ra_vulnerability = new RA_Vulnerability_Model();
            $ra = new RA_Model();
            $ra_vulnerability->ra_id = $ra->where('threat', $data['threat'])->get()->id;
            $ra_vulnerability->vulnerability = $vulnerability;
            $isSuccess &= $ra_vulnerability->save_as_new();
        }

        return $isSuccess;
    }

    function addExistingMeasures($data){
        $isSuccess = TRUE;
        foreach ($data['existingMeasures'] as $existingMeasure) {
            $ra_existingMeasure = new RA_Existing_Measures_Model();
            $ra = new RA_Model();
            $ra_existingMeasure->ra_id = $ra->where('threat', $data['threat'])->get()->id;
            $ra_existingMeasure->existing_measure = $existingMeasure;
            $isSuccess &= $ra_existingMeasure->save_as_new();
        }

        return $isSuccess;
    }

    function addProposedMeasures($data){
        $isSuccess = TRUE;
        foreach ($data['proposedMeasures'] as $proposedMeasure) {
            $ra_proposedMeasure = new RA_Proposed_Measures_Model();
            $ra = new RA_Model();
            $ra_proposedMeasure->ra_id = $ra->where('threat', $data['threat'])->get()->id;
            $ra_proposedMeasure->proposed_measure = $proposedMeasure;
            $isSuccess &= $ra_proposedMeasure->save_as_new();
        }

        return $isSuccess;
    }

    function getVulnerabilities(){
        $ra_vulnerability = new RA_Vulnerability_Model();
        return $ra_vulnerability->getWhereRa($this->id);
    }

    function getExistingMeasures(){
        $ra_ExistingMeasure = new RA_Existing_Measures_Model();
        return $ra_ExistingMeasure->getWhereRa($this->id);
    }

    function getProposedMeasures(){
        $ra_ProposedMeasure = new RA_Proposed_Measures_Model();
        return $ra_ProposedMeasure->getWhereRa($this->id);
    }

    function getBa(){
        $ba = new BA_Model();
        $ba->where('id', $this->ba_id)->get();
        return $ba;
    }    
}