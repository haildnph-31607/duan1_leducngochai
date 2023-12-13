<style>
        .container{
            margin-top: 100px;
            margin-left: 300px;
            width: 1200px;
            height: 500px auto;
            
            border: 1px solid gray;
            border-radius: 10px;
            overflow: hidden;
            padding-bottom: 20px;
           
        }
        .text{
            font-size: 25px;
            margin-top: 20px;
            margin-left: 20px;
        }
    
      .col{
        border: 1px solid white;
      }
      .col1{
        display: grid;
        grid-template-columns: 1fr 1fr;
      }
      .row{
        width: 500px;
       height: auto;
       padding-top: 50px;
       padding-bottom: 100px;
       border: 1px solid white;
       margin-left: 1px;
       margin-right: 1px;
       margin-top: 20px;
       color: white;
       position: relative;
       
      }
      li{
        list-style: none;
      }

    
    </style>
    
    <div class='container'>
        <div class="text">CHI TIẾT ĐƠN HÀNG</div>
 <div class="col"></div>
         <div class="col1">
         <?php foreach($result_chitiet_hoadon as $hoadon): ?>
         <div class="row">
            <ul>
                <li>Tên Sản Phẩm <?php echo $hoadon['name'] ?></li> <br>
                <li><img src="./<?php echo $hoadon['img'] ?>" alt="" width="100px" style="border-radius: 5px;"></li><br>
                <li>Size : <?php echo $hoadon['size'] ?></li><br>
                <li>Color : <?php echo $hoadon['color'] ?></li><br>
                <li>Price : <?php echo $hoadon['price'] ?></li><br>
                <li>Số Lượng : <?php echo $hoadon['soluong'] ?></li><br>
             
            </ul>
         </div>
         <?php endforeach ?>
        </div>
      
       
    </div>