<?php include('header.php'); ?>

<div class="container" style="margin-top:20px;">
    <h1>Admin Form</h1>
  <?php echo form_open('admin/login'); ?>
  
  <div class="row">
    <div class="col-lg-6">
  <div class="mb-3">
    <label class="form-label">Username:</label>
    <?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Username','name'=>'username','value'=>set_value('username')]); ?>
  </div>
  </div>
  <div class="col-lg-6" style="margin-top:40px";>
    <?php echo form_error('uname'); ?>
  </div>
  </div>

  <div class="row">
    <div class="col-lg-6">
  <div class="mb-3">
    <label class="form-label">Password</label>
    <?php echo form_password(['class'=>'form-control','placeholder'=>'Enter Password','type'=>'password','name'=>'password','value'=>set_value('password')]); ?>
  </div>
</div>
<div class="col-lg-6" style="margin-top:40px";>
   <?php echo form_error('pass'); ?>
</div>
</div>

  <div class="mb-3 form-check">
    <?php echo form_submit(['type'=>'submit','class'=>'btn btn-primary','value'=>'Submit']); ?>
     <?php echo form_reset(['type'=>'reset','class'=>'btn btn-secondary','value'=>'Reset']); ?>
 </div>

</div>


<?php include('footer.php'); ?>



<?php

class loginmodel extends CI_MODEL
{
  public function isvalidate($username,$password){

    $q=$this->db->where(['username'=>$username,'password'=>$password]);
    $query=$this->db->get('users');
             echo $query->num_rows();
    if ($query->num_rows()) {

      return True;
    }else{
      return False;
    }

  }

}

?>