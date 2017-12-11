
                    <div class="row">
                        <div class="col-md-12">
                            
                            <!-- START CONTENT FRAME -->
                <div class="content-frame">                                    
                    <!-- START CONTENT FRAME TOP -->
                    <div class="content-frame-top">
                        <div class="page-title">                    
                            <h2><span class="fa fa-pencil"></span> Compose</h2>
                        </div>                         
                        
                        <div class="pull-right">                                                                                    
                            <button class="btn btn-default"><span class="fa fa-floppy-o"></span> Save</button>
                            <button class="btn btn-default content-frame-left-toggle"><span class="fa fa-bars"></span></button>
                        </div>
                    </div>
                    <!-- END CONTENT FRAME TOP -->
                    
                    <!-- START CONTENT FRAME LEFT -->
                    <div class="content-frame-left">
                        <div class="block">
                            <div class="list-group border-bottom">
                                <a href="<?php echo base_url() ?>message-inbox" class="list-group-item active"><span class="fa fa-inbox"></span> Inbox <span class="badge badge-success"><?php if(isset($num_inbox)){ echo $num_inbox ;}else { echo 0 ;}?></span></a>
                                <a href="<?php echo base_url() ?>message-stared" class="list-group-item "><span class="fa fa-star"></span> Starred <span class="badge badge-warning"><?php if(isset($num_starred)){ echo $num_starred ;}else { echo 0 ;}?></span></a>
                                <a href="<?php echo base_url() ?>message-sent" class="list-group-item "><span class="fa fa-rocket"></span> Sent</a>
                                <a href="<?php echo base_url() ?>message-flagged" class="list-group-item"><span class="fa fa-flag"></span> Flagged</a>
                                <a href="<?php echo base_url() ?>message-deleted" class="list-group-item"><span class="fa fa-trash-o"></span> Deleted <span class="badge badge-default"><?php if(isset($num_deleted)){ echo $num_deleted ;}else { echo 0 ;}?></span></a>                            
                            </div>                        
                        </div>
                       
                    </div>
                    <!-- END CONTENT FRAME LEFT -->
                    
                    <!-- START CONTENT FRAME BODY -->
                    <div class="content-frame-body">
                        <div class="block">
                        <form role="form" class="form-horizontal" id="msg_form" action="<?php echo base_url() ?>message/send" >
						
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
                                <label class="col-md-2 control-label">Select a user on the network:</label>
                                <div class="col-md-9">                                        
                                    <select name="receiver" class="form-control select">
									
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
                                    <input type="text" class="form-control" value="" placeholder="RE : Subject" name="subject" />                                
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
                                    <textarea class="summernote_email" id="message_body" name="message_body">                                        
                                    </textarea>                            
                                </div>
                            </div>
                           <!--  <div class="form-group">
                                <div class="col-md-12">
                                    <div class="pull-left">
                                        <button class="btn btn-default" id="delete_draft" ><span class="fa fa-trash-o"></span> Delete Draft</button>
                                    </div>
                                                                      
                                </div> -->
                            </div>
							<div class="pull-right">
                                        <button class="btn btn-danger" id="send_messge" ><span class="fa fa-envelope"></span> Send Message</button>
                                    </div> 
                        </form>
						 
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
        