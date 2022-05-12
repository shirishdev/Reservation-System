<?php include('include/header.php');?>
<?php include('include/leftsidebar.php');?>

<div class="content-body">
	<div class="row">
		<div class="container mt-3">
			<div class="col-lg-12">
				<div class="row">
					<div class="col-12">
						 <div class="card-body">
                            <h4 class="card-title">Add Bookings</h4>
                                <div class="basic-form">
<form method="post" action="<?php echo base_url('index.php/ServiceController/Addservice'); ?>" enctype="multipart/form-data">
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
                             <select class="form-select" aria-label="Default select example" id="service_list">
                              <option selected>Select Services</option>
                              <?php
                              foreach($Services as $row){
                              ?>
                          <option value="<?php echo $row->service_id; ?>"><?php echo $row->title; ?></option>
                              <?php
                              }
                              ?>
                            </select>
                                        
                                        </div>
                                     </div>
                                       
                                        <div class="form-row">
                                            <div class="form-group col-md-3">
                                                <label>Booking Date</label>
                                                <input type="text" class="form-control" name="booking_date" id="bookingdatepicker">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>Status</label>
                                                <input type="text" name="status"  class="form-control" name="status" placeholder="Booking Status">
                                            </div>
                                       
                                            <div id="TimeSlots">
                                               
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
