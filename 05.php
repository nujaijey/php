<meta charset="utf-8">
<!-- for循环 -->
<?php
for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        echo $i . "是偶数";
        echo "<br/>";
    } else {
        echo $i . "是奇数";
        echo "<br/>";
    }
}
echo "<br/>";
?>

<!-- 第二种for循环是我们用的比较多的场景之一 -->
<!-- for循环的使用场景2 -->
<?php for ($i = 0; $i < 10; $i++) { ?>
    <h2>马士兵教育<?php echo $i ?></h2>
<?php } ?>

<!-- while循环 -->
<?php
$a = 10;
while ($a) {
    echo $a;
    echo "<br/>";
    $a--;
}
echo "<br/>";
?>

<!-- do-while循环 -->
<?php
$a = 10;
do {
    $a--;
    echo $a;
    echo "<br/>";
} while ($a);
echo "<br/>";
?>