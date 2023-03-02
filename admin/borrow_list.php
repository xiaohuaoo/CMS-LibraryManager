<?php include ('./header.php');limits('借阅管理');?>

<div class="layui-body">
  <!-- 内容主体区域 -->
  <div style="padding: 15px;">
    <h2>借阅申请</h2>
    <div class="layui-tab layui-tab-brief">
        <ul class="layui-tab-title">
            <li class="layui-this">申请列表</li>
            <li><a href="book_new.php">新增图书</a></li>
        </ul>
    </div>
    <div class="layui-tab-content">
        <div class="layui-tab-item layui-show">
            <!-- 搜索栏 -->
            <form class="layui-form" method="post" action="borrow_list_search.php">
                <div class="layui-form-item">
                    <div class="layui-inline">
                        <input type="text" name="search" required  lay-verify="required" placeholder="请输入带书名号的图书" autocomplete="off" class="layui-input">
                    </div>
                    <button type="submit" class="layui-btn layui-btn-normal">搜索</button>
                </div>
            </form>

            <!-- 编辑或删除的按钮 -->
            <script type="text/html" id="toolbar">
                <div class="layui-btn-container">
                    <a class="layui-btn layui-btn-xs layui-btn-normal" lay-event="handle">处理</a>
                </div>
            </script>

            <table class="layui-table" lay-data="{
                height:350, 
                page:true, 
                id:'id_table',
                toolbar: false
            }" lay-filter="test">
                <thead>
                    <tr>
                        <td lay-data="{field:'id', width:80, sort: true}">ID</td>
                        <td lay-data="{field:'book_name'}">书名</td>
                        <td lay-data="{field:'num'}">数量</td>
                        <td lay-data="{field:'state'}">状态</td>
                        <td lay-data="{field:'', toolbar: '#toolbar', width: 100}">操作</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql = "select * from borrow_list order by id";
                        $rs = mysqli_query($conn, $sql);
                            while ($rows = mysqli_fetch_assoc($rs)) {
                                if ($rs) {
                                    if ($rows['state'] == 0) {
                                        $state = '未处理';
                                    } else if($rows['state'] == 1){
                                        $state = '已处理未通过';
                                    } else if($rows['state'] == 2){
                                        $state = '已处理通过未归还';
                                    } else if($rows['state'] == 3){
                                        $state = '已处理通过并归还';
                                    }
                                }  

                                echo '<tr>';
                                echo '<td>'.$rows['id'].'</td>';
                                echo '<td>'.$rows['book_name'].'</td>';
                                echo '<td>'.$rows['num'].'</td>';
                                echo '<td>'.$state.'</td>';
                                echo '</tr>';
                            }                
                        ?>
                </tbody>
            </table>
            <script>
                layui.use('table', function () {
                    var table = layui.table;
                    table.on('tool(test)', function (obj) {
                        var tr = obj.data;
                        let arr = Object.values(tr);
                        var eventName = obj.event;
                            if (eventName == 'handle') {
                                // 处理书籍
                                window.location.href="manage_borrow_list.php?id="+arr[0];
                            }
                    })
                })
            </script>
        </div>
    </div>
  </div>
</div>

<?php include ('./footer.php');?>
