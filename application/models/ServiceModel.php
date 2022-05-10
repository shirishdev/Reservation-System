<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ServiceModel extends CI_MODEL{


    public function FetchServiceData(){
         $query=$this->db->get('services');
         return $query->result();
    }

    public function getServicesRecords($service_id){
            // $this->db->select('*');
            // $this->db->from('services');
            // $this->db->where('service_id',$service_id);
            // $query=$this->db->get();
            // return $query->result();

            $this->db->select('*');
                $this->db->from('services');
                $this->db->join('working_times', 'working_times.service_id = services.service_id');
                // $this->db->join('', 'table1.id = table3.id');
                $query = $this->db->get();


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
        
        // $query = $this->db->query("update services set title='$title',description='$description',start_date='$start_date',end_date='$end_date',service_length='$service_length',max_residents='$max_residents',max_slot_bookings='$max_slot_bookings',service_image='$service_image',service_price='$service_price' where service_id='$service_id'");

        // return true;
       }
}

?>