<?php

//require_once '../model/PdoMySQL.class.php';
//require_once '../model/config.php';

include '../model/PdoMySQL.class.php';
include '../model/config.php';
include "Response.php";

class ViewHelper
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
    public function getInstance()
    {
        if (self::$_instance === null) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    public function footerGenerate()
    {
        $this->mysqlPdo = new PdoMySQL();
        if ($_REQUEST["kind"] == "footer") {
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
        } else {
            echo '<header class="header fixed clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-3">

                    <!-- header-left start -->
                    <!-- ================ -->
                    <div class="header-left clearfix">

                        <!-- logo -->
                        <div class="logo">
                            <a href="index.php"><img src="style/images/logo_red.png" alt="杭州北望"></a>
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
                                            <li class=" active">
                                                <a href="index.php" class="dropdown-toggle">首页</a>

                                            </li>
                                            <li class="dropdown">
                                                <a href="about-us.php" class="dropdown-toggle" data-toggle="dropdown">关于我们</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="about-us.php">公司介绍</a></li>
                                                    <li><a href="company-philosophy.php">公司理念</a></li>
                                                    <li><a href="developProgress.php">发展历程</a></li>
                                                    <li><a href="company-glory.php">公司荣誉</a></li>
                                                    <li><a href="speech.php">领导致辞</a></li>
                                                    <li><a href="organization.php">组织结构</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="latest-product.php" class="dropdown-toggle"
                                                   data-toggle="dropdown">产品中心</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="latest-product.php">普通产品</a></li>
                                                    <li><a href="features-product.php">推荐产品</a></li>
                                                    <li><a href="cheapest-product.php">特价产品 <span
                                                                class="default-bg badge">巨优惠 </span></a></li>
                                                </ul>
                                            </li>

                                            <li class="dropdown">
                                                <a href="technology-support.php" class="dropdown-toggle"
                                                   data-toggle="dropdown">科研中心</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="technology-support.php">技术与服务支持</a></li>
                                                    <li><a href="protocal.php">CRO合同服务</a></li>
                                                    <li><a href="distribution.php">销售网络</a></li>
                                                    <li><a href="services.php">代加工服务</a></li>

                                                </ul>
                                            </li>

                                            <li class="dropdown">
                                                <a href="industry-information.php" class="dropdown-toggle"
                                                   data-toggle="dropdown">新闻资讯</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="news.php">公司新闻</a></li>
                                                    <li><a href="industry-information.php">行业新闻</a></li>
                                                </ul>
                                            </li>

                                            <li class="dropdown">
                                                <a href="talent-concept.php" class="dropdown-toggle"
                                                   data-toggle="dropdown">招贤纳士</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="talent-concept.php">人才理念</a></li>
                                                    <li><a href="employeeDevelopment.php">员工培养</a></li>
                                                    <li><a href="talent-join.php">人才引进</a></li>
                                                    <li><a href="resume-delivery.php">简历投递</a></li>
                                                    <li><a href="encouragement.php">激励保障</a></li>
                                                    <li><a href="travel.php">旅游福利</a></li>
                                                    <li><a href="birthday.php">生日福利</a></li>
                                                </ul>
                                            </li>

                                            <li>
                                                <a href="contact-us.php" class="dropdown-toggle">联系我们</a>
                                            </li>

                                            <li>
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

    public function protocolViewGenerate()
    {
        echo '<aside class="col-md-3 col-md-offset-1">
            <div class="sidebar">
                <div class="block clearfix">
                    <h3 class="title">最新动态</h3>
                    <div class="separator"></div>
                    <ul class="tweets">
                        <li>
                            <i class="fa fa-twitter"></i>
                            <p><a href="#">技术开发（委托）合同——模板 </a></p><span>2016-8-4 17:02:04</span>
                        </li>

                    </ul>
                </div>
                <div class="block clearfix">
                    <h3 class="title">精选</h3>
                    <div class="separator"></div>
                    <div class="image-box">
                        <div class="overlay-container">
                            <img src="style/images/blog-sidebar.jpg" alt="">
                            <div class="overlay">
                                <div class="overlay-links">
                                    <a href="blog-post.php"><i class="fa fa-link"></i></a>
                                    <a href="style/images/blog-sidebar.jpg" class="popup-img-single" title="image title"><i class="fa fa-search-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="image-box-body">
                            <h3 class="title"><a href="blog-post.php">技术开发（委托）合同——模板</a></h3>
                            <a href="protocal.php" class="link"><span>查看更多</span></a>
                        </div>
                    </div>
                </div>


                <div class="block clearfix">
                    <h3 class="title">标签</h3>
                    <div class="separator"></div>
                    <div class="tags-cloud">
                        <div class="tag">
                            <a href="#">热门</a>
                        </div>
                        <div class="tag">
                            <a href="#">最新</a>
                        </div>
                        <div class="tag">
                            <a href="#">精选</a>
                        </div>
                    </div>
                </div>
            </div>
        </aside>';
    }

    public function generateShopList()
    {
        echo '<div class="masonry-grid-fitrows row grid-space-20">
       <div class="col-md-3 col-sm-6 masonry-grid-item">
         <div class="listing-item">
           <div class="overlay-container">
             <img src="style/images/601qmsdg.jpg" alt="">
             <a href="product.php" class="overlay small">
               <i class="fa fa-plus"></i>
               <span>查看详情</span>
             </a>
           </div>
           <div class="listing-item-body clearfix">
             <h3 class="title"><a href="product.php">青霉素酶冻干粉</a></h3>
             <p>≥1000万单位/支     8支/盒</p>
             <span class="price">¥0.00</span>
             <div class="elements-list pull-right">
               <a href="#" class="wishlist" title="wishlist"><i class="fa fa-heart-o"></i></a>
               <a href="#"><i class="fa fa-shopping-cart pr-10"></i>加入购物车</a>
             </div>
           </div>
         </div>
       </div>
       <div class="col-md-3 col-sm-6 masonry-grid-item">
         <div class="listing-item">
           <div class="overlay-container">
             <img src="style/images/601qmsmyt5ML.jpg" alt="">
             <a href="QMSMYT.php" class="overlay small">
               <i class="fa fa-plus"></i>
               <span>查看详情</span>

             </a>
           </div>
           <div class="listing-item-body clearfix">
             <h3 class="title"><a href="QMSMYT.php">青霉素酶液体 5ml</a></h3>
             <p>≥300万单位/ml  5ml/支  8支/盒</p>
             <p>普通商品</p>
             <span class="price">¥0.00</span>
             <div class="elements-list pull-right">
               <a href="#" class="wishlist" title="wishlist"><i class="fa fa-heart-o"></i></a>
               <a href="#"><i class="fa fa-shopping-cart pr-10"></i>加入购物车</a>
             </div>
           </div>
         </div>
       </div>
       <div class="col-md-3 col-sm-6 masonry-grid-item">
         <div class="listing-item">
           <div class="overlay-container">
             <img src="style/images/601QMSMYT100ML.jpg" alt="">
             <a href="QMSMYT10ML.php" class="overlay small">
               <i class="fa fa-plus"></i>
               <span>查看详情</span>
             </a>
           </div>
           <div class="listing-item-body clearfix">
             <h3 class="title"><a href="QMSMYT10ML.php">青霉素酶液体 10ml</a></h3>
             <p>≥300万单位/ml 100ml/瓶</p>
             <span class="price">¥0.0</span>
             <div class="elements-list pull-right">
               <a href="#" class="wishlist" title="wishlist"><i class="fa fa-heart-o"></i></a>
               <a href="#"><i class="fa fa-shopping-cart pr-10"></i>加入购物车</a>
             </div>
           </div>
         </div>
       </div>
       <div class="col-md-3 col-sm-6 masonry-grid-item">
         <div class="listing-item">
           <div class="overlay-container">
             <img src="style/images/602JSADG.jpg" alt="">
             <a href="JSDG.php" class="overlay small">
               <i class="fa fa-plus"></i>
               <span>查看详情</span>
             </a>
             <span class="badge default-bg">售空</span>
           </div>
           <div class="listing-item-body clearfix">
             <h3 class="title"><a href="JSDG.php">金属β-内酰胺酶冻干粉</a></h3>
             <p>≥200万单位/支 8支/盒</p>
             <div><del>¥0.00</del></div>
             <span class="price">¥0.00</span>
             <div class="elements-list pull-right">
               <a href="#" class="wishlist" title="wishlist"><i class="fa fa-heart-o"></i></a>
               <a href="#"><i class="fa fa-shopping-cart pr-10"></i>加入购物车</a>
             </div>
           </div>
         </div>
       </div>
       <div class="col-md-3 col-sm-6 masonry-grid-item">
         <div class="listing-item">
           <div class="overlay-container">
             <img src="style/images/704TBDG.jpg" alt="">
             <a href="TBMSMDGF.php" class="overlay small">
               <i class="fa fa-plus"></i>
               <span>查看详情</span>
             </a>
           </div>
           <div class="listing-item-body clearfix">
             <h3 class="title"><a href="TBMSMDGF.php">头孢菌素酶冻干粉</a></h3>
             <p>≥200万单位8支/盒</p>
             <span class="price">¥0.00</span>
             <div class="elements-list pull-right">
               <a href="#" class="wishlist" title="wishlist"><i class="fa fa-heart-o"></i></a>
               <a href="#"><i class="fa fa-shopping-cart pr-10"></i>加入购物车</a>
             </div>
           </div>
         </div>
       </div>
       <div class="col-md-3 col-sm-6 masonry-grid-item">
         <div class="listing-item">
           <div class="overlay-container">
             <img src="style/images/YCXJJQ.jpg" alt="">
             <a href="productDetail.php" class="overlay small">
               <i class="fa fa-plus"></i>
               <span>查看详情</span>
             </a>
           </div>
           <div class="listing-item-body clearfix">
             <h3 class="title"><a href="productDetail.php">一次性集菌器      （三联）</a></h3>
             <p>无</p>
             <span class="price">¥0.00</span>
             <div class="elements-list pull-right">
               <a href="#" class="wishlist" title="wishlist"><i class="fa fa-heart-o"></i></a>
               <a href="#"><i class="fa fa-shopping-cart pr-10"></i>加入购物车</a>
             </div>
           </div>
         </div>
       </div>

       <div class="col-md-3 col-sm-6 masonry-grid-item">
         <div class="listing-item">
           <div class="overlay-container">
             <img src="style/images/YZGPM.png" alt="">
             <a href="YZGPM.php" class="overlay small">
               <i class="fa fa-plus"></i>
               <span>查看详情</span>
             </a>
           </div>
           <div class="listing-item-body clearfix">
             <h3 class="title"><a href="YZGPM.php">预灌装培养平皿</a></h3>
             <p>无</p>
             <span class="price">¥0.00</span>
             <div class="elements-list pull-right">
               <a href="#" class="wishlist" title="wishlist"><i class="fa fa-heart-o"></i></a>
               <a href="#"><i class="fa fa-shopping-cart pr-10"></i>加入购物车</a>
             </div>
           </div>
         </div>
       </div>

     </div>';
    }

}

$helper = ViewHelper::getInstance();
$helper->footerGenerate();
