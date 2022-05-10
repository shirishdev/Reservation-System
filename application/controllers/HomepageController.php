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
		 $result
		 
       	 $this->load->view('ServiceViewDetails');


  }
}



?>