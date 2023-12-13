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
        background-color: red;
      }
      button:hover{
        background-color: white;
        color: black;
      }
    </style>
    
    <div class='container'>
        <div class="text" style="color:white;"> VOUCHER</div>
         <div class="col">
            <table>
                <thead>
                <tr style="color:white;">
                    <th>CLICK</th>
                    <th>ID</th>
                    <th>MA CODE VOUCHER</th>
                    <th>GIAM THEO (%) </th>
                    <th>HẠN SỬ DỤNG</th>
                   

                </tr>
                </thead>
            
        
         </div>
         <div class="row">
            <?php if(isset($allvoucher)):
                foreach($allvoucher as $voucher):
                
                ?>
        
                <tr>
                    <th><input type="checkbox" name="checkbox" id=""></th>
                    <th><?php echo $voucher['id'] ?></th>
                    <th><?php echo $voucher['code'] ?></th>
                    <th><?php echo $voucher['giam'] ?> %</th>
                    <th><?php echo $voucher['thoigian'] ?></th>
                   

                </tr>
           
            <?php endforeach ?>
            <?php endif  ?> </table>
         </div>
         <!-- <script>
            alert('<?php if($notify){
                echo $notify;
                
            } ?>')
        </script> -->
    </div>