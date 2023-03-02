<?php
  include ('../conn.php');
  include ('./utils.php');
  session_start();
  if (!isset($_SESSION['username'])) {
    alert('登陆失败，请重新登录', '../login.php');
  }

  // 查询借阅申请列表是否有数据
  $sql = "select * from borrow_list where state = 0";
  $rs = mysqli_query($conn, $sql);
  $num = mysqli_num_rows($rs);
  if ($num > 0) {
    $span = '<span class="layui-badge-dot"></span>';
  }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>图书管理系统</title>
  <link rel="stylesheet" href="../layui/css/layui.css">
  <script src="../layui/layui.js"></script>
</head>
<body>
<div class="layui-layout layui-layout-admin">
  <div class="layui-header">
    <div class="layui-logo layui-hide-xs layui-bg-black">图书管理系统</div>
    <!-- 头部区域（可配合layui 已有的水平导航） -->
    <ul class="layui-nav layui-layout-left">
      <!-- 移动端显示 -->
      <li class="layui-nav-item layui-show-xs-inline-block layui-hide-sm" lay-header-event="menuLeft">
        <i class="layui-icon layui-icon-spread-left"></i>
      </li>
      <li class="layui-nav-item layui-hide-xs"><a href="./index.php">首页</a></li>
    </ul>
    <ul class="layui-nav layui-layout-right">
      <li class="layui-nav-item layui-hide layui-show-md-inline-block">
        <!-- <a href="javascript:;">
          <img src="//tva1.sinaimg.cn/crop.0.0.118.118.180/5db11ff4gw1e77d3nqrv8j203b03cweg.jpg" class="layui-nav-img">
        </a> -->
        <dd><a href="../logout.php">退出登录</a></dd>
      </li>

      <li class="layui-nav-item layui-hide layui-show-md-inline-block">
        <dd><a href="./my_info_list.php">个人中心</a></dd>
      </li>
    </ul>
  </div>
  
  <div class="layui-side layui-bg-black">
        <div class="layui-side-scroll">
            <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
            <ul class="layui-nav layui-nav-tree" lay-filter="test">
                <li class="layui-nav-item">
                  <a href="javascript:;">用户管理</a>
                  <dl class="layui-nav-child">
                      <dd><a href="user_list.php">用户列表</a></dd>
                      <dd><a href="user_new.php">新增用户</a></dd>
                  </dl>
                </li>
                <li class="layui-nav-item layui-nav-itemed">
                <a class="" href="javascript:;">图书管理</a>
                    <dl class="layui-nav-child">
                        <dd><a href="./book_list.php">图书列表</a></dd>
                        <dd><a href="./book_new.php">新增图书</a></dd>
                        <dd><a href="./limits_list.php">借阅管理</a></dd>
                        <!-- <dd><a href="javascript:;">毁坏管理</a></dd> -->
                    </dl>
                </li>
                <li class="layui-nav-item">
                  <a href="javascript:;">借阅管理</a>
                  <dl class="layui-nav-child">
                      <dd><a href="./borrow_list.php">借阅申请<?php echo $span; ?></a></dd>
                      <dd><a href="./return_list.php">归还申请</a></dd>
                  </dl>
                </li>
                <li class="layui-nav-item">
                  <a href="javascript:;">权限管理</a>
                  <dl class="layui-nav-child">
                      <dd><a href="./limits_list.php">权限设置</a></dd>
                  </dl>
                </li>
                <li class="layui-nav-item">
                  <a href="javascript:;">分类管理</a>
                  <dl class="layui-nav-child">
                      <dd><a href="./assort_list.php">分类列表</a></dd>
                  </dl>
                </li>
            </ul>

        </div>
    </div>
  
  <div class="layui-body">
</div>
