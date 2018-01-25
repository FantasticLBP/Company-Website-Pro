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
    $header->headerGenerate(7,0);
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
                        <li class="active">联系我们</li>
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
                    <div class="row">
                        <div class="col-md-3">
                            <div class="box-style-1 gray-bg object-non-visible" data-animation-effect="fadeInLeft" data-effect-delay="0">
                                <i class="fa fa-location-arrow"></i>
                            </div>
                            <h2 class="text-center">公司地址</h2>
                            <h6 class="text-center" id="address"></h6>

                        </div>
                        <div class="col-md-3">
                            <div class="box-style-1 gray-bg object-non-visible" data-animation-effect="fadeInRight" data-effect-delay="200">
                                <i class="fa fa-phone"></i>
                            </div>
                            <h2 class="text-center">联系电话</h2>
                            <h6 class="text-center id="administratorTel"></h6>
                            <h6 class="text-center" id="enzymeTel"></h6>
                            <h6 class="text-center" id="plateTel"></h6>

                        </div>
                        <div class="col-md-3">
                            <div class="box-style-1 gray-bg object-non-visible" data-animation-effect="fadeInUp" data-effect-delay="400">
                                <i class="fa fa-fax"></i>
                            </div>
                            <h2 class="text-center">传真</h2>
                            <h6 class="text-center" id="fax"></h6>

                        </div>
                        <div class="col-md-3">
                            <div class="box-style-1 gray-bg object-non-visible" data-animation-effect="fadeInDown" data-effect-delay="600">
                                <i class="fa fa-envelope

                                "></i>
                            </div>
                            <h2 class="text-center">邮箱</h2>
                            <h6 class="text-center" id="adminiatratorEmail"></h6>
                            <h6 class="text-center" id="MarketDepartmentEmail"></h6>
                        </div>
                    </div>
            </div>
                <br><br> <br><br>
                <h2 class="page-header">欢迎您来电来函咨询洽谈！</h2>


                <div class="row">
                    <div class="col-md-6">
                        <div class="contact-form">
                            <form class="form-horizontal" role="form" action="controller/Message.php"
                                  method="post" enctype="multipart/form-data"  onsubmit="return messagealidate()">
                                <div class="form-group has-feedback">
                                    <label for="name">姓名*</label>
                                    <input type="text" class="form-control" id="username" name="username" placeholder="">
                                    <i class="fa fa-user form-control-feedback"></i>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="email">联系邮箱*</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="">
                                    <i class="fa fa-envelope form-control-feedback"></i>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="subject">联系电话*</label>
                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="">
                                    <i class="fa fa-navicon form-control-feedback"></i>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="message">留言内容*</label>
                                    <textarea class="form-control" rows="6" id="content" name="content" placeholder=""></textarea>
                                    <i class="fa fa-pencil form-control-feedback"></i>
                                </div>
                                <input type="submit" value="提交" class="submit-button btn btn-default">
                                <input type="reset" value="重置" class="btn btn-gray">
                            </form>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div style="width:697px;height:550px;border:#ccc solid 1px;" id="map"></div>
                    </div>
                </div>
        </div>
    </section>
    <script src="style/js/sweetalert.min.js"></script>

    <script type="text/javascript">

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
                window.location.href = "contact-us.php";
            }, 1000);
        }


        function isEmpty($val) {
            if($val == "" || $val == undefined || $val.toString().length <= 0 ){
                return true;
            }
            return false;
        }

        function  messagealidate() {
            if(isEmpty($("#username").val())){
                swal("留言者昵称不能为空");
                return false;
            }
            if(isEmpty($("#phone").val())){
                swal("联系电话不能为空");
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


        //创建和初始化地图函数：
        function initMap(){
            createMap();//创建地图
            setMapEvent();//设置地图事件
            addMapControl();//向地图添加控件
            addMapOverlay();//向地图添加覆盖物
        }
        function createMap(){
            map = new BMap.Map("map");
            map.centerAndZoom(new BMap.Point(120.118548,30.342127),18);
        }
        function setMapEvent(){
            map.enableScrollWheelZoom();
            map.enableKeyboard();
            map.enableDragging();
            map.enableDoubleClickZoom()
        }
        function addClickHandler(target,window){
            target.addEventListener("click",function(){
                target.openInfoWindow(window);
            });
        }
        function addMapOverlay(){
            var markers = [
                {content:"杭州北望生物技术有限公司",title:"杭州北望生物技术有限公司",imageOffset: {width:0,height:3},position:{lat:30.341426,lng:120.11756}}
            ];
            for(var index = 0; index < markers.length; index++ ){
                var point = new BMap.Point(markers[index].position.lng,markers[index].position.lat);
                var marker = new BMap.Marker(point,{icon:new BMap.Icon("http://api.map.baidu.com/lbsapi/createmap/images/icon.png",new BMap.Size(20,25),{
                    imageOffset: new BMap.Size(markers[index].imageOffset.width,markers[index].imageOffset.height)
                })});
                var label = new BMap.Label(markers[index].title,{offset: new BMap.Size(25,5)});
                var opts = {
                    width: 200,
                    title: markers[index].title,
                    enableMessage: false
                };
                var infoWindow = new BMap.InfoWindow(markers[index].content,opts);
                marker.setLabel(label);
                addClickHandler(marker,infoWindow);
                map.addOverlay(marker);
            };
        }
        //向地图添加控件
        function addMapControl(){
            var scaleControl = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
            scaleControl.setUnit(BMAP_UNIT_IMPERIAL);
            map.addControl(scaleControl);
            var navControl = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
            map.addControl(navControl);
            var overviewControl = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:true});
            map.addControl(overviewControl);
        }
        var map;
        initMap();
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
                $("#address").text(datas.address);
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
