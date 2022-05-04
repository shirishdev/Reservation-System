<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ServiceModel extends CI_MODEL{

	public function SaveService($data){
    	$this->db->insert('services',$data);
        $insert_id = $this->db->insert_id();
        return $insert_id;
       
    }

    public function FetchServiceData(){
    	 $query=$this->db->get('services');
    	 return $query->result();
    }
    
}
?>