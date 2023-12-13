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
       table{
        margin-left: 5px;
       }
      th{
        width: 300px;
        height: 40px;
      }
      .tb{
        margin-left: 29px;
      }
      button{
        border: none;
        width: 50px;
        border-radius: 4px;
        transition: all 1s;
      }
      button:hover{
        background-color: gray;
        color: white;
      }
      .doanhthu{
        margin-top: 50px;
        font-size: 25px;
        color: white;
      }
      .ctn1{
        border: 1px solid gray;
        border-radius: 5px;
        margin-top: 100px;
            margin-left: 300px;
            width: 1140px;
            height: 500px auto;
            
      }
      .textand{
        color: white;
        font-size: 20px;
      }
      .ip{
        background-color: transparent;
        border: none;
        color: white;
        width: 150px;
      }
      .loc{
        width: 100px;
        border: 2px solid white;
        background-color: transparent;
        color: white;
      }
    </style>
    

      
    <div class='container'>
        <div class="text" style="color:white;">THONG KE DOANH THU</div>
         <div class="col" style='margin-bottom: 100px;'>
           
        <form action="index.php?act=thongke" method="post" >
        <input type="date" name="batdau" id="" class="ip"><input type="date" name="den" id="" class="ip">
        <input type="submit" value="Lọc" name="loc" class="loc">
        </form> <br> <br>
        <?php if(isset($thongke_dt_nt)){ ?>
        <div style="position: absolute;" class="textand">
          Doanh Thu Từ <?php echo $from .' Đến '.$to ?> Là :  <?php $tongtientk = 0; foreach($thongke_dt_nt as $thongke){
                        $tongtientk+=$thongke['tongprice'];
          } echo number_format($tongtientk,0,',','.'); ?> VNĐ
        </div>
        <?php }else{?>
          <div style="position: absolute; color:white;font-size: 20px;">
          Doanh Thu Tất Cả : <?php $dttt =0; foreach($thongke_dt as $dt){
                            $dttt += $dt['tongprice'];
          } echo number_format($dttt,0,',','.');
          ?> VNĐ
        </div>
        <?php } ?> 
         </div>
       
        
    </div>
    <div class='ctn1'>
        <div class="text" style="color:white;">TOP 5 SẢN PHẨM BÁN CHẠY</div>
         <div class="col">
            <table>
                <tr>
                    <th style="color:white;" >CLICK</th>
                    <th style="color:white;">TÊN HÀNG HÓA</th>
                    <th style="color:white;">GIÁ</th>
                    <th style="color:white;">ẢNH</th>
                    <th style="color:white;">LƯỢT MUA</th>
                    
      

                </tr>
            </table>
         </div>
         <div class="row">
            <?php if(isset($result_thongke_top5)):
                foreach($result_thongke_top5 as $thongke_top5):
                
                ?>
         <table class='tb'>
                <tr>
                    <th><input type="checkbox" name="checkbox" id=""></th>
                    <th><?php echo $thongke_top5['name'] ?></th>
                    <th><?php echo $thongke_top5['price'];  ?></th>
                    <th>
                      <img src="./<?php echo $thongke_top5['img'];  ?>" alt="" width="100px">
                    </th>
                    <th><?php echo $thongke_top5['luotmua'];  ?></th>
                   
                    

                </tr>
            </table>
            <?php endforeach ?>
            <?php endif  ?>
         </div>
        
    </div>