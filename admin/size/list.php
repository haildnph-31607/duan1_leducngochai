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
        <div class="text" style="color:white;"> KÍCH CỠ</div>
         <div class="col">
            <table>
                <tr style="color:white;">
                    <th>CLICK</th>
                    <th>MA SIZE</th>
                    <th>TEN SIZE</th>
                   

                </tr>
            </table>
         </div>
         <div class="row">
            <?php if(isset($result_size)):
                foreach($result_size as $size):
                
                ?>
         <table class='tb'>
                <tr>
                    <th><input type="checkbox" name="checkbox" id=""></th>
                    <th><?php echo $size['id'] ?></th>
                    <th><?php echo $size['size'] ?></th>
                   

                </tr>
            </table>
            <?php endforeach ?>
            <?php endif  ?>
         </div>
         <!-- <script>
            alert('<?php if($notify){
                echo $notify;
                
            } ?>')
        </script> -->
    </div>