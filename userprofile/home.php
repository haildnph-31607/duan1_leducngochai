  <style>
    .row_content{
     display: grid;
     grid-template-columns: 1fr 1fr 1fr 1fr 1fr ;
     margin-top: 20px;
    }
    @media only screen and (max-width: 767px) {
  .row_content {
    display: grid;
     grid-template-columns: 1fr 1fr ;
     margin-top: 20px;
  }
}
    .col{
        width: 210px;
        height: 340px;
        border: 1px solid black;
        margin-left: 20px;
        padding: 10px 10px 70px 10px;
        transition: 1s all;
        border-radius: 5px;
        position: relative;
        margin-top: 20px;
    }
    .img1{
        height:210px;
        border: 2px solid red   ;
    }
    .col:hover,
    .col:active,
    .col:focus,
    .col::after{
        border: 2px dashed purple;
    
    }
    .img2{
        height: 210px;
        display: none;
        position: absolute;
    }

  
    .name_product{
        font-size: 12px;
        color: purple;
    }
    .cart{
       color: blueviolet;
       list-style: none;
       font-size: 14px;
    }
    .cart_all{
        width: 150px;
        height: 30px;
        background-color: aquamarine;
        border: none;
        padding-left: 10px;
        padding-top: 5px;
        border-radius: 3px;

    }
    .withlist{
        margin-left: 170px;
        margin-top: 20px;
        position: absolute;
        top: 280px;
        font-size: 19px;
    }
   
  </style>
  <!--slider area start-->
   <section class="slider_section">
        <div class="slider_area slider_one_area owl-carousel">
            <div class="single_slider d-flex align-items-center" data-bgimg="images/tttbaner.jpg">
               <div class="container">
                   <div class="row">
                       <div class="col-lg-8 col-md-8 col-sm-7">
                           <div class="slider_content content_left">
                               <!-- <h1 style='color:white'> Thời Trang Công Sở</h1>
                                <h2 style='color:white'>New</h2>   -->
                              
                            </div>
                       </div>
                   </div>
               </div>
                
            </div>
            <div class="single_slider single_slider2 d-flex align-items-center" data-bgimg="images/ttbanner.jpg">
                <div class="container">
                   <div class="row">
                       <div class="col-lg-7 offset-lg-5 col-md-7 offset-md-5 col-sm-7 offset-sm-5">
                           <div class="slider_content content_right">
                                <h1> Shop Quần Aó</h1>
                                <h2>Sale 30% OFF ALL</h2>
                               
                            </div>
                       </div>
                   </div>
               </div>
            </div>
        </div>
    </section>
    <!--slider area end-->
    
    <!--banner area start-->
    <div class="banner_area mb-68 mt-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <figure class="single_banner">
                        <?php $quanhot = quan_hot()?>
                       
                        <div class="banner_thumb">
                     
                            <a href="index.php?act=sanphamct&id=<?php echo $quanhot['id'] ?>"><img src="./upload/<?php echo $quanhot['img'] ?>" alt=""></a>
                            
                            <div class="banner_conent-style1">
                                <h2><?php echo $quanhot['name'] ?></h2>
                                <p>Sản Phẩm <span> Áo</span> HOT</p>
                        <span style="font-size: 17px; color:red;" >GIÁ : <?php echo number_format($quanhot['price'],0,',','.') ?><u>VNĐ</u></span>
                            </div>
                        </div>
                    </figure>
                </div>
                <div class="col-lg-4 col-md-4">
                    <figure class="single_banner">
                        <div class="banner_thumb">
                          <?php $sanphamold = sanphamold();  ?>
                            <a href="index.php?act=sanphamct&id=<?php echo $sanphamold['id'] ?>"><img src="./upload/<?php echo $sanphamold['img'] ?>" alt=""></a>
                            <div class="banner_conent-style1">
                                <h2><?php echo $sanphamold['name'] ?></h2>
                                <p>GIÁ CHỈ <?php echo number_format($sanphamold['price'],0,',','.') ?><u>VNĐ</u></p>
                                <p>GIÁ RẺ</p>
                            </div>
                        </div>
                    </figure>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="home-banner-right">
                        <figure class="single_banner mb-30">
                            <div class="banner_thumb">
                            <?php $quanhot_1 = quan_hot_1()?>
                            
                                <a href="index.php?act=sanphamct&id=<?php echo $quanhot_1['id'] ?>"><img src="./upload/<?php echo $quanhot_1['img'] ?>" alt="" height="150px"></a>
                                <div class="banner_conent-style2">
                                    <h2 style="color:white;"><?php echo $quanhot_1['name'] ?></h2>
                                    <p style="color:white;">GIÁ CHỈ <?php echo number_format($quanhot_1['price'],0,',','.') ?><u>VNĐ</u></p>
                                    <p style="color:white;">QUẦN NEWW</p>
                                </div>
                            </div>
                        </figure>
                       
                        <figure class="single_banner">
                            <div class="banner_thumb">
                              

                                <a href="index.php?act=sanphamct&id="><img src="./upload/" alt=""></a>
                                <div class="banner_conent-style2">
                                    <h2></h2> <br>
                                    <h3></h2>
                                </div>
                            </div>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--banner area end-->
    
    <!--product area start-->
    <div class="product_area mb-62">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product-header">
                        <div class="section_title">
                         
                           <h2>trending items</h2>
                           <p>Những Sản Phẩm Mới Của Presiden</p>
                        </div>
                         <div class="row_content">
                            
                         <div class="row shop_wrapper" style="width: 1300px;">
                         <?php $sanphamtrending = sp_trending(); ?>
                        <?php foreach($sanphamtrending as $trend):?>
                      
                        <div class="col-lg-4 col-md-4 col-12 " style="width:292px">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="index.php?act=sanphamct&id=<?php echo $trend['id'] ?>"><img src="./upload/<?php echo $trend['img'] ?>" alt=""></a>
                                        <a class="secondary_img" href="index.php?act=sanphamct&id=<?php echo $trend['id'] ?>"><img src="./upload/<?php echo $trend['img1'] ?>" alt=""></a>
                                        <div class="action_links">
                                            <ul>
                                               <?php if(isset($_SESSION['user'])){ ?>
                                                <li class="add_to_cart"><a href="index.php?act=viewgiohang&id=<?php echo $_SESSION['user']['id'] ?>" title="Add to cart"><button style="background-color: transparent; border: none;"><i class="zmdi zmdi-shopping-cart"></i></button></a></li>
                                                <?php } ?>
                                                <li class="compare"><a href="#" title="Add to Compare"><i class="zmdi zmdi-refresh"></i></a></li>

                                                <li class="quick_button"><a href="index.php?act=sanphamct" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_content grid_content">
                                        <div class="product_content-header">
                                            <h4 class="product_name"><a href="index.php?act=sanphamct&id=<?php echo $trend['id'] ?>"><?php echo $trend['name'] ?></a></h4>
                                            <div class="wishlist-btn">
                                                <a href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            </div>
                                        </div>
                                        <div class="product_price_rating">
                                            <div class="price_box"> 
                                                <span class="current_price"><?php echo number_format($trend['price'],0,',','.') ?><u>VNĐ</u></span>
                                            </div>
                                            <div class="product_rating">
                                               <ul>
                                                   <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                   <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                   <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                   <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                   <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                               </ul>
                                           </div>
                                       </div>
                                    </div>
                                    
                                </figure>
                            </article>
                        </div>
                       <?php endforeach ?>
                      
                       
                    </div>
                          
                         </div>
                    </div>
                </div>
            </div> 
         
           
        </div>
    </div>
    <!--product area end-->
    
    <!--banner fullwidth start-->
    <div class="banner_fullwidth mb-70" data-bgimg="assets/img/bg/banner5.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="banner-text">
                        <h3>NHÀ THIẾT KẾ TUYỆT VỜI</h3>
                        <h2>TÚI XÁCH VÀ KÍNH </h2>
                        <p>Cửa hàng túi xách thời trang chất lượng cao Narita số 1 ở Campuchia cung cấp chất lượng cao nhất với giá tốt nhất</p>
                        <a href="#">Xem Chi Tiết</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--banner fullwidth end-->
    
    <!--product area start-->
    <div class="product_area mb-62">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                       <h2>Sản Phẩm Giá Tốt Của Preseden</h2>
                     
                    </div>
                </div>
            </div> 
            <div class="row_content">
            <div class="row shop_wrapper" style="width: 1300px;">
                         <?php $sanphamtrending = sp_giatot(); ?>
                        <?php foreach($sanphamtrending as $trend):?>
                      
                        <div class="col-lg-4 col-md-4 col-12 " style="width:292px">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="index.php?act=sanphamct&id=<?php echo $trend['id'] ?>"><img src="./upload/<?php echo $trend['img'] ?>" alt=""></a>
                                        <a class="secondary_img" href="index.php?act=sanphamct&id=<?php echo $trend['id'] ?>"><img src="./upload/<?php echo $trend['img1'] ?>" alt=""></a>
                                        <div class="action_links">
                                            <ul>
                                               <?php if(isset($_SESSION['user'])){ ?>
                                                <li class="add_to_cart"><a href="index.php?act=viewgiohang&id=<?php echo $_SESSION['user']['id'] ?>" title="Add to cart"><button style="background-color: transparent; border: none;"><i class="zmdi zmdi-shopping-cart"></i></button></a></li>
                                                <?php } ?>
                                                <li class="compare"><a href="#" title="Add to Compare"><i class="zmdi zmdi-refresh"></i></a></li>

                                                <li class="quick_button"><a href="index.php?act=sanphamct" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_content grid_content">
                                        <div class="product_content-header">
                                            <h4 class="product_name"><a href="index.php?act=sanphamct&id=<?php echo $trend['id'] ?>"><?php echo $trend['name'] ?></a></h4>
                                            <div class="wishlist-btn">
                                                <a href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            </div>
                                        </div>
                                        <div class="product_price_rating">
                                            <div class="price_box"> 
                                                <span class="current_price"><?php echo number_format($trend['price'],0,',','.') ?><u>VNĐ</u></span>
                                            </div>
                                            <div class="product_rating">
                                               <ul>
                                                   <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                   <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                   <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                   <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                   <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                               </ul>
                                           </div>
                                       </div>
                                    </div>
                                    
                                </figure>
                            </article>
                        </div>
                       <?php endforeach ?>
                      
                       
                    </div>
                         </div>  
        </div>
    </div>
    <!--product area end-->
    
    <!--instagram area start-->

    <!--instagram area end-->
     
    <!--blog area start-->
    <section class="blog_section mb-62">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                       <h2>BLOG MỚI NHẤT & MỚI NHẤT</h2>
                       <p>Bạn có muốn trình bày bài viết một cách tốt nhất để làm nổi bật những khoảnh khắc thú vị của blog của mình.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="blog_carousel blog_column3 owl-carousel">
                    <div class="col-lg-3">
                        <article class="single_blog">
                            <figure>
                                <div class="blog_thumb">
                                    <img src="assets/img/blog/blog1.jpg" alt="">
                                </div>
                                <figcaption class="blog_content">
                                   <h4 class="post_title">KHUYẾN MÃI LỚN TRONG MÙA HÈ NÀY</h4>
                                   <div class="articles_date">
                                        <span>08.05.2021</span>
                                        <p>eCommerce</p>
                                    </div>
                                    <p class="post_desc">Điều quan trọng nhất là các nhà phát triển cần phần mềm miễn phí. Giờ nó chưa có bầu đâu, làm bài tập đi. chiếc giường trở nên có thai</p>
                                    <footer class="btn_more">
                                       Preseden !
                                    </footer>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    <div class="col-lg-3">
                        <article class="single_blog">
                            <figure>
                                <div class="blog_thumb">
                                  <img src="assets/img/blog/blog2.jpg" alt="">
                                </div>
                                <figcaption class="blog_content">
                                   <h4 class="post_title">NGƯỜI MẪU ĐẦU TIÊN</h4>
                                   <div class="articles_date">
                                        <span>08.05.2021</span>
                                        <p>eCommerce</p>
                                    </div>
                                    <p class="post_desc">“Sự tuân thủ là tội ác đích thực với thời trang. Lựa chọn không mặc theo cá tính của chính mình mà bán rẻ linh hồn để giống hệt một nhóm người chính là hành động đầu hàng trước chủ nghĩa phát-xít của thời trang”.</p>
                                    <footer class="btn_more">
                                    SIMON DOONAN !
                                    </footer>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    <div class="col-lg-3">
                        <article class="single_blog">
                            <figure>
                                <div class="blog_thumb">
                               <img src="assets/img/blog/blog3.jpg" alt="">
                                </div>
                                <figcaption class="blog_content">
                                   <h4 class="post_title"><a >SIÊU MẪU ĐÙA TIÊN CỦA THỜI TRANG</a></h4>
                                   <div class="articles_date">
                                        <span>08.05.2021</span>
                                        <p>eCommerce</p>
                                    </div>
                                    <p class="post_desc">“Đừng chạy theo xu hướng. Đừng khiến bản thân lệ thuộc vào thời trang. Hãy để chính mình là người quyết định bản thân sẽ mặc gì cũng như sẽ sống ra sao”.</p>
                                    <footer class="btn_more">
                                    Versace !
                                    </footer>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    <div class="col-lg-3">
                        <article class="single_blog">
                            <figure>
                                <div class="blog_thumb">
                                   <img src="assets/img/blog/blog2.jpg" alt="">
                                </div>
                                <figcaption class="blog_content">
                                   <h4 class="post_title"><a >HOÀNG GIA Tenenbaums</a></h4>
                                   <div class="articles_date">
                                        <span>08.05.2021</span>
                                        <p>eCommerce</p>
                                    </div>
                                    <p class="post_desc">“Bất cứ ai cũng có thể diện những bộ cánh đẹp nhất và trở nên thật lộng lẫy, nhưng những thứ mọi người mặc trong ngày nghỉ mới thực sự hấp dẫn”.</p>
                                    <footer class="btn_more">
                                    ALEXANDER WANG
                                    </footer>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--blog area end-->
    
    <!--brand area start-->
    <div class="brand_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="brand_container owl-carousel">
                        <div class="single_brand">
                            <a href="#"><img src="assets/img/brand/brand1.png" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="assets/img/brand/brand2.png" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="assets/img/brand/brand3.png" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="assets/img/brand/brand4.png" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="assets/img/brand/brand5.png" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="assets/img/brand/brand2.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--brand area end-->