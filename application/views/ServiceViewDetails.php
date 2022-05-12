<?php include('include/Frontendheader.php'); ?>




<div class="row">
		<div class="container mt-3">
			<div class="col-lg-12">
				<div class="row">
					<div class="col-12">
						 <div class="card" >
						 <div class="card-body">
                     <div class="basic-form">
                     	
                        <h2>Selected Services</h2>
                                                                 
                                   <div class="row">
									  <div class="col-sm">Service Detail
									  <p><?php echo $ServiceData->title; ?></p>
						              <p>Price <?php echo $ServiceData->service_price; ?></p>
						              <img class="card-img-top" src="<?php echo base_url('/assets/images/imgs/1.jpg')?>" alt="Card image" style="width:50%">
						              <p class="card-text">Description : <?php echo $ServiceData->description; ?></p>
									</div>

									<?php 
									$day = strtolower(date('l', strtotime($date)));

									$startTimeKey =  $day."_start_time";
									$endTimeKey = $day."_end_time";

									// var_dump($startTimeKey);
									// var_dump($endTimeKey);

									$startTime = $ServiceData->$startTimeKey;
									$endTime = $ServiceData->$endTimeKey;

									// var_dump($startTime);
									// var_dump($endTime);


									?>
                              
									  <div class="col-sm">Time Slot
									  <table class="table" border="0" cellpadding="0" cellspacing="0" width="100%" id="TimeSlotView">
									  	  <thead>
									  	    </thead>
														  <tbody>
														  		<?php for ($i=$startTime; $i <= $endTime; $i++) {
									  	  										  	  	 ?>
														    <tr>
														      <td>
                                                   <a href=""><?php echo $i->monday_start_time; ?>9.00</a>
														      </td>
														      <td>
														      	<a href="" >9.30</a></td>
														      <td>
														      	<a href="" >10.00</a>
														      </td>
														      <td>
														      	<a href="" >10.30</a>
														      </td>
														      <td>
														      	<a href="" >11.00</a>
														      </td>
														    </tr>

														     <?php } ?>
														    <tr>
														      
														      <td>
														      	<a href="" >11.30</a>
														      </td>
														      <td>
														      	<a href="" >12.00</a>
														      </td>
														      <td>
														      	<a href="" >12.30</a>
														      </td>
														       <td>
														       	<a href="" >1.00</a>
														       </td>
														        <td>
														        <a href="" >1.30</a>	
														        </td>
														    </tr>
														    <tr>
														     
														      <td>
														      	<a href="" >2.00</a>
														      </td>
														      <td>
														      	<a href="" >2.30</a>
														      </td>
														      <td>
														      	<a href="" >3.00</a>
														      </td>
														      <td>
														      	<a href="" >3.30</a>
														      </td>
														      <td>
														      	<a href="" >4.00</a>
														      </td>
														    </tr>
														     <tr>
														      <td>
														      	<a href="" >4.30</a>
														      </td>
														      <td>
														      	<a href="" >5.00</a>
														      </td>
														      <td>
														      	<a href="" >5.30</a>
														      </td>
														      
														    </tr>

														
														  </tbody>
														</table>
												 </div>
												 
									  		</div>
									  </div>
								  </div>
								</div>
								</div>
								<!-- <a href="" class="btn btn-primary show_btn">Book Slot</a> -->
								
							</div>
						</div>
					</div>
			</div>
		</div>
	</div>
	</div>
