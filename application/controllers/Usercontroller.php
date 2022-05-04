<?php 
defined('BASEPATH')OR exit('No direct script access allowed');

class Usercontroller extends CI_Controller {

  	public function __construct(){
	parent::__construct();
        $this->load->helper(array('form','url'));
        $this->load->model('usermodel');
        $this->load->database();
        
	}



	 public function insert_data() {
      $this->load->view('addUser');
      if ($this->input->post('submit')) {
         
        $data = [
        'name'=>$_POST['name'],
       'email'=>$_POST['email'],
       'phone'=>$_POST['phone'],
       'password'=>$_POST['password'],
       'role'=>$_POST['role']];
       $result= $this->usermodel->insert_user($data);
      
       
      }

    }
}

 ?>