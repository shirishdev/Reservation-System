<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class HomepageController extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
        //load the database  
		$this->load->database();  
         //load the model  
		$this->load->model('Homepagemodel');  

	}
}
?>