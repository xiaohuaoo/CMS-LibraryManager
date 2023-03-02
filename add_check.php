<?php
    include ('conn.php');
    $username = $_POST['username'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];

    // 判断用户名是否存在
    $sql2 = "select * from user where username = '$username'";
    $rs2 = mysqli_query($conn, $sql2);
    if (mysqli_num_rows($rs2) > 0) {
        alert('该用户名已存在', 'add.php');
        exit();
    }

    if (strlen($username) < 5) {
        alert('用户名不能少于5个字', 'add.php');
        exit();
    }

    if ($password1 != $password2) {
        alert('两次输入的密码不相同，请重新输入', 'add.php');
        exit();
    }

    // 往user表插入一条数据
    // $sql = "insert into user(username, password)
    // values('$username', '$password1');";
    $sql = "INSERT INTO user(username, password)
    VALUES ('$username', '$password1');";

    $rs = mysqli_query($conn, $sql);
    if ($rs) {
        alert('注册成功', 'login.php');
    } else {
        alert('注册失败', 'add.php');
    }