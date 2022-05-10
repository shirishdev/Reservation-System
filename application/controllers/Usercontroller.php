<?php 
defined('BASEPATH')OR exit('No direct script access allowed');

class Usercontroller extends CI_Controller {

  	public function __construct(){
	parent::__construct();
        $this->load->helper(array('form','url'));
        $this->load->model('usermodel');
        $this->load->database();
        
	}
   
   public function index() {
     $data['userData']=$this->usermodel->fetch_data();
    $this->load->view('displayUser',$data);
   }


	 public function insert_data() {
      $this->load->view('addUser');
      if ($this->input->post('submit')) {
        // 
        
        
        $data = [
        'name'=>$_POST['name'],
       'email'=>$_POST['email'],
       'phone'=>$_POST['phone'],
       'password'=>$_POST['password'],
       'role'=>$_POST['dropdown']];
       $result= $this->usermodel->insert_user($data);
      
       
      }

    }

  //   public function get_data(){
      
  //       $data['userData']=$this->usermodel->fetch_data();
  //   $this->load->view('displayUser',$data);
  // }
         /*Update Record*/
     public function updatedata() {
      
      $id=$this->input->get('id');
      $data['userData']=$this->usermodel->displayrecords($id);
       $this->load->view('updateRecords',$data);
     
      if ($this->input->post('update')) {
        // var_dump($_POST);

        $name=$this->input->post('name');
        $email=$this->input->post('email');
        $phone=$this->input->post('phone');
        $passsword=$this->input->post('passsword');
        $this->usermodel->updateRecords($name,$email,$phone,$passsword,$id);
       echo "<script>alert('Data updated')</script>";
      }
    }

      /*Delete Record*/
    public function deletedata() {
      $id=$this->input->get('id');
       $data['userData']=$this->usermodel->deleterecords($id);
       if($data==true) {
         echo "<script>alert('Delete Data Successfully')</script>";
       } else{
    echo "<script>alert('Delete Data Unsuccessfully')</script>";
  }

     }

  }
 ?>