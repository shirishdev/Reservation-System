<?php 
defined('BASEPATH')OR exit('No direct script access allowed');

class ReservationController extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
        //load the database  
		$this->load->database();  
         //load the model  
		//$this->load->model('Reservationmodel');  

	}

	public function index() {
			$this->load->view('ReservationView');
	}
}
?>