<?php
    include ('../conn.php');
    $id = $_POST['id']; // 获取传过来的id
    $book_num = $_POST['book_num']; // 获取传过来的书本数量
    $return_num = $_POST['return_num']; // 获取传过来借阅的书本数量
    $state = $_POST['state'];

    // 归还书本的数量不能大于书本的数量
    if ($return_num > $book_num) {
        alert('您归还的书本数量超出书库存有的书本数量', 'manage_return_list.php');
    }

    // 如果状态为1表示处理未通过
    if ($state == 1) {
        alert('处理未通过', 'return_list.php');
        exit();
    }
    // 如果状态为3表示已处理通过并归还，更新书本数量
    if ($state == 3) {
        $book_num += $return_num;
        $sql = "update book_list set num = $book_num where id = $id";
        $rs = mysqli_query($conn, $sql);
    }
    $sql_return_num = "update borrow_list
     set state = $state where id = $id";
    $rs = mysqli_query($conn, $sql_return_num);
    if ($rs) {
        alert('处理成功', 'return_list.php');
    } else {
        alert('处理失败', 'return_list.php');
    }
