<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>杭州北望信息管理系统 -添加新产品</title>
    <meta name="keywords" content="Bootstrap模版,Bootstrap模版下载,Bootstrap教程,Bootstrap中文"/>
    <meta name="description" content="站长素材提供Bootstrap模版,Bootstrap教程,Bootstrap中文翻译等相关Bootstrap插件下载"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!-- basic styles -->

    <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="assets/css/font-awesome.min.css"/>

    <!--[if IE 7]>
    <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css"/>
    <![endif]-->

    <!-- page specific plugin styles -->

    <link rel="stylesheet" href="../style/css/sweetalert.css"/>
    <link rel="stylesheet" href="../style/css/sweet-alert.css"/>
    <link rel="stylesheet" href="assets/css/jquery-ui-1.10.3.custom.min.css"/>
    <link rel="stylesheet" href="assets/css/chosen.css"/>
    <link rel="stylesheet" href="assets/css/datepicker.css"/>
    <link rel="stylesheet" href="assets/css/bootstrap-timepicker.css"/>
    <link rel="stylesheet" href="assets/css/daterangepicker.css"/>
    <link rel="stylesheet" href="assets/css/colorpicker.css"/>
    <link rel="stylesheet" href="assets/css/style.css"/>
    <link rel="stylesheet" href="assets/css/colorbox.css"/>
    <link href="assets/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">

    <!-- fonts -->

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300"/>

    <!-- ace styles -->

    <link rel="stylesheet" href="assets/css/ace.min.css"/>
    <link rel="stylesheet" href="assets/css/ace-rtl.min.css"/>
    <link rel="stylesheet" href="assets/css/ace-skins.min.css"/>

    <!--[if lte IE 8]>
    <link rel="stylesheet" href="assets/css/ace-ie.min.css"/>
    <![endif]-->

    <!-- inline styles related to this page -->

    <!-- ace settings handler -->
    <script src="assets/js/ace-extra.min.js"></script>
    <script src="http://cdn.bootcss.com/jquery/2.0.3/jquery.min.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.min.js"></script>

    <![endif]-->
</head>

<body>
<?php
require_once "../controller/adminHeader.php";
$header = AdminHeader::getInstance();
$header->headerGenerate(5, 4);
?>

            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="icon-double-angle-left" data-icon1="icon-double-angle-left"
                   data-icon2="icon-double-angle-right"></i>
            </div>

            <script type="text/javascript">
                try {
                    ace.settings.check('sidebar', 'collapsed')
                } catch (e) {
                }
            </script>
        </div>

        <div class="main-content">
            <div class="breadcrumbs" id="breadcrumbs">
                <script type="text/javascript">
                    try {
                        ace.settings.check('breadcrumbs', 'fixed')
                    } catch (e) {
                    }
                </script>

                <ul class="breadcrumb">
                    <li>
                        <i class="icon-home home-icon"></i>
                        <a href="main.php">主页</a>
                    </li>
                    <li class="active">网站基本信息</li>
                </ul><!-- .breadcrumb -->


            </div>

            <div class="page-content">
                <div class="page-header">
                    <h1>
                        网站基本信息
                        <small>
                            <i class="icon-double-angle-right"></i>
                            公司荣誉
                        </small>
                    </h1>
                </div><!-- /.page-header -->
                <div class="row">
                    <div class="col-xs-12">
                        <form class="form-horizontal" role="form" action="../controller/Honor.php"
                              method="post" enctype="multipart/form-data" onsubmit="return honorCheck()">

                            <div class="form-group hidden">
                                <input type="text" id="editId" name="editId"/>
                            </div>

                            <div class="form-group">
                                <div class="row-fluid ">
                                    <label class="col-sm-3 control-label no-padding-right align-center"
                                           for="availableScope" style="text-align: left">公司荣誉图片预览</label>

                                    <div class="col-sm-9">
                                        <ul class="ace-thumbnails">
                                            <li id="image1">
                                                <a href="" data-rel="colorbox">
                                                    <img width="150" height="150" alt="公司荣誉图片1"/>

                                                    <div class="text">
                                                        <div class="inner"></div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li id="image2">
                                                <a href="" data-rel="colorbox">
                                                    <img width="150" height="150" alt="公司荣誉图片2"/>

                                                    <div class="text">
                                                        <div class="inner"></div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li id="image3">
                                                <a href="" data-rel="colorbox">
                                                    <img width="150" height="150" alt="公司荣誉图片3"/>

                                                    <div class="text">
                                                        <div class="inner"></div>
                                                    </div>
                                                </a>
                                            </li>

                                            <li id="image4">
                                                <a href="" data-rel="colorbox">
                                                    <img width="150" height="150" alt="公司荣誉图片4"/>

                                                    <div class="text">
                                                        <div class="inner"></div>
                                                    </div>
                                                </a>
                                            </li>

                                            <li id="image5">
                                                <a href="" data-rel="colorbox">
                                                    <img width="150" height="150" alt="公司荣誉图片5"/>

                                                    <div class="text">
                                                        <div class="inner"></div>
                                                    </div>
                                                </a>
                                            </li>

                                            <li id="image6">
                                                <a href="" data-rel="colorbox">
                                                    <img width="150" height="150" alt="公司荣誉图片6"/>

                                                    <div class="text">
                                                        <div class="inner"></div>
                                                    </div>
                                                </a>
                                            </li>

                                            <li id="image7">
                                                <a href="" data-rel="colorbox">
                                                    <img width="150" height="150" alt="公司荣誉图片7"/>

                                                    <div class="text">
                                                        <div class="inner"></div>
                                                    </div>
                                                </a>
                                            </li>

                                            <li id="image8">
                                                <a href="" data-rel="colorbox">
                                                    <img width="150" height="150" alt="公司荣誉图片8"/>

                                                    <div class="text">
                                                        <div class="inner"></div>
                                                    </div>
                                                </a>
                                            </li>

                                            <li id="image9">
                                                <a href="" data-rel="colorbox">
                                                    <img width="150" height="150" alt="公司荣誉图片9"/>

                                                    <div class="text">
                                                        <div class="inner"></div>
                                                    </div>
                                                </a>
                                            </li>

                                        </ul>
                                    </div><!-- PAGE CONTENT ENDS -->


                                    <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right red align-center">注意：</label>
                                        <label
                                            class="col-sm-9 control-label red align-left">如果需要修改公司荣誉图片请在下方全部重新上传</label>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right align-center"
                                               for="marketingTime">图片1</label>

                                        <div class="col-sm-9">
                                            <input type="file" name="myFile1" id="id-input-file-1"
                                                   class="col-xs-10 col-sm-5"/>

                                        </div>
                                    </div>
                                    <div class="form-group hidden" id="myFile1Error">
                                        <label class="col-sm-3 control-label no-padding-right"></label>

                                        <div class="col-sm-9 error"></div>
                                    </div>

                                    <div class="space-4"></div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right align-center"
                                               for="marketingTime">图片2</label>

                                        <div class="col-sm-9">
                                            <input type="file" name="myFile2" id="id-input-file-2"
                                                   class="col-xs-10 col-sm-5"/>

                                        </div>
                                    </div>
                                    <div class="space-4"></div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right align-center"
                                               for="marketingTime">图片3</label>

                                        <div class="col-sm-9">
                                            <input type="file" name="myFile3" id="id-input-file-2"
                                                   class="col-xs-10 col-sm-5"/>

                                        </div>
                                    </div>

                                    <div class="space-4"></div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right align-center"
                                               for="marketingTime">图片4</label>

                                        <div class="col-sm-9">
                                            <input type="file" name="myFile4" id="id-input-file-2"
                                                   class="col-xs-10 col-sm-5"/>

                                        </div>
                                    </div>


                                    <div class="space-4"></div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right align-center"
                                               for="marketingTime">图片5</label>

                                        <div class="col-sm-9">
                                            <input type="file" name="myFile5" id="id-input-file-2"
                                                   class="col-xs-10 col-sm-5"/>

                                        </div>
                                    </div>

                                    <div class="space-4"></div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right align-center"
                                               for="marketingTime">图片6</label>

                                        <div class="col-sm-9">
                                            <input type="file" name="myFile6" id="id-input-file-2"
                                                   class="col-xs-10 col-sm-5"/>

                                        </div>
                                    </div>


                                    <div class="space-4"></div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right align-center"
                                               for="marketingTime">图片7</label>

                                        <div class="col-sm-9">
                                            <input type="file" name="myFile7" id="id-input-file-2"
                                                   class="col-xs-10 col-sm-5"/>

                                        </div>
                                    </div>


                                    <div class="space-4"></div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right align-center"
                                               for="marketingTime">图片8</label>

                                        <div class="col-sm-9">
                                            <input type="file" name="myFile8" id="id-input-file-2"
                                                   class="col-xs-10 col-sm-5"/>

                                        </div>
                                    </div>


                                    <div class="space-4"></div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right align-center"
                                               for="marketingTime">图片9</label>

                                        <div class="col-sm-9">
                                            <input type="file" name="myFile10" id="id-input-file-2"
                                                   class="col-xs-10 col-sm-5"/>

                                        </div>
                                    </div>

                                    <div class="clearfix ">
                                        <div class="col-md-offset-3 col-md-9">
                                            <input type="submit" value="提交" class="btn btn-info"/>
                                        </div>
                                    </div>
                                </div>

                            </div>


                    </div><!-- /.main-content -->


                    <div class="ace-settings-container" id="ace-settings-container">
                        <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
                            <i class="icon-cog bigger-150"></i>
                        </div>

                        <div class="ace-settings-box" id="ace-settings-box">
                            <div>
                                <div class="pull-left">
                                    <select id="skin-colorpicker" class="hide">
                                        <option data-skin="default" value="#438EB9">#438EB9</option>
                                        <option data-skin="skin-1" value="#222A2D">#222A2D</option>
                                        <option data-skin="skin-2" value="#C6487E">#C6487E</option>
                                        <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
                                    </select>
                                </div>
                                <span>&nbsp; Choose Skin</span>
                            </div>

                            <div>
                                <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar"/>
                                <label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
                            </div>

                            <div>
                                <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar"/>
                                <label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
                            </div>

                            <div>
                                <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs"/>
                                <label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
                            </div>

                            <div>
                                <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl"/>
                                <label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
                            </div>

                            <div>
                                <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container"/>
                                <label class="lbl" for="ace-settings-add-container">
                                    Inside
                                    <b>.container</b>
                                </label>
                            </div>
                        </div>
                    </div><!-- /#ace-settings-container -->
                </div><!-- /.main-container-inner -->

                <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
                    <i class="icon-double-angle-up icon-only bigger-110"></i>
                </a>
            </div><!-- /.main-container -->

            <!-- basic scripts -->

            <!--[if !IE]> -->


            <!-- <![endif]-->

            <!--[if IE]>
            <script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script><![endif]-->
            <![endif]-->

            <!--[if !IE]> -->

            <script type="text/javascript">
                window.jQuery || document.write("<script src='assets/js/jquery-2.0.3.min.js'>" + "<" + "/script>");
            </script>

            <!-- <![endif]-->

            <!--[if IE]>
            <script type="text/javascript">
                window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>" + "<" + "/script>");
            </script>
            <![endif]-->

            <script type="text/javascript">
                if ("ontouchend" in document) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
            </script>
            <script src="assets/js/bootstrap.min.js"></script>
            <script src="assets/js/typeahead-bs2.min.js"></script>

            <!-- page specific plugin scripts -->

            <!--[if lte IE 8]>
            <script src="assets/js/excanvas.min.js"></script>
            <![endif]-->
            <script src="../style/js/sweetalert.min.js"></script>

            <script src="assets/js/jquery-ui-1.10.3.custom.min.js"></script>
            <script src="assets/js/jquery.ui.touch-punch.min.js"></script>
            <script src="assets/js/chosen.jquery.min.js"></script>
            <script src="assets/js/fuelux/fuelux.spinner.min.js"></script>
            <script src="assets/js/date-time/bootstrap-datepicker.min.js"></script>
            <script src="assets/js/date-time/bootstrap-timepicker.min.js"></script>
            <script src="assets/js/date-time/moment.min.js"></script>
            <script src="assets/js/date-time/daterangepicker.min.js"></script>
            <script src="assets/js/bootstrap-colorpicker.min.js"></script>
            <script src="assets/js/jquery.knob.min.js"></script>
            <script src="assets/js/jquery.autosize.min.js"></script>
            <script src="assets/js/jquery.inputlimiter.1.3.1.min.js"></script>
            <script src="assets/js/jquery.maskedinput.min.js"></script>
            <script src="assets/js/bootstrap-tag.min.js"></script>
            <script src="assets/js/jquery.colorbox-min.js"></script>
            <script type="text/javascript" src="assets/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
            <script type="text/javascript" src="assets/js/bootstrap-datetimepicker.min.js" charset="UTF-8"></script>
            <!-- ace scripts -->

            <script src="assets/js/ace-elements.min.js"></script>
            <script src="assets/js/ace.min.js"></script>

            <script type="text/javascript">
                jQuery(function ($) {
                    //获取url参数
                    function getQueryString(name) {
                        var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
                        var r = window.location.search.substr(1).match(reg);
                        if (r != null)
                            return decodeURIComponent(r[2]);
                        return null;
                    }

                    var flag = getQueryString("success");
                    var type = getQueryString("type");
                    if (flag == 1) {
                        if (type == "add") {
                            swal("公司荣誉信息发布成功");
                        } else {
                            swal("公司荣誉信息修改成功");
                        }
                    } else if (flag == 0) {
                        if (type == "add") {
                            swal("公司荣誉信息发布失败");
                        } else {
                            swal("公司荣誉信息修改失败");
                        }
                    }

                    var colorbox_params = {
                        reposition: true,
                        scalePhotos: true,
                        scrolling: false,
                        previous: '<i class="icon-arrow-left"></i>',
                        next: '<i class="icon-arrow-right"></i>',
                        close: '&times;',
                        current: '{current} of {total}',
                        maxWidth: '100%',
                        maxHeight: '100%',
                        onOpen: function () {
                            document.body.style.overflow = 'hidden';
                        },
                        onClosed: function () {
                            document.body.style.overflow = 'auto';
                        },
                        onComplete: function () {
                            $.colorbox.resize();
                        }
                    };

                    $('.ace-thumbnails [data-rel="colorbox"]').colorbox(colorbox_params);
                    $("#cboxLoadingGraphic").append("<i class='icon-spinner orange'></i>");//let's add a custom loading icon

                    /**$(window).on('resize.colorbox', function() {
		try {
			//this function has been changed in recent versions of colorbox, so it won't work
			$.fn.colorbox.load();//to redraw the current frame
		} catch(e){}
	});*/

                    $.ajax({
                        dataType: "json",
                        type: "get",
                        url: "../controller/Honor.php?type=detail",
                        success: function (data) {
                            if (data.code == 200) {
                                var datas = data.data[0];
                                if (jQuery.isEmptyObject(datas) || datas.length == 0) {
                                    for(var i = 0; i<9;i++){
                                        $("#image"+i+">a>img").prop("alt", "未上传图片");
                                    }
                                    return;
                                }
                                $("#editId").val(datas.id);
                                if (datas.image1 != "") {
                                    $("#image1>a").prop("href", "../" + datas.image1);
                                    $("#image1>a>img").prop("src", "../" + datas.image1);
                                } else {
                                    $("#image1>a>img").prop("alt", "未上传图片");
                                }

                                if (datas.image2 != "") {
                                    $("#image2>a").prop("href", "../" + datas.image2);
                                    $("#image2>a>img").prop("src", "../" + datas.image2);
                                } else {
                                    $("#image2>a>img").prop("alt", "未上传图片");
                                }

                                if (datas.image3 != "") {
                                    $("#image3>a").prop("href", "../" + datas.image3);
                                    $("#image3>a>img").prop("src", "../" + datas.image3);
                                } else {
                                    $("#image3>a>img").prop("alt", "未上传图片");
                                }

                                if (datas.image4 != "") {
                                    $("#image4>a").prop("href", "../" + datas.image4);
                                    $("#image4>a>img").prop("src", "../" + datas.image4);
                                } else {
                                    $("#image4>a>img").prop("alt", "未上传图片");
                                }

                                if (datas.image5 != "") {
                                    $("#image5>a").prop("href", "../" + datas.image5);
                                    $("#image5>a>img").prop("src", "../" + datas.image5);
                                } else {
                                    $("#image5>a>img").prop("alt", "未上传图片");
                                }

                                if (datas.image6 != "") {
                                    $("#image6>a").prop("href", "../" + datas.image6);
                                    $("#image6>a>img").prop("src", "../" + datas.image6);
                                } else {
                                    $("#image6>a>img").prop("alt", "未上传图片");
                                }

                                if (datas.image7 != "") {
                                    $("#image7>a").prop("href", "../" + datas.image7);
                                    $("#image7>a>img").prop("src", "../" + datas.image7);
                                } else {
                                    $("#image7>a>img").prop("alt", "未上传图片");
                                }

                                if (datas.image8 != "") {
                                    $("#image8>a").prop("href", "../" + datas.image8);
                                    $("#image8>a>img").prop("src", "../" + datas.image8);
                                } else {
                                    $("#image8>a>img").prop("alt", "未上传图片");
                                }

                                if (datas.image9 != "") {
                                    $("#image9>a").prop("href", "../" + datas.image9);
                                    $("#image9>a>img").prop("src", "../" + datas.image9);
                                } else {
                                    $("#image9>a>img").prop("alt", "未上传图片");
                                }
                            }
                        },
                        error: function (code, message, data) {
                            alert("发生错误：" + message);
                        }
                    });


                    function honorCheck() {
                        if ($("#id-input-file-1").val() === "") {
                            $("#myFile1Error").removeClass("hidden");
                            $("#myFile1Error>div").text("温馨提示：请上传至少一张公司荣誉图片");
                            return false;
                        } else {
                            $("#myFile1Error").addClass("hidden");
                            return true;
                        }
                    }

                    $('#id-disable-check').on('click', function () {
                        var inp = $('#form-input-readonly').get(0);
                        if (inp.hasAttribute('disabled')) {
                            inp.setAttribute('readonly', 'true');
                            inp.removeAttribute('disabled');
                            inp.value = "This text field is readonly!";
                        }
                        else {
                            inp.setAttribute('disabled', 'disabled');
                            inp.removeAttribute('readonly');
                            inp.value = "This text field is disabled!";
                        }
                    });


                    $(".chosen-select").chosen();
                    $('#chosen-multiple-style').on('click', function (e) {
                        var target = $(e.target).find('input[type=radio]');
                        var which = parseInt(target.val());
                        if (which == 2) $('#form-field-select-4').addClass('tag-input-style');
                        else $('#form-field-select-4').removeClass('tag-input-style');
                    });


                    $('[data-rel=tooltip]').tooltip({container: 'body'});
                    $('[data-rel=popover]').popover({container: 'body'});

                    $('textarea[class*=autosize]').autosize({append: "\n"});
                    $('textarea.limited').inputlimiter({
                        remText: '%n character%s remaining...',
                        limitText: 'max allowed : %n.'
                    });

                    $.mask.definitions['~'] = '[+-]';
                    $('.input-mask-date').mask('99/99/9999');
                    $('.input-mask-phone').mask('(999) 999-9999');
                    $('.input-mask-eyescript').mask('~9.99 ~9.99 999');
                    $(".input-mask-product").mask("a*-999-a999", {
                        placeholder: " ", completed: function () {
                            alert("You typed the following: " + this.val());
                        }
                    });


                    $("#input-size-slider").css('width', '200px').slider({
                        value: 1,
                        range: "min",
                        min: 1,
                        max: 8,
                        step: 1,
                        slide: function (event, ui) {
                            var sizing = ['', 'input-sm', 'input-lg', 'input-mini', 'input-small', 'input-medium', 'input-large', 'input-xlarge', 'input-xxlarge'];
                            var val = parseInt(ui.value);
                            $('#form-field-4').attr('class', sizing[val]).val('.' + sizing[val]);
                        }
                    });

                    $("#input-span-slider").slider({
                        value: 1,
                        range: "min",
                        min: 1,
                        max: 12,
                        step: 1,
                        slide: function (event, ui) {
                            var val = parseInt(ui.value);
                            $('#form-field-5').attr('class', 'col-xs-' + val).val('.col-xs-' + val);
                        }
                    });


                    $("#slider-range").css('height', '200px').slider({
                        orientation: "vertical",
                        range: true,
                        min: 0,
                        max: 100,
                        values: [17, 67],
                        slide: function (event, ui) {
                            var val = ui.values[$(ui.handle).index() - 1] + "";

                            if (!ui.handle.firstChild) {
                                $(ui.handle).append("<div class='tooltip right in' style='display:none;left:16px;top:-6px;'><div class='tooltip-arrow'></div><div class='tooltip-inner'></div></div>");
                            }
                            $(ui.handle.firstChild).show().children().eq(1).text(val);
                        }
                    }).find('a').on('blur', function () {
                        $(this.firstChild).hide();
                    });

                    $("#slider-range-max").slider({
                        range: "max",
                        min: 1,
                        max: 10,
                        value: 2
                    });

                    $("#eq > span").css({width: '90%', 'float': 'left', margin: '15px'}).each(function () {
                        // read initial values from markup and remove that
                        var value = parseInt($(this).text(), 10);
                        $(this).empty().slider({
                            value: value,
                            range: "min",
                            animate: true

                        });
                    });


                    $('#id-input-file-1 , #id-input-file-2').ace_file_input({
                        no_file: '没有文件 ...',
                        btn_choose: '选取文件',
                        btn_change: '重新选取',
                        droppable: false,
                        onchange: null,
                        thumbnail: false //| true | large
                        //whitelist:'gif|png|jpg|jpeg'
                        //blacklist:'exe|php'
                        //onchange:''
                        //
                    });


                    //dynamically change allowed formats by changing before_change callback function
                    $('#id-file-format').removeAttr('checked').on('change', function () {
                        var before_change
                        var btn_choose
                        var no_icon
                        if (this.checked) {
                            btn_choose = "Drop images here or click to choose";
                            no_icon = "icon-picture";
                            before_change = function (files, dropped) {
                                var allowed_files = [];
                                for (var i = 0; i < files.length; i++) {
                                    var file = files[i];
                                    if (typeof file === "string") {
                                        //IE8 and browsers that don't support File Object
                                        if (!(/\.(jpe?g|png|gif|bmp)$/i).test(file)) return false;
                                    }
                                    else {
                                        var type = $.trim(file.type);
                                        if (( type.length > 0 && !(/^image\/(jpe?g|png|gif|bmp)$/i).test(type) )
                                            || ( type.length == 0 && !(/\.(jpe?g|png|gif|bmp)$/i).test(file.name) )//for android's default browser which gives an empty string for file.type
                                        ) continue;//not an image so don't keep this file
                                    }

                                    allowed_files.push(file);
                                }
                                if (allowed_files.length == 0) return false;

                                return allowed_files;
                            }
                        }
                        else {
                            btn_choose = "Drop files here or click to choose";
                            no_icon = "icon-cloud-upload";
                            before_change = function (files, dropped) {
                                return files;
                            }
                        }

                    });

                    $('#colorpicker1').colorpicker();
                    $('#simple-colorpicker-1').ace_colorpicker();


                    $(".knob").knob();


                    //we could just set the data-provide="tag" of the element inside HTML, but IE8 fails!
                    var tag_input = $('#form-field-tags');
                    if (!( /msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase()))) {
                        tag_input.tag(
                            {
                                placeholder: tag_input.attr('placeholder'),
                                //enable typeahead by specifying the source array
                                source: ace.variable_US_STATES,//defined in ace.js >> ace.enable_search_ahead
                            }
                        );
                    }
                    else {
                        //display a textarea for old IE, because it doesn't support this plugin or another one I tried!
                        tag_input.after('<textarea id="' + tag_input.attr('id') + '" name="' + tag_input.attr('name') + '" rows="3">' + tag_input.val() + '</textarea>').remove();
                        //$('#form-field-tags').autosize({append: "\n"});
                    }


                    /////////
                    $('#modal-form input[type=file]').ace_file_input({
                        style: 'well',
                        btn_choose: 'Drop files here or click to choose',
                        btn_change: null,
                        no_icon: 'icon-cloud-upload',
                        droppable: true,
                        thumbnail: 'large'
                    })

                    //chosen plugin inside a modal will have a zero width because the select element is originally hidden
                    //and its width cannot be determined.
                    //so we set the width after modal is show
                    $('#modal-form').on('shown.bs.modal', function () {
                        $(this).find('.chosen-container').each(function () {
                            $(this).find('a:first-child').css('width', '210px');
                            $(this).find('.chosen-drop').css('width', '210px');
                            $(this).find('.chosen-search input').css('width', '200px');
                        });
                    })
                    /**
                     //or you can activate the chosen plugin after modal is shown
                     //this way select element becomes visible with dimensions and chosen works as expected
                     $('#modal-form').on('shown', function () {
					$(this).find('.modal-chosen').chosen();
				})
                     */

                });
            </script>
            <div style="display:none">
                <script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript'
                        charset='gb2312'></script>
            </div>
</body>
</html>
