
<?php include('include/Frontendheader.php'); ?>

<style>
	th, td {
		border: 1px solid;
		padding: 5px;
		cursor: pointer;
	}
	.selected-slot {
		background-color:  green;
		color: #fff;
	}
</style>
<div class="row">
	<div class="container mt-3">
		<div class="col-lg-12">
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-body">
							<div class="basic-form">
			<h2>Selected Services</h2>
			<div class="row">
			<div class="col-sm-6">Service Detail
				<p><?php echo $ServiceData->title; ?></p>
					<p>Price <?php echo $ServiceData->service_price; ?></p>
						<img class="card-img-top" src="<?php echo base_url('/assets/images/imgs/1.jpg')?>" alt="Card image" style="width:50%">
										<p class="card-text">Description : <?php echo $ServiceData->description; ?></p>
									</div>

									
									<div class="col-sm-6">

										<form method="post" action="<?php echo base_url('index.php/HomepageController/Checkout'); ?>" enctype="multipart/form-data" id="CreateUserBooking">

										<input type="hidden" name="service_id" id="service_id" value="<?php echo $_GET['service_id']?>">
										<?php 
											$date =  !empty($_GET['date']) ? date('Y-m-d',strtotime($_GET['date'])) : '';
										?>
										<input type="hidden" name="booking_date" id="booking_date" value="<?php echo $date ?>">
										<input type="hidden" name="start_time" id="start_time" value="">
											Time Slot

											<table  id="TimeSlotView">

												<tbody>

													<?php 
													$timeSlotsArr = array_chunk($timeslot, 5);

													foreach($timeSlotsArr as $timeArr){
														?>
														<tr>
															<?php
															foreach($timeArr as $value){
																?>
                                 
									<td class="timeslots" data-time="<?php echo $value['time'];?>" data-startts="<?php echo strtotime($value['time']);?>" id="time<?php echo strtotime($value['time']);?>">
										<?php echo $value['time'];?></td>
												<?php 
													}
												?>
											</tr>
											<?php
											}
											?>
												</tbody>
											</table>
											<span style="display: none;" id="timeslot-error">please select time slot</span>
											<div class="col-sm" id="PartySize" name="Party_Size">  
											</div>


											<div class="form-row">
												<div class="form-group col-sm">
													<label>Name</label>
													<input type="text" class="form-control" placeholder="Enter Name" name="name" value="">
												</div>
												<div class="form-group col-sm">
													<label>Email</label>
													<input type="email" class="form-control" placeholder="Enter Email" name="email" value="">
												</div>
											</div>
											<div class="row">
												<div class="col-sm">
													<div class="form-group">
														<label>Contact</label>
														<input type="text" class="form-control" placeholder="Contact No" name="contact" value="">
													</div>
												</div>
											</div>


											<div class="row">
												<div class="col-sm">
													<div class="form-group col-md"></div>
													<div class="form-group col-md"></div>
												<div class="form-group col-md" id="GuestFormDetails" name="GuestForm">

												</div>
													<!-- <input type="hidden" name="GuestForm[]" value=""> -->
												</div>
											</div>


										</div>
									</div>

									<input type="submit" class="btn btn-primary show_btn" id="Next" value="Next">
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>								
		</div>
	</div>
</div>



<?php include('include/footer.php'); ?>

<!-- //on click function for time slot -->


<script type="text/javascript"> 
	$(document).ready(function() {
		$(".timeslots").click(function() {


			var startts = $(this).data('startts');
			var timeslotsid = "#time"+startts;
			$(".timeslots").removeClass("selected-slot");
			$(timeslotsid).addClass("selected-slot");

			var timeslots = $(this).data('time');
         // alert(timeslots);
         $("#start_time").val(timeslots);

         serviceId=$('#service_list').val();
         startts = $(this).data('startts');

         $.ajax({
         	type: "POST", 
         	url:"<?php echo base_url(); ?>index.php/HomepageController/PartySizeslot",
         	data: { "service_id":serviceId},
         	dataType: "html",
         	success: function(response) {


         		$('#PartySize').html('');
         		$('#PartySize').html(response);
         		$('#GuestFormDetails').html('');
         	}

         })

     })	
	})

	$("#CreateUserBooking").validate({

		rules: {

			name: "required",
			email:"required",
			contact:"required",
			GuestForm:"required",
		},

		messages: {
			name: "Please enter name",
			email:"Please enter the email",
			contact:"Please enter Contact No",
			GuestForm:"Please enter name",


		},
		submitHandler: function(form) {
			var starttime = $("#start_time").val();
			//alert(starttime);
			$("#timeslot-error").hide();

			if(starttime == '') {
				$("timeslot-error").show();
				return false;
			}


			form.submit();
		}
	})
</script>

</script>
