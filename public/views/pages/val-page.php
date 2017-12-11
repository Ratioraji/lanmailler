<!DOCTYPE html>
<html lang="en" class="body-full-height">
    <head>        
        <!-- META SECTION -->
       <title>Paradigm Finance - Login </title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="<?php echo base_url(); ?>assets/favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="<?php echo base_url(); ?>assets/css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->                                    
    </head>
    <body>
        
        <div class="login-container">
        
            <div class="login-box animated fadeInDown">
                <div class="login-logo" style="margin-bottom:30px;margin-top:30px;text-align:center !important;" ><img src="<?php echo base_url(); ?>assets/img/logo.fw_-1.png" class="" ></div>
                
                <?php
                    if(isset($_SESSION['error_Code']) && $_SESSION['error_Code'] == '00LOGIN' )
                    { // temporary error message 
                ?>

                    <p class="alert alert-danger">
                        <span class="fa fa-exclamation"></span> Error : username and password is wrong
                    </p>

                <?php
                    }
                    
                
                 ?>
                
                <div class="login-body">
                    
                    
                    <div class="login-title"><strong>Welcome</strong>, Please login</div>
                    
                    
                    <?php 
                    
                    $attributes = array('class' => 'form-horizontal');
                     echo form_open('admin/process_login', $attributes); 
                     
                     ?>
      
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" class="form-control" required="true" placeholder="Username or Email" name="uemail" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="password" required="true" class="form-control" placeholder="Password" name="passd"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <a href="<?php echo base_url(); ?>admin/forget-password" class="btn btn-link btn-block">Forgot your password?</a>
                        </div>
                        <div class="col-md-6">
                            <button class="btn btn-info btn-block">Log In</button>
                        </div>
                    </div>
                    <?php echo form_close(); 
                    ?>
                    </form>
                </div>
                <div class="login-footer">
                    <div class="pull-left">
                        &copy; 2016 Paradigm Finance
                    </div>
                    <div class="pull-right">
                        <a href="<?php echo base_url(); ?>admin/register">Click here to register</a> 
                    </div>
                </div>
            </div>
            
        </div>
        
    </body>
</html>






