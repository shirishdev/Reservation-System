

<?php include('include/Frontendheader.php'); ?>

<div class="content-body">
	<div class="row">
		<div class="container mt-3">
			<div class="col-lg-12">
				<div class="row">
					<div class="col-12">

					<form method="post" action="<?php echo base_url('index.php/HomepageController/Checkout'); ?>" enctype="multipart/form-data" id="checkoutform">
						<input type="hidden" name="savebooking" value='1'>
                      <h1> Booking Details</h1>
						<table class="table table-bordered" id="">
							<tr>
								<th>Name</th>
								<td><?php echo $_SESSION['bookingform']['name']; ?></td>
							</tr>
							<tr>
								<th>Email</th>
								<td><?php echo $_SESSION['bookingform']['email']; ?></td>
							</tr>
							<tr>
								<th>Phone</th>
								<td><?php echo $_SESSION['bookingform']['contact']; ?></td>
							</tr>
							<tr>
								<th>Date</th>
								<td><?php echo $_SESSION['bookingform']['booking_date']; ?></td>
							</tr>
							<tr>
								<th>Starttime</th>
								<td><?php echo $_SESSION['bookingform']['start_time']; ?></td>
							</tr>
							<tr>
								<th>PartySize</th>
								<td><?php echo $_SESSION['bookingform']['Party_Size']; ?></td> 
							</tr>

							<?php 
								if($_SESSION['bookingform']['Party_Size'] >1){
							?>
							<tr>
								<th>Guest</th>
								<td><?php

								 foreach ($_SESSION['bookingform']['GuestFormDetails'] as $key => $value) {
									echo $value;
								} ?></td> 
							</tr>

							<?php 
								}
							?>
							
						
				</table>
			
		</div>
		<input type="submit" class="btn btn-primary show_btn" id="save_booking" value="Save Booking">
		</form>
		  <!-- <a href="<?php echo base_url('index.php/HomepageController/Checkout');?>"><input type="submit" name="submit" class="btn btn-success"></a> -->
		</div>
	</div>
	</div>
</div>
</div>
