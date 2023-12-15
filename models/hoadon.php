<?php

// require "../controls/Carbon/autoload.php";
// use Carbon\Carbon;
// use Carbon\CarbonInterval;

// printf("Now: %s", Carbon::now('Asia/Ho_Chi_Minh'));

// printf("1 day: %s", CarbonInterval::day()->forHumans());
// $now = Carbon::now("Asia/Ho_Chi_Minh");
function insert_hoadon($iduser, $name, $username, $city, $address, $phone, $email, $pay, $total)
{
    $sql = "INSERT INTO hoadon (iduser, name, username, city, address, phone, email, status, pay, created_at, total) VALUES ('$iduser', '$name', '$username', '$city', '$address', '$phone', '$email', 0, '$pay', NOW(), '$total')";
    $id = pdo_executeid($sql);
    return $id;

}


function loadall_hoadon()
{
    $sql = "select * from hoadon order by created_at";
    $listhoadon = pdo_query($sql);
    return $listhoadon;
}

function update_hoadon($id, $status)
{
    $sql = "UPDATE hoadon set status='" . $status . "' where id=" . $id;
    pdo_execute($sql);
}

function loadone_hoadon($id)
{
    $sql = "select * from hoadon where id=" . $id;
    $hd = pdo_query_one($sql);
    return $hd;
}

function giohang($iduser)
{
    $sql = "SELECT hoadon.*, COUNT(chitiethoadon.idsp) AS slsp 
    FROM hoadon 
    JOIN chitiethoadon ON chitiethoadon.idord = hoadon.id
    WHERE hoadon.iduser = " . $iduser . "
    GROUP BY hoadon.id";
    $gh = pdo_query($sql);
    return $gh;
}