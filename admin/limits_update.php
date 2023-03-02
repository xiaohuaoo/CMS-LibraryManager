<?php
    include ('../conn.php');
    $id = $_POST['id'];
    $limit = array(
        $_POST['limit0'],
        $_POST['limit1'],
        $_POST['limit2'],
        $_POST['limit3'],
        $_POST['limit4']
    );

    $limits = implode(' ', $limit);

    // 根据id更新user表中的权限
    $sql = "update user set limits = '$limits'
    where id = '$id'";
    $rs = mysqli_query($conn, $sql);
    if ($rs) {
        alert('修改成功', 'limits_list.php');
    } else {
        alert('修改失败', 'limits_list.php');
    }
    