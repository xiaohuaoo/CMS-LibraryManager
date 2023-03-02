<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="./layui/css/layui.css">
</head>
<body>
    <div class="layui-container">
        <div style="height: 180px;"></div>
        <div class="layui-row">
            <div class="layui-col-md4" style="height: 150px;"></div>
            <div class="layui-col-md4" style="height: 150px;">
                <h2 style="display:flex;  justify-content: center;">注册界面</h2>
                <form method="post" action="add_check.php" style="line-height: 35px;">
                    姓名：<input type="text" name="username" class="layui-input">
                    密码：<input type="text" name="password1" class="layui-input">
                    确认密码：<input type="text" name="password2" class="layui-input">
                    <div style="height: 15px;"></div>
                    <input type="submit" value="注册" class="layui-btn layui-btn-primary layui-btn-fluid"/>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

<script src="./layui/layui.js"></script>
<script>
    layui.use(['layer', 'form'], function(){
    var layer = layui.layer
    ,form = layui.form;
    
    // layer.msg('Hello World');
    });
</script> 
