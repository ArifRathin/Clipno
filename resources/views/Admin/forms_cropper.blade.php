<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from adminpix.thememinister.com/forms_cropper.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Nov 2018 16:44:55 GMT -->
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
        <link href="assets/plugins/cropper/cropper.min.css" rel="stylesheet" type="text/css">
        <link href="assets/plugins/cropper/main.css" rel="stylesheet" type="text/css">
        <!-- START THEME LAYOUT STYLE -->
        <link href="assets/dist/css/style.css" rel="stylesheet" type="text/css">
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
                                     
                                    <li><a href="#">HMIS</a></li>
                                    <li><a href="#">Inventory</a></li>
                                    <li><a href="#">Child</a></li>
                                    <li><a href="#">Family</a></li>
                                    <li><a href="#">Education</a></li>
                                    <li><a href="#">CAP</a></li>
                                    <li><a href="#">DV</a></li>
                                    <li><a href="#">Report</a></li>
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
                            <li class="treeview active">
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
                                    <li class="active"><a href="forms_cropper.html">Cropper</a></li>
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
                            <li class="treeview">
                                <a href="#">
                                    <i class="ti-email"></i> <span>Mailbox</span>  
                                    <span class="pull-right-container">   
                                        <i class="fa fa-angle-left pull-right"></i>  
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="mailbox.html">Mailbox</a></li>
                                    <li><a href="maildetails.html">Mailbox Details</a></li>
                                    <li><a href="compose.html">Compose</a></li>
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
                            <div class="panel panel-bd lobidrag">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Cropper</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <!-- Content -->
                                    <div class="row">
                                        <div class="col-md-9">
                                            <!-- <h3 class="page-header">Demo:</h3> -->
                                            <div class="img-container">
                                                <img id="image" src="assets/dist/img/cropper.jpg" alt="Picture">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <!-- <h3 class="page-header">Preview:</h3> -->
                                            <div class="docs-preview clearfix">
                                                <div class="img-preview preview-lg"></div>
                                                <div class="img-preview preview-md"></div>
                                                <div class="img-preview preview-sm"></div>
                                                <div class="img-preview preview-xs"></div>
                                            </div>
                                            <!-- <h3 class="page-header">Data:</h3> -->
                                            <div class="docs-data">
                                                <div class="input-group input-group-sm">
                                                    <label class="input-group-addon" for="dataX">X</label>
                                                    <input type="text" class="form-control" id="dataX" placeholder="x">
                                                    <span class="input-group-addon">px</span>
                                                </div>
                                                <div class="input-group input-group-sm">
                                                    <label class="input-group-addon" for="dataY">Y</label>
                                                    <input type="text" class="form-control" id="dataY" placeholder="y">
                                                    <span class="input-group-addon">px</span>
                                                </div>
                                                <div class="input-group input-group-sm">
                                                    <label class="input-group-addon" for="dataWidth">Width</label>
                                                    <input type="text" class="form-control" id="dataWidth" placeholder="width">
                                                    <span class="input-group-addon">px</span>
                                                </div>
                                                <div class="input-group input-group-sm">
                                                    <label class="input-group-addon" for="dataHeight">Height</label>
                                                    <input type="text" class="form-control" id="dataHeight" placeholder="height">
                                                    <span class="input-group-addon">px</span>
                                                </div>
                                                <div class="input-group input-group-sm">
                                                    <label class="input-group-addon" for="dataRotate">Rotate</label>
                                                    <input type="text" class="form-control" id="dataRotate" placeholder="rotate">
                                                    <span class="input-group-addon">deg</span>
                                                </div>
                                                <div class="input-group input-group-sm">
                                                    <label class="input-group-addon" for="dataScaleX">ScaleX</label>
                                                    <input type="text" class="form-control" id="dataScaleX" placeholder="scaleX">
                                                </div>
                                                <div class="input-group input-group-sm">
                                                    <label class="input-group-addon" for="dataScaleY">ScaleY</label>
                                                    <input type="text" class="form-control" id="dataScaleY" placeholder="scaleY">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-9 docs-buttons">
                                            <!-- <h3 class="page-header">Toolbar:</h3> -->
                                            <div class="btn-group">
                                                <button type="button" class="btn wysi-btn" data-method="setDragMode" data-option="move" title="Move">
                                                    <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;setDragMode&quot;, &quot;move&quot;)">
                                                        <span class="fa fa-arrows"></span>
                                                    </span>
                                                </button>
                                                <button type="button" class="btn wysi-btn" data-method="setDragMode" data-option="crop" title="Crop">
                                                    <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;setDragMode&quot;, &quot;crop&quot;)">
                                                        <span class="fa fa-crop"></span>
                                                    </span>
                                                </button>
                                                <button type="button" class="btn wysi-btn" data-method="zoom" data-option="0.1" title="Zoom In">
                                                    <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;zoom&quot;, 0.1)">
                                                        <span class="fa fa-search-plus"></span>
                                                    </span>
                                                </button>
                                                <button type="button" class="btn wysi-btn" data-method="zoom" data-option="-0.1" title="Zoom Out">
                                                    <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;zoom&quot;, -0.1)">
                                                        <span class="fa fa-search-minus"></span>
                                                    </span>
                                                </button>
                                                <button type="button" class="btn wysi-btn" data-method="move" data-option="-10" data-second-option="0" title="Move Left">
                                                    <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;move&quot;, -10, 0)">
                                                        <span class="fa fa-arrow-left"></span>
                                                    </span>
                                                </button>
                                                <button type="button" class="btn wysi-btn" data-method="move" data-option="10" data-second-option="0" title="Move Right">
                                                    <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;move&quot;, 10, 0)">
                                                        <span class="fa fa-arrow-right"></span>
                                                    </span>
                                                </button>
                                                <button type="button" class="btn wysi-btn" data-method="move" data-option="0" data-second-option="-10" title="Move Up">
                                                    <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;move&quot;, 0, -10)">
                                                        <span class="fa fa-arrow-up"></span>
                                                    </span>
                                                </button>
                                                <button type="button" class="btn wysi-btn" data-method="move" data-option="0" data-second-option="10" title="Move Down">
                                                    <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;move&quot;, 0, 10)">
                                                        <span class="fa fa-arrow-down"></span>
                                                    </span>
                                                </button>
                                            </div>

                                            <div class="btn-group">
                                                <button type="button" class="btn wysi-btn" data-method="rotate" data-option="-45" title="Rotate Left">
                                                    <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;rotate&quot;, -45)">
                                                        <span class="fa fa-rotate-left"></span>
                                                    </span>
                                                </button>
                                                <button type="button" class="btn wysi-btn" data-method="rotate" data-option="45" title="Rotate Right">
                                                    <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;rotate&quot;, 45)">
                                                        <span class="fa fa-rotate-right"></span>
                                                    </span>
                                                </button>
                                            </div>

                                            <div class="btn-group">
                                                <button type="button" class="btn wysi-btn" data-method="scaleX" data-option="-1" title="Flip Horizontal">
                                                    <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;scaleX&quot;, -1)">
                                                        <span class="fa fa-arrows-h"></span>
                                                    </span>
                                                </button>
                                                <button type="button" class="btn wysi-btn" data-method="scaleY" data-option="-1" title="Flip Vertical">
                                                    <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;scaleY&quot;-1)">
                                                        <span class="fa fa-arrows-v"></span>
                                                    </span>
                                                </button>
                                            </div>

                                            <div class="btn-group">
                                                <button type="button" class="btn wysi-btn" data-method="crop" title="Crop">
                                                    <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;crop&quot;)">
                                                        <span class="fa fa-check"></span>
                                                    </span>
                                                </button>
                                                <button type="button" class="btn wysi-btn" data-method="clear" title="Clear">
                                                    <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;clear&quot;)">
                                                        <span class="fa fa-remove"></span>
                                                    </span>
                                                </button>
                                            </div>

                                            <div class="btn-group">
                                                <button type="button" class="btn wysi-btn" data-method="disable" title="Disable">
                                                    <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;disable&quot;)">
                                                        <span class="fa fa-lock"></span>
                                                    </span>
                                                </button>
                                                <button type="button" class="btn wysi-btn" data-method="enable" title="Enable">
                                                    <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;enable&quot;)">
                                                        <span class="fa fa-unlock"></span>
                                                    </span>
                                                </button>
                                            </div>

                                            <div class="btn-group">
                                                <button type="button" class="btn wysi-btn" data-method="reset" title="Reset">
                                                    <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;reset&quot;)">
                                                        <span class="fa fa-refresh"></span>
                                                    </span>
                                                </button>
                                                <label class="btn wysi-btn btn-upload" for="inputImage" title="Upload image file">
                                                    <input type="file" class="sr-only" id="inputImage" name="file" accept="image/*">
                                                    <span class="docs-tooltip" data-toggle="tooltip" title="Import image with Blob URLs">
                                                        <span class="fa fa-upload"></span>
                                                    </span>
                                                </label>
                                                <button type="button" class="btn wysi-btn" data-method="destroy" title="Destroy">
                                                    <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;destroy&quot;)">
                                                        <span class="fa fa-power-off"></span>
                                                    </span>
                                                </button>
                                            </div>

                                            <div class="btn-group btn-group-crop">
                                                <button type="button" class="btn wysi-btn" data-method="getCroppedCanvas">
                                                    <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getCroppedCanvas&quot;)">
                                                        Get Cropped Canvas
                                                    </span>
                                                </button>
                                                <button type="button" class="btn wysi-btn" data-method="getCroppedCanvas" data-option="{ &quot;width&quot;: 160, &quot;height&quot;: 90 }">
                                                    <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getCroppedCanvas&quot;, { width: 160, height: 90 })">
                                                        160&times;90
                                                    </span>
                                                </button>
                                                <button type="button" class="btn wysi-btn" data-method="getCroppedCanvas" data-option="{ &quot;width&quot;: 320, &quot;height&quot;: 180 }">
                                                    <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getCroppedCanvas&quot;, { width: 320, height: 180 })">
                                                        320&times;180
                                                    </span>
                                                </button>
                                            </div>

                                            <!-- Show the cropped image in modal -->
                                            <div class="modal fade docs-cropped" id="getCroppedCanvasModal" aria-hidden="true" aria-labelledby="getCroppedCanvasTitle" role="dialog" tabindex="-1">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                            <h4 class="modal-title" id="getCroppedCanvasTitle">Cropped</h4>
                                                        </div>
                                                        <div class="modal-body"></div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                            <a class="btn btn-primary" id="download" href="javascript:void(0);" download="cropped.html">Download</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- /.modal -->

                                            <button type="button" class="btn wysi-btn" data-method="getData" data-option data-target="#putData">
                                                <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getData&quot;)">
                                                    Get Data
                                                </span>
                                            </button>
                                            <button type="button" class="btn wysi-btn" data-method="setData" data-target="#putData">
                                                <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;setData&quot;, data)">
                                                    Set Data
                                                </span>
                                            </button>
                                            <button type="button" class="btn wysi-btn" data-method="getContainerData" data-option data-target="#putData">
                                                <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getContainerData&quot;)">
                                                    Get Container Data
                                                </span>
                                            </button>
                                            <button type="button" class="btn wysi-btn" data-method="getImageData" data-option data-target="#putData">
                                                <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getImageData&quot;)">
                                                    Get Image Data
                                                </span>
                                            </button>
                                            <button type="button" class="btn wysi-btn" data-method="getCanvasData" data-option data-target="#putData">
                                                <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getCanvasData&quot;)">
                                                    Get Canvas Data
                                                </span>
                                            </button>
                                            <button type="button" class="btn wysi-btn" data-method="setCanvasData" data-target="#putData">
                                                <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;setCanvasData&quot;, data)">
                                                    Set Canvas Data
                                                </span>
                                            </button>
                                            <button type="button" class="btn wysi-btn" data-method="getCropBoxData" data-option data-target="#putData">
                                                <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getCropBoxData&quot;)">
                                                    Get Crop Box Data
                                                </span>
                                            </button>
                                            <button type="button" class="btn wysi-btn" data-method="setCropBoxData" data-target="#putData">
                                                <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;setCropBoxData&quot;, data)">
                                                    Set Crop Box Data
                                                </span>
                                            </button>
                                            <button type="button" class="btn wysi-btn" data-method="moveTo" data-option="0">
                                                <span class="docs-tooltip" data-toggle="tooltip" title="cropper.moveTo(0)">
                                                    0,0
                                                </span>
                                            </button>
                                            <button type="button" class="btn wysi-btn" data-method="zoomTo" data-option="1">
                                                <span class="docs-tooltip" data-toggle="tooltip" title="cropper.zoomTo(1)">
                                                    100%
                                                </span>
                                            </button>
                                            <button type="button" class="btn wysi-btn" data-method="rotateTo" data-option="180">
                                                <span class="docs-tooltip" data-toggle="tooltip" title="cropper.rotateTo(180)">
                                                    180°
                                                </span>
                                            </button>
                                            <input type="text" class="form-control" id="putData" placeholder="Get data to here or set data with this value">
                                        </div><!-- /.docs-buttons -->
                                        <div class="col-md-3 docs-toggles">
                                            <!-- <h3 class="page-header">Toggles:</h3> -->
                                            <div class="btn-group btn-group-justified" data-toggle="buttons">
                                                <label class="btn wysi-btn active">
                                                    <input type="radio" class="sr-only" id="aspectRatio0" name="aspectRatio" value="1.7777777777777777">
                                                    <span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: 16 / 9">
                                                        16:9
                                                    </span>
                                                </label>
                                                <label class="btn wysi-btn">
                                                    <input type="radio" class="sr-only" id="aspectRatio1" name="aspectRatio" value="1.3333333333333333">
                                                    <span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: 4 / 3">
                                                        4:3
                                                    </span>
                                                </label>
                                                <label class="btn wysi-btn">
                                                    <input type="radio" class="sr-only" id="aspectRatio2" name="aspectRatio" value="1">
                                                    <span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: 1 / 1">
                                                        1:1
                                                    </span>
                                                </label>
                                                <label class="btn wysi-btn">
                                                    <input type="radio" class="sr-only" id="aspectRatio3" name="aspectRatio" value="0.6666666666666666">
                                                    <span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: 2 / 3">
                                                        2:3
                                                    </span>
                                                </label>
                                                <label class="btn wysi-btn">
                                                    <input type="radio" class="sr-only" id="aspectRatio4" name="aspectRatio" value="NaN">
                                                    <span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: NaN">
                                                        Free
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="btn-group btn-group-justified" data-toggle="buttons">
                                                <label class="btn wysi-btn active">
                                                    <input type="radio" class="sr-only" id="viewMode0" name="viewMode" value="0" checked>
                                                    <span class="docs-tooltip" data-toggle="tooltip" title="View Mode 0">
                                                        VM0
                                                    </span>
                                                </label>
                                                <label class="btn wysi-btn">
                                                    <input type="radio" class="sr-only" id="viewMode1" name="viewMode" value="1">
                                                    <span class="docs-tooltip" data-toggle="tooltip" title="View Mode 1">
                                                        VM1
                                                    </span>
                                                </label>
                                                <label class="btn wysi-btn">
                                                    <input type="radio" class="sr-only" id="viewMode2" name="viewMode" value="2">
                                                    <span class="docs-tooltip" data-toggle="tooltip" title="View Mode 2">
                                                        VM2
                                                    </span>
                                                </label>
                                                <label class="btn wysi-btn">
                                                    <input type="radio" class="sr-only" id="viewMode3" name="viewMode" value="3">
                                                    <span class="docs-tooltip" data-toggle="tooltip" title="View Mode 3">
                                                        VM3
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="dropdown dropup docs-options">
                                                <button type="button" class="btn btn-primary btn-block dropdown-toggle" id="toggleOptions" data-toggle="dropdown">
                                                    Toggle Options
                                                    <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="toggleOptions" role="menu">
                                                    <li role="presentation">
                                                        <label class="checkbox-inline">
                                                            <input type="checkbox" name="responsive" checked>
                                                            responsive
                                                        </label>
                                                    </li>
                                                    <li role="presentation">
                                                        <label class="checkbox-inline">
                                                            <input type="checkbox" name="restore" checked>
                                                            restore
                                                        </label>
                                                    </li>
                                                    <li role="presentation">
                                                        <label class="checkbox-inline">
                                                            <input type="checkbox" name="checkCrossOrigin" checked>
                                                            checkCrossOrigin
                                                        </label>
                                                    </li>
                                                    <li role="presentation">
                                                        <label class="checkbox-inline">
                                                            <input type="checkbox" name="checkOrientation" checked>
                                                            checkOrientation
                                                        </label>
                                                    </li>

                                                    <li role="presentation">
                                                        <label class="checkbox-inline">
                                                            <input type="checkbox" name="modal" checked>
                                                            modal
                                                        </label>
                                                    </li>
                                                    <li role="presentation">
                                                        <label class="checkbox-inline">
                                                            <input type="checkbox" name="guides" checked>
                                                            guides
                                                        </label>
                                                    </li>
                                                    <li role="presentation">
                                                        <label class="checkbox-inline">
                                                            <input type="checkbox" name="center" checked>
                                                            center
                                                        </label>
                                                    </li>
                                                    <li role="presentation">
                                                        <label class="checkbox-inline">
                                                            <input type="checkbox" name="highlight" checked>
                                                            highlight
                                                        </label>
                                                    </li>
                                                    <li role="presentation">
                                                        <label class="checkbox-inline">
                                                            <input type="checkbox" name="background" checked>
                                                            background
                                                        </label>
                                                    </li>

                                                    <li role="presentation">
                                                        <label class="checkbox-inline">
                                                            <input type="checkbox" name="autoCrop" checked>
                                                            autoCrop
                                                        </label>
                                                    </li>
                                                    <li role="presentation">
                                                        <label class="checkbox-inline">
                                                            <input type="checkbox" name="movable" checked>
                                                            movable
                                                        </label>
                                                    </li>
                                                    <li role="presentation">
                                                        <label class="checkbox-inline">
                                                            <input type="checkbox" name="rotatable" checked>
                                                            rotatable
                                                        </label>
                                                    </li>
                                                    <li role="presentation">
                                                        <label class="checkbox-inline">
                                                            <input type="checkbox" name="scalable" checked>
                                                            scalable
                                                        </label>
                                                    </li>
                                                    <li role="presentation">
                                                        <label class="checkbox-inline">
                                                            <input type="checkbox" name="zoomable" checked>
                                                            zoomable
                                                        </label>
                                                    </li>
                                                    <li role="presentation">
                                                        <label class="checkbox-inline">
                                                            <input type="checkbox" name="zoomOnTouch" checked>
                                                            zoomOnTouch
                                                        </label>
                                                    </li>
                                                    <li role="presentation">
                                                        <label class="checkbox-inline">
                                                            <input type="checkbox" name="zoomOnWheel" checked>
                                                            zoomOnWheel
                                                        </label>
                                                    </li>
                                                    <li role="presentation">
                                                        <label class="checkbox-inline">
                                                            <input type="checkbox" name="cropBoxMovable" checked>
                                                            cropBoxMovable
                                                        </label>
                                                    </li>
                                                    <li role="presentation">
                                                        <label class="checkbox-inline">
                                                            <input type="checkbox" name="cropBoxResizable" checked>
                                                            cropBoxResizable
                                                        </label>
                                                    </li>
                                                    <li role="presentation">
                                                        <label class="checkbox-inline">
                                                            <input type="checkbox" name="toggleDragModeOnDblclick" checked>
                                                            toggleDragModeOnDblclick
                                                        </label>
                                                    </li>
                                                </ul>
                                            </div> <!-- /.dropdown -->
                                        </div> <!-- /.docs-toggles -->
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
        <!-- Cropper Js -->
        <script src="assets/plugins/cropper/cropper.min.js"></script>
        <script src="assets/plugins/cropper/main.js"></script>
        <!-- START THEME LABEL SCRIPT -->
        <script src="assets/dist/js/theme.js"></script>
    </body>

<!-- Mirrored from adminpix.thememinister.com/forms_cropper.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Nov 2018 16:44:59 GMT -->
</html>