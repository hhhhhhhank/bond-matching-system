<?php require "../config.php"?>
<!doctype html>
<html class="no-js">
<head>

    <title>用户信息| 后台管理系统</title>

</head>
<body>

<?php include "admin_header.php" ?>

<div class="am-cf admin-main">

    <!-- sidebar start -->
<?php include"admin_sider.php"?>
<!-- sidebar end -->

<!-- content start -->
<div class="admin-content">
    <div class="am-cf am-padding">
        <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">用户资料</strong> /
            <small>Personal information</small>
        </div>
    </div>

    <hr/>

    <div class="am-g">

        <div class="am-u-sm-12 am-u-md-4 am-u-md-push-8"></div>

        <div class="am-u-sm-12 am-u-md-8 am-u-md-pull-4">
            <form class="am-form am-form-horizontal">
                <div class="am-form-group">
                    <label for="user-name" class="am-u-sm-3 am-form-label">用户名 / Name</label>

                    <div class="am-u-sm-9">
                        <input type="text" id="user-name" placeholder="用户名 / Name">
                        <small>用户名</small>
                    </div>
                </div>

                <div class="am-form-group">
                    <label for="user-email" class="am-u-sm-3 am-form-label">密码 / Password</label>

                    <div class="am-u-sm-9">
                        <input type="password" id="user-email" placeholder="密码 / Password">
                        <small>密码</small>
                    </div>
                </div>


                <div class="am-form-group">
                    <label for="user-email" class="am-u-sm-3 am-form-label">权限 / Password</label>

                    <div class="am-u-sm-9">
                        <select  id="user-jurisdiction" placeholder="密码 / Password">
                            <option>管理员</option>
                            <option>管理员</option>

                            <option>管理员</option>

                            </select>
                        <small>密码</small>
                    </div>
                </div>



                <div class="am-form-group">
                    <div class="am-u-sm-9 am-u-sm-push-3">
                        <button type="submit" class="am-btn am-btn-primary">保存修改</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- content end -->

</div>
<?php include "admin_footer.php" ?>
</body>
</html>
