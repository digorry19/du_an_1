<?php
function insert_sanpham($tensp, $giacu, $giamoi, $hinh1, $hinh2, $mota, $iddm)
{
    $sql = "insert into sanpham(name,pri_old,pri_new,img1,img2,mota,iddm) values('$tensp','$giacu','$giamoi','$hinh1','$hinh2','$mota','$iddm')";
    pdo_execute($sql);
}

function delete_sanpham($id)
{
    $sql = "delete from sanpham where id=" . $id;
    pdo_execute($sql);
}

function loadall_sanpham($kyw = "", $iddm = 0)
{
    $sql = "select * from sanpham where 1";
    if ($kyw != "") {
        $sql .= " and name like '%" . $kyw . "%'";
    }
    if ($iddm > 0) {
        $sql .= " and iddm = '" . $iddm . "'";
    }
    $sql .= " order by id asc";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function loadall_sanpham_home()
{
    $sql = "select * from sanpham where 1 order by id desc limit 0,8";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function loadall_sanpham_top4()
{
    $sql = "select * from sanpham where 1 order by luotxem desc limit 0,4";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function loadall_sanpham_top4_price()
{
    $sql = "select * from sanpham where 1 order by pri_new ASC limit 0,4";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function load_ten_dm($iddm)
{
    if ($iddm > 0) {
        $sql = "select * from danhmuc where id=" . $iddm;
        $dm = pdo_query_one($sql);
        extract($dm);
        return $name;
    } else {
        return "";
    }

}

function load_ten_sp($idsp)
{
    if ($idsp > 0) {
        $sql = "select * from sanpham where id=" . $idsp;
        $sp = pdo_query_one($sql);
        extract($sp);
        return $name;
    } else {
        return "";
    }

}

function loadone_sanpham($id)
{
    $sql = "select * from sanpham where id=" . $id;
    $sp = pdo_query_one($sql);
    return $sp;
}

function load_sanpham_cungloai($id, $iddm)
{
    $sql = "select * from sanpham where iddm=" . $iddm . " AND id<>" . $id;
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function update_sanpham($id, $iddm, $tensp, $giacu, $giamoi, $mota, $hinh1, $hinh2)
{
    if ($hinh1 != "")
        $sql = "update sanpham set  name='" . $tensp . "',pri_old='" . $giacu . "',pri_new='" . $giamoi . "',img1='" . $hinh1 . "',mota='" . $mota . "',iddm='" . $iddm . "' where id=" . $id;
    else
        $sql = "update sanpham set  name='" . $tensp . "',pri_old='" . $giacu . "',pri_new='" . $giamoi . "',mota='" . $mota . "',iddm='" . $iddm . "' where id=" . $id;
    pdo_execute($sql);

    if ($hinh2 != "")
        $sql = "update sanpham set  name='" . $tensp . "',pri_old='" . $giacu . "',pri_new='" . $giamoi . "',img2='" . $hinh2 . "',mota='" . $mota . "',iddm='" . $iddm . "' where id=" . $id;
    else
        $sql = "update sanpham set  name='" . $tensp . "',pri_old='" . $giacu . "',pri_new='" . $giamoi . "',mota='" . $mota . "',iddm='" . $iddm . "' where id=" . $id;
    pdo_execute($sql);
}

function count_sanpham($iddm)
{
    $sql = "SELECT COUNT(*) AS slsp FROM sanpham WHERE sanpham.iddm = danhmuc.id";
    $slsp = pdo_query($sql);
    return $slsp;
}

function update_view($id)
{
    $sql = "UPDATE sanpham SET luotxem = luotxem + 1 WHERE id = " . $id;
    pdo_execute($sql);
}
?>