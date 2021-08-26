<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
    }

    .warp {
        width: 900px;
        margin: 10px auto;
        border: 1px solid #ddd;
        padding: 10px;
    }

    h1 {
        margin-top: 10px;
    }

    p {
        line-height: 200%;
    }

    table,
    tr,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
        margin: 10px 50px;
        text-align: center;
    }

    tr,
    td {
        width: 200px;
        height: 20px;
    }

    a {
        text-decoration: none;
    }
</style>

<body>
    <?php
    // 连接数据库
    $dbhandle = mysqli_connect("localhost", "root", 123456);
    // 选择数据库
    mysqli_select_db($dbhandle, "php01");
    // 设置字符集，设置为中文
    $characterSet = "SET NAMES UTF8";
    mysqli_query($dbhandle, $characterSet);
    // 查询语句
    $sql = "SELECT * FROM user";
    // 执行查询
    $result = mysqli_query($dbhandle, $sql);
    // 关闭数据库
    mysqli_close($dbhandle);
    ?>
    <div class="warp">
        <h1>学生管理系统</h1>
        <p>学生信息的清单列表：</p>
        <table>
            <tr>
                <th>学号</th>
                <th>姓名</th>
                <th>详细信息</th>
                <th>修改信息</th>
                <th>删除</th>
            </tr>
            <?php
            while ($row = mysqli_fetch_array($result)) {
            ?>
                <tr>
                    <td><?php echo $row["id"] ?></td>
                    <td><?php echo $row["name"] ?></td>
                    <td><a href="info.php?id=<?php echo $row["id"] ?>">详细信息</a></td>
                    <td><a href="update.php?id=<?php echo $row["id"] ?>">修改信息</a></td>
                    <td><a href="delete.php?id=<?php echo $row["id"] ?>" name="delete">删除</a></td>
                </tr>
            <?php } ?>
        </table>
    </div>
    <script>
        // 当点击删除时有一个请提示，是否删除？
        var delDoms = document.getElementsByName("delete");
        for (var i = 0; i < delDoms.length; i++) {
            delDoms[i].onclick = function() {
                var con = confirm("确认要删除这条信息嘛？");
                // 用户返回的结果来执行不同的语句
                if (con) {
                    return true;
                } else {
                    // 如果返回false，则a标签的href不会跳转
                    return false;
                }
            }
        }
    </script>
</body>

</html>