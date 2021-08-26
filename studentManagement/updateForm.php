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
    }

    h1 {
        margin-bottom: 30px;
    }

    p {
        line-height: 200%;
    }

    table,
    tr,
    td,
    th {
        border: 1px solid #ddd;
    }

    th,
    td {
        width: 200px;
        height: 20px;
    }
</style>

<body>
    <?php
    // 通过get请求得到学号 
    $id = $_GET["id"];
    // 连接数据库
    $dbhandle = mysqli_connect("localhost", "root", 123456);
    // 选择数据库
    mysqli_select_db($dbhandle, "php01");
    // 设置字符集，设置为中文
    $characterSet = "SET NAMES UTF8";
    mysqli_query($dbhandle, $characterSet);
    // 查询语句
    $sql = "SELECT * FROM user WHERE id = {$id}";
    // 执行查询
    $result = mysqli_query($dbhandle, $sql);
    // 把结果变为数据
    $dataInfo = mysqli_fetch_array($result);
    // 关闭数据库
    mysqli_close($dbhandle);
    ?>
    <div class="warp">
        <h1>修改学生</h1>
        <form action="update.php" method="post" id="formData">
            <p>
                学号：<input type="text" value="<?php echo $dataInfo["id"] ?>" name="id" id="id" readonly>
            </p>
            <p>
                姓名：<input type="text" value="<?php echo $dataInfo["name"] ?>" name="name" id="name" readonly>
            </p>
            <p>
                年龄：<input type="text" value="<?php echo $dataInfo["age"] ?>" name="age">
            </p>
            <p>
                QQ号：<input type="text" value="<?php echo $dataInfo["qq"] ?>" name="qq">
            </p>
            <p>
                手机号：<input type="text" value="<?php echo $dataInfo["mobile"] ?>" name="mobile" id="mobile">
            </p>
            <p>
                邮箱：<input type="text" value="<?php echo $dataInfo["email"] ?>" name="email">
            </p>
            <p>
                分数：<input type="text" value="<?php echo $dataInfo["score"] ?>" name="score">
            </p>
            <p>
                <input type="submit">
            </p>
        </form>
    </div>
    <script>
        // 获取表单元素
        var formData = document.getElementById("formData");
        // 当表单被提交的时候触发
        formData.onsubmit = function() {
            // 必填信息验证
            // 校验学号是否填写
            var id = document.getElementById("id").value;
            // 正则校验，如果当前的id不是5位数或者为空则不能提交
            if (!/^[\d]{5}$/.test(id)) {
                alert("请输入正确的学号");
                // 如果一旦返回false，则表单不能提交
                return false;
            }
            // 校验姓名，为空则不能提交
            var name = document.getElementById("name").value;
            if (!name) {
                alert("请输入姓名");
                return false;
            }
            // 校验手机号是否填写
            var mobile = document.getElementById("mobile").value;
            // 正则校验，如果当前的手机号不是11位数或者为空则不能提交
            if (!/^[\d]{11}$/.test(mobile)) {
                alert("请输入正确的手机号");
                // 如果一旦返回false，则表单不能提交
                return false;
            }
        }
    </script>
</body>

</html>