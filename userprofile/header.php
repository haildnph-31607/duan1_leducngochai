<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from htmldemo.net/presiden/presiden/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Oct 2023 13:42:18 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Presiden  </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="./images/lg.png">
    
    <!-- CSS 
    ========================= -->
    <!--bootstrap min css-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--owl carousel min css-->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!--slick min css-->
    <link rel="stylesheet" href="assets/css/slick.css">
    <!--magnific popup min css-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!--font awesome css-->
    <link rel="stylesheet" href="assets/css/font.awesome.css">
    <!--ionicons min css-->
    <link rel="stylesheet" href="assets/css/ionicons.min.css">
    <!--material design min css-->
    <link rel="stylesheet" href="assets/css/material.design.min.css">
    <!--animate css-->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!--jquery ui min css-->
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
    <!--slinky menu css-->
    <link rel="stylesheet" href="assets/css/slinky.menu.css">
    <!--plugins css-->
    <link rel="stylesheet" href="assets/css/plugins.css">
    
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    <!--modernizr min js here-->
    <script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>
</head>
<style>
    .img1{
        
        border: 3px solid greenyellow;
    }
    .account{
        position: fixed;
        z-index: 50px;
        right: 5px;
        top: 30px;
    }
    .account>a{
        border-radius: 50%;
       
    }
    
</style>
<body>
   <!--mini cart end-->
  <?php if(isset($_SESSION['user'])){
    
  ?>
    <!--header area start-->
    <div class="account">
        <span style="">Hi : <?php echo $_SESSION['user']['user'] ?></span> 
      <a href="index.php?act=profile&id=<?php echo $_SESSION['user']['id']?>" style="width: 40px; height='60px'"> <img src="./<?php echo $_SESSION['user']['img'] ?>" alt="" style="border:3px solid greenyellow; width:50px; height:50px; border-radius:50%;" onclick="menuaccount()"></a>
    </div>
    <div class="menuaccount" id='menuaccount'>
        
    </div>
    <?php }?>
    <?php if(isset($_COOKIE['yes'])){ ?>
        <script>
            alert('<?php echo $_COOKIE['yes'] ?>');
        </script>
<?php } ?>
    
    <script>
       function menuaccount(){
        var menu = document.querySelector('#menuaccount');
        if(menu.style.display =='block'){
            menu.style.display ='none'
        }else{
            menu.style.display ='block'
        }
       }
    </script>
    <!--offcanvas menu area start-->
    <div class="off_canvars_overlay">
                
    </div>
    <div class="offcanvas_menu">

        <div class="container">
      
            <div class="row">
                <div class="col-12">
                    <div class="canvas_open">
                        <a href="javascript:void(0)"><i class="ion-navicon"></i></a>
                    </div>
                    <div class="offcanvas_menu_wrapper">
                        <div class="canvas_close">
                            <a href="javascript:void(0)"><i class="ion-android-close"></i></a>  
                        </div>
                        <div class="header_right_info">
                            <ul>
                               <li class="search_box"><a href="javascript:void(0)"><img src="assets/img/icon/icon-search.png" alt=""></a>
                                   <div class="search_widget">
                                        <form action="index.php?act=search" method="post">
                                            <input placeholder="Tìm Kiếm Sản Phẩm..." type="text" name='kyws'>
                                            
                                            <input type="submit" value="Search" name='search'>
                                        </form>
                                    </div>
                               </li>
                               <li class="header_account"><a href="javascript:void(0)"><img src="assets/img/icon/icon-account.png" alt=""></a>
                                    <div class="dropdown_account">
                                        <div class="dropdown_account-list">
                                            <ul>
                                                <li><a href="my-account.html">My Account</a></li>
                                                <li><a href="cart.html">Shopping Cart</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                            </ul>
                                        </div>
                                        <div class="dropdown_account-list">
                                           <label>Currency</label>
                                            <ul>
                                                <li><a href="#">Euro</a></li>
                                                <li><a href="#">Pound Sterling</a></li>
                                                <li><a href="#">US Dollar</a></li>
                                            </ul>
                                        </div>
                                        <div class="dropdown_account-list">
                                           <label>Language</label>
                                            <ul>
                                                <li><a href="#"><img src="assets/img/icon/language.png" alt=""> English</a></li>
                                                <li><a href="#"><img src="assets/img/icon/language2.png" alt=""> French</a></li>
                                            </ul>
                                        </div>
                                    </div>
                               </li>
                               <li class="mini_cart_wrapper"><a href="javascript:void(0)"><img src="assets/img/icon/icon-cart.png" alt=""> <span class="item_count">2</span></a>
                                    <!--mini cart-->
                                 
                               </li>
                            </ul>
                        </div>
                        <div id="menu" class="text-left ">
                            <ul class="offcanvas_main_menu">
                                <li class="menu-item-has-children active">
                                    <a href="index.php">Home</a>
                                
                                </li>
                               
                                <?php $danhmuc_home = select_danhmuc(); 
                                            foreach($danhmuc_home as $dm_home):
                                            ?>
                                <li class="menu-item-has-children">
                                    <a href="index.php?act=search&iddm=<?php echo $dm_home['id'] ?>"><?php echo $dm_home['name'] ?></a>
                                
                                </li>
                                <?php endforeach ?>
                                <li class="menu-item-has-children">
                                    <a href="index.php?act=banchay">Bán Chạy 2023</a>
                                
                                </li> <li class="menu-item-has-children">
                                    <a href="index.php?act=lienhe">Liên hệ với chúng tôi</a>
                                
                                </li>
                            </ul>
                        </div>

                        <div class="offcanvas_footer">
                            <span><a href="#"><i class="fa fa-envelope-o"></i> info@yourdomain.com</a></span>
                            <ul>
                                <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="pinterest"><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--offcanvas menu area end-->
    
    <header>
        <div class="main_header">
            <div class="header_container sticky-header">
                <div class="container">  
                    <div class="row align-items-center">
                        <div class="col-lg-3">
                            <div class="logo">
                                <a href="index.php"><img src="./images/logo.png" alt="" width="180px" height="80px"></a>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="header_container_right">
                                <!--main menu start-->
                                <div class="main_menu menu_position"> 
                                    <nav>  
                                        <ul>
                                            <li><a style="color: <?php if(empty($_GET['act'])){
                                                echo 'aqua';
                                            }; ?>"  href="index.php">Trang Chu</a>
                                               
                                            </li>
                                            
                                            <li class="mega_items" ><a href="index.php?act=search&iddm=11" style="color:<?php if(isset($_GET['iddm'])){
                                                if($_GET['iddm'] == 11){
                                                    echo 'aqua';
                                                } 
                                            }?>" >Áo Nam</a> 
                                                
                                            </li>
                                            <li class="mega_items" ><a href="index.php?act=search&iddm=12" style="color:<?php if(isset($_GET['iddm'])){ if($_GET['iddm'] == 12){
                                                echo 'aqua';
                                                    } }?>">Quần Nam</a> 
                                                
                                                </li>
                                         
                                           <li class="mega_items"><a href="index.php?act=banchay" style="color:<?php if(isset($_GET['act'])){ if($_GET['act'] == 'banchay'){
                                                echo 'aqua';
                                                    } }?>">Bán Chạy 2023</a> 
                                                
                                                </li>
                                                <li class="mega_items"><a href="index.php?act=lienhe" style="color:<?php if(isset($_GET['act'])){ if($_GET['act'] == 'lienhe'){
                                                echo 'aqua';
                                                    } }?>">Liên Hệ</a> 
                                                
                                                </li>
                                        </ul>  
                                    </nav> 
                                </div>
                                <!--main menu end-->
                                <div class="header_right_info">
                                   <ul>
                                       <li class="search_box"><a href="javascript:void(0)"><img src="assets/img/icon/icon-search.png" alt=""></a>
                                           <div class="search_widget">
                                                <form action="index.php?act=search" method="post">
                                                    <input placeholder="Tìm Kiếm Sản Phẩm ..." type="text" name='kyws'>
                                                    <button type="submit" name='search'><i class="fa fa-search" aria-hidden="true"></i></button>
                                                </form>
                                            </div>
                                       </li>
                                       <li class="header_account"><a href="javascript:void(0)"><img src="assets/img/icon/icon-account.png" alt=""></a>
                                            <div class="dropdown_account"> 
                                                <div class="dropdown_account-list">
                                                    <ul>
                                                        <?php if(empty($_SESSION['user'])){ ?>
                                                            <li><a href="index.php?act=login">Đăng Nhập </a></li>
                                                            <li><a href="index.php?act=dangki">Đăng Kí</a></li>
                                                           
                                                      <?php  } ?>
                                                      <?php if(isset($_SESSION['user'])){?>
                                                         <li><a href="index.php?act=doipass">Đổi Mật Khẩu</a></li>
                                                        <?php  if($_SESSION['user']['role'] == 1){?>
                                                            <li><a href="http://localhost/duan1/admin/index.php">Quản Trị Admin</a></li>
                                                            <?php } ?>
                                                         <?php }?>
                                                      
                                                        <li><a href="index.php?act=mycart&id=<?php if(isset($_SESSION['user'])){
                                                            echo $_SESSION['user']['id'];
                                                        } ?>">Đơn Hàng Của Tôi</a></li>
                                                        
                                                     <?php if(isset($_SESSION['user'])){?>
                                                        <li><a href="index.php?act=logout">Log out</a></li>
                                                        <?php } ?>
                                                    </ul>
                                                </div>
                                       
                                            </div>
                                       </li>
                                       <li class="mini_cart_wrapper"><a  href="index.php?act=viewgiohang&id=<?php if(isset($_SESSION['user'])){ echo $_SESSION['user']['id'];}else{ $notify = 'Bạn phải đăng nhập để vào giỏ hàng';} ?>"><img src="assets/img/icon/icon-cart.png" alt=""> <span class="item_count" style="color:red;"><?php if(isset($_SESSION['user'])){
                                        $allrowgh= allrowghcc($_SESSION['user']['id']); 
                                        $numbergh = $allrowgh[0]['COUNT(giohang.id)'];
                                        echo $numbergh;
                                        
                                       }else{
                                        echo 0;
                                       }
                                       
                                       ?></span></a>
                                          
                                            
                                       </li>
                                   </ul>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </header>
    <!--header area end-->
    