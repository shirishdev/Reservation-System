<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class usermodel extends CI_MODEL{
    
    
    function insert_data ($name,$email,$phone,$password,$role){
       $query="insert into users_table values('','$name','$email','$phone','$password','$role')";
       return $this->db->query($query);
    }

    function insert_user($data){   
        $this->db->insert('users_table',$data);
    }
}

    
?>
