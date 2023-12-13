<footer class="footer_widgets">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                   <div class="col-lg-6">
                        <div class="row">
                           
                            <div class="col-lg-7 col-md-7 col-sm-7">
                                <div class="widgets_container contact_us">
                                   <div class="footer_logo">
                                       <a href="index.html"><img src="./images/logo.png" alt="" width="200px"></a>
                                   </div>
                                    <div class="footer_desc">
                                        <p>“Thời trang giống như một phần hơi thở hàng ngày và nó luôn thay đổi, theo dòng sự kiện. Bạn thậm chí có thể nhìn thấy sự tiếp cận của một cuộc cách mạng trong những bộ trang phục. Bạn có thể nhìn và cảm nhận mọi thứ bằng thời trang”.</p>
                                    </div>

                                    <p><span>Address:</span> So1 Trinh Van Bo , Nam Tu Liem , Ha Noi</p>
                                    <p><span>Email:</span> <a target="_blank" href="https://hasthemes.com/contact-us/">Nguyenminhkhong2004@gmail.com</a></p>
                                    <p><span>Phone:</span> <a href="tel:0329500240">0329500240</a></p>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-5">
                                <div class="widgets_container widget_menu">
                                    <h3>Dịch Vụ Khách Hàng</h3>
                                    <div class="footer_menu">
                                        <ul>
                                            <li><a href="index.php">Presiden</a></li>
                                            <li><a href="index.php">Ve Cua Hang</a></li>
                                            <li><a href="index.php">Thong Tin Giao Hang</a></li>
                                            <li><a href="index.php">Chính Sách Bảo Mật</a></li>
                                            <li><a href="index.php">Điều Khoản và Chính Sách</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="widgets_container widget_menu">
                                    <h3>Tai Khoan</h3>
                                    <div class="footer_menu">
                                        <ul>
                                            <li><a href="index.php?act=profile&id=<?php if(isset($_SESSION['user'])){
                                                echo $_SESSION['user']['id'];
                                            } ?>">Tai Khoan Cua Toi</a></li>
                                            <li><a href="index.php?act=mycart&id=<?php if(isset($_SESSION['user'])){
                                                echo $_SESSION['user']['id'];
                                            } ?>">Lich Su Mua Hang</a></li>
                                         
                                            
                                        
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="widgets_container widget_menu">
                                    <h3>Bản Tin</h3>
                                    <div class="subscribe_form">
                                        <form id="mc-form" class="mc-form footer-newsletter" >
                                            <input id="mc-email" type="email" autocomplete="off" placeholder="Enter you email address" />
                                            <button id="mc-submit"><i class="zmdi zmdi-email-open"></i></button>
                                        </form>
                                        <!-- mailchimp-alerts Start -->
                                        <div class="mailchimp-alerts text-centre">
                                            <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                            <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                            <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                                        </div><!-- mailchimp-alerts end -->
                                    </div>
                                    <div class="footer_social">
                                        <h3>Theo Dõi Chúng Tôi Trên</h3>
                                        <ul>
                                            <li><a href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-rss"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-youtube-play"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-google-old"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="footer_bottom">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="footer_bottom_container">
                      
                            <div class="copyright_area">
                                    <p>Copyright @Du An 1 Le Duc Ngoc Hai 2023   All Right Reserved.</p>
                                </div>
                            <div class="footer_payment">
                                <ul>
                                    <li><a href="#"><img src="assets/img/icon/paypal.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="assets/img/icon/paypal1.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="assets/img/icon/paypal2.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="assets/img/icon/paypal3.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="assets/img/icon/paypal4.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="assets/img/icon/paypal5.jpg" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>   
    </footer>
   

 

    
<!-- JS
============================================ -->
<!--jquery min js-->
<script src="assets/js/vendor/jquery-3.4.1.min.js"></script>
<!--popper min js-->
<script src="assets/js/popper.js"></script>
<!--bootstrap min js-->
<script src="assets/js/bootstrap.min.js"></script>
<!--owl carousel min js-->
<script src="assets/js/owl.carousel.min.js"></script>
<!--slick min js-->
<script src="assets/js/slick.min.js"></script>
<!--magnific popup min js-->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<!--counterup min js-->
<script src="assets/js/jquery.counterup.min.js"></script>
<!--jquery countdown min js-->
<script src="assets/js/jquery.countdown.js"></script>
<!--jquery ui min js-->
<script src="assets/js/jquery.ui.js"></script>
<!--jquery elevatezoom min js-->
<script src="assets/js/jquery.elevatezoom.js"></script>
<!--isotope packaged min js-->
<script src="assets/js/isotope.pkgd.min.js"></script>
<!--slinky menu js-->
<script src="assets/js/slinky.menu.js"></script>
<!-- Plugins JS -->
<script src="assets/js/plugins.js"></script>

<!-- Main JS -->

<script src="assets/js/main.js"></script>


</body>


<!-- Mirrored from htmldemo.net/presiden/presiden/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Oct 2023 13:42:46 GMT -->
</html>