/**
 * Created by geek on 2017/8/13.
 */
(function () {
    var userid = isNotEmptyStr(getDataFromLocalStorage("id")) ? new Base64().decode(getDataFromLocalStorage("id")) : "";
    var username = isNotEmptyStr(getDataFromLocalStorage("username")) ? new Base64().decode(getDataFromLocalStorage("username")) : "";
    if (isNotEmptyStr(userid)) {
        $.ajax({
            dataType: "json",
            type: "get",
            url: "controller/Account.php?action=login&username=" + username + "&userid=" + userid,
            success: function (data) {
                if (data.code == 200) {
                    var datas = data.data;
                    saveToLocalStorage("id", new Base64().encode(datas.identifier));
                    saveToLocalStorage("username", new Base64().encode(datas.username));
                    saveToLocalStorage("ID", new Base64().encode(datas.id));
                    $("#loginBox").addClass("cart");
                    $("#userState").html('<i class="fa fa-user"></i>' + '欢迎，' + datas.username);
                    $("#loginBox").html(' <li>' +
                        '<table class="table table-hover">' +
                        '<thead>' +
                        '<tr>' +
                        '<th class="quantity">个人信息</th>' +
                        '<th class="quantity"></th>' +
                        '<th class="quantity"></th>' +
                        '</tr>' +
                        '</thead>' +
                        '<tbody>' +
                        '<tr>' +
                        '<td class="quantity">积分</td>' +
                        '<td class="product"></td>' +
                        '<td class="amount">' + datas.memberCent + '</td>' +
                        '</tr>' +
                        '<tr>' +
                        '<td class="quantity">收货地址</td>' +
                        '<td class="product"></td>' +
                        '<td class="amount">' + datas.address + '</td>' +
                        '</tr>' +
                        '</tbody>' +
                        '</table>' +
                        '<div class="panel-body text-right">' +
                        '<button id="address" class="btn btn-group btn-default btn-sm">收货地址</button>' +
                        '<button id="boughts" class="btn btn-group btn-default btn-sm">已买到的宝贝</button>' +
                        '<button id="logoutButton" class="btn btn-group btn-default btn-sm">退出</button>' +
                        '</div>' +
                        '</li>');

                } else {
                    emptyTheLocalStorage();
                    swal(data.message);
                }
            },
            error: function (code, message, data) {
                swal("发生错误：" + message);
            }
        });
    }

    $("#loginBox").on("click", "button[id='address']", function () {
        window.location.href = "editAddress.php";

    });

    $("#loginBox").on("click", "button[id='boughts']", function () {
        window.location.href = "Boughts.php";
    });


    $("#loginBox").on("click", "button[id='loginButton']", function () {

        if ($("#username").val() == "") {
            swal("会员名不能为空");
            return;
        }
        if ($("#password").val() == "") {
            swal("密码不能为空");
            return;
        }
        $.ajax({
            dataType: "json",
            type: "get",
            url: "controller/Account.php?action=login&username=" + $("#username").val() + "&password=" + $("#password").val(),
            success: function (data) {
                $("#loginBox").addClass("cart");
                if (data.code == 200) {
                    var datas = data.data;
                    saveToLocalStorage("id", new Base64().encode(datas.identifier));
                    saveToLocalStorage("username", new Base64().encode(datas.username));
                    saveToLocalStorage("ID", new Base64().encode(datas.id));
                    $("#userState").html('<i class="fa fa-user"></i>' + '欢迎，' + datas.username);
                    $("#loginBox").html(' <li>' +
                        '<table class="table table-hover">' +
                        '<thead>' +
                        '<tr>' +
                        '<th class="quantity">个人信息</th>' +
                        '<th class="quantity"></th>' +
                        '<th class="quantity"></th>' +
                        '</tr>' +
                        '</thead>' +
                        '<tbody>' +
                        '<tr>' +
                        '<td class="quantity">积分</td>' +
                        '<td class="product"></td>' +
                        '<td class="amount">' + datas.memberCent + '</td>' +
                        '</tr>' +

                        '<tr>' +
                        '<td class="quantity">收货地址</td>' +
                        '<td class="product"></td>' +
                        '<td class="amount">' + datas.address + '</td>' +
                        '</tr>' +

                        '</tbody>' +
                        '</table>' +
                        '<div class="panel-body text-right">' +
                        '<button id="address" class="btn btn-group btn-default btn-sm">收货地址</button>' +
                        '<button id="boughts" class="btn btn-group btn-default btn-sm">已买到的宝贝</button>' +
                        '<button id="logoutButton" class="btn btn-group btn-default btn-sm">退出</button>' +
                        '</div>' +
                        '</li>');
                } else {
                    swal(data.message);
                }
            },
            error: function (code, message, data) {
                swal("发生错误：" + message);
            }
        });
    });

    $("#loginBox").on("click", "button[id='logoutButton']", function () {
        $.ajax({
            dataType: "json",
            type: "get",
            url: "controller/Account.php?action=lougout",
            success: function (data) {
                $("#loginBox").removeClass("cart");
                if (data.code == 200) {
                    emptyTheLocalStorage();
                    $("#userState").html('<i class="fa fa-user"></i>登录');
                    $("#loginBox").html('<li>' +
                        '<div class="form-group has-feedback">' +
                        '<label class="control-label">会员名</label>' +
                        '<input type="text" id="username" class="form-control" placeholder="">' +
                        '<i class="fa fa-user form-control-feedback"></i>' +
                        '</div>' +
                        '<div class="form-group has-feedback">' +
                        '<label class="control-label">密码</label>' +
                        '<input type="password" id="password" class="form-control" placeholder="">' +
                        '<i class="fa fa-lock form-control-feedback"></i>' +
                        '</div>' +
                        '<button id="loginButton" class="btn btn-group btn-dark btn-sm">登录</button>' +
                        '<span>或</span>' +
                        '<button type="button" id="registerButton" class="btn btn-group btn-default btn-sm">注册 </button>' +
                        '<ul>' +
                        '<li><a id="forgetPassword">忘记密码?</a></li>' +
                        '</ul>' +
                        '</li>');
                }
            },
            error: function (code, message, data) {
                swal("退出失败");

            }
        });
    });

    //shopping-cart
    if (isNotEmptyStr(getDataFromLocalStorage("username")) && isNotEmptyStr(getDataFromLocalStorage("id"))) {
        $.ajax({
            dataType: "json",
            type: "get",
            url: "controller/Boughts.php?&name=" + new Base64().decode(getDataFromLocalStorage("username")) + "&identifier=" + new Base64().decode(getDataFromLocalStorage("id")) + "&status=0",
            success: function (data) {
                var datas = data.data;
                var $target = $("#boughtsList");
                if (data.code == 200) {
                    $target = $("#booked");
                    if (datas.length < 1) {
                        $('<tr><td colspan="3" class="text-center">暂无数据</td></tr>').appendTo($target);
                        return;
                    }
                    var goodsCount = 0;
                    for (var i = 0; i < datas.length; i++) {
                        goodsCount += parseInt(datas[0].amount);
                        $('<tr>' +
                            '<td class="quantity">'+datas[i].amount+' x</td>' +
                            '<td class="product"><a>'+datas[i].productName+'</a><span class="small">'+datas[i].productLevel+'</span></td>' +
                            '<td class="amount">'+datas[i].price+'</td>' +
                            '</tr>').appendTo($target);
                    }
                    $("#goodCount").text("("+goodsCount+")");
                } else {
                    $('<tr><td colspan="7" class="text-center">暂无数据</td></tr>').appendTo($target);
                }
            },
            error: function (code, message, data) {
                swal("网络状况不佳，请稍后尝试");

            }
        });
    }

    $("#cart").on("click","button[id='cartDetail']", function () {
        if(!isNotEmptyStr(localStorage.getItem("username")) || !isNotEmptyStr(localStorage.getItem("id"))){
            swal("请先登录");
            return ;
        }
        window.location.href = "shop-cart.php";

    });



})(jQuery);