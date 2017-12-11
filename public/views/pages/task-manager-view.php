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
                                    <div class="widget-title">Tasks </div>
                                    <div class="widget-subtitle">Tasked assigned to me </div>
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
                                    <div class="widget-subtitle">my pending tasks</div>
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
                                    <div class="widget-title">Completed </div>
                                    <div class="widget-subtitle">My completed task</div>
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

                                    <div class="task-item task-primary">                                    
                                        <div class="task-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris rutrum velit vel erat fermentum, a dignissim dolor malesuada.</div>
                                        <div class="task-footer">
                                            <div class="pull-left"><span class="fa fa-clock-o"></span> 1h 30min</div>                                    
                                        </div>                                    
                                    </div>

                                    <div class="task-item task-success">                                    
                                        <div class="task-text">Suspendisse a tempor eros. Curabitur fringilla maximus lorem, eget congue lacus ultrices eu. Nunc et molestie elit. Curabitur consectetur mollis ipsum, id hendrerit nunc molestie id.</div>
                                        <div class="task-footer">
                                            <div class="pull-left"><span class="fa fa-clock-o"></span> 1h 45min</div>
                                            <div class="pull-right"><a href="#"><span class="fa fa-chain"></span></a> <a href="#"><span class="fa fa-comments"></span></a></div>
                                        </div>                                    
                                    </div>

                                    <div class="task-item task-warning">                                    
                                        <div class="task-text">Donec lacus lacus, iaculis nec pharetra id, congue ut tortor. Donec tincidunt luctus metus eget rhoncus.</div>
                                        <div class="task-footer">
                                            <div class="pull-left"><span class="fa fa-clock-o"></span> 1day ago</div>
                                        </div>                                    
                                    </div>

                                    <div class="task-item task-danger">                                    
                                        <div class="task-text">Pellentesque faucibus molestie lectus non efficitur. Vestibulum mattis dignissim diam, eget dapibus urna rutrum vitae.</div>
                                        <div class="task-footer">
                                            <div class="pull-left"><span class="fa fa-clock-o"></span> 2days ago</div>
                                            <div class="pull-right"><a href="#"><span class="fa fa-chain"></span></a> <a href="#"><span class="fa fa-comments"></span></a></div>
                                        </div>                                    
                                    </div>

                                    <div class="task-item task-info">                                    
                                        <div class="task-text">Quisque quis ipsum quis magna bibendum laoreet.</div>
                                        <div class="task-footer">
                                            <div class="pull-left"><span class="fa fa-clock-o"></span> 3days ago</div>
                                            <div class="pull-right"><a href="#"><span class="fa fa-chain"></span></a> <a href="#"><span class="fa fa-comments"></span></a></div>
                                        </div>                                    
                                    </div>
                                    
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
         