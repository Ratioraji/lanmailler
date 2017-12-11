<!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="#" style="font-size:15pt;">Lan Mailer</a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>
                    <li class="xn-profile">
                       
                        <div class="profile">
                            <div class="profile-image">
                                 <img src="<?php echo base_url(); ?>assets/img/logo-1.png" alt="logo" style="max-width:200px;"/>
                             
                            </div>
                          
                        </div>                                                                        
                    </li>
                    
                    <li class="active">
                        <a href="#"><span class="fa fa-users" style="color:#fff;" ></span> <span class="xn-text"> Connected to Network</span></a>                        
                    </li>                    
                    <li >
                     
						<?php
									
							foreach($users as $user)
							{
						?>		
							
							 <a href="#"><span class="fa fa-user" style="color:#fff;" ></span> <span class="xn-text"><?php echo $user->user_name ; ?></span></a>                        
						
								
						<?php		
							}
						
						?>
							
                            
					</li>
                                
                                       
                    
                    
                </ul>
                <!-- END X-NAVIGATION -->
            </div>
            <!-- END PAGE SIDEBAR -->
<!-- PAGE CONTENT -->
            <div class="page-content">
                
                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
                    <!-- END TOGGLE NAVIGATION -->
                    <!-- SEARCH -->
                   
                    <!-- END SEARCH -->
                    <!-- SIGN OUT -->
                    <li class="xn-icon-button pull-right">
                        <a href="<?php echo base_url() ?>log-out" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>                        
                    </li> 
                    <!-- END SIGN OUT -->
                    <!-- MESSAGES -->
                    <li class="xn-icon-button pull-right">
                        <a href="#"><span class="fa fa-comments"></span></a>
                        <div class="informer informer-danger"><?php if(isset($num_inbox)){ echo $num_inbox ;}else { echo 0 ;}?></span></div>
                        <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span class="fa fa-comments"></span> Messages</h3>                                
                                <div class="pull-right">
                                    <span class="label label-danger"><?php if(isset($num_inbox)){ echo $num_inbox ;}else { echo 0 ;}?></span>  new</span>
                                </div>
                            </div>
                            <div class="panel-body list-group list-group-contacts scroll" style="height: 200px;">
								<?php
									
								 if(count($inbox) > 0 )	
								 {
									foreach($inbox as $message)
									{
										
										$mid = $message->message_id;
										$sender = $message->sender_name;
										$subject = $message->subject;
										$body = $message->body ;
										$date_send = $message->date_created ;
										$read_stat = $message->read_Stat ;
										
										if($read_stat === '0')
											
										{
									?>	
										<a href="<?php echo base_url() ?>message-view/<?php echo $mid ?>" class="list-group-item">
											<div class="list-group-status status-online"></div>
											<img src="<?php echo base_url(); ?>upload/user_img/<?php ?>" class="pull-left" alt="<?php echo $sender ;?>"/>
											<span class="contacts-title"><?php echo $sender ;?></span>
											<p><?php echo $subject ;?></p>
										</a>
									
									
								<?php			
											
										}	
										
									}
								 }
								?>
								
								
                               

						   </div>     
                            <div class="panel-footer text-center">
                                <a href="pages-messages.html">Show all messages</a>
                            </div>                            
                        </div>                        
                    </li>
                    <!-- END MESSAGES -->
                    
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                     

                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>                    
                    <li class="active">Dashboard</li>
                </ul>
                <!-- END BREADCRUMB --> 
				
				            <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
                    <!-- START WIDGETS -->                    
                   
                    <div class="row">
                        <div class="col-md-3">
                            
                            <!-- START WIDGET MESSAGES -->
                            <div class="widget widget-default widget-item-icon" onclick="location.href='pages-messages.html';">
                                <div class="widget-item-left">
                                    <span class="fa fa-envelope"></span>
                                </div>                             
                                <div class="widget-data">
                                    <div class="widget-int num-count"><?php if(isset($num_inbox)){ echo $num_inbox ;}else { echo 0 ;}?></div>
                                    <div class="widget-title">New messages</div>
                                    <div class="widget-subtitle"></div>
                                </div>      
                               
                            </div>   
                         </div>         
                            <!-- END WIDGET MESSAGES -->

                        <div class="col-md-3">
                            
                            <!-- START WIDGET MESSAGES -->
                            <div class="widget widget-default widget-item-icon" onclick="location.href='pages-messages.html';">
                                <div class="widget-item-left">
                                    <span class="fa fa-envelope"></span>
                                </div>                             
                                <div class="widget-data">
                                    <div class="widget-int num-count"><?php if(isset($num_inbox_all)){ echo $num_inbox_all ;}else { echo 0 ;}?></div>
                                    <div class="widget-title">All Messages</div>
                                    <div class="widget-subtitle">Recieved</div>
                                </div>      
                               
                            </div>  
                            
                        </div>
                        <div class="col-md-3 ">
                            
                            <!-- START WIDGET REGISTRED -->
                            <div class="widget widget-default widget-item-icon" onclick="location.href='pages-address-book.html';">
                                <div class="widget-item-left">
                                    <span class="fa fa-user"></span>
                                </div>
                                <div class="widget-data">
                                    <div class="widget-int num-count"><?php if(isset($all_users_no)){ echo $all_users_no ;}else { echo 0 ;}?></div>
                                    <div class="widget-title">Registred on Network</div>
                                    <div class="widget-subtitle"></div>
                                </div>
                                                           
                            </div>                            
                            <!-- END WIDGET REGISTRED -->
                            
                        </div>
                        <div class="col-md-3 ">
                            
                            <!-- START WIDGET CLOCK -->
                            <div class="widget widget-info widget-padding-sm">
                                <div class="widget-big-int plugin-clock">00:00</div>                            
                                <div class="widget-subtitle plugin-date">Loading...</div>
                                <div class="widget-controls">                                
                                    <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="left" title="Remove Widget"><span class="fa fa-times"></span></a>
                                </div>                            
                                <div class="widget-buttons widget-c3">
                                    <div class="col">
                                        <a href="#"><span class="fa fa-clock-o"></span></a>
                                    </div>
                                    <div class="col">
                                        <a href="#"><span class="fa fa-bell"></span></a>
                                    </div>
                                    <div class="col">
                                        <a href="#"><span class="fa fa-calendar"></span></a>
                                    </div>
                                </div>                            
                            </div>                        
                            <!-- END WIDGET CLOCK -->
                            
                        </div>
                    </div>
                    <!-- END WIDGETS -->  