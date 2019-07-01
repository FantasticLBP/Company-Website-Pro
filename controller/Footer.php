<?php
define("CRO_WEB_HZ", dirname(__FILE__));
set_include_path("." . PATH_SEPARATOR . CRO_WEB_HZ . "model/" . get_include_path());

require_once "model/PdoMySQL.class.php";
require_once "model/config.php";
require_once "Response.php";

class Footer
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

    public function footerGenerate()
    {
        $this->mysqlPdo = new PdoMySQL();
        $allrows = $this->mysqlPdo->find("base");
        $data = $allrows[0];
        echo '<footer id="footer">

				<!-- .footer start -->
				<!-- ================ -->
				<div class="footer">
					<div class="container">


						<div class="row">

							<div class="col-md-3">
								<div class="footer-content">
									<div class="logo-footer"><h2>公司介绍</h2></div>
									<div class="row">
										<div class="col-sm-12">
											<p>' . $data["companyIntroduce"] . '</p>
											<ul class="social-links circle">
												<li class="facebook"><a target="_blank" href="http://www.bt-door.com"><i class="fa fa-hospital-o"></i></a></li>
											</ul>
										</div>

									</div>
								</div>
							</div>

							<div class="col-sm-6 col-md-1"></div>

							<div class="space-bottom hidden-lg hidden-xs"></div>
							<div class="col-sm-6 col-md-4">
								<div class="footer-content">
									<h2>联系我们</h2>
									<ul class="list-icons">
										<li><i class="fa fa-map-marker pr-10"></i>' . $data["address"] . '</li>
										<li><i class="fa fa-phone pr-10"></i>' . $data["administratorTel"] . '(行政综合部)</li>
										<li style="text-indent:2em;" >' . $data["enzymeTel"] . '（酶事业部）</li>
										<li style="text-indent:2em;" >' . $data["plateTel"] . '（平皿事业部）</li>
										<li><i class="fa fa-fax pr-10"></i>' . $data["fax"] . '（传真） </li>
										<li><i class="fa fa-envelope-o pr-10"></i>' . $data["adminiatratorEmail"] . '（行政部)</li>
										<li><i class="fa fa-envelope-o pr-10"></i>' . $data["MarketDepartmentEmail"] . '市场部)</li>
									</ul>
								</div>
							</div>


							<div class="col-sm-6 col-md-1"></div>


							<div class="col-sm-6 col-md-3 col-md-offset-1">
								<div class="footer-content">
									<h2>扫一扫</h2>
									<div class="gallery row">
										<img src="' . $data["wechatBarcode"] . '">
									</div>
								</div>
							</div>
						</div>
						<div class="space-bottom hidden-lg hidden-xs"></div>
					</div>
				</div>
				<!-- .footer end -->

				<!-- .subfooter start -->
				<!-- ================ -->
				<div class="subfooter">
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<p><a target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=33010502002933" ><img src="style/images/beianlogo.png" style="float:left;"/><p style="float:left;height:20px;line-height:20px;margin: 0px 0px 0px 5px; ">浙公网安备 33010502002933号</p></a></p>
							</div>
							<div class="col-md-6">
								<nav class="navbar navbar-default" role="navigation">
									<!-- Toggle get grouped for better mobile display -->
									<div class="navbar-header">
										<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-2">
											<span class="sr-only">Toggle navigation</span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</button>
									</div>
									<div class="collapse navbar-collapse" id="navbar-collapse-2">
										<ul class="nav navbar-nav">
											<li><a href="index.php">首页</a></li>
											<li><a href="latest-product.php">产品中心</a></li>
											<li><a href="news.php">新闻资讯</a></li>
											<li><a href="talent-join.php">招贤纳士</a></li>
											<li><a href="site-map.php">站点地图</a></li>
										</ul>
									</div>
								</nav>
							</div>
						</div>
					</div>
				</div>
				<!-- .subfooter end -->
			</footer>';

    }

}

$footer = Footer::getInstance();
$footer->footerGenerate();
