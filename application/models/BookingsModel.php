<?php

class BookingsModel extends CI_MODEL{

	public function InsertBookings(){
		$this->db->insert('bookings',$data);
		return $query->result();
	}

	public function serviceList(){
		$this->db->select('service_id,title');
		$this->db->from('services');
		$query=$this->db->get();
		return $query->result();
	}

	public function getDetailService($service_id){
		$this->db->select('*');
        $this->db->from('services');
        $this->db->join('working_times','working_times.service_id=services.service_id','LEFT');
        $this->db->where('services.service_id',$service_id);
        $query=$this->db->get();
		return $query->row();
	}

	public function getMaxBookings($service_id){
		$this->db->select('max_slot_bookings');
		$this->db->from('services');
		$query=$this->db->get();
		return $query->row();
	}
}   


?>