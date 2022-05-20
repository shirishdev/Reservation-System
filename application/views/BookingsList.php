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
										<td>Service_title</td>
										<td>Client_details</td> <!-- Name Email Contact -->
										<td>Date Time</td>  <!-- Booking date/Created At -->
										<td>Status</td>  <!-- Confirm Cancel pending Dropdown -->
										<td>Action</td>   <!-- Update Delete -->
									</tr>
								</thead>
								<tbody>
									<tr>
										<?php 
										foreach($BookingData as $row){
											?>
											<td><?php echo $row->title; ?></td>

											<td>
												<p>Name:<?php echo $row->name; ?></p><br>
												<p>Email_id:<?php echo $row->email; ?></p><br>
												<p>Contact_no:<?php echo $row->contact; ?></p><br>
											</td>

											<td>
											<p>Booking Date:<?php echo $row->booking_date; ?></p><br>
											<p>Created At:<?php echo $row->booking_created_at; ?></p><br>
											</td>


											<td>
											 <label class="mr-sm-2">Booking Status</label>
                                                <select class="custom-select mr-sm-2 booking_status" id="booking_status" name="booking_status" data-id="<?php echo $row->booking_id; ?>">
                                                   
                                                    <option value="Confirm">Confirm</option>
                                                    <option value="Pending">Pending</option>
                                                    <option value="Cancel">Cancel</option>
                                                </select>
											</td>

											<td><a href="<?php echo base_url('index.php/BookingsController/UpdateBookingData/updateid?booking_id='.$row->booking_id); ?>" class="btn btn-primary">Update</a>

												
												<a href="<?php echo base_url('index.php/BookingsController/DeleteBookingData/deleteid?booking_id='.$row->booking_id); ?>" class="btn btn-info">Delete</a>
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
</div>

<?php include('include/footer.php'); ?>


<script type="text/javascript">
	$(document).ready(function(){
		$('.booking_status').change(function(){
			booking_id = $(this).data('id');
			status = $(this).val();
		
			$.ajax({
				type:'post',
				url:'<?php echo base_url();?>index.php/BookingsController/UpdatedBookingStatus', 
				data:{"booking_id":booking_id,"status":status},
				success:function(data){
                      if(data == 1){
                      	alert('Status Updated Successfully');
                      	location.reload(true);
                      }
				},
				error:function(error){
                       alert(error);
               		
				}
			});
		});
	});
</script>
