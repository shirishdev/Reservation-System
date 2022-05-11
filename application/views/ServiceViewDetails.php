<?php include('include/Frontendheader.php'); ?>




<div class="row">
		<div class="container mt-3">
			<div class="col-lg-12">
				<div class="row">
					<div class="col-12">
						 <div class="card-body">
                     <div class="basic-form">
                     	<?php
                                    foreach($ServiceData as $service)
                                     { 
                                     ?> 
                                     <h2>Selected Services</h2>
                                     <div class="row">
                                     	
                                     </div>                              
                                   <div class="row">
									  <div class="col-sm">Service Detail
									  <p><?php echo $service->title; ?></p>
						              <p>Price <?php echo $service->service_price; ?></p>
						              <img class="card-img-top" src="../assets/images/imgs/1.jpg" alt="Card image" style="width:50%">
						              <p class="card-text">Description : <?php echo $service->description; ?></p>
									</div>
									  <div class="col-sm">Time
									  <table class="table" border="0" cellpadding="0" cellspacing="0" width="100%">
														  <thead>
														
														  </thead>
														  <tbody>
														    <tr>
														      <td>
                                                              <a href="">9.00</a>
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
								<a href="" class="btn btn-primary show_btn">Book Slot</a>
								 <?php 
                        	} ?>

							</div>
						</div>
					</div>
			</div>
		</div>
	</div>
	</div>
