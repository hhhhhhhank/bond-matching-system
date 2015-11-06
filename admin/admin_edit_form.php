<?php require "../config.php" ?>
<!doctype html>
<html class="no-js">
<head>
    <title>修改借款人信息 | 后台管理系统</title>
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
            <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">修改借款人信息</strong> /
                <small>Edit borrower information</small>
            </div>
        </div>

        <div class="am-tabs am-margin" data-am-tabs>
            <ul class="am-tabs-nav am-nav am-nav-tabs">
                <li class="am-active"><a href="#tab1">基本信息</a></li>
            </ul>

            <div class="am-tabs-bd">
                <div class="am-tab-panel am-fade am-in am-active" id="tab1">

                    <div class="am-g am-margin-top">

                        <form class="am-form" action="action/addInfoAction.php" method="post">

                            <div class="am-g am-margin-top">
                                <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                    借款人编号
                                </div>
                                <div class="am-u-sm-8 am-u-md-4">
                                    <input type="text" class="am-input-sm" type="text" name="username" id="username"
                                           value="">
                                </div>
                                <div class="am-hide-sm-only am-u-md-6">*必填，不可重复</div>
                            </div>


                            <div class="am-g am-margin-top">

                                <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                    借款人姓名
                                </div>
                                <div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
                                    <input type="text" class="am-input-sm">
                                </div>
                                <div class="am-hide-sm-only am-u-md-6">*必填，不可重复</div>
                            </div>


                            <div class="am-g am-margin-top">
                                <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                    身份证号码
                                </div>
                                <div class="am-u-sm-8 am-u-md-4">
                                    <input type="text" class="am-input-sm">
                                </div>
                                <div class="am-hide-sm-only am-u-md-6">*必填</div>
                            </div>


                            <!--所属类别-->
                            <div class="am-g am-margin-top">
                                <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                    车型
                                </div>
                                <div class="am-u-sm-8 am-u-md-4">
                                    <input type="text" class="am-input-sm">
                                </div>
                                <div class="am-u-sm-12 am-u-md-6">填写车型</div>
                            </div>


                            <!--所属类别-->
                            <div class="am-g am-margin-top">
                                <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                    地址
                                </div>
                                <div class="am-u-sm-8 am-u-md-4">
                                    <input type="text" class="am-input-sm">
                                </div>
                                <div class="am-u-sm-12 am-u-md-6">住宅地址</div>
                            </div>


                            <!--所属类别-->
                            <div class="am-g am-margin-top">
                                <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                    金额
                                </div>
                                <div class="am-u-sm-8 am-u-md-4">
                                    <input type="text" class="am-input-sm">
                                </div>
                                <div class="am-u-sm-12 am-u-md-6">填写金额，精确到小数点后两位</div>
                            </div>


                            <div class="am-g am-margin-top">
                                <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                    贷款日期
                                </div>
                                <div class="am-u-sm-8 am-u-md-4">
                                    <input type="date" class="am-input-sm">
                                </div>
                                <div class="am-u-sm-12 am-u-md-6"></div>
                            </div>

                            <!--所属类别-->

                            <div class="am-g am-margin-top">
                                <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                    还款日期
                                </div>
                                <div class="am-u-sm-8 am-u-md-4">
                                    <input type="date" class="am-input-sm">
                                </div>
                                <div class="am-u-sm-12 am-u-md-6"></div>
                            </div>


                            <!--所属类别-->


                            <div class="am-g am-margin-top">
                                <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                    还款日期
                                </div>
                                <div class="am-u-sm-8 am-u-md-4">
                                    <select class="am-input-sm">
                                        <option value="option1">家用</option>
                                        <option value="option2">商用</option>
                                    </select>
                                </div>
                                <div class="am-u-sm-12 am-u-md-6"></div>
                            </div>

                            <div class="am-margin">
                                <button type="submit" class="am-btn am-btn-primary am-btn-xs">提交保存</button>
                                <button type="submit" class="am-btn am-btn-primary am-btn-xs">放弃保存</button>
                            </div>
                        </form>
                    </div>


                </div>


            </div>
        </div>


    </div>
    <!-- content end -->

</div>

<?php include "admin_footer.php" ?>


</body>
</html>
