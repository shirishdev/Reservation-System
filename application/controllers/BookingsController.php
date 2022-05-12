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
    	$data['date']=$this->input->post('date');
    	$data['serviceData'] = $this->BookingsModel->getDetailService($service_id);
    	$result = $this->load->view('ViewTimeSlots',$data);
    }
}
?>