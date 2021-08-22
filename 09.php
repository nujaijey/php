<meta charset="utf-8">
<?php
// 连接数据库：需要连接的服务器，用户名和密码
$dbhandle = mysqli_connect("localhost", "root", "123456")
    or die("Unable to connect to MySQL");
// 选择哪个数据库
mysqli_select_db($dbhandle, "php01")
    or die("Could not select examples");
// 设置字符集
$characterSet = "SET NAMES UTF8";
mysqli_query($dbhandle, $characterSet);
// 向对应的数据库插入数据
$sql = "INSERT INTO user VALUES('小王',24,12312380,13099876912,'768868812@qq.com',95)";
// 执行命令
$result = mysqli_query($dbhandle, $sql);
echo "<h1>插入数据成功！！</h1>";
?>