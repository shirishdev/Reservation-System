<div class="card-body">
	<h5 class="card-title">Max Slot Bookings</h4>
	<div class="basic-form">
		<form>
			<div class="form-group">
				<select class="form-control form-control-lg" id="guest_details">
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
		</form>
	</div>
</div>
<script>
	 $('#guest_details').change(function(){
        $.ajax({
        	type="POST",
        	url:"<?php echo base_url(); ?>index.php/BookingsController/getGuestFields",
        	dataType:"html",
        	success:function(response){
        		console.log(response);
        		$('#GetGuestDetails').html('');
        		$('#GetGuestDetails').html(response);
        	}
        })
     })

</script>


       