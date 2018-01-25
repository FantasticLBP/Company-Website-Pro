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
    <title>杭州北望生物技术有限公司 | CRO合同服务</title>
    <meta name="description" content="杭州北望生物技术有限公司网站">
    <meta name="author" content="杭城小刘">

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
                        <li><i class="fa fa-home pr-10"></i><a href="first.php">首页</a></li>
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

                    <!-- accordion start -->
                    <div class="panel-group panel-transparent" id="panel">

                    </div>
                    <!-- accordion end -->

                    <!-- sidebar end -->
                    <ul class="pagination">
                        <li><a href="#">«</a></li>
                        <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">»</a></li>
                    </ul>
                </div>

                <!-- main end -->
                <!-- sidebar start -->
                <!--函数写法-->

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
                                            <a href="" id="sepecialBigPic" class="popup-img-single" title="image title"><i
                                                        class="fa fa-search-plus"></i></a>'+
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

            </div>
        </div>
    </section>


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

<script type="text/javascript">


    var $panel = $("#panel");
    function getQueryString(name) {
        var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
        var r = window.location.search.substr(1).match(reg);
        if (r != null) return unescape(r[2]);
        return null;
    }
    var type = getQueryString("type");

    var $page = 1;


    if (type != null && type != "" && type != undefined) {
        refreshView(0, type);
    } else {
        refreshView(0, "select");
    }

    function switchUI($this, page) {
        $(".pagination li").each(function () {
            $(this).removeClass("active");
        });
        $($this).parent().addClass("active");
        $page = page;
        refreshView(page, isNotEmptyStr(type) ? type : "select");
    }

    function refreshView(page, $type) {
        $panel.empty();
        //加载产品列表
        $.ajax({
            dataType: "json",
            type: "get",
            url: "controller/ContractService.php?type=" + $type + "&page=" + $page,
            success: function (data) {
                if (data.code == 200) {
                    var datas = data.data.data;
                    if (datas.length <= 0) {
                        $('<div class="row center-block" style="margin: 10px;" >喵~没找到相关的商品哦。</div>').appendTo($panel);
                        return;
                    }
                    if (data.code == 200) {
                        var datas = data.data.data;
                        for (var i = 0; i < datas.length; i++) {
                            var tr = $('<div class="panel panel-default">' +
                                '<div class="panel-heading">' +
                                '<h4 class="panel-title">' +
                                '<a  href="protocal-detail.php?id=' + datas[i].id + '" class="collapsed">' +
                                '<i class="fa fa-eye">' + datas[i].pageview + '</i>' + datas[i].title + " " + datas[i].time +
                                '</a>' +
                                '</h4>' +
                                '</div>' +
                                '</div>').appendTo($panel);
                        }
                    }

                    if (page != "" && page != 0) {
                        return;
                    }
                    var $pagetarget = $(".pagination");
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

    refreshView(0, type);

    var $newTag = $("#news");
    $.ajax({
        dataType: "json",
        type: "get",
        url: "controller/ContractService.php?type=zx",
        success: function (data) {
            if (data.code == 200) {
                var datas = data.data;
                for (var i = 0; i < datas.length; i++) {
                    var $li = $('<a href="protocal-detail.php?id=' + datas[i].id + '"><li><i class="fa fa-twitter"></i>' +
                        '<p>' + datas[i].title + '</p><span>' + datas[i].time + '</span></li></a>').appendTo($newTag);
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
                if (datas.length <= 0) {
                    return;
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
        $.ajax({
            dataType: "json",
            type: "get",
            url: "controller/ContractService.php?type=rm",
            success: function (data) {
                if (data.code == 200) {
                    var datas = data.data;
                    if (datas.length <= 0) {
                        return;
                    }
                    if (data.code == 200) {
                        var $newTag = $("#panel");
                        $newTag.empty();
                        var datas = data.data;
                        for (var i = 0; i < datas.length; i++) {
                            var tr = $('<div class="panel panel-default">' +
                                '<div class="panel-heading">' +
                                '<h4 class="panel-title">' +
                                '<a  href="protocal-detail.php?id=' + datas[i].id + '" class="collapsed">' +
                                '<i class="fa fa-eye">' + datas[i].pageview + '</i>' + datas[i].title + " " + datas[i].time +
                                '</a>' +
                                '</h4>' +
                                '</div>' +
                                '</div>').appendTo($panel);
                        }
                    }
                }
            },
            error: function (code, message, data) {
                alert("发生错误：" + message);
            }
        });
    });

    $("#zx").click(function () {
        $.ajax({
            dataType: "json",
            type: "get",
            url: "controller/ContractService.php?type=zx",
            success: function (data) {
                if (data.code == 200) {
                    var datas = data.data;
                    if (datas.length <= 0) {
                        return;
                    }
                    if (data.code == 200) {
                        var $newTag = $("#panel");
                        $newTag.empty();
                        var datas = data.data;
                        for (var i = 0; i < datas.length; i++) {
                            var tr = $('<div class="panel panel-default">' +
                                '<div class="panel-heading">' +
                                '<h4 class="panel-title">' +
                                '<a  href="protocal-detail.php?id=' + datas[i].id + '" class="collapsed">' +
                                '<i class="fa fa-eye">' + datas[i].pageview + '</i>' + datas[i].title + " " + datas[i].time +
                                '</a>' +
                                '</h4>' +
                                '</div>' +
                                '</div>').appendTo($panel);
                        }
                    }
                }
            },
            error: function (code, message, data) {
                alert("发生错误：" + message);
            }
        });
    });

    $("#jx").click(function () {
        $.ajax({
            dataType: "json",
            type: "get",
            url: "controller/ContractService.php?type=jx",
            success: function (data) {
                if (data.code == 200) {
                    var datas = data.data;
                    if (datas.length <= 0) {
                        return;
                    }
                    if (data.code == 200) {
                        var $newTag = $("#panel");
                        $newTag.empty();
                        var datas = data.data;
                        for (var i = 0; i < datas.length; i++) {
                            var tr = $('<div class="panel panel-default">' +
                                '<div class="panel-heading">' +
                                '<h4 class="panel-title">' +
                                '<a  href="protocal-detail.php?id=' + datas[i].id + '" class="collapsed">' +
                                '<i class="fa fa-eye">' + datas[i].pageview + '</i>' + datas[i].title + " " + datas[i].time +
                                '</a>' +
                                '</h4>' +
                                '</div>' +
                                '</div>').appendTo($panel);
                        }
                    }
                }
            },
            error: function (code, message, data) {
                alert("发生错误：" + message);
            }
        });
    });


</script>

</body>
</html>
