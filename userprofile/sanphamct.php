<style>
    .coment {
        display: block;
        margin-top: 250px;
        position: relative;


    }
  .text-danger{
    color: red;
  }
    .viewcmt {
        width: 1170px;
        height: 500px;
        border: none;
        border-top:1px solid gray ;
        overflow-x: hidden;
         
        overflow-y: auto;
        margin-left: -490px;

    }

    .bt {
        width: 90px;
        height: 50px;
        background-color: black;
        color: white;
        border: none;
        border-radius: 5px;
    }

    .ip {
        width: 1000px;
        height: 50px;




    }

    .vcmt {
        border-bottom:1px solid gray;
        border-left: 1px solid gray;
        height: auto;
        margin-top: 10px;
        margin-left: 2px;
        margin-right: 5px;
       
        position: relative;
    }

    .imgname {
        font-weight: bold;
        font-style: italic;
    }

    .ndmtt {
        margin-left: 10px;
        font-weight: bolder;
    }

    .time {
        position: absolute;
        font-size: 7px;
        right: 2px;
        bottom: 2px;
    }

    .thaotac {
        margin-left: 8px;
        margin-bottom: 7px;
    }

    ::-webkit-scrollbar {
        width: 10px;
    }

    ::-webkit-scrollbar-thumb {
        background-color: black;
        width: 10px;
    }

    ::-webkit-scrollbar-track {
        background-color: gray;
    }

    .splq {
          border-radius:5px ;
        width: 1170px;
        bottom: 40px;
        border: 1px solid purple;
        height: auto;
        padding-bottom: 20px;
        margin-top:10px ;
    }

    .qq {
        position: relative;
    }

    .splqq {
        padding: 3px 0 0 3px;
        border: 1px solid black;
        height: 30px;
        width: 200px;
        background-color: black;
        color: white;
        border-bottom-right-radius: 100px;
    }

    .viewsp {
        border: 1px solid purple;
        width: 140px;
        height: 210px;
        margin-top: 6px;
        margin-left: 2px;

    }

    .viewsp>a>img {
        width: 140px;
        height: 120px;
    }

    .viewsplq {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
    }

    .viewsp>span {
        margin-left: 5px;
    }

    .cart_all {
        list-style: none;
        font-size: 10px;
        width: 100px;
        height: 20px;
        background-color: aqua;
    }

    .radios {
        margin-left: 20px;
    }

    .time1 {
        position: absolute;
        font-size: 7px;
        right: 2px;
        bottom: 30px;
    }

    .hover_a {
        margin-left: 10px;
    }

    .ten {
        margin-left: -480px;
        margin-top: 20px;
    }

    .label {
        background-color: white;
        border: 2px solid black;
        width: 70px;
        padding: 10px 10px 10px 23px;
        position: absolute;
        cursor: pointer;
        margin-left: -20px;

    }

    .label1 {
        background-color: white;
        border: 2px solid black;
        width: 70px;
        padding: 10px 10px 10px 23px;
        position: absolute;
        margin-left: -20px;
        cursor: pointer;
    }

    .label2 {
        background-color: white;
        border: 2px solid black;
        width: 70px;
        padding: 10px 10px 10px 23px;
        position: absolute;
        margin-left: -20px;
        cursor: pointer;
    }

    .label3 {
        background-color: white;
        border: 2px solid black;
        width: 70px;
        padding: 10px 10px 10px 23px;
        position: absolute;
        margin-left: -20px;
        cursor: pointer;
    }

    .size {
        position: relative;
    }

    input[type='radio'] {
        margin-left: 70px;
    }

    input[type='radio']:checked+label {
        background-color: black;
        color: white;
        border: 2px solid #09C6AB;
    }
    .lbcolor{
        position: absolute;
        margin-left: -25px;
        width: 40px;
        height: 40px;
        border: .5px solid black;
    }
    .color{
        margin-top: 20px;
        margin-left: 50px;
        display: none;
    }
    .none{
        font-size: 20px;
        margin-left: 500px;
    }
</style>
<?php if(!empty($_COOKIE['tb'])){ ?>
    <script>
        alert('<?php echo $_COOKIE['tb'] ?>')
    </script>
    <?php } ?>
<?php if(!empty($_COOKIE['size'])){ ?>
    <script>
        alert('<?php echo $_COOKIE['size'] ?>');
    </script>
    <?php } ?>
<div class="qq" id="modal_box" tabindex="-1" role="dialog" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered" role="document">
    
        <div class="modal-content">

            <div class="modal_body">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-5 col-md-5 col-sm-12">
                            <div class="modal_tab">
                                <div class="tab-content product-details-large">
                                    <div class="tab-pane fade show active" id="tab1" role="tabpanel">

                                        <div class="modal_tab_img">
                                            <a href="#"><img src="./upload/<?php echo $sanphamct[0]['img'] ?>" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab2" role="tabpanel">
                                        <div class="modal_tab_img">
                                            <a href="#"><img src="./upload/<?php echo $sanphamct[0]['img1'] ?>" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab3" role="tabpanel">
                                        <div class="modal_tab_img">
                                            <a href="#"><img src="./upload/<?php echo $sanphamct[0]['img2'] ?>" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab4" role="tabpanel">
                                        <div class="modal_tab_img">
                                            <a href="#"><img src="./upload/<?php echo $sanphamct[0]['img3'] ?>" alt=""></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal_tab_button">
                                    <ul class="nav product_navactive owl-carousel" role="tablist">
                                        <li>
                                            <a class="nav-link active" data-bs-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false"><img src="./upload/<?php echo $sanphamct[0]['img'] ?>" alt=""></a>
                                        </li>
                                        <li>
                                            <a class="nav-link" data-bs-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false"><img src="./upload/<?php echo $sanphamct[0]['img1'] ?>" alt=""></a>
                                        </li>
                                        <li>
                                            <a class="nav-link button_three" data-bs-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false"><img src="./upload/<?php echo $sanphamct[0]['img2'] ?>" alt=""></a>
                                        </li>
                                        <li>
                                            <a class="nav-link" data-bs-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="false"><img src="./upload/<?php echo $sanphamct[0]['img3'] ?>" alt=""></a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                
                        <div class="col-lg-7 col-md-7 col-sm-12">
                            <div class="modal_right">
                                <div class="modal_title mb-10">
                                    <h2><?php echo $sanphamct[0]['name'] ?></h2>
                                </div>
                                <div class="modal_price mb-10">
                                    <span class="new_price" id="price_product"> <?php echo 'Giá ' .  number_format($sanphamct[0]['price'],0,',','.') . ' <u>VNĐ</u>' ?></span>

                                </div>

                                <div class="modal_description mb-15">
                                    <p><?php echo $sanphamct[0]['mota'] ?> </p>
                                </div>
                                <div class="vc">
                                    <img src="./images/iconship.png" alt="" width="20px"> Miễn Phí Vận Chuyển
                                </div> <br>
                                <div class="size">
                                    <h4>Chọn Size</h4>
                                    <input type="radio" name="exp[]" id="<?php echo $sanphamct[0]['id_size'] ?>" value="S" >
                                    <label for="3" class="label"><?php echo $sanphamct[0]['size'] ?></label>

                                    <input type="radio" name="exp[]" id="<?php echo $sanphamct[1]['id_size'] ?>" value="M">
                                    <label for="4" class="label1"><?php echo $sanphamct[1]['size'] ?></label>

                                    <input type="radio" name="exp[]" id="<?php echo $sanphamct[2]['id_size'] ?>" value="L">
                                    <label for="5" class="label2"><?php echo $sanphamct[2]['size'] ?></label>

                                    <input type="radio" name="exp[]" id="<?php echo $sanphamct[3]['id_size'] ?>" value="XL">
                                    <label for="6" class="label3"><?php echo $sanphamct[3]['size'] ?></label>

                                </div> <br>
                                <div class="color" id="colorAN" >
                                <h4>Chọn Color</h4>
                                    <input type="radio" name="asc[]" id="<?php echo $sanphamct[0]['color'] ?>" class="radios" size_product value="<?php echo $sanphamct[0]['color'] ?>" checked>
                                    <label for="<?php echo $sanphamct[0]['color'] ?>" style="background-color:<?php echo $sanphamct[0]['color'] ?> ; color:white" class="lbcolor"  ></label>
                                    <?php if($sanphamct[0]['color1'] != ""){?>
                                    <input type="radio" name="asc[]" id="<?php echo $sanphamct[0]['color1'] ?>" class="radios1">
                                    <label for="<?php echo $sanphamct[0]['color1'] ?>" style="background-color:<?php echo $sanphamct[0]['color1'] ?> ;" class="lbcolor"></label>
                                    <?php }?>
                                   <?php if($sanphamct[0]['color2'] != ""){?>
                                    <input type="radio" name="asc[]" id="<?php echo $sanphamct[0]['color2'] ?>"class="radios2" >
                                    <label for="<?php echo $sanphamct[0]['color2'] ?>" style="background-color:<?php echo $sanphamct[0]['color2'] ?> ;" class="lbcolor"></label>
                                    <?php }?>
                                </div>
                                <br>
                                <span id="soluong" style="font-weight: bold;color:black;"></span>
                                <br> <br> <br>
                                <div class="variants_selects">
            <!-- #endregion -->
                                    <div class="modal_add_to_cart">
                                    <form action="index.php?act=giohang" method="post">
                                            <input type="hidden" name="id" value="<?php echo $sanphamct[0]['id'] ?>">
                                            <input type="hidden" name="color" id="color">
                                            <input type="hidden" name="size" id="size">

                                            <input type="hidden" name="name" value="<?php echo $sanphamct[0]['name'] ?>">
                                            <input type="hidden"  name='price' id="price">
                                            <input type="hidden" value="<?php echo $sanphamct[0]['img'] ?>" name='img'>
                                            <button class="giam" id="minplus" type="button" style="width: 50px;" >-</button>
                                            <span class="quantity_number" id="number_quantity">1</span>
                                            <button class="tang" id="maxplus" type="button" style="width: 50px;">+</button>
                                            <input type="hidden" name="quantityProduct" id="quantityProduct">
                                            <input type="hidden" id="soluongvalidate" name="soluongvalidate">
                                           <!-- <div id="clone"></div> -->
                                           <button type="submit" name='addcart'>Thêm Vào Giỏ Hàng</button>
                                 
                                    </div> 
                                 </form>
                                    <?php
                            // if (isset($_SESSION['error']['size'])) {
                            //     echo '<p class="text-danger">' . $_SESSION['error']['size'] . '</p>';
                            //     unset($_SESSION['error']['size']);
                            // } 
                            ?>
                                    <script>
                                        
                                        document.addEventListener("DOMContentLoaded", function() {
                                            var minplus = document.querySelector('#minplus');
                                            var maxplus = document.querySelector('#maxplus');
                                            var element_number_product = document.querySelector('#number_quantity');
                                            var quantityProduct = document.querySelector('#quantityProduct');
                                            
                                            var quantityS = "<?php echo $sanphamct[0]['quantity'] ?>"
                                            var quantityM = "<?php echo $sanphamct[1]['quantity'] ?>"
                                            var quantityL = "<?php echo $sanphamct[2]['quantity'] ?>"
                                            var quantityXL = "<?php echo $sanphamct[3]['quantity'] ?>"

                                            var priceS = "<?php echo $sanphamct[0]['price'] ?>"
                                            var priceM = "<?php echo $sanphamct[1]['price'] ?>"
                                            var priceL = "<?php echo $sanphamct[2]['price'] ?>"
                                            var priceXL = "<?php echo $sanphamct[3]['price'] ?>"

                                            var quantity = 1;
                                            var maxQquantity = 0;
                                            var pricegh =document.querySelector('#price');

                                            var number_product = document.querySelector('#soluong');

                                            var size_product =document.querySelector('#size');
                                            
                                            var price = document.querySelector('#price_product');
                                            var radioS = document.getElementById('3');
                                            var radioM = document.getElementById('4');
                                            var radioL = document.getElementById('5');
                                            var radioXL = document.getElementById('6');
                                            var check =document.getElementsByName('exp');
                                            var clone =document.querySelector('#clone');

                                            var buttonclone = "<?php echo '<div>Haloooo world</div>'?>";
                                            // var buttonREAL = "<?php echo ' <button type="submit" name="addcart">Thêm Vào Giỏ Hàng</button>' ?>"
                                            // if(!check.checked){
                                            //    clone.innerHTML =buttonclone;
                                            // }else if(check.checked){
                                            //     clone.innerHTML ='halo';
                                            // }
                                            // }else{
                                            //     // clone.innerHTML =buttonREAL;
                                            // }
                                            var color = "<?php echo $sanphamct[0]['color'] ?>";
                                            var color1 = "<?php echo $sanphamct[0]['color1'] ?>";
                                            var color2 = "<?php echo $sanphamct[0]['color2'] ?>";
                                            if(radioS.checked){
                                                size_product.value =radioS.value;
                                            }
                                            if(radioS.checked){
                                                pricegh.value = "<?php echo $sanphamct[0]['price'] ?>"
                                            }
                                            
                                            
                                            var soluongvalidate =document.querySelector('#soluongvalidate');

                                          var colorAN = document.querySelector('#colorAN');
                                        //   console.log(colorAN);
                                        // var resultAN =""
                                            
                                            var radioColor =document.querySelector('.radios');
                                            var radioColor1 =document.querySelector('.radios1');
                                            var radioColor2 =document.querySelector('.radios2');

                                            var colorgh =document.querySelector('#color');


                                            if(radioColor.checked){
                                                 colorgh.value =radioColor.value;
                                            }
                                        radioS.onclick = function(){
                                            if(colorAN.style.display=="block"){
                                                colorAN.style.display="none";
                                            }else{
                                                colorAN.style.display="block";
                                            }
                                        }
                                        radioM.onclick = function(){
                                            if(colorAN.style.display=="block"){
                                                colorAN.style.display="none";
                                            }else{
                                                colorAN.style.display="block";
                                            }
                                        }
                                        radioL.onclick = function(){
                                            if(colorAN.style.display=="block"){
                                                colorAN.style.display="none";
                                            }else{
                                                colorAN.style.display="block";
                                            }
                                        }
                                        radioXL.onclick = function(){
                                            if(colorAN.style.display=="block"){
                                                colorAN.style.display="none";
                                            }else{
                                                colorAN.style.display="block";
                                            }
                                        }
                                          
                                        
                                            radioS.addEventListener('click', function() {
                                                price.textContent = 'Giá ' + priceS + ' VNĐ';
                                                pricegh.value=priceS;
                                                size_product.value = 'S';
                                             
                                                if (Number(quantityS) == 0) {
                                                    number_product.textContent = ' Hết hàng trong kho !';
                                                    
                                                } else {
                                                    number_product.textContent = 'Còn ' + quantityS + ' Sản Phẩm Trong Kho';
                                                    soluongvalidate.value = quantityS;
                                                }
                                                maxQquantity = quantityS;
                                                if(element_number_product.textContent>quantityS){
                                                    element_number_product.textContent=quantityS;
                                                    element_number_product.textContent =quantityS;
                                                    quantityProduct.value = quantityS;
                                                }
                                                
                                                 if(colorAN.style.display=='none'){
                                                    colorAN.style.display='block';
                                                 }
                                            });

                                            radioL.addEventListener('click', function() {
                                                price.textContent = 'Giá ' + priceL + ' VNĐ';
                                                pricegh.value=priceL;
                                                size_product.value = 'L';
                                                if(Number(quantityL)==0){
                                                    number_product.textContent = 'Kho hết hàng !';
                                                }else{
                                                    number_product.textContent = 'Còn ' + quantityL + ' Sản Phẩm Trong Kho';
                                                    soluongvalidate.value = quantityL;
                                                }
                                                maxQquantity = quantityL;
                                                if(element_number_product.textContent>quantityL){
                                                    element_number_product.textContent=quantityL;
                                                    element_number_product.textContent =quantityL;
                                                    quantityProduct.value = quantityL;
                                                }
                                            });

                                            radioM.addEventListener('click', function() {
                                                price.textContent = 'Giá ' + priceM + ' VNĐ';
                                                pricegh.value=priceM;
                                                size_product.value = 'M';
                                                if(Number(quantityM)==0){
                                                    number_product.textContent='Kho hết hàng !';
                                                }else{
                                                    number_product.textContent = 'Còn ' + quantityM + ' Sản Phẩm Trong Kho';
                                                    soluongvalidate.value = quantityM;
                                                }
                                                maxQquantity = quantityM;
                                                if(element_number_product.textContent>quantityM){
                                                    element_number_product.textContent=quantityM;
                                                    element_number_product.textContent =quantityM;
                                                    quantityProduct.value = quantityM;
                                                }

                                            });

                                            radioXL.addEventListener('click', function() {
                                                price.textContent = 'Giá ' + priceXL + ' VNĐ';
                                                pricegh.value=priceXL;
                                                size_product.value = 'XL';
                                                if (Number(quantityXL) == 0) {
                                                    number_product.textContent = 'Kho hết hàng !'
                                                } else {
                                                    number_product.textContent = 'Còn ' + quantityXL + ' Sản Phẩm Trong Kho';
                                                    soluongvalidate.value = quantityXL;
                                                }
                                                maxQquantity = quantityXL;
                                                if(element_number_product.textContent > quantityXL){
                                                    element_number_product.textContent = quantityXL;
                                                    element_number_product.textContent =quantityXL;
                                                    quantityProduct.value = quantityXL;
                                                }
                                            });
                                            radioColor.addEventListener('click',function(){
                                                colorgh.value=color;
                                                console.log(colorgh);
                                            });
                                            <?php if($sanphamct[0]['color1'] != ""){?>
                                            radioColor1.addEventListener('click',function(){
                                                colorgh.value=color1;
                                                console.log(colorgh);
                                            });
                                            <?php } ?>
                                            <?php if($sanphamct[0]['color2'] != ""){?>
                                            radioColor2.addEventListener('click',function(){
                                                colorgh.value=color2;
                                                console.log(colorgh);
                                            });
                                              <?php } ?>
                                            // function radioColor(){
                                            //     alert(radioColor);
                                            // }
                                            //    radioColor.onclick = function(){
                                            //     alert(radioColor);
                                            //    };
                                            //    radioColor.addEventListener('click',function(){
                                            //     colorgh.value=radioColor1;
                                            //    });
                                            //    radioColor.addEventListener('click',function(){
                                            //     colorgh.value=radioColor2;
                                            //    })
                                            function update_quantity() {
                                                element_number_product.textContent = quantity;
                                                quantityProduct.value = quantity;
                                                minplus.disabled=(quantity===1);
                                            }
                                            minplus.onclick = function() {
                                                if (quantity > 1) {
                                                    quantity--;
                                                    update_quantity();
                                                }
                                            }
                                            maxplus.onclick = function() {
                                                if (quantity < maxQquantity) {
                                                    quantity++;
                                                    update_quantity();
                                                }
                                            }
                                            update_quantity();
                                        });
                                    </script>


                                </div>

                                <!-- <div class="splq">
                                    <div class="splqq">
                                        Sản Phẩm Liên Quan
                                    </div>

                                    <div class="viewsplq">

                                    </div>

                                </div> <br> <br> -->
                              

                                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
                                <script>
                                    $(document).ready(function() {


                                        $("#cmt").load("./userprofile/binhluanform.php", {
                                            idsp: <?php echo $_GET['id']  ?>
                                        });

                                    });
                                </script>
                                
                                <div class="hr"></div>
                                <div class="coment" id='cmt'>

                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="none">Sản Phẩm Liên Quan</div>
                    <div class="splq">
                    <div class="row shop_wrapper" style="width: 1300px; margin-left:5px; margin-top:20px">
                        <?php foreach( $sanphamlienquan as $spyeuthich):?>
                      
                        <div class="col-lg-4 col-md-4 col-12 " style="width:292px">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="index.php?act=sanphamct&id=<?php echo $spyeuthich['id'] ?>"><img src="./upload/<?php echo $spyeuthich['img'] ?>" alt=""></a>
                                        <a class="secondary_img" href="index.php?act=sanphamct&id=<?php echo $spyeuthich['id'] ?>"><img src="./upload/<?php echo $spyeuthich['img1'] ?>" alt=""></a>
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
                                            <h4 class="product_name"><a href="index.php?act=sanphamct&id=<?php echo $spyeuthich['id'] ?>"><?php echo $spyeuthich['name'] ?></a></h4>
                                            <div class="wishlist-btn">
                                                <a href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            </div>
                                        </div>
                                        <div class="product_price_rating">
                                            <div class="price_box"> 
                                                <span class="current_price"><?php echo number_format($spyeuthich['price'],0,',','.') ?><u>VNĐ</u></span>
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