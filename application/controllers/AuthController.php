<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthController extends CI_Controller{

   public function __construct(){
				parent::__construct();
				$this->load->helper('form','url');
				$this->load->library('form_validation','session');
			    $this->load->database();
      }

      public function index(){
      	$this->load->view('login_view');
      }

     public function login(){
     	  $this->load->library('form_validation');
        $this->form_validation->set_rules('email','Email','required');
    	$this->form_validation->set_rules('password','Password','required');

    	if($this->form_validation->run()===FALSE){
    		$this->load->view('login_view');
    	}else{
    		$email=$this->input->post('email');
    		$password=$this->input->post('password');

    		if ($email=="admin@gmail.com" && $password=="1234") {

    			$this->session->set_userdata(array('email'=>$email));
    			$this->load->view('dashboard');
    		}else{
    			$this->load->model('login_view');
    			$result=$this->login_model->login();
    			if($result > 0){
    				$this->session->set_userdata(array('email'=>$email));
    				$this->load->view('homepage_view.php');
    			}else{
    				$msg="Wrong Email and password";
    				$this->load->view('login_view',$msg);
    			}
    		}
    	}
    }

}
?>