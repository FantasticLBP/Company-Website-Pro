/**
 * Created by geek on 2017/8/29.
 */
(function () {

    $("#adminName").text(new Base64().decode(getDataFromLocalStorage("Adminusername")));

    $("#logoutButton").click(function () {
        swal({
            title: "",
            text: "请确认是否退出？",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "确定",
            closeOnConfirm: false
        }, function() {
            $.ajax({
                dataType: "json",
                type: "get",
                url: "../controller/doAction.php?operation=quit",
                success: function (data) {
                    if (data.code == 200) {
                        emptyTheLocalStorage();
                        window.location.href = "index.html";

                    }
                },
                error: function (code, message, data) {
                    swal("发生错误：" + message);
                }
            });
        });

    });

})(jQuery);