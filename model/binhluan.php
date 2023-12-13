<?php
function insert_binhluan($noidung,$date, $nameuser,$imgcmt,$iduser,$idsp){
    $sql = "INSERT INTO binhluan(noidung,ngaybinhluan,nameuser,img,iduser,idsp) VALUE('$noidung','$date','$nameuser','$imgcmt','$iduser','$idsp')";
    pdo_execute($sql);
}
function loadall_binhluan($idsp){
    $sql = "SELECT * FROM binhluan WHERE 1";
     if($idsp > 0) $sql.=" AND idsp='".$idsp."'";
     $sql.=" order by id desc";
     $listbl =  pdo_query($sql);
     return  $listbl;
}
function select_bl_bl($idsp){
$sql="SELECT * FROM binhluan WHERE idsp=".$idsp;
$ressult = pdo_query($sql);
return $ressult;
}
function list_binhluan_admin($start,$limit){
   $sql ="SELECT * FROM binhluan ORDER BY id DESC LIMIT $start,$limit";
    $binhluan =  pdo_query($sql);
    return  $binhluan;
}

function result_replycmt($idpro,$idss){
    $sql = "SELECT * FROM replybinhluan WHERE idsp='".$idpro."' AND  idbl='".$idss."'";
    $result = pdo_query($sql);
    return $result;
}
function delete_binhluan_vc($id){
    $sql ='DELETE FROM binhluan WHERE id='.$id;
    pdo_execute($sql);
}
function all_row_binhluan(){
    $sql="SELECT COUNT(binhluan.id) FROM binhluan";
    $result = pdo_query($sql);
    return $result;
}
?>