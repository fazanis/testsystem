<?php require_once (ROOT."/views/layouts/header.php");?>

    <body>
        
        <header>
            <div class="headerwrapper">
                <div class="header-left">
                    <a href="index.html" class="logo">
                        <img src="templates/images/logo.png" alt="" /> 
                    </a>
                    <div class="pull-right">
                        <a href="" class="menu-collapse">
                            <i class="fa fa-bars"></i>
                        </a>
                    </div>
                </div><!-- header-left -->
                
                <div class="header-right">
                    
                    <div class="pull-right">
                        
                        <form class="form form-search" action="search-results.html">
                            <input type="search" class="form-control" placeholder="Search" />
                        </form>
                        
                        <div class="btn-group btn-group-list btn-group-notification">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                              <i class="fa fa-bell-o"></i>
                              <span class="badge">5</span>
                            </button>
                            <div class="dropdown-menu pull-right">
                                <a href="" class="link-right"><i class="fa fa-search"></i></a>
                                <h5>Notification</h5>
                                <ul class="media-list dropdown-list">
                                    <li class="media">
                                        <img class="img-circle pull-left noti-thumb" src="templates/images/photos/user1.png" alt="">
                                        <div class="media-body">
                                          <strong>Nusja Nawancali</strong> likes a photo of you
                                          <small class="date"><i class="fa fa-thumbs-up"></i> 15 minutes ago</small>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <img class="img-circle pull-left noti-thumb" src="templates/images/photos/user2.png" alt="">
                                        <div class="media-body">
                                          <strong>Weno Carasbong</strong> shared a photo of you in your <strong>Mobile Uploads</strong> album.
                                          <small class="date"><i class="fa fa-calendar"></i> July 04, 2014</small>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <img class="img-circle pull-left noti-thumb" src="templates/images/photos/user3.png" alt="">
                                        <div class="media-body">
                                          <strong>Venro Leonga</strong> likes a photo of you
                                          <small class="date"><i class="fa fa-thumbs-up"></i> July 03, 2014</small>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <img class="img-circle pull-left noti-thumb" src="templates/images/photos/user4.png" alt="">
                                        <div class="media-body">
                                          <strong>Nanterey Reslaba</strong> shared a photo of you in your <strong>Mobile Uploads</strong> album.
                                          <small class="date"><i class="fa fa-calendar"></i> July 03, 2014</small>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <img class="img-circle pull-left noti-thumb" src="templates/images/photos/user1.png" alt="">
                                        <div class="media-body">
                                          <strong>Nusja Nawancali</strong> shared a photo of you in your <strong>Mobile Uploads</strong> album.
                                          <small class="date"><i class="fa fa-calendar"></i> July 02, 2014</small>
                                        </div>
                                    </li>
                                </ul>
                                <div class="dropdown-footer text-center">
                                    <a href="" class="link">See All Notifications</a>
                                </div>
                            </div><!-- dropdown-menu -->
                        </div><!-- btn-group -->
                        
                        <div class="btn-group btn-group-list btn-group-messages">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope-o"></i>
                                <span class="badge">2</span>
                            </button>
                            <div class="dropdown-menu pull-right">
                                <a href="" class="link-right"><i class="fa fa-plus"></i></a>
                                <h5>New Messages</h5>
                                <ul class="media-list dropdown-list">
                                    <li class="media">
                                        <span class="badge badge-success">New</span>
                                        <img class="img-circle pull-left noti-thumb" src="templates/images/photos/user1.png" alt="">
                                        <div class="media-body">
                                          <strong>Nusja Nawancali</strong>
                                          <p>Hi! How are you?...</p>
                                          <small class="date"><i class="fa fa-clock-o"></i> 15 minutes ago</small>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <span class="badge badge-success">New</span>
                                        <img class="img-circle pull-left noti-thumb" src="templates/images/photos/user2.png" alt="">
                                        <div class="media-body">
                                          <strong>Weno Carasbong</strong>
                                          <p>Lorem ipsum dolor sit amet...</p>
                                          <small class="date"><i class="fa fa-clock-o"></i> July 04, 2014</small>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <img class="img-circle pull-left noti-thumb" src="templates/images/photos/user3.png" alt="">
                                        <div class="media-body">
                                          <strong>Venro Leonga</strong>
                                          <p>Do you have the time to listen to me...</p>
                                          <small class="date"><i class="fa fa-clock-o"></i> July 03, 2014</small>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <img class="img-circle pull-left noti-thumb" src="templates/images/photos/user4.png" alt="">
                                        <div class="media-body">
                                          <strong>Nanterey Reslaba</strong>
                                          <p>It might seem crazy what I'm about to say...</p>
                                          <small class="date"><i class="fa fa-clock-o"></i> July 03, 2014</small>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <img class="img-circle pull-left noti-thumb" src="templates/images/photos/user1.png" alt="">
                                        <div class="media-body">
                                          <strong>Nusja Nawancali</strong>
                                          <p>Hey I just met you and this is crazy...</p>
                                          <small class="date"><i class="fa fa-clock-o"></i> July 02, 2014</small>
                                        </div>
                                    </li>
                                </ul>
                                <div class="dropdown-footer text-center">
                                    <a href="" class="link">See All Messages</a>
                                </div>
                            </div><!-- dropdown-menu -->
                        </div><!-- btn-group -->
                        
                        <div class="btn-group btn-group-option">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                              <i class="fa fa-caret-down"></i>
                            </button>
                            <ul class="dropdown-menu pull-right" role="menu">
                              <li><a href="#"><i class="glyphicon glyphicon-user"></i> My Profile</a></li>
                              <li><a href="#"><i class="glyphicon glyphicon-star"></i> Activity Log</a></li>
                              <li><a href="#"><i class="glyphicon glyphicon-cog"></i> Account Settings</a></li>
                              <li><a href="#"><i class="glyphicon glyphicon-question-sign"></i> Help</a></li>
                              <li class="divider"></li>
                              <li><a href="/logout"><i class="glyphicon glyphicon-log-out"></i>Выход</a></li>
                            </ul>
                        </div><!-- btn-group -->
                        
                    </div><!-- pull-right -->
                    
                </div><!-- header-right -->
                
            </div><!-- headerwrapper -->
        </header>
        
        <section>
            <div class="mainwrapper">
                <div class="leftpanel">
                    <div class="media profile-left">
                        <a class="pull-left profile-thumb" href="profile.html">
                            <img class="img-circle" src="templates/images/photos/profile.png" alt="">
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading">Elen Adarna</h4>
                            <small class="text-muted">Beach Lover</small>
                        </div>
                    </div><!-- media -->
                    
                    <h5 class="leftpanel-title">Navigation</h5>
                    <ul class="nav nav-pills nav-stacked">
                        <li class="active"><a href="index.html"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
                        <li><a href="messages.html"><span class="pull-right badge">5</span><i class="fa fa-envelope-o"></i> <span>Messages</span></a></li>
                        <li class="parent"><a href=""><i class="fa fa-suitcase"></i> <span>UI Elements</span></a>
                            <ul class="children">
                                <li><a href="alerts.html">Alerts &amp; Notifications</a></li>
                                <li><a href="buttons.html">Buttons</a></li>
                                <li><a href="extras.html">Extras</a></li>
                                <li><a href="graphs.html">Graphs &amp; Charts</a></li>
                                <li><a href="icons.html">Icons</a></li>
                                <li><a href="modals.html">Modals</a></li>
                                <li><a href="widgets.html">Panels &amp; Widgets</a></li>
                                <li><a href="sliders.html">Sliders</a></li>                                
                                <li><a href="tabs-accordions.html">Tabs &amp; Accordions</a></li>
                                <li><a href="typography.html">Typography</a></li>
                            </ul>
                        </li>
                        <li class="parent"><a href=""><i class="fa fa-edit"></i> <span>Forms</span></a>
                            <ul class="children">
                                <li><a href="code-editor.html">Code Editor</a></li>
                                <li><a href="general-forms.html">General Forms</a></li>
                                <li><a href="form-layouts.html">Layouts</a></li>
                                <li><a href="wysiwyg.html">Text Editor</a></li>
                                <li><a href="form-validation.html">Validation</a></li>
                                <li><a href="form-wizards.html">Wizards</a></li>
                            </ul>
                        </li>
                        <li class="parent"><a href=""><i class="fa fa-bars"></i> <span>Tables</span></a>
                            <ul class="children">
                                <li><a href="basic-tables.html">Basic Tables</a></li>
                                <li><a href="data-tables.html">Data Tables</a></li>
                            </ul>
                        </li>
                        <li><a href="maps.html"><i class="fa fa-map-marker"></i> <span>Maps</span></a></li>
                        <li class="parent"><a href=""><i class="fa fa-file-text"></i> <span>Pages</span></a>
                            <ul class="children">
                                <li><a href="notfound.html">404 Page</a></li>
                                <li><a href="blank.html">Blank Page</a></li>
                                <li><a href="calendar.html">Calendar</a></li>
                                <li><a href="invoice.html">Invoice</a></li>
                                <li><a href="locked.html">Locked Screen</a></li>
                                <li><a href="media-manager.html">Media Manager</a></li>
                                <li><a href="people-directory.html">People Directory</a></li>
                                <li><a href="profile.html">Profile</a></li>                                
                                <li><a href="search-results.html">Search Results</a></li>
                                <li><a href="signin.html">Sign In</a></li>
                                <li><a href="signup.html">Sign Up</a></li>
                            </ul>
                        </li>
                        
                    </ul>
                    
                </div><!-- leftpanel -->
                
                <div class="mainpanel">
                    <div class="pageheader">
                        <div class="media">
                            <div class="pageicon pull-left">
                                <i class="fa fa-home"></i>
                            </div>
                            <div class="media-body">
                                <ul class="breadcrumb">
                                    <li><a href=""><i class="glyphicon glyphicon-home"></i></a></li>
                                    <li>Dashboard</li>
                                </ul>
                                <h4>Dashboard</h4>
                            </div>
                        </div><!-- media -->
                    </div><!-- pageheader -->
                    
                    <div class="contentpanel">
                        
                        <div class="row row-stat">
                            <div class="col-md-4">
                                <div class="panel panel-success-alt noborder">
                                    <div class="panel-heading noborder">
                                        <div class="panel-btns">
                                            <a href="" class="panel-close tooltips" data-toggle="tooltip" title="Close Panel"><i class="fa fa-times"></i></a>
                                        </div><!-- panel-btns -->
                                        <div class="panel-icon"><i class="fa fa-dollar"></i></div>
                                        <div class="media-body">
                                            <h5 class="md-title nomargin">Today's Earnings</h5>
                                            <h1 class="mt5">$8,102.32</h1>
                                        </div><!-- media-body -->
                                        <hr>
                                        <div class="clearfix mt20">
                                            <div class="pull-left">
                                                <h5 class="md-title nomargin">Yesterday</h5>
                                                <h4 class="nomargin">$29,009.17</h4>
                                            </div>
                                            <div class="pull-right">
                                                <h5 class="md-title nomargin">This Week</h5>
                                                <h4 class="nomargin">$99,103.67</h4>
                                            </div>
                                        </div>
                                        
                                    </div><!-- panel-body -->
                                </div><!-- panel -->
                            </div><!-- col-md-4 -->
                            
                            <div class="col-md-4">
                                <div class="panel panel-primary noborder">
                                    <div class="panel-heading noborder">
                                        <div class="panel-btns">
                                            <a href="" class="panel-close tooltips" data-toggle="tooltip" title="Close Panel"><i class="fa fa-times"></i></a>
                                        </div><!-- panel-btns -->
                                        <div class="panel-icon"><i class="fa fa-users"></i></div>
                                        <div class="media-body">
                                            <h5 class="md-title nomargin">New User Accounts</h5>
                                            <h1 class="mt5">138,102</h1>
                                        </div><!-- media-body -->
                                        <hr>
                                        <div class="clearfix mt20">
                                            <div class="pull-left">
                                                <h5 class="md-title nomargin">Yesterday</h5>
                                                <h4 class="nomargin">10,009</h4>
                                            </div>
                                            <div class="pull-right">
                                                <h5 class="md-title nomargin">This Week</h5>
                                                <h4 class="nomargin">178,222</h4>
                                            </div>
                                        </div>
                                        
                                    </div><!-- panel-body -->
                                </div><!-- panel -->
                            </div><!-- col-md-4 -->
                            
                            <div class="col-md-4">
                                <div class="panel panel-dark noborder">
                                    <div class="panel-heading noborder">
                                        <div class="panel-btns">
                                            <a href="" class="panel-close tooltips" data-toggle="tooltip" data-placement="left" title="Close Panel"><i class="fa fa-times"></i></a>
                                        </div><!-- panel-btns -->
                                        <div class="panel-icon"><i class="fa fa-pencil"></i></div>
                                        <div class="media-body">
                                            <h5 class="md-title nomargin">New User Posts</h5>
                                            <h1 class="mt5">153,900</h1>
                                        </div><!-- media-body -->
                                        <hr>
                                        <div class="clearfix mt20">
                                            <div class="pull-left">
                                                <h5 class="md-title nomargin">Yesterday</h5>
                                                <h4 class="nomargin">144,009</h4>
                                            </div>
                                            <div class="pull-right">
                                                <h5 class="md-title nomargin">This Week</h5>
                                                <h4 class="nomargin">987,212</h4>
                                            </div>
                                        </div>
                                        
                                    </div><!-- panel-body -->
                                </div><!-- panel -->
                            </div><!-- col-md-4 -->
                        </div><!-- row -->
                        
                        <div class="alert alert-info">
                            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">&times;</button>
                            <strong>Heads up!</strong> This <a class="alert-link" href="">alert needs your attention</a>, but it's not super important.
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="panel panel-default">
                                    <div class="panel-body padding15">
                                        <h5 class="md-title mt0 mb10">Site Statistics</h5>
                                        <div id="basicFlotLegend" class="flotLegend"></div>
                                        <div id="basicflot" class="flotChart"></div>
                                    </div><!-- panel-body -->
                                    <div class="panel-footer">
                                        <div class="tinystat pull-left">
                                            <div id="sparkline" class="chart mt5"></div>
                                            <div class="datainfo">
                                                <span class="text-muted">Average</span>
                                                <h4>$9,201</h4>
                                            </div>
                                        </div><!-- tinystat -->
                                        <div class="tinystat pull-right">
                                            <div id="sparkline2" class="chart mt5"></div>
                                            <div class="datainfo">
                                                <span class="text-muted">Total</span>
                                                <h4>$8,201</h4>
                                            </div>
                                        </div><!-- tinystat -->
                                    </div><!-- panel-footer -->
                                </div><!-- panel -->
                            </div>
                            
                            <div class="col-md-4">
                                <div class="panel panel-default">
                                    <div class="panel-body padding15">
                                        <h5 class="md-title mt0 mb10">Site Visitors</h5>
                                        <div id="basicFlotLegend2" class="flotLegend"></div>
                                        <div id="basicflot2" class="flotChart"></div>
                                    </div><!-- panel-body -->
                                    <div class="panel-footer">
                                        <div class="tinystat pull-left">
                                            <div id="sparkline3" class="chart mt5"></div>
                                            <div class="datainfo">
                                                <span class="text-muted">Average</span>
                                                <h4>52,201</h4>
                                            </div>
                                        </div><!-- tinystat -->
                                        <div class="tinystat pull-right">
                                            <div id="sparkline4" class="chart mt5"></div>
                                            <div class="datainfo">
                                                <span class="text-muted">Total</span>
                                                <h4>11,201</h4>
                                            </div>
                                        </div><!-- tinystat -->
                                    </div><!-- panel-footer -->
                                </div><!-- panel -->
                            </div>
                            
                            <div class="col-md-4">
                                <div class="panel panel-default">
                                    <div class="panel-body padding15">
                                        <h5 class="md-title mt0 mb10">Site Impressions</h5>
                                        <div id="basicFlotLegend3" class="flotLegend"></div>
                                        <div id="basicflot3" class="flotChart"></div>
                                    </div><!-- panel-body -->
                                    <div class="panel-footer">
                                        <div class="tinystat pull-left">
                                            <div id="sparkline5" class="chart mt5"></div>
                                            <div class="datainfo">
                                                <span class="text-muted">Average</span>
                                                <h4>37,101</h4>
                                            </div>
                                        </div><!-- tinystat -->
                                        <div class="tinystat pull-right">
                                            <div id="sparkline6" class="chart mt5"></div>
                                            <div class="datainfo">
                                                <span class="text-muted">Total</span>
                                                <h4>18,899</h4>
                                            </div>
                                        </div><!-- tinystat -->
                                    </div><!-- panel-footer -->
                                </div><!-- panel -->
                            </div>
                            
                        </div><!-- row -->
                        
                        <div class="row">
                            <div class="col-md-8">
                                <div class="panel panel-default">
                                  <div class="panel-body">
                                    <div class="row">
                                      <div class="col-md-7">
                                        <h5 class="lg-title">Network Performance</h5>
                                        <p class="mb15">Duis autem vel eum iriure dolor in vulputate...</p>
                                        <div id="bar-chart"></div>
                                      </div><!-- col-md-7 -->
                                      <div class="col-md-5">
                                        <h5 class="lg-title">Server Status</h5>
                                        <p class="mb15">Summary of the status of your server.</p>
                                        
                                        <span class="sublabel">CPU Usage (40.05 - 32 cpus)</span>
                                        <div class="progress progress-xs progress-metro">
                                          <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"></div>
                                        </div><!-- progress -->
                                        
                                        <span class="sublabel">Memory Usage (32.2%)</span>
                                        <div class="progress progress-xs progress-metro">
                                          <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 32%"></div>
                                        </div><!-- progress -->
                                        
                                        <span class="sublabel">Disk Usage (82.2%)</span>
                                        <div class="progress progress-xs progress-metro">
                                          <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 82%"></div>
                                        </div><!-- progress -->
                                        
                                        <span class="sublabel">Databases (63/100)</span>
                                        <div class="progress progress-xs progress-metro">
                                          <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 63%"></div>
                                        </div><!-- progress -->
                                        
                                        <span class="sublabel">Domains (2/10)</span>
                                        <div class="progress progress-xs progress-metro">
                                          <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 20%"></div>
                                        </div><!-- progress -->
                                        
                                        <span class="sublabel">Email Account (13/50)</span>
                                        <div class="progress progress-xs progress-metro">
                                          <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 26%"></div>
                                        </div><!-- progress -->
                                        
                                        
                                      </div><!-- col-md-5 -->
                                    </div><!-- row -->
                                  </div><!-- panel-body -->
                                </div><!-- panel -->
                            </div>
                            
                            <div class="col-md-4">
                                <div class="panel panel-success-head widget-todo">
                                    <div class="panel-heading">
                                        <div class="pull-right">
                                            <a title="" data-toggle="tooltip" class="tooltips mr5" href="" data-original-title="Settings"><i class="glyphicon glyphicon-cog"></i></a>
                                            <a title="" data-toggle="tooltip" class="tooltips" id="addnewtodo" href="" data-original-title="Add New"><i class="glyphicon glyphicon-plus"></i></a>
                                        </div><!-- panel-btns -->
                                        <h3 class="panel-title">To-Do List Widget</h3>
                                    </div>
                                    <ul class="panel-body list-group nopadding">
                                        <li class="list-group-item">
                                              <div class="ckbox ckbox-default">
                                                  <input type="checkbox" id="washcar" value="1">
                                                  <label for="washcar">Wash car in neighbors house</label>
                                              </div>
                                        </li>
                                        <li class="list-group-item">
                                              <div class="ckbox ckbox-default">
                                                  <input type="checkbox" checked="checked" id="eatpizza" value="1">
                                                  <label for="eatpizza">Find and eat pizza anywhere</label>
                                              </div>
                                        </li>
                                        <li class="list-group-item">
                                              <div class="ckbox ckbox-default">
                                                  <input type="checkbox" checked="checked" id="washdish" value="1">
                                                  <label for="washdish">Wash the dishes and map the floor</label>
                                              </div>
                                        </li>
                                        <li class="list-group-item">
                                              <div class="ckbox ckbox-default">
                                                  <input type="checkbox" id="buyclothes" value="1">
                                                  <label for="buyclothes">Buy some clothes</label>
                                              </div>
                                        </li>
                                        <li class="list-group-item">
                                              <div class="ckbox ckbox-default">
                                                  <input type="checkbox" checked="checked" id="throw" value="1">
                                                  <label for="throw">Throw the garbage</label>
                                              </div>
                                        </li>
                                        <li class="list-group-item">
                                              <div class="ckbox ckbox-default">
                                                  <input type="checkbox" id="reply" value="1">
                                                  <label for="reply">Reply all emails for this week</label>
                                              </div>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- col-md-4 -->
                        </div><!-- row -->
                        
                        <div class="row row-dashboard">
                            <div class="col-md-6">
                                <!-- BASIC WIZARD -->
                                <form method="post" id="basicWizard" class="panel-wizard">
                                    <ul class="nav nav-justified nav-wizard mt0">
                                        <li><a href="#tab1" data-toggle="tab"><strong>Step 1:</strong> Basic Info</a></li>
                                        <li><a href="#tab2" data-toggle="tab"><strong>Step 2:</strong> Product Info</a></li>
                                        <li><a href="#tab3" data-toggle="tab"><strong>Step 3:</strong> Payment</a></li>
                                    </ul>
                
                                    <div class="tab-content">
                                        <div class="tab-pane" id="tab1">
                                            <div class="form-group">
                                                <label class="col-sm-4">Firstname</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="firstname" class="form-control" />
                                                </div>
                                            </div><!-- form-group -->
                                            
                                            <div class="form-group">
                                                <label class="col-sm-4">Lastname</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="lastname" class="form-control" />
                                                </div>
                                            </div><!-- form-group -->
                                            
                                            <div class="form-group">
                                                <label class="col-sm-4">Gender</label>
                                                <div class="col-sm-8">
                                                    <div class="rdio rdio-primary">
                                                        <input type="radio" checked="checked" id="male" value="m" name="radio">
                                                        <label for="male">Male</label>
                                                    </div>
                                                    <div class="rdio rdio-primary">
                                                        <input type="radio" value="f" id="female" name="radio">
                                                        <label for="female">Female</label>
                                                    </div>
                                                </div>
                                            </div><!-- form-group -->
                                        </div><!-- tab-pane -->
                                        
                                        <div class="tab-pane" id="tab2">
                                            <div class="form-group">
                                                <label class="col-sm-4">Product ID</label>
                                                <div class="col-sm-5">
                                                    <input type="text" name="product_id" class="form-control" />
                                                </div>
                                            </div><!-- form-group -->
                                            
                                            <div class="form-group">
                                                <label class="col-sm-4">Product Name</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="product_name" class="form-control" />
                                                </div>
                                            </div><!-- form-group -->
                                            
                                            <div class="form-group">
                                                <label class="col-sm-4">Category</label>
                                                <div class="col-sm-4">
                                                    <select class="width100p" data-placeholder="Choose One">
                                                        <option value="">Choose One</option>
                                                        <option value="">3D Animation</option>
                                                        <option value="">Web Design</option>
                                                        <option value="">Software Engineering</option>
                                                    </select>
                                                </div>
                                            </div><!-- form-group -->
                                        </div><!-- tab-pane -->
                                        
                                        <div class="tab-pane" id="tab3">
                                            <div class="form-group">
                                                <label class="col-sm-4">Card No</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="cardno" class="form-control" />
                                                </div>
                                            </div><!-- form-group -->
                      
                                            <div class="form-group">
                                                <label class="col-sm-4">Expiration</label>
                                                <div class="col-sm-4">
                                                    <select class="width100p" data-placeholder="Month">
                                                        <option value="">Choose One</option>
                                                        <option value="">January</option>
                                                        <option value="">February</option>
                                                        <option value="">March</option>
                                                        <option value="">...</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-4">
                                                    <select class="width100p" data-placeholder="Year">
                                                        <option value="">Choose One</option>
                                                        <option value="">2013</option>
                                                        <option value="">2014</option>
                                                        <option value="">2015</option>
                                                        <option value="">...</option>
                                                    </select>
                                                </div>
                                            </div><!-- form-group -->
                      
                                            <div class="form-group">
                                                <label class="col-sm-4">CSV</label>
                                                <div class="col-sm-4">
                                                    <input type="text" name="csv" class="form-control" />
                                                </div>
                                            </div><!-- form-group -->
                                        </div><!-- tab-pane -->
                                    </div><!-- tab-content -->
                
                                    <ul class="list-unstyled wizard">
                                        <li class="pull-left previous"><button type="button" class="btn btn-default">Previous</button></li>
                                        <li class="pull-right next"><button type="button" class="btn btn-primary">Next</button></li>
                                        <li class="pull-right finish hide"><button type="submit" class="btn btn-primary">Finish</button></li>
                                    </ul>
                                    
                                </form><!-- #basicWizard -->
                            </div><!-- col-md-6 -->
                            
                            <div class="col-md-6">
                                <div class="panel-group" id="accordion2">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion2" href="#collapseOne2">
                                                    Collapsible Group Item #1
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseOne2" class="panel-collapse collapse in">
                                            <div class="panel-body">
                                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.</p>
                                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.</p>
                                            </div>
                                        </div>
                                    </div><!-- panel -->
                                    
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" class="collapsed" data-parent="#accordion2" href="#collapseTwo2">
                                                    Collapsible Group Item #2
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseTwo2" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                            </div>
                                        </div>
                                    </div><!-- panel -->
                                    
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" class="collapsed" data-parent="#accordion2" href="#collapseThree2">
                                                    Collapsible Group Item #3
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseThree2" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.</p>
                                                <p>Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
                                            </div>
                                        </div>
                                    </div><!-- panel -->
                                    
                                </div><!-- panel-group -->
                            </div>
                        </div><!-- row -->
                        
                    </div><!-- contentpanel -->
                    
                </div><!-- mainpanel -->
            </div><!-- mainwrapper -->
        </section>

<?php require_once (ROOT."/views/layouts/footer.php");?>
 
