<?php
    include ('conn.php');
    $_SESSION = [];
    session_destroy();
    alert('已成功退出', './login.php');