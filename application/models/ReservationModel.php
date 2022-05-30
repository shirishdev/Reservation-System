<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ReservationModel extends CI_MODEL{


    // public function FetchReservationServicesList(){
    //     $this->db->select('service_id,title');
    //      $this->db->from('services');
    //      $query=$this->db->get();
    //      return $query->result();
            
    // }

    public function FetchReservationServicesList(){        
        $this->db->select('service_id,title,');
        $this->db->from('services');
        $query=$this->db->get();
        return $query->result();
    }
}

?>