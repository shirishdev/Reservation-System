<?php include('include/header.php');?>
<?php include('include/leftsidebar.php');?>

<div class="content-body">
	<div class="row">
		<div class="container mt-3">
			<div class="col-lg-12">
				<div class="row">
					<div class="col-12">
						 <div class="card-body">
							<div class="form-group col-md-4">
								<label>Date</label>

							<input type="text" class="form-control" name="datepicker" id="Reservationdatepicker" value="<?php  echo date("Y/m/d") ?>">

							</div>

							
							 <div class="col-md-4">
                                        <label>Services</label>
                                       <select class="custom-select custom-select-lg mb-3" id="dateLabel"  name="service_id" >
                                        <option selected>Select the one</option>
                                        <?php foreach($Services as $row) { ?>

                                        <option value="<?php echo $row->service_id; ?>"><?php echo $row->title;?></option>
                                           <?php } ?>
                                        </select>
                                    </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



<?php include('include/footer.php'); ?>

<script>
	$(document).ready(function(){
$('#Reservationdatepicker').datepicker({
     format: "mm/dd/yyyy",
   
     defaultDate:new Date($('#selected_date').val())
     //todayHighlight: true,       
 });



	 $("#Reservationdatepicker").change(function() {
    var formattedDate = new Date($(this).datepicker("getDate"));
    var d = formattedDate.getDate();
    var m =  formattedDate.getMonth();
    m += 1;  // JavaScript months are 0-11
    var y = formattedDate.getFullYear();
    var formattedDate = d + "/" + m + "/" + y;
         
    $('#dateLabel').html(formattedDate);
    getServices();

    $("#datepicker").datepicker("setDate", formattedDate);

  });
});
  

</script>