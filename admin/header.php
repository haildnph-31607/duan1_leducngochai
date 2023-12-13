<!DOCTYPE html> 
<html lang="en">

<!-- Mirrored from preadmin-lite.dreamstechnologies.com/school/dark/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Nov 2023 16:45:10 GMT -->
<head>
    <meta charset="utf-8">
    <title>ADMIN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <!-- Favicons -->
    <link rel="shortcut icon" type="image/x-icon" href="../images/lg.png">

    <!-- Font Family -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  
    <script src="https://www.gstatic.com/charts/loader.js"></script>
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css" >
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css" >

    <!-- Calendar CSS -->
    <link rel="stylesheet" href="assets/css/fullcalendar.min.css">

    <!-- Datatable-->
    <link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">

    <!-- Morris-->
    <link rel="stylesheet" href="assets/plugins/morris/morris.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    

    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->

</head>
<body>

    <!-- Main Wrapper -->
    <div class="main-wrapper">

        <!-- Header start -->
        <div class="header-outer"> 
            <div class="header"> 
                <a id="mobile_btn" class="mobile_btn float-left" href="index.php"><i class="fas fa-bars" aria-hidden="true"></i></a>

                <a id="toggle_btn" class="float-left" href="index.php">
                    <img src="assets/img/sidebar/icon-21.png" alt="">
                </a>
                <!-- Search-->
                <ul class="nav float-left">
                    <li>
                        <div class="top-nav-search">
                            <a href="javascript:void(0);" class="responsive-search">
                                <i class="fa fa-search"></i>
                           </a>
                            <form action="https://preadmin-lite.dreamstechnologies.com/school/dark/search.html">
                                <input class="form-control" type="text" placeholder="Search here">
                                <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </li>
                    <li>
                        <a href="index.php" class="mobile-logo d-md-block d-lg-none d-block" ><img src="assets/img/logo1.png" alt="" width="30" height="30"></a>
                    </li>
                </ul>
                <!--/Search-->

                <ul class="nav user-menu float-right">
                    <li class="nav-item dropdown d-none d-sm-block">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <img src="assets/img/sidebar/icon-22.png" alt="">
                        </a>
                        <div class="dropdown-menu notifications">
                            <div class="topnav-dropdown-header">
                                <span>Notifications</span>
                            </div>
                            <div class="drop-scroll">
                                <ul class="notification-list">
                                    <li class="notification-message">
                                        <a href="activities.html">
                                            <div class="media">
                                                <span class="avatar">
                                                    <img alt="John Doe" src="assets/img/user-06.jpg" class="img-fluid rounded-circle">
                                                </span>
                                                <div class="media-body">
                                                    <p class="noti-details"><span class="noti-title">John Doe</span> is now following you </p>
                                                    <p class="noti-time"><span class="notification-time">4 mins ago</span></p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="activities.html">
                                            <div class="media">
                                                <span class="avatar">T</span>
                                                <div class="media-body">
                                                    <p class="noti-details"><span class="noti-title">Tarah Shropshire</span> sent you a message.</p>
                                                    <p class="noti-time"><span class="notification-time">6 mins ago</span></p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="activities.html">
                                            <div class="media">
                                                <span class="avatar">L</span>
                                                <div class="media-body">
                                                    <p class="noti-details"><span class="noti-title">Misty Tison</span> like your photo.</p>
                                                    <p class="noti-time"><span class="notification-time">8 mins ago</span></p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="activities.html">
                                            <div class="media">
                                                <span class="avatar">G</span>
                                                <div class="media-body">
                                                    <p class="noti-details"><span class="noti-title">Rolland Webber</span> booking appoinment for meeting.</p>
                                                    <p class="noti-time"><span class="notification-time">12 mins ago</span></p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="activities.html">
                                            <div class="media">
                                                <span class="avatar">T</span>
                                                <div class="media-body">
                                                    <p class="noti-details"><span class="noti-title">Bernardo Galaviz</span> like your photo.</p>
                                                    <p class="noti-time"><span class="notification-time">2 days ago</span></p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="topnav-dropdown-footer">
                                <a href="activities.html">View all Notifications</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown d-none d-sm-block">
                        <a href="javascript:void(0);" id="open_msg_box" class="hasnotifications nav-link"><img src="assets/img/sidebar/icon-23.png" alt=""> </a>
                    </li>
                    <li class="nav-item dropdown has-arrow">
                        <a href="#" class=" nav-link user-link" data-toggle="dropdown">
                            <span class="user-img"><img class="rounded-circle" src="../<?php echo $_SESSION['user']['img'] ?>" width="30" alt="Admin">
                                <span class="status online"></span></span>
                            <span>Admin</span>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="http://localhost/duan1/index.php">Trang Chủ</a>
                            <a class="dropdown-item" href="http://localhost/duan1/index.php?act=profile&id=1">Logout</a>
                        </div>
                    </li>
                </ul>
          
            </div>
        </div>
        <!-- /Header -->

        <!-- sidebar -->
        <div class="sidebar" id="sidebar"> 
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <div class="header-left">
                        <a href="index.php" class="logo">
                            <img src="../images/lg.png" width="40" height="40" alt="">
                            <span class="text-uppercase">ADMIN</span>
                        </a>
                    </div>
                    <ul class="sidebar-ul">
                        <li class="menu-title">Menu</li>
                        <li class="active">
                            <a href="index.php"><img src="assets/img/sidebar/icon-1.png" alt="icon"><span>BANG DIEU KHIEN</span></a>
                        </li>
                        <li class="submenu">
                            <a href="#"><img src="assets/img/sidebar/icon-2.png" alt="icon"> <span>DANH MUC</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="index.php?act=adddm"><span>THEM DANH MUC</span></a></li>
                                <li><a href="index.php?act=listdm"><span>DANH SACH DANH MUC</span></a></li>
                              
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><img src="assets/img/sidebar/icon-3.png" alt="icon"> <span> SAN PHAM</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="index.php?act=addsp"><span>THEM SAN PHAM</span></a></li>
                                <li><a href="index.php?act=listsp&page=1"><span>DANH SACH SAN PHAM</span></a></li>
                                
                            </ul>
                        </li>
                       
                       
                    
                        <li class="submenu">
                            <a href="#"><img src="assets/img/sidebar/icon-4.png" alt="icon"> <span> TAI KHOAN</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="index.php?act=listtk"><span>LIST TAI KHOAN</span></a></li>
                                
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><img src="assets/img/sidebar/icon-5.png" alt="icon"> <span>BINH LUAN</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                            
                                 <li>
                                    <a href="index.php?act=listbl&page=1"><span> LIST BINH LUAN</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a ><img src="assets/img/sidebar/icon-12.png" alt="icon"> <span> Quản Lý TT Online</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="index.php?act=vnpay"><span>Quản Trị VNPAY</span></a></li>
                                <li><a href="index.php?act=momo"><span>Quản Trị Momo </span></a></li>
                             
                            </ul>
                        </li>
                        <li>
                            <a href="index.php?act=listgh"><img src="assets/img/sidebar/icon-7.png" alt="icon"> <span>QUẢN TRỊ GIỎ HÀNG</span></a>
                        </li>
                        <li>
                            <a href="index.php?act=thongke"><img src="assets/img/sidebar/icon-6.png" alt="icon"> <span>THONG KE</span></a>
                        </li>
                        
                   
                        <li>
                            <a href="index.php?act=listvoucher"><img src="assets/img/sidebar/icon-8.png" alt="icon"> <span>VOUCHER</span></a>
                        </li>
                        <li>
                            <a href="index.php?act=listsize"><img src="assets/img/sidebar/icon-9.png" alt="icon"><span> Size</span></a>
                        </li>
                    
                        
                    </ul>
                </div>
            </div>
        </div>
        <!-- /sidebar -->
