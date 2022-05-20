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
   $data['BookingData']=$this->BookingsModel->FetchBookingsData();

   $this->load->view('BookingsList',$data);

}

public function AddBookings(){

    try{

        $data['Services']=$this->BookingsModel->serviceList();
        $this->load->view('InsertBookings',$data);

        if ($this->input->post('submit')) {

         $addBookings=[
            'name'=>$_POST['name'],
            'email'=>$_POST['email'],
            'contact'=>$_POST['contact'],
            'service_id'=>$_POST['service_id'],
            'booking_date'=>$_POST['booking_date'],
            'booking_status'=>"Pending",
            'start_time'=>$_POST['start_time'],
            'party_size'=>$_POST['party_size'],
            'booking_created_at'=> date('Y-m-d H:i:s')]; 

            $result=$this->BookingsModel->InsertBookings($addBookings);
            $guestDetails = !empty($_POST['guest_details']) ? $_POST['guest_details'] : [];

            foreach ($guestDetails as $key => $value) {

                $addGuestFeilds=[
                    'booking_id'=>$result,
                    'guest_details'=> $value,
                ];

                $resultGuestFeilds=$this->BookingsModel->InsertGuestFeilds($addGuestFeilds);
            }

            if($result>0) {
                echo "<script>alert('Booking Added Successfully')</script>";
            }else{
                echo "<script>alert('Booking Not added')</script>";
            }
        }

    }catch(Exception $e){
        echo "<script>alert('".$e->getMessage()."')</script>";
    }
}

public function getTimeSlots(){
    
    $GetBookedTimeSlots='';
    $service_id=$this->input->post('service_id');
    $date=$this->input->post('date');
    $ServiceData = $this->BookingsModel->getDetailService($service_id);
    if(!empty($ServiceData)){

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
 }else{
     echo "Service Feild Required";
 }
}

public function getMaxSlotsBookings(){

 $service_id=$this->input->post('service_id');
 $data['SlotBookings']=$this->BookingsModel->getMaxBookings($service_id);
 $this->load->view('MaxSlotBookings',$data);
}

public function UpdatedBookingStatus(){
    $booking_id=$this->input->post('booking_id');
    $status=$this->input->post('status');

    $result =$this->BookingsModel->UpdateBookingStatus($booking_id,$status);

    echo $result;
}

public function DeleteBookingData(){

    $booking_id=$this->input->get('booking_id');
    $data['BookingData']=$this->BookingsModel->DeleteBookingDetails($booking_id);
    if($data==true){
        
        echo "<script>alert('Booking Deleted Successfully')</script>";
        redirect('BookingsController');
    }else{

        echo "<script>alert('Unable to delete')</script>";
    }
}

public function UpdateBookingData(){
     $booking_id=$this->input->get('booking_id');
     $data['BookingData']=$this->BookingsModel->UpdateBookingDetails($booking_id);
     $this->load->view('UpdateBookingData',$data);
  }
}
?>