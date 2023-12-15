<?php
function insert_binhluan($iduser, $idsp, $noidung)
{
    $sql = "INSERT into binhluan(iduser,idsp,noidung,postdate) values ('$iduser','$idsp','$noidung', NOW())";
    pdo_execute($sql);
}

function load_binhluan()
{
    $sql = "select * from binhluan order by postdate";
    $listbl = pdo_query($sql);
    return $listbl;
}

function delete_binhluan($id)
{
    $sql = "delete from binhluan where id=" . $id;
    pdo_execute($sql);
}

function loadall_binhluan($idsp)
{
    $sql = "SELECT binhluan.*, taikhoan.user as user FROM binhluan 
    INNER JOIN taikhoan ON binhluan.iduser = taikhoan.id WHERE 1";
    if ($idsp > 0)
        $sql .= " AND idsp='" . $idsp . "'";
    $sql .= " ORDER BY id desc";
    $listbl = pdo_query($sql);
    return $listbl;
}
?>