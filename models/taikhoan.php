<?php

function loadall_taikhoan()
{
    $sql = "SELECT * from taikhoan WHERE taikhoan.role = 0";
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}
function checkuser($user, $pass)
{
    $sql = 'SELECT * from taikhoan where user="' . $user . '" AND pass="' . $pass . '"';
    $tk = pdo_query_one($sql);
    if (count($tk) > 0)
        return $tk[0]['role'];
    else
        return 0;
}

function getuser($user, $pass)
{
    $sql = 'SELECT * from taikhoan where user="' . $user . '" AND pass="' . $pass . '"';
    $tk = pdo_query($sql);
    return $tk;
}


function delete_taikhoan($id)
{
    $sql = "delete from taikhoan where id=" . $id;
    pdo_execute($sql);
}

function insert_taikhoan($email, $user, $pass) {
    $sql = "INSERT INTO `taikhoan` (`email`, `user`, `pass`) VALUES ('$email', '$user', '$pass')";
    $result = pdo_execute($sql);

    return $result; // Trả về giá trị từ hàm pdo_execute()
}
function doimatkhau($user, $pass_cu, $pass_moi){
    $sql = 'UPDATE taikhoan SET pass="'.$pass_moi.'" WHERE user="'.$user.'" AND pass="'.$pass_cu.'"';
    pdo_execute($sql);
}
?>
