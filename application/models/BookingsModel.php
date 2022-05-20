<?php

class BookingsModel extends CI_MODEL{

	public function InsertBookings($addBookings){
		$this->db->insert('bookings',$addBookings);
		$insert_id=$this->db->insert_id();
		return $insert_id;
	}
	public function InsertGuestFeilds($addGuestFeilds){
		$this->db->insert('guest',$addGuestFeilds);
		$insert_id=$this->db->insert_id();
		return $insert_id;
	}

	public function serviceList(){
		$this->db->select('service_id,title');
		$this->db->from('services');
		$query=$this->db->get();
		return $query->result();
	}

	public function BookingList(){
		$this->db->select('booking_id');
		$this->db->from('bookings');
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

	public function guestDetails($guestDetailsArr){
		$this->db->insert('guest',$guestDetailsArr);
		$insert_id=$this->db->insert_id();
		return $insert_id;
	}

	public function FetchBookingsData(){
		$this->db->select('*');
		$this->db->from('bookings');
		$this->db->join('services','services.service_id = bookings.service_id','LEFT');
		$query = $this->db->get();
		return $query->result();

	}

	public function UpdateBookingStatus($booking_id,$status){
		$data = array('booking_status'=>$status);
		$this->db->where('booking_id',$booking_id);
		$result=$this->db->update('bookings',$data);
		echo $result;
	}

    public function DeleteBookingDetails($booking_id){
          $this->db->where("booking_id",$booking_id);
          $this->db->delete("bookings");
          return true;
	}
}   


?>