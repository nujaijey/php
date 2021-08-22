<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table,
    tr,
    td {
        border-collapse: collapse;
        border: 1px solid black;
    }
</style>

<body>
    <!-- 数据可视化小案例-数据渲染表格 -->
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
    ?>
    <table>
        <tr>
            <td>姓名</td>
            <td>年龄</td>
            <td>qq</td>
            <td>手机号</td>
            <td>邮箱</td>
            <td>分数</td>
        </tr>
        <!-- 循环返回的结构然后渲染到table表格中 -->
        <?php
        while ($arr = mysqli_fetch_array($result)) {
        ?>
            <tr>
                <td>
                    <?php print_r($arr["name"]) ?>
                </td>
                <td>
                    <?php print_r($arr["age"]) ?>
                </td>
                <td>
                    <?php print_r($arr["qq"]) ?>
                </td>
                <td>
                    <?php print_r($arr["mobile"]) ?>
                </td>
                <td>
                    <?php print_r($arr["email"]) ?>
                </td>
                <td>
                    <?php print_r($arr["score"]) ?>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>