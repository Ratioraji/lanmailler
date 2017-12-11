			<div class="row">
                 <div class="col-md-12">
                            
                           <!-- START CONTENT FRAME -->
                <div class="content-frame">                                    
                    <!-- START CONTENT FRAME TOP -->
                    <div class="content-frame-top">                        
                        <div class="page-title">                    
                            <h2><span class="fa fa-file-text"></span> Message</h2>
                        </div>                                                                                
                        
                        <div class="pull-right">                                                                                    
                            <button class="btn btn-default content-frame-left-toggle"><span class="fa fa-bars"></span></button>
                        </div>                        
                    </div>
                    <!-- END CONTENT FRAME TOP -->
                    
                    <!-- START CONTENT FRAME LEFT -->
                    <div class="content-frame-left">
                        <div class="block">
                            <a href="<?php echo base_url(); ?>message-compose" class="btn btn-danger btn-block btn-lg"><span class="fa fa-edit"></span> COMPOSE</a>
                        </div>
                        <div class="block">
                            <div class="list-group border-bottom">
                                <a href="<?php echo base_url() ?>message-inbox" class="list-group-item active"><span class="fa fa-inbox"></span> Inbox <span class="badge badge-success"><?php if(isset($num_inbox)){ echo $num_inbox ;}else { echo 0 ;}?></span></a>
                                <a href="<?php echo base_url() ?>message-stared" class="list-group-item "><span class="fa fa-star"></span> Starred <span class="badge badge-warning"><?php if(isset($num_starred)){ echo $num_starred ;}else { echo 0 ;}?></span></a>
                                <a href="<?php echo base_url() ?>message-sent" class="list-group-item "><span class="fa fa-rocket"></span> Sent</a>
                                <a href="<?php echo base_url() ?>message-flagged" class="list-group-item"><span class="fa fa-flag"></span> Flagged</a>
                                <a href="<?php echo base_url() ?>message-deleted" class="list-group-item"><span class="fa fa-trash-o"></span> Deleted <span class="badge badge-default"><?php if(isset($num_deleted)){ echo $num_deleted ;}else { echo 0 ;}?></span></a>                            
                            </div>                        
                        </div>
                        <!-- <div class="block">
                            <h4>Labels</h4>
                            <div class="list-group list-group-simple">                                
                                <a href="#" class="list-group-item"><span class="fa fa-circle text-success"></span> Clients</a>
                                <a href="#" class="list-group-item"><span class="fa fa-circle text-warning"></span> Social</a>
                                <a href="#" class="list-group-item"><span class="fa fa-circle text-danger"></span> Work</a>
                                <a href="#" class="list-group-item"><span class="fa fa-circle text-info"></span> Family</a>
                                <a href="#" class="list-group-item"><span class="fa fa-circle text-primary"></span> Friends</a>
                            </div>
                        </div> -->
                    </div>
                    <!-- END CONTENT FRAME LEFT -->
                    
                    <!-- START CONTENT FRAME BODY -->
                    <div class="content-frame-body">
                        
                        <div class="panel panel-default">
                            <div class="panel-heading">
								<?php
									if(isset($message_content))
									{
										
										$mid = $message_content->message_id;
										$sender = $message_content->sender_name;
										$subject = $message_content->subject;
										$body = $message_content->body ;
										$date_send = $message_content->date_created ;
										$attc = $message_content->attach_id ;
										
										if(isset($sender_info))
										{
											$mid_dsp = $sender_info->display_pics;
										}	
										
										if($attc !== 'Nill'){
											
											
											$attachement = $attc ;
											
										}
									?>
									
                                <div class="pull-left">
                                    <img src="../upload/user_image/<?php echo $mid_dsp ;?>" class="panel-title-image"  alt="$sender"/>
                                    <h3 class="panel-title"> <?php echo $sender ; ?> <small></small></h3>
                                </div>
                                <div class="pull-right">
                                    <button class="btn btn-default"><span class="fa fa-star"></span></button>
                                    <button class="btn btn-default"><span class="fa fa-flag"></span></button>
                                    <button class="btn btn-default"><span class="fa fa-trash-o"></span></button>                                    
                                </div>
                            </div>
                            <div class="panel-body">
                                	
									
								<h3><?php echo $subject ;?><small class="pull-right text-muted"><span class="fa fa-clock-o"></span>  <?php echo $date_send ; ?></small></h3>
                                <p><?php echo $body ?></p>    
                                	
									
									
								<?php
									
									
									}
								
								?>
								
								
								
							<hr />	
							<form role="form" id="msg_form" action="<?php echo base_url(); ?>message/send"   >	
                                <div id="preview">
								
								
								
								</div>
								<div class="form-group">
									<div class="col-md-9">                                        
										<input type="hidden" name="receiver" class="form-control select" value="<?php echo $sender ;?>" >
										<input type="hidden" class="form-control" value="<?php echo $subject ;?>" placeholder="RE : Subject" name="subject" />                                
								   
									</div>
									
								</div>
								<div class="form-group hidden" id="mail-cc">
									<div class="col-md-2" ></div>
									<div class="col-md-12">                                        
										 <label class="ccontrol-label">Cc:</label>
										 <select name="copyuser"  class="form-control select">
												<option value="">Select user on network</option>
												<?php
										
													foreach($users as $user)
													{
												?>		
													 <option value="<?php echo $user->user_name ; ?>" ><?php echo $user->user_name ; ?></option>
													 
														
												<?php		
													}
												
												?>                                      
											</select>
									</div>
								</div>
								<div class="form-group push-up-20 col-md-12">
										<label>Quick Reply</label>
										<textarea class="form-control summernote_lite" rows="3" placeholder="Click to get editor" id="message_body" name="message_body" ></textarea>
								</div>
							
								<div class="form-group">
									<label class="col-md-2 control-label">Attachments:</label>
									<div class="col-md-10">                                        
										<input type="file" name="attc"  class="file" data-filename-placement="inside"/>
									</div>                                
								</div>
                            <div class="panel-body panel-body-table">
								
                                <h6>Attachments</h6>
                                <table class="table table-bordered table-striped">
                                                             
                                     <?php

									if(!empty($attachement)) {
										
								?>		
									 <tr>
                                        <td><span class="fa fa-file"> </span></td><td><a href="<?php echo base_url() ;?>assets\img\attachments\<?php echo $attachement ; ?>"><?php echo $attachement ; ?></a></td><td></td>
                                    </tr> 
								<?php		
										
									} 

								?>                                 
                                </table>
                            </div>
							<div class="col-md-1">
								<button class="btn btn-link toggle" data-toggle="mail-cc">Click to 
								Cc user connected to Network</button>
							</div>
                            <div class="panel-footer">
                                <button class="btn btn-success pull-right"><span class="fa fa-mail-reply"></span> Post Reply</button>
                            </div>
						</form>
							
							<!-- <form role="form" class="form-horizontal" id="msg_form" action="<?php echo base_url() ?>message/send" >
						
								<div id="preview">
									
									
									
								</div>
								<div class="form-group">
									<div class="col-md-12">
									   
										<div class="pull-right">
											<button class="btn btn-danger"><span class="fa fa-envelope"></span> Send Message</button>
										</div>                                    
									</div>
								</div>
								<div class="form-group">
									<div class="col-md-9">                                        
										<input type="hidden" name="receiver" class="form-control select" value="<?php echo $sender ?>" >
										
									</div>
									 <div class="col-md-1">
										<button class="btn btn-link toggle" data-toggle="mail-cc">Cc</button>
									</div>
								</div>                        
								
								<div class="form-group hidden" id="mail-cc">
									<label class="col-md-2 control-label">Cc:</label>
									<div class="col-md-10">                                        
										 <select name="copyuser"  class="form-control select">
												<?php
										
													foreach($users as $user)
													{
												?>		
													 <option value="<?php echo $user->user_name ; ?>" ><?php echo $user->user_name ; ?></option>
													 
														
												<?php		
													}
												
												?>                                      
											</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label">Subject:</label>
									<div class="col-md-10">                                        
										<input type="text" class="form-control" value="<?php echo $subject ;?>" placeholder="RE : Subject" name="subject" />                                
									</div>                                
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label">Attachments:</label>
									<div class="col-md-10">                                        
										<input type="file" name="attc"  class="file" data-filename-placement="inside"/>
									</div>                                
								</div>
								<div class="form-group">
									<div class="col-md-12">                            
										<textarea class="summernote_lite" rows="3" id="message_body" name="message_body">                                        
										</textarea>                            
									</div>
								</div>
								
								<div class="pull-right">
											<button class="btn btn-danger" id="send_messge" ><span class="fa fa-envelope"></span> Send Message</button>
										</div> 
							</form>
							 -->
						
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
        