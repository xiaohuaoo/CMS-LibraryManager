<?php
    include ('../conn.php');
    echo $book_name = $_POST['book_name'];
    echo $book_assort = $_POST['book_assort'];
    echo $book_position = $_POST['book_position'];
    echo $num = $_POST['num'];

    // 判断书名是否存在
    $sql = "select * from book_list where book_name = '$book_name'";
    $rs = mysqli_query($conn, $sql);
    if (mysqli_num_rows($rs) > 0) {
        alert('该书名已存在，请重新输入！', 'book_new.php');
        exit();
    }
    
    // 往book_list表插入一条数据
    $sql_insertbook = "INSERT INTO book_list(book_name, book_assort, book_position, num)
    VALUES ('$book_name', '$book_assort', '$book_position', '$num');";
    $rs_insertbook = mysqli_query($conn, $sql_insertbook);
    if ($rs_insertbook) {
        alert('新增图书成功', 'book_list.php');
    } else {
        alert('新增图书失败', 'book_new.php');
    }