<?php
session_start();
ob_start();

include('./model/pdo.php');
include('./model/danhmuc.php');
include('./model/sanpham.php');
include('./model/taikhoan.php');
include('./model/giohang.php');
include('./model/hoadon.php');
include('./model/pay.php');
include('./userprofile/header.php');
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'cart':
            include('cart.php');
            break;
        case 'search':
            if (isset($_GET['iddm'])) {
                $iddm = $_GET['iddm'];
            } else {
                $iddm = 0;
            }
            if (isset($_POST['search'])) {
                $kyws = $_POST['kyws'];
            } else {
                $kyws = '';
            }
            $search = search_danhmuc_kyws($iddm, $kyws);
            include('./userprofile/sanphamsearch.php');
            break;
        case 'sanphamct':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $sanphamct = sanpham_chitiet($id);
                // var_dump($sanphamct);die();
                extract($sanphamct);
                $iddm = $sanphamct[0]['iddm'];
                $sanphamlienquan = sanpham_lienquan($_GET['id'], $iddm);
                // var_dump($sanphamlienquan);die();
            }
            include('./userprofile/sanphamct.php');
            break;


        case 'dangki':
            unset($_SESSION['err']);
            if (isset($_POST['dangki'])) {
                $user = $_POST['user'];
                $email = $_POST['email'];
                $password = $_POST['password'];

                $target_dir = './upload/';
                $rand = rand(1, 100);

                $file_img = $_FILES['file_img']['name'];
                $target_file = $target_dir . '_' . $rand . '_' . $file_img;
                move_uploaded_file($_FILES['file_img']['tmp_name'], $target_file);
                if (empty($user)) {
                    $_SESSION['err']['username'] = 'Bạn không được để trống Username!';
                } else {
                    if (strlen($user) < 6) {
                        $_SESSION['err']['username'] = 'User name phải hơn 6 kí tự!';
                    } else {
                        $resultall = select_taikhoan();
                        foreach ($resultall as $all_tk) {
                            if ($all_tk['user'] == $user) {
                                $_SESSION['err']['username'] = 'Usser name đã tồn tại !';
                            }
                        }
                    }
                }
                if (empty($email)) {
                    $_SESSION['err']['email'] = 'Bạn chưa nhập Email!';
                } else {
                    $regex_email = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/";
                    if (!preg_match($regex_email, $email)) {
                        $_SESSION['err']['email'] = 'Email không hợp Lệ!';
                    }else{
                        $resultvalidateemaail = result_validate_email($email); 
                        foreach($resultvalidateemaail as $validate){
                            if($validate['email'] == $email ){
                                $_SESSION['err']['email'] = 'Email đã tồn tại!';
                            }
                        } 
                    }
                }
                if (empty($password)) {
                    $_SESSION['err']['password'] = 'Bạn chưa nhập Password!';
                } else {
                    if (strlen($password) < 6) {
                        $_SESSION['err']['password'] = 'Password phải có trên 6 kí tự!';
                    }
                }

                // $ext = pathinfo($file_img, PATHINFO_EXTENSION);
                // $allowed = array('jpg','png','gif');
                // if( !in_array( $ext, $allowed ) ) {
                //     $_SESSION['err']['img'] = 'Chỉ đc import ảnh dạng jpg , png , gif!';
                // }
                if (empty($_SESSION['err'])) {
                    insert_account($user, $email, $password, $target_file);
                    $_SESSION['success'] = 'Đăng Kí Thành Công !';
                }
            }
            include('./userprofile/singup.php');
            break;
        case 'login':
            if (isset($_POST['login'])) {
                $user = $_POST['user'];
                $password = $_POST['password'];
                $results = check_login($user, $password);
                if (is_array($results)) {
                    var_dump($results);
                    $_SESSION['user'] = $results;
                    header('location:index.php');
                } else {
                    $_SESSION['success'] = 'Tài khoản không tồn tại !';
                }
            }
            include('./userprofile/login.php');
            break;
        case 'profile':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $user = user_profile($id);
            }
            include('./userprofile/profile.php');
            break;
        case 'updateacc':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $user = user_profile($id);
            }
            include('./userprofile/updateaccount.php');
            break;
        case 'chitiethoadon':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $result_chitiet_hoadon = chitiethoadon($id);
            }
            include('./userprofile/chitiethoadon.php');
            break;
        case 'updateaccount':
            if (isset($_POST['update'])) {
                $id = $_POST['id'];
                $user = $_POST['user'];
                $email = $_POST['email'];
                
                $add = $_POST['add'];
                $sdt = $_POST['sdt'];
                $target_file = $_POST['file_img'];
                $size = $_FILES['file_img']['size'];
                if ($size > 0) {
                    $target_dir = './upload/';
                    $file_img = $_FILES['file_img']['name'];
                    $rand = rand(1, 100);
                    $target_file = $target_dir . '/' . $rand . '.' . $file_img;
                    move_uploaded_file($_FILES['file_img']['tmp_name'], $target_file);
                }
                update_account_id($id, $user, $email , $add, $sdt, $target_file);
                $user = user_profile($id);
                $_SESSION['user'] = $user;
            }
            include('./userprofile/profile.php');
            break;
        case 'logout':
            session_destroy();
            header('location:index.php');
            break;
        case 'deletecmt':
            if (isset($_GET['id'])) {
                $sql = 'DELETE FROM binhluan WHERE id=' . $_GET['id'];
                pdo_execute($sql);
                header("location:" . $_SERVER['HTTP_REFERER']);
            }
            break;
        case 'deletecmtreply':
            if (isset($_GET['id'])) {
                $sql = 'DELETE FROM replybinhluan WHERE id=' . $_GET['id'];
                pdo_execute($sql);
                header("location:" . $_SERVER['HTTP_REFERER']);
            }
            break;
        case 'giohang':
            unset($_SESSION['size']);
            if (isset($_SESSION['user'])) {
                if (isset($_POST['addcart'])) {
                    $idtk = $_SESSION['user']['id'];
                    $id = $_POST['id'];
                    $name = $_POST['name'];
                    $price = $_POST['price'];
                    $soluong = $_POST['quantityProduct'];
                    $img = $_POST['img'];
                    $color = $_POST['color'];
                    $size =  $_POST['size'];
                    if ($size == "") {
                        setcookie('size', 'Vui lòng chọn size', time() + 5);
                        $_SESSION['size'] = 'Vui lòng chọn Size !';
                        header('location:' . $_SERVER['HTTP_REFERER']);
                    }
                    $tongprice = (int)$soluong * (int)$price;
                    if (empty($_SESSION['size'])) {
                        $select_gh_id = select($id);
                        // var_dump($select_gh_id['size']);die();
                      
                        if($select_gh_id['idsp'] === $id && $select_gh_id['size'] === $size && $id && $select_gh_id['color'] ===$color){
                          
                               
                                update_gh2($id,$select_gh_id['soluong'],$soluong,$price,$size,$select_gh_id['id']);
                                   $insert_sesion =  insert_session($idtk);
                                     $_SESSION['cart'] = $insert_sesion;
                        
                      
                    
                         
                        }else if($select_gh_id['idsp'] != $id){
                            insert_cart($name, $price, $tongprice,  $soluong, $img, $color, $size, $id, $idtk);
                            $insert_sesion =  insert_session($idtk);
                            $_SESSION['cart'] = $insert_sesion;
                        }else if($select_gh_id['idsp'] === $id && $select_gh_id['size'] !== $size){
                            insert_cart($name, $price, $tongprice,  $soluong, $img, $color, $size, $id, $idtk);
                            $insert_sesion =  insert_session($idtk);
                            $_SESSION['cart'] = $insert_sesion;
                        }else if($select_gh_id['idsp'] === $id && $select_gh_id['color'] !== $color &&  $select_gh_id['size'] === $size  ){
                            insert_cart($name, $price, $tongprice,  $soluong, $img, $color, $size, $id, $idtk);
                            $insert_sesion =  insert_session($idtk);
                            $_SESSION['cart'] = $insert_sesion;
                        }
                       
                        header("location:index.php?act=viewgiohang&id=" . $idtk);
                    }
                }
            } else {
                header("location:" . $_SERVER['HTTP_REFERER']);
                $cookie = ' Bạn phải đăng nhập để thêm sản phẩm vào giỏ hàng';
                setcookie('tb', $cookie, time() + 5);
            }
            include('./userprofile/sanphamct.php');
            break;

        case 'viewgiohang':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];

                if ($id > 0) {
                    $resultgh =  result_giohang($id);
                    $tongtiengh = result_tongtien($id);
                }
                $limit = 1;
                $rand = rand(1, 10);
                $resultspgh = resultsp_gh($limit, $rand);
            }
            include('./userprofile/giohang.php');
            break;
        case 'xoagh':
            unset($_SESSION['cart']);
            if (isset($_GET['id']) && isset($_GET['iduser'])) {
                $id = $_GET['id'];
                $idtk = $_GET['iduser'];
                xoa_gh_id($id);
                $insert_sesion =  insert_session($idtk);
                $_SESSION['cart'] = $insert_sesion;
                header("location:" . $_SERVER['HTTP_REFERER']);
            }
            include('./userprofile/giohang.php');
            break;
        case 'checkout':
            $tiengiohang = result_tongtien($_SESSION['user']['id']);
            $tientamtinh = 0;
            foreach ($tiengiohang as $tienday) {
                $tientamtinh += $tienday['tongprice'];
            }
            if (isset($_GET['id'])) {
                $id = $_GET['id'];

                if ($id > 0) {
                    $resultgh =  result_giohang($id);
                }
            }
            // var_dump($resultgh);die();
            $soluonghh = sohanghoa($_SESSION['user']['id']);
            $tongsoluong = 0;
            foreach ($soluonghh as $soluonghang) {
                $tongsoluong += $soluonghang['soluong'];
            }
            if (isset($_POST['voucher'])) {
                $voucher = $_POST['voucherS'];
                $id = $_POST['idtk'];
                $check_voucher = check_voucher($voucher);
                if (is_array($check_voucher)) {
                    $giamgia = $check_voucher['giam'];
                    $select_gh_voucher = sl_gh_vh($id);
                    // var_dump($select_gh_voucher);die();
                    $tongprice = 0;
                    foreach ($select_gh_voucher as $total) {
                        $tongprice += $total['tongprice'];
                    }
                    $chietkhau = $tongprice * $giamgia / 100;
                    $tongtiengh = $tongprice - $chietkhau;
                } else {
                    $_SESSION['sai'] = 'Voucher không tồn tại !';
                    $tongmoney = result_tongtien($id);
                    $tongtiengh = 0;
                    foreach ($tongmoney as $key => $value) {
                        $tongtiengh += $value['tongprice'];
                    }
                }
            } else {
                if (isset($_SESSION['user']['id'])) {

                    $tongmoney = result_tongtien($_SESSION['user']['id']);
                    $tongtiengh = 0;
                    foreach ($tongmoney as $key => $value) {
                        $tongtiengh += $value['tongprice'];
                    }
                }
            }
            if (isset($_POST['payUrl'])) {
                $iduser = $_SESSION['user']['id'];
                $name = $_POST['name'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $sdt = $_POST['sdt'];
                $ghichu = $_POST['ghichu'];
                $pttt = $_POST['radios'];
                $phuongthuc = pttt($pttt);
                $mahoadon = rand(100, 1000000);
                $ngaymuahang = date('Y-m-d');
                $soluonghh = sohanghoa($_SESSION['user']['id']);
                $tongsoluong = 0;
                foreach ($soluonghh as $soluonghang) {
                    $tongsoluong += $soluonghang['soluong'];
                }
                $tongtiengh = $_POST['tongpricegh'];
                if ($pttt == 0) {
                    insert_hoadon($iduser, $name, $mahoadon, $sdt, $email, $address, $pttt, $ngaymuahang, $tongsoluong, $tongtiengh);
                    hoadon_email($email, $name, $mahoadon, $sdt, $address, $phuongthuc, $ngaymuahang, $tongtiengh, $tongsoluong);
                    $resultgh =  result_giohang($_SESSION['user']['id']);
                    $getIDhoadon = getIdhoadon();

                    //    var_dump($getIDhoadon);die();
                    foreach ($resultgh as $donhang) {
                        insert_hoadonchitiet($donhang['namesp'], $donhang['img'], $donhang['size'], $donhang['color'], $donhang['price'], $donhang['tongprice'], $donhang['soluong'], $getIDhoadon['id']);
                    }
                    deletegh($_SESSION['user']['id']);
                    unset($_SESSION['cart']);
                    setcookie('yes','Đặt Hàng Thành Công . Vui lòng xem thông báo đơn hàng ở [ Email ] và Trạng thái đơn hàng ở [ Hóa Đơn Của Tôi ]  ! . Xin cảm ơn đã ủng hộ Preseden !',time()+5);
                    header('location:index.php');
                } else if ($pttt == 1) {
                    if (isset($_POST['payUrl'])) {
                        // insert_hoadon($iduser, $name, $mahoadon, $sdt, $email, $address, $pttt, $ngaymuahang, $tongsoluong, $tongtiengh);
                        // $resultgh =  result_giohang($_SESSION['user']['id']);
                        // $getIDhoadon = getIdhoadon();

                        $endpoint = "https://test-payment.momo.vn/v2/gateway/api/create";


                        $partnerCode = 'MOMOBKUN20180529';
                        $accessKey = 'klm05TvNBzhg7h7j';
                        $secretKey = 'at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa';
                        $orderInfo = "Thanh toán qua MoMo";
                        $amount = "10000";
                        $orderId = date('Y-m-d') .'_MHD_'. $mahoadon;
                        $redirectUrl = "http://localhost/duan1/index.php?act=thanks";
                        $ipnUrl = "http://localhost/duan1/index.php?act=thanks";
                        $extraData = "";



                        $partnerCode = $partnerCode;
                        $accessKey = $accessKey;
                        $serectkey =  $secretKey;
                        $orderId = $orderId; // Mã đơn hàng
                        $orderInfo = $pttt;
                        $amount = $tongtiengh;
                        $ipnUrl = $ipnUrl;
                        $redirectUrl = $redirectUrl;
                        $extraData = $extraData;

                        $requestId = time() . $mahoadon;
                        $requestType = "payWithATM";
                        // $extraData = ($_POST["extraData"] ? $_POST["extraData"] : "");
                        //before sign HMAC SHA256 signature
                        $rawHash = "accessKey=" . $accessKey . "&amount=" . $amount . "&extraData=" . $extraData . "&ipnUrl=" . $ipnUrl . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&partnerCode=" . $partnerCode . "&redirectUrl=" . $redirectUrl . "&requestId=" . $requestId . "&requestType=" . $requestType;
                        $signature = hash_hmac("sha256", $rawHash, $serectkey);
                        $data = array(
                            'partnerCode' => $partnerCode,
                            'partnerName' => "Test",
                            "storeId" => "MomoTestStore",
                            'requestId' => $requestId,
                            'amount' => $amount,
                            'orderId' => $orderId,
                            'orderInfo' => $orderInfo,
                            'redirectUrl' => $redirectUrl,
                            'ipnUrl' => $ipnUrl,
                            'lang' => 'vi',
                            'extraData' => $extraData,
                            'requestType' => $requestType,
                            'signature' => $signature
                        );
                        $result = execPostRequest($endpoint, json_encode($data));
                        $jsonResult = json_decode($result, true);  // decode json

                        //Just a example, please check more in there

                        header('Location: ' . $jsonResult['payUrl']);

                        insert_hoadon($iduser, $name, $mahoadon, $sdt, $email, $address, $pttt, $ngaymuahang, $tongsoluong, $tongtiengh);

                        $resultgh =  result_giohang($_SESSION['user']['id']);
                        $getIDhoadon = getIdhoadon();
                        // echo '<meta http-equiv="refresh" content="0;url=momo/atm_momo.php?tongtien='.$tongtiengh.'&madonhang='. $getIDhoadon['id'].'">';
                        //    var_dump($getIDhoadon);die();

                        foreach ($resultgh as $donhang) {
                            insert_hoadonchitiet($donhang['namesp'], $donhang['img'], $donhang['size'], $donhang['color'], $donhang['price'], $donhang['tongprice'], $donhang['soluong'], $getIDhoadon['id']);
                        }
                        deletegh($_SESSION['user']['id']);

                        unset($_SESSION['cart']);
                    }
                } else if ($pttt == 2) {

                    $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
                    $vnp_Returnurl = "http://localhost/duan1/index.php?act=thanks";
                    $vnp_TmnCode = "5RWJ4H0U"; //Mã website tại VNPAY 
                    $vnp_HashSecret = "USPLQVHYKRYZBLWMZQEKXHXNLVNNSQZB"; //Chuỗi bí mật

                    $vnp_TxnRef = $mahoadon; //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
                    $vnp_OrderInfo = 'Nội Dung Thanh Toán';
                    $vnp_OrderType = 'billpayment';
                    $vnp_Amount = $tongtiengh * 100;
                    $vnp_Locale = 'vn';
                    $vnp_BankCode = 'NCB';
                    $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
                    //Add Params of 2.0.1 Version
                    // $vnp_ExpireDate = $_POST['txtexpire'];

                    // $vnp_Bill_Mobile = $_POST['txt_billing_mobile'];
                    // $vnp_Bill_Email = $_POST['txt_billing_email'];
                    // $fullName = trim($_POST['txt_billing_fullname']);
                    // if (isset($fullName) && trim($fullName) != '') {
                    //     $name = explode(' ', $fullName);
                    //     $vnp_Bill_FirstName = array_shift($name);
                    //     $vnp_Bill_LastName = array_pop($name);
                    // }
                    // $vnp_Bill_Address = $_POST['txt_inv_addr1'];
                    // $vnp_Bill_City = $_POST['txt_bill_city'];
                    // $vnp_Bill_Country = $_POST['txt_bill_country'];
                    // $vnp_Bill_State = $_POST['txt_bill_state'];
                    // // Invoice
                    // $vnp_Inv_Phone = $_POST['txt_inv_mobile'];
                    // $vnp_Inv_Email = $_POST['txt_inv_email'];
                    // $vnp_Inv_Customer = $_POST['txt_inv_customer'];
                    // $vnp_Inv_Address = $_POST['txt_inv_addr1'];
                    // $vnp_Inv_Company = $_POST['txt_inv_company'];
                    // $vnp_Inv_Taxcode = $_POST['txt_inv_taxcode'];
                    // $vnp_Inv_Type = $_POST['cbo_inv_type'];
                    $inputData = array(
                        "vnp_Version" => "2.1.0",
                        "vnp_TmnCode" => $vnp_TmnCode,
                        "vnp_Amount" => $vnp_Amount,
                        "vnp_Command" => "pay",
                        "vnp_CreateDate" => date('YmdHis'),
                        "vnp_CurrCode" => "VND",
                        "vnp_IpAddr" => $vnp_IpAddr,
                        "vnp_Locale" => $vnp_Locale,
                        "vnp_OrderInfo" => $vnp_OrderInfo,
                        "vnp_OrderType" => $vnp_OrderType,
                        "vnp_ReturnUrl" => $vnp_Returnurl,
                        "vnp_TxnRef" => $vnp_TxnRef
                        // "vnp_ExpireDate" => $vnp_ExpireDate

                        // "vnp_Bill_Mobile" => $vnp_Bill_Mobile,
                        // "vnp_Bill_Email" => $vnp_Bill_Email,
                        // "vnp_Bill_FirstName" => $vnp_Bill_FirstName,
                        // "vnp_Bill_LastName" => $vnp_Bill_LastName,
                        // "vnp_Bill_Address" => $vnp_Bill_Address,
                        // "vnp_Bill_City" => $vnp_Bill_City,
                        // "vnp_Bill_Country" => $vnp_Bill_Country,
                        // "vnp_Inv_Phone" => $vnp_Inv_Phone,
                        // "vnp_Inv_Email" => $vnp_Inv_Email,
                        // "vnp_Inv_Customer" => $vnp_Inv_Customer,
                        // "vnp_Inv_Address" => $vnp_Inv_Address,
                        // "vnp_Inv_Company" => $vnp_Inv_Company,
                        // "vnp_Inv_Taxcode" => $vnp_Inv_Taxcode,
                        // "vnp_Inv_Type" => $vnp_Inv_Type
                    );

                    if (isset($vnp_BankCode) && $vnp_BankCode != "") {
                        $inputData['vnp_BankCode'] = $vnp_BankCode;
                    }
                    // if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
                    //     $inputData['vnp_Bill_State'] = $vnp_Bill_State;
                    // }

                    //var_dump($inputData);
                    ksort($inputData);
                    $query = "";
                    $i = 0;
                    $hashdata = "";
                    foreach ($inputData as $key => $value) {
                        if ($i == 1) {
                            $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
                        } else {
                            $hashdata .= urlencode($key) . "=" . urlencode($value);
                            $i = 1;
                        }
                        $query .= urlencode($key) . "=" . urlencode($value) . '&';
                    }

                    $vnp_Url = $vnp_Url . "?" . $query;
                    if (isset($vnp_HashSecret)) {
                        $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret); //  
                        $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
                    }
                    $returnData = array(
                        'code' => '00', 'message' => 'success', 'data' => $vnp_Url
                    );
                    if (isset($_POST['payUrl'])) {
                        header('Location: ' . $vnp_Url);
                        // die();
                    } else {
                        echo json_encode($returnData);
                    }

                    insert_hoadon($iduser, $name, $mahoadon, $sdt, $email, $address, $pttt, $ngaymuahang, $tongsoluong, $tongtiengh);
                    $resultgh =  result_giohang($_SESSION['user']['id']);
                    $getIDhoadon = getIdhoadon();

                    foreach ($resultgh as $donhang) {
                        insert_hoadonchitiet($donhang['namesp'], $donhang['img'], $donhang['size'], $donhang['color'], $donhang['price'], $donhang['tongprice'], $donhang['soluong'], $getIDhoadon['id']);
                    }
                    deletegh($_SESSION['user']['id']);

                    unset($_SESSION['cart']);
                }
            }


            include('./userprofile/billthanhtoan.php');
            break;
        case 'thankVnpay':
            if(isset($_GET['vnp_Amount'])){
                $vnp_Amount = $_GET['vnp_Amount'];
                $vnp_BankCode = $_GET['vnp_BankCode'];
                $vnp_BankTranNo = $_GET['vnp_BankTranNo'];
                $vnp_OrderInfo = $_GET['vnp_OrderInfo'];
                $vnp_PayDate= $_GET['vnp_PayDate'];
                $vnp_TmnCode = $_GET['vnp_TmnCode'];
                $vnp_SecureHash = $_GET['vnp_SecureHash'];
                
             
                
                insert_Vnpay($vnp_Amount,$vnp_BankCode,$vnp_BankTranNo,$vnp_OrderInfo,$vnp_PayDate,$vnp_TmnCode,$vnp_SecureHash);
            }
            include('./userprofile/thanksVNpay.php');
            break;
        case 'banchay':
            $sanphambanchay = sp_banchay();
            include('./userprofile/banchay.php');
            break;
        case 'thanks':
            if(isset($_GET['partnerCode'])){
                $partnerCode = $_GET['partnerCode'];
                $orderId = $_GET['orderId'];
                $requestId = $_GET['requestId'];
                $amount = $_GET['amount'];
                $orderInfo = $_GET['orderInfo'];
                $orderType = $_GET['orderType'];
                $transId = $_GET['transId'];
                $payType = $_GET['payType'];
                $signature = $_GET['signature'];
                insert_hoadon_momo($partnerCode,$orderId,$requestId,$amount,$orderInfo,$orderType,$transId,$payType,$signature);
            }
            include('./userprofile/thanks.php');
            break;

        case 'billthanhtoan':
            // $tiengiohang = result_tongtien($_SESSION['user']['id']);
            // $tientamtinh = 0;
            // foreach ($tiengiohang as $tienday) {
            //     $tientamtinh += $tienday['tongprice'];
            // }
            // if (isset($_GET['id'])) {
            //     $id = $_GET['id'];

            //     if ($id > 0) {
            //         $resultgh =  result_giohang($id);
            //     }
            // }
            // // var_dump($resultgh);die();
            // $soluonghh = sohanghoa($_SESSION['user']['id']);
            // $tongsoluong = 0;
            // foreach ($soluonghh as $soluonghang) {
            //     $tongsoluong += $soluonghang['soluong'];
            // }
            // if (isset($_POST['voucher'])) {
            //     $voucher = $_POST['voucherS'];
            //     $id = $_POST['idtk'];
            //     $check_voucher = check_voucher($voucher);
            //     if (is_array($check_voucher)) {
            //         $giamgia = $check_voucher['giam'];
            //         $select_gh_voucher = sl_gh_vh($id);
            //         // var_dump($select_gh_voucher);die();
            //         $tongprice = 0;
            //         foreach ($select_gh_voucher as $total) {
            //             $tongprice += $total['tongprice'];
            //         }
            //         $chietkhau = $tongprice * $giamgia / 100;
            //         $tongtiengh = $tongprice - $chietkhau;
            //         // var_dump($tongtiengh);die();
            //         //    header('location:index.php?act=billthanhtoan&id='.$id);

            //     } else {
            //         $_SESSION['sai'] = 'Voucher không tồn tại !';
            //         $tongmoney = result_tongtien($id);
            //         $tongtiengh = 0;
            //         foreach ($tongmoney as $key => $value) {
            //             $tongtiengh += $value['tongprice'];
            //         }
            //     }
            // } else {
            //     if (isset($_SESSION['user']['id'])) {

            //         $tongmoney = result_tongtien($_SESSION['user']['id']);
            //         $tongtiengh = 0;
            //         foreach ($tongmoney as $key => $value) {
            //             $tongtiengh += $value['tongprice'];
            //         }
            //     }
            // }
            // if (isset($_POST['dathang'])) {
            //     $id_post = $_POST['id_post'];
            //     $data =  result_giohang($id_post);
            //     //    var_dump($data);die();
            //     $mahoadon = rand(1, 10000);

            //     try {
            //         $db = new PDO('mysql:host=localhost;dbname=duan1_gr1', 'root', '');
            //         $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


            //         // Lặp qua từng phần tử của mảng và thêm vào cơ sở dữ liệu
            //         foreach ($data as $item) {
            //             $name = $item['namesp'];
            //             $img = $item['img'];
            //             $size = $item['size'];
            //             $color = $item['color'];
            //             $price = $item['tongprice'];
            //             $soluong = $item['soluong'];

            //             // Truy vấn SQL để thêm dữ liệu
            //             $sql = "INSERT INTO hoadonchitiet (mahoadon,name, img, size, color, price, soluong) 
            //     VALUES ($mahoadon,:name, :img, :size, :color, :price, :soluong)";

            //             $stmt = $db->prepare($sql);
            //             $stmt->bindParam(':name', $name);
            //             $stmt->bindParam(':img', $img);
            //             $stmt->bindParam(':size', $size);
            //             $stmt->bindParam(':color', $color);
            //             $stmt->bindParam(':price', $price);
            //             $stmt->bindParam(':soluong', $soluong);

            //             $stmt->execute();
            //         }
            //     } catch (PDOException $e) {
            //         echo "Error: " . $e->getMessage();
            //     }
            //     $iduser = $_POST['id'];
            //     $name = $_POST['name'];

            //     $sdt = $_POST['sdt'];
            //     $email = $_POST['email'];
            //     $address = $_POST['address'];
            //     $pttt = $_POST['pttt'];
            //     $date = date('Y-m-d');
            //     $tong = $_POST['tongtien'];
            //     $soluonghh1 = $_POST['soluongdh'];
            //     $phuongthuc = pttt($pttt);

            //     insert_hoadon($iduser, $name, $mahoadon, $sdt, $email, $address, $soluonghh1, $pttt, $date, $tong);

            //     hoadon_email($email, $name, $mahoadon, $sdt, $address, $phuongthuc, $date, $tong, $soluonghh1);
            //     $cookie = "Bạn Đã Đặt Hàng Thành Công ! Vui Lòng Xem Ở Mục Đơn Hàng Của Tôi Hoặc Hòm Thư Email! Mã Đơn Hàng Của Bạn Là :EXPRESSER" . $mahoadon;
            //     setcookie('dathang', $cookie, time() + 10);


            //     deletegh($_SESSION['user']['id']);
            // }

            // include('./userprofile/billthanhtoan.php');
            // break;
        case 'mycart':
            $resultsmycart = results_mycart($_SESSION['user']['id']);
            include('./userprofile/mycart.php');
            break;
       case 'update_trangthai_user':
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            update_trangthai_user($id);
        }
        $resultsmycart = results_mycart($_SESSION['user']['id']);
        include('./userprofile/mycart.php');
        break;
        case 'about':
            include('./userprofile/about.php');
            break;
        case 'lienhe':
            include('./userprofile/contact.php');
            break;
        case 'fogot_password':
            unset($_SESSION['errr']);

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $email = $_POST['email'];
                if (empty($email)) {
                    $_SESSION['errr'] = 'Bạn Chưa Nhập Email';
                } else {
                    $regex_email = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/";
                    if (!preg_match($regex_email, $email)) {
                        $_SESSION['errr'] = 'Email không hợp lệ !';
                    }
                }
                if (empty($_SESSION['errr'])) {
                    $result = result_email($email);
                    if ($result['email'] == $email) {

                        $user = $result['user'];
                        $password = $result['password'];
                        forgotPassword($user, $email, $password);
                        $_SESSION['success'] = 'Gửi thành công mật khẩu khôi phục !';
                        unset($_SESSION['errr']);
                        break;
                    } else {
                        $_SESSION['errr'] = 'Email không tồn tại !';
                    }
                }
            }

            include('./userprofile/fogotpass.php');

            break;
        case 'doipass':
            unset($_SESSION['err']);
            if (isset($_POST['submit'])) {
                $passwordold = $_POST['oldpass'];
                $password = $_POST['password'];
                $repassword = $_POST['repassword'];
                $id = $_POST['id'];
                if (empty($passwordold)) {
                    $_SESSION['err']['cu'] = 'Vui lòng nhập mật khẩu cũ';
                } else {
                    $result = password($passwordold, $id);
                    if ($result['password'] != $passwordold) {
                        $_SESSION['err']['cu'] = 'Mật khẩu cũ saii !';
                    }
                }
                if (empty($passwordold)) {
                    $_SESSION['err']['moi'] = 'Vui lòng nhập mật khẩu mới';
                }
                if (empty($passwordold)) {
                    $_SESSION['err']['remoi'] = 'Vui lòng nhập lại mật khẩu mới';
                } else {
                    if ($repassword != $password) {
                        $_SESSION['err']['remoi'] = 'Vui lòng nhập hai mật khẩu giống nhau !';
                    }
                }
                if (empty($_SESSION['err'])) {
                    update_matkhau($password, $id);
                    setcookie('cc', 'Đổi thành công !', time() + 6);
                    header('location:' . $_SERVER['HTTP_REFERER']);
                }
            }
            include('./userprofile/repass.php');
            break;

        default:
            include('./userprofile/home.php');
    }
} else {
    include('./userprofile/home.php');
}
include('./userprofile/footer.php');
ob_end_flush();
