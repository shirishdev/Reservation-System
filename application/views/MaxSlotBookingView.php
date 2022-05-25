 <?php include('include/Frontendheader.php'); ?>

 <h5 class="card-title">Select Max Slot</h4>
 	<div class="basic-form">
        <?php 
            $Bookedcount=!empty($bookingCount->totalcount) ? (int)$bookingCount->totalcount : 0;

            $maxResidents=!empty($MaxSlotbooking->max_residents) ? (int)$MaxSlotbooking->max_residents : 0;

            $maxSlotBooking=!empty($MaxSlotbooking->max_slot_bookings) ? (int)$MaxSlotbooking->max_slot_bookings : 0;


            $RemainingSpace = $maxResidents -  $Bookedcount;
            $party_size = $RemainingSpace < $maxSlotBooking ? $RemainingSpace : $maxSlotBooking;
        ?>
         
 		<div class="form-group">
             <select class="form-control form-control-lg" id="Party_Size" name="Party_Size">
                 <?php

                 for($i=1; $i<=$party_size;$i++) { 
                    
                     ?>
                     <option class="Party_Size"><?php echo $i; ?></option>
                     <?php
                 }
                 ?>
             </select>
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
