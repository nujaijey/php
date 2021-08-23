<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // 用数组来模拟数据库
    $arr = array(
        "10001" => array("name" => "小明", "age" => 22, "sex" => "男", "native" => "广东"),
        "10002" => array("name" => "小红", "age" => 18, "sex" => "女", "native" => "广西"),
        "10003" => array("name" => "小刚", "age" => 26, "sex" => "男", "native" => "河北"),
        "10004" => array("name" => "小陈", "age" => 28, "sex" => "男", "native" => "广东")
    );
    $id = $_GET["id"];
    ?>
    <h1>学生管理系统</h1>
    <ul>
        <li>学号：<?php echo $id ?></li>
        <li>姓名：<?php echo $arr[$id]["name"] ?></li>
        <li>年龄：<?php echo $arr[$id]["age"] ?></li>
        <li>性别：<?php echo $arr[$id]["sex"] ?></li>
        <li>籍贯：<?php echo $arr[$id]["native"] ?></li>
    </ul>
</body>

</html>