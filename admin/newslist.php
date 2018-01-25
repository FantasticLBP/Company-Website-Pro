<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title> 杭州北望信息管理系统</title>
    <meta name="keywords" content=" 杭州北望信息管理系统"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!-- basic styles -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="assets/css/font-awesome.min.css"/>

    <!--[if IE 7]>
    <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css"/>
    <![endif]-->

    <!-- page specific plugin styles -->

    <!-- fonts -->

    <!-- ace styles -->

    <link rel="stylesheet" href="assets/css/ace.min.css"/>
    <link rel="stylesheet" href="assets/css/ace-rtl.min.css"/>
    <link rel="stylesheet" href="assets/css/ace-skins.min.css"/>
    <link rel="stylesheet" href="assets/css/bootstrap-editable.css"/>
    <link rel="stylesheet" href="../style/css/sweet-alert.css"/>
    <link rel="stylesheet" href="../style/css/sweetalert.css"/>

    <!--[if lte IE 8]>
    <link rel="stylesheet" href="assets/css/ace-ie.min.css"/>
    <![endif]-->

    <!-- inline styles related to this page -->

    <!-- ace settings handler -->

    <script src="assets/js/ace-extra.min.js"></script>

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
$header->headerGenerate(7, 0);
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
                        <a href="account.php">主页</a>
                    </li>

                    <li class="active">
                        <a>新闻资讯发布</a>
                    </li>
                </ul><!-- .breadcrumb -->
            </div>

            <div class="page-content">


                <div class="row">
                    <div class="col-xs-12">
                        <!-- PAGE CONTENT BEGINS -->


                        <div class="row">

                            <div class="col-xs-5"></div>
                            <div class="col-xs-4 col-lg-2"><a class="btn btn-danger btn-block" href="newspublish.php">发布新资讯</a></div>                            <div class="col-xs-5"></div>

                            <div class="col-xs-12" style="margin-top: 30px;">
                                <div class="table-header">
                                    新闻资讯列表
                                </div>

                                <div class="table-responsive">
                                    <table id="sample-table-2" class="table table-striped table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th class="center">
                                                <label>
                                                    <input type="checkbox" class="ace"/>
                                                    <span class="lbl"></span>
                                                </label>
                                            </th>
                                            <th class="center">标题</th>
                                            <th class="center">类别</th>
                                            <th class="hidden-480 center">时间</th>
                                            <th class="hidden-480 center">发布者</th>
                                            <th class="center">浏览量</th>
                                            <th class="center">操作</th>
                                        </tr>
                                        </thead>

                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div id="modal-table" class="modal fade" tabindex="-1">

                        </div><!-- PAGE CONTENT ENDS -->
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.page-content -->
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
                    <span>&nbsp; 选择皮肤</span>
                </div>

                <div>
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar"/>
                    <label class="lbl" for="ace-settings-navbar"> 固定导航条</label>
                </div>

                <div>
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar"/>
                    <label class="lbl" for="ace-settings-sidebar"> 固定滑动条</label>
                </div>

                <div>
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs"/>
                    <label class="lbl" for="ace-settings-breadcrumbs">固定面包屑</label>
                </div>

                <div>
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl"/>
                    <label class="lbl" for="ace-settings-rtl">切换到左边</label>
                </div>

                <div>
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container"/>
                    <label class="lbl" for="ace-settings-add-container">
                        切换窄屏
                        <b></b>
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

<script src="http://cdn.bootcss.com/jquery/2.0.3/jquery.min.js"></script>

<!-- <![endif]-->

<!--[if IE]>

<script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>

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

<script src="../style/js/sweetalert.min.js"></script>

<!-- page specific plugin scripts -->
<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/jquery.dataTables.bootstrap.js"></script>
<!-- ace scripts -->

<script src="assets/js/ace-elements.min.js"></script>
<script src="assets/js/ace.min.js"></script>

<!-- inline scripts related to this page -->

<script type="text/javascript">

    //获取url参数
    function getQueryString(name) {
        var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
        var r = window.location.search.substr(1).match(reg);
        if (r != null)
            return decodeURIComponent(r[2]);
        return null;
    }

    //删除里程碑
    function deleteProduct($newid) {

        swal({
            title: "操作提示",
            text: "确认要删除该条资讯吗？",
            type: "warning", showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            cancelButtonText: "否",
            confirmButtonText: "是",
            closeOnConfirm: true
        }, function () {
            $.ajax({
                dataType: "json",
                type: "get",
                url: "../controller/News.php?type=delete&newid=" + $newid,
                success: function (data) {
                    if (data.code == 200) {
                        setTimeout(function () {
                            swal(data.message);
                            setTimeout(function () {
                                window.location.reload();
                            }, 1000);
                        }, 1000);
                    }
                },
                error: function (code, message, data) {
                    swal("发生错误：" + message);

                }
            });
        });
    }


    jQuery(function ($) {

        //加载产品列表
        $.ajax({
            dataType: "json",
            type: "get",
            url: "../controller/News.php?type=select",
            success: function (data) {
                if (data.code == 200) {
                    $des = $("#sample-table-2>tbody");
                    var datas = data.data;
                    for (var i = 0; i < datas.length; i++) {
                        var tr = $("<tr></tr>").appendTo($des);
                        var td1 = $('<td class="center"><label><input type="checkbox" class="ace" /><span class="lbl"></span></label></td>').appendTo(tr);
                        var td3 = $('<td class="hidden-480 center">' + datas[i].title + '</td>').appendTo(tr);
                        var td2 = $('<td class="center">' + (datas[i].kindtype==1?"公司新闻":"行业新闻")+ '</td>').appendTo(tr);
                        var td4 = $('<td class=" center">' + datas[i].time + '</td>').appendTo(tr);
                        var td5 = $('<td class=" hidden-480 center">' + datas[i].author + '</td>').appendTo(tr);
                        var td6 = $('<td class=" hidden-480 center">' + datas[i].pageview + '</td>').appendTo(tr);
                        var td7 = $('<td class="center"><div class="visible-md visible-lg visible-sm  action-buttons">  <a  class="btn btn-xs btn-warning"  role="button" id="delete' + datas[i].id + '"  onclick="deleteProduct(' + datas[i].id + ');"><i class="icon-remove bigger-120"  >删除</i></a></div></td>').appendTo(tr);
                    }

                    var oTable1 = $('#sample-table-2').dataTable(
                        {
                            "aoColumns": [
                                {"bSortable": true},
                                null, null, null, null, null,
                                {"bSortable": true}
                            ],
                            "oLanguage": {
                                "sLengthMenu": "每页显示 _MENU_ 条记录",
                                "sZeroRecords": "抱歉， 没有找到",
                                "sInfo": "从 _START_ 到 _END_ /共 _TOTAL_ 条数据",
                                "sInfoEmpty": "没有数据",
                                "sInfoFiltered": "(从 _MAX_ 条数据中检索)",
                                "sSearch": "搜索:",
                                "oPaginate": {
                                    "sFirst": "首页",
                                    "sPrevious": "前一页",
                                    "sNext": "后一页",
                                    "sLast": "尾页"
                                },
                                "sZeroRecords": "没有检索到数据"
                            },
                        });
                }
            },
            error: function (code, message, data) {
                alert("发生错误：" + message);
            }
        });


        $('table th input:checkbox').on('click', function () {
            var that = this;
            $(this).closest('table').find('tr > td:first-child input:checkbox')
                .each(function () {
                    this.checked = that.checked;
                    $(this).closest('tr').toggleClass('selected');
                });

        });


        $('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
        function tooltip_placement(context, source) {
            var $source = $(source);
            var $parent = $source.closest('table')
            var off1 = $parent.offset();
            var w1 = $parent.width();

            var off2 = $source.offset();
            var w2 = $source.width();

            if (parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2)) return 'right';
            return 'left';
        }
    })
</script>
<div style="display:none">
    <script src="assets/js/stat.js"></script>
</div>
</body>
</html>

