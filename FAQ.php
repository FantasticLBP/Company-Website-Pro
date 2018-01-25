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
    <meta name="author" content="杭城小刘">

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
    $header->headerGenerate(8,0);
    ?>
    <!-- header end -->

    <!-- page-intro start-->
    <!-- ================ -->
    <div class="page-intro">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home pr-10"></i><a href="index.php\">主页</a></li>
                        <li class="active">常见问题</li>
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
                <aside class="col-md-3">
                    <div class="sidebar">
                        <div class="block clearfix">
                            <h3 class="title">提交你的问题</h3>
                            <div class="separator"></div>
                            <div class="alert alert-success hidden" id="MessageSent3">
                                We have received your message, we will contact you very soon.
                            </div>
                            <div class="alert alert-danger hidden" id="MessageNotSent3">
                                Oops! Something went wrong please refresh the page and try again.
                            </div>
                            <form class="form-horizontal" role="form" action="controller/FAQ.php"
                                  method="post" enctype="multipart/form-data"  onsubmit="return faqVidate()">
                                <div class="form-group has-feedback">
                                    <label for="name">姓名</label>
                                    <input type="text" class="form-control" id="username" placeholder="请输入你的姓名" name="username">
                                    <i class="fa fa-user form-control-feedback"></i>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="email3">邮箱 </label>
                                    <input type="email" class="form-control" id="email" placeholder="请输入你的邮箱" name="email">
                                    <i class="fa fa-envelope form-control-feedback"></i>
                                </div>
                                <div class="form-group">
                                    <label>类别</label>
                                    <select class="form-control" id="kind" name="kind">
                                        <option value="0">价格</option>
                                        <option value="1">售后</option>
                                        <option value="2">使用</option>
                                    </select>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="message3">信息</label>
                                    <textarea class="form-control" rows="4" id="content" placeholder="" name="content"></textarea>
                                    <i class="fa fa-pencil form-control-feedback"></i>
                                </div>
                                <input type="submit" value="提交" class="submit-button btn btn-default">
                            </form>
                        </div>
                    </div>
                </aside>
                <!-- sidebar end -->

                <!-- main start -->
                <!-- ================ -->
                <div class="main col-md-9">

                    <!-- page-title start -->
                    <!-- ================ -->
                    <h1 class="page-title">常见问题</h1>
                    <!-- page-title end -->

                    <!-- tabs start -->
                    <div class="tabs-style-2">
                        <!-- Nav tabs -->

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="tab1">
                                <!-- accordion start -->
                                <div class="panel-group" id="accordion-faq">

                                </div>
                                <!-- accordion end -->
                            </div>


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
<script type="text/javascript" src="style/js/jquery.js"></script>
<script src="style/js/sweetalert.min.js"></script>
<script>
    /*
     获取url传递的参数：产品id
     */
    function GetQueryString(name) {
        var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
        var r = window.location.search.substr(1).match(reg);
        if (r != null)return unescape(r[2]);
        return null;
    }


    var message = GetQueryString("m");
    if(message == "as"){
        message = "提交成功";
    }else  if(message == "af"){
        message = "提交失败";
    }
    if(message != "" && message != null && message != undefined){
        swal(message);
        setTimeout(function () {
            window.location.href = "FAQ.php";
        }, 1000);
    }

    function isEmpty($val) {
        if($val == "" || $val == undefined || $val.toString().length <= 0 ){
            return true;
        }
        return false;
    }

    function faqVidate() {
        if(isEmpty($("#username").val())){
            swal("留言者昵称不能为空");
            return false;
        }
        if(isEmpty($("#kind").val())){
            swal("请选择问题类别");
            return false;
        }
        if(isEmpty($("#email").val())){
            swal("联系邮箱不能为空");
            return false;
        }
        if(isEmpty($("#content").val())){
            swal("留言内容不能为空");
            return false;
        }
    }



    jQuery(function ($) {
        $target = $("#accordion-faq");
        $.ajax({
            dataType: "json",
            type: "get",
            url: "controller/FAQLIST.php?type=select",
            success: function (data) {
                if (data.code == 200) {
                    var datas = data.data;
                    for (var i = 1; i <= datas.length; i++) {
                        var ele = $('<div class="panel panel-default">'+
                                    '<div class="panel-heading">'+
                                    '<h4 class="panel-title">'+
                                    '<a data-toggle="collapse" data-parent="#accordion-faq" href="#collapse'+i+'" class="collapsed">'+
                                    '<i class="fa fa-question-circle pr-10"></i>'+datas[i-1].title+'</a> </h4>'+
                                    '</div>'+
                                    '<div id="collapse'+i+'" class="panel-collapse collapse">'+
                                    '<div class="panel-body">'+
                                    datas[i-1].content+
                                    '</div>'+
                                    '</div>'+
                                    '</div>').appendTo($target);
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
