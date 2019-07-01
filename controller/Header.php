<?php
define("CRO_WEB_HZ", dirname(__FILE__));
set_include_path("." . PATH_SEPARATOR . CRO_WEB_HZ . "model/" . get_include_path());
require_once "model/PdoMySQL.class.php";
require_once "model/config.php";

class Header
{

    protected static $_instance = null;
    private $mysqlPdo;

    protected function __construct()
    {
        //disallow new instance
    }

    protected function __clone()
    {
        //disallow clone
    }

    public static function getInstance()
    {
        if (self::$_instance === null) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    public function headerGenerate($col, $row)
    {
        $this->mysqlPdo = new PdoMySQL();
        $allrows = $this->mysqlPdo->find("base");

        $data = $allrows[0];
        echo '<div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-xs-2 col-sm-6">

                    <!-- header-top-first start -->
                    <!-- ================ -->
                    <div class="header-top-first clearfix">
                        <ul class="social-links clearfix hidden-xs">
                            <li class="twitter"><a href="index.php">中</a></li>
                            <li class="skype"><a target="_blank" href="index.php">EN</a></li>
                        </ul>
                        <div class="social-links hidden-lg hidden-md hidden-sm">
                            <div class="btn-group dropdown">
                                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i
                                            class="fa fa-share-alt"></i></button>
                                <ul class="dropdown-menu dropdown-animation">
                                    <li class="twitter"><a href="index.php">中</a></li>
                                    <li class="skype"><a target="_blank" href="index.php">EN</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- header-top-first end -->

                </div>
                <div class="col-xs-10 col-sm-6">

                    <!-- header-top-second start -->
                    <!-- ================ -->
                    <div id="header-top-second" class="clearfix">

                        <!-- header top dropdowns start -->
                        <!-- ================ -->
                        <div class="header-top-dropdown">
                            <div class="btn-group dropdown">
                                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i
                                            class="fa fa-search"></i> 查找
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right dropdown-animation">
                                    <li>
                                        <form role="search" class="search-box">
                                            <div class="form-group has-feedback">
                                                <input type="text" class="form-control" placeholder="查找">
                                                <i class="fa fa-search form-control-feedback"></i>
                                            </div>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                            <div class="btn-group dropdown">

                                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" id="userState"><i
                                                class="fa fa-user"></i>登录
                                    </button>


                                    <ul class="dropdown-menu dropdown-menu-right dropdown-animation" id="loginBox">
                                        <li>
                                            <div class="form-group has-feedback">
                                                <label class="control-label">会员名</label>
                                                <input type="text" id="username" class="form-control" placeholder="">
                                                <i class="fa fa-user form-control-feedback"></i>
                                            </div>
                                            <div class="form-group has-feedback">
                                                <label class="control-label">密码</label>
                                                <input type="password" id="password" class="form-control"
                                                       placeholder="">
                                                <i class="fa fa-lock form-control-feedback"></i>
                                            </div>
                                            <button id="loginButton" class="btn btn-group btn-dark btn-sm">登录</button>
                                            <span>或</span>
                                            <button type="button" id="registerButton" class="btn btn-group btn-default btn-sm">注册
                                            </button>

                                            <ul>
                                                <li><a id="forgetPassword">忘记密码?</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                            </div>


                            <div class="btn-group dropdown">
                                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" id="shopcart"><i
                                            class="fa fa-shopping-cart"></i> 购物车 <span id="goodCount">(0)</span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right dropdown-animation cart" >
                                    <li>
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th class="quantity">数量</th>
                                                <th class="product">产品</th>
                                                <th class="amount">总计</th>
                                            </tr>
                                            </thead>
                                            <tbody id="booked">

                                            </tbody>
                                        </table>
                                        <div class="panel-body text-right" id="cart">
                                            <button type="button" id="cartDetail" class="btn btn-group btn-default btn-sm">查看购物车</button>
                                            <a href="shop-checkout.php" id="pay" class="btn btn-group btn-default btn-sm">结算</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <!--  header top dropdowns end -->

                    </div>
                    <!-- header-top-second end -->

                </div>
            </div>
        </div>
    </div>

    <script src="style/js/Helper/utils/util.js"></script>
                                    <script src="style/js/Helper/front/index.js"></script>
        <header class="header fixed clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-3">

                    <!-- header-left start -->
                    <!-- ================ -->
                    <div class="header-left clearfix">

                        <!-- logo -->
                        <div class="logo">
                            <a href="index.php"><img src="' . $data["webLogo"] . '" id="logo" alt="杭州北望"></a>
                        </div>

                        <!-- name-and-slogan -->
                        <div class="site-slogan">
                            杭州北望生物技术有限公司
                        </div>

                    </div>
                    <!-- header-left end -->

                </div>
                <div class="col-md-9">

                    <!-- header-right start -->
                    <!-- ================ -->
                    <div class="header-right clearfix">

                        <!-- main-navigation start -->
                        <!-- ================ -->
                        <div class="main-navigation animated">

                            <!-- navbar start -->
                            <!-- ================ -->
                            <nav class="navbar navbar-default" role="navigation">
                                <div class="container-fluid">

                                    <!-- Toggle get grouped for better mobile display -->
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                                                data-target="#navbar-collapse-1">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>

                                    <!-- Collect the nav links, forms, and other content for toggling -->
                                    <div class="collapse navbar-collapse" id="navbar-collapse-1">
                                        <ul class="nav navbar-nav navbar-right">
                                            <li class="' . ($col == 1 ? "active" : "") . '">
                                                <a href="index.php" class="dropdown-toggle">首页</a>

                                            </li>
                                            <li class="dropdown ' . ($col == 2 ? "active" : "") . '">
                                                <a href="about-us.php" class="dropdown-toggle" data-toggle="dropdown">关于我们</a>
                                                <ul class="dropdown-menu">
                                                    <li class="' . ($col == 2 && $row == 1 ? "active" : "") . '"><a href="about-us.php">公司介绍</a></li>
                                                    <li class="' . ($col == 2 && $row == 2 ? "active" : "") . '"><a href="company-philosophy.php">公司理念</a></li>
                                                    <li class="' . ($col == 2 && $row == 3 ? "active" : "") . '"><a href="developProgress.php">发展历程</a></li>
                                                    <li class="' . ($col == 2 && $row == 4 ? "active" : "") . '"><a href="company-glory.php">公司荣誉</a></li>
                                                    <li class="' . ($col == 2 && $row == 5 ? "active" : "") . '"><a href="speech.php">领导致辞</a></li>
                                                    <li class="' . ($col == 2 && $row == 6 ? "active" : "") . '"><a href="organization.php">组织结构</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown ' . ($col == 3 ? "active" : "") . '">
                                                <a href="latest-product.php" class="dropdown-toggle"
                                                   data-toggle="dropdown">产品中心</a>
                                                <ul class="dropdown-menu">
                                                    <li class="' . ($col == 3 && $row == 1 ? "active" : "") . '"><a href="latest-product.php">普通产品</a></li>
                                                    <li class="' . ($col == 3 && $row == 2 ? "active" : "") . '"><a href="features-product.php">推荐产品</a></li>
                                                    <li class="' . ($col == 3 && $row == 3 ? "active" : "") . '"><a href="cheapest-product.php">特价产品 <span class="default-bg badge">巨优惠 </span></a></li>                                                </ul>
                                            </li>

                                             <li class="dropdown ' . ($col == 4 ? "active" : "") . '">
                                                <a href="technology-support.php" class="dropdown-toggle"
                                                   data-toggle="dropdown">科研中心</a>
                                                <ul class="dropdown-menu">
                                                    <li class="' . ($col == 4 && $row == 1 ? "active" : "") . '"><a href="technology-support.php">技术与服务支持</a></li>
                                                    <li class="' . ($col == 4 && $row == 2 ? "active" : "") . '"><a href="protocal.php">CRO合同服务</a></li>
                                                    <li class="' . ($col == 4 && $row == 3 ? "active" : "") . '"><a href="distribution.php">销售网络</a></li>
                                                    <li class="' . ($col == 4 && $row == 4 ? "active" : "") . '"><a href="services.php">代加工服务</a></li>

                                                </ul>
                                            </li>

                                             <li class="dropdown ' . ($col == 5 ? "active" : "") . '">
                                                <a href="industry-information.php" class="dropdown-toggle"
                                                   data-toggle="dropdown">新闻资讯</a>
                                                <ul class="dropdown-menu">
                                                    <li class="' . ($col == 5 && $row == 1 ? "active" : "") . '"><a href="news.php">公司新闻</a></li>
                                                    <li class="' . ($col == 5 && $row == 2 ? "active" : "") . '"><a href="industry-information.php">行业新闻</a></li>
                                                </ul>
                                            </li>

                                             <li class="dropdown ' . ($col == 6 ? "active" : "") . '">
                                                <a href="talent-concept.php" class="dropdown-toggle"
                                                   data-toggle="dropdown">招贤纳士</a>
                                                <ul class="dropdown-menu">
                                                    <li class="' . ($col == 6 && $row == 1 ? "active" : "") . '"><a href="talent-concept.php">人才理念</a></li>
                                                    <li class="' . ($col == 6 && $row == 2 ? "active" : "") . '"><a href="employeeDevelopment.php">员工培养</a></li>
                                                    <li class="' . ($col == 6 && $row == 3 ? "active" : "") . '"><a href="talent-join.php">人才引进</a></li>
                                                    <li class="' . ($col == 6 && $row == 4 ? "active" : "") . '"><a href="resume-delivery.php">简历投递</a></li>
                                                    <li class="' . ($col == 6 && $row == 5 ? "active" : "") . '"><a href="encouragement.php">激励保障</a></li>
                                                    <li class="' . ($col == 6 && $row == 6 ? "active" : "") . '"><a href="travel.php">旅游福利</a></li>
                                                    <li class="' . ($col == 6 && $row == 7 ? "active" : "") . '"><a href="birthday.php">生日福利</a></li>
                                                </ul>
                                            </li>

                                             <li class="' . ($col == 7 ? "active" : "") . '">
                                                <a href="contact-us.php" class="dropdown-toggle">联系我们</a>
                                            </li>

                                             <li class="' . ($col == 8 ? "active" : "") . '">
                                                <a href="FAQ.php" class="dropdown-toggle">FAQ</a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </nav>
                            <!-- navbar end -->

                        </div>
                        <!-- main-navigation end -->

                    </div>
                    <!-- header-right end -->

                </div>
            </div>
        </div>
    </header>';

    }

}
