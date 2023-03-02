<?php include ('./header.php');?>

<div class="layui-body">
  <!-- 内容主体区域 -->
  <div style="padding: 15px;">
    <h2>个人中心</h2>
    <div class="layui-tab layui-tab-brief">
        <ul class="layui-tab-title">
            <li><a href="./my_info_list.php">个人中心</a></li>
            <li><a href="./my_borrow_list.php">借阅申请</a></li>
            <li class="layui-this">我的书籍</li>
        </ul>
    </div>
    <div class="layui-tab-content">
        <div class="layui-tab-item layui-show">
            <table class="layui-table" lay-data="{
                height:350, 
                page:true, 
                id:'id_table',
                toolbar: false
            }" lay-filter="test">
                <thead>
                    <tr>
                        <td lay-data="{field:'id', width:80, sort: true}">ID</td>
                        <td lay-data="{field:'username'}">昵称</td>
                        <td lay-data="{field:'real_name'}">真实姓名</td>
                        <td lay-data="{field:'book_name'}">书名</td>
                        <td lay-data="{field:'num'}">数量</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $username = $_SESSION['username'];
                        $sql = "select * from my_book_list where username = '$username' order by id";
                        $rs = mysqli_query($conn, $sql);
                        if ($rs) {
                            while ($rows = mysqli_fetch_assoc($rs)) {
                                echo '<tr>';
                                echo '<td>'.$rows['id'].'</td>';
                                echo '<td>'.$rows['username'].'</td>';
                                echo '<td>'.$rows['real_name'].'</td>';
                                echo '<td>'.$rows['book_name'].'</td>';
                                echo '<td>'.$rows['num'].'</td>';
                                echo '</tr>';
                            }
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
                        if (eventName == 'chancel') {
                            // 取消申请
                            layer.confirm('您确定取消申请吗？', function(index) {
                                obj.del();
                                layer.close(index);
                                window.location.href="my_borrow_list_chancel.php?id=" + arr[0];
                            })
                        }
                    })
                })
            </script>
        </div>
    </div>
  </div>
</div>

<?php include ('./footer.php');?>
