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
    // 删除语句
    $sql = "DELETE FROM user WHERE id = {$id}";
    // 执行删除，执行成功返回1
    $result = mysqli_query($dbhandle, $sql);
    // 关闭数据库
    mysqli_close($dbhandle);
    ?>
    <!-- 删除结果的显示信息 -->
    <div class="warp">
        <h1>删除结果</h1>
        <p>
            <?php
            // sql执行成功返回1
            if ($result == 1) {
                echo "当前id为{$id}的信息删除成功";
            } else {
                echo "当前id为{$id}的信息删除失败，请重新操作";
            }
            ?>
        </p>
        <a href="index.php">返回首页</a>
    </div>
</body>

</html>