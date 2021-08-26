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
    // 连接数据库
    $dbhandle = mysqli_connect("localhost", "root", 123456);
    // 选择数据库
    mysqli_select_db($dbhandle, "php01");
    // 设置字符集，选择中文
    $characterSet = "SET NAMES UTF8";
    mysqli_query($dbhandle, $characterSet);
    // 获取路由信息
    $id = $_POST["id"];
    $name = $_POST["name"];
    $age = $_POST["age"];
    $qq = $_POST["qq"];
    $mobile = $_POST["mobile"];
    $email = $_POST["email"];
    $score = $_POST["score"];
    // 插入语句
    $sql = "INSERT INTO user VALUES({$id},'{$name}',{$age},{$qq},{$mobile},'{$email}',{$score})";
    // 执行插入
    $result = mysqli_query($dbhandle, $sql);
    // 关闭数据库
    mysqli_close($dbhandle);
    ?>
    <div class="warp">
        <h1>增加结果</h1>
        <p>
            <?php
            if ($result == 1) {
                echo "当前id为{$id}的信息增加成功";
            } else {
                echo "当前id为{$id}的信息增加失败，请重新操作";
            }
            ?>
        </p>
        <a href="info.php?id=<?php echo $id ?>">查看详情</a>
        <a href="index.php">返回首页</a>
    </div>
</body>

</html>