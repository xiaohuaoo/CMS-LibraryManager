<?php
    include ('../conn.php');
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    $real_name = $_POST['real_name'];

    // 判断用户名是否存在
    $sql_checkname = "select * from user where username = '$username'";
    $rs_checkname = mysqli_query($conn, $sql_checkname);
    if (mysqli_num_rows($rs_checkname) > 0) {
        alert('该用户名已存在', 'user_new.php');
        exit();
    }

    if (strlen($username) < 5) {
        alert('用户名不能少于5个字', 'user_new.php');
        exit();
    }

    if ($password != $password2) {
        alert('两次输入的密码不相同，请重新输入', 'user_new.php');
        exit();
    }

    // 往user表插入一条数据
    $sql = "INSERT INTO user(username, password, real_name)
    VALUES ('$username', '$password', '$real_name');";
    $rs = mysqli_query($conn, $sql);
    if ($rs) {
        alert('新增用户成功', 'book_list.php');
    } else {
        alert('新增用户失败', 'book_new.php');
    }