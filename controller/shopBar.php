<?php
define("CRO_WEB_HZ", dirname(__FILE__));
set_include_path("." . PATH_SEPARATOR . CRO_WEB_HZ . "model/" . get_include_path());
require_once "model/PdoMySQL.class.php";
require_once "model/config.php";

class ShopBar
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

    public function shopBarGenerate()
    {
        $this->mysqlPdo = new PdoMySQL();
        $allrows = $this->mysqlPdo->find("base");
        $data = $allrows[0];
        echo '<!-- header-top start (Add "dark" class to .header-top in order to enable dark header-top e.g <div class="header-top dark">) -->
    <!-- ================ -->
    <div class="header-top">
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
                                <?php
                                if ($_SESSION[\'username\']) {
                                    echo \'<button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>Hi,\' . $_SESSION[\'username\'] . \'</button>\';
                                    ?>
                                    <ul class="dropdown-menu dropdown-menu-right dropdown-animation cart">
                                        <li>
                                            <table class="table table-hover">
                                                <thead>
                                                <tr>
                                                    <th class="quantity"></th>
                                                    <th class="product">信息</th>
                                                    <th class="amount"></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td class="total-quantity" colspan="2">积分</td>
                                                    <td class="total-amount" id="amount"><?php
                                                        $username = $_SESSION[\'username\'];
                                                        $pdof = new PDO(\'mysql:host=localhost;dbname=db_cro\', \'root\', \'root\');
                                                        $pdof->query("set names utf8");
                                                        $sqlf = "select amout from user WHERE username =?";
                                                        $stmtf = $pdof->prepare($sqlf);
                                                        $stmtf->execute(array($username));
                                                        $allrowf = $stmtf->fetch();
                                                        echo $allrowf[\'amout\'];
                                                        ?></td>
                                                </tr>
                                                </tbody>

                                            </table>
                                            <div class="panel-body text-right">
                                                <a href="shop-cart.php">帐号管理</a>
                                                <a href="shop-cart.php"
                                                   class="btn btn-group btn-default btn-sm">已买到的宝贝</a>
                                                <a href="controller/doAction.php?action=clearSession" id="quitButton"
                                                   class="btn btn-group btn-default btn-sm">退出</a>
                                            </div>

                                        </li>
                                    </ul>
                                    <?php
                                } else {
                                    ?>
                                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i
                                                class="fa fa-user"></i> 登录
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-right dropdown-animation">
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
                                            <button id="registerButton" class="btn btn-group btn-default btn-sm">注册
                                            </button>

                                            <ul>
                                                <li><a href="#">忘记密码?</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <?php
                                }
                                ?>
                            </div>


                            <div class="btn-group dropdown">
                                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i
                                            class="fa fa-shopping-cart"></i> 购物车 (0)
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right dropdown-animation cart">
                                    <li>
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th class="quantity">数量</th>
                                                <th class="product">产品</th>
                                                <th class="amount">总计</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td class="quantity">2 x</td>
                                                <td class="product"><a href="shop-product.php">金属β-内酰胺酶冻干粉</a><span
                                                            class="small">普通商品</span></td>
                                                <td class="amount">199.00</td>
                                            </tr>
                                            <tr>
                                                <td class="quantity">3 x</td>
                                                <td class="product"><a href="shop-product.php">青霉素酶液体</a><span
                                                            class="small">普通商品</span></td>
                                                <td class="amount">299.00</td>
                                            </tr>
                                            <tr>
                                                <td class="quantity">3 x</td>
                                                <td class="product"><a href="shop-product.php">头孢菌素酶</a><span
                                                            class="small">推荐商品</span></td>
                                                <td class="amount">1499.00</td>
                                            </tr>
                                            <tr>
                                                <td class="total-quantity" colspan="2">共 8 件</td>
                                                <td class="total-amount">1997.00</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <div class="panel-body text-right">
                                            <a href="shop-cart.php" class="btn btn-group btn-default btn-sm">查看购物车</a>
                                            <a href="shop-checkout.php" class="btn btn-group btn-default btn-sm">结算</a>
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
    </div>';

    }

}
