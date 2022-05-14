 <?php include('include/Frontendheader.php'); ?>

 <div class="row">
 	<div class="container mt-3">
 		<div class="col-lg-12">
 			<div class="row">
 				<div class="col-12">

 					<div class="card-body">
 						<div class="basic-form">
 							<div class="row">

 							</div> 

 							<div class="card-body">
 								<h5 class="card-title">Select Max Slot</h4>
 									<div class="basic-form">
 										<form>
 											<div class="form-group">
 												<select class="form-control form-control-lg" id="Party_Size">
 													<?php
 													$party_size=!empty($MaxSlotbooking->max_slot_bookings) ? (int)$MaxSlotbooking->max_slot_bookings : 0;
 													for($i=1; $i<=$party_size;$i++) { 
 														?>
 														<option class="Party_Size"><?php echo $i; ?></option>
 														<?php
 													}
 													?>
 												</select>
 											</div>
 										</form>
 									</div>
 								</div>

 							</div>
 						</div>

 					</div>
 				</div>
 			</div>
 		</div>


 		<script>

 			$('#Party_Size').change(function() {			
  				//alert( 'hiii');
  				var partysize =  $(this).val(); 

  				if (partysize > 1) {
  					var field = '';

  					field += '<label>Guest Name</label>';

  					for (var i = 1;i < partysize; i++) {
  						field += '<div class="form-group"><input type="text" class="form-control" name="GuestFormDetails[]" id="GuestFormDetails'+1+'"></div>';
  					}
  					$("#GuestFormDetails").html(field);
  				} else {
  					$("#GuestFormDetails").html("");
  				}

  			});

  		</script>

