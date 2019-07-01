<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>杭州北望生物技术有限公司 | 联系我们</title>
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
    <link rel="stylesheet" href="style/css/sweetalert.css"/>
    <link rel="stylesheet" href="style/css/sweet-alert.css"/>
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

    <!--引用百度地图API-->
    <style type="text/css">
        .iw_poi_title {color:#CC5522;font-size:14px;font-weight:bold;overflow:hidden;padding-right:13px;white-space:nowrap}
        .iw_poi_content {font:12px arial,sans-serif;overflow:visible;padding-top:4px;white-space:-moz-pre-wrap;word-wrap:break-word}
    </style>
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=Xv8HBl73jf4QcrQZuGH0qXdK3eeFrdpG"></script>

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
    $header->headerGenerate(0,0);
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
                        <li class="active">收货地址</li>
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

                <div class="row">
                    <div class="col-md-12">
                        <div class="contact-form">
                            <form class="form-horizontal" role="form">
                                <div class="form-group has-feedback">
                                    <label for="message">收货地址*</label>
                                    <textarea class="form-control" rows="6" id="deliveryAddress" name="address" placeholder=""></textarea>
                                    <i class="fa fa-pencil form-control-feedback"></i>
                                </div>
                                <input type="button" value="提交" id="updateAddress" class="submit-button btn btn-default">
                                <input type="reset" value="重置" class="btn btn-gray">
                            </form>
                        </div>
                    </div>


                </div>
            </div>
    </section>
    <script src="style/js/sweetalert.min.js"></script>
    <script src="style/js/Helper/utils/util.js"></script>

    <script type="text/javascript">

        //判断字符串不为空
        function isEmpty($val) {
            if($val == "" || $val == undefined || $val.toString().length <= 0 ){
                return true;
            }
            return false;
        }

        $.ajax({
            dataType: "json",
            type: "get",
            url: "controller/Address.php?type=show&name="+new Base64().decode(getDataFromLocalStorage("username"))+"&identifier="+new Base64().decode(getDataFromLocalStorage("id")),
            success:function (data) {
                if(data.code == 200){
                    $("#deliveryAddress").val(data.data[0].address);
                }else {
                    swal(data.message);
                }
            },
            error:function(code,message,data){
                swal("网络状况不佳，请稍后尝试");
            }
        });

        $("#updateAddress").click(function () {
            if(isEmpty($("#deliveryAddress").val())){
               swal("收获地址不能为空");
               return ;
            }
            $.ajax({
                dataType: "json",
                type: "get",
                url: "controller/Address.php?name="+new Base64().decode(getDataFromLocalStorage("username"))+"&identifier="+new Base64().decode(getDataFromLocalStorage("id"))+"&address="+$("#deliveryAddress").val(),
                success:function (data) {
                    if(data.code == 200){
                        swal(data.message);
                    }else {
                        swal(data.message);
                    }
                },
                error:function(code,message,data){
                    swal("网络状况不佳，请稍后尝试");
                }
            });
        });

    </script>

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
<script type="text/javascript" src="style/js/jquery.min.js"></script>
<script>
    $.ajax({
        dataType: "json",
        type: "get",
        url: "controller/ContactHelper.php",
        success: function (data) {
            if (data.code == 200) {
                var datas = data.data;
                $("#deliveryAddress").text(datas.address);
                $("#adminiatratortel").text(datas.adminiatratortel+"(行政综合部)");
                $("#enzymeTel").text(datas.enzymeTel+"（酶事业部）");
                $("#plateTel").text(datas.plateTel+"（平皿事业部）");

                $("#fax").text(datas.fax);

                $("#adminiatratorEmail").text(datas.adminiatratorEmail+"（行政部)");
                $("#MarketDepartmentEmail").text(datas.MarketDepartmentEmail+"（市场部)");
            }
        },
        error: function (code, message, data) {
            swal("发生错误：" + message);

        }
    });
</script>

</body>
</html>
