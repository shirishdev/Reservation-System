<?php include('include/header.php');?>
<?php include('include/leftsidebar.php');?>

<div class="content-body">
	<div class="row">
		<div class="container mt-3">
			<div class="col-lg-12">
				<div class="row">
					<div class="col-12">
						 <div class="card-body">
                                <h4 class="card-title">Add Service</h4>
                                <div class="basic-form">

                                     <form method="post" action="<?php echo base_url('index.php/ServiceController/Addservice'); ?>">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Title</label>
                                                <input type="text" class="form-control" placeholder="Service Title" name="title">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Description</label>
                                                <input type="text" class="form-control" placeholder="Service Description" name="description">
                                            </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Start Date</label>
                                            <input type="date" class="form-control" placeholder="Service Start Date" name="start_date">
                                        </div>
                                        </div>
                                        <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>End Date</label>
                                            <input type="date" class="form-control" placeholder="Service End Date" name="end_date">
                                        </div>
                                        </div>
                                       </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Service Lenght</label>
                                                <input type="text" class="form-control" name="service_length" placeholder="service length in minutes">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>Max Residents</label>
                                                <input type="text" name="max_residents" placeholder="Max Residents" class="form-control" name="max_residents">
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label>Max Slot Bookings</label>
                                                <input type="text" class="form-control" placeholder="Slot Bookings" name="max_slot_bookings">
                                            </div>
                                        </div>
                                       <!--  <button type="submit" name="submit" class="btn btn-dark">Save Service</button> -->
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
