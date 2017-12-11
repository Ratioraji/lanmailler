            <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
                    <!-- START WIDGETS -->                    
                    <div class="row">
                        
                        <div class="col-md-3">
                            
                            <!-- START WIDGET MESSAGES -->
                            <div class="widget widget-default widget-item-icon" onclick="location.href='pages-messages.html';">
                                <div class="widget-item-left">
                                    <span class="fa fa-edit"></span>
                                </div>                             
                                <div class="widget-data">
                                    <div class="widget-int num-count">48</div>
                                    <div class="widget-title">Task Assigned</div>
                                    <div class="widget-subtitle">to Staffs</div>
                                </div>      
                                <div class="widget-controls">                                
                                    <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                                </div>
                            </div>                            
                            <!-- END WIDGET MESSAGES -->
                            
                        </div>
						<div class="col-md-3">
                            
                            <!-- START WIDGET MESSAGES -->
                            <div class="widget widget-default widget-item-icon" onclick="location.href='pages-messages.html';">
                                <div class="widget-item-left">
                                    <span class="fa fa-spinner fa-spin"></span>
                                </div>                             
                                <div class="widget-data">
                                    <div class="widget-int num-count">48</div>
                                    <div class="widget-title">Pending </div>
                                    <div class="widget-subtitle">Tasks pending</div>
                                </div>      
                                <div class="widget-controls">                                
                                    <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                                </div>
                            </div>                            
                            <!-- END WIDGET MESSAGES -->
                            
                        </div>
                        <div class="col-md-3">
                            
                            <!-- START WIDGET REGISTRED -->
                            <div class="widget widget-default widget-item-icon" onclick="location.href='pages-address-book.html';">
                                <div class="widget-item-left">
                                    <span class="fa fa-rocket text-success"></span>
                                </div>
                                <div class="widget-data">
                                    <div class="widget-int num-count">375</div>
                                    <div class="widget-title">Completed task</div>
                                    <div class="widget-subtitle">by staffs</div>
                                </div>
                                <div class="widget-controls">                                
                                    <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                                </div>                            
                            </div>                            
                            <!-- END WIDGET REGISTRED -->
                            
                        </div>
                        <div class="col-md-3">
                            
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
                    <!-- START CONTENT FRAME -->
                <div class="content-frame">     
                    <!-- START CONTENT FRAME TOP -->
                    <div class="content-frame-top">  
						<?php 
                                        echo validation_errors(); 
										
										if(isset($_SESSION['process_stat']) && $_SESSION['process_stat'] == '1' )
										{
											
											echo '<div class="alert alert-danger text-center"><a class="close" data-dismiss="alert">×</a><strong>';
											  echo "New Task was added succesfully";	
											echo '</strong></div>';
											
											
										}
										elseif(isset($_SESSION['process_stat']) && $_SESSION['process_stat'] == '0' )
										{
											
											echo '<div class="alert alert-danger text-center"><a class="close" data-dismiss="alert">×</a><strong>';
											  echo "Task was not added successfully";	
											echo '</strong></div>';
											
										}
										
                        ?>
                        <div class="page-title">                    
                            <h2><span class="fa fa-arrow-circle-o-left"></span> Tasks</h2>
                        </div>                                                
                        <div class="pull-right">
                            <button class="btn btn-default content-frame-left-toggle"><span class="fa fa-bars"></span></button>
                        </div>                                
                        <div class="pull-right" style="width: 100px; margin-right: 5px;">
                            <select class="form-control select">
                               <option>All</option>                                
                                <option>Project</option>                                
                                <option>Meeting</option>
                                <option>Personal</option>
                                <option>Urgent</option>
                                <option>Work</option>
                            </select>
                        </div>
                        
                    </div>    
					 
                    <div class="content-frame-left">
                        <div class="form-group">
						<?php 
                    
                                 $attributes = array('class' => 'form-horizontal','method' =>'POST');
                                echo form_open('tasks/create', $attributes); 
                     
                             ?>
						
						
                            <h4>Task title:</h4>
     						<input type="text" name="tasktit" required="true" class="form-control push-down-10"/>
							
							<h4>Time due:</h4>
     						<input type="text" name="tasktimedue" required="true" class="form-control push-down-10 datepicker"/>
							
							<h4>Group</h4>
							<select class="form-control select push-down-10" required="true" name="taskgroup" >
                                                              
                                <option value="" >Select</option>                                
                                <option value="Project" >Project</option>                                
                                <option value="Meeting">Meeting</option>
                                <option value="Personal">Personal</option>
                                <option value="Urgent">Urgent</option>
                                <option value="Work">Work</option>
                            </select>
							
							<h4>Assign to user</h4>
							<select class="form-control select push-down-10" required="true" name="tasktouser" >
                                <?php
								
								
									foreach ($allusers as $user )
									{
										
										echo '<option value="'.$user['user_id'].'" >'.$user['username'].'</option>';
										
										
										
									}
								
								
								
								
								
								
								
								
								
								?>                              
                                <!--<option value="" >Select</option>                                
                                <option value="2" >segun</option>                                
                                <option value="1">tayo</option>
                                <option value="5">Layo</option>
                                <option value="12">Tunde</option>
                                <option value="3">Princess</option> -->
                            </select>
							
							<h4>Description:</h4>
                            <textarea class="form-control push-down-10" required="true" name="taskdesc" id="new_task" rows="4" placeholder="Your task Description here..."></textarea>
							
							
                            <button class="btn btn-primary" id="add_new_task"><span class="fa fa-edit"></span> Add</button>
                        
						<?php echo form_close() ;?>
						
						</div> 
						
                        <div class="form-group push-up-10">
                            <h4>Searh in tasks:</h4>
                            <div class="input-group">
                                <div class="input-group-addon"><span class="fa fa-search"></span></div>
                                <input type="text" class="form-control" placeholder="keyword..."/>
                            </div>
                        </div>
                        <div class="form-group">
                            <h4>Task groups:</h4>
                            <div class="list-group border-bottom">
                                <a href="#" class="list-group-item"><span class="fa fa-circle text-primary"></span> Project </a>
                                <a href="#" class="list-group-item"><span class="fa fa-circle text-success"></span> Meeting</a>
                                <a href="#" class="list-group-item"><span class="fa fa-circle text-warning"></span> Personal </a>
                                <a href="#" class="list-group-item"><span class="fa fa-circle text-danger"></span> Urgent</a>
                                <a href="#" class="list-group-item"><span class="fa fa-circle text-info"></span> Work</a>
                            </div>
                        </div>
                        
                        
                    </div>       
                    <!-- END CONTENT FRAME TOP -->
                    
                    <!-- START CONTENT FRAME BODY -->
                    <div class="content-frame-body">
                                                
                        <div class="row push-up-10">
                            <div class="col-md-4">
                                
                                <h3>To-do List</h3>
                                
                                <div class="tasks" id="tasks">

                                    <?php
									
										foreach($mytasks as $tasks ) {
											
										?>	
										
										<div class="task-item task-primary">                                    
											<div class="task-text"><?php echo $tasks['task_description'];  ?></div>
											<div class="task-footer">
												<div class="pull-left"><span class="fa fa-clock-o"></span> <?php echo $tasks['task_time_due'];  ?></div>                                    
											</div> 																					                                  
										</div>
										
										
										
										<?php	
											
											
											
										}
									
									
									
									?>
                                    
                                </div>                            

                            </div>
                            <div class="col-md-4">
                                <h3>In Progress</h3>
                                <div class="tasks" id="tasks_progreess">

                                    <div class="task-item task-warning">
                                        <div class="task-text">In mauris nunc, blandit a turpis in, vehicula viverra metus. Quisque dictum purus lorem, in rhoncus justo dapibus eget. Aenean pretium non mauris et porttitor.</div>
                                        <div class="task-footer">
                                            <div class="pull-left"><span class="fa fa-clock-o"></span> 2h 55min</div>
                                            <div class="pull-right"><span class="fa fa-pause"></span> 4:51</div>
                                        </div>                                    
                                    </div>                            
                                    
                                    <div class="task-drop push-down-10">
                                        <span class="fa fa-cloud"></span>
                                        Drag your task here to start it tracking time
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-md-4">
                                <h3>Completed</h3>
                                <div class="tasks" id="tasks_completed">
                                    <div class="task-item task-danger task-complete">                                    
                                        <div class="task-text">Donec maximus sodales feugiat.</div>
                                        <div class="task-footer">
                                            <div class="pull-left"><span class="fa fa-clock-o"></span> 15min</div>                                    
                                        </div>                                    
                                    </div>
                                    <div class="task-item task-info task-complete">                                    
                                        <div class="task-text">Aliquam eget est a dui tincidunt commodo in nec ante.</div>
                                        <div class="task-footer">
                                            <div class="pull-left"><span class="fa fa-clock-o"></span> 35min</div>                                    
                                        </div>                                    
                                    </div>
                                    <div class="task-drop">
                                        <span class="fa fa-cloud"></span>
                                        Drag your task here to finish it
                                    </div>                                    
                                </div>
                            </div>
                        </div>                        
                                                
                    </div>
                    <!-- END CONTENT FRAME BODY -->
                    
                </div>
                <!-- END CONTENT FRAME -->

                                
                  
                    
                </div>
                <!-- END PAGE CONTENT WRAPPER -->                                
         