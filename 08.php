<meta charset="utf-8">
<!-- 小案例1-设置列表渲染数组 -->
<style>
    table,
    tr,
    td {
        border-collapse: collapse;
        border: 1px solid orange;
    }

    td {
        width: 120px;
        height: 20px;
    }

    .pink {
        background-color: pink;
    }
</style>
<ul>
    <?php
    $arr = array("马士兵", 123, true);
    for ($i = 0; $i < count($arr); $i++) {
    ?>
        <li>
            <?php echo $arr[$i] ?>
        </li>
    <?php } ?>
</ul>

<!-- 小案例2-设置表格的隔行变色 -->
<table>
    <?php for ($i = 0; $i < 20; $i++) { ?>
        <tr <?php if ($i % 2 == 0) echo "class='pink'" ?>>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    <?php } ?>
</table>