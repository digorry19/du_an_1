<?php

function insert_baiviet($img, $name, $mota, $noidung)
{
    $sql = "insert into baiviet(img,name,mota,noidung,created_at) values('$img','$name','$mota','$noidung',NOW())";
    pdo_execute($sql);
}

function delete_baiviet($id)
{
    $sql = "delete from baiviet where id=" . $id;
    pdo_execute($sql);
}

function loadall_baiviet()
{
    $sql = "select * from baiviet order by id";
    $listbaiviet = pdo_query($sql);
    return $listbaiviet;
}

function loadone_baiviet($id)
{
    $sql = "select * from baiviet where id=" . $id;
    $bv = pdo_query_one($sql);
    return $bv;
}

function update_baiviet($id, $img, $name, $mota, $noidung)
{
    if ($img != "")
        $sql = "update baiviet set img='" . $img . "', name='" . $name . "',mota='" . $mota . "',noidung='" . $noidung . "' where id=" . $id;
    else
        $sql = "update baiviet set name='" . $name . "',mota='" . $mota . "',noidung='" . $noidung . "' where id=" . $id;
    pdo_execute($sql);
}
?>