<?php include ('./header.php');limits('图书管理');?>

<div class="layui-body">
  <!-- 内容主体区域 -->
  <div style="padding: 15px;">
    <h2>新增图书</h2>
    <div class="layui-tab layui-tab-brief">
        <ul class="layui-tab-title">
            <li><a href="book_list.php">图书列表</a></li>
            <li class="layui-this">新增图书</li>
        </ul>
    </div>
    <div class="layui-tab-content">
        <div class="layui-tab-item layui-show">
            <div class="layui-row">
                <div class="layui-col-md8">
                <form class="layui-form" method="post" action="book_new_save.php">
                    <div class="layui-form-item">
                        <label class="layui-form-label">图书名称：</label>
                        <div class="layui-input-block">
                            <input type="text" name="book_name" required  lay-verify="required" placeholder="请输入带书名号的图书名称" autocomplete="off" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">操作人员：</label>
                        <div class="layui-input-block">
                            <input type="text" name="username" value="<?php echo $_SESSION['username'] ?>" required  lay-verify="required" autocomplete="off" class="layui-input" disabled="disabled">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">图书类型：</label>
                        <div class="layui-input-block">
                            <select name="book_assort" lay-verify="required">
                                <option value="">请选择图书类型</option>
                                <option value="文学">文学</option>
                                <option value="历史">历史</option>
                                <option value="军事">军事</option>
                                <option value="娱乐">娱乐</option>
                                <option value="教材">教材</option>
                                <option value="惊悚">惊悚</option>
                            </select>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">图书位置：</label>
                        <div class="layui-input-block">
                            <select name="book_position" lay-verify="required">
                                <option value="">请选择图书位置</option>
                                <option value="A区">A区</option>
                                <option value="B区">B区</option>
                                <option value="C区">C区</option>
                                <option value="D区">D区</option>
                                <option value="E区">E区</option>
                            </select>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">数量：</label>
                        <div class="layui-input-block">
                            <input type="text" name="num" required lay-verify="required" placeholder="请输入图书数量" autocomplete="off" class="layui-input">
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

<script>
    form.verify({
        bookname: function(value, item){ //value：表单的值、item：表单的DOM对象
        if(!new RegExp("^《[a-zA-Z0-9_\u4e00-\u9fa5\\s·]+》$").test(value)){
                return '请以书名号开头结尾';
            }
        }
    })
</script>

<?php include ('./footer.php');?>