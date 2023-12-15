<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="in1">
        <input type="text" name="in2">
        <button name="submit">submit</button>
    </form>
</body>
</html>
<?php 
    if(isset($_POST['submit'])){
        $in1 = $_POST['in1'];
        $in2 = $_POST['in2'];
    }

    echo $in1; 
    echo $in2;


?>