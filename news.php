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
    <title>杭州北望生物技术有限公司 | 公司新闻</title>
    <meta name="description" content="杭州北望生物技术有限公司网站">
    <meta name="author" content="杭城小刘">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="shortcut icon" href="style/images/img/favicon.ico">

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

    <!-- Custom css -->
    <link href="style/css/custom.css" rel="stylesheet">
    <script src="http://cdn.bootcss.com/jquery/2.0.3/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
    <!--.php5 shim and Respond.js for IE8 support of.php5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="style/js.php5shiv.min.js"></script>
    <script src="style/js/respond.min.js"></script>
    <![endif]-->
    <style>
        .short {
            overflow: hidden !important;
            text-overflow: ellipsis !important;
            display: -webkit-box !important;
            -webkit-box-orient: vertical !important;
            -webkit-line-clamp: 2 !important;
        }
    </style>
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
    $header->headerGenerate(5, 1);
    ?>
    <!-- header end -->

    <!-- page-intro start-->
    <!-- ================ -->
    <div class="page-intro">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home pr-10"></i><a href="index.php">主页</a></li>
                        <li class="active">公司新闻</li>
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
                <div class="main col-md-12" id="newsPanel">


                </div>
                <ul class="pagination">
                    <li><a href="#">«</a></li>
                    <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">»</a></li>
                </ul>
                <!-- pagination end -->

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
<script type="text/javascript" src="style/js/jquery.js"></script>
<script>

    var $des = $("#newsPanel");
    var $page = 1;

    function htmldecode(str) {
        var t = str;
        t = t.replace(/({|})/g, '');   //过滤{}
        t = t.replace(/</g, '<');    //置换符号<
        t = t.replace(/>/g, '>');    //置换符号>
        t = t.replace(/<\/?[^>]*>/g, ''); //*<\/?[^>]*>可以匹配<script></style></body>等，并置空。而不是替换<和>两个符号
        return t;
    }

    function switchUI($this, page) {
        $(".pagination li").each(function () {
            $(this).removeClass("active");
        });
        $($this).parent().addClass("active");
        $page = page;
        refreshView(page);
    }


    function refreshView(page) {
        $des.empty();
        $.ajax({
            dataType: "json",
            type: "get",
            url: "controller/News.php?type=gs&page=" + page,
            success: function (data) {
                if (data.code == 200) {

                    var datas = data.data.data;
                    var $pagetarget = $(".pagination");
                    if (datas.length <= 0) {
                        $pagetarget.empty();
                        $('<div class="row center-block" style="margin: 10px;" >喵~没找到相关的信息哦。</div>').appendTo($des);
                        return;
                    }

                    for (var i = 1; i <= datas.length; i++) {
                        var day = datas[0].time.substr(8, 2);
                        var year = datas[0].time.substr(0, 4);
                        var month = datas[0].time.substr(5, 2);

                        $('<article class="clearfix blogpost object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="200" style="opacity: 1">' +
                            '<div class="blogpost-body">' +
                            '<div class="post-info">' +
                            '<span class="day">' + day + '</span>' +
                            '<span class="month">' + month.toString() + " " + year.toString() + '</span>' +
                            '</div>' +
                            '<div class="blogpost-content">' +
                            '<header>' +
                            '<h2 class="title"><a href="news-detail.php?id=' + datas[i - 1].id + '">' + datas[i - 1].title + '</a></h2>' +
                            '<div class="submitted"><i class="fa fa-user pr-5"></i> by <a>' + datas[i - 1].author + '</a></div>' +
                            '</header>' +
                            '<p class="short">' + htmldecode(datas[i - 1].content) + '</p>' +
                            '</div>' +
                            '</div>' +
                            '<footer class="clearfix">' +
                            '<ul class="links pull-left">' +
                            '<li><i class="fa fa-street-view pr-5"></i> <a a href="news-detail.php?id=' + datas[i - 1].id + '">' + datas[i - 1].pageview + ' 查看</a> </li>' +
                            '</ul>' +
                            '<a class="pull-right link" a href="news-detail.php?id=' + datas[i - 1].id + '"><span>查看详情</span></a>' +
                            '</footer>' +
                            '</article>').appendTo($des);

                    }

                    if (page != "" && page != 1) {
                        return;
                    }

                    $pagetarget.empty();
                    var pages = Math.ceil(data.data.total / 10);
                    for (var $i = 0; $i < pages + 2; $i++) {
                        if ($i == 0) {
                            $('<li><a>«</a></li>').appendTo($pagetarget);
                        } else if ($i == 1) {
                            $('<li class="active"><a onclick="switchUI(this,1);">1 <span class="sr-only">(current)</span></a></li>').appendTo($pagetarget);
                        } else if ($i == pages + 1) {
                            $('<li><a>»</a></li>').appendTo($pagetarget);
                        } else {
                            $('<li><a onclick="switchUI(this,' + $i + ');">' + $i + '</a></li>').appendTo($pagetarget);
                        }
                    }

                }
            },
            error: function (code, message, data) {
                alert("发生错误：" + message);
            }
        });
    }

    refreshView(1);
</script>
</body>
</html>
