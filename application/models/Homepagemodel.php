<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Homepagemodel extends CI_MODEL{
	public function displayservicerecords($date) {
		$this->db->select('*');
	    $this->db->from('services');
	    $this->db->where(' start_date <=',date('Y-m-d',strtotime($date)));
	    $this->db->where('end_date >=', date('Y-m-d',strtotime($date)));
	    $query=$this->db->get();
	    return $query->result();	
	}

public function DisplayFetchservicedetails($service_id) {
              $query=$this->db->query("select * from services where service_id='".$service_id."'");
              return $query->row();

          }
      }

