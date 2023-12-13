<?php
function   insert_hoadon($iduser, $name, $mahoadon, $sdt, $email, $address, $pttt, $ngaymuahang, $tongsoluong, $tongtiengh)
{
    $sql = "INSERT INTO hoadon(iduser,hoten,mahoadon,sdt,email,address,PT_TT,datebuy,soluonghh,tongprice) 
    VALUE('$iduser','$name','$mahoadon','$sdt','$email','$address','$pttt','$ngaymuahang','$tongsoluong','$tongtiengh')";

    pdo_execute($sql);
}
function getIdhoadon()
{
    $sql = "SELECT hoadon.id FROM hoadon ORDER BY id DESC";
    $result = pdo_query_one($sql);
    return $result;
}

function  results_mycart($id)
{
    $sql = "SELECT * FROM hoadon WHERE iduser=" . $id;
    $result = pdo_query($sql);
    return $result;
}
function select_dh(){
    $sql="SELECT * FROM hoadon ORDER BY id DESC";
    $result = pdo_query($sql);
    return $result;
}
function select_all_VNPAY(){
    $sql='SELECT * FROM payment ORDER BY id DESC';
    $result = pdo_query($sql);
    return $result;
}
function select_all_MOMO(){
    $sql='SELECT * FROM momo ORDER BY id DESC';
    $result = pdo_query($sql);
    return $result;
}
function select_all_donhang($trangthai)
{
    $sql = "SELECT * FROM hoadon WHERE 1 ";
    if($trangthai >= 0){
        $sql.=" AND trangthai='".$trangthai."'";
    }
    $sql.=" ORDER BY id DESC";
    $result = pdo_query($sql);
    return $result;
}
function  update_my_cart($id)
{
    $sql = "UPDATE hoadon SET trangthai= 4 WHERE id=" . $id;
    // var_dump($sql);die();
    pdo_execute($sql);
}
function delete_my_cart($id)
{
    $sql = "DELETE FROM hoadon WHERE iduser=" . $id;
    pdo_execute($sql);
}
function execPostRequest($url, $data)
{
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt(
        $ch,
        CURLOPT_HTTPHEADER,
        array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($data)
        )
    );
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
    //execute post
    $result = curl_exec($ch);
    //close connection
    curl_close($ch);
    return $result;
}


function phuongthucthanhtoan($pttt)
{
    switch ($pttt) {
        case 0:
            $pt = 'Thanh toán khi nhận hàng !';
            break;
        case 1:
            $pt = 'Thanh toán qua MOMO !';
            break;
    }
    return $pt;
}
function setup_trangthai($trangthaidh)
{
    switch ($trangthaidh) {
        case 0:
            $pt = '<div style="width:180px; height:30px; border:none;border-radius:5px; background-color:orange;padding:5px 0 5px 20px; color:white;">Chờ Xác Nhận !</div>';
            break;
        case 1:
            $pt = '<div style="width:180px; height:30px; border:none;border-radius:5px; background-color:green;padding:5px 0 5px 20px; color:white;">Đang Chuẩn bị Hàng  !</div>';
            break;
        case 2:
            $pt = '<div style="width:180px; height:30px; border:none;border-radius:5px; background-color:blue;padding:5px 0 5px 20px; color:white;">Đang Giao Hàng !</div>';
            break;
        case 3:
            $pt = '<div style="width:180px; height:30px; border:none;border-radius:5px; background-color:greenyellow;padding:5px 0 5px 20px; color:black;">Giao Hàng Thành Công !</div>';
            break;
        case 4:
            $pt = '<div style="width:180px; height:30px; border:none;border-radius:5px; background-color:lightgray;padding:5px 0 5px 20px; color:white;"> Đã Hủy !</div>';
            break;
    }
    return $pt;
}

function chitiethoadon($mahoadon)
{
    $sql = "SELECT * FROM hoadonchitiet WHERE idhoadon=" . $mahoadon;
    $result = pdo_query($sql);
    return $result;
}
function update_trangthai($id, $trangthai)
{
    $sql = "UPDATE hoadon SET trangthai='" . $trangthai . "' WHERE id=" . $id;
    pdo_execute($sql);
}
function update_trangthai_user($id)
{
    $sql = "UPDATE hoadon SET trangthai=4 WHERE id=" . $id;
    pdo_execute($sql);
}
function select_all_row()
{
    $sql = "SELECT COUNT(hoadon.id) FROM  hoadon";
    $result = pdo_query($sql);
    return $result;
}
function trangthai_dh($n)
{
    switch ($n) {
        case 0:
            $tt = "Chờ Xác Nhận!";
            break;
        case 1:
            $tt = "Đang Xử Lí";
            break;
        case 2:
            $tt = "Đang giao hàng !";
            break;
        case 3:
            $tt = "Đã giao hàng thành công !";
            break;
        case 4:
            $tt = 'Đã Hủy';
            break;
    }
    return $tt;
}
function  hoadon_email($email, $name, $mahoadon, $sdt, $address, $phuongthuc, $date, $tong, $soluonghh1)
{
    require './sendEmail/PHPMailer/src/Exception.php';
    require './sendEmail/PHPMailer/src/PHPMailer.php';
    require './sendEmail/PHPMailer/src/SMTP.php';

    $mail = new PHPMailer\PHPMailer\PHPMailer(true);
    try {
        //Server settings
        $mail->SMTPDebug =  PHPMailer\PHPMailer\SMTP::DEBUG_OFF;
        $mail->isSMTP(); // Sử dụng SMTP để gửi mail
        $mail->Host = 'smtp.gmail.com'; // Server SMTP của gmail
        $mail->SMTPAuth = true; // Bật xác thực SMTP
        $mail->Username = 'nguyenminhkhong2004@gmail.com'; // Tài khoản email
        $mail->Password = 'xqrm bdvw fght jmpr'; // Mật khẩu ứng dụng ở bước 1 hoặc mật khẩu email
        $mail->SMTPSecure = 'ssl'; // Mã hóa SSL
        $mail->Port = 465; // Cổng kết nối SMTP là 465

        //Recipients
        $mail->setFrom('nguyenminhkhong2004@gmail.com', 'Admin'); // Địa chỉ email và tên người gửi
        $mail->addAddress($email, $name); // Địa chỉ mail và tên người nhận

        //Content
        $mail->isHTML(true); // Set email format to HTML
        $mail->Subject = 'Preseden Thong Bao Don Hang Cua Ban !';
        $mail->Body = "
<h1>Preseden</h1>
<h2>Đơn Hàng Của Bạn </h2>
<hr>
<p>Xin chào '" . $name . "'</p>
<p>Bạn có một đơn hàng : EXXPRESHER '" . $mahoadon . "'</p>
<p> Số lượng đơn hàng là : '" . $soluonghh1 . "' </p>

<p> Tổng số tiền đơn hàng là : '" . number_format($tong, 0, ',', '.') . "VNĐ' </p>
<p> Phương thức thanh toán : '" . $phuongthuc . "' </p>
<p> Số điện thoại : '" . $sdt . "' </p>
<p> Địa chỉ nhận hàng : '" . $address . "' </p>
<p>  Ngày đặt hàng: '" . $date . "' </p>
<p style='font-weight:bold;'> Cảm ơn bạn đã tin tưởng Preseden ! </p>
<p style='font-weight:bold;'> Trân Trọng </p>

";
        $mail->send();
        // echo 'Message has been sent';
    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }
    header('location:' . $_SERVER['HTTP_REFERER']);
}
function doanhthutheothang($from,$to){
    $sql="SELECT tongprice FROM hoadon WHERE datebuy BETWEEN '".$from."' AND '".$to."' AND trangthai=3";
    // var_dump($sql);die();
    $result = pdo_query($sql);
    return $result;
}
function pttt($pttt)
{
    switch ($pttt) {
        case '0':
            $tt = 'Thanh toán khi nhận hàng ';
            break;
        case '1':
            $tt = 'Thanh toán Qua MOMO ';

            break;
        case '3':
            $tt = 'Thanh Toán Qua VNPAY';
            break;
    }
    return $tt;
}

function thongke_doanhthu_vip()
{
    $sql = "SELECT hoadon.tongprice FROM hoadon WHERE trangthai=3";
    $result = pdo_query($sql);
    return $result;
}
function insert_hoadonchitiet($name, $img, $size, $color, $price, $tongprice, $tongsoluong, $id)
{
    $sql = "INSERT INTO `hoadonchitiet`( `name`, `img`, `size`, `color`, `price`, `tongprice`, `soluong`, `idhoadon`) 
   VALUES ('$name','$img','$size','$color','$price','$tongprice','$tongsoluong','$id')";
    pdo_execute($sql);
}
// function xoachitiet($id){
//     $sql="DELETE FROM chitiethoadon WHERE idhoadon=".$id;
//     pdo_execute($sql);
// }
