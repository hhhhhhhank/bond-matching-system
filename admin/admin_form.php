<?php require "../config.php" ?>
<!doctype html>
<html class="no-js">
<head>
    <title>表单 | 后台管理系统</title>
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
            <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">表单</strong> /
                <small>form</small>
            </div>
        </div>

        <div class="am-tabs am-margin" data-am-tabs>
            <ul class="am-tabs-nav am-nav am-nav-tabs">
                <li class="am-active"><a href="#tab1">基本信息</a></li>
                <li><a href="#tab2">详细描述</a></li>
                <li><a href="#tab3">SEO 选项</a></li>
            </ul>

            <div class="am-tabs-bd">
                <div class="am-tab-panel am-fade am-in am-active" id="tab1">

                    <div class="am-g am-margin-top" >

                        <form class="am-form" action="action/addInfoAction.php" method="post">

                            <div class="am-g am-margin-top">
                                <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                    借款人编号
                                </div>
                                <div class="am-u-sm-8 am-u-md-4">
                                    <input type="text" class="am-input-sm" type="text" name="username" id="username" value="">
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
                                <button type="button" class="am-btn am-btn-primary am-btn-xs">提交保存</button>
                                <button type="button" class="am-btn am-btn-primary am-btn-xs">放弃保存</button>
                            </div>
                        </form>
                    </div>


                </div>

                <div class="am-tab-panel am-fade" id="tab2">
                    <form class="am-form">
                        <div class="am-g am-margin-top">
                            <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                文章标题
                            </div>
                            <div class="am-u-sm-8 am-u-md-4">
                                <input type="text" class="am-input-sm">
                            </div>
                            <div class="am-hide-sm-only am-u-md-6">*必填，不可重复</div>
                        </div>

                        <div class="am-g am-margin-top">
                            <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                文章作者
                            </div>
                            <div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
                                <input type="text" class="am-input-sm">
                            </div>
                        </div>

                        <div class="am-g am-margin-top">
                            <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                信息来源
                            </div>
                            <div class="am-u-sm-8 am-u-md-4">
                                <input type="text" class="am-input-sm">
                            </div>
                            <div class="am-hide-sm-only am-u-md-6">选填</div>
                        </div>

                        <div class="am-g am-margin-top">
                            <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                内容摘要
                            </div>
                            <div class="am-u-sm-8 am-u-md-4">
                                <input type="text" class="am-input-sm">
                            </div>
                            <div class="am-u-sm-12 am-u-md-6">不填写则自动截取内容前255字符</div>
                        </div>

                        <div class="am-g am-margin-top-sm">
                            <div class="am-u-sm-12 am-u-md-2 am-text-right admin-form-text">
                                内容描述
                            </div>
                            <div class="am-u-sm-12 am-u-md-10">
                                <textarea rows="10" placeholder="请使用富文本编辑插件"></textarea>
                            </div>
                        </div>

                    </form>
                </div>

                <div class="am-tab-panel am-fade" id="tab3">
                    <form class="am-form">
                        <div class="am-g am-margin-top-sm">
                            <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                SEO 标题
                            </div>
                            <div class="am-u-sm-8 am-u-md-4 am-u-end">
                                <input type="text" class="am-input-sm">
                            </div>
                        </div>

                        <div class="am-g am-margin-top-sm">
                            <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                SEO 关键字
                            </div>
                            <div class="am-u-sm-8 am-u-md-4 am-u-end">
                                <input type="text" class="am-input-sm">
                            </div>
                        </div>

                        <div class="am-g am-margin-top-sm">
                            <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                SEO 描述
                            </div>
                            <div class="am-u-sm-8 am-u-md-4 am-u-end">
                                <textarea rows="4"></textarea>
                            </div>
                        </div>
                    </form>
                </div>

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
