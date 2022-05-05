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

                                     <form method="post" action="<?php echo base_url('index.php/ServiceController/UpdateServiceData'); ?>">
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
                                       <div class="row">
                                           <div class="col-lg-10">
                                               <table class="table table-striped table-bordered">
                                                   <thead>
                                                       <tr>
                                                           <th></th>
                                                           <th>Start time</th>
                                                           <th>End time</th>
                                                           <th>Lunch Start</th>
                                                           <th>Lunch End</th>
                                                           <th>Dont Allow Reservations</th>
                                                       </tr>
                                                   </thead>
                                                   <tbody>
                                                        <tr>
                                                            <td>Monday</td>
                            <td><input type="time" name="monday_start_time" id="monday_start_time" style="display:none;"></td>

                            <td><input type="time" name="monday_end_time" id="monday_end_time" style="display:none;"></td>

                <td><input type="time" name="monday_lunch_start_time" id="monday_lunch_start_time" style="display:none;"></td>

                <td><input type="time" name="monday_lunch_end_time" id="monday_lunch_end_time" style="display:none;"></td>

                <td><input type="checkbox" name="dayoff_checkbox" class="dayoff_checkbox" data-day="monday" id="checkbox" checked></td>
                                                       
                                                        </tr>   
                                                        <tr>
                                                            <td>Tuesday</td>
                 <td><input type="time" name="tuesday_start_time" id="tuesday_start_time" style="display:none;"></td>

                 <td><input type="time" name="tuesday_end_time" id="tuesday_end_time" style="display:none;"></td>

                <td><input type="time" name="tuesday_lunch_start_time" id="tuesday_lunch_start_time" style="display:none;"></td>

                <td><input type="time" name="tuesday_lunch_end_time" id="tuesday_lunch_end_time" style="display:none;"></td>

                <td><input type="checkbox" name="dayoff_checkbox" class="dayoff_checkbox" data-day="tuesday" id="checkbox" checked></td>                                    
                                                        </tr>
                                                        <tr>
                                                            <td>Wednesday</td>
                <td><input type="time" name="wednesday_start_time" id="wednesday_start_time" style="display:none;"></td>

                <td><input type="time" name="wednesday_end_time" id="wednesday_end_time" style="display:none;"></td>

                <td><input type="time" name="wednesday_lunch_start_time" id="wednesday_lunch_start_time" style="display:none;"></td>

                <td><input type="time" name="wednesday_lunch_end_time" id="wednesday_lunch_end_time" style="display:none;"></td>
                
                <td><input type="checkbox" name="dayoff_checkbox" class="dayoff_checkbox" data-day="wednesday" id="checkbox" checked></td>                                            
                                                        </tr>
                                                        <tr>
                                                            <td>Thursday</td>
                <td><input type="time" name="thursday_start_time" id="thursday_start_time" style="display:none;"></td>

                <td><input type="time" name="thursday_end_time" id="thursday_end_time" style="display:none;"></td>

            <td><input type="time" name="thursday_lunch_start_time" id="thursday_lunch_start_time" style="display:none;"></td>

                <td><input type="time" name="thursday_lunch_end_time" id="thursday_lunch_end_time" style="display:none;"></td>
                
                <td><input type="checkbox" name="dayoff_checkbox" class="dayoff_checkbox" data-day="thursday" id="checkbox" checked></td>  
                                                        </tr>
                                                        <tr>
                                                            <td>Friday</td>
                <td><input type="time" name="friday_start_time" id="friday_start_time" style="display:none;"></td>

                <td><input type="time" name="friday_end_time" id="friday_end_time" style="display:none;"></td>

            <td><input type="time" name="friday_lunch_start_time" id="friday_lunch_start_time" style="display:none;"></td>

                <td><input type="time" name="friday_lunch_end_time" id="friday_lunch_end_time" style="display:none;"></td>
                
                <td><input type="checkbox" name="dayoff_checkbox" class="dayoff_checkbox" data-day="friday" id="checkbox" checked></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Saturday</td>

                <td><input type="time" name="saturday_start_time" id="saturday_start_time" style="display:none;"></td>

                <td><input type="time" name="saturday_end_time" id="saturday_end_time" style="display:none;"></td>

            <td><input type="time" name="saturday_lunch_start_time" id="saturday_lunch_start_time" style="display:none;"></td>

                <td><input type="time" name="saturday_lunch_end_time" id="saturday_lunch_end_time" style="display:none;"></td>
                
                <td><input type="checkbox" name="dayoff_checkbox" class="dayoff_checkbox" data-day="saturday" id="checkbox" checked></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Sunday</td>
                <td><input type="time" name="sunday_start_time" id="sunday_start_time" style="display:none;"></td>

                <td><input type="time" name="sunday_end_time" id="sunday_end_time" style="display:none;"></td>

            <td><input type="time" name="sunday_lunch_start_time" id="sunday_lunch_start_time" style="display:none;"></td>

                <td><input type="time" name="sunday_lunch_end_time" id="sunday_lunch_end_time" style="display:none;"></td>
                
                <td><input type="checkbox" name="dayoff_checkbox" class="dayoff_checkbox" data-day="sunday" id="checkbox" checked></td>
                                                        </tr>   
                                                    </tbody>
                                               </table>
                                           </div>
                                       </div>
                                       <div class="form-row">
                                            <div class="form-group col-md-3">
                                                <label>Service Lenght(In minutes)</label>
                                                <input type="number" class="form-control" name="service_length" min="1" max="30" placeholder="Enter Service lenght in minutes">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>Max Residents</label>
                                                <input type="number" name="max_residents"  class="form-control" name="max_residents" min="1" max="10" placeholder="Enter Max Residents">
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label>Max Slot Bookings</label>
                                                <input type="number" class="form-control" placeholder="Slot Bookings" name="max_slot_bookings" min="1" max="10" placeholder="Max slot bookings">
                                            </div>
                                        </div>
                                        <div class="row"> 
                                        <div class="form-group col-md-6">
                                            <label>Select Image</label>
                                            <input type="image" name="service_image">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Service Price</label>
                                            <input type="text" name="service_price">
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
