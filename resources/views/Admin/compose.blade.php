<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from adminpix.thememinister.com/compose.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Nov 2018 16:46:28 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Adminpix</title>
        <link rel="shortcut icon" href="assets/dist/img/favicon.png" type="image/x-icon">
        <script src="../ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
        <script>
            WebFont.load({
                google: {families: ['Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i']},
                active: function () {
                    sessionStorage.fonts = true;
                }
            });
        </script>
        <!-- START GLOBAL MANDATORY STYLE -->
        <link href="assets/dist/css/base.css" rel="stylesheet" type="text/css">
        <!-- START PAGE LABEL PLUGINS --> 
        <link href="assets/plugins/summernote/summernote.css" rel="stylesheet" type="text/css"/>
        <!-- START THEME LAYOUT STYLE -->
        <link href="assets/dist/css/style.css" rel="stylesheet" type="text/css"/>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="hold-transition fixed sidebar-mini">
        
        <!-- Preloader -->
        <div class="preloader"></div>
        
        <!-- Site wrapper -->
        <div class="wrapper">
            <header class="main-header"> 
                <a href="index.html" class="logo"> <!-- Logo -->
                    <span class="logo-mini">
                        <!--<b>A</b>H-admin-->
                        <img src="assets/dist/img/logo-mini.png" alt="img">
                    </span>
                    <span class="logo-lg">
                        <!--<b>Admin</b>H-admin-->
                        <img src="assets/dist/img/logo.png" alt="img">
                    </span>
                </a>
                <!-- Header Navbar -->
                <nav class="navbar navbar-static-top">
                    <a href="#" class="sidebar-toggle hidden-sm hidden-md hidden-lg" data-toggle="offcanvas" role="button"> <!-- Sidebar toggle button-->
                        <span class="sr-only">Toggle navigation</span>
                        <span class="ti-menu-alt"></span>
                    </a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <li>
                                <form class="navbar-form hidden-xs" role="search">
                                    <div class="input-group add-on">
                                        <input class="form-control" placeholder="Search" name="srch-term" id="srch-term" type="text">
                                        <div class="input-group-btn">
                                            <button class="btn btn-default" type="submit" data-toggle="tooltip" data-placement="bottom" title="Search"><i class="ti-search"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </li>
                            <li class="dropdown dropdown-settings">
                                <a href="#" class="dropdown-toggle bubbly-button" data-toggle="dropdown"> <i class="fa fa-bell-o"></i><span class="badge fadeAnim">2</span></a>
                                <div class="notification-box dropdown-menu animated bounceIn">
                                    <div class="notification-header">
                                        <h4>2 new notifications</h4>
                                        <a href="#">clear all</a>
                                    </div>
                                    <div class="notification-body">
                                        <ul class="notification_inner">
                                            <li>
                                              <a href="#" class="single-notification">
                                                 <div class="notification-img">
                                                    <i class="fa fa-commenting"></i>
                                                 </div>
                                                 <div class="notification-txt">
                                                    <h4>3 new comments</h4>
                                                    <span>40 seconds ago</span>
                                                 </div>
                                              </a>
                                            </li>
                                            <li>
                                              <a href="#" class="single-notification">
                                                 <div class="notification-img">
                                                    <i class="fa fa-envelope-o"></i>
                                                 </div>
                                                 <div class="notification-txt">
                                                    <h4>You have received 1 email</h4>
                                                    <span>5 minutes ago</span>
                                                 </div>
                                              </a>
                                           </li>
                                           <li>
                                              <a href="#" class="single-notification">
                                                 <div class="notification-img">
                                                    <i class="fa fa-usd"></i>
                                                 </div>
                                                 <div class="notification-txt">
                                                    <h4>You have transferred $50</h4>
                                                    <span>8 minutes ago</span>
                                                 </div>
                                              </a>
                                           </li>
                                           <li>
                                              <a href="#" class="single-notification">
                                                 <div class="notification-img">
                                                    <i class="fa fa-thumbs-up"></i>
                                                 </div>
                                                 <div class="notification-txt">
                                                    <h4>Someone likes your post</h4>
                                                    <span>13 minutes ago</span>
                                                 </div>
                                              </a>
                                           </li>
                                           <li>
                                              <a href="#" class="single-notification">
                                                 <div class="notification-img">
                                                    <i class="fa fa-ban "></i>
                                                 </div>
                                                 <div class="notification-txt">
                                                    <h4>Someone banned your post</h4>
                                                    <span>20 minutes ago</span>
                                                 </div>
                                              </a>
                                           </li>
                                           <li>
                                              <a href="#" class="single-notification">
                                                 <div class="notification-img">
                                                    <i class="fa fa-trash"></i>
                                                 </div>
                                                 <div class="notification-txt">
                                                    <h4>Someone deleted your post</h4>
                                                    <span>36 minutes ago</span>
                                                 </div>
                                              </a>
                                           </li>
                                        </ul>
                                    </div>
                                    <div class="notification-footer">
                                        <a href="#">see all notification<i class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown dropdown-settings">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="ti-email"></i><span class="badge fadeAnim">3</span></a>
                                <div class="dropdown-menu msg_box">
                                    <div class="message-header">
                                        <h4>3 new messages</h4>
                                    </div>
                                    <div class="message-body">
                                        <div class=message_inner2>
                                            <div class=message_widgets>
                                                <a href="#">
                                                    <div class=inbox-item>
                                                        <div class=inbox-item-img><img src="assets/dist/img/avatar.png" class=img-circle alt=""></div>
                                                        <strong class=inbox-item-author>Farzana Yasmin</strong>
                                                        <span class=inbox-item-date>-13:40 PM</span>
                                                        <p class=inbox-item-text>Hey! there I'm available...</p>
                                                        <span class="profile-status available pull-right"></span>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class=inbox-item>
                                                        <div class=inbox-item-img><img src="assets/dist/img/avatar2.png" class=img-circle alt=""></div>
                                                        <strong class=inbox-item-author>Mubin Khan</strong>
                                                        <span class=inbox-item-date>-13:40 PM</span>
                                                        <p class=inbox-item-text>Hey! there I'm available...</p>
                                                        <span class="profile-status away pull-right"></span>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class=inbox-item>
                                                        <div class=inbox-item-img><img src="assets/dist/img/avatar3.png" class=img-circle alt=""></div>
                                                        <strong class=inbox-item-author>Mozammel Hoque</strong>
                                                        <span class=inbox-item-date>-13:40 PM</span>
                                                        <p class=inbox-item-text>Hey! there I'm available...</p>
                                                        <span class="profile-status busy pull-right"></span>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class=inbox-item>
                                                        <div class=inbox-item-img><img src="assets/dist/img/avatar4.png" class=img-circle alt=""></div>
                                                        <strong class=inbox-item-author>Tanzil Ahmed</strong>
                                                        <span class=inbox-item-date>-13:40 PM</span>
                                                        <p class=inbox-item-text>Hey! there I'm  available...</p>
                                                        <span class="profile-status offline pull-right"></span>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class=inbox-item>
                                                        <div class=inbox-item-img><img src="assets/dist/img/avatar5.png" class=img-circle alt=""></div>
                                                        <strong class=inbox-item-author>Amir Khan</strong>
                                                        <span class=inbox-item-date>-13:40 PM</span>
                                                        <p class=inbox-item-text>Hey! there I'm available...</p>
                                                        <span class="profile-status available pull-right"></span>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class=inbox-item>
                                                        <div class=inbox-item-img><img src="assets/dist/img/avatar.png" class=img-circle alt=""></div>
                                                        <strong class=inbox-item-author>Salman Khan</strong>
                                                        <span class=inbox-item-date>-13:40 PM</span>
                                                        <p class=inbox-item-text>Hey! there I'm available...</p>
                                                        <span class="profile-status available pull-right"></span>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class=inbox-item>
                                                        <div class=inbox-item-img><img src="assets/dist/img/avatar.png" class=img-circle alt=""></div>
                                                        <strong class=inbox-item-author>Farzana Yasmin</strong>
                                                        <span class=inbox-item-date>-13:40 PM</span>
                                                        <p class=inbox-item-text>Hey! there I'm available...</p>
                                                        <span class="profile-status available pull-right"></span>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class=inbox-item>
                                                        <div class=inbox-item-img><img src="assets/dist/img/avatar4.png" class=img-circle alt=""></div>
                                                        <strong class=inbox-item-author>Tanzil Ahmed</strong>
                                                        <span class=inbox-item-date>-13:40 PM</span>
                                                        <p class=inbox-item-text>Hey! there I'm available...</p>
                                                        <span class="profile-status offline pull-right"></span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="message-footer">
                                        <a href="#">see all messages<i class="fa fa-long-arrow-right"></i></a>
                                     </div>
                                </div>
                            </li>
                            <li class="dropdown dropdown-settings">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="ti-menu"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Superadmin</a></li>
                                    <li><a href="#">Admin</a></li>
                                    <li><a href="#">HR</a></li>
                                    <li><a href="#">Manager</a></li>
                                    <li><a href="#">Editor</a></li>
                                    <li><a href="#">Subscriber</a></li>
                                    <li><a href="#">User</a></li>
                                </ul>
                            </li>
                            <li class="dropdown dropdown-user">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="ti-user"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="profile.html"><i class="ti-user"></i> User Profile</a></li>
                                    <li><a href="#"><i class="ti-settings"></i> Settings</a></li>
                                    <li><a href="login.html"><i class="ti-key"></i> Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
                <aside class="main-sidebar">
                    <!-- sidebar -->
                    <div class="sidebar">
                        <!-- sidebar menu -->
                        <ul class="sidebar-menu">
                            <li class="treeview">
                                <a href="index.html">
                                    <i class="ti-home"></i><span>Dashboard</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="index.html">Dashboard One</a></li>
                                    <li><a href="index2.html">Dashboard Two</a></li>
                                    <li><a href="index3.html">Dashboard Three</a></li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="ti-pencil-alt"></i> <span>Forms</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="forms_basic.html">Basic Forms</a></li>
                                    <li><a href="forms_validation.html">Validation Forms</a></li>
                                    <li><a href="form_input_group.html">Input Group</a></li>
                                    <li><a href="form_mask.html">Form Mask</a></li>
                                    <li><a href="form_select.html">Select</a></li>
                                    <li><a href="form_touchspin.html">Touchspin</a></li>
                                    <li><a href="forms_cropper.html">Cropper</a></li>
                                    <li><a href="forms_editor_ck.html">CK Editor</a></li>
                                    <li><a href="forms_editor_summernote.html">Summernote</a></li>
                                    <li><a href="forms_editor_markdown.html">Markdown</a></li>
                                    <li><a href="forms_editor_trumbowyg.html">Trumbowyg</a></li>
                                    <li><a href="forms_wysihtml5.html">Wysihtml5</a></li>
                                    <li>
                                        <a href="#">Form Wizard
                                            <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                                        </a>
                                        <ul class="treeview-menu">
                                            <li><a href="form_wizard.html">Wizard One</a></li>
                                            <li><a href="form_wizard2.html">Wizard Two</a></li>
                                            <li><a href="form_wizard3.html">Wizard Three</a></li>
                                            <li><a href="form_wizard4.html">Wizard Four</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="ti-notepad"></i> <span>Table</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="table.html">Simple Table</a></li>
                                    <li><a href="data-table.html">Data Table</a></li>
                                    <li><a href="footable.html">Foo Table</a></li>
                                    <li><a href="x-editable.html">X-Editable</a></li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-sort-alpha-desc"></i> <span>UI Elements</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="typography.html">Typography</a></li>
                                    <li><a href="button.html">Buttons</a></li>
                                    <li><a href="notification.html">Notification</a></li>
                                    <li><a href="panels.html">Panels</a></li>
                                    <li><a href="tabs.html">Tab</a></li>
                                    <li><a href="modals.html">Modals</a></li>
                                    <li><a href="progressbars.html">Progressber</a></li>
                                    <li><a href="list.html">List View</a></li>
                                    <li><a href="icheck_toggle_pagination.html">iCheck, Toggle</a></li>
                                    <li><a href="label-badge-alert.html">labels, Badges</a></li>
                                    <li><a href="treeview.html">Tree View</a></li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-bar-chart"></i> <span>Charts</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="chart-float.html">Float Chart</a></li>
                                    <li><a href="chart_morris.html">Morris Chart</a></li>
                                    <li><a href="charts_js.html">Chart JS</a></li>
                                    <li><a href="charts_am.html">Am Chart</a></li>
                                    <li><a href="charts_sparklin.html">Chart Sparklin</a></li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-font-awesome"></i> <span>Icons</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="icons-bootstrap.html"><i class="fa fa-bold"></i>Bootstrap Icons</a></li>
                                    <li><a href="icons-fontawesome.html"><i class="fa fa-font-awesome"></i>Fontawesome</a></li>
                                    <li><a href="icons-flag.html"><i class="fa fa-flag-checkered"></i>Flag Icons</a></li>
                                    <li><a href="icons-material.html"><i class="fa fa-meetup"></i>Material Icons</a></li>
                                    <li><a href="icons-weather.html"><i class="fa fa-bolt"></i>Weather Icons </a></li>
                                    <li><a href="icons-line.html"><i class="fa fa-lemon-o"></i>Line Icons</a></li>
                                    <li><a href="icons-pe.html"><i class="fa fa-diamond"></i>Pe Icons</a></li>
                                    <li><a href="icons-socicon.html"><i class="fa fa-share-alt"></i>Socicon Icons</a></li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="ti-location-pin"></i> <span>Maps</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="maps_amcharts.html">Amcharts Maps</a></li>
                                    <li><a href="maps_data.html">Data Maps</a></li>
                                    <li><a href="maps_jvector.html">Jvector Maps</a></li>
                                    <li><a href="maps_google.html">Google map</a></li>
                                    <li><a href="maps_snazzy.html">Snazzy Map</a></li>
                                </ul>
                            </li>
                            <li class="treeview active">
                                <a href="#">
                                    <i class="ti-email"></i> <span>Mailbox</span>  
                                    <span class="pull-right-container">   
                                        <i class="fa fa-angle-left pull-right"></i>  
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="mailbox.html">Mailbox</a></li>
                                    <li><a href="maildetails.html">Mailbox Details</a></li>
                                    <li class="active"><a href="compose.html">Compose</a></li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="ti-mobile"></i> <span>App View</span>  
                                    <span class="pull-right-container">   
                                        <i class="fa fa-angle-left pull-right"></i>  
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="invoice.html">Invoice</a></li>
                                    <li><a href="timeline.html">Vertical timeline</a></li>
                                    <li><a href="horizontal_timeline.html">Horizontal timeline</a></li>
                                    <li><a href="pricing.html">Pricing Table</a></li>
                                    <li><a href="slider.html">Slider</a></li>
                                    <li><a href="carousel.html">Carousel</a></li>
                                    <li><a href="code_editor.html">Code editor</a></li>
                                    <li><a href="gridSystem.html">Grid System</a></li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="ti-agenda"></i><span>Other pages</span>  
                                    <span class="pull-right-container">   
                                        <i class="fa fa-angle-left pull-right"></i>  
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="register.html">Register</a></li>
                                    <li><a href="profile.html">Profile</a></li>
                                    <li><a href="forget_password.html">Forget password</a></li>
                                    <li><a href="lockscreen.html">Lockscreen</a></li>
                                    <li><a href="404.html">404 Error</a></li>
                                    <li><a href="505.html">505 Error</a></li>
                                </ul>
                            </li>
                            <li><a href="calender.html"><i class="fa fa-calendar"></i>Calender</a></li>
                            <li><a href="blank.html"><i class="fa fa-file-o"></i>Blank Page</a></li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="ti-direction-alt"></i> <span>Multilevel</span>
                                    <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="#">Level One</a></li>
                                    <li>
                                        <a href="#">Level One
                                            <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                                        </a>
                                        <ul class="treeview-menu">
                                            <li><a href="#"> Level Two</a></li>
                                            <li>
                                                <a href="#">Level Two
                                                    <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                                                </a>
                                                <ul class="treeview-menu">
                                                    <li><a href="#">Level Three</a></li>
                                                    <li><a href="#">Level Three</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Level One</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div> <!-- /.sidebar -->
                </aside>
            </header>
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Main content -->
                <div class="content">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="mailbox">
                                <div class="mailbox-header">
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <div class="inbox-avatar"><img src="assets/dist/img/user2-160x160.png" class="img-circle border-green" alt="img">
                                                <div class="inbox-avatar-text hidden-xs hidden-sm">
                                                    <div class="avatar-name">Tanzil Ahmed</div>
                                                    <div><small>Mailbox</small></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-8">
                                            <div class="inbox-toolbar btn-toolbar">
                                                <div class="btn-group">
                                                    <a href="mailbox.html" class="btn btn-default"><span class="fa fa-long-arrow-left"></span></a>
                                                    <a href="#" class="hidden-xs hidden-sm btn btn-default"><span class="fa fa-reply-all"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mailbox-body">
                                    <div class="row m-0">
                                        <div class="col-sm-3 p-0 inbox-nav hidden-xs hidden-sm">
                                            <div class="mailbox-sideber">
                                                <div class="profile-usermenu">
                                                    <h6>Mailbox</h6>
                                                    <ul class="nav">
                                                        <li><a href="#"><i class="fa fa-inbox"></i>Inbox <small class="label pull-right bg-green">61</small></a></li>
                                                        <li class="active"><a href="compose.html"><i class="fa fa-envelope-o"></i>Send Mail</a></li>
                                                        <li><a href="#"><i class="fa fa-star-o"></i>Starred</a></li>
                                                        <li><a href="#"><i class="fa fa-trash-o"></i>Tresh </a></li>
                                                        <li><a href="#"><i class="fa fa-paperclip"></i>Attachments</a></li>
                                                    </ul>
                                                    <h6>Other</h6>
                                                    <ul class="nav">
                                                        <li><a href="#"><i class="fa fa-exclamation"></i>Spam</a></li>
                                                        <li><a href="#"><i class="fa fa-file-text-o"></i>Draft</a></li>
                                                    </ul>
                                                    <h6>Tags</h6>
                                                    <ul class="nav">
                                                        <li><a href="#"><i class="fa fa-circle color-green"></i>#sometag</a></li>
                                                        <li><a href="#"><i class="fa fa-circle color-red"></i>#anothertag</a></li>
                                                        <li><a href="#"><i class="fa fa-circle color-yellow"></i>#anotheronetag</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-9 p-0 inbox-mail p-20">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-md-2 col-form-label text-right">To :</label>
                                                <div class="col-sm-9 col-md-10">
                                                    <input class="form-control" type="text"  id="to">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-md-2 col-form-label text-right">Cc :</label>
                                                <div class="col-sm-9 col-md-10">
                                                    <input class="form-control" type="text" id="cc">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-md-2 col-form-label text-right">Subject :</label>
                                                <div class="col-sm-9 col-md-10">
                                                    <input class="form-control" type="text" id="subjejct">
                                                </div>
                                            </div>
                                            <!-- summernote -->
                                            <div id="summernote"></div>
                                            <div class="hidden-xs hidden-sm btn-group">
                                                <button type="button" class="text-center btn btn-default">DISCARD</button>
                                                <button type="button" class="btn btn-default">SAVE</button>
                                            </div>
                                            <div class="btn-group pull-right">
                                                <button type="button" class="btn btn-base">SEND</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="main-footer">
                <div class="pull-right hidden-xs">Adminpix</div>
                <strong>Copyright &copy; 2018</strong> All rights reserved. <i class="fa fa-heart color-green"></i>
            </footer>
        </div> <!-- ./wrapper -->
        <!-- START CORE PLUGINS -->
        <script src="assets/plugins/jQuery/jquery-1.12.4.min.js"></script>
        <script src="assets/plugins/jquery-ui-1.12.1/jquery-ui.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
        <script src="assets/plugins/fastclick/fastclick.min.js"></script>
        <script src="assets/plugins/metisMenu/metisMenu.min.js"></script>
        <script src="assets/plugins/lobipanel/lobipanel.min.js"></script>
        <!-- Summernote Js -->
        <script src="assets/plugins/summernote/summernote.js"></script>
        <script src="assets/plugins/summernote/summernote-active.js"></script>
        <!-- START THEME LABEL SCRIPT -->
        <script src="assets/dist/js/theme.js"></script>
    </body>

<!-- Mirrored from adminpix.thememinister.com/compose.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Nov 2018 16:46:29 GMT -->
</html>