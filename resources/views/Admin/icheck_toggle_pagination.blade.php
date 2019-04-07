<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from adminpix.thememinister.com/icheck_toggle_pagination.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Nov 2018 16:45:48 GMT -->
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
        <link href="assets/plugins/icheck/skins/all.css" rel="stylesheet" type="text/css">
        <link href="assets/plugins/bootstrap-toggle/bootstrap-toggle.min.css" rel="stylesheet" type="text/css">
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
                            <li class="treeview active">
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
                                    <li class="active"><a href="icheck_toggle_pagination.html">iCheck, Toggle</a></li>
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
                    <!-- Content Header (Page header) -->
                    <div class="content-header">
                        <div class="header-icon"><i class="pe-7s-date"></i></div>
                        <div class="header-title">
                            <h1>iCheck, Toggle</h1>
                            <small>A slideshow component for cycling through elements, like a carousel. Nested carousels are not supported.</small>
                            <ol class="breadcrumb">
                                <li><a href="index.html"><i class="pe-7s-home"></i> Home</a></li>
                                <li><a href="#">Ui Elements</a></li>
                                <li class="active">Carousel</li>
                            </ol>
                        </div>
                    </div> <!-- /. Content Header (Page header) -->
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="panel panel-bd lobidisable">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Minimal skin</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="skin-minimal">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="i-check">
                                                    <input tabindex="5" type="checkbox" id="minimal-checkbox-1">
                                                    <label for="minimal-checkbox-1">Checkbox 1</label>
                                                </div>
                                                <div class="i-check">
                                                    <input tabindex="6" type="checkbox" id="minimal-checkbox-2" checked>
                                                    <label for="minimal-checkbox-2">Checkbox 2</label>
                                                </div>
                                                <div class="i-check">
                                                    <input type="checkbox" id="minimal-checkbox-disabled" disabled>
                                                    <label for="minimal-checkbox-disabled">Disabled</label>
                                                </div>
                                                <div class="i-check">
                                                    <input type="checkbox" id="minimal-checkbox-disabled-checked" checked disabled>
                                                    <label for="minimal-checkbox-disabled-checked">Disabled &amp; checked</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="i-check">
                                                    <input tabindex="7" type="radio" id="minimal-radio-1" name="minimal-radio">
                                                    <label for="minimal-radio-1">Radio button 1</label>
                                                </div>
                                                <div class="i-check">
                                                    <input tabindex="8" type="radio" id="minimal-radio-2" name="minimal-radio" checked>
                                                    <label for="minimal-radio-2">Radio button 2</label>
                                                </div>
                                                <div class="i-check">
                                                    <input type="radio" id="minimal-radio-disabled" disabled>
                                                    <label for="minimal-radio-disabled">Disabled</label>
                                                </div>
                                                <div class="i-check">
                                                    <input type="radio" id="minimal-radio-disabled-checked" checked disabled>
                                                    <label for="minimal-radio-disabled-checked">Disabled &amp; checked</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="panel panel-bd lobidisable">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Square skin</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="skin-square">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="i-check">
                                                    <input tabindex="9" type="checkbox" id="square-checkbox-1">
                                                    <label for="square-checkbox-1">Checkbox 1</label>
                                                </div>
                                                <div class="i-check">
                                                    <input tabindex="10" type="checkbox" id="square-checkbox-2" checked>
                                                    <label for="square-checkbox-2">Checkbox 2</label>
                                                </div>
                                                <div class="i-check">
                                                    <input type="checkbox" id="square-checkbox-disabled" disabled>
                                                    <label for="square-checkbox-disabled">Disabled</label>
                                                </div>
                                                <div class="i-check">
                                                    <input type="checkbox" id="square-checkbox-disabled-checked" checked disabled>
                                                    <label for="square-checkbox-disabled-checked">Disabled &amp; checked</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="i-check">
                                                    <input tabindex="11" type="radio" id="square-radio-1" name="square-radio">
                                                    <label for="square-radio-1">Radio button 1</label>
                                                </div>
                                                <div class="i-check">
                                                    <input tabindex="12" type="radio" id="square-radio-2" name="square-radio" checked>
                                                    <label for="square-radio-2">Radio button 2</label>
                                                </div>
                                                <div class="i-check">
                                                    <input type="radio" id="square-radio-disabled" disabled>
                                                    <label for="square-radio-disabled">Disabled</label>
                                                </div>
                                                <div class="i-check">
                                                    <input type="radio" id="square-radio-disabled-checked" checked disabled>
                                                    <label for="square-radio-disabled-checked">Disabled &amp; checked</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="panel panel-bd lobidisable">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Flat skin</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="skin-flat">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="i-check">
                                                    <input tabindex="13" type="checkbox" id="flat-checkbox-1">
                                                    <label for="flat-checkbox-1">Checkbox 1</label>
                                                </div>
                                                <div class="i-check">
                                                    <input tabindex="14" type="checkbox" id="flat-checkbox-2" checked>
                                                    <label for="flat-checkbox-2">Checkbox 2</label>
                                                </div>
                                                <div class="i-check">
                                                    <input type="checkbox" id="flat-checkbox-disabled" disabled>
                                                    <label for="flat-checkbox-disabled">Disabled</label>
                                                </div>
                                                <div class="i-check">
                                                    <input type="checkbox" id="flat-checkbox-disabled-checked" checked disabled>
                                                    <label for="flat-checkbox-disabled-checked">Disabled &amp; checked</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="i-check">
                                                    <input tabindex="15" type="radio" id="flat-radio-1" name="flat-radio">
                                                    <label for="flat-radio-1">Radio button 1</label>
                                                </div>
                                                <div class="i-check">
                                                    <input tabindex="16" type="radio" id="flat-radio-2" name="flat-radio" checked>
                                                    <label for="flat-radio-2">Radio button 2</label>
                                                </div>
                                                <div class="i-check">
                                                    <input type="radio" id="flat-radio-disabled" disabled>
                                                    <label for="flat-radio-disabled">Disabled</label>
                                                </div>
                                                <div class="i-check">
                                                    <input type="radio" id="flat-radio-disabled-checked" checked disabled>
                                                    <label for="flat-radio-disabled-checked">Disabled &amp; checked</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="panel panel-bd lobidisable">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Line skin</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="skin-line">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="i-check">
                                                    <input tabindex="17" type="checkbox" id="line-checkbox-1">
                                                    <label for="line-checkbox-1">Checkbox 1</label>
                                                </div>
                                                <div class="i-check">
                                                    <input tabindex="18" type="checkbox" id="line-checkbox-2" checked>
                                                    <label for="line-checkbox-2">Checkbox 2</label>
                                                </div>
                                                <div class="i-check">
                                                    <input type="checkbox" id="line-checkbox-disabled" disabled>
                                                    <label for="line-checkbox-disabled">Disabled</label>
                                                </div>
                                                <div class="i-check">
                                                    <input type="checkbox" id="line-checkbox-disabled-checked" checked disabled>
                                                    <label for="line-checkbox-disabled-checked">Disabled &amp; checked</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="i-check">
                                                    <input tabindex="19" type="radio" id="line-radio-1" name="line-radio">
                                                    <label for="line-radio-1">Radio button 1</label>
                                                </div>
                                                <div class="i-check">
                                                    <input tabindex="20" type="radio" id="line-radio-2" name="line-radio" checked>
                                                    <label for="line-radio-2">Radio button 2</label>
                                                </div>
                                                <div class="i-check">
                                                    <input type="radio" id="line-radio-disabled" disabled>
                                                    <label for="line-radio-disabled">Disabled</label>
                                                </div>
                                                <div class="i-check">
                                                    <input type="radio" id="line-radio-disabled-checked" checked disabled>
                                                    <label for="line-radio-disabled-checked">Disabled &amp; checked</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-bd lobidisable">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Toggle demo</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h4 class="m-t-0">Basic example</h4>
                                            <p>Simply add <code>data-toggle="toggle"</code> to convert checkboxes into toggles.</p>
                                            <input type="checkbox" checked data-toggle="toggle">

                                            <hr>
                                            <h4 class="m-t-0">Inline Checkboxes</h4>
                                            <p>Refer to Bootstrap <a href="http://getbootstrap.com/css/#forms-controls" target="_blank">Form 
                                                    Controls</a> documentation to create inline checkboxes. Simply add <code>data-toggle="toggle"</code> to
                                                a convert checkboxes into toggles.</p>

                                            <label class="checkbox-inline">
                                                <input type="checkbox" checked data-toggle="toggle"> First
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" data-toggle="toggle"> Second
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" data-toggle="toggle"> Third
                                            </label>

                                            <hr>
                                            <h4 class="m-t-0">Size</h4>
                                            <p>Bootstrap toggle is available in different sizes. Refer to Bootstrap <a href="http://getbootstrap.com/css/#buttons-sizes" target="_blank">Button Sizes</a> documentation for more information.</p>
                                            <div class="toggle-example">
                                                <input type="checkbox" checked data-toggle="toggle" data-size="large">
                                                <input type="checkbox" checked data-toggle="toggle" data-size="normal">
                                                <input type="checkbox" checked data-toggle="toggle" data-size="small">
                                                <input type="checkbox" checked data-toggle="toggle" data-size="mini">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <h4 class="m-t-0">Custom Sizes</h4>
                                            <p>Bootstrap toggle can handle custom sizes by <code>data-width</code> and <code>data-height</code> options.</p>
                                            <div class="toggle-example">
                                                <input type="checkbox" checked data-toggle="toggle" data-width="100" data-height="75">
                                                <input type="checkbox" checked data-toggle="toggle" data-height="75">
                                                <input type="checkbox" checked data-toggle="toggle" data-width="100">
                                            </div>
                                            <hr>
                                            <h4 class="m-t-0">Colors</h4>
                                            <div class="toggle-example">
                                                <input type="checkbox" checked data-toggle="toggle" data-onstyle="primary">
                                                <input type="checkbox" checked data-toggle="toggle" data-onstyle="success">
                                                <input type="checkbox" checked data-toggle="toggle" data-onstyle="info">
                                                <input type="checkbox" checked data-toggle="toggle" data-onstyle="warning">
                                                <input type="checkbox" checked data-toggle="toggle" data-onstyle="danger">
                                                <input type="checkbox" checked data-toggle="toggle" data-onstyle="default">
                                            </div>
                                            <hr>
                                            <h4 class="m-t-0">Colors Mix</h4>
                                            <p>You can style on state as well as the off state.</p>
                                            <div class="toggle-example">
                                                <input type="checkbox" checked data-toggle="toggle" data-onstyle="success" data-offstyle="danger">
                                                <input type="checkbox" checked data-toggle="toggle" data-onstyle="warning" data-offstyle="info">
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-6 col-md-2">
                                            <h4 class="m-t-0">Custom Style</h4>
                                            <div class="toggle-example">
                                                <input type="checkbox" checked data-toggle="toggle" data-style="ios">
                                                <input type="checkbox" checked data-toggle="toggle" data-style="android" data-onstyle="info">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-2">
                                            <h4 class="m-t-0">Custom Text</h4>
                                            <div class="toggle-example">
                                                <input type="checkbox" checked data-toggle="toggle" data-on="Ready" data-off="Not Ready" data-onstyle="success" data-offstyle="danger">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-2">
                                            <h4 class="m-t-0">Icons/Html Text</h4>
                                            <div class="toggle-example">
                                                <input type="checkbox" checked data-toggle="toggle" data-on="<i class='fa fa-play'></i> Play" data-off="<i class='fa fa-pause'></i> Pause">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-3">
                                            <h4 class="m-t-0">Multiple Lines of Text</h4>
                                            <div class="toggle-example">
                                                <input type="checkbox" checked data-toggle="toggle" data-on="Hello<br>World" data-off="Goodbye<br>World">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-3">
                                            <h4 class="m-t-0">Animation Speed</h4>
                                            <div class="toggle-example">
                                                <input type="checkbox" checked data-toggle="toggle" data-style="slow">
                                                <input type="checkbox" checked data-toggle="toggle" data-class="fast">
                                                <input type="checkbox" checked data-toggle="toggle" data-style="quick">
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
        <!-- icheck Js -->
        <script src="assets/plugins/icheck/icheck.min.js"></script>
        <script src="assets/plugins/bootstrap-toggle/bootstrap-toggle.min.js"></script>
        <script src="assets/plugins/icheck/icheck-active.js"></script>
        <!-- START THEME LABEL SCRIPT -->
        <script src="assets/dist/js/theme.js"></script>
    </body>

<!-- Mirrored from adminpix.thememinister.com/icheck_toggle_pagination.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Nov 2018 16:45:52 GMT -->
</html>