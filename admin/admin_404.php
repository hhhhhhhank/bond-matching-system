<?php require "../config.php" ?>
<!doctype html>
<html class="no-js">
<head>
    <title>404 | 后台管理系统</title>
</head>
<body>

<?php include"admin_header.php"?>

<div class="am-cf admin-main">
    <!-- sidebar start -->

    <?php include"admin_sider.php"?>
    <!-- sidebar end -->

    <!-- content start -->
    <div class="admin-content">

        <div class="am-cf am-padding">
            <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">404</strong> /
                <small>That’s an error</small>
            </div>
        </div>

        <div class="am-g">
            <div class="am-u-sm-12">
                <h2 class="am-text-center am-text-xxxl am-margin-top-lg">404. Not Found</h2>

                <p class="am-text-center">没有找到你要的页面</p>
        <pre class="page-404">
        </pre>
            </div>
        </div>
    </div>
    <!-- content end -->

</div>

<a href="#" class="am-icon-btn am-icon-th-list am-show-sm-only admin-menu"
   data-am-offcanvas="{target: '#admin-offcanvas'}"></a>

<?php include"admin_footer.php"?>
</body>
</html>
