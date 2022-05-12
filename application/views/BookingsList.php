<?php include('include/header.php');?>
<?php include('include/leftsidebar.php');?>

 <div class="content-body">
 	<div class="row">
	       <div class="container mt-3">
	       	    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-12">
                           <a href="<?php echo base_url('index.php/BookingsController/AddBookings');?>" class="btn btn-primary mt-3 mb-3">Add Booking</a>
                              <div class="card">
                                    <table class="table table-bordered table-striped" id="service_list">
			                                 <thead>
				                                 <tr>
					                                 <th>Booking_id</th>
					                                 <th>Name</th>
					                                 <th>Email</th>
					                                 <th>Contact</th>
					                                 <th>Service</th>
					                                 <th>Booking Date</th>
					                                 <th>Status</th>
					                                 
				                                 </tr>
			                                 </thead>
	                                        <tbody>
	                                          
                                            </tbody>
                                      </table>
                                 </div>
                             </div>
                        </div>
                    </div>
               </div>
          </div>
      </div>

<?php include('include/footer.php'); ?>
