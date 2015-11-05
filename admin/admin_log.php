<?php require "../config.php"?>
<!doctype html>
<html class="no-js">
<head>

    <title>日志| 后台管理系统</title>

</head>
<body>

<?php include "admin_header.php" ?>


<div class="am-cf admin-main">
    <!-- sidebar start -->
    <?php include "admin_sider.php" ?>
    <!-- sidebar end -->

    <!-- content start -->
    <div class="admin-content">
        <div class="am-cf am-padding">
            <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">错误日志</strong> /
                <small>Error Log</small>
            </div>
        </div>

        <hr/>

        <div class="am-g error-log">
            <div class="am-u-sm-12 am-u-sm-centered">
        <pre class="am-pre-scrollable">
            <span class="am-text-success">DATA</span><span class="am-text-danger">[error]</span> [google 123.124.2.2] client denied by server: /export/home/macadmin/testdoc

        </pre>

            </div>
        </div>
    </div>
    <!-- content end -->

</div>

<a href="#" class="am-icon-btn am-icon-th-list am-show-sm-only admin-menu"
   data-am-offcanvas="{target: '#admin-offcanvas'}"></a>

<?php include "admin_footer.php" ?>
</body>
</html>
