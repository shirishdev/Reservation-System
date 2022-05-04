
<?php include('include/header.php');
 include('include/leftsidebar.php');
?>
<div class="content-body">

<div class="row">
	<div class="container mt-3">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-12">
                         <button class='btn btn-primary mt-3 mb-3'><a href='' class='text-light'>Insert User</a></button>
                                <div class="card">
<table class="table table-bordered" id="user_list">
            		<thead>
            			<tr>
            				<th>User id</th>
            				<th>Name</th>
            				<th>Email</th>
            				<th>Phone</th>
            				<th>Password</th>
            				<th>Role</th>
            				<th>Operations</th>
                       </tr>
            		</thead>
            		<tbody>
            			<?php  
            			foreach ($userData as $row) { 
            			?>          			
            			<tr>
				     <td><?php echo $row->id; ?></td>
				     <td><?php echo$row->name; ?> </td>
				     <td><?php echo$row->email; ?></td>
				      <td><?php echo$row->phone; ?></td>
				       <td><?php echo$row->password; ?></td>
				     <td><?php echo$row->role; ?></td>
                     
                        <td>
                                     <button class='btn btn-primary'><a href='<?php echo base_url('index.php/Usercontroller/updatedata?id='.$row->id); ?>' class='text-light'>Update</a></button>
                                      </td>
                                      <td>
                                       <button class='btn btn-danger'><a href='' class='text-light'>Delete</a></button>
                                      </td>
                                  </tr>
            			 
            			 <?php
            			}
            			 ?>

            		</tbody>
            	</table>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<?php include('include/footer.php'); ?>