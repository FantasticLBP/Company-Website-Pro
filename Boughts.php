<!DOCTYPE html>
<!--[if IE 9]>
<html lang="en" class="ie9"> <![endif]-->
<!--[if IE 8]>
<html lang="en" class="ie8"> <![endif]-->
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
    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- Web Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700,300&amp;subset=latin,latin-ext'
          rel='stylesheet' type='text/css'>
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

    <link href="style/css/sweetalert.css" rel="stylesheet">

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
                        <li><i class="fa fa-home pr-10"></i><a href="index.php">首页</a></li>
                        <li class="active">已买到的宝贝</li>
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

                    <!-- page-title end -->
                    <div class="space"></div>
                    <table class="table cart table-hover table-striped">
                        <thead>
                        <tr>
                            <th>商品</th>
                            <th>联系人</th>
                            <th>付款方式</th>
                            <th>价格</th>
                            <th>数量</th>
                            <th class="amount">总计</th>
                            <th>时间</th>
                        </tr>
                        </thead>
                        <tbody id="boughtsList">

                        </tbody>
                    </table>
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

<script type="text/javascript" src="style/js/sweetalert.min.js"></script>

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

<script>
    if(isNotEmptyStr(getDataFromLocalStorage("username")) && isNotEmptyStr(getDataFromLocalStorage("id"))){
        $.ajax({
            dataType: "json",
            type: "get",
            url: "controller/Boughts.php?&name=" + new Base64().decode(getDataFromLocalStorage("username")) + "&identifier=" + new Base64().decode(getDataFromLocalStorage("id")) + "&status=1",
            success: function (data) {
                var datas = data.data;
                var $target = $("#boughtsList");
                if (data.code == 200) {
                    if (datas.length < 1) {
                        $('<tr><td colspan="7" class="text-center">暂无数据</td></tr>').appendTo($target);
                        return;
                    }

                    for (var i = 0; i < datas.length; i++) {
                        $('<tr class="remove-data">' +
                            '<td class="product"><a >' + datas[i].productName + '</a> <small>' + datas[i].productLevel + '</small></td>' +
                            '<td class="product"><a >' + datas[i].linkman + '</small></td>' +
                            '<td class="product"><a >' + (datas[i].payMethod == 1 ? "货到付款" : "在线支付") + '</small></td>' +
                            '<td class="price">' + (datas[i].price) / (datas[i].amount) + '</td>' +
                            '<td class="quantity">' + datas[i].amount + '</td>' +
                            '<td class="amount">' + datas[i].price + '</td>' +
                            '<td class="product"><a >' + datas[i].orderTime + '</small></td>' +
                            '</tr>').appendTo($target);
                    }
                }
            },
            error: function (code, message, data) {
                swal("网络状况不佳，请稍后尝试");

            }
        });
    }



</script>

</body>
</html>
