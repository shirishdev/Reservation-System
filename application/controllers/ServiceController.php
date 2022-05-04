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
        $this->load->view('serviceList');
   }
   
   public function AddService(){

    try{
        $this->load->view('ServiceView');
        if($this->input->post('submit')){
                $data=[
                'title'=>$_POST['title'],
                'description'=>$_POST['description'],
                'start_date'=>$_POST['start_date'],
                'end_date'=>$_POST['end_date'],
                'service_length'=>$_POST['service_length'],
                'max_residents'=>$_POST['max_residents'],
                'max_slot_bookings'=>$_POST['max_slot_bookings']];
                $result=$this->ServiceModel->SaveService($data);

            if($result > 0){
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
  
   public function DisplayServiceData(){
    $result['data']=$this->ServiceModel->FetchServiceData();
    $this->load->view('serviceList',$result);
    }

    public function UpdateServiceData(){

    }

    public function DeleteServiceData(){

    }
}
?> 
