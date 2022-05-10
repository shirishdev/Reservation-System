<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ServiceModel extends CI_MODEL{


    public function FetchServiceData(){
         $query=$this->db->get('services');
         return $query->result();
    }

    public function getServicesRecords($service_id){
            $this->db->select('*');
            $this->db->from('services');
            $this->db->join('working_times', 'working_times.service_id = services.service_id');
            $this->db->group_by('services.service_id');
            $this->db->where('services.service_id',$service_id);
            $query = $this->db->get();
            return $query->result();
            }

	public function SaveService($data){
    	$this->db->insert('services',$data);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }

    
    public function InsertWorkingTimes($workingTimesArr){
        $this->db->insert('working_times',$workingTimesArr);
        $insert_id=$this->db->insert_id();
        return $insert_id;
    }    
    public function DeleteServiceData($service_id){
        $this->db->where("service_id",$service_id);
        $this->db->delete("services");
        return true;
    }
    
    public function UpdateServicesRecords($service_id,$data){
         $this->db->where('service_id', $service_id);
         $result=$this->db->update('services', $data);
         return $result;
    }


?>