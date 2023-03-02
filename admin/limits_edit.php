<?php 
    include ('./header.php');
    limits('权限管理');
    $id = $_GET['id'];
    // 根据id查找要修改的一项信息
    $sql = "select * from user where id = '$id'";
    $rs = mysqli_query($conn, $sql);
    if ($rs) {
        $row = mysqli_fetch_assoc($rs);
    }
?>

<div class="layui-body">
  <!-- 内容主体区域 -->
  <div style="padding: 15px;">
    <h2>权限管理</h2>
    <div class="layui-tab layui-tab-brief">
        <ul class="layui-tab-title">
            <li class="layui-this">修改用户权限</li>
        </ul>
    </div>
    <div class="layui-tab-content">
        <div class="layui-tab-item layui-show">
            <div class="layui-row">
                <div class="layui-col-md8">
                <form class="layui-form" method="post" action="limits_update.php">
                    <!-- 获取从user_list.php传来的id -->
                    <input type="hidden" name="id" class="layui-input" value=<?php echo $row['id'] ?>>
                    <div class="layui-form-item">
                        <label class="layui-form-label">用户名：</label>
                        <div class="layui-input-block">
                            <input type="text" name="username" required  lay-verify="required" placeholder="请输入用户名" autocomplete="off" class="layui-input"
                            value=<?php echo $row['username'] ?> disabled="disabled">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">真实姓名:</label>
                        <div class="layui-input-block">
                            <input type="text" name="real_name" required lay-verify="required" placeholder="请输入真实姓名" autocomplete="off" class="layui-input"
                            value=<?php echo $row['real_name'] ?> disabled="disabled">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">真实姓名:</label>
                        <div class="layui-input-block">
                            <input type="checkbox" name="limit0" value="用户管理" title="用户管理"<?php checkbox_limits('用户管理') ?>>
                            <input type="checkbox" name="limit1" value="图书管理" title="图书管理"<?php checkbox_limits('图书管理') ?>>
                            <input type="checkbox" name="limit2" value="借阅管理" title="借阅管理"<?php checkbox_limits('借阅管理') ?>>
                            <input type="checkbox" name="limit3" value="权限管理" title="权限管理"<?php checkbox_limits('权限管理') ?>>
                            <input type="checkbox" name="limit4" value="分类管理" title="分类管理"<?php checkbox_limits('分类管理') ?>>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <div class="layui-input-block">
                            <button class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>

<?php include ('./footer.php');?>