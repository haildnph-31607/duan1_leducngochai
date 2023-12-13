
<html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>...</title>
      <style>
        .ctn{
          width: 1200px;  
          margin-left: 300px;
          margin-top: 120px;
          position: absolute;
          border-radius: 4px;
          border: 1px solid gray;
          border-radius: 5px;
          padding: 10px;
        
        }
        tr,th{
          width: 330px;
        }
        .phantrang{
          border: 1px solid black;
          background-color:black;
        margin-left: 10px;
        padding: 5px 10px 5px 10px;
  color: white;
        }
        .pt{
          position: absolute;
          left: 500px;
          bottom: -80px;
         
        }
       .phantrang:active{
        background-color: orange;
       }
       .sua{
        background-color: rgb(106, 106, 243);
        color: white;
        width: 50px;
        height: 35px;
        border: none;
        border-radius: 3px;
       }
       .xoa{
        background-color: rgb(240, 107, 107);
        color: white;
        width: 50px;
        height: 35px;
        border: none;
        border-radius: 3px;
       }
       .text{
            font-size: 25px;
            margin-top: 20px;
            margin-left: 20px;
        }
        .li{
            font-size: 20px;
            color: white;
            margin-top: 20px;
            list-style: none;
            margin-left: 50px;
        }
      </style>
    </head>
    <body>
      <div class="ctn">
           
        <div class="text" style="color:white;"> SAN PHAM CHI TIET</div>
        
                   <li class="li"> Tên Sản Phẩm : <?php echo $select_bienthe[0]['namesp'] ?></li>
                   <li class="li"> Ảnh Sản Phẩm : <img src="./<?php echo $select_bienthe[0]['img'] ?>" alt="" width="100px" style="border: 2px solid greenyellow;"></li>
                   <li class="li"> Giá Size S ---: <?php echo number_format($select_bienthe[0]['price'],0,',','.')?> VNĐ</li>
                 
                   <li class="li">Giá Size M ---: <?php echo number_format($select_bienthe[1]['price'],0,',','.') ?> VNĐ</li>
                   <li class="li">Giá Size L ---: <?php echo number_format($select_bienthe[2]['price'],0,',','.') ?> VNĐ</li>
                
                   <li class="li">Giá Size XL ---: <?php echo number_format($select_bienthe[3]['price'],0,',','.')?> VNĐ</li>
                   <li class="li">Số Lượng Size S ---: <?php echo $select_bienthe[0]['quantity'] ?> SP</li>
                   <li class="li">Số Lượng Size M ---: <?php echo $select_bienthe[1]['quantity'] ?> SP</li>
                   <li class="li">Số Lượng Size L ---: <?php echo $select_bienthe[2]['quantity'] ?> SP</li>
                   <li class="li">Số Lượng Size XL ---: <?php echo $select_bienthe[3]['quantity']?> SP</li>
         
                   

             
   
     
        
               
          
      
   
      </div>
    </body>
    </html>