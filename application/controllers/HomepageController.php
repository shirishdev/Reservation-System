<?php 
defined('BASEPATH')OR exit('No direct script access allowed');

class HomepageController extends CI_Controller {

  	public function __construct(){
	parent::__construct();
        $this->load->helper(array('form','url'));
        
        
        
	}

	 public function index() {
	 	$this->load->view('homepage_view');
	 }
}

?>