<?php include('include/header.php');?>
<?php include('include/leftsidebar.php');?>

 <div class="content-body">
 	<div class="row">
	       <div class="container mt-3">
	       	    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-12">
                           <a href="<?php echo base_url('index.php/ServiceController/Addservice');?>" class="btn btn-primary mt-3 mb-3">Insert Service</a>
                                <div class="card">
                                    
                                    <table class="table table-bordered table-striped" id="service_list">
			                                 <thead>
				                                 <tr>
					                                 <th>Service_id</th>
					                                 <th>Title</th>
					                                 <th>Description</th>
					                                 <th>Start Date</th>
					                                 <th>End Date</th>
					                                 <th>Service Lenghts</th>
					                                 <th>Max Residents</th>
					                                 <th>Max Slot bookings</th>
					                                 <th>Actions</th>
				                                 </tr>
			                                 </thead>
	                                          <tbody>
	                                          	<?php
		                                         foreach($ServiceData as $row) { 
            			                          ?>          			
            			                          <tr>
            			                           <td><?php echo $row->service_id; ?></td>
				                                   <td><?php echo $row->title; ?></td>
				                                   <td><?php echo $row->description; ?> </td>
				                                   <td><?php echo $row->start_date; ?></td>
				                                   <td><?php echo $row->end_date; ?></td>
				                                   <td><?php echo $row->service_length; ?></td>
				                                   <td><?php echo $row->max_residents; ?></td>
				                                   <td><?php echo $row->max_slot_bookings; ?></td>
				                                   <td><a href="<?php echo base_url('index.php/ServiceController/UpdateService/updateid?id='.$row->service_id); ?>" class="btn btn-primary">Update</a>
				                                       <a href="" class=" btn btn-info">Delete</a></td>
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

<?php include('include/footer.php');?>
