<?php include('include/header.php');
 include('include/leftsidebar.php');
?>
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
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-validation">
                                    <form class="form-valide" action="<?php echo base_url('index.php/Usercontroller/insert_data'); ?>" method="post">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="name"> Name <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter a username..">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="email">Email <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                          <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email..">
                                            </div>
                                        </div>
                                         <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="phone">Phone (US) <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                      	<input type="text" class="form-control" id="phone" name="phone" placeholder="212-999-0000">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="password">Password <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                               <input type="password" class="form-control" id="password" name="password" placeholder="Choose a safe one..">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="role">role <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                           <input type="text" class="form-control" id="role" name="role" value="user">
                                            </div>
                                        </div>
                                         
                                        <!-- <div class="dropdown">
  														<button class="btn btn-secondary dropdown-toggle"  type="button" id="role" data-toggle="dropdown" 
  														name="role">Role
  														</button>
													<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
														    <a class="dropdown-item" href="#">User</a>
														    <a class="dropdown-item" href="#">Admin</a>
														  </div>
														</div> -->							
														                                                                                                     
                                       <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                            	<input type="submit" name="submit" class="btn btn-success">
                                                
                                            </div>
                                        </div>
                                    </form>
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
        

<?php include('include/footer.php');
?>