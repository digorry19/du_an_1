<?php
function loadall_thongke()
{
    $sql = "select * from hoadon order by created_at";
    $listdoanhthu = pdo_query($sql);
    return $listdoanhthu;
}
function tongTien(){
    $sql = "SELECT SUM(chitiethoadon.total) FROM chitiethoadon INNER JOIN sanpham ON chitiethoadon.idsp = sanpham.id ";
    $result = pdo_query_one($sql);
    return $result;
}
function tongTaiKhoan(){
    $sql = "SELECT COUNT(taikhoan.id) from taikhoan WHERE taikhoan.role = 0";
    $result = pdo_query_one($sql);
    return $result;
}