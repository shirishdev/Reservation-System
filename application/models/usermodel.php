<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class usermodel extends CI_MODEL{
    
    
    function insert_data ($name,$email,$phone,$password,$role){
       $query="insert into users values('','$name','$email','$phone','$password','$dropdown')";
       return $this->db->query($query);
    }

    function insert_user($data){   
        $this->db->insert('users',$data);
    }

    function fetch_data(){
        $query=$this->db->get('users');
        return $query->result();
     }

     function displayrecords($id) {

        $query=$this->db->query("select * from users where id='".$id."'");
        return $query->row();
     }

     /* Update */

     function updateRecords($name,$email,$phone,$password,$id)
     {
       $query=$this->db->query("update users SET name='$name',email='$email',phone='$phone',password='$password' where id='$id'");

     }

     function deleterecords($id) {
        $this->db->where("id",$id);
        $this->db->delete("users");
        return true;
     }

    
}

    
?>
