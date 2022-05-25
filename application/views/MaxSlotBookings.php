<div class="card-body">
	<h5 class="card-title">Max Slot Bookings</h4>
		<div class="basic-form">
			<?php 
				$bookedCount = !empty($bookingsCount->totalcount) ? (int)$bookingsCount->totalcount : 0;
				
				$maxResidents = !empty($SlotBookings->max_residents) ? (int)$SlotBookings->max_residents : 0;
				$maxSlotBooking =!empty($SlotBookings->max_slot_bookings) ? (int)$SlotBookings->max_slot_bookings : 0;


				$remaingSpace = $maxResidents - $bookedCount;

				$partySize = $remaingSpace < $maxSlotBooking ? $remaingSpace : $maxSlotBooking;
					  
			?>
				<div class="form-group">
					<select class="form-control form-control-lg" id="party_size" name="party_size">
						<?php
						for($i=1; $i<=$partySize;$i++){ 
							?>
							<option class="Party_Size"><?php echo $i; ?></option>
							<?php
						}
						?>
					</select>	
				</div>
			
		</div>
	</div>
	<script>

		$('#party_size').change(function(){
			var partysize = $(this).val();
            
			if(partysize > 1){
				var field = '';
				field += '<label>Guest Names</label>';
               
				for (var i = 1; i < partysize; i++) {
					field += '<div class="form-group"><input type="text" class="form-control" name="guest_details[]" id="guest_details'+i+'"></div>';
				}
				
  				$("#guest_details").html(field);
			}else{
				$("#guest_details").html("");
			}
		});


	</script>


