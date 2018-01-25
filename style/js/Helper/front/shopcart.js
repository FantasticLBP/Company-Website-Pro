/**
 * Created by geek on 2017/8/18.
 */
(function () {


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

                   var  count = 0;
                    var price = 0;

                    for (var i = 0; i < datas.length; i++) {
                        count += parseInt(datas[i].amount);
                        price += parseInt(datas[i].price);
                        $('<tr class="remove-data">'+
                            '<td class="product"><a>'+datas[i].productName+'</a> <small>'+datas[i].productLevel+'</small></td>'+
                            '<td class="price">'+datas[i].price/datas[i].amount+' </td>'+
                            '<td class="quantity">'+
                            '<div class="form-group">'+
                            '<input type="text" class="form-control" readonly value="'+datas[i].amount+'">'+
                            '</div>'+
                            '</td>'+
                            '<td class="remove"><button type="button" id="'+datas[i].id+'" class="btn btn-remove btn-default">移除</button></td>'+
                            '<td class="amount">'+datas[i].price+' </td>'+
                            '</tr>').appendTo($target);
                    }

                    $('<tr> <td class="total-quantity" colspan="4">共计'+count+'件</td> <td class="total-amount">'+price+'</td> </tr>').appendTo($target);
                }
            },
            error: function (code, message, data) {
                swal("网络状况不佳，请稍后尝试");

            }
        });
    }
    
    

    $("#boughtsList").on("click","button",function () {
        $.ajax({
            dataType: "json",
            type: "get",
            url: "controller/ProductBuy.php?type=revoke&orderid="+$(this).attr("id"),
            success: function (data) {
                if (data.code == 200) {
                    setTimeout(function () {
                        swal("订单取消成功");
                        setTimeout(function () {
                            window.location.reload();
                        }, 1000);
                    }, 1000);


                }
            },
            error: function (code, message, data) {
                console.log("订单取消失败");
            }
        });
    });


})(jQuery);