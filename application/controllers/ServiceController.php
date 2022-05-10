<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class ServiceController extends CI_Controller{

   public function __construct(){
                parent::__construct();
                $this->load->helper('form','url');
                $this->load->library('form_validation','session');
                $this->load->database();
                $this->load->model('ServiceModel');
      }

   public function index(){
        $data['ServiceData']=$this->ServiceModel->FetchServiceData();
        $this->load->view('serviceList',$data);
        
   }

    public function AddService(){

    try{
        $this->load->view('InsertService');

        if($this->input->post('submit')){

            $config['upload_path'] = './assets/uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
            // $config['max_size'] = '100';
            // $config['max_width'] = '1024';
            // $config['max_height'] = '768';
            $this->upload->initialize($config);
            $this->load->library('upload');

            
            if (!file_exists('./assets/uploads/')) {
                mkdir('./assets/uploads/', 0777, true);
            }
            $imageUrl = '';
            if($this->upload->do_upload('service_image')){ 
                $imageDetailArray = $this->upload->data();
                $imageUrl =  "assets/uploads/".$imageDetailArray['file_name'];
            }
                
                $data=[
                'title'=>$_POST['title'],
                'description'=>$_POST['description'],
                'start_date'=>$_POST['start_date'],
                'end_date'=>$_POST['end_date'],
                'service_length'=>$_POST['service_length'],
                'max_residents'=>$_POST['max_residents'],
                'max_slot_bookings'=>$_POST['max_slot_bookings'],
                'service_image'=>$imageUrl,
                'service_price'=>$_POST['service_price']];

                $result=$this->ServiceModel->SaveService($data);

                $workingTimesArr = [
                    'service_id' => $result,
                    'monday_start_time'=>!empty(trim($_POST['monday_start_time'])) ? $_POST['monday_start_time'] : null,
                    'monday_end_time'=>!empty(trim($_POST['monday_end_time'])) ? $_POST['monday_end_time'] : null,
                    'monday_lunch_start_time'=>!empty(trim($_POST['monday_lunch_start_time'])) ? $_POST['monday_lunch_start_time'] : null,
                    'monday_lunch_end_time'=>!empty(trim($_POST['monday_lunch_end_time'])) ? $_POST['monday_lunch_end_time'] : null,

                    'tuesday_start_time'=>!empty(trim($_POST['tuesday_start_time'])) ? $_POST['tuesday_start_time'] : null,
                    'tuesday_end_time'=>!empty(trim($_POST['tuesday_end_time'])) ? $_POST['tuesday_end_time'] : null,
                    'tuesday_lunch_start_time'=>!empty(trim($_POST['tuesday_lunch_start_time'])) ? $_POST['tuesday_lunch_start_time'] : null,
                    'tuesday_lunch_end_time'=>!empty(trim($_POST['tuesday_lunch_end_time'])) ? $_POST['tuesday_lunch_end_time'] : null,

                    'wednesday_start_time'=>!empty(trim($_POST['wednesday_start_time'])) ? $_POST['wednesday_start_time'] : null,
                    'wednesday_end_time'=>!empty(trim($_POST['wednesday_end_time'])) ? $_POST['wednesday_end_time'] : null,
                    'wednesday_lunch_start_time'=>!empty(trim($_POST['wednesday_lunch_start_time'])) ? $_POST['wednesday_lunch_start_time'] : null,
                    'wednesday_lunch_end_time'=>!empty(trim($_POST['wednesday_lunch_end_time'])) ? $_POST['wednesday_lunch_end_time'] : null,

                    'thursday_start_time'=>!empty(trim($_POST['thursday_start_time'])) ? $_POST['thursday_start_time'] : null,
                    'thursday_end_time'=>!empty(trim($_POST['thursday_end_time'])) ? $_POST['thursday_end_time'] : null,
                    'thursday_lunch_start_time'=>!empty(trim($_POST['thursday_lunch_start_time'])) ? $_POST['thursday_lunch_start_time'] : null,
                    'thursday_lunch_end_time'=>!empty(trim($_POST['thursday_lunch_end_time'])) ? $_POST['thursday_lunch_end_time'] : null,

                    'friday_start_time'=>!empty(trim($_POST['friday_start_time'])) ? $_POST['friday_start_time'] : null,
                    'friday_end_time'=>!empty(trim($_POST['friday_end_time'])) ? $_POST['friday_end_time'] : null,
                    'friday_lunch_start_time'=>!empty(trim($_POST['friday_lunch_start_time'])) ? $_POST['friday_lunch_start_time'] : null,
                    'friday_lunch_end_time'=>!empty(trim($_POST['friday_lunch_end_time'])) ? $_POST['friday_lunch_end_time'] : null,

                    'saturday_start_time'=>!empty(trim($_POST['saturday_start_time'])) ? $_POST['saturday_start_time'] : null,
                    'saturday_end_time'=>!empty(trim($_POST['saturday_end_time'])) ? $_POST['saturday_end_time'] : null,
                    'saturday_lunch_start_time'=>!empty(trim($_POST['saturday_lunch_start_time'])) ? $_POST['saturday_end_time'] : null,
                    'saturday_lunch_end_time'=>!empty(trim($_POST['saturday_lunch_end_time'])) ? $_POST['saturday_end_time'] : null,

                    'sunday_start_time'=>!empty(trim($_POST['sunday_start_time'])) ? $_POST['sunday_start_time'] : null,
                    'sunday_end_time'=>!empty(trim($_POST['sunday_end_time'])) ? $_POST['sunday_end_time'] : null,
                    'sunday_lunch_start_time'=>!empty(trim($_POST['sunday_lunch_start_time'])) ? $_POST['sunday_lunch_start_time'] : null,
                    'sunday_lunch_end_time'=>!empty(trim($_POST['sunday_lunch_end_time'])) ? $_POST['sunday_lunch_end_time'] : null
                ];

                $WorkingTimesResult=$this->ServiceModel->InsertWorkingTimes($workingTimesArr);

            if(($result > 0)&&($workingTimesArr > 0)){
                echo "<script>alert('Record inserted successfully')</script>";
                redirect('ServiceController');
            }else{
                echo "<script>alert('Record not inserted')</script>";
            }
        }
    }catch(Exception $e){
            echo "<script>alert('".$e->getMessage()."')</script>";
    }
}
  
    public function UpdateService(){

         $service_id=$this->input->get('service_id');
         $data['ServiceData']=$this->ServiceModel->getServicesRecords($service_id);
    
         $this->load->view('UpdateServiceData',$data);
     
      if ($this->input->post('Update')) {

        $config['upload_path'] = './assets/uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
            // $config['max_size'] = '100';
            // $config['max_width'] = '1024';
            // $config['max_height'] = '768';
            $this->upload->initialize($config);
            $this->load->library('upload');

            
            if (!file_exists('./assets/uploads/')) {
                mkdir('./assets/uploads/', 0777, true);
            }
            $imageUrl = '';
            if($this->upload->do_upload('service_image')){ 
                $imageDetailArray = $this->upload->data();
                $imageUrl =  "assets/uploads/".$imageDetailArray['file_name'];
            }
        $service_id =$_POST['service_id']; 
        $data=[ 
        'title'=>$_POST['title'],
        'description'=>$_POST['description'],
        'start_date'=>$_POST['start_date'],
        'end_date'=>$_POST['end_date'],
        'service_length'=>$_POST['service_length'],
        'max_residents'=>$_POST['max_residents'],
        'max_slot_bookings'=>$_POST['max_slot_bookings'],
        'service_image'=>$imageUrl,
        'service_price'=>$_POST['service_price']];

        $result = $this->load->ServiceModel->UpdateServicesRecords($service_id,$data);
         
        echo "<script>alert('Service Updated successfully')</script>";
        redirect('ServiceController');
    }
}

   public function DeleteService(){

    $service_id=$this->input->get('service_id');
    $data['ServiceData']=$this->ServiceModel->DeleteServiceData($service_id);
    if($data==true){
      
        echo "<script>alert('Service deleted successfully')</script>";
        redirect('ServiceController');

    }else{
        echo "<script>alert('Unable to delete')</script>" ;
    }
    }
}
?> 
