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
$sql = "SELECT * FROM user";
// 执行命令
$result = mysqli_query($dbhandle, $sql);
// 此时我们输出这个$result是报错的，因为我们使用的echo和print_r都是不合法的，因为本身的返回结果不是基本类型值，也不是数组
// 所以我们要将结果转换为数组
// mysqli_fetch_array() 函数从结果集中取得一行作为关联数组，或数字数组，或二者兼有
while ($arr = mysqli_fetch_array($result)) {
    print_r($arr);
    echo "<br/>";
}
?>