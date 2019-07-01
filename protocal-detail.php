<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>杭州北望生物技术有限公司 |合同服务</title>
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
    $header->headerGenerate(4, 2);
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
                            <li class="active">CRO合同服务</li>
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
                <div class="main col-md-8">

                    <!-- page-title start -->
                    <!-- ================ -->
                    <h1 class="page-title" id="title"></h1>
                    <!-- page-title end -->

                    <!-- blogpost start -->
                    <article class="clearfix blogpost full">
                        <div class="blogpost-body">
                            <div class="side">
                                <div class="post-info">
                                    <span class="day" id="day">18</span>
                                    <span class="month" id="month">1 2014</span>
                                </div>
                                <div id="affix"><span class="share" id="share"></span><div id="share"></div></div>
                            </div>
                            <div class="blogpost-content">
                                <header>
                                    <div class="submitted"><i class="fa fa-user pr-5"></i> 发布人: <a id="publisher"></a></div>
                                </header>
                                <div class="owl-carousel content-slider-with-controls">
                                    <div class="overlay-container" id="image1">
                                        <img  alt="">
                                        <a href="" class="popup-img overlay" title="image title"><i class="fa fa-search-plus"></i></a>
                                    </div>
                                    <div class="overlay-container" id="image2">
                                        <img  alt="">
                                        <a href="" class="popup-img overlay" title="image title"><i class="fa fa-search-plus"></i></a>
                                    </div>
                                    <div class="overlay-container" id="image3">
                                        <img  alt="">
                                        <a href="" class="popup-img overlay" title="image title"><i class="fa fa-search-plus"></i></a>
                                    </div>
                                </div>
                                <div id="content">

                                </div>
                            </div>
                        </div>
                        <a href="protocal.php" class="btn btn-default">返回</a>
                    </article>


                    <!-- comments form end -->

                </div>
                <!-- main end -->

                <!-- sidebar start -->
                <aside class="col-md-3 col-md-offset-1">
                    <div class="sidebar">
                        <div class="block clearfix">
                            <h3 class="title">最新动态</h3>
                            <div class="separator"></div>
                            <ul class="tweets" id="news">
                            </ul>
                        </div>
                        <div class="block clearfix" id="special">
                            <h3 class="title">精选</h3>
                            <div class="separator"></div>
                            <div class="image-box">
                                <div class="overlay-container">
                                    <img src="" id="sepecialSmallPic" alt="">
                                    <div class="overlay">
                                        <div class="overlay-links">
                                            <a href="" id="sepeciaLink"><i class="fa fa-link"></i></a>
                                            <a href="" id="sepecialBigPic" class="popup-img-single" title="image title"><i class="fa fa-search-plus"></i></a>'+
                                        </div>
                                    </div>
                                </div>
                                <div class="image-box-body">
                                    <h3 class="title"><a href="" id="specialSecHref"></a></h3>
                                    <a href="" id="specialThirdHref" class="link"><span>查看详情</span></a>
                                </div>
                            </div>
                        </div>


                        <div class="block clearfix">
                            <h3 class="title">标签</h3>
                            <div class="separator"></div>
                            <div class="tags-cloud">
                                <div class="tag">
                                    <a id="rm">热门</a>
                                </div>
                                <div class="tag">
                                    <a id="zx">最新</a>
                                </div>
                                <div class="tag">
                                    <a id="jx">精选</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
                <!-- sidebar end -->
                <!-- sidebar end -->

            </div>
        </div>
    </section>
    <!-- main-container end -->



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


<script>
    function getQueryString(name) {
        var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
        var r = window.location.search.substr(1).match(reg);
        if (r != null) return unescape(r[2]); return null;
    }

    var protocolId = getQueryString("id");

    $.ajax({
        dataType: "json",
        type: "get",
        url: "controller/ContractService.php?type=detail&contractId="+protocolId,
        success: function (data) {
            if (data.code == 200) {
                var datas = data.data;
                if(datas.length <= 0){
                    return ;
                }
                if (data.code == 200) {
                    $("#title").text(datas[0].title);
                    $("#publisher").text(datas[0].author);
                    $("#share").text("浏览:"+datas[0].pageview+"次");

                    var day = datas[0].time.substr(8,2);
                    var year = datas[0].time.substr(0,4);
                    var month = datas[0].time.substr(5,2);
                    $("#day").text(day);
                    $("#month").text(month.toString() + year.toString());

                    $("#image1").find("img").attr("src",datas[0].image1);
                    $("#image1").find("a").attr("href",datas[0].image1);

                    $("#image2").find("img").attr("src",datas[0].image2);
                    $("#image2").find("a").attr("href",datas[0].image2);

                    $("#image3").find("img").attr("src",datas[0].image3);
                    $("#image3").find("a").attr("href",datas[0].image3);
                    $("#content").html(datas[0].content);
                }
            }
        },
        error: function (code, message, data) {
            alert("发生错误：" + message);
        }
    });

    var $newTag = $("#news");
    $.ajax({
        dataType: "json",
        type: "get",
        url: "controller/ContractService.php?type=zx",
        success: function (data) {
            if (data.code == 200) {
                var datas = data.data;
                for (var i = 0; i < datas.length; i++) {
                    var $li = $('<a href="protocal-detail.php?id='+datas[i].id+'"><li><i class="fa fa-twitter"></i>'+
                        '<p>'+datas[i].title+'</p><span>'+datas[i].time+'</span></li></a>').appendTo($newTag);
                }
            }
        },
        error: function (code, message, data) {
            alert("发生错误：" + message);
        }
    });

    var $specialTag = $("#special");
    $.ajax({
        dataType: "json",
        type: "get",
        url: "controller/ContractService.php?type=jx",
        success: function (data) {
            if (data.code == 200) {
                var datas = data.data;
                if(datas.length <= 0){
                    return ;
                }
                for (var i = 0; i < 1; i++) {
                    $("#sepecialSmallPic").attr("src", datas[i].image1);
                    $("#sepeciaLink").attr("href", "protocal-detail.php?id=" + datas[i].id);
                    $("#sepecialBigPic").attr("href", datas[i].image1);
                    $("#specialSecHref").attr("href", "protocal-detail.php?id=" + datas[i].id);
                    $("#specialSecHref").text(datas[i].title);
                    $("#specialThirdHref").attr("href", "protocal-detail.php?id=" + datas[i].id);
                }
            }
        },
        error: function (code, message, data) {
            alert("发生错误：" + message);
        }
    });

    $("#rm").click(function () {
        window.location.href = "protocal.php?type=rm";
    });

    $("#zx").click(function () {
        window.location.href = "protocal.php?type=zx";
    });

    $("#jx").click(function () {
        window.location.href = "protocal.php?type=jx";
    });

</script>

</body>
</html>
