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
    // 获取路由信息
    $age = $_POST["age"];
    $qq = $_POST["qq"];
    $mobile = $_POST["mobile"];
    $email = $_POST["email"];
    $score = $_POST["score"];
    // 修改语句
    $sql = "UPDATE user SET age={$age},qq={$qq},mobile={$mobile},email='{$email}',score={$score} WHERE id={$id}";
    // 执行修改
    $result = mysqli_query($dbhandle, $sql);
    // 关闭数据库
    mysqli_close($dbhandle);
    ?>
    <!-- 修改结果的显示信息 -->
    <div class="warp">
        <h1>修改结果</h1>
        <p>
            <?php
            if ($result == 1) {
                echo "当前id为{$id}的信息修改成功";
            } else {
                echo "当前id为{$id}的信息修改失败，请重新操作";
            }
            ?>
        </p>
        <a href="index.php">返回首页</a>
    </div>
</body>