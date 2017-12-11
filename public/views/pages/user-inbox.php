                  
                    
                    <div class="row">
                        <div class="col-md-12">
                            
                            <!-- START CONTENT FRAME -->
                <div class="content-frame">                                    
                    <!-- START CONTENT FRAME TOP -->
                    <div class="content-frame-top">                        
                        <div class="page-title">                    
                            <h2><span class="fa fa-inbox"></span> Inbox <small>(<?php if(isset($num_inbox)){ echo $num_inbox ;}else { echo 0 ;}?>  unread)</small></h2>
                        </div>                                                                                
                        
                        <div class="pull-right">                            
                            <button class="btn btn-default content-frame-left-toggle"><span class="fa fa-bars"></span></button>
                        </div>                        
                    </div>
                    <!-- END CONTENT FRAME TOP -->
                    
                    <!-- START CONTENT FRAME LEFT -->
                    <div class="content-frame-left">
                        <div class="block">
                            <a href="<?php echo base_url(); ?>message-compose" class="btn btn-default btn-block btn-lg"><span class="fa fa-edit"></span> COMPOSE</a>
                        </div>
                        <div class="block">
                            <div class="list-group border-bottom">
                                <a href="<?php echo base_url() ?>message-inbox/" class="list-group-item active"><span class="fa fa-inbox"></span> Inbox <span class="badge badge-success"><?php if(isset($num_inbox)){ echo $num_inbox ;}else { echo 0 ;}?></span></a>
                                <a href="<?php echo base_url() ?>message-stared" class="list-group-item"><span class="fa fa-star"></span> Starred <span class="badge badge-warning"><?php if(isset($num_starred)){ echo $num_starred ;}else { echo 0 ;}?></span></a>
                                <a href="<?php echo base_url() ?>message-sent" class="list-group-item"><span class="fa fa-rocket"></span> Sent</a>
                                <a href="<?php echo base_url() ?>message-flagged" class="list-group-item"><span class="fa fa-flag"></span> Flagged</a>
                                <a href="<?php echo base_url() ?>message-deleted" class="list-group-item"><span class="fa fa-trash-o"></span> Deleted <span class="badge badge-default"><?php if(isset($num_deleted)){ echo $num_deleted ;}else { echo 0 ;}?></span></a>                            
                            </div>                        
                        </div>
                        <!--  <div class="block">
                            <h4>Labels</h4>
                            <div class="list-group list-group-simple">                                
                                <a href="#" class="list-group-item"><span class="fa fa-circle text-success"></span> Clients</a>
                                <a href="#" class="list-group-item"><span class="fa fa-circle text-warning"></span> Social</a>
                                <a href="#" class="list-group-item"><span class="fa fa-circle text-danger"></span> Work</a>
                                <a href="#" class="list-group-item"><span class="fa fa-circle text-info"></span> Family</a>
                                <a href="#" class="list-group-item"><span class="fa fa-circle text-primary"></span> Friends</a>
                            </div>
                        </div>  -->
                    </div>
                    <!-- END CONTENT FRAME LEFT -->
                    
                    <!-- START CONTENT FRAME BODY -->
                    <div class="content-frame-body">
                        
                        <div class="panel panel-default">
                            
                            <div class="panel-body mail">
                                
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
										
										if($read_stat === '1')
											
										{
								?>		
										<div class="mail-item mail-read mail-info">                                    
											<div class="mail-checkbox">
												<input type="checkbox" class="icheckbox"/>
											</div>
											<div class="mail-star">
												<span class="fa fa-star-o"></span>
											</div>
											<div class="mail-user"> <?php echo $sender ;?></div>                                    
											<a href="<?php echo base_url() ?>message-view/<?php echo $mid ?>" class="mail-text"> <?php echo $subject ;?></a>                                    
											<div class="mail-date"> <?php echo $date_send ;?> </div>
										</div>
								<?php			
										}else {
								?>		
									<div class="mail-item mail-unread mail-info">                                    
										<div class="mail-checkbox">
											<input type="checkbox" class="icheckbox"/>
										</div>
										<div class="mail-star">
											<span class="fa fa-star-o"></span>
										</div>
										<div class="mail-user"> <?php echo $sender ;?></div>                                    
										<a href="<?php echo base_url() ?>message-view/<?php echo $mid ?>" class="mail-text"> <?php echo $subject ;?></a>                                    
										<div class="mail-date"> <?php echo $date_send ;?> </div>
									</div>
								<?php		
										}
								 
								 
									}
								
								 }
								 else {
									?> 
									 
									<p class="text-center "><span class="fa fa-trash" > </span> Inbox is Empty</p> 
									 
								<?php	 
								 }
								
								?>
								
								                              
                            </div>
                            <div class="panel-footer">                                
                                
                                <ul class="pagination pagination-sm pull-right">
                                    <?php
									
										if(isset($links))
										{
											
											echo $links ;
											
										}
									?>
									
									<!-- <li class="disabled"><a href="#">«</a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>                                    
                                    <li><a href="#">»</a></li> -->
                                </ul>
                            </div>                            
                        </div>
                        
                    </div>
                    <!-- END CONTENT FRAME BODY -->
                </div>
                <!-- END CONTENT FRAME -->
                

                            
                        </div>                   
                    </div>
                
                                </div>
                            </div>
                            <!-- END DEFAULT DATATABLE -->
                            
                        </div>
                        
                    </div>
                    
                    
                    
                    
                    
                </div>
                <!-- END PAGE CONTENT WRAPPER -->                                
         <script>
            var editor = CodeMirror.fromTextArea(document.getElementById("codeEditor"), {
                lineNumbers: true,
                matchBrackets: true,
                mode: "application/x-httpd-php",
                indentUnit: 4,
                indentWithTabs: true,
                enterMode: "keep",
                tabMode: "shift"                                                
            });
            editor.setSize('100%','420px');
        </script>   
        