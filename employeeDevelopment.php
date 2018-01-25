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
    <title>杭州北望生物技术有限公司 | 员工培养</title>
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
    <style>

    </style>
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
    $header->headerGenerate(6, 2);
    ?>
    <!-- header end -->

    <!-- banner start -->
    <!-- ================ -->
    <div class="banner">
        <div class="fixed-image section dark-translucent-bg parallax-bg-3">
            <div class="container">
                <div class="space-top"></div>
                <h1>欢迎来到人才中心</h1>
                <div class="separator-2"></div>
                <p class="lead">人员一经录用,我们将为您提供:
                    <br class="hidden-xs hidden-sm"> 完善的带薪培训:新员工入职培训和在职培训等；
                    <br class="hidden-xs hidden-sm"> 优厚的福利待遇:交纳五险一金，节日福利及不定期旅游.
                    <br class="hidden-xs hidden-sm"> 个性化的假期安排：双休，每年5天的带薪年休假（工作满一年后），国家法定节假日；
                    <br class="hidden-xs hidden-sm"> 广阔的发展空间：公司将为新员工提供广阔的发展平台，及完善的晋升体系,期待您前来挑战.</p>
            </div>
        </div>
    </div>
    <!-- banner end -->

    <!-- page-intro start-->
    <!-- ================ -->
    <div class="page-intro">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home pr-10"></i><a href="index.php">主页</a></li>
                        <li class="active"><a href="about-us.php">招贤纳士</a></li>
                        <li class="active">员工培养</li>
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


                <aside class="col-md-3">
                    <div class="sidebar">
                        <div class="block clearfix">
                            <h3 class="title">招贤纳士</h3>
                            <div class="separator"></div>
                            <nav>
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="talent-concept.php">人才理念</a></li>
                                    <li class="active"><a href="employeeDevelopment.php">员工培养</a></li>
                                    <li><a href="talent-join.php">人才引进</a></li>
                                    <li><a href="resume-delivery.php">简历投递</a></li>
                                    <li><a href="encouragement.php">激励保障</a></li>
                                    <li><a href="travel.php">旅游福利</a></li>
                                    <li><a href="birthday.php">生日福利</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </aside>
                <div class="main col-md-9">
                    <!--
                    --开始底部轮播图
                    -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="owl-carousel clients" id="panel">
                                <!--
                                       --轮播图cell
                                       -->
                                <?php
                                require_once 'model/PdoMySQL.class.php';
                                require_once 'model/config.php';

                                $mysqlPdo = new PdoMySQL();
                                $allrows = $mysqlPdo->find("staff");

                                for($i = 0;$i<count($allrows);$i++){
                                    echo '<div class="client">
                                           <div class="image-box mb-20 object-non-visible" data-animation-effect="fadeInLeft" data-effect-delay="'.((3-$i)>-1?(3-$i)*100:0).'">
                                               <div class="overlay-container">
                                                   <img src="'.$allrows[$i]["image"].'" alt="'.$allrows[$i]["tag"].'">
                                                   <div class="overlay">
                                                       <div class="overlay-links">
                                                           <a href="'.$allrows[$i]["image"].'" class="popup-img"><i class="fa fa-search-plus"></i></a>
                                                           </div>
                                                       </div>
                                                   </div>
                                               <div class="image-box-body">
                                                   <p>'.$allrows[$i]["tag"].'</p>
                                                   </div></div> </div>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</section>

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
