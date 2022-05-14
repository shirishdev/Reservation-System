
<?php include('include/Frontendheader.php'); ?>




<div class="row">
	<div class="container mt-3">
		<div class="col-lg-12">
			<div class="row">
				<div class="col-12">
					<div class="card" >
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

									

									<div class="col-sm">Time Slot
										<table class="ble" border="0" cellpadding="0" cellspacing="0" width="100%" id="TimeSlotView">

											<tbody>

												<?php 
												$timeSlotsArr = array_chunk($timeslot, 5);

												foreach($timeSlotsArr as $timeArr){
													?>
													<tr>
														<?php
														foreach($timeArr as $value){
															?>

															<td>
																<a href="#" class="timeslots" data-time="<?php echo $value['time'];?>" id="time"> <?php echo $value['time'];?></a>

															</td>
															<?php 
														}
														?>
													</tr>
													<?php
												}
												?>
											</tbody>
										</table>
									</div>                      

								</div>

								<div class="col-sm-6" id="PartySize">
								</div>
								<div class="form-group">
									<div class="row">
										<div class="form-group col-md"></div>
										<div class="form-group col-md"></div>
										<div class="form-group col-md" id="GuestFormDetails"></div>
									</div>
								</div>
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
        
        var timeslots = $(this).data('time');
        //alert(timeslots)
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
			}
		})

	})
		})


</script>
