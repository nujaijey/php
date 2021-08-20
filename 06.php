<meta charset="utf-8">
<!-- if语句 -->
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

<!-- switch语句 -->
<?php
for ($i = 1; $i <= 100; $i++) {
    switch ($i) {
        case $i % 2 == 0:
            echo $i . "是偶数";
            echo "<br/>";
            break;
        case  $i % 2 == 1:
            echo $i . "是奇数";
            echo "<br/>";
            break;
    }
}
?>