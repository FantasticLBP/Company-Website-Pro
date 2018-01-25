/**
 * Created by geek on 2017/8/18.
 */
(function () {
    $("#addToCart").click(function () {



        var amout = $("#productAmount").val();
        if(!isNotEmptyStr(amout)){
            swal("请选选择商品数量");
            return ;
        }
        if(!isNotEmptyStr(localStorage.getItem("username")) || !isNotEmptyStr(localStorage.getItem("ID")) || !isNotEmptyStr(localStorage.getItem("id"))){
            swal("个人信息已失效，请重新登录");
            return ;
        }

        var price = parseInt(amout)*parseInt($("#price").text());

        $.ajax({
            dataType: "json",
            type: "get",
            url: "controller/ProductBuy.php?type=buy&productid="+product.id+"&linkman="+new Base64().decode(localStorage.getItem("username"))+"&price="+price+"&status=0&productName="+product.productName+"&amount="+amout+"&productLevel="+product.productLevel+'&storage='+product.storage,
            success: function (data) {
                if (data.code == 200) {
                    swal("加入购物车成功");
                    uploadProduct();
                }
            },
            error: function (code, message, data) {
                console.log("加入购物车失败");
            }
        });


    });

})(jQuery);