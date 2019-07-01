<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>杭州北望生物技术有限公司 | 首页</title>
    <meta name="description" content="杭州北望生物技术有限公司网站">
    <meta name="author" content="杭城小刘">

	<!-- Mobile Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Favicon -->
	<link rel="shortcut icon" href="style/images/img/favicon.ico">

	<!-- Web Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700,300&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>

	<!-- Bootstrap core CSS -->
	<link href="style/css/bootstrap.css" rel="stylesheet">

	<!-- Font Awesome CSS -->
	<link href="style/css/font-awesome.css" rel="stylesheet">

	<!-- Fontello CSS -->
	<link href="style/css/fontello.css" rel="stylesheet">

	<!-- Plugins -->
	<link href="style/css/settings.css" media="screen" rel="stylesheet">
	<link href="style/css/extralayers.css" media="screen" rel="stylesheet">
	<link href="style/css/magnific-popup.css" rel="stylesheet">
	<link href="style/css/animations.css" rel="stylesheet">
	<link href="style/css/owl.carousel.css" rel="stylesheet">

	<!-- iDea core CSS file -->
	<link href="style/css/style.css" rel="stylesheet">

	<!-- Style Switcher Styles (Remove these two lines) -->
	<link href="#" data-style="styles" rel="stylesheet">
	<link href="style/css/style-switcher.css" rel="stylesheet">

	<!-- Custom css -->
	<link href="style/css/custom.css" rel="stylesheet">
    <script src="http://cdn.bootcss.com/jquery/2.0.3/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
	<!--.php5 shim and Respond.js for IE8 support of.php5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="style/js.php5shiv.min.js"></script>
	<script src="style/js/respond.min.js"></script>
	<![endif]-->
</head>

<!-- body classes:
        "boxed": boxed layout mode e.g. <body class="boxed">
        "pattern-1 ... pattern-9": background patterns for boxed layout mode e.g. <body class="boxed pattern-1">
-->
<body class="front no-trans">
<!-- scrollToTop -->
<!-- ================ -->
<div class="scrollToTop"><i class="icon-up-open-big"></i></div>

<!-- page wrapper start -->
<!-- ================ -->
<div class="page-wrapper">

	<!-- header-top start (Add "dark" class to .header-top in order to enable dark header-top e.g <div class="header-top dark">) -->
	<!-- ================ -->
	<!-- header-top end -->

	<!-- header start classes:
        fixed: fixed navigation mode (sticky menu) e.g. <header class="header fixed clearfix">
         dark: dark header version e.g. <header class="header dark clearfix">
    ================ -->
    <?php
    require_once "controller/Header.php";
    $header = Header::getInstance();
    $header->headerGenerate(0, 0);
    ?>
			<!-- header end -->

			<!-- page-intro start-->
			<!-- ================ -->
			<div class="page-intro">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<ol class="breadcrumb">
								<li><i class="fa fa-home pr-10"></i><a href="first.php">主页</a></li>
								<li class="active">站点地图</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
			<!-- page-intro end -->

			<!-- main-container start -->
			<!-- ================ -->
			<section class="main-container">

				<div class="container">
					<div class="row">

						<!-- main start -->
						<!-- ================ -->
						<div class="main col-md-12">

							<!-- page-title start -->
							<!-- ================ -->
							<h1 class="page-title">站点地图</h1>
							<hr>
							<!-- page-title end -->
							<div class="row">
								<div class="col-md-4">
									<a href="page-about.php"><h2>主页</h2></a>

									<h2>关于我们</h2>
									<ul class="list">
										<li><a href="about-us.php"><i class="icon-right-open"></i>公司介绍</a></li>
										<li><a href="company-philosophy.php"><i class="icon-right-open"></i>公司理念</a></li>
										<li><a href="developProgress.php"><i class="icon-right-open"></i>发展历程</a></li>
										<li><a href="company-glory.php"><i class="icon-right-open"></i>公司荣誉</a></li>
										<li><a href="speech.php"><i class="icon-right-open"></i>领导致辞</a></li>
										<li><a href="organization.php"><i class="icon-right-open"></i>组织结构</a></li>

									</ul>
									<h2>产品中心</h2>
									<ul class="list">
										<li><a href="latest-product.php"><i class="icon-right-open"></i>普通产品</a></li>
										<li><a href="features-product.phpl"><i class="icon-right-open"></i>推荐产品</a></li>
										<li><a href="cheapest-product.php"><i class="icon-right-open"></i>特价产品</a></li>
									</ul>
								</div>
								<div class="col-md-4">
									<h2>科研中心</h2>
									<ul class="list">
											<ul class="list">
												<li><a target="_blank" href="technology-support.php"><i class="icon-right-open"></i>技术服务支持</a></li>
												<li><a target="_blank" href="protocal.php"><i class="icon-right-open"></i>CRO合同服务</a></li>
												<li><a target="_blank" href="distribution.php"><i class="icon-right-open"></i>销售网络</a></li>
												<li><a target="_blank" href="services.php"><i class="icon-right-open"></i>代加工服务</a></li>
											</ul>
										</li>

									</ul>
								</div>
								<div class="col-md-4">
									<h2>新闻资讯</h2>
									<ul class="list">
										<li><a href="news.php"><i class="icon-right-open"></i>公司新闻</a></li>
										<li><a href="industry-information.php"><i class="icon-right-open"></i>行业新闻</a></li>
									</ul>
									<h2>招贤纳士</h2>
									<ul class="list">
											<ul class="list">
												<li><a href="talent-concept.php">人才理念</a></li>
												<li ><a href="employeeDevelopment.php">员工培养</a></li>
												<li><a href="talent-join.php">人才引进</a></li>
												<li><a href="resume-delivery.php">简历投递</a></li>
												<li><a href="encouragement.php">激励保障</a></li>
												<li><a href="travel.php">旅游福利</a></li>
												<li><a href="birthday.php">生日福利</a></li>

											</ul>
											<br>
										</li>
									</ul>
									<a href="contact-us.php"><h2>联系我们</h2></a>
									<a href="FAQ.php"><h2>FAQ</h2></a>

								</div>
							</div>
						</div>
						<!-- main end -->

					</div>
				</div>
			</section>
			<!-- main-container end -->

			<!-- section start -->
			<!-- ================ -->

			<!-- section end -->

			<!-- footer start (Add "light" class to #footer in order to enable light footer) -->
			<!-- ================ -->
    <?php
    require_once "controller/Footer.php";
    ?>
			<!-- footer end -->

		</div>
		<!-- page-wrapper end -->

		<!-- JavaScript files placed at the end of the document so the pages load faster
		================================================== -->
		<!-- Jquery and Bootstap core js files -->
		<script type="text/javascript" src="style/js/jquery.js"></script>
		<script type="text/javascript" src="style/js/bootstrap.min.js"></script>

		<!-- Modernizr javascript -->
		<script type="text/javascript" src="style/js/modernizr.js"></script>

		<!-- Isotope javascript -->
		<script type="text/javascript" src="style/js/isotope.pkgd.min.js"></script>

		<!-- Owl carousel javascript -->
		<script type="text/javascript" src="style/js/owl.carousel.js"></script>

		<!-- Magnific Popup javascript -->
		<script type="text/javascript" src="style/js/jquery.magnific-popup.min.js"></script>

		<!-- Appear javascript -->
		<script type="text/javascript" src="style/js/jquery.appear.js"></script>

		<!-- Sharrre javascript -->
		<script type="text/javascript" src="style/js/jquery.sharrre.js"></script>

		<!-- Count To javascript -->
		<script type="text/javascript" src="style/js/jquery.countTo.js"></script>

		<!-- Parallax javascript -->
		<script src="style/js/jquery.parallax-1.1.3.js"></script>

		<!-- Contact form -->
		<script src="style/js/jquery.validate.js"></script>

		<!-- SmoothScroll javascript -->
		<script type="text/javascript" src="style/js/jquery.browser.js"></script>
		<script type="text/javascript" src="style/js/SmoothScroll.js"></script>

		<!-- Initialization of Plugins -->
		<script type="text/javascript" src="style/js/template.js"></script>

		<!-- Custom Scripts -->
		<script type="text/javascript" src="style/js/custom.js"></script>
		<!-- Color Switcher (Remove these lines) -->
		<script type="text/javascript" src="style/js/style-switcher.js"></script>

		<!-- Color Switcher End -->
	</body>
</html>
