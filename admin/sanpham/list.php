
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
        .ct{
          width: 100px;
          height: 35px;
          border: 2px solid white;
          background-color: transparent;
          color: white;
        }
      </style>
    </head>
    <body>
      <div class="ctn">
           
        <div class="text" style="color:white;"> SAN PHAM</div>
        <table >
           <thead style="color:white;">
           <th>CLICK</th>
                    <th>MA LOAI</th>
                    <th>TEN SAN PHAM</th>
                    
                    <th>IMG</th>
                    <th>PRICE</th>
                    
                    <th>MO TA</th>
                    <th>COLOR</th>
                    <th>NGAY DANG</th>
                    <th>IDDM</th>
                    <th>THAO TAC THUC HIEN</th>
           </thead>
           <tbody>
            <?php 
           
            foreach($result as $sp):?>
           
           <tr>
                    <td><input type="checkbox" name="checkbox" id=""></td>
                    <td><?php echo $sp['id'] ?></td>
                    <td><?php echo $sp['name'] ?></td>
                  
                    <td><img src="../upload/<?php echo $sp['img'] ?>" alt="" width="100px"></td>
                    <td><a href="index.php?act=bienthe&idsp=<?php echo $sp['id'] ?>"><button class="ct">Xem Chi Tiết </button></a></td>
                    
                    <td><?php echo $sp['mota'] ?></td>
                    <td><?php echo $sp['color'] ?></td>
                    <td><?php echo $sp['date'] ?></td>
                    <td><?php echo $sp['iddm'] ?></td>
          
                    <td><a href="index.php?act=suasp&id=<?php echo $sp['id'] ?>"><button class="sua">SỬA</button></a> <a href="index.php?act=deletesp&id=<?php echo $sp['id'] ?>"><button onclick="return confirm('BẠN MUỐN XÓA SẢN PHẨM NÀY ?')" class="xoa">XÓA</button></a></td>

                </tr>
                <?php endforeach ?>
               
           </tbody>
        </table>
     <div class='pt'>
     <?php $limit = 4;
        $result_db =  all_row_in_sp();
       foreach($result_db as $all_records):
        $all_page = ceil($all_records[0] / $limit);
        for($i= 1;$i<$all_page;$i++): ?>
        <span >
          
        <a href="index.php?act=listsp&page=<?php echo $i ?>" class='phantrang' style="background-color: <?php if(isset($_GET['page'])
         
        ){
          if($_GET['page'] == $i){
            echo 'red';
          }
        } ?>"><?php echo $i ?> </a>
       
        </span>
        <?php endfor ?>
        <?php endforeach?>
     </div>
      </div>
    </body>
    </html>