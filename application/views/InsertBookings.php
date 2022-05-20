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
                            <h4 class="card-title">Add Bookings</h4>
                                <div class="basic-form">
<form method="post" action="<?php echo base_url('index.php/BookingsController/AddBookings'); ?>" enctype="multipart/form-data" id="createadminbooking">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Name</label>
                                                <input type="text" class="form-control" placeholder="Enter Name" name="name">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Email</label>
                                                <input type="email" class="form-control" placeholder="Enter Email" name="email">
                                            </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Contact</label>
                                            <input type="text" class="form-control" placeholder="Contact No" name="contact">
                                        </div>
                                        </div>
                                        <div class="col-lg-6">
                                        <label>Services</label>
                                        <select class="custom-select custom-select-lg mb-3" id="service_list" name="service_id" >
                                        <option selected>Select the one</option>
                                        <?php foreach($Services as $row){ ?>
                                        <option value="<?php echo $row->service_id; ?>"><?php echo $row->title;?></option>
                                        <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                       
                                    <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Booking Date</label>

                                                <input type="text" class="form-control" name="booking_date" id="bookingdatepicker">

                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Status</label>
                                                <input type="text" name="status"  class="form-control" name="booking_status" placeholder="Booking Status" value="Pending">
                                            </div>
                                     </div>

                                     <div class="form-row">
                                          <div class="form-group col-md-6 TimeSlots">


                                          </div>
                                          
                                            <input type="hidden" name="start_time" id="start_time" value="">

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
                                        <input type="submit" name="submit" class="btn btn-success">
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
