
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
<div class="row shop_wrapper" style="width: 1300px;margin-left: 176px; margin-top:100px;">
                        <?php foreach($sanphambanchay as $spsearch):?>
                       
                        <div class="col-lg-4 col-md-4 col-12 " style="width:292px">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="index.php?act=sanphamct&id=<?php echo $spsearch['id'] ?>"><img src="./upload/<?php echo $spsearch['img'] ?>" alt=""></a>
                                        <a class="secondary_img" href="index.php?act=sanphamct&id=<?php echo $spsearch['id'] ?>"><img src="./upload/<?php echo $spsearch['img1'] ?>" alt=""></a>
                                        <div class="action_links">
                                            <ul>
                                               <?php if(isset($_SESSION['user'])){ ?>
                                                <li class="add_to_cart"><a href="index.php?act=viewgiohang&id=<?php echo $_SESSION['user']['id'] ?>" title="Add to cart"><i class="zmdi zmdi-shopping-cart"></i></a></li>
                                                <?php } ?>
                                                <li class="compare"><a href="#" title="Add to Compare"><i class="zmdi zmdi-refresh"></i></a></li>

                                                <li class="quick_button"><a href="index.php?act=sanphamct" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_content grid_content">
                                        <div class="product_content-header">
                                            <h4 class="product_name"><a href="index.php?act=sanphamct&id=<?php echo $spsearch['id'] ?>"><?php echo $spsearch['name'] ?></a></h4>
                                            <div class="wishlist-btn">
                                                <a href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            </div>
                                        </div>
                                        <div class="product_price_rating">
                                            <div class="price_box"> 
                                                <span class="current_price"><?php echo number_format($spsearch[4],0,',','.') ?>VNĐ</span>
                                            </div>
                                            <div class="product_rating">
                                               <ul>
                                                Lượt mua :  <?php echo $spsearch['luotmua'] ?>
                                               </ul>
                                           </div>
                                       </div>
                                    </div>
                                    <div class="product_content list_content">
                                        <h4 class="product_name"><a href="product-details.html">Aenean Passages</a></h4>
                                        <div class="product_desc">
                                            <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt. Class aptent taciti sociosqu ..</p>
                                        </div>
                                        <div class="product_price_rating">
                                            <div class="price_box"> 
                                                <span class="current_price">$230.00</span>
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