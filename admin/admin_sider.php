<div class="admin-sidebar am-offcanvas" id="admin-offcanvas">
    <div class="am-offcanvas-bar admin-offcanvas-bar">
        <ul class="am-list admin-sidebar-list">
            <li><a href="<?php echo _url_ ?>admin/admin_index.php"><span class="am-icon-home"></span> 首页</a></li>
            <li class="admin-parent">
                <a class="am-cf" data-am-collapse="{target: '#collapse-nav'}"><span class="am-icon-file"></span>
                    页面模块 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
                <ul class="am-list am-collapse admin-sidebar-sub am-in" id="collapse-nav">
                    <li><a href="<?php echo _url_ ?>admin/admin_user.php" class="am-cf"><span class="am-icon-check"></span> 个人资料<span
                                class="am-icon-star am-fr am-margin-right admin-icon-yellow"></span></a></li>
                    <li><a href="<?php echo _url_ ?>admin/admin_help.php"><span class="am-icon-puzzle-piece"></span> 帮助页</a></li>
                    <li><a href="<?php echo _url_ ?>admin/admin_gallery.php"><span class="am-icon-th"></span> 相册页面<span
                                class="am-badge am-badge-secondary am-margin-right am-fr">24</span></a></li>
                    <li><a href="<?php echo _url_ ?>admin/admin_log.php"><span class="am-icon-calendar"></span> 系统日志</a></li>
                    <li><a href="<?php echo _url_ ?>admin/admin_404.php"><span class="am-icon-bug"></span> 404</a></li>
                </ul>
            </li>
            <li><a href="<?php echo _url_ ?>admin/admin_table.php"><span class="am-icon-table"></span> 表格</a></li>
            <li><a href="<?php echo _url_ ?>admin/admin_form.php"><span class="am-icon-pencil-square-o"></span> 表单</a></li>
            <li><a href="#"><span class="am-icon-sign-out"></span> 注销</a></li>
        </ul>

        <div class="am-panel am-panel-default admin-sidebar-panel">
            <div class="am-panel-bd">
                <p><span class="am-icon-bookmark"></span> 公告</p>

                <p>开发中—— EasyCURD</p>
            </div>
        </div>


    </div>
</div>