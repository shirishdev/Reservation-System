<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Homepagemodel extends CI_MODEL{
	public function displayservicerecords($date) {
		$this->db->select('*');
		$this->db->from('services');
		$this->db->where(' start_date <=',date('Y-m-d',strtotime($date)));
		$this->db->where('end_date >=', date('Y-m-d',strtotime($date)));
		$query=$this->db->get();
		return $query->result();	
	}

	public function DisplaySingleService($service_id) {
		
		$this->db->select('*');
		$this->db->from('services');
		$this->db->join('working_times', 'working_times.service_id = services.service_id');
		$this->db->where('services.service_id',$service_id);
		$query=$this->db->get();
		return $query->row();


	}

	public function DisplayFetchTimeSlot($service_id) {
		$this->db->select('*');
		$this->db->from('services');
		$this->db->join('working_times', 'working_times.service_id = services.service_id');
		$query = $this->db->get();
		return $query->result();
	}

	public function DisplayMaxTimeslot($service_id) {
		$this->db->select('max_slot_bookings');
		$this->db->from('services');
		$query = $this->db->get();
		return $query->row();
	}

	public  function InsertBookingRecords($BookingNewData) {
        $this->db->insert('bookings',$BookingNewData);
		$insert_id=$this->db->insert_id();
		return $insert_id;
     }

    public  function InsertGuestDetails($addGuestFeilds) {
        return $this->db->insert('guest',$addGuestFeilds);
     }

     public function serviceList(){
		$this->db->select('service_id,title');
		$this->db->from('services');
		$query=$this->db->get();
		return $query->result();
	}
}


