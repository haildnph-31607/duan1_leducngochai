<?php
function insert_cart($name, $price, $tongtien,  $soluong,$img, $color, $size,$id,$idtk){
    $sql ="INSERT INTO giohang(namesp,price,tongprice,soluong,img,color,size,idsp,idtk) VALUE('$name','$price','$tongtien','$soluong','$img','$color','$size','$id','$idtk')";
    pdo_execute($sql);
}
function select($id){
    $sql="SELECT giohang.color AS color, giohang.id AS id, giohang.idsp AS idsp, giohang.size AS size, giohang.soluong AS soluong FROM giohang WHERE idsp=".$id;
    $result = pdo_query_one($sql);
    return $result;
}
function  update_gh2($id,$soluonght,$soluong,$price,$size,$idgh){
    $quantityUpdate = $soluonght + $soluong;
    $tongtienupdate = $quantityUpdate * $price;
    $sql="UPDATE giohang SET soluong='".$quantityUpdate."', tongprice='".$tongtienupdate."' WHERE id='".$idgh."'";
    pdo_execute($sql);
}

function allrowghcc($id){
    $sql="SELECT COUNT(giohang.id) FROM giohang WHERE idtk=".$id;
    $all = pdo_query($sql);
    return $all;
}
function insert_session($id){
    $sql="SELECT * FROM giohang WHERE idtk=".$id;
 
    $result = pdo_query($sql);
    return $result;
}

    function result_giohang($id){
        $sql = "SELECT * FROM giohang WHERE idtk=".$id;
        $gh = pdo_query($sql);
        return $gh;
    }
    function check_voucher($voucher){
        $sql="SELECT * FROM voucher WHERE code='".$voucher."'";
        $result = pdo_query_one($sql);
        return $result;
    }
    function sl_gh_vh($id){
        $sql="SELECT giohang.tongprice FROM giohang WHERE idtk=".$id;
        $ressult = pdo_query($sql);
        return $ressult;
    }
    function result_tongtien($id){
        $sql = "SELECT tongprice FROM giohang WHERE idtk=".$id;
        $result = pdo_query($sql);
        return $result;
    }
   function  xoa_gh_id($id){
    $sql = "DELETE FROM giohang WHERE id=".$id;
    pdo_execute($sql);
   }
   function deletegh($id){
    $sql = "DELETE FROM giohang WHERE idtk=".$id;
    pdo_execute($sql);
       }
    function sohanghoa($iduser){
        $sql = "SELECT giohang.soluong FROM giohang WHERE idtk=".$iduser;
        $result_sl =  pdo_query($sql);
        return $result_sl;
    }
?>