<?php 
    include ('./header.php');
    limits('借阅管理');
    $id = $_GET['id'];
    // 从borrow_list中找到输入栏中的数据id
    $sql = "select * from borrow_list where id = $id";
    $rs = mysqli_query($conn, $sql);
    if ($rs) {
        $row = mysqli_fetch_assoc($rs);
        $book_id = $row['book_id'];
    }

    // 从book_list中找到借阅的图书id
    $sql_book = "select * from book_list where id = $book_id";
    $rs_book = mysqli_query($conn, $sql_book);
    if ($rs_book) {
        $row_book = mysqli_fetch_assoc($rs_book);
    }
?>

<div class="layui-body">
  <!-- 内容主体区域 -->
  <div style="padding: 15px;">
    <h2>借阅管理</h2>
    <div class="layui-tab layui-tab-brief">
        <ul class="layui-tab-title">
            <li class="layui-this">申请列表</li>
        </ul>
    </div>
    <div class="layui-tab-content">
        <div class="layui-tab-item layui-show">
            <div class="layui-row">
                <div class="layui-col-md8">
                <form class="layui-form" method="post" action="manage_borrow_update.php">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <input type="hidden" name="book_num" value="<?php echo $row_book['num']; ?>">
                    <input type="hidden" name="num" value="<?php echo $row['num']; ?>">
                    
                    <div class="layui-form-item">
                        <label class="layui-form-label">图书名称：</label>
                        <div class="layui-input-block">
                            <input type="text" name="book_name" 
                            value="<?php echo $row_book['book_name']; ?>" required  lay-verify="required" autocomplete="off" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">借阅人员：</label>
                        <div class="layui-input-block">
                            <input type="text" name="borrow_name" 
                            value="<?php echo $row['entry_user']; ?>" required  lay-verify="required" autocomplete="off" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">图书类型：</label>
                        <div class="layui-input-block">
                            <select name="book_assort" lay-verify="required" disabled="disabled">
                                <option value="">请选择类型</option>
                                <?php 
                                    $sql = "select * from assort order by id";
                                    $rs = mysqli_query($conn, $sql);
                                    if ($rs) {
                                        while ($rows = mysqli_fetch_assoc($rs)) {
                                            if ($rows['assort_name'] == $row_book['book_assort']) {
                                                echo "<option selected = \"selected\"
                                                value = ".$rows['assort_name'].">".$rows['assort_name']."</option>";
                                            } else {
                                                echo "<option value =\"".$rows['assort_name']."\">"
                                                .$rows['assort_name']."</option>";
                                            }
                                        }
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">图书位置：</label>
                        <div class="layui-input-block">
                            <select name="book_position" lay-verify="required" disabled="disabled">
                                <option value="">请选择位置</option>
                                <?php 
                                    echo "<option selected = \"selected\"
                                    value = ".$row_book['book_position'].">".$row_book['book_position']."</option>";                                    
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">数量：</label>
                        <div class="layui-input-block">
                            <input type="text" name="book_num" required lay-verify="required" autocomplete="off" class="layui-input"
                            value="<?php echo $row_book['num'] ?>" disabled="disabled">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">借阅数量：</label>
                        <div class="layui-input-block">
                        <input type="text" name="borrow_num" 
                            value="<?php echo $row['num'] ?>" required  lay-verify="required" autocomplete="off" placeholder="请输入需要借阅书籍的数量" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">是否通过：</label>
                        <div class="layui-input-block">
                            <select name="state" lay-verify="required" id="">
                                <option value="">请选择</option>
                                <option value="2">通过</option>
                                <option value="1">不通过</option>
                            </select>
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
    layui.use('table', function () {
        var table = layui.table;
        table.on('tool(test)', function (obj) {
            var tr = obj.data;
            let arr = Object.values(tr);
            var eventName = obj.event;
            if (eventName == 'edit') {
                // 修改
                window.location.href="manage_borrow_handle.php?id=" + arr[0];
            }
        })
    })
</script>

<?php include ('./footer.php');?>
