<meta charset="utf-8">
<?php
// 运算符
// 加   
$a = 10;
$b = 20;
echo $a + $b; //30
echo "<br/>";
// 减法
$a = 20;
$b = 10;
echo $a - $b; //10
echo "<br/>";
// 乘法
$a = 20;
$b = 10;
echo $a * $b; //200
echo "<br/>";
// 除法
$a = 20;
$b = 10;
echo $a / $b; //2
echo "<br/>";
// 余数
$a = 20;
$b = 10;
echo $a % $b; //0
echo "<br/>";
// 逻辑与
$a = 20;
$b = 10;
echo $a && $b; //1
echo "<br/>";
// 逻辑或
$a = 20;
$b = 10;
echo $a || $b; //1
echo "<br/>";
// 逻辑非
$a = 20;
echo !$a; //空，布尔值false隐式转化为空
echo !!$a; //1
echo "<br/>";
// 自增
$a = 20;
echo ++$a; //21
echo "<br/>";


// 函数
$a = 100;
$b = 200;
function add()
{
    global $a;
    global $b;
    echo $a + $b;
}
add()
?>