<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class usermodel extends CI_MODEL{
    
    
    function insert_data ($name,$email,$phone,$password,$role){
       $query="insert into users_table values('','$name','$email','$phone','$password','$dropdown')";
       return $this->db->query($query);
    }

    function insert_user($data){   
        $this->db->insert('users_table',$data);
    }

    function fetch_data(){
        $query=$this->db->get('users_table');
        return $query->result();
     }

     function displayrecords($id) {

        $query=$this->db->query("select * from users_table where id='".$id."'");
        return $query->row();
     }

     /* Update */

     function updateRecords($name,$email,$phone,$password,$id)
     {
       $query=$this->db->query("update users_table SET name='$name',email='$email',phone='$phone',password='$password' where id='$id'");

     }

     function deleterecords($id) {
        $this->db->where("id",$id);
        $this->db->delete("users_table");
        return true;
     }
}

    
?>
