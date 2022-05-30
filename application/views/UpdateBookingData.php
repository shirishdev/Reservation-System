<?php include('include/header.php');?>
<?php include('include/leftsidebar.php');?>
<style type="text/css">
    .slot-selected{
        background-color: green;
        color: #fff;
    }
</style>
<div class="content-body">
	<div class="row">
		<div class="container mt-3">
			<div class="col-lg-12">
				<div class="row">
					<div class="col-12">
						 <div class="card-body">
                            <h4 class="card-title">Update Booking</h4>
                                <div class="basic-form">
<form method="post" action="<?php echo base_url('index.php/BookingsController/UpdateBookingRecords'); ?>" enctype="multipart/form-data" id="UpdateBookingForm">
                                      
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <input type="hidden" class="form-control" name="booking_id" value="<?php echo $BookingData->booking_id; ?>">
                                                <label>Name</label>
                                                <input type="text" class="form-control" placeholder="Enter Name" name="name" value="<?php echo $BookingData->name; ?>">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Email</label>
                                                <input type="email" class="form-control" placeholder="Enter Email" name="email" value="<?php echo $BookingData->email; ?>">
                                            </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Contact</label>
                                            <input type="text" class="form-control" placeholder="Contact No" name="contact" value="<?php echo $BookingData->contact; ?>">
                                        </div>
                                        </div>
                                        <div class="col-lg-6">
                                        <label>Services</label>
                                        <select class="custom-select custom-select-lg mb-3" id="service_list" name="service_id" >
                                        <option selected>Select the one</option>
                                        <?php foreach($Services as $row){ ?>
                                        <option value="<?php echo $row->service_id; ?>" <?php echo ($BookingData->service_id == $row->service_id) ? 'selected' : '' ?>>
                                            <?php echo $row->title;?></option>
                                        <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                       
                                    <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Booking Date</label>

                                                <input type="text" class="form-control" name="booking_date" id="bookingdatepicker" value="<?php echo $BookingData->booking_date; ?>">

                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Status</label>
                                                <input type="text" name="status"  class="form-control" name="booking_status" placeholder="Booking Status" value="<?php echo $BookingData->booking_status ; ?>">
                                            </div>
                                     </div>

                                     <div class="form-row">
                                          <div class="form-group col-md-6 TimeSlots">


                                          </div>
                                          
                                            <input type="hidden" name="start_time" id="start_time" value="<?php echo $BookingData->start_time ; ?>">

                                            <span style="display: none;" id="timeslot-error">Please Select Time Slot</span>
                                          <div id="Party_Size" class="form-group col-md-6">
                                             
                                          </div>
                                      </div>
                                      <div class="form-group">  
                                        <div class="row">
                                          <div class="form-group col-md-4"></div>
                                          <div class="form-group col-md-4"></div>
                                          <div class="form-group col-md-4" id="guest_details">
                                            
                                          </div>
                                          <input type="hidden" name="guest_details[]" value="">
                                        </div>
                                      </div>
                                      </div>
                                </div>
                           
                                        <input type="submit" name="Update" class="btn btn-success">
                                    </form>

                                </div>
                            </div>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<?php include('include/footer.php');?>


<script>
    
     $(document).ready(function(){


        serviceId = $('#service_list').val();

        date = $('#bookingdatepicker').val();
        selectedTime = $('#start_time').val();
        if(serviceId != '' && date !=''){
            $.ajax({
                type:"POST",
                url:"<?php echo base_url(); ?>index.php/BookingsController/getTimeSlots",
                data:{"service_id":serviceId,"date":date,"selectedtime" : selectedTime},
                dataType:"html",
                success:function(response){
                  
                    $('.TimeSlots').html('');
                    $('.TimeSlots').html(response);
                }
            })

        }






   $('#start_time').load(function(){

    //  var time_slots = $(this).data('time');
    //  var serviceId=$('#service_list').val();
    //  date = $('#bookingdatepicker').val();
    // $("#start_time").val(time_slots);


    // var startts = $(this).data('startts');  
    // var timeslotId = "#timeslot"+startts;
    // $( ".time_slots" ).removeClass("selected-slot");
    // $( timeslotId ).addClass("selected-slot");
   
    // $.ajax({
    //     type:"POST",
    //     url:"<?//php echo base_url(); ?>index.php/BookingsController/getMaxSlotsBookings",
    //     data:{"service_id":serviceId,"time_slot":time_slots,"date":date},
    //     dataType:"html",
    //     success:function(response){
          
    //         $('#Party_Size').html('');
    //         $('#Party_Size').html(response);
    //         $('#guest_details').html('');
           
    //     }
    // })


})
})
</script>
