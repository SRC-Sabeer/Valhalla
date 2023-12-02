<!DOCTYPE html>
<html lang="en">
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <meta name="description" content="Responsive Admin Template">
        <meta name="author" content="SmartUniversity">
        <title>
            ECab - Taxi Admin Bootstrap 4 Material Design Dashboard Template
        </title><!-- google font -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css"><!-- icons -->
        <link href="assets/fonts/material-design-icons/material-icon.css" rel="stylesheet" type="text/css">
        <link href="assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"><!--bootstrap -->
        <link href="https://cdn.bootcdn.net/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" type="text/css"><!-- Material Design Lite CSS -->
        <link rel="stylesheet" href="assets/plugins/material/material.min.css">
        <link rel="stylesheet" href="assets/css/material_style.css"><!-- animation -->
        <link href="assets/css/pages/animate_page.css" rel="stylesheet"><!-- Theme Styles -->
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">
        <link href="assets/css/plugins.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css">
        <link href="assets/css/theme-color.css" rel="stylesheet" type="text/css"><!-- favicon -->
        <link rel="shortcut icon" href="assets/img/favicon.ico">
    </head><!-- END HEAD -->
    <body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-white">
        <div class="page-wrapper">
            <!-- start header -->
            <div class="page-header navbar navbar-fixed-top">
                <div class="page-header-inner">
                    <!-- logo start -->
                    <div class="page-logo">
                        <a href="index.php"><img alt="" src="assets/img/logo.png"><span class="logo-default">ECab</span></a>
                    </div><!-- logo end -->
                    <ul class="nav navbar-nav navbar-left in">
                        <li>
                            <a href="#" class="menu-toggler sidebar-toggler font-size-23"><i class="fa fa-bars"></i></a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-left in">
                        <!-- start full screen button -->
                        <li>
                            <a href="javascript:;" class="fullscreen-click font-size-20"><i class="fa fa-arrows-alt"></i></a>
                        </li><!-- end full screen button -->
                    </ul>
                    <form class="search-form-opened" action="#" method="get">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search..." name="query"><span class="input-group-btn search-btn"><a href="javascript:;" class="btn submit"><i class="fa fa-search"></i></a></span>
                        </div>
                    </form><!-- start mobile menu --><a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"><span></span></a><!-- end mobile menu --><!-- start header menu -->
                    <div class="top-menu">
                        <ul class="nav navbar-nav pull-right">
                            <!-- start notification dropdown -->
                            <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"><i class="fa fa-bell-o"></i><span class="notify"></span><span class="heartbeat"></span></a>
                                <ul class="dropdown-menu pullDown">
                                    <li class="external">
                                        <h3>
                                            <span class="bold">Notifications</span>
                                        </h3><span class="notification-label purple-bgcolor">New 6</span>
                                    </li>
                                    <li>
                                        <ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">
                                            <li>
                                                <a href="javascript:;"><span class="time">just now</span><span class="details"><span class="notification-icon circle deepPink-bgcolor box-shadow-1"><i class="fa fa-check"></i></span>Congratulations!.</span></a>
                                            </li>
                                            <li>
                                                <a href="javascript:;"><span class="time">3 mins</span><span class="details"><span class="notification-icon circle purple-bgcolor box-shadow-1"><i class="fa fa-user o"></i></span><b>John Micle</b> is now following you.</span></a>
                                            </li>
                                            <li>
                                                <a href="javascript:;"><span class="time">7 mins</span><span class="details"><span class="notification-icon circle blue-bgcolor box-shadow-1"><i class="fa fa-comments-o"></i></span><b>Sneha Jogi</b> sent you a message.</span></a>
                                            </li>
                                            <li>
                                                <a href="javascript:;"><span class="time">12 mins</span><span class="details"><span class="notification-icon circle pink box-shadow-1"><i class="fa fa-heart"></i></span><b>Ravi Patel</b> like your photo.</span></a>
                                            </li>
                                            <li>
                                                <a href="javascript:;"><span class="time">15 mins</span><span class="details"><span class="notification-icon circle yellow box-shadow-1"><i class="fa fa-warning"></i></span>Warning!</span></a>
                                            </li>
                                            <li>
                                                <a href="javascript:;"><span class="time">10 hrs</span><span class="details"><span class="notification-icon circle red box-shadow-1"><i class="fa fa-times"></i></span> Application error.</span></a>
                                            </li>
                                        </ul>
                                        <div class="dropdown-menu-footer">
                                            <a href="javascript:void(0)">All notifications</a>
                                        </div>
                                    </li>
                                </ul>
                            </li><!-- end notification dropdown --><!-- start message dropdown -->
                            <li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"><i class="fa fa-envelope-o"></i><span class="notify"></span><span class="heartbeat"></span></a>
                                <ul class="dropdown-menu animated pullDown">
                                    <li class="external">
                                        <h3>
                                            <span class="bold">Messages</span>
                                        </h3><span class="notification-label cyan-bgcolor">New 2</span>
                                    </li>
                                    <li>
                                        <ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">
                                            <li>
                                                <a href="#"><span class="photo"><img src="assets/img/user/user2.jpg" class="img-circle" alt=""></span><span class="subject"><span class="from">Sarah Smith</span><span class="time">Just Now</span></span><span class="message">Jatin I found you on LinkedIn...</span></a>
                                            </li>
                                            <li>
                                                <a href="#"><span class="photo"><img src="assets/img/user/user3.jpg" class="img-circle" alt=""></span><span class="subject"><span class="from">John Deo</span><span class="time">16 mins</span></span><span class="message">Fwd: Important Notice Regarding Your Domain Name...</span></a>
                                            </li>
                                            <li>
                                                <a href="#"><span class="photo"><img src="assets/img/user/user1.jpg" class="img-circle" alt=""></span><span class="subject"><span class="from">Rajesh</span><span class="time">2 hrs</span></span><span class="message">pls take a print of attachments.</span></a>
                                            </li>
                                            <li>
                                                <a href="#"><span class="photo"><img src="assets/img/user/user8.jpg" class="img-circle" alt=""></span><span class="subject"><span class="from">Lina Smith</span><span class="time">40 mins</span></span><span class="message">Apply for Ortho Surgeon</span></a>
                                            </li>
                                            <li>
                                                <a href="#"><span class="photo"><img src="assets/img/user/user5.jpg" class="img-circle" alt=""></span><span class="subject"><span class="from">Jacob Ryan</span><span class="time">46 mins</span></span><span class="message">Request for leave application.</span></a>
                                            </li>
                                        </ul>
                                        <div class="dropdown-menu-footer">
                                            <a href="#">All Messages</a>
                                        </div>
                                    </li>
                                </ul>
                            </li><!-- end message dropdown --><!-- start manage user dropdown -->
                            <li class="dropdown dropdown-user">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"><img alt="" class="img-circle" src="assets/img/dp.jpg"></a>
                                <ul class="dropdown-menu dropdown-menu-default animated jello">
                                    <li>
                                        <a href="user_profile.php"><i class="fa fa-user-o"></i>Profile</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-cogs"></i>Settings</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-question-circle"></i>Help</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="lock_screen.php"><i class="fa fa-lock"></i>Lock</a>
                                    </li>
                                    <li>
                                        <a href="login.php"><i class="fa fa-sign-out"></i>Log Out</a>
                                    </li>
                                </ul>
                            </li><!-- end manage user dropdown -->
                            <li class="dropdown dropdown-quick-sidebar-toggler">
                                <a id="headerSettingButton" class="mdl-button mdl-js-button mdl-button--icon pull-right" data-upgraded=",MaterialButton"><i class="material-icons">more_vert</i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!-- end header --><!-- start page container -->
            <div class="page-container">
                <!-- start sidebar menu -->
                <div class="sidebar-container">
                    <div class="sidemenu-container navbar-collapse collapse fixed-menu">
                        <div id="remove-scroll">
                            <ul class="sidemenu page-header-fixed p-t-20" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                                <li class="sidebar-toggler-wrapper hide">
                                    <div class="sidebar-toggler">
                                        <span></span>
                                    </div>
                                </li>
                                <li class="sidebar-user-panel">
                                    <div class="user-panel">
                                        <div class="pull-left image">
                                            <img src="assets/img/dp.jpg" class="img-circle user-img-circle" alt="User Image">
                                        </div>
                                        <div class="pull-left info">
                                            <p>
                                                Marria
                                            </p><a title="Inbox" href="email_inbox.php"><i class="material-icons">email</i></a><a title="Profile" href="user_profile.php"><i class="material-icons">person</i></a><a title="Logout" href="login.php"><i class="material-icons">power_settings_new</i></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="menu-heading">
                                    <span>-- Main</span>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link nav-toggle"><i class="material-icons">dashboard</i><span class="title">Dashboard</span><span class="arrow"></span></a>
                                    <ul class="sub-menu">
                                        <li class="nav-item">
                                            <a href="index.php" class="nav-link"><span class="title">Dashboard 1</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="dashboard2.php" class="nav-link"><span class="title">Dashboard 2</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link nav-toggle"><i class="material-icons">email</i><span class="title">Email</span><span class="arrow"></span></a>
                                    <ul class="sub-menu">
                                        <li class="nav-item">
                                            <a href="email_inbox.php" class="nav-link"><span class="title">Inbox</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="email_view.php" class="nav-link"><span class="title">View Mail</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="email_compose.php" class="nav-link"><span class="title">Compose Mail</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link nav-toggle"><i class="material-icons">local_taxi</i><span class="title">Trip</span><span class="arrow"></span></a>
                                    <ul class="sub-menu">
                                        <li class="nav-item">
                                            <a href="active_trips.php" class="nav-link"><span class="title">Active Trips</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="completed_trips.php" class="nav-link"><span class="title">Completed Trips</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="booked_trips.php" class="nav-link"><span class="title">Booked Trips</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="route_map.php" class="nav-link"><span class="title">Route Map</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link nav-toggle"><i class="material-icons">person</i><span class="title">Drivers</span><span class="arrow"></span></a>
                                    <ul class="sub-menu">
                                        <li class="nav-item">
                                            <a href="add_driver.php" class="nav-link"><span class="title">Add New Driver</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="all_drivers.php" class="nav-link"><span class="title">All Drivers</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="driver_payment.php" class="nav-link"><span class="title">Driver Payment</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="all_passenger.php" class="nav-link nav-toggle"><i class="material-icons">people</i><span class="title">All Passengers</span></a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link nav-toggle"><i class="material-icons">airport_shuttle</i><span class="title">Vehicle</span><span class="arrow"></span></a>
                                    <ul class="sub-menu">
                                        <li class="nav-item">
                                            <a href="add_vehicle.php" class="nav-link"><span class="title">Add Vehicle Details</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="all_vehicles.php" class="nav-link"><span class="title">View All Vehicle</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="edit_vehicle.php" class="nav-link"><span class="title">Edit Vehicle Details</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link nav-toggle"><i class="material-icons">style</i><span class="title">Coupons</span><span class="arrow"></span></a>
                                    <ul class="sub-menu">
                                        <li class="nav-item">
                                            <a href="coupon_generation.php" class="nav-link"><span class="title">Coupon Generation</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="coupon_list.php" class="nav-link"><span class="title">Coupon List</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link nav-toggle"><i class="material-icons">local_atm</i><span class="title">Fare Management</span><span class="arrow"></span></a>
                                    <ul class="sub-menu">
                                        <li class="nav-item">
                                            <a href="add_fare.php" class="nav-link"><span class="title">Add Fare</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="fair_list.php" class="nav-link"><span class="title">Fail List</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-heading m-t-20">
                                    <span>-- Layout, Apps & Widget</span>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link nav-toggle"><i class="material-icons">desktop_mac</i><span class="title">Layout</span><span class="arrow"></span></a>
                                    <ul class="sub-menu">
                                        <li class="nav-item">
                                            <a href="layout_boxed.php" class="nav-link"><span class="title">Boxed</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="layout_full_width.php" class="nav-link"><span class="title">Full Width</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="layout_collapse.php" class="nav-link"><span class="title">Collapse Menu</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="layout_right_sidebar.php" class="nav-link"><span class="title">Right Sidebar</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="layout_sidebar_hover_menu.php" class="nav-link"><span class="title">Hover Sidebar Menu</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link nav-toggle"><i class="material-icons">grain</i><span class="title">Apps</span><span class="arrow"></span></a>
                                    <ul class="sub-menu">
                                        <li class="nav-item">
                                            <a href="chat.php" class="nav-link"><span class="title">Chat</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="contact_list.php" class="nav-link"><span class="title">Contact List</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="contact_grid.php" class="nav-link"><span class="title">Contact Grid</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="gallery.php" class="nav-link"><span class="title">Gallery</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="support.php" class="nav-link"><span class="title">Support</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="calendar.php" class="nav-link"><span class="title">Calendar</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="widget.php" class="nav-link nav-toggle"><i class="material-icons">widgets</i><span class="title">Widget</span></a>
                                </li>
                                <li class="menu-heading m-t-20">
                                    <span>-- Elements, Forms & Tables</span>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link nav-toggle"><i class="material-icons">dvr</i><span class="title">UI Elements</span><span class="arrow"></span></a>
                                    <ul class="sub-menu">
                                        <li class="nav-item">
                                            <a href="buttons.php" class="nav-link"><span class="title">Buttons</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="alert.php" class="nav-link"><span class="title">Alert</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="tabs_accordions_navs.php" class="nav-link"><span class="title">Tabs & Accordions</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="typography.php" class="nav-link"><span class="title">Typography</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="notification.php" class="nav-link"><span class="title">Notifications</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="sweet_alert.php" class="nav-link"><span class="title">Sweet Alert</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="panels.php" class="nav-link"><span class="title">Panels</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="grid.php" class="nav-link"><span class="title">Grids</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="tree.php" class="nav-link"><span class="title">Tree View</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="carousel.php" class="nav-link"><span class="title">Carousel</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="animation.php" class="nav-link"><span class="title">Animations</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link nav-toggle"><i class="material-icons">store</i><span class="title">Material Elements</span><span class="arrow"></span></a>
                                    <ul class="sub-menu">
                                        <li class="nav-item">
                                            <a href="material_button.php" class="nav-link"><span class="title">Buttons</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="material_tab.php" class="nav-link"><span class="title">Tabs</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="material_chips.php" class="nav-link"><span class="title">Chips</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="material_grid.php" class="nav-link"><span class="title">Grid</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="material_form.php" class="nav-link"><span class="title">Form</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="material_datepicker.php" class="nav-link"><span class="title">DatePicker</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="material_select.php" class="nav-link"><span class="title">Select Item</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="material_loading.php" class="nav-link"><span class="title">Loading</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="material_menu.php" class="nav-link"><span class="title">Menu</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="material_slider.php" class="nav-link"><span class="title">Slider</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="material_tables.php" class="nav-link"><span class="title">Tables</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="material_toggle.php" class="nav-link"><span class="title">Toggle</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="material_badges.php" class="nav-link"><span class="title">Badges</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="javascript:;" class="nav-link nav-toggle"><i class="material-icons">subtitles</i><span class="title">Forms</span><span class="arrow"></span></a>
                                    <ul class="sub-menu">
                                        <li class="nav-item">
                                            <a href="layouts_form.php" class="nav-link"><span class="title">Form Layout</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="advance_form.php" class="nav-link"><span class="title">Advance Component</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="validation_form.php" class="nav-link"><span class="title">Form Validation</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="steps.php" class="nav-link"><span class="title">Wizard</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="file_upload.php" class="nav-link"><span class="title">File Upload</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="editable_form.php" class="nav-link"><span class="title">Editor</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="javascript:;" class="nav-link nav-toggle"><i class="material-icons">list</i><span class="title">Data Tables</span><span class="arrow"></span></a>
                                    <ul class="sub-menu">
                                        <li class="nav-item">
                                            <a href="basic_table.php" class="nav-link"><span class="title">Basic Tables</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="advanced_table.php" class="nav-link"><span class="title">Advance Tables</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="editable_table.php" class="nav-link"><span class="title">Editable Tables</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="group_table.php" class="nav-link"><span class="title">Grouping</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="table_data.php" class="nav-link"><span class="title">Tables With Sourced Data</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-heading m-t-20">
                                    <span>-- Extra Components</span>
                                </li>
                                <li class="nav-item">
                                    <a href="javascript:;" class="nav-link nav-toggle"><i class="material-icons">timeline</i><span class="title">Charts</span><span class="arrow"></span></a>
                                    <ul class="sub-menu">
                                        <li class="nav-item">
                                            <a href="charts_echarts.php" class="nav-link"><span class="title">eCharts</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="charts_morris.php" class="nav-link"><span class="title">Morris Charts</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="charts_chartjs.php" class="nav-link"><span class="title">Chartjs</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="javascript:;" class="nav-link nav-toggle"><i class="material-icons">map</i><span class="title">Maps</span><span class="arrow"></span></a>
                                    <ul class="sub-menu">
                                        <li class="nav-item">
                                            <a href="google_maps.php" class="nav-link"><span class="title">Google Maps</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="vector_maps.php" class="nav-link"><span class="title">Vector Maps</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item active">
                                    <a href="#" class="nav-link nav-toggle"><i class="material-icons">album</i><span class="title">Icons</span><span class="selected"></span><span class="arrow open"></span></a>
                                    <ul class="sub-menu">
                                        <li class="nav-item">
                                            <a href="fontawesome_icons.php" class="nav-link"><span class="title">Font Awesome</span></a>
                                        </li>
                                        <li class="nav-item active">
                                            <a href="material_icons.php" class="nav-link"><span class="title">Material Icon</span><span class="selected"></span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="javascript:;" class="nav-link nav-toggle"><i class="material-icons">description</i><span class="title">Extra pages</span><span class="arrow"></span></a>
                                    <ul class="sub-menu">
                                        <li class="nav-item">
                                            <a href="timeline.php" class="nav-link"><span class="title">Timeline</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="login.php" class="nav-link"><span class="title">Login</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="sign_up.php" class="nav-link"><span class="title">Registration</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="forgot_password.php" class="nav-link"><span class="title">Forgot Password</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="user_profile.php" class="nav-link"><span class="title">Profile</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="pricing.php" class="nav-link"><span class="title">Pricing</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="contactus.php" class="nav-link"><span class="title">Contact Us</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="invoice.php" class="nav-link"><span class="title">Invoice</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="faq.php" class="nav-link"><span class="title">Faq</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="lock_screen.php" class="nav-link"><span class="title">Lock Screen</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="page-404.php" class="nav-link"><span class="title">404 Page</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="page-500.php" class="nav-link"><span class="title">500 Page</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="blank_page.php" class="nav-link"><span class="title">Blank Page</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="javascript:;" class="nav-link nav-toggle"><i class="material-icons">slideshow</i><span class="title">Multi Level Menu</span><span class="arrow"></span></a>
                                    <ul class="sub-menu">
                                        <li class="nav-item">
                                            <a href="javascript:;" class="nav-link nav-toggle"><i class="fa fa-university"></i>Item 1 <span class="arrow"></span></a>
                                            <ul class="sub-menu">
                                                <li class="nav-item">
                                                    <a href="javascript:;" class="nav-link nav-toggle"><i class="fa fa-bell-o"></i>Arrow Toggle <span class="arrow"></span></a>
                                                    <ul class="sub-menu">
                                                        <li class="nav-item">
                                                            <a href="javascript:;" class="nav-link"><i class="fa fa-calculator"></i>Sample Link 1</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="#" class="nav-link"><i class="fa fa-clone"></i>Sample Link 2</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="#" class="nav-link"><i class="fa fa-cogs"></i>Sample Link 3</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link"><i class="fa fa-file-pdf-o"></i>Sample Link 1</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link"><i class="fa fa-rss"></i>Sample Link 2</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link"><i class="fa fa-hdd-o"></i>Sample Link 3</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a href="javascript:;" class="nav-link nav-toggle"><i class="fa fa-gavel"></i>Arrow Toggle <span class="arrow"></span></a>
                                            <ul class="sub-menu">
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link"><i class="fa fa-paper-plane"></i>Sample Link 1</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link"><i class="fa fa-power-off"></i>Sample Link 1</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link"><i class="fa fa-recycle"></i>Sample Link 1</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link"><i class="fa fa-volume-up"></i>Item 3</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div><!-- end sidebar menu --><!-- start page content -->
                <div class="page-content-wrapper">
                    <div class="page-content">
                        <div class="page-bar">
                            <div class="page-title-breadcrumb">
                                <div class="pull-left">
                                    <div class="page-title">
                                        Material Icons
                                    </div>
                                </div>
                                <ol class="breadcrumb page-breadcrumb pull-right">
                                    <li>
                                        <i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                    </li>
                                    <li>
                                        <a class="parent-item" href="">Icons</a>&nbsp;<i class="fa fa-angle-right"></i>
                                    </li>
                                    <li class="active">Material Icons
                                    </li>
                                </ol>
                            </div>
                        </div><!-- add content here -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">
                                    <div class="card-body">
                                        <div class="mdl-grid icon-set">
                                            <div class="mdl-cell mdl-cell--12-col">
                                                <h3 class="no-m-b">
                                                    Action
                                                </h3>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">3d_rotation</i>3d_rotation
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">accessibility</i>accessibility
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">account_balance</i>account_balance
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">account_balance_wallet</i>account_balance_wallet
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">account_box</i>account_box
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">account_circle</i>account_circle
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">add_shopping_cart</i>add_shopping_cart
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">alarm</i>alarm
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">alarm_add</i>alarm_add
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">alarm_off</i>alarm_off
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">alarm_on</i>alarm_on
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">android</i>android
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">announcement</i>announcement
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">aspect_ratio</i>aspect_ratio
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">assessment</i>assessment
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">assignment</i>assignment
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">assignment_ind</i>assignment_ind
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">assignment_late</i>assignment_late
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">assignment_return</i>assignment_return
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">assignment_returned</i>assignment_returned
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">assignment_turned_in</i>assignment_turned_in
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">autorenew</i>autorenew
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">backup</i>backup
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">book</i>book
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">bookmark</i>bookmark
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">bookmark_border</i>bookmark_border
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">bug_report</i>bug_report
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">build</i>build
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">cached</i>cached
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">camera_enhance</i>camera_enhance
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">card_giftcard</i>card_giftcard
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">card_membership</i>card_membership
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">card_travel</i>card_travel
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">change_history</i>change_history
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">check_circle</i>check_circle
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">chrome_reader_mode</i>chrome_reader_mode
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">class</i>class
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">code</i>code
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">credit_card</i>credit_card
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">dashboard</i>dashboard
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">delete</i>delete
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">description</i>description
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">dns</i>dns
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">done</i>done
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">done_all</i>done_all
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">eject</i>eject
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">event</i>event
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">event_seat</i>event_seat
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">exit_to_app</i>exit_to_app
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">explore</i>explore
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">extension</i>extension
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">face</i>face
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">favorite</i>favorite
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">favorite_border</i>favorite_border
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">feedback</i>feedback
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">find_in_page</i>find_in_page
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">find_replace</i>find_replace
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">flight_land</i>flight_land
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">flight_takeoff</i>flight_takeoff
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">flip_to_back</i>flip_to_back
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">flip_to_front</i>flip_to_front
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">get_app</i>get_app
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">gif</i>gif
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">grade</i>grade
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">group_work</i>group_work
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">help</i>help
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">help_outline</i>help_outline
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">highlight_off</i>highlight_off
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">history</i>history
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">home</i>home
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">hourglass_empty</i>hourglass_empty
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">hourglass_full</i>hourglass_full
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">http</i>http
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">https</i>https
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">info</i>info
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">info_outline</i>info_outline
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">input</i>input
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">invert_colors</i>invert_colors
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">label</i>label
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">label_outline</i>label_outline
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">language</i>language
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">launch</i>launch
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">list</i>list
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">lock</i>lock
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">lock_open</i>lock_open
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">lock_outline</i>lock_outline
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">loyalty</i>loyalty
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">markunread_mailbox</i>markunread_mailbox
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">note_add</i>note_add
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">offline_pin</i>offline_pin
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">open_in_browser</i>open_in_browser
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">open_in_new</i>open_in_new
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">open_with</i>open_with
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">pageview</i>pageview
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">payment</i>payment
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">perm_camera_mic</i>perm_camera_mic
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">perm_contact_calendar</i>perm_contact_calendar
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">perm_data_setting</i>perm_data_setting
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">perm_device_information</i>perm_device_information
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">perm_identity</i>perm_identity
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">perm_media</i>perm_media
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">perm_phone_msg</i>perm_phone_msg
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">perm_scan_wifi</i>perm_scan_wifi
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">picture_in_picture</i>picture_in_picture
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">play_for_work</i>play_for_work
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">polymer</i>polymer
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">power_settings_new</i>power_settings_new
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">print</i>print
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">query_builder</i>query_builder
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">question_answer</i>question_answer
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">receipt</i>receipt
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">redeem</i>redeem
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">reorder</i>reorder
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">report_problem</i>report_problem
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">restore</i>restore
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">room</i>room
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">schedule</i>schedule
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">search</i>search
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">settings</i>settings
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">settings_applications</i>settings_applications
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">settings_backup_restore</i>settings_backup_restore
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">settings_bluetooth</i>settings_bluetooth
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">settings_brightness</i>settings_brightness
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">settings_cell</i>settings_cell
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">settings_ethernet</i>settings_ethernet
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">settings_input_antenna</i>settings_input_antenna
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">settings_input_component</i>settings_input_component
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">settings_input_composite</i>settings_input_composite
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">settings_input_hdmi</i>settings_input_hdmi
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">settings_input_svideo</i>settings_input_svideo
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">settings_overscan</i>settings_overscan
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">settings_phone</i>settings_phone
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">settings_power</i>settings_power
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">settings_remote</i>settings_remote
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">settings_voice</i>settings_voice
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">shop</i>shop
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">shop_two</i>shop_two
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">shopping_basket</i>shopping_basket
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">shopping_cart</i>shopping_cart
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">speaker_notes</i>speaker_notes
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">spellcheck</i>spellcheck
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">star_rate</i>star_rate
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">stars</i>stars
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">store</i>store
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">subject</i>subject
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">supervisor_account</i>supervisor_account
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">swap_horiz</i>swap_horiz
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">swap_vert</i>swap_vert
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">swap_vertical_circle</i>swap_vertical_circle
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">system_update_alt</i>system_update_alt
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">tab</i>tab
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">tab_unselected</i>tab_unselected
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">theaters</i>theaters
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">thumb_down</i>thumb_down
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">thumb_up</i>thumb_up
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">thumbs_up_down</i>thumbs_up_down
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">toc</i>toc
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">today</i>today
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">toll</i>toll
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">track_changes</i>track_changes
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">translate</i>translate
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">trending_down</i>trending_down
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">trending_flat</i>trending_flat
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">trending_up</i>trending_up
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">turned_in</i>turned_in
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">turned_in_not</i>turned_in_not
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">verified_user</i>verified_user
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">view_agenda</i>view_agenda
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">view_array</i>view_array
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">view_carousel</i>view_carousel
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">view_column</i>view_column
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">view_day</i>view_day
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">view_headline</i>view_headline
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">view_list</i>view_list
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">view_module</i>view_module
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">view_quilt</i>view_quilt
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">view_stream</i>view_stream
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">view_week</i>view_week
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">visibility</i>visibility
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">visibility_off</i>visibility_off
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">work</i>work
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">youtube_searched_for</i>youtube_searched_for
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">zoom_in</i>zoom_in
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">zoom_out</i>zoom_out
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--12-col">
                                                <h3 class="no-m-b">
                                                    Alert
                                                </h3>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">add_alert</i>add_alert
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">error</i>error
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">error_outline</i>error_outline
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">warning</i>warning
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--12-col">
                                                <h3 class="no-m-b">
                                                    AV
                                                </h3>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">airplay</i>airplay
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">album</i>album
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">av_timer</i>av_timer
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">closed_caption</i>closed_caption
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">equalizer</i>equalizer
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">explicit</i>explicit
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">fast_forward</i>fast_forward
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">fast_rewind</i>fast_rewind
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">forward_10</i>forward_10
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">forward_30</i>forward_30
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">forward_5</i>forward_5
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">games</i>games
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">hd</i>hd
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">hearing</i>hearing
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">high_quality</i>high_quality
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">library_add</i>library_add
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">library_books</i>library_books
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">library_music</i>library_music
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">loop</i>loop
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">mic</i>mic
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">mic_none</i>mic_none
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">mic_off</i>mic_off
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">movie</i>movie
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">new_releases</i>new_releases
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">not_interested</i>not_interested
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">pause</i>pause
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">pause_circle_filled</i>pause_circle_filled
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">pause_circle_outline</i>pause_circle_outline
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">play_arrow</i>play_arrow
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">play_circle_filled</i>play_circle_filled
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">play_circle_outline</i>play_circle_outline
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">playlist_add</i>playlist_add
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">queue</i>queue
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">queue_music</i>queue_music
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">radio</i>radio
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">recent_actors</i>recent_actors
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">repeat</i>repeat
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">repeat_one</i>repeat_one
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">replay</i>replay
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">replay_10</i>replay_10
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">replay_30</i>replay_30
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">replay_5</i>replay_5
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">shuffle</i>shuffle
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">skip_next</i>skip_next
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">skip_previous</i>skip_previous
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">snooze</i>snooze
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">sort_by_alpha</i>sort_by_alpha
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">stop</i>stop
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">subtitles</i>subtitles
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">surround_sound</i>surround_sound
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">video_library</i>video_library
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">videocam</i>videocam
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">videocam_off</i>videocam_off
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">volume_down</i>volume_down
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">volume_mute</i>volume_mute
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">volume_off</i>volume_off
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">volume_up</i>volume_up
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">web</i>web
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--12-col">
                                                <h3 class="no-m-b">
                                                    Communication
                                                </h3>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">business</i>business
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">call</i>call
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">call_end</i>call_end
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">call_made</i>call_made
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">call_merge</i>call_merge
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">call_missed</i>call_missed
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">call_received</i>call_received
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">call_split</i>call_split
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">chat</i>chat
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">chat_bubble</i>chat_bubble
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">chat_bubble_outline</i>chat_bubble_outline
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">clear_all</i>clear_all
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">comment</i>comment
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">contact_phone</i>contact_phone
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">contacts</i>contacts
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">dialer_sip</i>dialer_sip
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">dialpad</i>dialpad
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">email</i>email
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">forum</i>forum
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">import_export</i>import_export
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">invert_colors_off</i>invert_colors_off
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">live_help</i>live_help
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">location_off</i>location_off
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">location_on</i>location_on
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">message</i>message
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">no_sim</i>no_sim
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">phone</i>phone
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">phonelink_erase</i>phonelink_erase
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">phonelink_lock</i>phonelink_lock
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">phonelink_ring</i>phonelink_ring
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">phonelink_setup</i>phonelink_setup
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">portable_wifi_off</i>portable_wifi_off
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">present_to_all</i>present_to_all
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">ring_volume</i>ring_volume
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">speaker_phone</i>speaker_phone
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">stay_current_landscape</i>stay_current_landscape
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">stay_current_portrait</i>stay_current_portrait
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">stay_primary_landscape</i>stay_primary_landscape
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">stay_primary_portrait</i>stay_primary_portrait
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">swap_calls</i>swap_calls
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">textsms</i>textsms
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">voicemail</i>voicemail
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">vpn_key</i>vpn_key
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--12-col">
                                                <h3 class="no-m-b">
                                                    Content
                                                </h3>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">add</i>add
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">add_box</i>add_box
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">add_circle</i>add_circle
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">add_circle_outline</i>add_circle_outline
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">archive</i>archive
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">backspace</i>backspace
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">block</i>block
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">clear</i>clear
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">content_copy</i>content_copy
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">content_cut</i>content_cut
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">content_paste</i>content_paste
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">create</i>create
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">drafts</i>drafts
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">filter_list</i>filter_list
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">flag</i>flag
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">font_download</i>font_download
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">forward</i>forward
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">gesture</i>gesture
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">inbox</i>inbox
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">link</i>link
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">mail</i>mail
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">markunread</i>markunread
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">redo</i>redo
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">remove</i>remove
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">remove_circle</i>remove_circle
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">remove_circle_outline</i>remove_circle_outline
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">reply</i>reply
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">reply_all</i>reply_all
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">report</i>report
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">save</i>save
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">select_all</i>select_all
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">send</i>send
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">sort</i>sort
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">text_format</i>text_format
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">undo</i>undo
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--12-col">
                                                <h3 class="no-m-b">
                                                    Device
                                                </h3>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">access_alarm</i>access_alarm
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">access_alarms</i>access_alarms
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">access_time</i>access_time
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">add_alarm</i>add_alarm
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">airplanemode_active</i>airplanemode_active
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">airplanemode_inactive</i>airplanemode_inactive
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">battery_alert</i>battery_alert
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">battery_charging_full</i>battery_charging_full
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">battery_full</i>battery_full
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">battery_std</i>battery_std
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">battery_unknown</i>battery_unknown
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">bluetooth</i>bluetooth
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">bluetooth_connected</i>bluetooth_connected
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">bluetooth_disabled</i>bluetooth_disabled
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">bluetooth_searching</i>bluetooth_searching
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">brightness_auto</i>brightness_auto
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">brightness_high</i>brightness_high
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">brightness_low</i>brightness_low
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">brightness_medium</i>brightness_medium
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">data_usage</i>data_usage
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">developer_mode</i>developer_mode
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">devices</i>devices
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">dvr</i>dvr
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">gps_fixed</i>gps_fixed
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">gps_not_fixed</i>gps_not_fixed
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">gps_off</i>gps_off
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">graphic_eq</i>graphic_eq
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">location_disabled</i>location_disabled
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">location_searching</i>location_searching
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">network_cell</i>network_cell
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">network_wifi</i>network_wifi
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">nfc</i>nfc
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">screen_lock_landscape</i>screen_lock_landscape
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">screen_lock_portrait</i>screen_lock_portrait
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">screen_lock_rotation</i>screen_lock_rotation
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">screen_rotation</i>screen_rotation
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">sd_storage</i>sd_storage
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">settings_system_daydream</i>settings_system_daydream
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">signal_cellular_4_bar</i>signal_cellular_4_bar
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">signal_cellular_connected_no_internet_4_bar</i> signal_cellular_connected_no_internet_4_bar
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">signal_cellular_no_sim</i>signal_cellular_no_sim
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">signal_cellular_null</i>signal_cellular_null
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">signal_cellular_off</i>signal_cellular_off
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">signal_wifi_4_bar</i>signal_wifi_4_bar
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">signal_wifi_4_bar_lock</i>signal_wifi_4_bar_lock
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">signal_wifi_off</i>signal_wifi_off
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">storage</i>storage
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">usb</i>usb
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">wallpaper</i>wallpaper
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">widgets</i>widgets
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">wifi_lock</i>wifi_lock
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">wifi_tethering</i>wifi_tethering
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--12-col">
                                                <h3 class="no-m-b">
                                                    Editor
                                                </h3>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">attach_file</i>attach_file
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">attach_money</i>attach_money
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">border_all</i>border_all
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">border_bottom</i>border_bottom
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">border_clear</i>border_clear
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">border_color</i>border_color
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">border_horizontal</i>border_horizontal
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">border_inner</i>border_inner
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">border_left</i>border_left
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">border_outer</i>border_outer
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">border_right</i>border_right
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">border_style</i>border_style
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">border_top</i>border_top
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">border_vertical</i>border_vertical
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">format_align_center</i>format_align_center
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">format_align_justify</i>format_align_justify
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">format_align_left</i>format_align_left
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">format_align_right</i>format_align_right
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">format_bold</i>format_bold
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">format_clear</i>format_clear
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">format_color_fill</i>format_color_fill
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">format_color_reset</i>format_color_reset
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">format_color_text</i>format_color_text
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">format_indent_decrease</i>format_indent_decrease
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">format_indent_increase</i>format_indent_increase
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">format_italic</i>format_italic
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">format_line_spacing</i>format_line_spacing
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">format_list_bulleted</i>format_list_bulleted
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">format_list_numbered</i>format_list_numbered
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">format_paint</i>format_paint
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">format_quote</i>format_quote
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">format_size</i>format_size
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">format_strikethrough</i>format_strikethrough
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">format_textdirection_l_to_r</i>format_textdirection_l_to_r
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">format_textdirection_r_to_l</i>format_textdirection_r_to_l
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">format_underlined</i>format_underlined
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">functions</i>functions
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">insert_chart</i>insert_chart
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">insert_comment</i>insert_comment
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">insert_drive_file</i>insert_drive_file
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">insert_emoticon</i>insert_emoticon
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">insert_invitation</i>insert_invitation
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">insert_link</i>insert_link
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">insert_photo</i>insert_photo
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">merge_type</i>merge_type
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">mode_comment</i>mode_comment
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">mode_edit</i>mode_edit
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">money_off</i>money_off
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">publish</i>publish
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">space_bar</i>space_bar
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">strikethrough_s</i>strikethrough_s
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">vertical_align_bottom</i>vertical_align_bottom
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">vertical_align_center</i>vertical_align_center
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">vertical_align_top</i>vertical_align_top
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">wrap_text</i>wrap_text
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--12-col">
                                                <h3 class="no-m-b">
                                                    File
                                                </h3>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">attachment</i>attachment
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">cloud</i>cloud
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">cloud_circle</i>cloud_circle
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">cloud_done</i>cloud_done
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">cloud_download</i>cloud_download
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">cloud_off</i>cloud_off
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">cloud_queue</i>cloud_queue
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">cloud_upload</i>cloud_upload
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">file_download</i>file_download
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">file_upload</i>file_upload
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">folder</i>folder
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">folder_open</i>folder_open
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">folder_shared</i>folder_shared
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--12-col">
                                                <h3 class="no-m-b">
                                                    Hardware
                                                </h3>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">cast</i>cast
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">cast_connected</i>cast_connected
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">computer</i>computer
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">desktop_mac</i>desktop_mac
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">desktop_windows</i>desktop_windows
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">developer_board</i>developer_board
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">device_hub</i>device_hub
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">dock</i>dock
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">gamepad</i>gamepad
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">headset</i>headset
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">headset_mic</i>headset_mic
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">keyboard</i>keyboard
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">keyboard_arrow_down</i>keyboard_arrow_down
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">keyboard_arrow_left</i>keyboard_arrow_left
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">keyboard_arrow_right</i>keyboard_arrow_right
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">keyboard_arrow_up</i>keyboard_arrow_up
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">keyboard_backspace</i>keyboard_backspace
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">keyboard_capslock</i>keyboard_capslock
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">keyboard_hide</i>keyboard_hide
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">keyboard_return</i>keyboard_return
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">keyboard_tab</i>keyboard_tab
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">keyboard_voice</i>keyboard_voice
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">laptop</i>laptop
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">laptop_chromebook</i>laptop_chromebook
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">laptop_mac</i>laptop_mac
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">laptop_windows</i>laptop_windows
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">memory</i>memory
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">mouse</i>mouse
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">phone_android</i>phone_android
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">phone_iphone</i>phone_iphone
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">phonelink</i>phonelink
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">phonelink_off</i>phonelink_off
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">power_input</i>power_input
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">router</i>router
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">scanner</i>scanner
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">security</i>security
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">sim_card</i>sim_card
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">smartphone</i>smartphone
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">speaker</i>speaker
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">speaker_group</i>speaker_group
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">tablet</i>tablet
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">tablet_android</i>tablet_android
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">tablet_mac</i>tablet_mac
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">toys</i>toys
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">tv</i>tv
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">watch</i>watch
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--12-col">
                                                <h3 class="no-m-b">
                                                    Image
                                                </h3>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">add_to_photos</i>add_to_photos
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">adjust</i>adjust
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">assistant</i>assistant
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">assistant_photo</i>assistant_photo
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">audiotrack</i>audiotrack
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">blur_circular</i>blur_circular
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">blur_linear</i>blur_linear
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">blur_off</i>blur_off
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">blur_on</i>blur_on
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">brightness_1</i>brightness_1
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">brightness_2</i>brightness_2
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">brightness_3</i>brightness_3
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">brightness_4</i>brightness_4
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">brightness_5</i>brightness_5
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">brightness_6</i>brightness_6
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">brightness_7</i>brightness_7
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">broken_image</i>broken_image
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">brush</i>brush
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">camera</i>camera
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">camera_alt</i>camera_alt
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">camera_front</i>camera_front
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">camera_rear</i>camera_rear
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">camera_roll</i>camera_roll
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">center_focus_strong</i>center_focus_strong
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">center_focus_weak</i>center_focus_weak
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">collections</i>collections
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">collections_bookmark</i>collections_bookmark
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">color_lens</i>color_lens
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">colorize</i>colorize
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">compare</i>compare
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">control_point</i>control_point
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">control_point_duplicate</i>control_point_duplicate
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">crop</i>crop
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">crop_16_9</i>crop_16_9
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">crop_3_2</i>crop_3_2
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">crop_5_4</i>crop_5_4
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">crop_7_5</i>crop_7_5
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">crop_din</i>crop_din
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">crop_free</i>crop_free
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">crop_landscape</i>crop_landscape
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">crop_original</i>crop_original
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">crop_portrait</i>crop_portrait
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">crop_square</i>crop_square
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">dehaze</i>dehaze
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">details</i>details
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">edit</i>edit
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">exposure</i>exposure
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">exposure_neg_1</i>exposure_neg_1
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">exposure_neg_2</i>exposure_neg_2
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">exposure_plus_1</i>exposure_plus_1
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">exposure_plus_2</i>exposure_plus_2
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">exposure_zero</i>exposure_zero
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">filter</i>filter
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">filter_1</i>filter_1
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">filter_2</i>filter_2
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">filter_3</i>filter_3
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">filter_4</i>filter_4
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">filter_5</i>filter_5
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">filter_6</i>filter_6
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">filter_7</i>filter_7
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">filter_8</i>filter_8
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">filter_9</i>filter_9
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">filter_9_plus</i>filter_9_plus
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">filter_b_and_w</i>filter_b_and_w
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">filter_center_focus</i>filter_center_focus
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">filter_drama</i>filter_drama
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">filter_frames</i>filter_frames
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">filter_hdr</i>filter_hdr
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">filter_none</i>filter_none
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">filter_tilt_shift</i>filter_tilt_shift
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">filter_vintage</i>filter_vintage
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">flare</i>flare
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">flash_auto</i>flash_auto
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">flash_off</i>flash_off
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">flash_on</i>flash_on
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">flip</i>flip
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">gradient</i>gradient
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">grain</i>grain
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">grid_off</i>grid_off
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">grid_on</i>grid_on
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">hdr_off</i>hdr_off
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">hdr_on</i>hdr_on
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">hdr_strong</i>hdr_strong
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">hdr_weak</i>hdr_weak
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">healing</i>healing
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">image</i>image
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">image_aspect_ratio</i>image_aspect_ratio
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">iso</i>iso
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">landscape</i>landscape
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">leak_add</i>leak_add
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">leak_remove</i>leak_remove
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">lens</i>lens
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">looks</i>looks
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">looks_3</i>looks_3
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">looks_4</i>looks_4
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">looks_5</i>looks_5
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">looks_6</i>looks_6
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">looks_one</i>looks_one
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">looks_two</i>looks_two
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">loupe</i>loupe
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">monochrome_photos</i>monochrome_photos
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">movie_creation</i>movie_creation
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">music_note</i>music_note
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">nature</i>nature
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">nature_people</i>nature_people
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">navigate_before</i>navigate_before
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">navigate_next</i>navigate_next
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">palette</i>palette
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">panorama</i>panorama
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">panorama_fish_eye</i>panorama_fish_eye
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">panorama_horizontal</i>panorama_horizontal
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">panorama_vertical</i>panorama_vertical
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">panorama_wide_angle</i>panorama_wide_angle
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">photo</i>photo
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">photo_album</i>photo_album
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">photo_camera</i>photo_camera
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">photo_library</i>photo_library
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">photo_size_select_actual</i>photo_size_select_actual
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">photo_size_select_large</i>photo_size_select_large
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">photo_size_select_small</i>photo_size_select_small
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">picture_as_pdf</i>picture_as_pdf
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">portrait</i>portrait
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">remove_red_eye</i>remove_red_eye
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">rotate_90_degrees_ccw</i>rotate_90_degrees_ccw
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">rotate_left</i>rotate_left
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">rotate_right</i>rotate_right
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">slideshow</i>slideshow
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">straighten</i>straighten
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">style</i>style
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">switch_camera</i>switch_camera
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">switch_video</i>switch_video
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">tag_faces</i>tag_faces
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">texture</i>texture
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">timelapse</i>timelapse
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">timer</i>timer
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">timer_10</i>timer_10
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">timer_3</i>timer_3
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">timer_off</i>timer_off
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">tonality</i>tonality
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">transform</i>transform
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">tune</i>tune
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">view_comfy</i>view_comfy
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">view_compact</i>view_compact
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">vignette</i>vignette
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">wb_auto</i>wb_auto
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">wb_cloudy</i>wb_cloudy
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">wb_incandescent</i>wb_incandescent
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">wb_iridescent</i>wb_iridescent
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">wb_sunny</i>wb_sunny
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--12-col">
                                                <h3 class="no-m-b">
                                                    Maps
                                                </h3>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">beenhere</i>beenhere
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">directions</i>directions
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">directions_bike</i>directions_bike
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">directions_boat</i>directions_boat
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">directions_bus</i>directions_bus
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">directions_car</i>directions_car
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">directions_railway</i>directions_railway
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">directions_run</i>directions_run
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">directions_subway</i>directions_subway
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">directions_transit</i>directions_transit
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">directions_walk</i>directions_walk
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">flight</i>flight
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">hotel</i>hotel
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">layers</i>layers
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">layers_clear</i>layers_clear
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">local_activity</i>local_activity
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">local_airport</i>local_airport
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">local_atm</i>local_atm
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">local_bar</i>local_bar
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">local_cafe</i>local_cafe
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">local_car_wash</i>local_car_wash
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">local_convenience_store</i>local_convenience_store
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">local_dining</i>local_dining
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">local_drink</i>local_drink
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">local_florist</i>local_florist
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">local_gas_station</i>local_gas_station
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">local_grocery_store</i>local_grocery_store
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">local_hospital</i>local_hospital
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">local_hotel</i>local_hotel
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">local_laundry_service</i>local_laundry_service
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">local_library</i>local_library
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">local_mall</i>local_mall
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">local_movies</i>local_movies
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">local_offer</i>local_offer
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">local_parking</i>local_parking
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">local_pharmacy</i>local_pharmacy
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">local_phone</i>local_phone
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">local_pizza</i>local_pizza
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">local_play</i>local_play
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">local_post_office</i>local_post_office
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">local_printshop</i>local_printshop
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">local_see</i>local_see
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">local_shipping</i>local_shipping
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">local_taxi</i>local_taxi
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">map</i>map
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">my_location</i>my_location
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">navigation</i>navigation
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">person_pin</i>person_pin
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">pin_drop</i>pin_drop
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">place</i>place
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">rate_review</i>rate_review
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">restaurant_menu</i>restaurant_menu
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">satellite</i>satellite
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">store_mall_directory</i>store_mall_directory
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">terrain</i>terrain
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">traffic</i>traffic
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">apps</i>apps
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">arrow_back</i>arrow_back
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">arrow_drop_down</i>arrow_drop_down
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">arrow_drop_down_circle</i>arrow_drop_down_circle
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">arrow_drop_up</i>arrow_drop_up
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">arrow_forward</i>arrow_forward
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">cancel</i>cancel
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">check</i>check
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">chevron_left</i>chevron_left
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">chevron_right</i>chevron_right
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">close</i>close
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">expand_less</i>expand_less
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">expand_more</i>expand_more
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">fullscreen</i>fullscreen
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">fullscreen_exit</i>fullscreen_exit
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">menu</i>menu
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">more_horiz</i>more_horiz
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">more_vert</i>more_vert
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">refresh</i>refresh
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--12-col">
                                                <h3 class="no-m-b">
                                                    Navigation
                                                </h3>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">adb</i>adb
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">airline_seat_flat</i>airline_seat_flat
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">airline_seat_flat_angled</i>airline_seat_flat_angled
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">airline_seat_individual_suite</i>airline_seat_individual_suite
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">airline_seat_legroom_extra</i>airline_seat_legroom_extra
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">airline_seat_legroom_normal</i>airline_seat_legroom_normal
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">airline_seat_legroom_reduced</i>airline_seat_legroom_reduced
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">airline_seat_recline_extra</i>airline_seat_recline_extra
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">airline_seat_recline_normal</i>airline_seat_recline_normal
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">bluetooth_audio</i>bluetooth_audio
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">confirmation_number</i>confirmation_number
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">disc_full</i>disc_full
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">do_not_disturb</i>do_not_disturb
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">do_not_disturb_alt</i>do_not_disturb_alt
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">drive_eta</i>drive_eta
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">event_available</i>event_available
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">event_busy</i>event_busy
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">event_note</i>event_note
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">folder_special</i>folder_special
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">live_tv</i>live_tv
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">mms</i>mms
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">more</i>more
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">network_locked</i>network_locked
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">ondemand_video</i>ondemand_video
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">personal_video</i>personal_video
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">phone_bluetooth_speaker</i>phone_bluetooth_speaker
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">phone_forwarded</i>phone_forwarded
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">phone_in_talk</i>phone_in_talk
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">phone_locked</i>phone_locked
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">phone_missed</i>phone_missed
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">phone_paused</i>phone_paused
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">power</i>power
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">sd_card</i>sd_card
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">sim_card_alert</i>sim_card_alert
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">sms</i>sms
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">sms_failed</i>sms_failed
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">sync</i>sync
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">sync_disabled</i>sync_disabled
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">sync_problem</i>sync_problem
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">system_update</i>system_update
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">tap_and_play</i>tap_and_play
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">time_to_leave</i>time_to_leave
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">vibration</i>vibration
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">voice_chat</i>voice_chat
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">vpn_lock</i>vpn_lock
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">wc</i>wc
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">wifi</i>wifi
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--12-col">
                                                <h3 class="no-m-b">
                                                    Social
                                                </h3>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">cake</i>cake
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">domain</i>domain
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">group</i>group
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">group_add</i>group_add
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">location_city</i>location_city
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">mood</i>mood
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">mood_bad</i>mood_bad
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">notifications</i>notifications
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">notifications_active</i>notifications_active
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">notifications_none</i>notifications_none
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">notifications_off</i>notifications_off
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">notifications_paused</i>notifications_paused
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">pages</i>pages
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">party_mode</i>party_mode
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">people</i>people
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">people_outline</i>people_outline
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">person</i>person
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">person_add</i>person_add
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">person_outline</i>person_outline
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">plus_one</i>plus_one
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">poll</i>poll
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">public</i>public
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">school</i>school
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">share</i>share
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">whatshot</i>whatshot
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--12-col">
                                                <h3 class="no-m-b">
                                                    Toggle
                                                </h3>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">check_box</i>check_box
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">check_box_outline_blank</i>check_box_outline_blank
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">indeterminate_check_box</i>indeterminate_check_box
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">radio_button_checked</i>radio_button_checked
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">radio_button_unchecked</i>radio_button_unchecked
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">star</i>star
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">star_border</i>star_border
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
                                                <div class="icon-holder">
                                                    <i class="material-icons f-left">star_half</i>star_half
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end page content --><!-- start chat sidebar -->
                <div class="chat-sidebar-container" data-close-on-body-click="false">
                    <div class="chat-sidebar">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a href="#quick_sidebar_tab_1" class="nav-link active tab-icon" data-toggle="tab">Theme</a>
                            </li>
                            <li class="nav-item">
                                <a href="#quick_sidebar_tab_2" class="nav-link tab-icon" data-toggle="tab">Settings</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane chat-sidebar-settings in show active animated shake" role="tabpanel" id="quick_sidebar_tab_1">
                                <div class="slimscroll-style">
                                    <div class="theme-light-dark">
                                        <h6>
                                            Sidebar Theme
                                        </h6><button type="button" data-theme="white" class="btn lightColor btn-outline btn-circle m-b-10 theme-button">Light Sidebar</button><button type="button" data-theme="dark" class="btn dark btn-outline btn-circle m-b-10 theme-button">Dark Sidebar</button>
                                    </div>
                                    <div class="theme-light-dark">
                                        <h6>
                                            Sidebar Color
                                        </h6>
                                        <ul class="list-unstyled">
                                            <li class="complete">
                                                <div class="theme-color sidebar-theme">
                                                    <a href="#" data-theme="white"><span class="head"></span><span class="cont"></span></a><a href="#" data-theme="dark"><span class="head"></span><span class="cont"></span></a><a href="#" data-theme="blue"><span class="head"></span><span class="cont"></span></a><a href="#" data-theme="indigo"><span class="head"></span><span class="cont"></span></a><a href="#" data-theme="cyan"><span class="head"></span><span class="cont"></span></a><a href="#" data-theme="green"><span class="head"></span><span class="cont"></span></a><a href="#" data-theme="red"><span class="head"></span><span class="cont"></span></a>
                                                </div>
                                            </li>
                                        </ul>
                                        <h6>
                                            Header Brand color
                                        </h6>
                                        <ul class="list-unstyled">
                                            <li class="theme-option">
                                                <div class="theme-color logo-theme">
                                                    <a href="#" data-theme="logo-white"><span class="head"></span><span class="cont"></span></a><a href="#" data-theme="logo-dark"><span class="head"></span><span class="cont"></span></a><a href="#" data-theme="logo-blue"><span class="head"></span><span class="cont"></span></a><a href="#" data-theme="logo-indigo"><span class="head"></span><span class="cont"></span></a><a href="#" data-theme="logo-cyan"><span class="head"></span><span class="cont"></span></a><a href="#" data-theme="logo-green"><span class="head"></span><span class="cont"></span></a><a href="#" data-theme="logo-red"><span class="head"></span><span class="cont"></span></a>
                                                </div>
                                            </li>
                                        </ul>
                                        <h6>
                                            Header color
                                        </h6>
                                        <ul class="list-unstyled">
                                            <li class="theme-option">
                                                <div class="theme-color header-theme">
                                                    <a href="#" data-theme="header-white"><span class="head"></span><span class="cont"></span></a><a href="#" data-theme="header-dark"><span class="head"></span><span class="cont"></span></a><a href="#" data-theme="header-blue"><span class="head"></span><span class="cont"></span></a><a href="#" data-theme="header-indigo"><span class="head"></span><span class="cont"></span></a><a href="#" data-theme="header-cyan"><span class="head"></span><span class="cont"></span></a><a href="#" data-theme="header-green"><span class="head"></span><span class="cont"></span></a><a href="#" data-theme="header-red"><span class="head"></span><span class="cont"></span></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- Start Setting Panel -->
                            <div class="tab-pane chat-sidebar-settings animated slideInUp" id="quick_sidebar_tab_2">
                                <div class="chat-sidebar-settings-list slimscroll-style">
                                    <div class="chat-header">
                                        <h5 class="list-heading">
                                            Layout Settings
                                        </h5>
                                    </div>
                                    <div class="chatpane inner-content">
                                        <div class="settings-list">
                                            <div class="setting-item">
                                                <div class="setting-text">
                                                    Sidebar Position
                                                </div>
                                                <div class="setting-set">
                                                    <select class="sidebar-pos-option form-control input-inline input-sm input-small">
                                                        <option value="left" selected="selected">
                                                            Left
                                                        </option>
                                                        <option value="right">
                                                            Right
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="setting-item">
                                                <div class="setting-text">
                                                    Header
                                                </div>
                                                <div class="setting-set">
                                                    <select class="page-header-option form-control input-inline input-sm input-small">
                                                        <option value="fixed" selected="selected">
                                                            Fixed
                                                        </option>
                                                        <option value="default">
                                                            Default
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="setting-item">
                                                <div class="setting-text">
                                                    Sidebar Menu
                                                </div>
                                                <div class="setting-set">
                                                    <select class="sidebar-menu-option form-control input-inline input-sm input-small">
                                                        <option value="accordion" selected="selected">
                                                            Accordion
                                                        </option>
                                                        <option value="hover">
                                                            Hover
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="setting-item">
                                                <div class="setting-text">
                                                    Footer
                                                </div>
                                                <div class="setting-set">
                                                    <select class="page-footer-option form-control input-inline input-sm input-small">
                                                        <option value="fixed">
                                                            Fixed
                                                        </option>
                                                        <option value="default" selected="selected">
                                                            Default
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat-header">
                                            <h5 class="list-heading">
                                                Account Settings
                                            </h5>
                                        </div>
                                        <div class="settings-list">
                                            <div class="setting-item">
                                                <div class="setting-text">
                                                    Notifications
                                                </div>
                                                <div class="setting-set">
                                                    <div class="switch">
                                                        <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-1"><input type="checkbox" id="switch-1" class="mdl-switch__input" checked></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="setting-item">
                                                <div class="setting-text">
                                                    Show Online
                                                </div>
                                                <div class="setting-set">
                                                    <div class="switch">
                                                        <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-7"><input type="checkbox" id="switch-7" class="mdl-switch__input" checked></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="setting-item">
                                                <div class="setting-text">
                                                    Status
                                                </div>
                                                <div class="setting-set">
                                                    <div class="switch">
                                                        <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-2"><input type="checkbox" id="switch-2" class="mdl-switch__input" checked></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="setting-item">
                                                <div class="setting-text">
                                                    2 Steps Verification
                                                </div>
                                                <div class="setting-set">
                                                    <div class="switch">
                                                        <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-3"><input type="checkbox" id="switch-3" class="mdl-switch__input" checked></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat-header">
                                            <h5 class="list-heading">
                                                General Settings
                                            </h5>
                                        </div>
                                        <div class="settings-list">
                                            <div class="setting-item">
                                                <div class="setting-text">
                                                    Location
                                                </div>
                                                <div class="setting-set">
                                                    <div class="switch">
                                                        <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-4"><input type="checkbox" id="switch-4" class="mdl-switch__input" checked></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="setting-item">
                                                <div class="setting-text">
                                                    Save Histry
                                                </div>
                                                <div class="setting-set">
                                                    <div class="switch">
                                                        <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-5"><input type="checkbox" id="switch-5" class="mdl-switch__input" checked></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="setting-item">
                                                <div class="setting-text">
                                                    Auto Updates
                                                </div>
                                                <div class="setting-set">
                                                    <div class="switch">
                                                        <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-6"><input type="checkbox" id="switch-6" class="mdl-switch__input" checked></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end chat sidebar -->
            </div><!-- end page container --><!-- start footer -->
            <div class="page-footer">
                <div class="page-footer-inner">
                    2018 © ECab Taxi Admin Template By <a href="http://www.dedemao.com/" target="_top" class="makerCss">Redstartheme</a>
                </div>
                <div class="scroll-to-top">
                    <i class="material-icons">eject</i>
                </div>
            </div><!-- end footer -->
        </div><!-- start js include path -->
        <script src="assets/plugins/jquery/jquery.min.js"></script>
        <script src="assets/plugins/popper/popper.min.js"></script>
        <script src="assets/plugins/jquery-blockui/jquery.blockui.min.js"></script>
        <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script><!-- bootstrap -->
        <script src="https://cdn.bootcdn.net/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script><!-- Common js-->
        <script src="assets/js/app.js"></script>
        <script src="assets/js/layout.js"></script>
        <script src="assets/js/theme-color.js"></script><!-- Material -->
        <script src="assets/plugins/material/material.min.js"></script><!-- animation -->
        <script src="assets/js/pages/ui/animations.js"></script><!-- end js include path -->
    </body>
</html>