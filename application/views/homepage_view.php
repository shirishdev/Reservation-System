<?php include('include/Frontendheader.php'); ?>


        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                       
                        <!-- Card -->
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                   
                                    <div class="col-md-4">
                                        <div class="text-center">
                                            <h5 class="box-title m-t-30">Select a Date</h5>
                                            <p class="text-muted m-b-20 datepicker"></p>
                                            <div>
                                                <div id="datepicker-inline" data-date="setcurrentdate"></div>
                                            </div>
                                        </div>
                                    </div>

                                 
                                     <div class="col-md-8">
                                     	<div class="container mt-3">
						  <div>
						<div class="card-body">  


                         <input type="hidden" name="selected_date" id="selected_date" value="<?php echo $date;?>">                                                 
                        <h2>Selected date:<span style="color:blue" id="dateLabel"><?php echo $date;?></span></h2>
                       
                        <?php 
                        	foreach($serviceList as $service){
                        		
                        ?>

						<div class="container mt-3">
						  <h2><?php echo $service->title; ?></h2>
						  <p>Price <?php echo $service->service_price; ?></p>
						  <p>Duration <?php echo $service->service_length; ?></p>
						  <div>
						   <img src="../assets/uploads/" alt="Card image" style="width:150px;height:150px;" <?php echo $service->service_image; ?>>
						    <div>						    
						      <p class="card-text"><?php echo $service->description; ?></p>
						       	
						      <a href="<?php echo base_url('index.php/HomepageController/DisplayFetchservicedetails/displayid?service_id='.$service->service_id.'&date='.$date); ?>" class="btn btn-primary show_btn">Make and Appointment</a>

						    </div> 
						  </div>
                        </div>

                        <?php 
                        	}  
                        ?>

                       
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        
       

<?php include('include/footer.php'); ?>