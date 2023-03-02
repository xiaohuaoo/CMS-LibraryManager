# CMS-图书管理系统功能简介

## 起步：安装PHPStudy

官网：https://www.xp.cn/

* 启动`Apache`和`MySQL`服务

![6J7Bx.png](https://i.328888.xyz/2023/03/02/6J7Bx.png)

* 创建一个站点：作为访问网站的入口

![6Jxka.png](https://i.328888.xyz/2023/03/02/6Jxka.png)

* 下载数据库管理工具

![6JEJk.png](https://i.328888.xyz/2023/03/02/6JEJk.png)

## 基本功能实现

**测试账号：zhangsan，密码：12345**

* 数据库链接文件
  
    * `conn.php`
    
    ```php
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
    ```
    
      

- 登陆
  
    * `login.php`
    
    ![6Jq0J.png](https://i.328888.xyz/2023/03/02/6Jq0J.png)
    
    * 验证登录信息 `login_check.php`
    
- 注册
  
    * `add.php`
    
    ![6JQ1t.png](https://i.328888.xyz/2023/03/02/6JQ1t.png)
    
    * 验证注册信息 `add_check.php`

* 首页

  ![6JuXc.png](https://i.328888.xyz/2023/03/02/6JuXc.png)

- 退出登录
    * `logout.php`
      *在 admin/header.php 验证 session 是否存在*![6MChp.png](https://i.328888.xyz/2023/03/02/6MChp.png)
    

### admin权限下的功能

* 个人中心

  * 个人中心首页 `my_info_list.php`

  ![6KZKA.png](https://i.328888.xyz/2023/03/02/6KZKA.png)

  * 编辑用户信息 `user_edit.php`

  ![6KVDo.png](https://i.328888.xyz/2023/03/02/6KVDo.png)

  * 借阅申请 `my_borrow_list.php`*（和借阅管理 borrow_list.php 是一样的写的是跳转）*

  ![6K0Kx.png](https://i.328888.xyz/2023/03/02/6K0Kx.png)

  * 我的书籍 `my_book_list.php`

  ![6KmRH.png](https://i.328888.xyz/2023/03/02/6KmRH.png)

* 用户管理

  * 用户列表 `user_list.php`

  ![6KySV.png](https://i.328888.xyz/2023/03/02/6KySV.png)

  * 新增用户 `user_new.php`

  ![6KDbb.png](https://i.328888.xyz/2023/03/02/6KDbb.png)

  * 保存用户信息 `user_save.php`

  * 检索内容 `user_list_search.php`

  ![6KAid.png](https://i.328888.xyz/2023/03/02/6KAid.png)

  * 保存用户编辑信息 `user_edit_update.php`

  ![6Kf3N.png](https://i.328888.xyz/2023/03/02/6Kf3N.png)

  * 删除用户信息 `user_delete.php`

* 图书列表
  
    * 图书列表首页 `book_list.php`
    
    ![6KUzq.png](https://i.328888.xyz/2023/03/02/6KUzq.png)
    
    * 新增图书 `book_new.php`
    
    ![6KkXa.png](https://i.328888.xyz/2023/03/02/6KkXa.png)
    
    * 保存新增图书 `book_new_save.php`
    
    * 删除图书 `book_delete.php`
    
    ![6KWCw.png](https://i.328888.xyz/2023/03/02/6KWCw.png)
    
    * 检索图书 `book_list_search.php`
    
    ![6Kn1z.png](https://i.328888.xyz/2023/03/02/6Kn1z.png)
    
* 借阅管理

    * 借阅申请 `borrow_list.php`

    ![6K0Kx.png](https://i.328888.xyz/2023/03/02/6K0Kx.png)

    * 检索图书 `borrow_list_search.php`

    ![6KlUk.png](https://i.328888.xyz/2023/03/02/6KlUk.png)

    * 展示借阅申请信息 `manage_borrow_list.php`

    ![6Kw3L.png](https://i.328888.xyz/2023/03/02/6Kw3L.png)

    * 处理借阅申请 `manage_borrow_update.php`

    * 归还申请列表 `return_list.php`
    
    ![6K2Sp.png](https://i.328888.xyz/2023/03/02/6K2Sp.png)
    
    * 处理归还申请 `manage_return_list.php`
    
    ![6KOVU.png](https://i.328888.xyz/2023/03/02/6KOVU.png)
    
    * 更新归还列表 `manage_borrow_update.php`

* 权限管理
  
    * 权限设置列表 `limits_list.php`
    
    ![6Kj63.png](https://i.328888.xyz/2023/03/02/6Kj63.png)
    
    * 检索权限 `limits_list_search.php`
    
    ![6K8Qy.png](https://i.328888.xyz/2023/03/02/6K8Qy.png)
    
    * 修改权限 `limits_edit.php`
    
    ![6KNC5.png](https://i.328888.xyz/2023/03/02/6KNC5.png)
    
    * 保存权限` limits_update.php`
    
* 分类管理
  
    * 分类列表 `assort_list.php`
    
    ![6Krg8.png](https://i.328888.xyz/2023/03/02/6Krg8.png)
    
    * 检索分类名 `assort_list_search.php`
    
    [![6MabU.png](https://i.328888.xyz/2023/03/02/6MabU.png)](https://imgloc.com/i/6MabU)
    
    * 删除分类列表 `assort_list_delete.php`
    
    ![6K3LZ.png](https://i.328888.xyz/2023/03/02/6K3LZ.png)
    
* 工具类 `utils.php`
    *里面有在 limits_edit.php 中检查权限的函数和判断用户是否具有访问权限的函数*

## **数据库test的数据**

* 用户管理：`user`表

  ![6KcUF.png](https://i.328888.xyz/2023/03/02/6KcUF.png)

* 我的书籍：my_book_list

  ![6KpSQ.png](https://i.328888.xyz/2023/03/02/6KpSQ.png)

* 图书列表：book_list

  ![6KXVE.png](https://i.328888.xyz/2023/03/02/6KXVE.png)

* 借阅管理：borrow_list

  ![6KgjC.png](https://i.328888.xyz/2023/03/02/6KgjC.png)

* 分类管理：assort

  ![6Kx6P.png](https://i.328888.xyz/2023/03/02/6Kx6P.png)

## 帮助

​	**如遇到无法解决的问题可以私信我或者通过邮箱[[A1962400598@163.com](mailto:A1962400598@163.com)]联系我 **՞•ᴥ•՞