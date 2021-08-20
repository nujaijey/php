<meta charset="utf-8">
<!-- 索引数组 -->
<?php
// 声明一个数组
$arr = array("马士兵", 123, true);
echo $arr[0];
echo "<br/>";

// 但是echo有一个弊端，只能返回某一个值，如果想要echo整个数组，则返回的是一个array的字符串
echo $arr;
echo "<br/>";

// 如果需要查看数组的全貌可以使用print_r()函数来进行输出
$arr = array("马士兵", 123, true);
print_r($arr);
echo "<br/>";
?>

<!-- 关联方式数组 -->
<!-- 关联方式定义的数组是一个自定义的key（下标索引值） -->
<?php
// 声明数组
$arr = array("name" => "小明", "age" => 18, "sex" => "男");
print_r($arr);
echo "<br/>";
// 通过方括号枚举对应的key得到value
echo ($arr["sex"]);
echo "<br/>";
?>

<!-- 可以自定义索引值参数，中间可以跳过 -->
<?php
// 声明一个数组
$arr = array("马士兵", 123, true);
$arr[100] = '你好';
print_r($arr);
// 取数组的长度（length）
echo "<br/>";
echo count($arr)
?>