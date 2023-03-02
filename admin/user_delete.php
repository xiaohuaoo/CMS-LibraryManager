<?php
    include ('../conn.php');
    $id = $_GET['id'];

    // 根据id删除user表中的信息
    $sql = "delete from user where id='$id'";
    $rs = mysqli_query($conn, $sql);
    if ($rs) {
        alert('删除成功', 'user_list.php');
    } else {
        alert('删除失败', 'user_list.php');
    }
    