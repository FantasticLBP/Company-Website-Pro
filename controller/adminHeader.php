<?php
/**
 * Created by PhpStorm.
 * User: geek
 * Date: 2017/8/28
 * Time: 下午4:20
 */

define("CRO_WEB_HZ", dirname(__FILE__));
set_include_path("." . PATH_SEPARATOR . CRO_WEB_HZ . "model/" . get_include_path());
require_once "../model/PdoMySQL.class.php";
require_once "../model/config.php";

class AdminHeader
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

    function headerGenerate($col, $row)
    {
        $this->mysqlPdo = new PdoMySQL();
        $allrows = $this->mysqlPdo->find("base");

        echo '<div class="navbar navbar-default" id="navbar">
                <script type="text/javascript">
                    try{ace.settings.check(\'navbar\' , \'fixed\')}catch(e){}
                 </script>

            <div class="navbar-container" id="navbar-container">
                <div class="navbar-header pull-left">
                    <a href="#" class="navbar-brand">
                    <small><i class="icon-leaf"></i>杭州北望信息管理系统</small>
                    </a><!-- /.brand -->
                </div><!-- /.navbar-header -->

            <div class="navbar-header pull-right" role="navigation">
                <ul class="nav ace-nav">
                    <li class="light-blue">
                        <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                            <img class="nav-user-photo" src="assets/avatars/user.jpg" alt="Jason\'s Photo" />
                            <span class="user-info">
								<small>欢迎光临,</small>
                                <span id="adminName"></span>
							</span>
                        <i class="icon-caret-down"></i>
                        </a>

                    <ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                        <li>
                            <a id="logoutButton">    
                                <i class="icon-off"></i>退出
                            </a>
                         </li>
                    </ul>
                </li>
            </ul><!-- /.ace-nav -->
        </div><!-- /.navbar-header -->
    </div><!-- /.container -->
</div>

<script src="http://cdn.bootcss.com/jquery/2.0.3/jquery.min.js"></script>
<script src="../style/js/sweetalert.min.js"></script>
<script src="../style/js/Helper/utils/util.js"></script>
<script src="../style/js/Helper/end/Header.js"></script>

<div class="main-container" id="main-container">
    <script type="text/javascript">
        try{ace.settings.check(\'main-container\' , \'fixed\')}catch(e){}
    </script>

    <div class="main-container-inner">
        <a class="menu-toggler" id="menu-toggler" href="#">
            <span class="menu-text"></span>
        </a>

        <div class="sidebar" id="sidebar">
            <script type="text/javascript">
                try{ace.settings.check(\'sidebar\' , \'fixed\')}catch(e){}
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
                <li class="' . ($col == 1 ? "active" : "") . '">
                    <a href="../index.php">
                        <i class="icon-dashboard"></i>
                        <span class="menu-text">系统首页</span>
                    </a>
                </li>

                <li class="dropdown ' . ($col == 2 ? "active" : "") . '">
                    <a href="#" class="dropdown-toggle">
                        <i class=" icon-briefcase"></i>
                        <span class="menu-text"> 产品管理 </span>
                        <b class="arrow icon-angle-down"></b>
                    </a>
                    <ul class="submenu">
                        <li class="' . ($col == 2 && $row == 1 ? "active" : "") . '">
                            <a href="addNewProduct.php">
                                <i class="icon-double-angle-right"></i>
                                添加产品
                            </a>
                        </li>
                        <li class="' . ($col == 2 && $row == 2 ? "active" : "") . '">
                            <a href="productList.php">
                                <i class="icon-double-angle-right"></i>
                                产品列表
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="dropdown ' . ($col == 3 ? "active" : "") . '">
                    <a href="user.php">
                        <i class="icon-user"></i>
                        <span class="menu-text">用户管理</span>
                    </a>
                </li>


                <li class="dropdown ' . ($col == 4 ? "active" : "") . '">
                    <a href="order.php">
                        <i class=" icon-list-alt"></i>
                        <span class="menu-text">订单管理</span>
                    </a>
                </li>


                <li class="dropdown ' . ($col == 5 ? "active" : "") . '">
                    <a href="#" class="dropdown-toggle">
                        <i class="icon-desktop"></i>
                        <span class="menu-text">关于我们 </span>

                        <b class="arrow icon-angle-down"></b>
                    </a>

                    <ul class="submenu">
                        <li class="' . ($col == 5 && $row == 1 ? "active" : "") . '">
                            <a href="introduction.php">
                                <i class="icon-double-angle-right"></i>
                                公司介绍
                            </a>
                        </li>


                        <li class="' . ($col == 5 && $row == 2 ? "active" : "") . '">
                            <a href="philosophy.php">
                                <i class="icon-double-angle-right"></i>
                                公司理念
                            </a>
                        </li>

                        <li class="' . ($col == 5 && $row == 3 ? "active" : "") . '">
                            <a href="development.php">
                                <i class="icon-double-angle-right"></i>
                                发展历程
                            </a>
                        </li>

                        <li class="' . ($col == 5 && $row == 4 ? "active" : "") . '">
                            <a href="honor.php">
                                <i class="icon-double-angle-right"></i>
                                公司荣誉
                            </a>
                        </li>

                        <li class="' . ($col == 5 && $row == 5 ? "active" : "") . '">
                            <a href="speech.php">
                                <i class="icon-double-angle-right"></i>
                                领导致辞
                            </a>
                        </li>

                        <li class="' . ($col == 5 && $row == 6 ? "active" : "") . '">
                            <a href="orgaization.php">
                                <i class="icon-double-angle-right"></i>
                                组织结构
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="dropdown ' . ($col == 6 ? "active" : "") . '">
                    <a href="#" class="dropdown-toggle">
                        <i class="icon-list"></i>
                        <span class="menu-text"> 科研中心 </span>

                        <b class="arrow icon-angle-down"></b>
                    </a>

                    <ul class="submenu">
                        <li class="' . ($col == 6 && $row == 1 ? "active" : "") . '">
                            <a href="techkinds.php">
                                <i class="icon-double-angle-right"></i>
                                技术服务与支持管理
                            </a>
                        </li>

                        <li class="' . ($col == 6 && $row == 2 ? "active" : "") . '">
                            <a href="contracts.php">
                                <i class="icon-double-angle-right"></i>
                                CRO合同服务管理
                            </a>
                        </li>

                        <li class="' . ($col == 6 && $row == 3 ? "active" : "") . '">
                            <a href="sale.php">
                                <i class="icon-double-angle-right"></i>
                                销售网络
                            </a>
                        </li>

                        <li class="' . ($col == 6 && $row == 4 ? "active" : "") . '">
                            <a href="oem.php">
                                <i class="icon-double-angle-right"></i>
                                代加工服务发布
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="' . ($col == 7 ? "active" : "") . '">
                    <a href="newslist.php">
                        <i class=" icon-globe"></i>
                        <span class="menu-text">新闻资讯发布</span>
                    </a>
                </li>

                <li class="' . ($col == 8 ? "active" : "") . '">
                    <a href="#" class="dropdown-toggle">
                        <i class=" icon-lightbulb"></i>
                        <span class="menu-text"> 招贤纳士 </span>

                        <b class="arrow icon-angle-down"></b>
                    </a>

                    <ul class="submenu">
                        <li class="' . ($col == 8 && $row == 1 ? "active" : "") . '">
                            <a href="belief.php">
                                <i class="icon-double-angle-right"></i>
                                人才理念
                            </a>
                        </li>

                        <li class="' . ($col == 8 && $row == 2 ? "active" : "") . '">
                            <a href="staff.php">
                                <i class="icon-double-angle-right"></i>
                                员工培养
                            </a>
                        </li>

                        <li class="' . ($col == 8 && $row == 3 ? "active" : "") . '">
                            <a href="talent.php">
                                <i class="icon-double-angle-right"></i>
                                人才引进
                            </a>
                        </li>

                        <li class="' . ($col == 8 && $row == 4 ? "active" : "") . '">
                            <a href="resume.php">
                                <i class="icon-dashboard"></i>
                                简历信息统计
                            </a>
                        </li>

                        <li class="' . ($col == 8 && $row == 5 ? "active" : "") . '">
                            <a href="encouragement.php">
                                <i class="icon-dashboard"></i>
                                激励保障
                            </a>
                        </li>

                        <li class="' . ($col == 8 && $row == 6 ? "active" : "") . '">
                            <a href="travel.php">
                                <i class="icon-double-angle-right"></i>
                                旅游福利
                            </a>
                        </li>

                        <li class="' . ($col == 8 && $row == 7 ? "active" : "") . '">
                            <a href="birthday.php">
                                <i class="icon-double-angle-right"></i>
                                生日福利
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="' . ($col == 9 ? "active" : "") . '">
                    <a href="message.php">
                        <i class=" icon-bullhorn"></i>
                        <span class="menu-text">留言内容列表</span>
                    </a>
                </li>

                <li class="' . ($col == 10 ? "active" : "") . '">
                    <a href="faqlist.php">
                        <i class="icon-exclamation-sign"></i>
                        <span class="menu-text">常见问题发布</span>
                    </a>
                </li>


                <li class="' . ($col == 11 ? "active" : "") . '">
                    <a href="faq.php">
                        <i class="icon-file-alt"></i>
                        <span class="menu-text">常见问题留言</span>
                    </a>
                </li>

                <li class="' . ($col == 12 ? "active" : "") . '">
                    <a href="base.php">
                        <i class="icon-file-alt"></i>
                        <span class="menu-text">网站基本信息</span>
                    </a>
                </li>
            </ul>';
    }

}

?>