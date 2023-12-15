<?php

function insert_cthd($idord, $idsp, $price, $quantity, $total)
{
    $sql = "INSERT INTO chitiethoadon (idord, idsp, price, quantity, total, created_at) VALUES ('$idord', '$idsp', '$price', '$quantity', '$total', NOW())";
    pdo_execute($sql);
}

function loadall_cthd($id)
{
    $sql = "SELECT *, sanpham.name AS spname, sanpham.pri_new AS spprice, sanpham.img1 AS spimg
FROM chitiethoadon
JOIN sanpham ON sanpham.id = chitiethoadon.idsp
WHERE chitiethoadon.idord = " . $id;
    $cthd = pdo_query($sql);
    return $cthd;
}