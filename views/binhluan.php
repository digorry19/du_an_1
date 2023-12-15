<?php
session_start();
include '../models/pdo.php';
include '../models/binhluan.php';
if (isset($_SESSION['username'])&&($_SESSION['username'] != "")){
    if (isset($_SESSION['username'])&&($_SESSION['username'] != "")){
        $user = $_SESSION['username'];
    }else{
        $user = "";
    }
    if (isset($_POST['guibinhluan'])&&($_POST['guibinhluan'] != "")){
        $name = $_POST['name'];
        $idsp = $_POST['idsp'];
        $noidung = $_POST['noidung'];
        $postday = date("Y-m-d");
        echo $name, $idsp, $noidung, $postday;
        insert_binhluan($name, $idsp, $noidung, $postday);
    }   
    
?>

<style>
    /* Style the form */
    form {
        margin-bottom: 20px;
    }

    /* Style form elements */
    input[type="text"],
    textarea {
        width: 100%;
        margin-bottom: 10px;
        padding: 8px;
        box-sizing: border-box;
    }

    button {
        padding: 10px;
        background-color: #4caf50;
        color: white;
        border: none;
        cursor: pointer;
    }

    /* Style comments */
    h4 {
        margin-top: 20px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 10px;
    }

    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #4caf50;
        color: white;
    }
</style>

<hr>
<form action="index.php?act=ctsp" method="post">
    <input type="text" name="name" value="<?= $user ?>">
    <input type="hidden" name="idsp" value="<?= $idsp ?>">
    <textarea name="noidung" id="" cols="30" rows="10"></textarea>
    <button type="submit" name="guibinhluan">Gửi bình luận</button>
</form>

<h4>Danh sách bình luận</h4>
<table>
    <tr>
        <th>Tên người dùng</th>
        <th>Bình luận</th>
        <th>Ngày bình luận</th>
        <th>Id sản phẩm</th>
    </tr>
    <?php 
        foreach($binhluan as $bl){
            echo '<tr>';
            echo '<td>' . $bl['name'] . '</td>';
            echo '<td>' . $bl['noidung'] . '</td>';
            echo '<td>' . date("d/m/Y", strtotime($bl['postdate'])) . '</td>';
            echo '<td>' . $bl['idsp'] . '</td>';
            echo '</tr>';
        }
    ?>
</table>
</hr>

</hr>

<?php }else{
    echo "<a href='?act=dangnhap' target='_parent' style=' padding: 10px;
    background-color: #4caf50;
    color: white;
    border: none;
    cursor: pointer;
    text-decoration: none;
    '>Vui lòng đăng nhập!</a>";
}


?>