//解决IE8之下document不支持getElementsByClassName方法
if (!document.getElementsByClassName) {
    document.getElementsByClassName = function (className, element) {
        var children = (element || document).getElementsByTagName('*');
        var elements = new Array();
        for (var i = 0; i < children.length; i++) {
            var child = children[i];
            var classNames = child.className.split(' ');
            for (var j = 0; j < classNames.length; j++) {
                if (classNames[j] == className) {
                    elements.push(child);
                    break;
                }
            }
        }
        return elements;
    };
}

//切换应用类型单选按钮事件
function changeAppType(item) {
    var appType = item.value;
    if (appType == 1) {//测试应用
        $('#myself_type_desc').hide();
        $('#demo_type_desc').show();
        $('#sdkAppIdDiv').hide();
        $('#accountTypeDiv').hide();
    } else if (appType == 0) {//自建应用
        $('#demo_type_desc').hide();
        $('#myself_type_desc').show();
        $('#sdkAppIdDiv').show();
        $('#accountTypeDiv').show();
    }
}
//选择应用类型
function selectApp() {
    var appType = $('input[name="app_type_radio"]:checked').val();
    if (appType == 1) {//测试应用
        loginInfo.sdkAppID = loginInfo.appIDAt3rd = sdkAppID;
        loginInfo.accountType = accountType;
    } else if (appType == 0) {//自建应用
        if ($("#sdk_app_id").val().length == 0) {
            alert('请输入sdkAppId');
            return;
        }
        if (!validNumber($("#sdk_app_id").val())) {
            alert('sdkAppId非法,只能输入数字');
            return;
        }
        if ($("#account_type").val().length == 0) {
            alert('请输入accountType');
            return;
        }
        if (!validNumber($("#account_type").val())) {
            alert('accountType非法,只能输入数字');
            return;
        }
        loginInfo.sdkAppID = loginInfo.appIDAt3rd = $('#sdk_app_id').val();
        loginInfo.accountType = $('#account_type').val();
    }
    //将account_type保存到cookie中,有效期是1天
    webim.Tool.setCookie('accountType', loginInfo.accountType, 3600 * 24);
    $('#select_app_dialog').modal('hide');

    //调用tls登录服务
    tlsLogin();
}

//弹出登录框
function showLoginDialog() {
    $('#select_app_dialog').modal('hide');
    //显示登录窗体
    $('#login_dialog').modal('show');
    $("#login_account").focus();
}

//点击登录按钮(独立模式)
function independentModeLogin() {
    if ($("#login_account").val().length == 0) {
        alert('请输入帐号');
        return;
    }
    if ($("#login_pwd").val().length == 0) {
        alert('请输入UserSig');
        return;
    }
    loginInfo.identifier = $('#login_account').val();
    loginInfo.userSig = $('#login_pwd').val();
    $('#login_dialog').modal('hide');
    webimLogin();
}

//初始化demo
function initDemoApp() {
    $("body").css("background-color", '#2f2f2f');
    document.getElementById("webim_demo").style.display = "block";//展开聊天界面
    document.getElementById("p_my_face").src = loginInfo.headurl;
    if (loginInfo.identifierNick) {
        document.getElementById("t_my_name").innerHTML = loginInfo.identifierNick;
    } else {
        document.getElementById("t_my_name").innerHTML = loginInfo.identifier;
    }

    //菜单
    $("#t_my_menu").menu();

    //读取我的好友列表
    getAllFriend(getAllFriendsCallbackOK);
    //读取我的群组列表
    getJoinedGroupListHigh(getGroupsCallbackOK);
    $("#send_msg_text").focus();
    //初始化我的加群申请表格
    initGetApplyJoinGroupPendency([]);
    //初始化我的群组系统消息表格
    initGetMyGroupSystemMsgs([]);
    //初始化我的好友系统消息表格
    initGetMyFriendSystemMsgs([]);
    //初始化我的资料系统消息表格
    initGetMyProfileSystemMsgs([]);

}

//获取我的好友列表回调函数
function getAllFriendsCallbackOK() {
    selType == webim.SESSION_TYPE.C2C && webim.syncMsgs(onMsgNotify);
}

//获取我的群组列表回调函数
function getGroupsCallbackOK() {
    selType == webim.SESSION_TYPE.GROUP && getGroupInfo(selToID, function (resp) {
        //拉取最新消息
        var opts = {
            'GroupId': selToID,
            'ReqMsgSeq': resp.GroupInfo[0].NextMsgSeq - 1,
            'ReqMsgNumber': reqMsgCount
        };
        if (opts.ReqMsgSeq == null || opts.ReqMsgSeq == undefined) {
            alert('群消息序列号非法');
            return;
        }
        webim.syncGroupMsgs(opts, getHistoryMsgCallback);
    });
}
//判断str是否只包含数字
function validNumber(str) {
    if (!str) {
        str = str.toString();
        return str.match(/(^\d+$)/g);
    } else {
        return str;
    }
}