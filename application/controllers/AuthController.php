<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthController extends CI_Controller{

           public function __construct(){
             parent::__construct();
             $this->load->helper('form','url');
             $this->load->library('form_validation','session');
             $this->load->database();
             $this->load->model('login_model');
           }

           public function index(){
             $this->load->view('login_view');
           }
          
           public function login(){

             $this->form_validation->set_rules('email','Email','required');
             $this->form_validation->set_rules('password','Password','required');

             if($this->form_validation->run()==FALSE){

              redirect('AuthController');
             }else{

              $email=$this->input->post('email');
              $password=$this->input->post('password');

              $validate=$this->login_model->login($email,$password);

              if($validate){

                $this->session->set_userdata('email');
                $this->session->set_userdata('password');

                redirect('DashBoardController');
              }else{
                $this->session->set_flashdata('error','Invalidate login credentials');
                redirect('AuthController');
              }
             }
           }
            

           public function logout(){
           $this->session->sess_destroy();
           redirect('AuthController');
          }

}
?>