<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>杭州北望生物技术有限公司 |支付方式选择</title>
	<meta name="description" content="杭州北望生物技术有限公司网站">
	<meta name="author" content=.phpcoder.me">

	<!-- Mobile Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Favicon -->
	<link rel="shortcut icon" href="images/favicon.ico">

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
								<li><i class="fa fa-home pr-10"></i><a href="first.php">首页</a></li>
								<li class="active">支付方式</li>
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
							<h1 class="page-title margin-top-clear"> 支付方式</h1>
							<!-- page-title end -->
							<div class="space-bottom"></div>
							<fieldset>
								<legend>付款</legend>
								<form role="form" class="form-horizontal" id="payment-information">
									<div class="row">
										<div class="col-lg-3">
											<div class="radio">
												<label>
													<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
													付款方式<i class="fa fa-cc-visa pl-10"></i><i class="fa fa-cc-amex pl-10"></i><i class="fa fa-cc-mastercard pl-10"></i>
												</label>
											</div>
											<div class="space-bottom"></div>
										</div>
										<div class="col-lg-9">
											<div class="form-group">
												<label for="paymentFirstName" class="col-md-3 control-label">姓名<small class="text-default">*</small></label>
												<div class="col-md-9">
													<div class="row">
														<div class="col-md-4">
															<input type="text" class="form-control" id="paymentFirstName" placeholder="姓名">
														</div>
													</div>
												</div>
											</div>

											<div class="form-group">
												<label class="col-md-3 control-label">账号<small class="text-default">*</small></label>
												<div class="col-md-9">
													<div class="row">
														<div class="col-md-4">
															<select class="form-control">
																<option value="visa" selected="selected">VISA</option>
																<option value="master-card">Master Card</option>
																<option value="american-express">American Express</option>
															</select>
														</div>
													</div>
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-3 control-label">卡号<small class="text-default">*</small></label>
												<div class="col-md-9">
													<div class="row">
														<div class="col-xs-6 col-sm-2">
															<input type="text" class="form-control">
														</div>
														<div class="col-xs-6 col-sm-2">
															<input type="text" class="form-control">
														</div>
														<div class="clearfix space-bottom visible-xs"></div>
														<div class="col-xs-6 col-sm-2">
															<input type="text" class="form-control">
														</div>
														<div class="col-xs-6 col-sm-2">
															<input type="text" class="form-control">
														</div>
													</div>
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-3 control-label">有效期 <small class="text-default">*</small></label>
												<div class="col-md-9">
													<div class="row">
														<div class="col-xs-6 col-sm-2">
															<select class="form-control">
																<option value="01" selected="selected">01</option>
																<option value="03">02</option>
																<option value="03">03</option>
																<option value="04">04</option>
																<option value="05">05</option>
																<option value="06">06</option>
																<option value="07">07</option>
																<option value="08">08</option>
																<option value="09">09</option>
																<option value="10">10</option>
																<option value="11">11</option>
																<option value="12">12</option>
															</select>
														</div>
														<div class="col-xs-6 col-sm-2">
															<select class="form-control">
																<option value="2014" selected="selected">2014</option>
																<option value="2015">2015</option>
																<option value="2016">2016</option>
																<option value="2017">2017</option>
																<option value="2018">2018</option>
																<option value="2019">2019</option>
																<option value="2020">2020</option>
																<option value="2021">2021</option>
																<option value="2022">2022</option>
																<option value="2023">2023</option>
																<option value="2024">2024</option>
																<option value="2025">2025</option>
															</select>
														</div>
													</div>
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-3 control-label">CVS<small class="text-default">*</small></label>
												<div class="col-md-9">
													<div class="row">
														<div class="col-xs-6 col-sm-2">
															<input type="text" class="form-control">
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="space"></div>
									<div class="row">
										<div class="col-lg-3">
											<div class="radio">
												<label>
													<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
													Paypal<i class="fa fa-cc-paypal pl-10"></i>
												</label>
											</div>
											<div class="space-bottom"></div>
										</div>
										<div class="col-lg-9">
											<div class="form-group">
												<label for="paymentEmail" class="col-md-3 control-label">邮箱<small class="text-default">*</small></label>
												<div class="col-md-9">
													<div class="row">
														<div class="col-md-8">
															<input type="email" class="form-control" id="paymentEmail" value="Email">
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="space"></div>
									<div class="row">
										<div class="col-lg-3">
											<div class="radio">
												<label>
													<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
													货到付款
												</label>
											</div>
											<div class="space-bottom"></div>
										</div>
										<div class="col-lg-9">
											<p>支持货到付款.</p>
										</div>
									</div>
								</form>
							</fieldset>
							<div class="text-right">
								<a href="shop-checkout1.php" class="btn btn-group btn-default btn-sm"><i class="icon-left-open-big"></i>  后退</a>
								<a href="shop-checkout-payment.php" class="btn btn-group btn-default btn-sm">确认并继续订单<i class="icon-right-open-big"></i></a>
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
