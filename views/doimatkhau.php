<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Reset some default styles */
body, h1, h2, p, input {
    margin: 0;
    padding: 0;
}

body {
    font-family: Arial, sans-serif;
}

/* Style for the form container */
.row2.form_content {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #f4f4f4;
}

/* Style for form labels */
.row2.form_content label {
    display: block;
    margin-bottom: 5px;
}

/* Style for form input fields */
.row2.form_content input[type="text"],
.row2.form_content input[type="password"] {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

/* Style for form submit button */
.row2.form_content input[type="submit"],
.row2.form_content input[type="reset"],
.row2.form_content input[type="button"] {
    background-color: #4caf50;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.row2.form_content input[type="submit"]:hover,
.row2.form_content input[type="reset"]:hover,
.row2.form_content input[type="button"]:hover {
    background-color: #45a049;
}

/* Style for error message */
.row2.form_content font {
    display: block;
    margin-top: 10px;
}

/* Responsive styling for small screens */
@media screen and (max-width: 600px) {
    .row2.form_content {
        width: 100%;
        box-sizing: border-box;
    }
}
<style>
    .success {
        color: green;
    }

    .error {
        color: red;
    }
</style>


    </style>
</head>
<body>
<div class="row2">
    <div class="row2 font_title">
        <h1 style="text-align: center;">Đổi mật khẩu</h1>
    </div>
    <div class="row2 form_content ">
    <form action="" method="POST">
    <div class="row2 mb10 form_content_container">
        <label> Tên người dùng </label> <br>
        <input type="text" name="user" placeholder="user" value="<?= $_SESSION['username'] ?>">
    </div>
    <div class="row2 mb10 form_content_container">
        <label> Mật khẩu cũ </label> <br>
        <input type="text" name="pass_cu" placeholder="Nhập mật khẩu cũ">
    </div>
    <div class="row2 mb10 form_content_container">
        <label> Mật khẩu mới </label> <br>
        <input type="text" name="pass_moi" placeholder="Nhập mật khẩu mới">
    </div>
    <div class="row mb10">
        <input class="mr20" type="submit" name="doimatkhau" value="Đổi mật khẩu">
        <input class="mr20" type="reset" value="NHẬP LẠI">
    </div>
    <?php
    if (isset($thongbao)) {
        // Tạo một thẻ span với class tương ứng cho màu sắc
        $class = ($thongbao == "Đổi mật khẩu thành công") ? 'success' : 'error';
        echo '<span class="' . $class . '">' . $thongbao . '</span>';
    }
    ?>
</form>

    </div>
</div>
</body>
</html>