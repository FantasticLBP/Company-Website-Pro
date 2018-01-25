<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>杭州北望信息管理系统 -添加新产品</title>
    <meta name="keywords" content="Bootstrap模版,Bootstrap模版下载,Bootstrap教程,Bootstrap中文"/>
    <meta name="description" content="站长素材提供Bootstrap模版,Bootstrap教程,Bootstrap中文翻译等相关Bootstrap插件下载"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!-- basic styles -->

    <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="assets/css/font-awesome.min.css"/>

    <!--[if IE 7]>
    <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css"/>
    <![endif]-->

    <!-- page specific plugin styles -->

    <link rel="stylesheet" href="../style/css/sweetalert.css"/>
    <link rel="stylesheet" href="../style/css/sweet-alert.css"/>
    <link rel="stylesheet" href="assets/css/jquery-ui-1.10.3.custom.min.css"/>
    <link rel="stylesheet" href="assets/css/chosen.css"/>
    <link rel="stylesheet" href="assets/css/datepicker.css"/>
    <link rel="stylesheet" href="assets/css/bootstrap-timepicker.css"/>
    <link rel="stylesheet" href="assets/css/daterangepicker.css"/>
    <link rel="stylesheet" href="assets/css/colorpicker.css"/>
    <link rel="stylesheet" href="assets/css/style.css"/>
    <link rel="stylesheet" href="assets/css/colorbox.css"/>
    <link href="assets/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">

    <!-- fonts -->

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300"/>

    <!-- ace styles -->

    <link rel="stylesheet" href="assets/css/ace.min.css"/>
    <link rel="stylesheet" href="assets/css/ace-rtl.min.css"/>
    <link rel="stylesheet" href="assets/css/ace-skins.min.css"/>

    <!--[if lte IE 8]>
    <link rel="stylesheet" href="assets/css/ace-ie.min.css"/>
    <![endif]-->

    <!-- inline styles related to this page -->

    <!-- ace settings handler -->
    <script src="assets/js/ace-extra.min.js"></script>
    <script src="http://cdn.bootcss.com/jquery/2.0.3/jquery.min.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.min.js"></script>

    <![endif]-->
</head>

<body>
<div class="navbar navbar-default" id="navbar">
    <script type="text/javascript">
        try {
            ace.settings.check('navbar', 'fixed')
        } catch (e) {
        }
    </script>

    <div class="navbar-container" id="navbar-container">
        <div class="navbar-header pull-left">
            <a href="#" class="navbar-brand">
                <small>
                    <i class="icon-leaf"></i>
                    杭州北望信息管理系统
                </small>
            </a><!-- /.brand -->
        </div><!-- /.navbar-header -->

        <div class="navbar-header pull-right" role="navigation">
            <ul class="nav ace-nav">
                <li class="grey">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="icon-tasks"></i>
                        <span class="badge badge-grey">4</span>
                    </a>

                    <ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
                        <li class="dropdown-header">
                            <i class="icon-ok"></i>
                            4 Tasks to complete
                        </li>

                        <li>
                            <a href="#">
                                <div class="clearfix">
                                    <span class="pull-left">Software Update</span>
                                    <span class="pull-right">65%</span>
                                </div>

                                <div class="progress progress-mini ">
                                    <div style="width:65%" class="progress-bar "></div>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <div class="clearfix">
                                    <span class="pull-left">Hardware Upgrade</span>
                                    <span class="pull-right">35%</span>
                                </div>

                                <div class="progress progress-mini ">
                                    <div style="width:35%" class="progress-bar progress-bar-danger"></div>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <div class="clearfix">
                                    <span class="pull-left">Unit Testing</span>
                                    <span class="pull-right">15%</span>
                                </div>

                                <div class="progress progress-mini ">
                                    <div style="width:15%" class="progress-bar progress-bar-warning"></div>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <div class="clearfix">
                                    <span class="pull-left">Bug Fixes</span>
                                    <span class="pull-right">90%</span>
                                </div>

                                <div class="progress progress-mini progress-striped active">
                                    <div style="width:90%" class="progress-bar progress-bar-success"></div>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                See tasks with details
                                <i class="icon-arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="purple">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="icon-bell-alt icon-animated-bell"></i>
                        <span class="badge badge-important">8</span>
                    </a>

                    <ul class="pull-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
                        <li class="dropdown-header">
                            <i class="icon-warning-sign"></i>
                            8 Notifications
                        </li>

                        <li>
                            <a href="#">
                                <div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-pink icon-comment"></i>
												New Comments
											</span>
                                    <span class="pull-right badge badge-info">+12</span>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="btn btn-xs btn-primary icon-user"></i>
                                Bob just signed up as an editor ...
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-success icon-shopping-cart"></i>
												New Orders
											</span>
                                    <span class="pull-right badge badge-success">+8</span>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-info icon-twitter"></i>
												Followers
											</span>
                                    <span class="pull-right badge badge-info">+11</span>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                See all notifications
                                <i class="icon-arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="green">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="icon-envelope icon-animated-vertical"></i>
                        <span class="badge badge-success">5</span>
                    </a>

                    <ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
                        <li class="dropdown-header">
                            <i class="icon-envelope-alt"></i>
                            5 Messages
                        </li>

                        <li>
                            <a href="#">
                                <img src="assets/avatars/avatar.png" class="msg-photo" alt="Alex's Avatar"/>
                                <span class="msg-body">
											<span class="msg-title">
												<span class="blue">Alex:</span>
												Ciao sociis natoque penatibus et auctor ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>a moment ago</span>
											</span>
										</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <img src="assets/avatars/avatar3.png" class="msg-photo" alt="Susan's Avatar"/>
                                <span class="msg-body">
											<span class="msg-title">
												<span class="blue">Susan:</span>
												Vestibulum id ligula porta felis euismod ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>20 minutes ago</span>
											</span>
										</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <img src="assets/avatars/avatar4.png" class="msg-photo" alt="Bob's Avatar"/>
                                <span class="msg-body">
											<span class="msg-title">
												<span class="blue">Bob:</span>
												Nullam quis risus eget urna mollis ornare ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>3:15 pm</span>
											</span>
										</span>
                            </a>
                        </li>

                        <li>
                            <a href="inbox.html">
                                See all messages
                                <i class="icon-arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="light-blue">
                    <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                        <img class="nav-user-photo" src="assets/avatars/user.jpg" alt="Jason's Photo"/>
                        <span class="user-info">
									<small>欢迎,</small>
									admin
								</span>

                        <i class="icon-caret-down"></i>
                    </a>

                    <ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                        <li>
                            <a href="#">
                                <i class="icon-cog"></i>
                                Settings
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="icon-user"></i>
                                Profile
                            </a>
                        </li>

                        <li class="divider"></li>

                        <li>
                            <a href="#">
                                <i class="icon-off"></i>
                                Logout
                            </a>
                        </li>
                    </ul>
                </li>
            </ul><!-- /.ace-nav -->
        </div><!-- /.navbar-header -->
    </div><!-- /.container -->
</div>

<div class="main-container" id="main-container">
    <script type="text/javascript">
        try {
            ace.settings.check('main-container', 'fixed')
        } catch (e) {
        }
    </script>

    <div class="main-container-inner">
        <a class="menu-toggler" id="menu-toggler" href="#">
            <span class="menu-text"></span>
        </a>

        <div class="sidebar" id="sidebar">
            <script type="text/javascript">
                try {
                    ace.settings.check('sidebar', 'fixed')
                } catch (e) {
                }
            </script>

            <div class="sidebar-shortcuts" id="sidebar-shortcuts">
                <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
                    <button class="btn btn-success">
                        <i class="icon-signal"></i>
                    </button>

                    <button class="btn btn-info">
                        <i class="icon-pencil"></i>
                    </button>

                    <button class="btn btn-warning">
                        <i class="icon-group"></i>
                    </button>

                    <button class="btn btn-danger">
                        <i class="icon-cogs"></i>
                    </button>
                </div>

                <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
                    <span class="btn btn-success"></span>

                    <span class="btn btn-info"></span>

                    <span class="btn btn-warning"></span>

                    <span class="btn btn-danger"></span>
                </div>
            </div><!-- #sidebar-shortcuts -->

            <ul class="nav nav-list">
                <li>
                    <a href="../index.php">
                        <i class="icon-dashboard"></i>
                        <span class="menu-text">系统首页</span>
                    </a>
                </li>

                <li class="active open">
                    <a href="#" class="dropdown-toggle">
                        <i class=" icon-briefcase"></i>
                        <span class="menu-text"> 产品管理 </span>
                        <b class="arrow icon-angle-down"></b>
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="addNewProduct.html">
                                <i class="icon-double-angle-right"></i>
                                添加产品
                            </a>
                        </li>
                        <li class="active">
                            <a href="productList.php">
                                <i class="icon-double-angle-right"></i>
                                产品列表
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="user.php">
                        <i class="icon-user"></i>
                        <span class="menu-text">用户管理</span>
                    </a>
                </li>


                <li>
                    <a href="order.php">
                        <i class=" icon-list-alt"></i>
                        <span class="menu-text">订单管理</span>
                    </a>
                </li>


                <li>
                    <a href="#" class="dropdown-toggle">
                        <i class="icon-desktop"></i>
                        <span class="menu-text">网站基本信息 </span>

                        <b class="arrow icon-angle-down"></b>
                    </a>

                    <ul class="submenu">
                        <li>
                            <a href="introduction.php">
                                <i class="icon-double-angle-right"></i>
                                公司介绍
                            </a>
                        </li>


                        <li>
                            <a href="philosophy.php">
                                <i class="icon-double-angle-right"></i>
                                公司理念
                            </a>
                        </li>

                        <li>
                            <a href="development.php">
                                <i class="icon-double-angle-right"></i>
                                发展历程
                            </a>
                        </li>

                        <li>
                            <a href="honor.php">
                                <i class="icon-double-angle-right"></i>
                                公司荣誉
                            </a>
                        </li>

                        <li>
                            <a href="speech.php">
                                <i class="icon-double-angle-right"></i>
                                领导致辞
                            </a>
                        </li>

                        <li>
                            <a href="orgaization.php">
                                <i class="icon-double-angle-right"></i>
                                组织结构
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#" class="dropdown-toggle">
                        <i class="icon-list"></i>
                        <span class="menu-text"> 科研中心 </span>

                        <b class="arrow icon-angle-down"></b>
                    </a>

                    <ul class="submenu">
                        <li>
                            <a href="techkinds.html">
                                <i class="icon-double-angle-right"></i>
                                技术服务与支持分类管理
                            </a>
                        </li>

                        <li>
                            <a href="newtsupport.html">
                                <i class="icon-double-angle-right"></i>
                                技术与服务支持发布
                            </a>
                        </li>

                        <li>
                            <a href="newservice.html">
                                <i class="icon-double-angle-right"></i>
                                CRO合同服务发布
                            </a>
                        </li>

                        <li>
                            <a href="sale.html">
                                <i class="icon-double-angle-right"></i>
                                销售网络
                            </a>
                        </li>

                        <li>
                            <a href="newoem.html">
                                <i class="icon-double-angle-right"></i>
                                代加工服务发布
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="resume.php">
                        <i class="icon-dashboard"></i>
                        <span class="menu-text">简历信息统计</span>
                    </a>
                </li>

                <li>
                    <a href="resume.php">
                        <i class=" icon-globe"></i>
                        <span class="menu-text">新闻资讯发布</span>
                    </a>
                </li>

                <li>
                    <a href="#" class="dropdown-toggle">
                        <i class=" icon-lightbulb"></i>
                        <span class="menu-text"> 招贤纳士 </span>

                        <b class="arrow icon-angle-down"></b>
                    </a>

                    <ul class="submenu">
                        <li>
                            <a href="staff.php">
                                <i class="icon-double-angle-right"></i>
                                员工培养
                            </a>
                        </li>

                        <li>
                            <a href="talent.php">
                                <i class="icon-double-angle-right"></i>
                                人才引进
                            </a>
                        </li>

                        <li>
                            <a href="travel.php">
                                <i class="icon-double-angle-right"></i>
                                旅游福利
                            </a>
                        </li>

                    </ul>
                </li>

                <li>
                    <a href="message.php">
                        <i class=" icon-bullhorn"></i>
                        <span class="menu-text">留言内容列表</span>
                    </a>
                </li>

                <li>
                    <a href="newfaq.php">
                        <i class="icon-exclamation-sign"></i>
                        <span class="menu-text">常见问题发布</span>
                    </a>
                </li>


                <li>
                    <a href="faqs.php">
                        <i class="icon-file-alt"></i>
                        <span class="menu-text">常见问题留言</span>
                    </a>
                </li>
            </ul><!-- /.nav-list -->

            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="icon-double-angle-left" data-icon1="icon-double-angle-left"
                   data-icon2="icon-double-angle-right"></i>
            </div>

            <script type="text/javascript">
                try {
                    ace.settings.check('sidebar', 'collapsed')
                } catch (e) {
                }
            </script>
        </div>

        <div class="main-content">
            <div class="breadcrumbs" id="breadcrumbs">
                <script type="text/javascript">
                    try {
                        ace.settings.check('breadcrumbs', 'fixed')
                    } catch (e) {
                    }
                </script>

                <ul class="breadcrumb">
                    <li>
                        <i class="icon-home home-icon"></i>
                        <a href="main.php">主页</a>
                    </li>
                    <li class="active">产品管理</li>
                </ul><!-- .breadcrumb -->


            </div>

            <div class="page-content">
                <div class="page-header">
                    <h1>
                        产品管理
                        <small>
                            <i class="icon-double-angle-right"></i>
                            添加新产品
                        </small>
                    </h1>
                </div><!-- /.page-header -->
                <div class="row">
                    <div class="col-xs-12">
                        <form class="form-horizontal" role="form" action="../controller/editproduct.php"
                              method="post" enctype="multipart/form-data" onsubmit="return validate()">

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="productName">产品名称</label>

                                <div class="col-sm-9">
                                    <input type="text" id="productId" name="productId" placeholder="产品id"
                                           class="col-xs-10 col-sm-5 hidden"/>
                                    <input type="text" id="productName" name="productName" placeholder="产品名称"
                                           class="col-xs-10 col-sm-5"/>
                                </div>
                            </div>
                            <div class="form-group hidden" id="productNameError">
                                <label class="col-sm-3 control-label no-padding-right"></label>

                                <div class="col-sm-9 error"></div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="productBigKind">产品分类</label>

                                <div class="col-sm-9">
                                    <select class="col-xs-10 col-sm-5" id="productBigKind" name="productBigKind"
                                            data-placeholder="请选择大类别...">
                                        <option value="">请选择</option>
                                        <option value="药检试剂">药检试剂</option>
                                        <option value="生化酶">生化酶</option>
                                        <option value="检测试剂">检测试剂</option>
                                        <option value="消毒用试剂">消毒用试剂</option>
                                        <option value="细胞因子">细胞因子</option>
                                        <option value="其他产品">其他产品</option>
                                        <option value="检测试纸卡">检测试纸卡</option>
                                        <option value="速测盒">速测盒</option>
                                        <option value="检测仪器">检测仪器</option>
                                    </select>大类
                                </div>
                            </div>
                            <div class="form-group hidden" id="productBigKindError">
                                <label class="col-sm-3 control-label no-padding-right"></label>

                                <div class="col-sm-9 error"></div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="productSmallKind"></label>

                                <div class="col-sm-9">
                                    <select class="col-xs-10 col-sm-5" id="productSmallKind" name="productSmallKind"
                                            data-placeholder="请选择小类别...">
                                        <option value="">请选择</option>
                                        <option value="β-内酰胺酶Ⅱ（头孢菌素酶）">β-内酰胺酶Ⅱ（头孢菌素酶）</option>
                                        <option value="β-内酰胺酶Ⅰ(青霉素酶)">β-内酰胺酶Ⅰ(青霉素酶)</option>
                                        <option value="金属β-内酰胺酶">金属β-内酰胺酶</option>

                                        <option value="溶葡球菌酶">溶葡球菌酶</option>
                                        <option value="牛肠激酶">牛肠激酶</option>
                                        <option value="链霉素残留快速检测试纸">链霉素残留快速检测试纸</option>
                                        <option value="抗生素残留检测试剂">抗生素残留检测试剂</option>
                                        <option value="溶菌酶">溶菌酶</option>
                                        <option value="人角质细胞生长因子-2（KGF-2）">人角质细胞生长因子-2（KGF-2）</option>
                                        <option value="人骨形态发生蛋白-2（BMP-2）">人骨形态发生蛋白-2（BMP-2）</option>

                                        <option value="口腔清洁剂">口腔清洁剂</option>
                                        <option value="消毒剂">消毒剂</option>
                                        <option value="食品安全检测试纸卡">食品安全检测试纸卡</option>

                                        <option value="动物疾病检测试纸卡">动物疾病检测试纸卡</option>
                                        <option value="医学检验试纸卡">医学检验试纸卡</option>
                                        <option value="食品检测速测盒">食品检测速测盒</option>
                                        <option value="农药残留速测盒">农药残留速测盒</option>
                                        <option value="环境检测速测盒">环境检测速测盒</option>
                                        <option value="其他检测">其他检测</option>

                                        <option value="其他检测仪器">其他检测仪器</option>

                                    </select>小类
                                </div>
                            </div>
                            <div class="form-group hidden" id="productSmallKindError">
                                <label class="col-sm-3 control-label no-padding-right"></label>

                                <div class="col-sm-9 error"></div>
                            </div>


                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="productLevel">商品等级</label>

                                <div class="col-sm-9">
                                    <select class="col-xs-10 col-sm-5" id="productLevel" name="productLevel"
                                            data-placeholder="请选择商品等级...">
                                        <option value="">请选择</option>
                                        <option value="普通商品">普通商品</option>
                                        <option value="推荐商品">推荐商品</option>
                                        <option value="特价商品">特价商品</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group hidden" id="productLevelError">
                                <label class="col-sm-3 control-label no-padding-right"></label>

                                <div class="col-sm-9 error"></div>
                            </div>


                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="unit">产品单位</label>

                                <div class="col-sm-9">
                                    <input type="text" name="unit" id="unit" placeholder="产品单位"
                                           class="col-xs-10 col-sm-5"/>
                                </div>
                            </div>
                            <div class="form-group hidden" id="unitError">
                                <label class="col-sm-3 control-label no-padding-right"></label>

                                <div class="col-sm-9 error"></div>
                            </div>


                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="price">产品单价</label>

                                <div class="col-sm-9">
                                    <input type="text" name="price" id="price" placeholder="产品单价"
                                           class="col-xs-10 col-sm-5"/>
                                </div>
                            </div>
                            <div class="form-group hidden" id="priceError">
                                <label class="col-sm-3 control-label no-padding-right"></label>

                                <div class="col-sm-9 error"></div>
                            </div>


                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="starLevel">商品星级</label>

                                <div class="col-sm-9">
                                    <select class="col-xs-10 col-sm-5" class="form-control" id="starLevel"
                                            name="starLevel" data-placeholder="请选择商品星级...">
                                        <option value="">请选择</option>
                                        <option value="5">5</option>
                                        <option value="4">4</option>
                                        <option value="3">3</option>
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group hidden" id="starLevelError">
                                <label class="col-sm-3 control-label no-padding-right"></label>

                                <div class="col-sm-9 error"></div>
                            </div>


                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="discountPrice">产品折扣价</label>

                                <div class="col-sm-9">
                                    <input type="text" id="discountPrice" name="discountPrice" placeholder="产品售价"
                                           class="col-xs-10 col-sm-5"/>
                                </div>
                            </div>
                            <div class="form-group hidden" id="discountPriceError">
                                <label class="col-sm-3 control-label no-padding-right"></label>

                                <div class="col-sm-9 error"></div>
                            </div>


                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="listingDate">上市日期</label>

                                <div class="col-sm-9">
                                    <input type="text" size="16" id="listingDate" name="listingDate" placeholder="上市日期"
                                           class="col-xs-10 col-sm-5 form_datetime"/>

                                </div>
                                <script type="text/javascript">
                                    $(".form_datetime").datetimepicker({format: 'yyyy-mm-dd hh:ii'});
                                </script>
                            </div>


                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="storage">产品库存</label>

                                <div class="col-sm-9">
                                    <input type="text" id="storage" name="storage" placeholder="商品库存"
                                           class="col-xs-10 col-sm-5"/>
                                </div>
                            </div>

                            <div class="form-group hidden" id="storageError">
                                <label class="col-sm-3 control-label no-padding-right"></label>

                                <div class="col-sm-9 error"></div>
                            </div>


                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right"
                                       for="expiration">有效期</label>

                                <div class="col-sm-9">
                                    <input type="text" id="expiration" name="expiration" placeholder="请输入有效期"
                                           class="col-xs-10 col-sm-5"/>
                                </div>
                            </div>
                            <div class="form-group hidden" id="expirationError">
                                <label class="col-sm-3 control-label no-padding-right"></label>

                                <div class="col-sm-9 error"></div>
                            </div>


                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right"
                                       for="productFeature">产品性状</label>

                                <div class="col-sm-9">
                                    <textarea id="productFeature" name="productFeature"
                                              class="autosize-transition form-control col-xs-10 col-sm-5"
                                              placeholder="请输入产品性状"></textarea>
                                </div>
                            </div>
                            <div class="form-group hidden" id="productFeatureError">
                                <label class="col-sm-3 control-label no-padding-right"></label>

                                <div class="col-sm-9 error"></div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right"
                                       for="useage">使用方法</label>

                                <div class="col-sm-9">
                                    <textarea id="useage" name="useage"
                                              class="autosize-transition form-control col-xs-10 col-sm-5"
                                              placeholder="请输入使用方法"></textarea>
                                </div>
                            </div>
                            <div class="form-group hidden" id="useageError">
                                <label class="col-sm-3 control-label no-padding-right"></label>

                                <div class="col-sm-9 error"></div>
                            </div>


                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right"
                                       for="condition">保存条件</label>

                                <div class="col-sm-9">
                                    <textarea id="condition" name="condition"
                                              class="autosize-transition form-control col-xs-10 col-sm-5"
                                              placeholder="请输入保存条件"></textarea>
                                </div>
                            </div>
                            <div class="form-group hidden" id="conditionError">
                                <label class="col-sm-3 control-label no-padding-right"></label>

                                <div class="col-sm-9 error"></div>
                            </div>


                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right"
                                       for="operativenorm">执行标准</label>

                                <div class="col-sm-9">
                                    <textarea id="operativenorm" name="operativenorm"
                                              class="autosize-transition form-control col-xs-10 col-sm-5"
                                              placeholder="请输入执行标准"></textarea>
                                </div>
                            </div>
                            <div class="form-group hidden" id="operativenormError">
                                <label class="col-sm-3 control-label no-padding-right"></label>

                                <div class="col-sm-9 error"></div>
                            </div>


                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right"
                                       for="productDescription">产品介绍</label>

                                <div class="col-sm-9">
                                    <textarea id="productDescription" name="productDescription"
                                              class="autosize-transition form-control col-xs-10 col-sm-5"
                                              placeholder="请输入产品介绍"></textarea>
                                </div>
                            </div>
                            <div class="form-group hidden" id="productDescriptionError">
                                <label class="col-sm-3 control-label no-padding-right"></label>

                                <div class="col-sm-9 error"></div>
                            </div>


                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="availableScope">适应范围</label>

                                <div class="col-sm-9">
                                    <textarea id="availableScope" name="availableScope"
                                              class="autosize-transition form-control col-xs-10 col-sm-5"
                                              placeholder="请输入适应范围"></textarea>
                                </div>
                            </div>

                            <div class="form-group hidden" id="availableScopeError">
                                <label class="col-sm-3 control-label no-padding-right"></label>

                                <div class="col-sm-9 error"></div>
                            </div>


                            <div class="form-group">
                                <div class="row-fluid ">
                                    <label class="col-sm-3 control-label no-padding-right"
                                           for="availableScope">商品图片预览</label>
                                    <di class="col-sm-9">
                                        <ul class="ace-thumbnails">
                                            <li id="image1">
                                                <a href="" data-rel="colorbox">
                                                    <img width="150" height="150" alt="商品图片1"/>

                                                    <div class="text">
                                                        <div class="inner"></div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li id="image2">
                                                <a href="" data-rel="colorbox">
                                                    <img width="150" height="150" alt="商品图片2"/>

                                                    <div class="text">
                                                        <div class="inner"></div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li id="image3">
                                                <a href="" data-rel="colorbox">
                                                    <img width="150" height="150" alt="商品图片3"/>

                                                    <div class="text">
                                                        <div class="inner"></div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li id="image4">
                                                <a href="" data-rel="colorbox">
                                                    <img width="150" height="150" alt="商品图片4"/>

                                                    <div class="text">
                                                        <div class="inner"></div>
                                                    </div>
                                                </a>
                                            </li>

                                            <li id="image5">
                                                <a href="assets/images/gallery/image-2.jpg" data-rel="colorbox">
                                                    <img width="150" height="150" alt="商品图片5"/>

                                                    <div class="text">
                                                        <div class="inner"></div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                </div><!-- PAGE CONTENT ENDS -->
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right red">注意：</label>
                                <label class="col-sm-3 control-label red">如果需要修改商品图片请在下方重新上传</label>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="marketingTime">主图1</label>

                                <div class="col-sm-9">
                                    <input type="file" name="myFile1" id="id-input-file-1" class="col-xs-10 col-sm-5"/>

                                </div>
                            </div>
                            <div class="form-group hidden" id="myFile1Error">
                                <label class="col-sm-3 control-label no-padding-right"></label>

                                <div class="col-sm-9 error"></div>
                            </div>

                            <div class="space-4"></div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="marketingTime">主图2</label>

                                <div class="col-sm-9">
                                    <input type="file" name="myFile2" id="id-input-file-2" class="col-xs-10 col-sm-5"/>

                                </div>
                            </div>
                            <div class="space-4"></div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="marketingTime">主图3</label>

                                <div class="col-sm-9">
                                    <input type="file" name="myFile3" id="id-input-file-2" class="col-xs-10 col-sm-5"/>

                                </div>
                            </div>

                            <div class="space-4"></div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="marketingTime">主图4</label>

                                <div class="col-sm-9">
                                    <input type="file" name="myFile4" id="id-input-file-2" class="col-xs-10 col-sm-5"/>

                                </div>
                            </div>

                            <div class="space-4"></div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="marketingTime">主图5</label>

                                <div class="col-sm-9">
                                    <input type="file" name="myFile5" id="id-input-file-2" class="col-xs-10 col-sm-5"/>

                                </div>
                            </div>


                            <div class="clearfix ">
                                <div class="col-md-offset-3 col-md-9">
                                    <input type="submit" value="提交" class="btn btn-info"/>
                                </div>
                            </div>
                    </div>

                </div>


            </div><!-- /.main-content -->


            <div class="ace-settings-container" id="ace-settings-container">
                <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
                    <i class="icon-cog bigger-150"></i>
                </div>

                <div class="ace-settings-box" id="ace-settings-box">
                    <div>
                        <div class="pull-left">
                            <select id="skin-colorpicker" class="hide">
                                <option data-skin="default" value="#438EB9">#438EB9</option>
                                <option data-skin="skin-1" value="#222A2D">#222A2D</option>
                                <option data-skin="skin-2" value="#C6487E">#C6487E</option>
                                <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
                            </select>
                        </div>
                        <span>&nbsp; Choose Skin</span>
                    </div>

                    <div>
                        <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar"/>
                        <label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
                    </div>

                    <div>
                        <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar"/>
                        <label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
                    </div>

                    <div>
                        <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs"/>
                        <label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
                    </div>

                    <div>
                        <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl"/>
                        <label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
                    </div>

                    <div>
                        <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container"/>
                        <label class="lbl" for="ace-settings-add-container">
                            Inside
                            <b>.container</b>
                        </label>
                    </div>
                </div>
            </div><!-- /#ace-settings-container -->
        </div><!-- /.main-container-inner -->

        <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
            <i class="icon-double-angle-up icon-only bigger-110"></i>
        </a>
    </div><!-- /.main-container -->

    <!-- basic scripts -->

    <!--[if !IE]> -->



    <!-- <![endif]-->

    <!--[if IE]>
    <script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script><![endif]-->
    <![endif]-->

    <!--[if !IE]> -->

    <script type="text/javascript">
        window.jQuery || document.write("<script src='assets/js/jquery-2.0.3.min.js'>" + "<" + "/script>");
    </script>

    <!-- <![endif]-->

    <!--[if IE]>
    <script type="text/javascript">
        window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>" + "<" + "/script>");
    </script>
    <![endif]-->

    <script type="text/javascript">
        if ("ontouchend" in document) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
    </script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/typeahead-bs2.min.js"></script>

    <!-- page specific plugin scripts -->

    <!--[if lte IE 8]>
    <script src="assets/js/excanvas.min.js"></script>
    <![endif]-->
    <script src="../style/js/sweetalert.min.js"></script>

    <script src="assets/js/jquery-ui-1.10.3.custom.min.js"></script>
    <script src="assets/js/jquery.ui.touch-punch.min.js"></script>
    <script src="assets/js/chosen.jquery.min.js"></script>
    <script src="assets/js/fuelux/fuelux.spinner.min.js"></script>
    <script src="assets/js/date-time/bootstrap-datepicker.min.js"></script>
    <script src="assets/js/date-time/bootstrap-timepicker.min.js"></script>
    <script src="assets/js/date-time/moment.min.js"></script>
    <script src="assets/js/date-time/daterangepicker.min.js"></script>
    <script src="assets/js/bootstrap-colorpicker.min.js"></script>
    <script src="assets/js/jquery.knob.min.js"></script>
    <script src="assets/js/jquery.autosize.min.js"></script>
    <script src="assets/js/jquery.inputlimiter.1.3.1.min.js"></script>
    <script src="assets/js/jquery.maskedinput.min.js"></script>
    <script src="assets/js/bootstrap-tag.min.js"></script>
    <script src="assets/js/jquery.colorbox-min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
    <script type="text/javascript" src="assets/js/bootstrap-datetimepicker.min.js" charset="UTF-8"></script>
    <!-- ace scripts -->

    <script src="assets/js/ace-elements.min.js"></script>
    <script src="assets/js/ace.min.js"></script>

    <!-- inline scripts related to this page -->
    <script type="text/javascript">
        jQuery(function ($) {

            var flag = GetQueryString("success");

            if(flag == 1){
                swal("修改成功");
                setTimeout(function(){
                    window.location.href = "productList.php";
                },1000);
//                window.location.href = "productList.php";
            }

            var colorbox_params = {
                reposition: true,
                scalePhotos: true,
                scrolling: false,
                previous: '<i class="icon-arrow-left"></i>',
                next: '<i class="icon-arrow-right"></i>',
                close: '&times;',
                current: '{current} of {total}',
                maxWidth: '100%',
                maxHeight: '100%',
                onOpen: function () {
                    document.body.style.overflow = 'hidden';
                },
                onClosed: function () {
                    document.body.style.overflow = 'auto';
                },
                onComplete: function () {
                    $.colorbox.resize();
                }
            };

            $('.ace-thumbnails [data-rel="colorbox"]').colorbox(colorbox_params);
            $("#cboxLoadingGraphic").append("<i class='icon-spinner orange'></i>");//let's add a custom loading icon

            /**$(window).on('resize.colorbox', function() {
		try {
			//this function has been changed in recent versions of colorbox, so it won't work
			$.fn.colorbox.load();//to redraw the current frame
		} catch(e){}
	});*/



            /*
             获取url传递的参数：产品id
             */
            function GetQueryString(name) {
                var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
                var r = window.location.search.substr(1).match(reg);
                if (r != null)return unescape(r[2]);
                return null;
            }
            var productId = GetQueryString("id");


            /*
             根据产品id去查询产品详情信息
             */
            if(flag == null || flag == undefined) {
                $.ajax({
                    dataType: "json",
                    type: "get",
                    url: "../controller/editproduct.php?type=show&id=" + productId,
                    success: function (data) {
                        if (data.code == 200) {
                            $des = $("#sample-table-2>tbody");
                            $des.empty();
                            var datas = data.data[0];
                            if (jQuery.isEmptyObject(datas) || datas.length == 0) {
                                alert("暂无数据");
                            }

                            $("#productId").val(datas.id);
                            $("#productName").val(datas.productName);
                            $("#productBigKind").val(datas.productBigKind);
                            $("#productSmallKind").val(datas.productSmallKind);
                            $("#productLevel").val(datas.productLevel);


                            $("#unit").val(datas.unit);
                            $("#price").val(datas.price);
                            $("#starLevel").val(datas.starLevel);
                            $("#discountPrice").val(datas.discountPrice);


                            $("#listingDate").val(datas.listingDate);

                            $("#storage").val(datas.storage);
                            $("#expiration").val(datas.expiration);

                            $("#productFeature").val(datas.productFeature);
                            $("#useage").val(datas.useage);
                            $("#condition").val(datas.condition);
                            $("#operativenorm").val(datas.operativenorm);
                            $("#productDescription").val(datas.productDescription);
                            $("#availableScope").val(datas.availableScope);


                            if (datas.image1 != "") {
                                $("#image1>a").prop("href", "../" + datas.image1);
                                $("#image1>a>img").prop("src", "../" + datas.image1);
                            } else {
                                $("#image1>a>img").prop("alt", "未上传图片");
                            }

                            if (datas.image2 != "") {
                                $("#image2>a").prop("href", "../" + datas.image2);
                                $("#image2>a>img").prop("src", "../" + datas.image2);
                            } else {
                                $("#image2>a>img").prop("alt", "未上传图片");
                            }

                            if (datas.image3 != "") {
                                $("#image3>a").prop("href", "../" + datas.image3);
                                $("#image3>a>img").prop("src", "../" + datas.image3);
                            } else {
                                $("#image3>a>img").prop("alt", "未上传图片");
                            }

                            if (datas.image4 != "") {
                                $("#image4>a").prop("href", "../" + datas.image4);
                                $("#image4>a>img").prop("src", "../" + datas.image4);
                            } else {
                                $("#image4>a>img").prop("alt", "未上传图片");
                            }

                            if (datas.image5 != "") {
                                $("#image5>a").prop("href", "../" + datas.image5);
                                $("#image5>a>img").prop("src", "../" + datas.image5);
                            } else {
                                $("#image5>a>img").prop("alt", "未上传图片");
                            }

                        }
                    },
                    error: function (code, message, data) {
                        alert("发生错误：" + message);
                    }
                });
            }


            $("#productName").on("blur", function () {
                if ($("#productName").val() === "") {
                    $("#productNameError").removeClass("hidden");
                    $("#productNameError>div").text("温馨提示：产品名称不能为空");
                } else {
                    $("#productNameError").addClass("hidden");
                }
            });

            $("#productBigKind").on("blur", function () {
                if ($("#productBigKind").val() === "") {
                    $("#productBigKindError").removeClass("hidden");
                    $("#productBigKindError>div").text("温馨提示：产品大类分类不能为空");
                } else {
                    $("#productBigKindError").addClass("hidden");
                }
            });


            $("#unit").on("blur", function () {
                if ($("#unit").val() === "") {
                    $("#unitError").removeClass("hidden");
                    $("#unitError>div").text("温馨提示：产品单位不能为空");
                } else {
                    $("#unitError").addClass("hidden");
                }
            });

            $("#productFeature").on("blur", function () {
                if ($("#productFeature").val() === "") {
                    $("#productFeatureError").removeClass("hidden");
                    $("#productFeatureError>div").text("温馨提示：产品性状不能为空");
                } else {
                    $("#productFeatureError").addClass("hidden");
                }
            });

            $("#useage").on("blur", function () {
                if ($("#useage").val() === "") {
                    $("#useageError").removeClass("hidden");
                    $("#useageError>div").text("温馨提示：使用方法不能为空");
                } else {
                    $("#useageError").addClass("hidden");
                }
            });

            $("#condition").on("blur", function () {
                if ($("#condition").val() === "") {
                    $("#conditionError").removeClass("hidden");
                    $("#conditionError>div").text("温馨提示：保存条件不能为空");
                } else {
                    $("#conditionError").addClass("hidden");
                }
            });

            $("#expiration").on("blur", function () {
                if ($("#expiration").val() === "") {
                    $("#expirationError").removeClass("hidden");
                    $("#expirationError>div").text("温馨提示：有效期不能为空");
                } else {
                    $("#expirationError").addClass("hidden");
                }
            });

            $("#operativenorm").on("blur", function () {
                if ($("#operativenorm").val() === "") {
                    $("#operativenormError").removeClass("hidden");
                    $("#operativenormError>div").text("温馨提示：执行标准不能为空");
                } else {
                    $("#operativenormError").addClass("hidden");
                }
            });

            $("#productSmallKind").on("blur", function () {
                if ($("#productSmallKind").val() === "") {
                    $("#productSmallKindError").removeClass("hidden");
                    $("#productSmallKindError>div").text("温馨提示：产品小类分类不能为空");
                } else {
                    $("#productSmallKindError").addClass("hidden");
                }
            });
            $("#productLevel").on("blur", function () {
                if ($("#productLevel").val() === "") {
                    $("#productLevelError").removeClass("hidden");
                    $("#productLevelError>div").text("温馨提示：请选择商品等级分类");
                } else {
                    $("#productLevelError").addClass("hidden");
                }
            });
            $("#price").on("blur", function () {
                if ($("#price").val() === "") {
                    $("#priceError").removeClass("hidden");
                    $("#priceError>div").text("温馨提示：请输入商品单件");
                } else {
                    $("#priceError").addClass("hidden");
                }
            });
            $("#starLevel").on("blur", function () {
                if ($("#starLevel").val() === "") {
                    $("#starLevelError").removeClass("hidden");
                    $("#starLevelError>div").text("温馨提示：请选择商品等级");
                } else {
                    $("#starLevelError").addClass("hidden");
                }
            });

            $("#discountPrice").on("blur", function () {
                if ($("#discountPrice").val() === "") {
                    $("#discountPriceError").removeClass("hidden");
                    $("#discountPriceError>div").text("温馨提示：请输入产品折扣价");
                } else {
                    $("#discountPriceError").addClass("hidden");
                }
            });

            $("#storage").on("blur", function () {
                if ($("#storage").val() === "") {
                    $("#storageError").removeClass("hidden");
                    $("#storageError>div").text("温馨提示：请输入商品库存");
                } else {
                    $("#storageError").addClass("hidden");
                }
            });

            $("#productDescription").on("blur", function () {
                if ($("#productDescription").val() === "") {
                    $("#productDescriptionError").removeClass("hidden");
                    $("#productDescriptionError>div").text("温馨提示：请输入产品介绍");
                } else {
                    $("#productDescriptionError").addClass("hidden");
                }
            });
            $("#availableScope").on("blur", function () {
                if ($("#availableScope").val() === "") {
                    $("#availableScopeError").removeClass("hidden");
                    $("#availableScopeError>div").text("温馨提示：请输入适应范围");
                } else {
                    $("#availableScopeError").addClass("hidden");
                }
            });

            function validate() {

                if(datas.image1 != ""){
                    return true;
                }
                if ($("#id-input-file-1").val() === "") {
                    $("#myFile1Error").removeClass("hidden");
                    $("#myFile1Error>div").text("温馨提示：请上传至少一张产品图片");
                    return false;
                } else {
                    $("#myFile1Error").addClass("hidden");
                    return true;
                }
            }

            $('.form_datetime').datetimepicker({
                //language:  'fr',
                weekStart: 1,
                todayBtn: 1,
                autoclose: 1,
                todayHighlight: 1,
                startView: 2,
                forceParse: 0,
                showMeridian: 1
            });
            $('.form_date').datetimepicker({
                language: 'fr',
                weekStart: 1,
                todayBtn: 1,
                autoclose: 1,
                todayHighlight: 1,
                startView: 2,
                minView: 2,
                forceParse: 0
            });
            $('.form_time').datetimepicker({
                language: 'fr',
                weekStart: 1,
                todayBtn: 1,
                autoclose: 1,
                todayHighlight: 1,
                startView: 1,
                minView: 0,
                maxView: 1,
                forceParse: 0
            });

        });
    </script>
    <script type="text/javascript">
        jQuery(function ($) {
            $('#id-disable-check').on('click', function () {
                var inp = $('#form-input-readonly').get(0);
                if (inp.hasAttribute('disabled')) {
                    inp.setAttribute('readonly', 'true');
                    inp.removeAttribute('disabled');
                    inp.value = "This text field is readonly!";
                }
                else {
                    inp.setAttribute('disabled', 'disabled');
                    inp.removeAttribute('readonly');
                    inp.value = "This text field is disabled!";
                }
            });


            $(".chosen-select").chosen();
            $('#chosen-multiple-style').on('click', function (e) {
                var target = $(e.target).find('input[type=radio]');
                var which = parseInt(target.val());
                if (which == 2) $('#form-field-select-4').addClass('tag-input-style');
                else $('#form-field-select-4').removeClass('tag-input-style');
            });


            $('[data-rel=tooltip]').tooltip({container: 'body'});
            $('[data-rel=popover]').popover({container: 'body'});

            $('textarea[class*=autosize]').autosize({append: "\n"});
            $('textarea.limited').inputlimiter({
                remText: '%n character%s remaining...',
                limitText: 'max allowed : %n.'
            });

            $.mask.definitions['~'] = '[+-]';
            $('.input-mask-date').mask('99/99/9999');
            $('.input-mask-phone').mask('(999) 999-9999');
            $('.input-mask-eyescript').mask('~9.99 ~9.99 999');
            $(".input-mask-product").mask("a*-999-a999", {
                placeholder: " ", completed: function () {
                    alert("You typed the following: " + this.val());
                }
            });


            $("#input-size-slider").css('width', '200px').slider({
                value: 1,
                range: "min",
                min: 1,
                max: 8,
                step: 1,
                slide: function (event, ui) {
                    var sizing = ['', 'input-sm', 'input-lg', 'input-mini', 'input-small', 'input-medium', 'input-large', 'input-xlarge', 'input-xxlarge'];
                    var val = parseInt(ui.value);
                    $('#form-field-4').attr('class', sizing[val]).val('.' + sizing[val]);
                }
            });

            $("#input-span-slider").slider({
                value: 1,
                range: "min",
                min: 1,
                max: 12,
                step: 1,
                slide: function (event, ui) {
                    var val = parseInt(ui.value);
                    $('#form-field-5').attr('class', 'col-xs-' + val).val('.col-xs-' + val);
                }
            });


            $("#slider-range").css('height', '200px').slider({
                orientation: "vertical",
                range: true,
                min: 0,
                max: 100,
                values: [17, 67],
                slide: function (event, ui) {
                    var val = ui.values[$(ui.handle).index() - 1] + "";

                    if (!ui.handle.firstChild) {
                        $(ui.handle).append("<div class='tooltip right in' style='display:none;left:16px;top:-6px;'><div class='tooltip-arrow'></div><div class='tooltip-inner'></div></div>");
                    }
                    $(ui.handle.firstChild).show().children().eq(1).text(val);
                }
            }).find('a').on('blur', function () {
                $(this.firstChild).hide();
            });

            $("#slider-range-max").slider({
                range: "max",
                min: 1,
                max: 10,
                value: 2
            });

            $("#eq > span").css({width: '90%', 'float': 'left', margin: '15px'}).each(function () {
                // read initial values from markup and remove that
                var value = parseInt($(this).text(), 10);
                $(this).empty().slider({
                    value: value,
                    range: "min",
                    animate: true

                });
            });


            $('#id-input-file-1 , #id-input-file-2').ace_file_input({
                no_file: '没有文件 ...',
                btn_choose: '选取文件',
                btn_change: '重新选取',
                droppable: false,
                onchange: null,
                thumbnail: false //| true | large
                //whitelist:'gif|png|jpg|jpeg'
                //blacklist:'exe|php'
                //onchange:''
                //
            });


            //dynamically change allowed formats by changing before_change callback function
            $('#id-file-format').removeAttr('checked').on('change', function () {
                var before_change
                var btn_choose
                var no_icon
                if (this.checked) {
                    btn_choose = "Drop images here or click to choose";
                    no_icon = "icon-picture";
                    before_change = function (files, dropped) {
                        var allowed_files = [];
                        for (var i = 0; i < files.length; i++) {
                            var file = files[i];
                            if (typeof file === "string") {
                                //IE8 and browsers that don't support File Object
                                if (!(/\.(jpe?g|png|gif|bmp)$/i).test(file)) return false;
                            }
                            else {
                                var type = $.trim(file.type);
                                if (( type.length > 0 && !(/^image\/(jpe?g|png|gif|bmp)$/i).test(type) )
                                    || ( type.length == 0 && !(/\.(jpe?g|png|gif|bmp)$/i).test(file.name) )//for android's default browser which gives an empty string for file.type
                                ) continue;//not an image so don't keep this file
                            }

                            allowed_files.push(file);
                        }
                        if (allowed_files.length == 0) return false;

                        return allowed_files;
                    }
                }
                else {
                    btn_choose = "Drop files here or click to choose";
                    no_icon = "icon-cloud-upload";
                    before_change = function (files, dropped) {
                        return files;
                    }
                }

            });


            $('#spinner1').ace_spinner({
                value: 0,
                min: 0,
                max: 200,
                step: 10,
                btn_up_class: 'btn-info',
                btn_down_class: 'btn-info'
            })
                .on('change', function () {
                    //alert(this.value)
                });
            $('#spinner2').ace_spinner({
                value: 0,
                min: 0,
                max: 10000,
                step: 100,
                touch_spinner: true,
                icon_up: 'icon-caret-up',
                icon_down: 'icon-caret-down'
            });
            $('#spinner3').ace_spinner({
                value: 0,
                min: -100,
                max: 100,
                step: 10,
                on_sides: true,
                icon_up: 'icon-plus smaller-75',
                icon_down: 'icon-minus smaller-75',
                btn_up_class: 'btn-success',
                btn_down_class: 'btn-danger'
            });


            $('.date-picker').datepicker({autoclose: true}).next().on(ace.click_event, function () {
                $(this).prev().focus();
            });
            $('input[name=date-range-picker]').daterangepicker().prev().on(ace.click_event, function () {
                $(this).next().focus();
            });

            $('#timepicker1').timepicker({
                minuteStep: 1,
                showSeconds: true,
                showMeridian: false
            }).next().on(ace.click_event, function () {
                $(this).prev().focus();
            });

            $('#colorpicker1').colorpicker();
            $('#simple-colorpicker-1').ace_colorpicker();


            $(".knob").knob();


            //we could just set the data-provide="tag" of the element inside HTML, but IE8 fails!
            var tag_input = $('#form-field-tags');
            if (!( /msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase()))) {
                tag_input.tag(
                    {
                        placeholder: tag_input.attr('placeholder'),
                        //enable typeahead by specifying the source array
                        source: ace.variable_US_STATES,//defined in ace.js >> ace.enable_search_ahead
                    }
                );
            }
            else {
                //display a textarea for old IE, because it doesn't support this plugin or another one I tried!
                tag_input.after('<textarea id="' + tag_input.attr('id') + '" name="' + tag_input.attr('name') + '" rows="3">' + tag_input.val() + '</textarea>').remove();
                //$('#form-field-tags').autosize({append: "\n"});
            }


            /////////
            $('#modal-form input[type=file]').ace_file_input({
                style: 'well',
                btn_choose: 'Drop files here or click to choose',
                btn_change: null,
                no_icon: 'icon-cloud-upload',
                droppable: true,
                thumbnail: 'large'
            })

            //chosen plugin inside a modal will have a zero width because the select element is originally hidden
            //and its width cannot be determined.
            //so we set the width after modal is show
            $('#modal-form').on('shown.bs.modal', function () {
                $(this).find('.chosen-container').each(function () {
                    $(this).find('a:first-child').css('width', '210px');
                    $(this).find('.chosen-drop').css('width', '210px');
                    $(this).find('.chosen-search input').css('width', '200px');
                });
            })
            /**
             //or you can activate the chosen plugin after modal is shown
             //this way select element becomes visible with dimensions and chosen works as expected
             $('#modal-form').on('shown', function () {
					$(this).find('.modal-chosen').chosen();
				})
             */

        });
    </script>
    <div style="display:none">
        <script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript'
                charset='gb2312'></script>
    </div>
</body>
</html>
