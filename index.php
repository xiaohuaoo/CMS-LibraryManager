<?php
    $a = 1;
    $b = 2;
    $sum = $a + $b;
    // 多行文本字符串
    echo <<<EOF
        print($sum);
        <hr>
        var_dump($sum);
        <hr>
    EOF;
    // 定义一个常量
    define('MYNAME', '张三');
    echo MYNAME.'<br>';
    echo strlen(MYNAME).'<br>'; // 统计字符长度
    echo strpos('Hello', 'o').'<br>'; // 查找字符'o'所在的位置
    echo '<br>Hello World!</br>';
    echo '<h2>你好你好</h2><br>';
    // 创建一个数组
    $cars = array('bilij' => '98','兰博基尼', 34, 4, 5, 7);
    echo $carsNum = count($cars).'<br>'; // 统计数组元素个数
    echo $cars['bilij'].'<br>'; // 获取数组元素对应的值
    echo sort($cars); // 对数组排序（升序）
    for ($i=0; $i < $carsNum; $i++) { 
        echo $cars[$i].'<br>';
    }
    foreach ($cars as $j => $j_value) {
        echo $j.$j_value.'<br>';
    }

    function fn1($name)
    {
        echo '我是'.$name;
    }
    fn1('张三');

    // 链接MySQL：使用MySQLi方法
    $serverName = 'localhost';
    $userName = 'root';
    $userPassword = 'root';
    $dbname = 'test'; // 创建的数据库名称
    $conn = mysqli_connect($serverName, $userName, $userPassword, $dbname);
    if (!$conn) {
        die("Connection failed.".mysqli_connect_error());
    }
    echo 'Connection successfully';
    // 在链接成功的前提下，创建一个test的数据库
    // $sql = 'CREATE DATABASE test';
    // if (mysqli_query($conn, $sql)) {
    //     echo 'create database succeed.';
    // }else {
    //     echo 'create database failed.'.mysql_error($conn);
    // }
    // 在链接成功的前提下，创建一张在test数据库下的数据表
    // $sql = "CREATE TABLE test20220106(
    //     id INT(6) AUTO_INCREMENT PRIMARY KEY,
    //     real_name VARCHAR(30) NOT NULL,
    //     gender VARCHAR(30) NOT NULL,
    //     birthday VARCHAR(50),
    //     in_date TIMESTAMP
    // )";
    // if (mysqli_query($conn, $sql)) {
    //     echo 'create table succeed.';
    // }else {
    //     echo 'create table failed.'.mysql_error($conn);
    // }
    // 在链接成功的前提下，创建一张在test数据库下的数据表插入一条数据
    // $sql = "INSERT INTO test20220106(real_name, gender, birthday)
    // VALUES ('zs', 'male', '20220105');";
    // if (mysqli_query($conn, $sql)) {
    //     echo 'create table data succeed.';
    // }else {
    //     echo 'create table data failed.'.mysqli_error($conn);
    // }
    // 在链接成功的前提下，创建一张在test数据库下的数据表插入多条数据
    // $sql = "INSERT INTO test20220106(real_name, gender, birthday)
    // VALUES ('ls', 'male', '20220104');";
    // $sql .= "INSERT INTO test20220106(real_name, gender, birthday)
    // VALUES ('ww', 'female', '20220107');";
    // $sql .= "INSERT INTO test20220106(real_name, gender, birthday)
    // VALUES ('we', 'male', '20220103');";
    // if (mysqli_multi_query($conn, $sql)) {
    //     echo 'create table multiData succeed.';
    // }else {
    //     echo 'create table multiData failed.'.mysqli_error($conn);
    // }

    // 在链接成功的前提下，查询数据
    // $sql = "SELECT id, real_name, gender FROM test20220106 WHERE id < 10 ORDER BY id DESC";
    // $result = mysqli_query($conn, $sql);
    // if ($result) {
    //     while ($row = mysqli_fetch_assoc($result)) {
    //         // echo var_dump($row);
    //         echo "id:".$row['id']."姓名:".$row['real_name']."性别:".$row['gender'].'<br>';
    //     }
    // }else {
    //     echo 'no result.';
    // }

    // 在链接成功的前提下，更新数据
    // $sql = "UPDATE test20220106 SET real_name = 'chen', gender = 'female' WHERE id = 3";
    // $result = mysqli_query($conn, $sql);
    // if ($result) {
    //     echo '更新成功';
    // }else {
    //     echo 'no result.';
    // }

    // 在链接成功的前提下，删除数据
    // $sql = "DELETE FROM test20220106 WHERE id = 5";
    // $result = mysqli_query($conn, $sql);
    // if ($result) {
    //     echo '删除成功';
    // }else {
    //     echo 'no result.';
    // }


    // 关闭数据库链接
    mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="./layui/css/layui.css">
</head>
<body>
    <form method="get" action="01.php">
        姓名：<input name="name" type="text">
        密码：<input type="password" name="password" id="">
        <input type="submit" value="提交">
    </form>
    <form method="post" action="01.php">
        姓名：<input name="name2" type="text">
        密码：<input type="password" name="password2" id="">
        <input type="submit" value="提交">
    </form>

    <div class="layui-container">  
        常规布局（以中型屏幕桌面为例）：
        <div class="layui-row">
            <div class="layui-col-md9">
            你的内容 9/12
            </div>
            <div class="layui-col-md3">
            你的内容 3/12
            </div>
        </div>
        
        移动设备、平板、桌面端的不同表现：
        <div class="layui-row">
            <div class="layui-col-xs6 layui-col-sm6 layui-col-md4">
            移动：6/12 | 平板：6/12 | 桌面：4/12
            </div>
            <div class="layui-col-xs6 layui-col-sm6 layui-col-md4">
            移动：6/12 | 平板：6/12 | 桌面：4/12
            </div>
            <div class="layui-col-xs4 layui-col-sm12 layui-col-md4">
            移动：4/12 | 平板：12/12 | 桌面：4/12
            </div>
            <div class="layui-col-xs4 layui-col-sm7 layui-col-md8">
            移动：4/12 | 平板：7/12 | 桌面：8/12
            </div>
            <div class="layui-col-xs4 layui-col-sm5 layui-col-md4">
            移动：4/12 | 平板：5/12 | 桌面：4/12
            </div>
        </div>

        <button type="button" class="layui-btn">一个标准的按钮</button>
        <a href="http:/" class="layui-btn">一个可跳转的按钮</a>
    </div>
</body>
</html>

<script src="./layui/layui.js"></script>
<script>
    layui.use(['layer', 'form'], function(){
    var layer = layui.layer
    ,form = layui.form;
    
    layer.msg('Hello World');
    });
</script> 