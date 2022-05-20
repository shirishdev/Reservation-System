<div class="card-body">
	<h5 class="card-title">Max Slot Bookings</h4>
		<div class="basic-form">
			
				<div class="form-group">
					<select class="form-control form-control-lg" id="party_size" name="party_size">
						<?php
						$party_size=!empty($SlotBookings->max_slot_bookings) ? (int)$SlotBookings->max_slot_bookings : 0;
						for($i=1; $i<=$party_size;$i++) { 
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


