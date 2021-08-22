<meta charset="utf-8">
<!-- 判断用户输入的数字是否是一个质数 -->
<?php
// 获取用户输入到url的数据
$num = $_GET["num"];
// 计数器
$amount = 0;
for ($i = 1; $i <= $num; $i++) {
    if ($num % $i == 0) {
        $amount++;
    }
}
if ($amount == 2) {
    echo "当前的数字{$num}是一个质数";
} else {
    echo "当前的数字{$num}不是一个质数";
}
?>