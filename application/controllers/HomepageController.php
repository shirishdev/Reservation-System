<?php 
defined('BASEPATH')OR exit('No direct script access allowed');

class HomepageController extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
        //load the database  
		$this->load->database();  
         //load the model  
		$this->load->model('Homepagemodel');  

	}

	public function index() {
		$date = !empty($this->input->get('date')) ? $this->input->get('date') : date('m/d/Y');
	 	//load the method of model  
		$data['serviceList']=$this->Homepagemodel->displayservicerecords($date);  
		$data['date'] = $date;

		$this->load->view('homepage_view',$data);
	}

	public function DisplayFetchservicedetails() {
		
		$service_id=$this->input->get('service_id');
		$date = !empty($this->input->get('date')) ? $this->input->get('date') : date('m/d/Y');

		$ServiceData=$this->Homepagemodel->DisplaySingleService($service_id);
		$data['date'] = $date;
		$data['ServiceData']=$ServiceData;
		$data['timeslot']=$this->GetTimeSlot($date,$ServiceData);


		$this->load->view('ServiceViewDetails',$data);


	}
	public function GetTimeSlot($date,$ServiceData) {

		$day = strtolower(date('l', strtotime($date)));

		$startTimeKey =  $day."_start_time";
		$endTimeKey = $day."_end_time";

		$startTime = $ServiceData->$startTimeKey;
		$endTime = $ServiceData->$endTimeKey;


		$startTs = strtotime($date.' '.$startTime);
		$endTs = strtotime($date.' '.$endTime);
		$lengthTs = (int)$ServiceData->service_length * 60;
		$timeslot=[];
		for($i=$startTs; $i < $endTs; $i +=$lengthTs) {
			$timeslot[] = array('class'=>'available','bookingcount'=>0,'time'=>date('h:i A',$i));
		}
		return $timeslot;
	}

	public function PartySizeslot() {
		$service_id=$this->input->get('service_id');
		$data['MaxSlotbooking']=$this->Homepagemodel->DisplayMaxTimeslot($service_id);
		$this->load->view('MaxSlotBookingView',$data);

	}

	public function DisplayGuestForm() {
      $service_id=$this->input->get('service_id');
      $this->load->view('MaxSlotBookingView',$data);
	}
}



?>