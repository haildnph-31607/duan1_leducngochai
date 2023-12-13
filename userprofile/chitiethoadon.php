<style>
            .container1{
            margin-top: 100px;
            margin-left: 100px;
            width: 1200px;
            height: 500px auto;
            
            border: 1px solid gray;
            border-radius: 10px;
            overflow: hidden;
            padding-bottom: 20px;
            margin-bottom: 40px;
        }
        .text{
            font-size: 25px;
            margin-top: 20px;
            margin-left: 20px;
        }
    
      .col{
        border: 1px solid white;
      }
      .row1{
        width: 550px;
       height: auto;
       padding-top: 50px;
       padding-bottom: 100px;
       border: 1px solid black;
       margin-left: 10px;
       margin-right: 1px;
       margin-top: 20px;
       color: black;
       position: relative;
       background-color: lightgray;
       
      }
      .col1{
        display: grid;
        grid-template-columns: 1fr 1fr;
      }
    .li{
        list-style: none;
      }
      .cc{
        width: 200px;
        height: 40px;
        background-color: red;
        color: white;
        border-radius: 5px;
        border: none;
      }
      .hder{
        background-color: aquamarine;
        padding: 22px 0 22px 40px;
      }
    </style>
    <div class="hder"><a href="index.php">Trang Chủ</a> / <a href="index.php?act=mycart&id=<?php echo $_SESSION['user']['id'] ?>">Đơn Hàng Của Tôi</a> / Chi Tiết Hóa Đơn</div>
    <div class='container1'>
        <div class="text">CHI TIẾT ĐƠN HÀNG</div>
         <div class="col"></div>
         <div class="col1">
         <?php foreach($result_chitiet_hoadon as $hoadon): ?>
         <div class="row1">
            <ul style="margin-left: 40px;">
                <li class="li">Tên Sản Phẩm <?php echo $hoadon['name'] ?></li> <br>
                <li class="li"><img src="./upload/<?php echo $hoadon['img'] ?>" alt="" width="100px" style="border-radius: 5px;"></li><br>
                <li class="li">Size : <?php echo $hoadon['size'] ?></li><br>
                <li class="li">Color : <?php echo $hoadon['color'] ?></li><br>
                <li class="li">Price : <?php echo $hoadon['price'] ?></li><br>
                <li class="li">Số Lượng : <?php echo $hoadon['soluong'] ?></li><br>
               
            </ul>
         </div>
        <?php endforeach ?>
       </div>
    </div>