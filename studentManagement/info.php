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
    // 通过get请求得到学号 
    $id = $_GET["id"];
    // 连接数据库
    $dbhandle = mysqli_connect("localhost", "root", 123456);
    // 选择数据库
    mysqli_select_db($dbhandle, "php01");
    // 设置字符集，设置为中文
    $characterSet = "SET NAMES UTF8";
    mysqli_query($dbhandle, $characterSet);
    // 查询语句
    $sql = "SELECT * FROM user WHERE id = {$id}";
    // 执行查询
    $result = mysqli_query($dbhandle, $sql);
    // 把结果变为数据
    $dataInfo = mysqli_fetch_array($result);
    // 关闭数据库
    mysqli_close($dbhandle);
    ?>
    <div class="warp">
        <h1>详细信息</h1>
        <p>当前<?php echo $dataInfo["name"] ?>的详细信息为</p>
        <p>学号：<?php echo $dataInfo["id"] ?></p>
        <p>姓名：<?php echo $dataInfo["name"] ?></p>
        <p>年龄：<?php echo $dataInfo["age"] ?></p>
        <p>QQ：<?php echo $dataInfo["qq"] ?></p>
        <p>手机号码：<?php echo $dataInfo["mobile"] ?></p>
        <p>邮箱：<?php echo $dataInfo["email"] ?></p>
        <p>分数：<?php echo $dataInfo["score"] ?></p>
        <a href="index.php">返回首页</a>
    </div>
</body>

</html>