<?php
    include ('../conn.php');
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $real_name = $_POST['real_name'];

    if (strlen($username) < 5) {
        alert('用户名不能少于5个字', 'user_edit.php');
        exit();
    }

    if ($password1 != $password2) {
        alert('两次输入的密码不相同，请重新输入', 'user_edit.php');
        exit();
    }

    // 根据id更新user表中的信息
    $sql = "update user set username='$username', password='$password', real_name='$real_name'
    where id='$id'";
    $rs = mysqli_query($conn, $sql);
    if ($rs) {
        alert('修改成功', 'user_list.php');
    } else {
        alert('修改失败', 'user_list.php');
    }
    