<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from adminpix.thememinister.com/forms_validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Nov 2018 16:44:48 GMT -->
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
                            <li class="treeview active">
                                <a href="#">
                                    <i class="ti-pencil-alt"></i> <span>Forms</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="forms_basic.html">Basic Forms</a></li>
                                    <li class="active"><a href="forms_validation.html">Validation Forms</a></li>
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
                    <div class="content-header">
                        <div class="header-icon">
                            <i class="pe-7s-note2"></i>
                        </div>
                        <div class="header-title">
                            <h1>Validation Form</h1>
                            <small>A simple and user-friendly form validator plugin for Bootstrap 3. Documentation here</small>
                            <ol class="breadcrumb">
                                <li><a href="index.html"><i class="pe-7s-home"></i> Home</a></li>
                                <li><a href="#">Forms</a></li>
                                <li class="active">Validation Form</li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="panel panel-bd lobidrag">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Validator</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <p>This plugin adheres to the <a href="http://getbootstrap.com/javascript/#js-overview">conventions</a> set forth by Bootstrap's core jQuery plugins, so be sure to check those out to get a better understanding of the goals and design of this plugin.</p>
                                    <p>Form validation can be enabled in markup via the data-api or via JavaScript. Automatically enable form validation by adding <code>data-toggle="validator"</code> to your form element.</p>
                                    <form data-toggle="validator">
                                        <div class="form-group">
                                            <label for="inputName" class="control-label">Name</label>
                                            <input type="text" class="form-control" id="inputName" placeholder="Cina Saffary" required>
                                        </div>
                                        <div class="form-group has-feedback">
                                            <label for="inputTwitter" class="control-label">Twitter</label>
                                            <div class="input-group">
                                                <span class="input-group-addon">@</span>
                                                <input type="text" pattern="^[_A-z0-9]{1,}$" maxlength="15" class="form-control" id="inputTwitter" placeholder="1000hz" required>
                                            </div>
                                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                            <div class="help-block">Hey look, this one has feedback icons!</div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail" class="control-label">Email</label>
                                            <input type="email" class="form-control" id="inputEmail" placeholder="Email" data-error="Bruh, that email address is invalid" required>
                                            <div class="help-block"></div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword" class="control-label">Password</label>
                                            <div class="form-inline row">
                                                <div class="form-group col-sm-6">
                                                    <input type="password" data-minlength="6" class="form-control" id="inputPassword" placeholder="Password" required>
                                                    <div class="help-block">Minimum of 6 characters</div>
                                                </div>
                                                <div class="form-group col-sm-6">
                                                    <input type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Whoops, these don't match" placeholder="Confirm" required>
                                                    <div class="help-block"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group pull-right">
                                            <button type="submit" class="btn btn-cap m-r-5">Submit</button>
                                            <button type="submit" class="btn btn-warning">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="panel panel-bd lobidrag">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Checkbox &amp; Radio Validation States</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <form data-toggle="validator">
                                        <div class="">				
                                            <div class="form-group">
                                                <label class="form-control-label">Checkboxes</label>
                                                <div class="">
                                                    <div class="checkbox">
                                                        <input type="checkbox" id="option1"/>
                                                        <label for="option1">Option One</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <input type="checkbox" id="option2"/>
                                                        <label for="option2">Option Two</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <input type="checkbox" id="option3"/>
                                                        <label for="option3">Option Three</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Inline Checkboxes</label>
                                                <div class="checkbox_inline">
                                                    <div class="checkbox">
                                                        <input type="checkbox" id="option4"/>
                                                        <label for="option4">Option Four</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <input type="checkbox" id="option5"/>
                                                        <label for="option5">Option Five</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <input type="checkbox" id="option6"/>
                                                        <label for="option6">Option Six</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Radio Buttons</label>
                                                <div class="radio">
                                                    <input type="radio" name="underwear" id="coffee" required>
                                                    <label for="coffee">Coffee</label>
                                                </div>
                                                <div class="radio">
                                                    <input type="radio" name="underwear" id="tea" required>
                                                    <label for="tea">Tea</label>
                                                </div>
                                                <div class="radio">
                                                    <input type="radio" name="underwear" id="bread" required>
                                                    <label for="bread">Bread</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Inline Radio Buttons</label>
                                                <div class="radio_inline">
                                                    <div class="radio">
                                                        <input type="radio" name="underwear" id="toast" required>
                                                        <label for="toast">Toast</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input type="radio" name="underwear" id="boost" required>
                                                        <label for="boost">Boost</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input type="radio" name="underwear" id="Apple" required>
                                                        <label for="Apple">Apple</label>
                                                    </div>
                                                </div>
                                                <span class="form_help">Example help text that remains unchanged.</span>
                                            </div>
                                            <div class="form-group pull-right">
                                                <button type="submit" class="btn btn-cap m-r-5">Submit</button>
                                                <button type="submit" class="btn btn-warning">Cancel</button>
                                            </div>
                                        </div>
                                    </form>
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
        <!-- START THEME LABEL SCRIPT -->
        <script src="assets/dist/js/theme.js"></script>
    </body>

<!-- Mirrored from adminpix.thememinister.com/forms_validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Nov 2018 16:44:48 GMT -->
</html>