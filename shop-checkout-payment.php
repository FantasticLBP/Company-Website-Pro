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
	<meta name="author" content=.phpcoder.me">

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
    $header->headerGenerate(1, 0);
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
								<li class="active">确认订单</li>
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
							<h1 class="page-title margin-top-clear">请确认你的订单</h1>
							<!-- page-title end -->
							<div class="space"></div>
							<table class="table cart table-striped">
								<thead>
									<tr>
										<th>商品 </th>
										<th>价格 </th>
										<th>数量</th>
										<th class="amount">总计 </th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="product"><a href="shop-product.php">金属β-内酰胺酶冻干粉</a> <small>普通商品</small></td>
										<td class="price">99.50 </td>
										<td class="quantity">
											<div class="form-group">
												<input type="text" class="form-control" value="2" disabled>
											</div>
										</td>
										<td class="amount">199.00 </td>
									</tr>
									<tr>
										<td class="product"><a href="shop-product.php">青霉素酶液体</a> <small>普通商品</small></td>
										<td class="price"> 99.66 </td>
										<td class="quantity">
											<div class="form-group">
												<input type="text" class="form-control" value="3" disabled>
											</div>
										</td>
										<td class="amount">299.00 </td>
									</tr>
									<tr>
										<td class="product"><a href="shop-product.php"></a> <small>推荐商品</small></td>
										<td class="price"> 499.66 </td>
										<td class="quantity">
											<div class="form-group">
												<input type="text" class="form-control" value="3" disabled>
											</div>
										</td>
										<td class="amount">1499.00 </td>
									</tr>
									<tr>
										<td class="total-quantity" colspan="3">总计</td>
										<td class="amount">1997.00</td>
									</tr>
									<tr>
										<td class="total-quantity" colspan="2">优惠券</td>
										<td class="price">iDeaDiscount25672</td>
										<td class="amount">-20%</td>
									</tr>
									<tr>
										<td class="total-quantity" colspan="3">共 8 件</td>
										<td class="total-amount">1597.00</td>
									</tr>
								</tbody>
							</table>
							<div class="space-bottom"></div>
							<table class="table table-striped">
								<thead>
									<tr>
										<th colspan="2">账单信息 </th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>姓名</td>
										<td class="information">John Doe </td>
									</tr>
									<tr>
										<td>邮箱</td>
										<td class="information">johndoe@mail.com </td>
									</tr>
									<tr>
										<td>手机号码</td>
										<td class="information">+00 123 123 1234</td>
									</tr>
									<tr>
										<td>地址</td>
										<td class="information">One infinity loop, 54100, United States</td>
									</tr>
									<tr>
										<td>额外信息</td>
										<td class="information">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum accusamus pariatur odit neque.</td>
									</tr>
								</tbody>
							</table>
							<div class="space-bottom"></div>
							<table class="table table-striped">
								<thead>
									<tr>
										<th colspan="2">送货信息 </th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>姓名</td>
										<td class="information">John Doe </td>
									</tr>
									<tr>
										<td>邮件</td>
										<td class="information">johndoe@mail.com </td>
									</tr>
									<tr>
										<td>手机号码</td>
										<td class="information">+00 123 123 1234</td>
									</tr>
									<tr>
										<td>地址</td>
										<td class="information">One infinity loop, 54100, United States</td>
									</tr>
								</tbody>
							</table>
							<div class="space-bottom"></div>
							<table class="table table-striped">
								<thead>
									<tr>
										<th colspan="2">支付 </th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>信用卡</td>
										<td class="information">Visa ***917 </td>
									</tr>
								</tbody>
							</table>
							<div class="text-right">
								<a href="shop-checkout-payment.php" class="btn btn-group btn-default btn-sm"><i class="icon-left-open-big"></i>后退</a>
								<a href="shop-checkout-completed.php" class="btn btn-group btn-default btn-sm"><i class="icon-check"></i> 提交订单</a>
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

			<!-- section start -->
			<!-- ================ -->

			<!-- section end -->

			<!-- section start -->
			<!-- ================ -->

			<!-- section end -->

			<!-- footer start (Add "light" class to #footer in order to enable light footer) -->
			<!-- ================ -->
    <?php
    include_once "controller/Footer.php";
    ?>
			<!-- footer end -->

		</div>
		<!-- page-wrapper end -->

		<!-- JavaScript files placed at the end of the document so the pages load faster
		================================================== -->
		<!-- Jquery and Bootstap core js files -->
		<script type="text/javascript" src="style/js/jquery.min.js"></script>
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
