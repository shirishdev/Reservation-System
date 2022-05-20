<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BookingsController extends CI_Controller{

	public function __construct(){
	    parent::__construct();
	    $this->load->helper('form','url');
        $this->load->library('form_validation','session');
        $this->load->database();
        $this->load->model('BookingsModel');
    }

    public function index(){
    	$this->load->view('BookingsList');
    }

    public function AddBookings(){
    	$data['Services']=$this->BookingsModel->serviceList();
        $this->load->view('InsertBookings',$data);
    }
    
    public function getTimeSlots(){

    	$service_id=$this->input->post('service_id');
    	$date=$this->input->post('date');
    	$ServiceData = $this->BookingsModel->getDetailService($service_id);

        $data['date']=$date;
        $data['ServiceData']=$ServiceData;
        $day=strtolower(date("l",strtotime($date))); 
        $startTimeKey=$day."_start_time";
        $endTimeKey=$day."_end_time";

        $startTime=$ServiceData->$startTimeKey;
        $endTime=$ServiceData->$endTimeKey;

        $startTs=strtotime($date.''.$startTime);
        $endTs=strtotime($date.''.$endTime);
        $lenghtTs=(int)$ServiceData->service_length * 60 ;
        $TimeSlot=[];
        for ($i=$startTs; $i<$endTs ; $i+=$lenghtTs) { 
            $TimeSlot[]=array('class'=>'available','bookingcount'=>'0','time'=>date('h:i A',$i));
        }
        $data['TimeSlot'] = $TimeSlot;
        $result = $this->load->view('ViewTimeSlots',$data);
     
    }

    public function getMaxSlotsBookings(){
        $service_id=$this->input->post('service_id');
        $data['SlotBookings']=$this->BookingsModel->getMaxBookings($service_id);
        $this->load->view('MaxSlotBookings',$data);
    }

    public function getGuestFields(){
        $this->load->view('GuestDetails');
    }
}
?>