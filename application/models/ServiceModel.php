<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ServiceModel extends CI_MODEL{


    public function FetchServiceData(){
         $query=$this->db->get('services');
         return $query->result();
    }


        // public function FetchServiceData($service_id){
        //     $this->db->
        //      $query=$this->db->get('services');
        //      return $query->result();
        // }



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
    public function UpdateService(){
        $this->db->update('',)
    }
}
?>