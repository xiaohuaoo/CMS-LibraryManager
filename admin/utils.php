<?php
    // 检查权限的函数
    function checkbox_limits($limits) {
        $conn = @mysqli_connect('localhost', 'root', 'root', 'test') or die('connect failed');
        mysqli_query($conn, 'set names utf-8');
        $id = $_GET['id'];
        $sql = "select * from user where id = '$id' and limits like '%".$limits."%'";
        $rs = mysqli_query($conn, $sql);
        if (mysqli_num_rows($rs) > 0) {
            echo 'checked';
        }
    }

    // 判断用户是否具有访问权限
    function limits($limits) {
        $conn = @mysqli_connect('localhost', 'root', 'root', 'test') or die('connect failed');
        mysqli_query($conn, 'set names utf-8');
        $username = $_SESSION['username'];
        $sql = "select * from user where username = '$username' and limits like '%".$limits."%'";
        $rs = mysqli_query($conn, $sql);
        if (mysqli_num_rows($rs) < 1) {
            alert('您不具备访问该页面的权限', 'index.php');
            exit();
        }
    }
?>