<!DOCTYPE html>
<html lang="en" class="body-full-height">
    <head>        
        <!-- META SECTION -->
       <title>Lan Mailer - Register </title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="<?php echo base_url(); ?>assets/favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="<?php echo base_url(); ?>assets/css/theme-default.css"/>
		
        <link rel="stylesheet" type="text/css" id="theme" href="<?php echo base_url(); ?>assets/css/custom.css"/>
        <!-- EOF CSS INCLUDE -->      
        
        <script src="<?php echo base_url() ?>/assets/js/customjs.js" ></script>
    </head>
    <body>
        <div class="login-container">
        
        <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap" style="margin-top:50px;margin-bottom:100px;color:#fff;">
                
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4 animated fadeInDown">
                            <div class="login-logo" style="margin-bottom:10px;margin-top:30px;text-align:center !important;" ><img src="<?php echo base_url(); ?>assets/img/logo.fw_-1.png" class="" ></div>
                
                            
                             <?php 
                    
                                 $attributes = array('class' => 'form-horizontal' );
                                echo form_open_multipart('register/process', $attributes); 
                     
                             ?>
                                    <h1 class="text-center reg-text">Registration </h1>
                                    
                                    <p class="text-center reg-text" style="color:#000;" >
										 This page will capture registration details to grant users access to the system, Fill in all required field 
									</p>
                                
                                    <?php 
                                        echo validation_errors(); 
                                    ?>
									
									<?php 
									
									
										if(isset($upsuc)){
											
											echo $upsuc ;
											
											
											
										}
									
									
									?>

                                <div class="register-box">                                                                        
                                    
                                    <div class="row">
                                        
                                        <div class="col-md-12">
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Username</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-user"></span></span>
                                                        <input type="text" required="true" class="form-control" name="user_name" />
                                                    </div>                                            
                                                    <span class="help-block">Enter unique and preferred username</span>
                                                </div>
                                            </div>
                                            
											<div class="form-group">
                                                <label class="col-md-3 control-label">First name</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-user"></span></span>
                                                        <input type="text" required="true" class="form-control" name="first_name" />
                                                    </div>                                            
                                                    <span class="help-block">Enter first name</span>
                                                </div>
                                            </div>
											
											
											<div class="form-group">
                                                <label class="col-md-3 control-label">Last name</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-user"></span></span>
                                                        <input type="text" required="true" class="form-control" name="last_name" />
                                                    </div>                                            
                                                    <span class="help-block">Enter Last name</span>
                                                </div>
                                            </div>
											<div class="form-group">
                                                <label class="col-md-3 control-label">Email</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-user"></span></span>
                                                        <input type="email" required="true" class="form-control" name="email" />
                                                    </div>                                            
                                                    <span class="help-block">Enter email address</span>
                                                </div>
                                            </div>
											<div class="form-group">
                                                <label class="col-md-3 control-label">Choose password </label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-user"></span></span>
                                                        <input type="password" required="true" class="form-control" name="pass" />
                                                    </div>                                            
                                                    <span class="help-block">Enter your preffered</span>
                                                </div>
                                            </div>
											<div class="form-group">
                                                <label class="col-md-3 control-label">Re-type password </label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-user"></span></span>
                                                        <input type="password" required="true" class="form-control" name="pass2" />
                                                    </div>                                            
                                                    <span class="help-block">Retype your Password </span>
                                                </div>
                                            </div>
											<div class="form-group">
                                                <label class="col-md-3 control-label">Display Picture</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-image"></span></span>
                                                        <input type="file" required="true" class="form-control" style="padding:0px;" name="userimg" />
                                                    </div>                                            
                                                    <span class="help-block">Select Image</span>
                                                </div>
                                            </div>
											
											
                                           
											
																						
                                                                                      
                                            
                                            
                                        </div>
                                        
										
										 
                                        
                                    </div>
									<hr />
									
										<button class="btn btn-default pull-right">Register</button>
									
									<?php 
                                    
                                        echo form_close();
                                    
                                    ?>



									<a href="<?php echo base_url();  ?>login" class="btn btn-primary color-white" >Login</a>                                   
										  
                               
                                </div>
								
								
                           
                            
                            
                        </div>
                    </div>                    
                    
                </div>
                <!-- END PAGE CONTENT WRAPPER --> 
      </div>

    
    </body>


</html>





