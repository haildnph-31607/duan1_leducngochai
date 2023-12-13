
<?php
session_start();
ob_start();
include('../model/pdo.php');
include('../model/binhluan.php');
include('../model/sanpham.php');
$idpro = $_REQUEST['idsp'];
$resultcmt= loadall_binhluan($idpro);
if(isset($_SESSION['idreply'])){
  $idss = $_SESSION['idreply'];
$result_reply = result_replycmt($idpro,$idss);
}
?>
<style>
  .formcmt{
    margin-left: -440px;
    margin-bottom: 20px;
  }
  .ipcmt{
    width: 200px;
    height: 20px;
    border: none;
    border-bottom: 1px solid purple;
    margin-left: 20px;
    border-left: 1px solid red;
  }
  .ipcmtt{
    width: 200px;
    height: 20px;
    border: none;
    border-bottom: 1px solid purple;
    margin-left: 60px;
    border-left: 1px solid red;
  }
  .repli{
    width: 80px;
    height: 20px;
    color: white;
    background-color: black;
    border: none;
    padding: 5px 5px 25px 5px;
  }
  .replibl{
    margin-left: 20px;
  }
  .i{
    position: absolute;
    left: -510px;
    top: -4px;
    border: 4px solid greenyellow;
    border-radius: 50%;
  }
 
</style>
                        <div class="coment" id='cmt'>
                        <?php if(isset($_SESSION['user'])){ ?>
                          <div class="i">
                            <img src="./<?php echo $_SESSION['user']['img'] ?>" alt="" style="width: 60px; height:60px; border-radius: 50%;">
                          </div>
                                <div class="formcmt">
                                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                                <input type="hidden"  value='<?php echo $idpro ?>' name='idproduct'>
                                    <input type="text" name="comment" class="ip" placeholder="Bình Luận ..."> 
                                    <input type="submit" value="Send" name='binhluan'  class="bt">
                                </form>
                            </div>
                            <?php }else{ ?>
                                <h4 style='color:red; margin-left:180px;text-decoration: underline;'>Bạn Phải Đăng Nhập Để Comment !</h4>
                                <?php } ?>
                            <div class="viewcmt">
                                <h4 style='margin-left:500px;margin-top: 5px;'>Ý Kiến Khách Hàng</h2>
                                <?php foreach($resultcmt as $cmt): ?>
                            <div class="vcmt">
                             <span class="imgname"> <img src="./<?php echo $cmt['img']  ?>" alt="" class="imgcmt" width="24px" style='border: 2px solid greenyellow;border-radius: 50%;'> <?php echo $cmt['nameuser'] ?></span>
                             <div class="ndmtt">
                               - <?php echo $cmt['noidung'] ?> <br>
                              
                              
                               
                                
                             </div>
                             <span class='time'><?php echo $cmt['ngaybinhluan'] ?></span>
                             <?php if(isset($_SESSION['user'])){
                                if($_SESSION['user']['user'] ==  $cmt['nameuser']){
                              ?>
                                <div class="thaotac">
                               <a href="index.php?act=deletecmt&id=<?php echo $cmt['id'] ?>" style='color:red;' class='xoacmt'> Xóa</a>
                          
                             </div>
                             <?php }?>
                               <?php } ?>
                            
                            </div>
                            <?php endforeach ?>
                            </div>
                         
                        </div> 


<?php
if(isset($_POST['binhluan'])){
    $noidung = $_POST['comment'];
    $date = date('Y-m-d');
    $nameuser = $_SESSION['user']['user'];
    $iduser = $_SESSION['user']['id'];
    $idsp = $_POST['idproduct'];
    $imgcmt = $_SESSION['user']['img'];
    insert_binhluan($noidung,$date, $nameuser,$imgcmt,$iduser,$idsp);
    header("location:".$_SERVER['HTTP_REFERER']);
}

ob_end_flush();
?>