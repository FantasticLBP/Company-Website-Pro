/**
 * Created by geek on 2017/8/18.
 */
(function () {
    var $orderId = [];

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
                    if (datas.length < 1) {
                        $("#operationzone").addClass("hidden");
                        $('<tr><td colspan="5" class="text-center">暂无数据</td></tr>').appendTo($target);
                        return;
                    }
                    $("#operationzone").removeClass("hidden");

                    var count = 0;
                    var price = 0;

                    for (var i = 0; i < datas.length; i++) {
                        $orderId.push(datas[i].id);
                        count += parseInt(datas[i].amount);
                        price += parseInt(datas[i].price);
                        $('<tr class="remove-data">' +
                            '<td class="product"><a>' + datas[i].productName + '</a> <small>' + datas[i].productLevel + '</small></td>' +
                            '<td class="price">' + datas[i].price / datas[i].amount + ' </td>' +
                            '<td class="quantity">' +
                            '<div class="form-group">' +
                            '<input type="text" class="form-control" readonly value="' + datas[i].amount + '">' +
                            '</div>' +
                            '</td>' +
                            '<td class="amount">' + datas[i].price + ' </td>' +
                            '</tr>').appendTo($target);
                    }

                    $('<tr> <td class="total-quantity" colspan="3">共计' + count + '件</td> <td class="total-amount">' + price + '</td> </tr>').appendTo($target);
                }
            },
            error: function (code, message, data) {
                swal("网络状况不佳，请稍后尝试");

            }
        });


        $.ajax({
            dataType: "json",
            type: "get",
            url: "controller/UserInfo.php?&name=" + new Base64().decode(getDataFromLocalStorage("username")) + "&identifier=" + new Base64().decode(getDataFromLocalStorage("id")),
            success: function (data) {
                var datas = data.data;
                if (data.code == 200) {
                    $("#billingName").val(datas.username);
                    $("#billingTel").val(datas.billingTel);
                    $("#billingemail").val(datas.email);
                    $("#billingAddress").val(datas.address);
                }
            },
            error: function (code, message, data) {
                swal("网络状况不佳，请稍后尝试");

            }
        });

    } else {
        swal("账户信息已失效，请重新登录");
    }

    $("#commitInfo").click(function () {
        if(!isNotEmptyStr($orderId)){
            swal("请先购买");
            return ;
        }
        if (isNotEmptyStr(getDataFromLocalStorage("username")) && isNotEmptyStr(getDataFromLocalStorage("id"))) {
            swal({
                    title: "确定要提交订单吗？",
                    text: "订单提交后会在你购买的商品会按照地址尽快送达",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "确定",
                    cancelButtonText: "取消",
                    closeOnConfirm: false,
                    closeOnCancel: true
                },
                function () {
                    $.ajax({
                        dataType: "json",
                        type: "get",
                        url: "controller/ProductBuy.php?type=commit&orderid=" + $orderId + "&message=" + $("#addtionMessage").val(),
                        success: function (data) {
                            var datas = data.data;
                            if (data.code == 200) {
                                setTimeout(function () {
                                    swal( "恭喜","购物成功，请保持手机畅通", "success");
                                    setTimeout(function () {
                                        window.location.reload();
                                    }, 1000);
                                }, 1000);

                            }
                        },
                        error: function (code, message, data) {
                            swal("网络状况不佳，请稍后尝试");

                        }
                    });
                });
        } else {
            swal("账户信息已失效，请重新登录");
        }


    });

})(jQuery);