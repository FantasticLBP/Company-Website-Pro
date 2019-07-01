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
    <title>杭州北望生物技术有限公司 | 技术与服务支持</title>
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
    $header->headerGenerate(4, 1);
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
                        <li class="active">技术与服务支持</li>
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

                <!-- sidebar start -->

                <!-- sidebar end -->

                <!-- main start -->
                <!-- ================ -->
                <div class="main col-md-12">

                    <!-- page-title start -->
                    <!-- ================ -->
                    <!-- page-title end -->

                    <!-- tabs start -->
                    <div class="tabs-style-2">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist" id="tablist">

                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content" id="servicesPanel">

                        </div>
                    </div>
                    <!-- tabs end -->
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
<script>
    jQuery(function ($) {

        //加载技术服务支持列表
        $.ajax({
            dataType: "json",
            type: "get",
            url: "controller/TechKinds.php?type=select",
            success: function (data) {
                if (data.code == 200) {
                    $des = $("#tablist");
                    var datas = data.data;
                    for (var i = 1; i <= datas.length; i++) {
                        if (i == 1) {
                            var tr = $('<li class="active"><a href="#tab' + i + '" role="tab" data-toggle="tab"><i class="fa fa-life-saver pr-10"></i>' + datas[i - 1].moduleName + '</a></li>').appendTo($des);
                        } else {
                            var tr = $('<li><a href="#tab' + i + '" role="tab" data-toggle="tab"><i class="fa fa-life-saver pr-10"></i>' + datas[i - 1].moduleName + '</a></li>').appendTo($des);
                        }
                        getServiceContent(datas[i - 1].id,i);
                    }

                }
            },
            error: function (code, message, data) {
                alert("发生错误：" + message);
            }
        });


        function getServiceContent($moudleId,$tagID) {
            //加载技术服务内容
            $.ajax({
                dataType: "json",
                type: "get",
                url: "controller/TechService.php?type=select&moduleId=" + $moudleId,
                success: function (data) {
                    if (data.code == 200) {
                        $des = $("#servicesPanel");
                        var datas = data.data;
                        var $outerDiv = $('<div class="tab-pane fade'+($tagID==1?"in active":"")+'" id="tab' + $tagID + '">' +
                            '</div>').appendTo($des);
                        var $middleDiv = $('<div class="panel-group" id="accordionFaq'+$tagID+'"></div>').appendTo($outerDiv);

                        for (var i = 1; i <= datas.length; i++) {

                            var $innerDiv = $('<div class="panel panel-default">'+
                                            '<div class="panel-heading">'+
                                            '<h4 class="panel-title">'+
                                            '<a data-toggle="collapse" data-parent="#accordionFaq'+$tagID+'" href="#collapse'+String($tagID)+String(i)+'" class="collapsed">'+
                                            '<i class="fa fa-eye pr-10">' + datas[i - 1].pageview + '</i>' + datas[i - 1].title + "" + datas[i - 1].time + '</a>'+
                                            '</h4>'+
                                            '</div>'+
                                            '<div id="collapse'+String($tagID)+String(i)+'" class="panel-collapse collapse">'+
                                            '<div class="panel-body">'+
                                            datas[i-1].content+
                                            '</div>'+
                                            '</div>'+
                                            '</div>').appendTo($middleDiv);
                        }
                    }
                },
                error: function (code, message, data) {
                    alert("发生错误：" + message);
                }
            });
        }
    });
</script>
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
