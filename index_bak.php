<?php
if (!isset($_SESSION)) {
    session_id("login");
    session_start();
}
header('content-type:text.html;charset:utf8');
?>
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
    <meta name="description" content="杭州北望生物技术有限公司是一家集新药研发和新药研究技术服务、生物试剂开发与销售、食品药品相关试剂研发和销售为一体的高科技公司。">
    <meta name="Keywords" content="杭州北望、新药研究技术服务、生物试剂开发与销售 、食品药品相关试剂研发、中药、化学药研究开发团队\跨平台、iphone/ipad/mac..."/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- Web Fonts -->


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


    <script src="style/js.html5shiv.min.js"></script>
    <script src="style/js/respond.min.js"></script>
    <script src="http://cdn.bootcss.com/jquery/2.0.3/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
    <style>
        .signle-row {
            height: 50px;
            line-height: 25px;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .newShort {
            display: -webkit-box !important;
            -webkit-box-orient: vertical !important;;
            -webkit-line-clamp: 3 !important;;
            overflow: hidden !important;;
        }
    </style>
    <script>
        function htmldecode(str) {
            var t = str;
            t = t.replace(/({|})/g, '');   //过滤{}
            t = t.replace(/</g, '<');    //置换符号<
            t = t.replace(/>/g, '>');    //置换符号>
            t = t.replace(/<\/?[^>]*>/g, ''); //*<\/?[^>]*>可以匹配<script></style></body>等，并置空。而不是替换<和>两个符号
            str = t;
            document.write(str);
        }
    </script>
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

    <!-- header end -->
    <?php
    require_once "controller/Header.php";
    $header = Header::getInstance();
    $header->headerGenerate(1, 0);
    ?>
    <!-- banner start -->
    <!-- ================ -->
    <div class="banner">

        <!-- slideshow start -->
        <!-- ================ -->
        <div class="slideshow">

            <!-- slider revolution start -->
            <!-- ================ -->
            <div class="slider-banner-container">
                <div class="slider-banner">
                    <ul>
                        <!-- slide 1 start -->
                        <li data-transition="random" data-slotamount="7" data-masterspeed="500"
                            data-saveperformance="on" data-title="北望官方">

                            <!-- main image -->
                            <img src="style/images/slider-1-slide-1.png" alt="slidebg1" data-bgposition="center top"
                                 data-bgfit="cover" data-bgrepeat="no-repeat">

                            <!-- LAYER NR. 1 -->

                            <div class="tp-caption default_bg large sfr tp-resizeme"
                                 data-x="0"
                                 data-y="70"
                                 data-speed="600"
                                 data-start="1200"
                                 data-end="9400"
                                 data-endspeed="600">杭州北望生物技术有限公司
                            </div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption dark_gray_bg sfl medium tp-resizeme"
                                 data-x="0"
                                 data-y="170"
                                 data-speed="600"
                                 data-start="1600"
                                 data-end="9400"
                                 data-endspeed="600"><i class="icon-check"></i>
                            </div>

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption light_gray_bg sfb medium tp-resizeme"
                                 data-x="50"
                                 data-y="170"
                                 data-speed="600"
                                 data-start="1600"
                                 data-end="9400"
                                 data-endspeed="600">新药研发
                            </div>

                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption dark_gray_bg sfl medium tp-resizeme"
                                 data-x="0"
                                 data-y="220"
                                 data-speed="600"
                                 data-start="1800"
                                 data-end="9400"
                                 data-endspeed="600"><i class="icon-check"></i>
                            </div>

                            <!-- LAYER NR. 5 -->
                            <div class="tp-caption light_gray_bg sfb medium tp-resizeme"
                                 data-x="50"
                                 data-y="220"
                                 data-speed="600"
                                 data-start="1800"
                                 data-end="9400"
                                 data-endspeed="600">新药研究技术服务
                            </div>

                            <!-- LAYER NR. 6 -->
                            <div class="tp-caption dark_gray_bg sfl medium tp-resizeme"
                                 data-x="0"
                                 data-y="270"
                                 data-speed="600"
                                 data-start="2000"
                                 data-end="9400"
                                 data-endspeed="600"><i class="icon-check"></i>
                            </div>

                            <!-- LAYER NR. 7 -->
                            <div class="tp-caption light_gray_bg sfb medium tp-resizeme"
                                 data-x="50"
                                 data-y="270"
                                 data-speed="600"
                                 data-start="2000"
                                 data-end="9400"
                                 data-endspeed="600">生物试剂开发与销售
                            </div>

                            <!-- LAYER NR. 8 -->
                            <div class="tp-caption dark_gray_bg sfl medium tp-resizeme"
                                 data-x="0"
                                 data-y="320"
                                 data-speed="600"
                                 data-start="2200"
                                 data-end="9400"
                                 data-endspeed="600"><i class="icon-check"></i>
                            </div>

                            <!-- LAYER NR. 9 -->
                            <div class="tp-caption light_gray_bg sfb medium tp-resizeme"
                                 data-x="50"
                                 data-y="320"
                                 data-speed="600"
                                 data-start="2200"
                                 data-end="9400"
                                 data-endspeed="600">食品药品相关试剂研发和销售为一体
                            </div>

                            <!-- LAYER NR. 10 -->
                            <div class="tp-caption dark_gray_bg sfb medium tp-resizeme"
                                 data-x="0"
                                 data-y="370"
                                 data-speed="600"
                                 data-start="2400"
                                 data-end="9400"
                                 data-endspeed="600">高科技公司
                            </div>

                            <!-- LAYER NR. 11 -->
                            <div class="tp-caption sfr tp-resizeme"
                                 data-x="right"
                                 data-y="center"
                                 data-speed="600"
                                 data-start="2700"
                                 data-end="9400"
                                 data-endspeed="600"><!--<img src="style/images/slider-1-layer-1.png" alt="">-->
                            </div>

                        </li>
                        <!-- slide 1 end -->

                        <!-- slide 2 start -->
                        <li data-transition="random" data-slotamount="7" data-masterspeed="500"
                            data-saveperformance="on" data-title="Powerful Bootstrap Theme">

                            <!-- main image -->
                            <img src="style/images/slider-1-slide-2.png" alt="slidebg1" data-bgposition="center top"
                                 data-bgfit="cover" data-bgrepeat="no-repeat">

                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption white_bg large sfr tp-resizeme"
                                 data-x="0"
                                 data-y="70"
                                 data-speed="600"
                                 data-start="1200"
                                 data-end="9400"
                                 data-endspeed="600">厚积薄发
                            </div>


                            <p style="text-indent:2em;">不求效益最大，但求问心无愧；不求品种很多，但求产品精益；药品质量关系患者健康，产品质量关系企业名誉。品牌的核心：品质。</p>


                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption default_bg sfl medium tp-resizeme"
                                 data-x="0"
                                 data-y="170"
                                 data-speed="600"
                                 data-start="1600"
                                 data-end="9400"
                                 data-endspeed="600"><i class="icon-check"></i>
                            </div>

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption white_bg sfb medium tp-resizeme"
                                 data-x="50"
                                 data-y="170"
                                 data-speed="600"
                                 data-start="1600"
                                 data-end="9400"
                                 data-endspeed="600">不求效益最大，但求问心无愧
                            </div>

                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption default_bg sfl medium tp-resizeme"
                                 data-x="0"
                                 data-y="220"
                                 data-speed="600"
                                 data-start="1800"
                                 data-end="9400"
                                 data-endspeed="600"><i class="icon-check"></i>
                            </div>

                            <!-- LAYER NR. 5 -->
                            <div class="tp-caption white_bg sfb medium tp-resizeme"
                                 data-x="50"
                                 data-y="220"
                                 data-speed="600"
                                 data-start="1800"
                                 data-end="9400"
                                 data-endspeed="600">不求品种很多，但求产品精益
                            </div>

                            <!-- LAYER NR. 6 -->
                            <div class="tp-caption default_bg sfl medium tp-resizeme"
                                 data-x="0"
                                 data-y="270"
                                 data-speed="600"
                                 data-start="2000"
                                 data-end="9400"
                                 data-endspeed="600"><i class="icon-check"></i>
                            </div>

                            <!-- LAYER NR. 7 -->
                            <div class="tp-caption white_bg sfb medium tp-resizeme"
                                 data-x="50"
                                 data-y="270"
                                 data-speed="600"
                                 data-start="2000"
                                 data-end="9400"
                                 data-endspeed="600">药品质量关系患者健康
                            </div>

                            <!-- LAYER NR. 8 -->
                            <div class="tp-caption default_bg sfl medium tp-resizeme"
                                 data-x="0"
                                 data-y="320"
                                 data-speed="600"
                                 data-start="2200"
                                 data-end="9400"
                                 data-endspeed="600"><i class="icon-check"></i>
                            </div>

                            <!-- LAYER NR. 9 -->
                            <div class="tp-caption white_bg sfb medium tp-resizeme"
                                 data-x="50"
                                 data-y="320"
                                 data-speed="600"
                                 data-start="2200"
                                 data-end="9400"
                                 data-endspeed="600">一步一个脚印
                            </div>

                            <!-- LAYER NR. 10 -->
                            <div class="tp-caption default_bg sfb medium tp-resizeme"
                                 data-x="0"
                                 data-y="370"
                                 data-speed="600"
                                 data-start="2400"
                                 data-end="9400"
                                 data-endspeed="600">铸造北望口碑
                            </div>

                            <!-- LAYER NR. 11 -->
                            <div class="tp-caption sfr tp-resizeme"
                                 data-x="right"
                                 data-y="center"
                                 data-speed="600"
                                 data-start="2700"
                                 data-end="9400"
                                 data-endspeed="600"><!--<img src="style/images/slider-1-layer-2.png" alt="">-->
                            </div>

                        </li>
                        <!-- slide 2 end -->

                        <!-- slide 3 start -->
                        <li data-transition="random" data-slotamount="7" data-masterspeed="500"
                            data-saveperformance="on" data-title="Powerful Bootstrap Theme">

                            <!-- main image -->
                            <img src="style/images/slider-1-slide-3.png" alt="kenburns" data-bgposition="left center"
                                 data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-bgfit="100"
                                 data-bgfitend="115" data-bgpositionend="right center">

                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption white_bg large sfr tp-resizeme"
                                 data-x="0"
                                 data-y="70"
                                 data-speed="600"
                                 data-start="1200"
                                 data-end="9400"
                                 data-endspeed="600">服务大众健康
                            </div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption dark_gray_bg sfl medium tp-resizeme"
                                 data-x="0"
                                 data-y="170"
                                 data-speed="600"
                                 data-start="1600"
                                 data-end="9400"
                                 data-endspeed="600"><i class="icon-check"></i>
                            </div>

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption white_bg sfb medium tp-resizeme"
                                 data-x="50"
                                 data-y="170"
                                 data-speed="600"
                                 data-start="1600"
                                 data-end="9400"
                                 data-endspeed="600">立志在制药
                            </div>

                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption dark_gray_bg sfl medium tp-resizeme"
                                 data-x="0"
                                 data-y="220"
                                 data-speed="600"
                                 data-start="1800"
                                 data-end="9400"
                                 data-endspeed="600"><i class="icon-check"></i>
                            </div>

                            <!-- LAYER NR. 5 -->
                            <div class="tp-caption white_bg sfb medium tp-resizeme"
                                 data-x="50"
                                 data-y="220"
                                 data-speed="600"
                                 data-start="1800"
                                 data-end="9400"
                                 data-endspeed="600">食品安全检测
                            </div>

                            <!-- LAYER NR. 6 -->
                            <div class="tp-caption dark_gray_bg sfl medium tp-resizeme"
                                 data-x="0"
                                 data-y="270"
                                 data-speed="600"
                                 data-start="2000"
                                 data-end="9400"
                                 data-endspeed="600"><i class="icon-check"></i>
                            </div>

                            <!-- LAYER NR. 7 -->
                            <div class="tp-caption white_bg sfb medium tp-resizeme"
                                 data-x="50"
                                 data-y="270"
                                 data-speed="600"
                                 data-start="2000"
                                 data-end="9400"
                                 data-endspeed="600">生物研究用试剂等
                            </div>

                            <!-- LAYER NR. 8 -->
                            <div class="tp-caption dark_gray_bg sfl medium tp-resizeme"
                                 data-x="0"
                                 data-y="320"
                                 data-speed="600"
                                 data-start="2200"
                                 data-end="9400"
                                 data-endspeed="600"><i class="icon-check"></i>
                            </div>

                            <!-- LAYER NR. 9 -->
                            <div class="tp-caption white_bg sfb medium tp-resizeme"
                                 data-x="50"
                                 data-y="320"
                                 data-speed="600"
                                 data-start="2200"
                                 data-end="9400"
                                 data-endspeed="600">提供优质服务
                            </div>

                            <!-- LAYER NR. 10 -->
                            <div class="tp-caption dark_gray_bg sfb medium tp-resizeme"
                                 data-x="0"
                                 data-y="370"
                                 data-speed="600"
                                 data-start="2400"
                                 data-end="9400"
                                 data-endspeed="600">传播健康
                            </div>

                            <!-- LAYER NR. 11 -->
                            <div class="tp-caption sfr"
                                 data-x="right" data-hoffset="-660"
                                 data-y="center"
                                 data-speed="600"
                                 data-start="2700"
                                 data-endspeed="600"
                                 data-autoplay="false"
                                 data-autoplayonlyfirsttime="false"
                                 data-nextslideatend="true">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src=';'></iframe>
                                </div>
                            </div>

                        </li>
                        <!-- slide 3 end -->

                    </ul>
                    <div class="tp-bannertimer tp-bottom"></div>
                </div>
            </div>
            <!-- slider revolution end -->

        </div>
        <!-- slideshow end -->

    </div>
    <!-- banner end -->

    <!-- page-top start-->
    <!-- ================ -->
    <div class="page-top">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="call-to-action">
                        <p>招贤纳士</p>
                        <a class="btn btn-white more" href="resume-delivery.php">
                            加入我们 <i class="pl-10 fa fa-info"></i>
                        </a>
                        or
                        <a href="contact-us.php" class="btn btn-default contact">联系我们 <i class="pl-10 fa fa-phone"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page-top end -->

    <!-- main-container start -->
    <!-- ================ -->
    <section class="main-container gray-bg">

        <!-- main start -->
        <!-- ================ -->
        <div class="main">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-center title">新品推荐</h1>

                        <div class="separator"></div>
                        <div class="row" id="LatestPanel">


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main end -->

    </section>
    <!-- main-container end -->

    <!-- section start -->
    <!-- ================ -->
    <div class="section clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">关注排行</h1>

                    <div class="separator"></div>
                    <br>

                    <div class="row">
                        <div class="col-md-6" id="ptDetailPanel">

                        </div>
                        <div class="col-md-6">
                            <div class="panel-group panel-dark" id="ptPanel">


                            </div>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </div>
    <!-- section end -->

    <!-- section start -->
    <!-- ================ -->

    <!-- section end -->

    <!-- section start -->
    <!-- ================ -->

    <!-- section end -->

    <!-- section start -->
    <!-- ================ -->
    <div class="section gray-bg clearfix">
        <div class="owl-carousel content-slider">
            <?php
            require_once 'model/PdoMySQL.class.php';
            require_once 'model/config.php';

            $mysqlPdo = new PdoMySQL();

            $allrows = $mysqlPdo->find("product", "productLevel ='特价商品'");
            if (count($allrows) > 5) {
                $allrows = array_slice($allrows, 0, 5);
            }
            foreach ($allrows as $row) {
                echo '<div class="testimonial">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2 class="title">特价推荐</h2>
                            <div class="testimonial-image">
                                <img src="style/images/' . $row["image1"] . '" alt="' . $row["productName"] . '" title="' . $row["productName"] . '" class="img-circle">
                            </div>
                            <div class="testimonial-body">
                                <p>' . $row["productName"] . '</p>
                                <p>' . $row["productBigKind"] . '</p>
                                <p class="signle-row">适用范围：' . $row["productDescription"] . '</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
            }
            ?>
        </div>


    </div>
    <!-- section end -->

    <!-- section start -->
    <!-- ================ -->
    <div class="section clearfix">

        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <h2>行业动态</h2>
                    <div class="separator-2"></div>


                    <div class="owl-carousel carousel">
                        <?php
                        require_once 'model/PdoMySQL.class.php';
                        require_once 'model/config.php';

                        $mysqlPdo = new PdoMySQL();

                        $allrows = $mysqlPdo->find("news", "kindtype =2");
                        for($i = 0;$i<count($allrows);$i++){
                            echo '<div class="image-box object-non-visible" data-animation-effect="fadeInLeft"
                             data-effect-delay="'.((3-$i)>-1?(3-$i)*100:0).'">
                            <div class="overlay-container">
                                <img src="style/images/portfolio-2.jpg" alt="">

                                <div class="overlay">
                                    <div class="overlay-links">
                                        <a href="news-detail.php?id=' . $allrows[$i]["id"] . '"><i class="fa fa-link"></i></a>
                                        <a href="style/images/portfolio-2.jpg" class="popup-img"><i
                                                class="fa fa-search-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="image-box-body">
                                <h3 class="title"><a href="news-detail.php?id=' . $allrows[$i]["id"] . '">' . $allrows[$i]["title"] . '</a></h3>
                                <p class="newShort"><script>htmldecode(\'' . $allrows[$i]["content"] . '\')</script></p>
                                <a href="news-detail.php?id=' . $allrows[$i]["id"] . '" class="link"><span>查看</span></a>
                            </div>
                        </div>';
                        }
                        foreach ($allrows as $row) {

                        }
                        ?>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <!-- section end -->

    <!-- section start -->
    <!-- ================ -->
    <div class="section gray-bg text-muted footer-top clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="owl-carousel clients">
                        <div class="client">
                            <a href="#"><img src="style/images/client-1.png" alt=""></a>
                        </div>
                        <div class="client">
                            <a href="#"><img src="style/images/client-2.png" alt=""></a>
                        </div>
                        <div class="client">
                            <a href="#"><img src="style/images/client-3.png" alt=""></a>
                        </div>
                        <div class="client">
                            <a href="#"><img src="style/images/client-4.png" alt=""></a>
                        </div>
                        <div class="client">
                            <a href="#"><img src="style/images/client-5.png" alt=""></a>
                        </div>
                        <div class="client">
                            <a href="#"><img src="style/images/client-6.png" alt=""></a>
                        </div>
                        <div class="client">
                            <a href="#"><img src="style/images/client-7.png" alt=""></a>
                        </div>
                        <div class="client">
                            <a href="#"><img src="style/images/client-8.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <blockquote class="inline">
                        <p class="margin-clear">杭州北望生物技术有限公司致力于创新和发展，立志在制药、食品安全检测、生物研究用试剂等高科技领域为客户提供优质服务，引导客户迈向成功。</p>
                        <footer><cite title="Source Title">杭州北望 </cite></footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>

    <?php
    include_once "controller/Footer.php";
    ?>
    <!-- section end -->

    <!-- footer start (Add "light" class to #footer in order to enable light footer) -->
    <!-- ================ -->


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

<!-- jQuery REVOLUTION Slider  -->
<script type="text/javascript" src="style/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="style/js/jquery.themepunch.revolution.min.js"></script>

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
<script>
    var rankData;
    $.ajax({
        dataType: "json",
        type: "get",
        url: "controller/productList.php?type=main",
        success: function (data) {
            if (data.code == 200) {
                var datas = data.data;
                if (datas.length <= 0) {
                    return;
                }
                if (data.code == 200) {
                    var $latestTarget = $("#LatestPanel");
                    $latestTarget.empty();
                    var datas = data.data.tuijian;
                    for (var i = 0; i < datas.length; i++) {
                        var icon = "";
                        if (i == 0) {
                            icon = "fa fa-leaf";
                        } else if (i == 1) {
                            icon = "fa fa-laptop";
                        } else if (i == 2) {
                            icon = "fa fa-sitemap";
                        }
                        var tr = $('<div class="col-sm-4">' +
                            '<div class="box-style-1 white-bg object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="0">' +
                            '<i class="' + icon + '"></i>' +
                            '<h2>' + datas[i].productName + '</h2>' +
                            '<p>' + datas[i].unit + '</p>' +
                            '<a href="product.php?id=' + datas[i].id + '" class="btn-default btn">单 价：' + datas[i].price + ' 元</a>' +
                            '</div>' +
                            '</div>').appendTo($latestTarget);
                    }

                    var ptDatas = data.data.putong;
                    var $ptTarget = $("#ptPanel");

                    var $ptDetailTarget = $("#ptDetailPanel");

                    $ptTarget.empty();
                    for (var i = 1; i <= ptDatas.length; i++) {
                        rankData = ptDatas;
                        if (i == 1) {
                            $('<div class="panel panel-default" onclick="switchDetail(1)">' +
                                '<div class="panel-heading">' +
                                '<h4 class="panel-title">' +
                                '<a data-toggle="collapse" data-parent="#ptPanel" href="#collapse' + i + '" class="" aria-expanded="true">' +
                                '<i class="fa fa-medkit"></i>' + ptDatas[i - 1].productName + '<span class="default-bg badge">普通商品 </span>' +
                                '</a>' +
                                '</h4>' +
                                '</div>' +
                                '<div id="collapse' + i + '" class="panel-collapse collapse in" aria-expanded="true">' +
                                '<div class="panel-body">' +
                                '<p>' + ptDatas[i - 1].unit + '</p>' +
                                '<p>性 状：' + ptDatas[i - 1].productFeature + '</p>' +
                                '</div>' +
                                '</div>' +
                                '</div>').appendTo($ptTarget);
                            $('<h2 class="title">' + ptDatas[i - 1].productName + '</h2>' +
                                '<div class="row">' +
                                '<div class="col-md-6">' +
                                '<img src="style/images/601qmsdg.jpg" alt="">' +
                                '</div>' +
                                '<div class="col-md-6">' +
                                '<p>简介:' + ptDatas[i - 1].productDescription + '</p>' +
                                '</div>' +
                                '</div>' +
                                '<p>商品价格：￥' + ptDatas[i - 1].price + '元</p>' +
                                '<p>商品单位：' + ptDatas[i - 1].unit + '</p>' +
                                '<a href="product.php" class="btn btn-white">查看更多</a>' +
                                '<div class="space hidden-md hidden-lg"></div>').appendTo($ptDetailTarget);

                        } else {
                            $('<div class="panel panel-default" onclick="switchDetail('+i+')">' +
                                '<div class="panel-heading">' +
                                '<h4 class="panel-title">' +
                                '<a data-toggle="collapse" data-parent="#ptPanel" href="#collapse' + i + '" class="collapsed">' +
                                '<i class="fa fa-medkit"></i>' + ptDatas[i - 1].productName + '<span class="default-bg badge">普通商品 </span>' +
                                '</a>' +
                                '</h4>' +
                                '</div>' +
                                '<div id="collapse' + i + '" class="panel-collapse collapse">' +
                                '<div class="panel-body">' +
                                '<p>' + ptDatas[i - 1].unit + '</p>' +
                                '<p>性 状：' + ptDatas[i - 1].productFeature + '</p>' +
                                '</div>' +
                                '</div>' +
                                '</div>').appendTo($ptTarget);
                        }
                    }
                }
            }
        },
        error: function (code, message, data) {
            alert("发生错误：" + message);
        }
    });

    function switchDetail($targetId) {
        if($targetId == "" || $targetId == undefined){
            return ;
        }
        var $ptDetailTarget = $("#ptDetailPanel");
        $ptDetailTarget.empty();
        $('<h2 class="title">' + rankData[$targetId - 1].productName + '</h2>' +
            '<div class="row">' +
            '<div class="col-md-6">' +
            '<img src="style/images/601qmsdg.jpg" alt="">' +
            '</div>' +
            '<div class="col-md-6">' +
            '<p>简介:' + rankData[$targetId - 1].productDescription + '</p>' +
            '</div>' +
            '</div>' +
            '<p>商品价格：￥' + rankData[$targetId - 1].price + '元</p>' +
            '<p>商品单位：' + rankData[$targetId - 1].unit + '</p>' +
            '<a href="product.php" class="btn btn-white">查看更多</a>' +
            '<div class="space hidden-md hidden-lg"></div>').appendTo($ptDetailTarget);


    }

</script>
</body>
</html>
