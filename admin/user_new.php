<?php 
    include ('./header.php');    
    limits('用户管理');
?>

<div class="layui-body">
  <!-- 内容主体区域 -->
  <div style="padding: 15px;">
    <h2>用户管理</h2>
    <div class="layui-tab layui-tab-brief">
        <ul class="layui-tab-title">
            <li><a href="user_list.php">用户列表</a></li>
            <li class="layui-this">新增用户</li>
        </ul>
    </div>
    <div class="layui-tab-content">
        <div class="layui-tab-item layui-show">
            <div class="layui-row">
                <div class="layui-col-md8">
                <form class="layui-form" method="post" action="user_save.php">
                    <div class="layui-form-item">
                        <label class="layui-form-label">用户名：</label>
                        <div class="layui-input-block">
                            <input type="text" name="username" required  lay-verify="required" placeholder="请输入用户名" autocomplete="off" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">密码:</label>
                        <div class="layui-input-block">
                            <input type="password" name="password" required lay-verify="required" placeholder="请输入密码" autocomplete="off" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">确认密码:</label>
                        <div class="layui-input-block">
                            <input type="password" name="password2" required lay-verify="required" placeholder="请输入确认密码" autocomplete="off" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">真实姓名:</label>
                        <div class="layui-input-block">
                            <input type="text" name="real_name" required lay-verify="required" placeholder="请输入真实姓名" autocomplete="off" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <div class="layui-input-block">
                            <button class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>
                            <button type="reset" class="layui-btn layui-btn-primary">重置</button>
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