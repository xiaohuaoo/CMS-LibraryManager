<?php
    include ('../conn.php');
    $id = $_POST['id']; // 获取传过来的id
    $book_num = $_POST['book_num']; // 获取传过来的书本数量
    $borrow_num = $_POST['borrow_num']; // 获取传过来借阅的书本数量
    $state = $_POST['state'];

    // 借阅书本的数量不能大于书本的数量
    if ($borrow_num > $book_num) {
        alert('您借阅的书本数量超出书库存有的书本数量', 'manage_borrow_list.php');
    }

    // 如果状态为1表示处理未通过
    if ($state == 1) {
        alert('处理未通过', 'borrow_list.php');
        exit();
    }
    // 如果状态为2表示已处理通过，更新书本数量
    if ($state == 2) {
        $book_num -= $borrow_num;
        $sql = "update book_list set num = $book_num where id = $id";
        $rs = mysqli_query($conn, $sql);
    }
    $sql_borrow_num = "update borrow_list
     set state = $state where id = $id";
    $rs = mysqli_query($conn, $sql_borrow_num);
    if ($rs) {
        alert('处理成功', 'borrow_list.php');
    } else {
        alert('处理失败', 'borrow_list.php');
    }
