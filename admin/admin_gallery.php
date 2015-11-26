<?php require "../config.php"?>
<!doctype html>
<html class="no-js">
<head>

    <title>其他 | 后台管理系统</title>

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
            <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">相册</strong> /
                <small>Gallery</small>
            </div>
        </div>

        <ul class="am-avg-sm-2 am-avg-md-4 am-avg-lg-6 am-margin gallery-list">
            <li>
                <a href="#">
                    <img class="am-img-thumbnail am-img-bdrs" src="http://s.amazeui.org/media/i/demos/bing-1.jpg"
                         alt=""/>

                    <div class="gallery-title">photo1</div>
                    <div class="gallery-desc">2375-09-26</div>
                </a>
            </li>
            <li>
                <a href="#">
                    <img class="am-img-thumbnail am-img-bdrs" src="http://s.amazeui.org/media/i/demos/bing-2.jpg"
                         alt=""/>

                    <div class="gallery-title">photo1</div>
                    <div class="gallery-desc">2375-09-26</div>
                </a>
            </li>
            <li>
                <a href="#">
                    <img class="am-img-thumbnail am-img-bdrs" src="http://s.amazeui.org/media/i/demos/bing-3.jpg"
                         alt=""/>

                    <div class="gallery-title">photo1</div>
                    <div class="gallery-desc">2375-09-26</div>
                </a>
            </li>

        </ul>

        <div class="am-margin am-cf">
            <hr/>
            <p class="am-fl">共 15 条记录</p>
            <ol class="am-pagination am-fr">
                <li class="am-disabled"><a href="#">&laquo;</a></li>
                <li class="am-active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&raquo;</a></li>
            </ol>
        </div>

    </div>
    <!-- content end -->

</div>

<a href="#" class="am-icon-btn am-icon-th-list am-show-sm-only admin-menu"
   data-am-offcanvas="{target: '#admin-offcanvas'}"></a>


<?php include"admin_footer.php"?>

</body>
</html>
