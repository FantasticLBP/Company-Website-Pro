/**
 * Created by geek on 2017/8/29.
 */
(function () {

    var userid = isNotEmptyStr(getDataFromLocalStorage("Adminid")) ? new Base64().decode(getDataFromLocalStorage("Adminid")) : "";
    var username = isNotEmptyStr(getDataFromLocalStorage("Adminusername")) ? new Base64().decode(getDataFromLocalStorage("Adminusername")) : "";

    if (isNotEmptyStr(userid)) {
        $.ajax({
            dataType: "json",
            type: "get",
            url: "../controller/doAction.php?operation=login&username=" + username + "&userid=" + userid,
            success: function (data) {
                if (data.code == 200) {
                    var datas = data.data;
                    saveToLocalStorage("Adminid", new Base64().encode(datas.identifier));
                    saveToLocalStorage("Adminusername", new Base64().encode(datas.username));
                    saveToLocalStorage("AdminID", new Base64().encode(datas.id));
                    window.location.href = "main.php";
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



    $("#loginButton").click(function () {

        if ($("#loginUsername").val() == "") {
            swal("账号不能为空");
            return;
        }
        if ($("#loginPassword").val() == "") {
            swal("密码不能为空");
            return;
        }
        $.ajax({
            dataType: "json",
            type: "get",
            url: "../controller/doAction.php?operation=login&username=" + $("#loginUsername").val() + "&password=" + $("#loginPassword").val(),
            success: function (data) {
                if (data.code == 200) {
                    var datas = data.data;
                    saveToLocalStorage("Adminid", new Base64().encode(datas.identifier));
                    saveToLocalStorage("Adminusername", new Base64().encode(datas.username));
                    saveToLocalStorage("AdminID", new Base64().encode(datas.id));
                    window.location.href = "main.php";
                } else {
                    swal(data.message);
                }
            },
            error: function (code, message, data) {
                swal("发生错误：" + message);
            }
        });
    });


    $("#seekPassword").click(function () {

        if ($("#seekEmail").val() == "") {
            swal("不能为空");
            return;
        }

        $.ajax({
            dataType: "json",
            type: "get",
            url: "../controller/doAction.php?operation=seek&email=" + $("#seekEmail").val(),
            success: function (data) {
                if (data.code == 200) {
                    var datas = data.data;
                    swal("密码找回邮件发送成功");

                } else {
                    swal(data.message);
                }
            },
            error: function (code, message, data) {
                swal("发生错误：" + message);
            }
        });
    });



})(jQuery);


function show_box(id) {
    jQuery('.widget-box.visible').removeClass('visible');
    jQuery('#' + id).addClass('visible');
}