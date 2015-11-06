<?php require "../config.php"?>
<!doctype html>
<html class="no-js">
<head>
    <title>借款人信息列表 | 后台管理系统</title>
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
            <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">借款人信息列表</strong> /
                <small>Borrower information list</small>
            </div>
        </div>

        <div class="am-g">
            <div class="am-u-sm-12 am-u-md-6">
                <div class="am-btn-toolbar">
                    <div class="am-btn-group am-btn-group-xs">
                        <button type="button" class="am-btn am-btn-default"><span class="am-icon-plus"></span><a href="admin_add_form.php"> 新增</a>
                        </button>

                        <button type="button" class="am-btn am-btn-default"><span class="am-icon-trash-o"></span> <a href="admin_edit_form.php">修改</a>
                        </button>
                    </div>
                </div>
            </div>
            <div class="am-u-sm-12 am-u-md-3">
                <div class="am-form-group">
                    <select data-am-selected="{btnSize: 'sm'}">
                        <option value="option1">排序</option>
                        <option value="option2">金额</option>
                        <option value="option3">编号</option>
                        <option value="option3">借款日期</option>
                        <option value="option3">还款日期</option>

                    </select>
                </div>
            </div>
            <div class="am-u-sm-12 am-u-md-3">
                <div class="am-input-group am-input-group-sm">
                    <input type="text" class="am-form-field">
          <span class="am-input-group-btn">
            <button class="am-btn am-btn-default" type="button">搜索</button>
          </span>
                </div>
            </div>
        </div>

        <div class="am-g">
            <div class="am-u-sm-12">
                <form class="am-form">
                    <table class="am-table am-table-striped am-table-hover table-main">
                        <thead>
                        <tr>
                            <th class="table-check"><input type="checkbox"/></th>
                            <th class="table-id">编号</th>
                            <th class="table-title">借款金额</th>
                            <th class="table-type">借款人</th>
                            <th class="table-author am-hide-sm-only">电话号码</th>
                            <th class="table-date am-hide-sm-only">还款日期</th>
                            <th class="table-set">操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><input type="checkbox"/></td>
                            <td>1</td>
                            <td><a href="#">Business management</a></td>
                            <td>default</td>
                            <td class="am-hide-sm-only">测试1号</td>
                            <td class="am-hide-sm-only">2014年9月4日 7:28:47</td>
                            <td>
                                <div class="am-btn-toolbar">
                                    <div class="am-btn-group am-btn-group-xs">
                                        <button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span
                                                class="am-icon-pencil-square-o"></span> 编辑
                                        </button>
                                        <button class="am-btn am-btn-default am-btn-xs am-hide-sm-only"><span
                                                class="am-icon-copy"></span> 复制
                                        </button>
                                        <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only">
                                            <span class="am-icon-trash-o"></span> 删除
                                        </button>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        </tbody>
                    </table>
                    <div class="am-cf">
                        共 15 条记录
                        <div class="am-fr">
                            <ul class="am-pagination">
                                <li class="am-disabled"><a href="#">«</a></li>
                                <li class="am-active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">»</a></li>
                            </ul>
                        </div>
                    </div>
                    <hr/>
                    <p>注：.....</p>
                </form>
            </div>

        </div>
    </div>
    <!-- content end -->
</div>


<?php include "admin_footer.php" ?>


</body>
</html>
