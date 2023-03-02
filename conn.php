<?php
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

    // 发送弹窗方法
    function alert ($str, $url) {
        echo '<script>alert("'.$str.'"); 
        location.href="'.$url.'";</script>';
    }

    // 接受由登陆界面传来的数据
    session_start();