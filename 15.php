<meta charset="utf-8">
<?php
// 得到用户的数据
$username = $_POST["username"];
$password = $_POST["password"];
$sex = $_POST["sex"];
// 反馈结果
echo "接收到的表单信息为：<br/>";
echo "用户名：" . $username . "<br/>";
echo "密码：" . $password . "<br/>";
echo "性别：" . $sex . "<br/>";
?>