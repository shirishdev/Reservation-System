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

	public function Checkout() {
		try{
            
		if($this->input->post('savebooking')) {

        $this->load->library('session');
      
         $BookingNewData = array(
           'name'  =>$this->session->userdata['bookingform']['name'],
           'email'  =>$this->session->userdata['bookingform']['email'],
           'contact'  =>$this->session->userdata['bookingform']['contact'],
           'service_id'=>$this->session->userdata['bookingform']['service_id'],
           'booking_date'=>$this->session->userdata['bookingform']['booking_date'],
           'start_time'  =>$this->session->userdata['bookingform']['start_time'],
           'Party_Size'  =>$this->session->userdata['bookingform']['Party_Size'],
           'booking_created_at'=> date('Y-m-d H:i:s'));
   
          	$result=$this->Homepagemodel->InsertBookingRecords($BookingNewData);
          	$guestDetails = !empty($this->session->userdata['bookingform']['GuestFormDetails']) ? $this->session->userdata['bookingform']['GuestFormDetails'] : [];
           	
          	
           	foreach ($guestDetails as $key => $value) {
           	 	$addGuestFeilds=[
                    'booking_id'=>$result,
                    'guest_details'=> $value
                ];
               $ResulGuest=$this->Homepagemodel->InsertGuestDetails($addGuestFeilds);
              
            }
              
    
            if($result>0) {
                echo "<script>alert(' Added Successfully')</script>";
                 redirect('/HomepageController', 'refresh');
                $this->session->unset_userdata('bookingform');
            }else{
                echo "<script>alert('Not added')</script>";
            }
        }else{
        	 $this->load->library('session');
          	$BookingNewData = array(
		           'name'  =>$_POST['name'],
		           'email'  =>$_POST['email'],
		           'contact'  =>$_POST['contact'],
		           'service_id'=>$_POST['service_id'],
		            'booking_date'=>$_POST['booking_date'],
		           'start_time'  =>$_POST['start_time'],
		           'Party_Size'  =>$_POST['Party_Size'],
		           'booking_created_at'=> date('Y-m-d H:i:s'),
		           	'GuestFormDetails' =>isset($_POST['GuestFormDetails']) && !empty($_POST['GuestFormDetails']) ? $_POST['GuestFormDetails'] : [],
		       	);


             		$this->session->set_userdata('bookingform',$BookingNewData);
         			$this->load->view('Checkoutview',$BookingNewData);
            }
        
        }catch(Exception $e){
        echo "<script>alert('".$e->getMessage()."')</script>";
    }

          
         }
	}

?>


