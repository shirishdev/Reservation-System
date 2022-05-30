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


    $service_id=$this->input->post('service_id');

    $data['selectedtime'] = $this->input->post('selectedtime');

    $date = date("m/d/Y", strtotime($this->input->post('date')));  
    
    $ServiceData = $this->BookingsModel->getDetailService($service_id);
    $maxResidents = !empty($ServiceData->max_residents) ? (int)$ServiceData->max_residents : 0;
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
        $class = 'available';

        $time=date('h:i A',$i);

        $countResult=$this->BookingsModel->GetBookedTimeSlots($service_id,$date,$time);
        
        $bookedCount = !empty($countResult->totalcount) ? (int)$countResult->totalcount : 0;


        if($bookedCount >= $maxResidents){
            $class = 'booked';
        }
        $TimeSlot[]=array('class'=>$class,'bookingcount'=>'0','time'=>date('h:i A',$i)); 

    }
    $data['TimeSlot'] = $TimeSlot;
    $result = $this->load->view('ViewTimeSlots',$data);
}else{
 echo "Service Feild Required";
}
}

public function getMaxSlotsBookings(){

 $service_id=$this->input->post('service_id');
 $time_slot=$this->input->post('time_slot');
 $date=$this->input->post('date');

 $data['bookingsCount'] = $this->BookingsModel->GetBookedTimeSlots($service_id,$date,$time_slot);

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

public function UpdateBookingRecords(){
    try{
     $booking_id=$this->input->get('booking_id');
     $data['BookingData']=$this->BookingsModel->GetBookingsData($booking_id);
     $data['Services']=$this->BookingsModel->serviceList();
     $this->load->view('UpdateBookingData',$data);

     if($this->input->post('Update')){
        $data=[
            'name'=>$_POST['name'],
            'email'=>$_POST['email'],
            'contact'=>$_POST['contact'],
            'service_id'=>$_POST['service_id'],
            'booking_date'=>$_POST['booking_date'],
            
            'start_time'=>$_POST['start_time'],
            'party_size'=>"2",
            'booking_status'=>"Pending",
            'booking_created_at'=> date('Y-m-d H:i:s')
        ];


        $result=$this->BookingsModel->UpdateBookingData($_POST['booking_id'],$data);



        $guestDetails = !empty($_POST['guest_details']) ? $_POST['guest_details'] : [];

        foreach ($guestDetails as $key => $value) {

            $UpdateGuestFeilds=[
                'booking_id'=>$result,
                'guest_details'=> $value,
            ];


            $NewGuestFeilds=$this->BookingsModel->InsertNewGuestFeilds($UpdateGuestFeilds,$booking_id);
        }

        if($result>0) {
            echo "<script>alert('Booking Updated Successfully')</script>";
             redirect('BookingsController');
        }else{
            echo "<script>alert('Unable to update')</script>";
        }
    }
}catch(Exception $e){
    echo "<script>alert('".$e->getMessage()."')</script>";
}
//$this->load->view('BookingList');

}
}
?>