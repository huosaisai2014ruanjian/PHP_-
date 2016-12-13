<?php if (!defined('THINK_PATH')) exit();?><html>
    <head>
        <title>聊天</title>
        <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="/marketsai/Public/css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="/marketsai/Public/css/jquery-ui.css" />
        <link rel="stylesheet" type="text/css" href="/marketsai/Public/css/webim_demo.css" />
        <link rel="stylesheet" type="text/css" href="/marketsai/Public/css/bootstrap-table.css" />
        <style>
            .ui-menu { width: 150px; }
        </style>

    </head>
    <body>

        <div class="aio" id="webim_demo">
            <div class="titlebar">
                <img id="p_my_face" />
                <p id="t_my_name"></p>
                <ul id="t_my_menu">
                    <li>菜单
                        <ul>
                            <li>好友申请
                                <ul>
                                    <li id="getPendencyMenu" onclick="getPendency(false)">查看好友申请</li>
                                </ul>
                            </li>
                            <li>好友
                                <ul>
                                    <li id="searchProfileByUserIdMenu" onclick="searchProfileByUserIdClick()">搜索用户</li>
                                    <li id="getAllFriendMenu" onclick="getMyFriend()">我的好友</li>   
                                </ul>
                            </li>
                            <li>黑名单
                                <ul>
                                    <li id="getBlackListMenu" onclick="getBlackList()">我的黑名单</li>
                                </ul>
                            </li>
                            <li>群组申请
                                <ul>
                                    <li id="getApplyJoinGroupPendencyMenu" onclick="getApplyJoinGroupPendency()">查看加群申请</li>
                                </ul>
                            </li>
                            <li>群组
                                <ul>
                                    <li id="searchGroupMenu" onclick="searchGroupMenuClick()">搜索群组</li>
                                    <li id="createGroupMenu" onclick="createGroupMenuClick()">创建群组</li>
                                    <li id="getMyGroupMenu" onclick="getMyGroup()">我的群组</li>
                                </ul>
                            </li>
                            <li>系统消息
                                <ul>
                                    <li id="getMyGroupSystemsMenu" onclick="getMyGroupSystemMsgs()">我的群组系统消息</li>
                                    <li id="getMyFriendSystemsMenu" onclick="getMyFriendSystemMsgs()">我的好友系统消息</li>
                                    <li id="getMyProfileSystemsMenu" onclick="getMyProfileSystemMsgs()">我的资料系统消息</li>
                                </ul>
                            </li>
                            <li>设置
                                <ul>
                                    <li id="setProfilePortraitMenu" onclick="setProfilePortraitClick()">我的资料</li>
                                    <li id="quitMenu" onclick="quitClick()">退出</li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="sesspart">
                <div class="accordion" id="accordionContact">
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionContact" href="#collapseFriend">
                                我的好友
                            </a>
                        </div>
                        <div id="collapseFriend" class="accordion-body collapse">
                            <div class="sesslist">
                            </div>
                        </div>
                    </div>
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionContact" href="#collapseGroup">
                                我的群组
                            </a>
                        </div>
                        <div id="collapseGroup" class="accordion-body collapse">
                            <div class="sesslist-group">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="chatpart">
                <div class="msgflow">
                </div>
                
                <span id="msg_end" style="overflow:hidden"></span>
                <div class="editbar">                                
                    <a class="chat02_title_btn ctb01" onclick="showEmotionDialog()" title="选择表情"></a>
                    <a class="chat02_title_btn ctb03" title="选择图片" onclick="selectPicClick()" href="#"> </a>
                    <a class="chat02_title_btn ctb04" title="发送自定义消息" onclick="showEditCustomMsgDialog()" href="#"> </a>
                    <div id="wl_faces_box" class="wl_faces_box">
                        <div class="wl_faces_content">
                            <div class="title">
                                <ul>
                                    <li class="title_name">常用表情</li>
                                    <li class="wl_faces_close"><span
                                            onclick='turnoffFaces_box()'>&nbsp;</span></li>
                                </ul>
                            </div>
                            <div id="wl_faces_main" class="wl_faces_main">
                                <ul id="emotionUL">
                                </ul>
                            </div>
                        </div>
                        <div class="wlf_icon"></div>
                    </div>
                </div>
                <textarea class="msgedit" id="send_msg_text" onkeydown="onTextareaKeyDown()" cols="82" rows="5"></textarea>
                <div class="sendbar">
                    <button type="button" class="sendbtn" onclick="onSendMsg()">发送</button>
                    <button type="button" class="closebtn" onclick="onClose()">关闭</button>
                </div>
            </div>
            <div class="bottom"></div>
        </div>

        <div class="modal fade" id="search_profile_dialog" tabindex="-1" role="dialog" 
             aria-labelledby="search_profile_dialog_label" aria-hidden="true" data-backdrop="static">
            <div class="modal-dialog" >
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" 
                                aria-hidden="true">×
                        </button>
                        <h4 class="modal-title" id="search_profile_dialog_label">
                            搜索用户
                        </h4>
                    </div>
                    <div class="modal-body" >
                        <form class="form-inline" role="form"  id="sp_form" name="sp_form">
                            <div class="form-group">
                                <label class="sr-only" for="sp_to_account">帐号</label>
                                <input type="text" class="form-control" id="sp_to_account"
                                       placeholder="请输入用户ID" maxlength="50" onkeydown="if(event.keyCode==13)return false;">
                            </div>

                            <button type="button" class="btn btn-default" onclick="searchProfileByUserId()">搜索</button>
                        </form>
                        <table id="search_profile_table">
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" 
                                data-dismiss="modal">
                            关闭
                        </button> 
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <div class="modal fade" id="add_friend_dialog" tabindex="-1" role="dialog" 
             aria-labelledby="add_friend_dialog_label" aria-hidden="true" data-backdrop="static">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" 
                                aria-hidden="true">×
                        </button>
                        <h4 class="modal-title" id="add_friend_dialog_label">
                            申请加好友
                        </h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" role="form" >
                            <input type="hidden" id="af_allow_type" >
                            <div class="form-group">
                                <label for="af_to_account" class="col-sm-2 control-label">对方帐号</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="af_to_account"
                                           placeholder="请输入对方帐号" readonly="readonly">
                                </div>
                            </div> 

                            <div class="form-group">
                                <label for="af_add_wording" class="col-sm-2 control-label">附言</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="af_add_wording"
                                              rows="3" >你好，我想和你成为朋友~~</textarea>

                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" 
                                data-dismiss="modal">
                            关闭
                        </button>
                        <button type="button" class="btn btn-primary" onclick="applyAddFriend()">
                            提交
                        </button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <div class="modal fade" id="get_my_friend_dialog" tabindex="-1" role="dialog" 
             aria-labelledby="get_my_friend_dialog_label" aria-hidden="true" data-backdrop="static">
            <div class="modal-dialog-wide" >
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" 
                                aria-hidden="true">×
                        </button>
                        <h4 class="modal-title" id="get_my_friend_dialog_label">
                            我的好友
                        </h4>
                    </div>
                    <div class="modal-body" >
                        <table id="get_my_friend_table">
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" 
                                data-dismiss="modal">
                            关闭
                        </button>

                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <div class="modal fade" id="delete_friend_dialog" tabindex="-1" role="dialog" 
             aria-labelledby="delete_friend_dialog_label" aria-hidden="true" data-backdrop="static">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" 
                                aria-hidden="true">×
                        </button>
                        <h4 class="modal-title" id="delete_friend_dialog_label">
                            删除好友
                        </h4>
                    </div>
                    <div class="modal-body">

                        <form class="form-horizontal" role="form" onkeydown="if(event.keyCode==13)return false;">
                            <input type="hidden" id="df_sel_row_index" />
                            <div class="form-group">
                                <label for="df_to_account" class="col-sm-2 control-label">对方帐号</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="df_to_account" 
                                           placeholder="请输入对方帐号" readonly="readonly">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="df_type_radio" class="col-sm-2 control-label">操作</label>
                                <div class="col-sm-10">

                                    <label class="radio-inline">
                                        <input type="radio" name="df_type_radio" id="df_type_both_radio" 
                                               value="Delete_Type_Both" checked> 双向删除
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="df_type_radio" id="df_type_single_radio" 
                                               value="Delete_Type_Single"> 单向删除
                                    </label>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" 
                                data-dismiss="modal">
                            关闭
                        </button>
                        <button type="button" class="btn btn-primary" onclick="deleteFriend()">
                            提交
                        </button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <div class="modal fade" id="get_black_list_dialog" tabindex="-1" role="dialog" 
             aria-labelledby="get_black_list_dialog_label" aria-hidden="true" data-backdrop="static">
            <div class="modal-dialog-wide" >
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" 
                                aria-hidden="true">×
                        </button>
                        <h4 class="modal-title" id="get_black_list_dialog_label">
                            我的黑名单
                        </h4>
                    </div>
                    <div class="modal-body" >
                        <table id="get_black_list_table">
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" 
                                data-dismiss="modal">
                            关闭
                        </button>

                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <div class="modal fade" id="set_profile_portrait_dialog" tabindex="-1" role="dialog" 
             aria-labelledby="set_profile_portrait_label" aria-hidden="true" data-backdrop="static">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" 
                                aria-hidden="true">×
                        </button>
                        <h4 class="modal-title" id="set_profile_portrait_label">
                            设置个人资料
                        </h4>
                    </div>
                    <div class="modal-body">

                        <form class="form-horizontal" role="form" onkeydown="if(event.keyCode==13)return false;" id="spp_form" name="spp_form">
                            <div class="form-group">
                                <label for="spp_nick" class="col-sm-2 control-label">昵称</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="spp_nick" 
                                           placeholder="请输入昵称" maxlength="20">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="spp_gender_radio" class="col-sm-2 control-label">性别</label>
                                <div class="col-sm-10">

                                    <label class="radio-inline">
                                        <input type="radio" name="spp_gender_radio" id="spp_gender_male_radio" 
                                               value="Gender_Type_Male"> 男
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="spp_gender_radio" id="spp_gender_female_radio" 
                                               value="Gender_Type_Female"> 女
                                    </label>

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="spp_allow_type_radio" class="col-sm-2 control-label">加好友设置</label>
                                <div class="col-sm-10">

                                    <label class="radio-inline">
                                        <input type="radio" name="spp_allow_type_radio" id="spp_allow_type_need_confirm_radio" 
                                               value="AllowType_Type_NeedConfirm" > 需要确认
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="spp_allow_type_radio" id="spp_allow_type_allow_any_radio" 
                                               value="AllowType_Type_AllowAny"> 允许任何人
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="spp_allow_type_radio" id="spp_allow_type_deny_any_radio" 
                                               value="AllowType_Type_DenyAny"> 拒绝任何人
                                    </label>

                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" 
                                 data-dismiss="modal" >
                            关闭
                        </button>
                        <button type="button" class="btn btn-primary" onclick="setProfilePortrait()">
                            提交
                        </button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <div class="modal fade" id="get_pendency_dialog" tabindex="-1" role="dialog" 
             aria-labelledby="get_pendency_dialog_label" aria-hidden="true" data-backdrop="static">
            <div class="modal-dialog-wide" >
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" 
                                aria-hidden="true">×
                        </button>
                        <h4 class="modal-title" id="get_pendency_dialog_label">
                            我的好友申请
                        </h4>
                    </div>
                    <div class="modal-body" >
                        <table id="get_pendency_table">
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" 
                                data-dismiss="modal">
                            关闭
                        </button>

                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <!-- 模态框（Modal） -->
        <div class="modal fade" id="response_friend_dialog" tabindex="-1" role="dialog" 
             aria-labelledby="response_friend_dialog_label" aria-hidden="true" data-backdrop="static">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" 
                                aria-hidden="true">×
                        </button>
                        <h4 class="modal-title" id="response_friend_dialog_label">
                            处理好友申请
                        </h4>
                    </div>
                    <div class="modal-body">

                        <form class="form-horizontal" role="form" onkeydown="if(event.keyCode==13)return false;">
                            <div class="form-group">
                                <label for="rf_to_account" class="col-sm-2 control-label">对方帐号</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="rf_to_account" 
                                           placeholder="请输入对方帐号" readonly="readonly">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="rf_action_radio" class="col-sm-2 control-label">操作</label>
                                <div class="col-sm-10">

                                    <label class="radio-inline">
                                        <input type="radio" name="rf_action_radio" id="rf_action_agree_and_add_radio" 
                                               value="Response_Action_AgreeAndAdd" checked> 同意并添加对方为好友
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="rf_action_radio" id="rf_action_agree_radio" 
                                               value="Response_Action_Agree"> 同意
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="rf_action_radio" id="rf_action_reject_radio" 
                                               value="Response_Action_Reject"> 拒绝
                                    </label>

                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" 
                                data-dismiss="modal">
                            关闭
                        </button>
                        <button type="button" class="btn btn-primary" onclick="responseFriend()">
                            提交
                        </button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <div class="modal fade" id="create_group_dialog" tabindex="-1" role="dialog" 
             aria-labelledby="create_group_dialog_label" aria-hidden="true" data-backdrop="static">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" 
                                aria-hidden="true">×
                        </button>
                        <h4 class="modal-title" id="create_group_dialog_label">
                            创建一个群
                        </h4>
                    </div>
                    <div class="modal-body">
                                
                        <form class="form-horizontal" role="form"  id="cg_form" name="cg_form">
                            <div class="form-group">
                                <label  class="col-sm-2 control-label">已选好友</label>
                                <div class="col-sm-8">
                                    <!--<input type="text" class="form-control" id="select_friends" value=""
                                           placeholder="已选好友列表" readonly="readonly">-->
                                    <textarea class="form-control" id="select_friends"
                                              rows="3" readonly="readonly"></textarea>
                                </div>
                                <div class="col-sm-2">
                                    <button type="button" class="btn btn-primary" onclick="selectMyFriendGroup()">
                                        选择(选填)
                                        </button>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="cg_id" class="col-sm-2 control-label">自定义ID</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="cg_id" value=""
                                           placeholder="请输入自定义群ID" maxlength="30" onkeydown="if(event.keyCode==13)return false;">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="cg_type_radio" class="col-sm-2 control-label">类型</label>
                                <div class="col-sm-10">

                                    <label class="radio-inline">
                                        <input type="radio" name="cg_type_radio" id="cg_type_chat_room_radio" 
                                               value="ChatRoom" checked> 聊天室
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="cg_type_radio" id="cg_type_public_radio" 
                                               value="Public"> 公开群
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="cg_type_radio" id="cg_type_private_radio" 
                                               value="Private"> 讨论组
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="cg_type_radio" id="cg_type_private_radio" 
                                               value="AVChatRoom"> 直播聊天室
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="cg_ajp_type_radio" class="col-sm-2 control-label">加群方式</label>
                                <div class="col-sm-10">

                                    <label class="radio-inline">
                                        <input type="radio" name="cg_ajp_type_radio" id="cg_ajp_type_fa_radio" 
                                               value="FreeAccess" checked> 自由加入
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="cg_ajp_type_radio" id="cg_ajp_type_np_radio" 
                                               value="NeedPermission" checked> 需要验证
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="cg_ajp_type_radio" id="cg_ajp_type_da_radio" 
                                               value="DisableApply"> 禁止加群
                                    </label>
                                    
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="cg_name" class="col-sm-2 control-label">名称</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="cg_name" value=""
                                           placeholder="请输入群名称" maxlength="30" onkeydown="if(event.keyCode==13)return false;">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="cg_notification" class="col-sm-2 control-label">公告</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="cg_notification"
                                              rows="3" ></textarea>

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="cg_introduction" class="col-sm-2 control-label">简介</label>
                                <div class="col-sm-10">

                                    <textarea class="form-control" id="cg_introduction"
                                              rows="3" ></textarea>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" 
                                data-dismiss="modal">
                            关闭
                        </button>
                        <button type="button" class="btn btn-primary" onclick="createGroup()">
                            提交
                        </button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->    
        
        <div class="modal fade" id="select_my_friend_group_dialog" tabindex="-1" role="dialog" 
             aria-labelledby="select_my_friend_group_dialog_label" aria-hidden="true" data-backdrop="static">
            <div class="modal-dialog-wide" >
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" 
                                aria-hidden="true">×
                        </button>
                        <h4 class="modal-title" id="select_my_friend_group_dialog_label">
                            选择好友建群
                        </h4>
                    </div>
                    <div class="modal-body" >
                        <table id="select_my_friend_group_table">
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" 
                                data-dismiss="modal">
                            关闭
                        </button>

                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <div class="modal fade" id="search_group_dialog" tabindex="-1" role="dialog" 
             aria-labelledby="search_group_dialog_label" aria-hidden="true" data-backdrop="static">
            <div class="modal-dialog-full" >
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" 
                                aria-hidden="true">×
                        </button>
                        <h4 class="modal-title" id="search_group_dialog_label">
                            搜索群
                        </h4>
                    </div>
                    <div class="modal-body" >
                        <form class="form-inline" role="form"  id="sg_form" name="sg_form">
                            <div class="form-group">
                                <label class="sr-only" for="sg_group_id">群ID</label>
                                <input type="text" class="form-control" id="sg_group_id" value=""
                                       placeholder="请输入群ID" maxlength="20" onkeydown="if(event.keyCode==13)return false;">
                            </div>

                            <button type="button" class="btn btn-default" onclick="getGroupPublicInfo()">搜索</button>
                        </form>
                        <table id="search_group_table">
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" 
                                data-dismiss="modal">
                            关闭
                        </button> 
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <div class="modal fade" id="apply_join_group_dialog" tabindex="-1" role="dialog" 
             aria-labelledby="apply_join_group_dialog_label" aria-hidden="true" data-backdrop="static">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" 
                                aria-hidden="true">×
                        </button>
                        <h4 class="modal-title" id="apply_join_group_dialog_label">
                            申请加群
                        </h4>
                    </div>
                    <div class="modal-body">

                        <form class="form-horizontal" role="form"  id="ajg_form" name="ajg_form">
                            <input type="hidden"  id="ajg_group_id">
                            <input type="hidden"  id="ajg_group_type">

                            <div class="form-group">
                                <label for="ajg_group_name" class="col-sm-2 control-label">群名称</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="ajg_group_name" 
                                           placeholder="" readonly="readonly">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="ajg_apply_msg" class="col-sm-2 control-label">附言</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="ajg_apply_msg" value="你好，我想加入贵群~"
                                           placeholder="请输入附言" maxlength="50">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" 
                                data-dismiss="modal">
                            关闭
                        </button>
                        <button type="button" class="btn btn-primary" onclick="applyJoinGroup()">
                            提交
                        </button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <div class="modal fade" id="get_my_group_dialog" tabindex="-1" role="dialog" 
             aria-labelledby="get_my_group_dialog_label" aria-hidden="true" data-backdrop="static">
            <div class="modal-dialog-wide" >
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" 
                                aria-hidden="true">×
                        </button>
                        <h4 class="modal-title" id="get_my_group_dialog_label">
                            我的群组
                        </h4>
                    </div>
                    <div class="modal-body" >
                        <table id="get_my_group_table">
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" 
                                data-dismiss="modal">
                            关闭
                        </button>

                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <div class="modal fade" id="modify_group_msg_flag_dialog" tabindex="-1" role="dialog" 
             aria-labelledby="modify_group_msg_flag_dialog_label" aria-hidden="true" data-backdrop="static">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" 
                                aria-hidden="true">×
                        </button>
                        <h4 class="modal-title" id="modify_group_msg_flag_dialog_label">
                            修改群消息提示
                        </h4>
                    </div>
                    <div class="modal-body">

                        <form class="form-horizontal" role="form" onkeydown="if(event.keyCode==13)return false;" id="mgmf_form" name="mgmf_form">
                            <input type="hidden" id="mgmf_sel_row_index"/>
                            <input type="hidden" id="mgmf_group_id"/>

                            <div class="form-group">
                                <label for="mgmf_msg_flag_radio" class="col-sm-2 control-label">群消息提示类型</label>
                                <div class="col-sm-10">

                                    <label class="radio-inline">
                                        <input type="radio" name="mgmf_msg_flag_radio" id="mgmf_mf_aan_radio" 
                                               value="AcceptAndNotify"> 接收并提示
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="mgmf_msg_flag_radio" id="mgmf_mf_ann_radio" 
                                               value="AcceptNotNotify"> 接收不提示
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="mgmf_msg_flag_radio" id="mgmf_mf_d_radio" 
                                               value="Discard"> 屏蔽
                                    </label>

                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" 
                                data-dismiss="modal">
                            关闭
                        </button>
                        <button type="button" class="btn btn-primary" onclick="modifyGroupMsgFlag()">
                            提交
                        </button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <div class="modal fade" id="get_group_member_dialog" tabindex="-1" role="dialog" 
             aria-labelledby="get_group_member_dialog_label" aria-hidden="true" data-backdrop="static">
            <div class="modal-dialog-wide" >
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" 
                                aria-hidden="true">×
                        </button>
                        <h4 class="modal-title" id="get_group_member_dialog_label">
                            群组成员
                        </h4>
                    </div>
                    <div class="modal-body" >
                        <input type="hidden" id="ggm_group_id"/>
                        <input type="hidden" id="ggm_my_role"/>
                        <input type="hidden" id="ggm_group_type"/>
                        <table id="get_group_member_table">
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" 
                                data-dismiss="modal">
                            关闭
                        </button>

                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <div class="modal fade" id="modify_group_member_dialog" tabindex="-1" role="dialog" 
             aria-labelledby="modify_group_member_dialog_label" aria-hidden="true" data-backdrop="static">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" 
                                aria-hidden="true">×
                        </button>
                        <h4 class="modal-title" id="modify_group_member_dialog_label">
                            修改群成员角色
                        </h4>
                    </div>
                    <div class="modal-body">

                        <form class="form-horizontal" role="form" onkeydown="if(event.keyCode==13)return false;" id="mgm_form" name="mgm_form">
                            <input type="hidden" id="mgm_sel_row_index"/>
                            <input type="hidden" id="mgm_group_id"/>
                            <div class="form-group">
                                <label for="mgm_account" class="col-sm-2 control-label">成员帐号</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="mgm_account" 
                                           placeholder="请输入要修改的成员帐号" readonly="readonly">
                                </div>
                            </div>
                            <div class="form-group" id="mgm_role_div">
                                <label for="mgm_role_radio" class="col-sm-2 control-label">群角色</label>
                                <div class="col-sm-10">

                                    <label class="radio-inline">
                                        <input type="radio" name="mgm_role_radio" id="mgm_role_admin_radio" 
                                               value="Admin" > 管理员
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="mgm_role_radio" id="mgm_role_member_radio" 
                                               value="Member"> 成员
                                    </label>

                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" 
                                data-dismiss="modal">
                            关闭
                        </button>
                        <button type="button" class="btn btn-primary" onclick="modifyGroupMemberRole()">
                            提交
                        </button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <div class="modal fade" id="delete_group_member_dialog" tabindex="-1" role="dialog" 
             aria-labelledby="delete_group_member_dialog_label" aria-hidden="true" data-backdrop="static">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" 
                                aria-hidden="true">×
                        </button>
                        <h4 class="modal-title" id="delete_group_member_dialog_label">
                            删除群成员
                        </h4>
                    </div>
                    <div class="modal-body">

                        <form class="form-horizontal" role="form" onkeydown="if(event.keyCode==13)return false;">
                            <input type="hidden" id="dgm_group_id"/>
                            <div class="form-group">
                                <label for="dgm_account" class="col-sm-2 control-label">成员帐号</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="dgm_account" 
                                           placeholder="请输入要删除成员帐号" readonly="readonly">
                                </div>
                            </div>
                            <!--<div class="form-group">
                                <label for="dgm_silence_radio" class="col-sm-2 control-label">是否静默删除</label>
                                <div class="col-sm-10">

                                    <label class="radio-inline">
                                        <input type="radio" name="dgm_silence_radio" id="dgm_silence_yes_radio" 
                                               value="1" checked> 是
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="dgm_silence_radio" id="dgm_silence_no_radio" 
                                               value="0"> 否
                                    </label>

                                </div>
                            </div>-->

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" 
                                data-dismiss="modal">
                            关闭
                        </button>
                        <button type="button" class="btn btn-primary" onclick="deleteGroupMember()">
                            提交
                        </button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <div class="modal fade" id="modify_group_dialog" tabindex="-1" role="dialog" 
             aria-labelledby="modify_group_dialog_label" aria-hidden="true" data-backdrop="static">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" 
                                aria-hidden="true">×
                        </button>
                        <h4 class="modal-title" id="modify_group_dialog_label">
                            修改群基本资料
                        </h4>
                    </div>
                    <div class="modal-body">

                        <form class="form-horizontal" role="form"  id="mg_form" name="mg_form">
                            <input type="hidden" id="mg_sel_row_index"/>
                            <input type="hidden" id="mg_group_id"/>
                            <div class="form-group">
                                <label for="mg_name" class="col-sm-2 control-label">名称</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="mg_name"
                                           placeholder="请输入群名称" maxlength="30" onkeydown="if(event.keyCode==13)return false;">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="mg_notification" class="col-sm-2 control-label">公告</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="mg_notification"
                                              rows="3" ></textarea>

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="mg_introduction" class="col-sm-2 control-label">简介</label>
                                <div class="col-sm-10">

                                    <textarea class="form-control" id="mg_introduction"
                                              rows="3" ></textarea>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" 
                                data-dismiss="modal">
                            关闭
                        </button>
                        <button type="button" class="btn btn-primary" onclick="modifyGroup()">
                            提交
                        </button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <div class="modal fade" id="get_my_friend_group_dialog" tabindex="-1" role="dialog" 
             aria-labelledby="get_my_friend_group_dialog_label" aria-hidden="true" data-backdrop="static">
            <div class="modal-dialog-wide" >
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" 
                                aria-hidden="true">×
                        </button>
                        <h4 class="modal-title" id="get_my_friend_group_dialog_label">
                            我的好友
                        </h4>
                    </div>
                    <div class="modal-body" >
                        <input type="hidden" id="gmfg_group_id"/>
                        <table id="get_my_friend_group_table">
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" 
                                data-dismiss="modal">
                            关闭
                        </button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <div class="modal fade" id="add_group_member_dialog" tabindex="-1" role="dialog" 
             aria-labelledby="add_group_member_dialog_label" aria-hidden="true" data-backdrop="static">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" 
                                aria-hidden="true">×
                        </button>
                        <h4 class="modal-title" id="add_group_member_dialog_label">
                            邀请群成员
                        </h4>
                    </div>
                    <div class="modal-body">

                        <form class="form-horizontal" role="form" onkeydown="if(event.keyCode==13)return false;">
                            <input type="hidden" id="agm_group_id"/>
                            <div class="form-group">
                                <label for="agm_account" class="col-sm-2 control-label">成员帐号</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="agm_account" 
                                           placeholder="请输入要邀请成员帐号" readonly="readonly">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" 
                                data-dismiss="modal">
                            关闭
                        </button>
                        <button type="button" class="btn btn-primary" onclick="addGroupMember()">
                            提交
                        </button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <div class="modal fade" id="forbid_send_msg_dialog" tabindex="-1" role="dialog" 
             aria-labelledby="forbid_send_msg_dialog_label" aria-hidden="true" data-backdrop="static">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" 
                                aria-hidden="true">×
                        </button>
                        <h4 class="modal-title" id="forbid_send_msg_dialog_label">
                            设置成员禁言时间
                        </h4>
                    </div>
                    <div class="modal-body">

                        <form class="form-horizontal" role="form"  id="fsm_form" name="fsm_form">
                            <input type="hidden" id="fsm_sel_row_index"/>
                            <input type="hidden" id="fsm_group_id"/>
                            <div class="form-group">
                                <label for="fsm_account" class="col-sm-2 control-label">成员帐号</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="fsm_account" 
                                           placeholder="请输入要修改的成员帐号" readonly="readonly">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="fsm_shut_up_time" class="col-sm-2 control-label">禁言时间(s)</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="fsm_shut_up_time" 
                                           placeholder="请输入禁言时间" maxlength="8" onkeydown="if(event.keyCode==13)return false;">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" 
                                data-dismiss="modal">
                            关闭
                        </button>
                        <button type="button" class="btn btn-primary" onclick="forbidSendMsg()">
                            提交
                        </button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        
        <div class="modal" id="select_app_dialog" tabindex="-1" role="dialog" 
             aria-labelledby="select_app_dialog_label" aria-hidden="true" data-backdrop="static" >
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">

                        <h4 class="modal-title" id="select_app_dialog_label">
                            腾讯开放IM Web Demo(V1.6)
                        </h4>
                    </div>
                    <div class="modal-body">

                        <form class="form-horizontal" role="form" onkeydown="if(event.keyCode==13)return false;">
                            <div class="form-group">
                                <label class="col-sm-2 control-label"></label>
                                <div class="col-sm-5">

                                    <label class="radio-inline">
                                        <input type="radio" name="app_type_radio" id="at_demo_radio" 
                                               value="1" onclick="changeAppType(this)" checked>测试应用
                                    </label>

                                </div>
                                <div class="col-sm-5">
                                    <label class="radio-inline">
                                        <input type="radio" name="app_type_radio" id="at_myself_radio" 
                                               value="0" onclick="changeAppType(this)"> 自建应用
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label"></label>
                                <div class="col-sm-9">
                                    <label id="demo_type_desc">无需注册腾讯云帐号直接使用，适合只需快速体验开放IM的用户</label>
                                    <label id="myself_type_desc">需注册腾讯云官帐号，并创建应用获取SdkAppId和AccountType，适合需在Demo基础上进行修改调试的用户。<a href="http://console.qcloud.com/avc/" id="qcloudLink"  target="_blank">现在创建>></a></label>
                                </div>
                            </div>
                            <div class="form-group" id="sdkAppIdDiv">
                                <label class="col-sm-2 control-label"></label>
                                <label for="sdk_app_id" class="col-sm-2 control-label">SdkAppId:</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="sdk_app_id" 
                                           placeholder="请输入SdkAppId" value="">
                                </div>
                            </div>
                            <div class="form-group" id="accountTypeDiv">
                                <label class="col-sm-2 control-label"></label>
                                <label for="account_type" class="col-sm-2 control-label">AccountType:</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="account_type" 
                                           placeholder="请输入AccountType" value="">
                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" onclick="selectApp()">
                            确认
                        </button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        
        <div class="modal fade" id="login_dialog" tabindex="-1" role="dialog" 
             aria-labelledby="login_dialog_label" aria-hidden="true" data-backdrop="static">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" 
                                aria-hidden="true">×
                        </button>
                        <h4 class="modal-title" id="login_dialog_label">
                            登录
                        </h4>
                    </div>
                    <div class="modal-body">

                        <form class="form-horizontal" role="form" onkeydown="if(event.keyCode==13)return false;">
                            <div class="form-group">
                                <label for="login_account" class="col-sm-2 control-label">identifier</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="login_account" value=""
                                           placeholder="请输入identifier" maxlength="100" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="login_pwd" class="col-sm-2 control-label">UserSig</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="login_pwd" value=""
                                           placeholder="请输入UserSig">
                                </div>
                            </div>


                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" 
                                data-dismiss="modal">
                            关闭
                        </button>
                        <button type="button" class="btn btn-primary" onclick="independentModeLogin()">
                            确定
                        </button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        
        
        <div class="modal fade" id="upload_pic_low_ie_dialog" tabindex="-1" role="dialog" 
             aria-labelledby="upload_pic_low_ie_dialog_label" aria-hidden="true" data-backdrop="static">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" 
                                aria-hidden="true">×
                        </button>
                        <h4 class="modal-title" id="upload_pic_low_ie_dialog_label">
                            发送图片
                        </h4>
                    </div>
                    <div class="modal-body">
                        <form id="updli_form" enctype="multipart/form-data" class="form-horizontal" role="form" onkeydown="if(event.keyCode==13)return false;" >
                            
                            <div class="form-group">
                                <label for="File" class="col-sm-2 control-label">选择</label>
                                <div class="col-sm-10">
                                    <input type="file" id="updli_file" />
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" 
                                data-dismiss="modal">
                            关闭
                        </button>
                        <button type="button" class="btn btn-primary" onclick="uploadPicLowIE()">
                            发送
                        </button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        

        <div class="modal fade" id="upload_pic_dialog" tabindex="-1" role="dialog" 
             aria-labelledby="upload_pic_dialog_label" aria-hidden="true" data-backdrop="static">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" 
                                aria-hidden="true">×
                        </button>
                        <h4 class="modal-title" id="upload_pic_dialog_label">
                            发送图片
                        </h4>
                    </div>
                    <div class="modal-body">

                        <form class="form-horizontal" role="form" onkeydown="if(event.keyCode==13)return false;" id="upd_form" name="upd_form">
                            <div class="form-group">
                                <label for="File" class="col-sm-2 control-label">选择</label>
                                <div class="col-sm-10">
                                    <input type="file" id="upd_pic" onchange="fileOnChange(this)" />
                                    <!--<input type="button" value="停止" id="upd_abort" />-->
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="File" class="col-sm-2 control-label">预览</label>
                                <div class="col-sm-10">
                                    <div id="previewPicDiv"></div>  
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="upd_progress" class="col-sm-2 control-label">进度</label>
                                <div class="col-sm-10">
                                    
                                     <progress id="upd_progress" value="0" max="100"></progress>
                                    <!--<input type="text" id="upd_progress" value="0" name="upd_progress" />-->
                                </div>
                            </div>
                            
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" 
                                data-dismiss="modal">
                            关闭
                        </button>
                        <button type="button" class="btn btn-primary" onclick="uploadPic()">
                            发送
                        </button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        
        
        
        <div class="modal fade" id="click_pic_dialog" tabindex="-1" role="dialog" 
             aria-labelledby="click_pic_dialog_label" aria-hidden="true" data-backdrop="static">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" 
                                aria-hidden="true">×
                        </button>
                        <h4 class="modal-title" id="click_pic_dialog_label">
                            查看图片
                        </h4>
                    </div>
                    <div class="modal-body">

                        <form class="form-horizontal" role="form" >
                            
                            <div class="form-group">
                                
                                <div class="col-sm-12">
                                    <div id="bigPicDiv"></div>  
                                </div>
                            </div>
                            
                            
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" 
                                data-dismiss="modal">
                            关闭
                        </button>
                        <!--<button type="button" class="btn btn-primary" id="viewOriPicBt">
                            查看原图
                        </button>-->
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        
        <div class="modal fade" id="get_apply_join_group_pendency_dialog" tabindex="-1" role="dialog" 
             aria-labelledby="get_apply_join_group_pendency_dialog_label" aria-hidden="true" data-backdrop="static">
            <div class="modal-dialog-wide" >
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" 
                                aria-hidden="true">×
                        </button>
                        <h4 class="modal-title" id="get_apply_join_group_pendency_dialog_label">
                            我的加群申请
                        </h4>
                    </div>
                    <div class="modal-body" >
                        <table id="get_apply_join_group_pendency_table">
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" 
                                data-dismiss="modal">
                            关闭
                        </button>

                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        
        <!-- 模态框（Modal） -->
        <div class="modal fade" id="handle_ajg_dialog" tabindex="-1" role="dialog" 
             aria-labelledby="handle_ajg_dialog_label" aria-hidden="true" data-backdrop="static">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" 
                                aria-hidden="true">×
                        </button>
                        <h4 class="modal-title" id="handle_ajg_dialog_label">
                            处理加群申请
                        </h4>
                    </div>
                    <div class="modal-body">

                        <form class="form-horizontal" role="form" onkeydown="if(event.keyCode==13)return false;">
                            <input type="hidden"  id="hajg_authentication">
                            <input type="hidden"  id="hajg_msg_key">
                            <input type="hidden"  id="hajg_user_defined_field">
                            
                            <input type="hidden"  id="hajg_from_account">
                            <input type="hidden"  id="hajg_msg_seq">
                            <input type="hidden"  id="hajg_msg_random">
                            <div class="form-group">
                                <label for="hajg_group_id" class="col-sm-2 control-label">群ID</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="hajg_group_id" 
                                           placeholder="" readonly="readonly">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="hajg_to_account" class="col-sm-2 control-label">对方帐号</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="hajg_to_account" 
                                           placeholder="" readonly="readonly">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="hajg_action_radio" class="col-sm-2 control-label">操作</label>
                                <div class="col-sm-10">
                                    <label class="radio-inline">
                                        <input type="radio" name="hajg_action_radio" id="hajg_action_agree_radio" 
                                               value="Agree" checked> 同意
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="hajg_action_radio" id="hajg_action_reject_radio" 
                                               value="Reject"> 拒绝
                                    </label>

                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="hajg_approval_msg" class="col-sm-2 control-label">附言</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="hajg_approval_msg"
                                              rows="3" ></textarea>

                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" 
                                data-dismiss="modal">
                            关闭
                        </button>
                        <button type="button" class="btn btn-primary" onclick="handleApplyJoinGroupPendency()">
                            提交
                        </button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        
        <div class="modal fade" id="get_my_group_system_msgs_dialog" tabindex="-1" role="dialog" 
             aria-labelledby="get_my_group_system_msgs_dialog_label" aria-hidden="true" data-backdrop="static">
            <div class="modal-dialog-wide" >
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" 
                                aria-hidden="true">×
                        </button>
                        <h4 class="modal-title" id="get_my_group_system_msgs_dialog_label">
                            我的群组系统消息
                        </h4>
                    </div>
                    <div class="modal-body" >
                        <table id="get_my_group_system_msgs_table">
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" 
                                data-dismiss="modal">
                            关闭
                        </button>

                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        
        <div class="modal fade" id="edit_custom_msg_dialog" tabindex="-1" role="dialog" 
             aria-labelledby="edit_custom_msg_label" aria-hidden="true" data-backdrop="static">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" 
                                aria-hidden="true">×
                        </button>
                        <h4 class="modal-title" id="edit_custom_msg_label">
                            发送自定义消息
                        </h4>
                    </div>
                    <div class="modal-body">

                        <form class="form-horizontal" role="form" onkeydown="if(event.keyCode==13)return false;" id="ecm_form" name="ecm_form">
                            <div class="form-group">
                                <label for="ecm_data" class="col-sm-2 control-label">数据</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="ecm_data"
                                              rows="3" ></textarea>

                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="ecm_desc" class="col-sm-2 control-label">描述</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="ecm_desc" 
                                           placeholder="请输入描述" maxlength="50">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="ecm_ext" class="col-sm-2 control-label">扩展</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="ecm_ext" 
                                           placeholder="请输入扩展" maxlength="50">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" 
                                 data-dismiss="modal" >
                            关闭
                        </button>
                        <button type="button" class="btn btn-primary" onclick="sendCustomMsg()">
                            提交
                        </button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        
        <div class="modal fade" id="send_group_system_msg_dialog" tabindex="-1" role="dialog" 
             aria-labelledby="send_group_system_msg_dialog_label" aria-hidden="true" data-backdrop="static">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" 
                                aria-hidden="true">×
                        </button>
                        <h4 class="modal-title" id="send_group_system_msg_dialog_label">
                            发送自定义群系统通知
                        </h4>
                    </div>
                    <div class="modal-body">

                        <form class="form-horizontal" role="form"  id="sgsm_form" name="sgsm_form">
                            
                            <input type="hidden" id="sgsm_group_id"/>
                            
                            <div class="form-group">
                                <label for="sgsm_content" class="col-sm-2 control-label">内容</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="sgsm_content"
                                              rows="3" ></textarea>

                                </div>
                            </div>
                
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" 
                                data-dismiss="modal">
                            关闭
                        </button>
                        <button type="button" class="btn btn-primary" onclick="sendCustomGroupNotify()">
                            提交
                        </button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        
        <div class="modal fade" id="get_my_friend_system_msgs_dialog" tabindex="-1" role="dialog" 
             aria-labelledby="get_my_friend_system_msgs_dialog_label" aria-hidden="true" data-backdrop="static">
            <div class="modal-dialog-wide" >
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" 
                                aria-hidden="true">×
                        </button>
                        <h4 class="modal-title" id="get_my_friend_system_msgs_dialog_label">
                            我的好友系统通知
                        </h4>
                    </div>
                    <div class="modal-body" >
                        <table id="get_my_friend_system_msgs_table">
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" 
                                data-dismiss="modal">
                            关闭
                        </button>

                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        
        <div class="modal fade" id="get_my_profile_system_msgs_dialog" tabindex="-1" role="dialog" 
             aria-labelledby="get_my_friend_profile_msgs_dialog_label" aria-hidden="true" data-backdrop="static">
            <div class="modal-dialog-wide" >
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" 
                                aria-hidden="true">×
                        </button>
                        <h4 class="modal-title" id="get_my_friend_profile_msgs_dialog_label">
                            我的资料系统通知
                        </h4>
                    </div>
                    <div class="modal-body" >
                        <table id="get_my_profile_system_msgs_table">
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" 
                                data-dismiss="modal">
                            关闭
                        </button>

                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        
        <script type="text/javascript" src="/marketsai/Public/js/lib/jquery/jquery.js"></script>
        <script type="text/javascript" src="/marketsai/Public/js/lib/jquery/jquery-ui.js"></script>
        <script type="text/javascript" src="/marketsai/Public/js/lib/bootstrap/bootstrap.js"></script>
        <script type="text/javascript" src="/marketsai/Public/js/lib/bootstrap/bootstrap-table.js"></script>
        <script type="text/javascript" src="/marketsai/Public/js/lib/bootstrap/bootstrap-collapse.js"></script>
        <!--TLS web sdk(只用于托管模式，独立模式不用引入)-->
        <script type="text/javascript" src="https://tls.qcloud.com/libs/api.min.js"></script>
        <!--用于获取文件MD5 js api(发送图片时用到)-->
        <script type="text/javascript" src="/marketsai/Public/js/lib/md5/spark-md5.js"></script>
        
        <!--web im sdk-->
        <script type="text/javascript" src="/marketsai/Public/sdk/webim.js"></script>
        <script type="text/javascript" src="/marketsai/Public/sdk/json2.js"></script>
        
        <!--web im sdk 登录 示例代码-->
        <script type="text/javascript" src="/marketsai/Public/js/login/login.js"></script>
        <!--web im sdk 登出 示例代码-->
        <script type="text/javascript" src="/marketsai/Public/js/logout/logout.js"></script>
        <!--web im 解析一条消息 示例代码-->
        <script type="text/javascript" src="/marketsai/Public/js/common/show_one_msg.js"></script>
        <!--web im demo 基本逻辑-->
        <script type="text/javascript" src="/marketsai/Public/js/base.js"></script>
        <!--web im sdk 资料管理 api 示例代码-->
        <script type="text/javascript" src="/marketsai/Public/js/profile/profile_manager.js"></script>
        <!--web im sdk 好友管理 api 示例代码-->
        <script type="text/javascript" src="/marketsai/Public/js/friend/friend_manager.js"></script>
        <!--web im sdk 好友申请管理 api 示例代码-->
        <script type="text/javascript" src="/marketsai/Public/js/friend/friend_pendency_manager.js"></script>
        <!--web im sdk 好友黑名单管理 api 示例代码-->
        <script type="text/javascript" src="/marketsai/Public/js/friend/friend_black_list_manager.js"></script>
        <!--web im sdk 群组管理 api 示例代码-->
        <script type="text/javascript" src="/marketsai/Public/js/group/group_manager.js"></script>
        <!--web im sdk 群成员管理 api 示例代码-->
        <script type="text/javascript" src="/marketsai/Public/js/group/group_member_manager.js"></script>
        <!--web im sdk 加群申请管理 api 示例代码-->
        <script type="text/javascript" src="/marketsai/Public/js/group/group_pendency_manager.js"></script>
        <!--web im 切换聊天好友或群组 示例代码-->
        <script type="text/javascript" src="/marketsai/Public/js/switch_chat_obj.js"></script>
        <!--web im sdk 获取c2c获取群组历史消息 示例代码-->
        <script type="text/javascript" src="/marketsai/Public/js/msg/get_history_msg.js"></script>
        <!--web im sdk 发送普通消息(文本和表情) api 示例代码-->
        <script type="text/javascript" src="/marketsai/Public/js/msg/send_common_msg.js"></script>
        <!--web im sdk 上传和发送图片消息 api 示例代码-->
        <script type="text/javascript" src="/marketsai/Public/js/msg/upload_and_send_pic_msg.js"></script>
        <!--web im sdk 切换播放语音消息 示例代码-->
        <script type="text/javascript" src="/marketsai/Public/js/msg/switch_play_sound_msg.js"></script>
        <!--web im sdk 发送自定义消息 api 示例代码-->
        <script type="text/javascript" src="/marketsai/Public/js/msg/send_custom_msg.js"></script>
        <!--web im 监听新消息(c2c或群) 示例代码-->
        <script type="text/javascript" src="/marketsai/Public/js/msg/receive_new_msg.js"></script>
        <!--web im 监听群系统通知消息 示例代码-->
        <script type="text/javascript" src="/marketsai/Public/js/msg/receive_group_system_msg.js"></script>
        <!--web im 监听好友系统通知消息 示例代码-->
        <script type="text/javascript" src="/marketsai/Public/js/msg/receive_friend_system_msg.js"></script>
        <!--web im 监听资料系统通知消息 示例代码-->
        <script type="text/javascript" src="/marketsai/Public/js/msg/receive_profile_system_msg.js"></script>
        
        <script type="text/javascript">
            
            //帐号模式，0-表示独立模式，1-表示托管模式
            var accountMode=1;
            
            //官方 demo appid,需要开发者自己修改（托管模式）
            var sdkAppID = 1400019488;
            var accountType = 9228;

            //当前用户身份
            var loginInfo = {
                    'sdkAppID': 1400019488, //用户所属应用id,必填
                    'accountType': 9228, //用户所属应用帐号类型，必填
                    'identifier': 'huosaisai', //当前用户ID,必须是否字符串类型，必填
                    'identifierNick': null, //当前用户昵称，选填
                    'userSig': "eJx1js1Og0AURvc8xWS2NWYYfhxMXBioBtsmrS0hupkgDHCLQycwUGzju6vYRDbefLtzknPPBkII75bb6yRND12tuf5QAqNbhD1KGb7640pBxhPNrSYbuWkTQkzPZlNLDAoawZNci*bXcm5cRn5uYkEmag05XJyyO7QJfG*itFnFx*T-rRaKEa7mkR9uAt8J3Mf3qh-Wpb-onp1QvtGmeOq3Ni1ORK7mS68*vvYsLDdhsQsWUW5V*9w63VswAxJ5Kj7OzKFK16TtSExSJvfSf4hf7iZJDVJcHmKmQ13qMmx8Gl9n9lll", //当前用户身份凭证，必须是字符串类型，必填
                    'headurl': '/marketsai/Public/images/2016.gif'//当前用户默认头像，选填
            };
            
            var selType = webim.SESSION_TYPE.C2C;//当前聊天类型
            var selToID = null;//当前选中聊天id（当聊天类型为私聊时，该值为好友帐号，否则为群号）
            var selSess = null;//当前聊天会话对象
            
            
            //默认好友或群头像
            var friendHeadUrl = '/marketsai/Public/images/2017.jpg';
            
            var maxNameLen=5;//我的好友或群组列表中名称显示最大长度，仅demo用得到
            var reqMsgCount = 15;//每次请求的历史消息(c2c获取群)条数，进demo用得到
            var pageSize = 15;//表格的每页条数，bootstrap table 分页时用到
            var totalCount = 200;//每次接口请求的条数，bootstrap table 分页时用到
            
            var emotionFlag = false;//是否打开过表情选择框
            
            var curPlayAudio=null;//当前正在播放的audio对象
            
            var getPrePageC2CHistroyMsgInfoMap={};//保留下一次拉取好友历史消息的信息
            var getPrePageGroupHistroyMsgInfoMap={};//保留下一次拉取群历史消息的信息
            
            var defaultSelGroupId=null;//登录默认选中的群id，选填，仅demo用得到
            
            //监听（多终端同步）群系统消息方法，方法都定义在receive_group_system_msg.js文件中
            //注意每个数字代表的含义，比如，
            //1表示监听申请加群消息，2表示监听申请加群被同意消息，3表示监听申请加群被拒绝消息
            var onGroupSystemNotifys={
                "1": onApplyJoinGroupRequestNotify,//申请加群请求（只有管理员会收到）
                "2": onApplyJoinGroupAcceptNotify,//申请加群被同意（只有申请人能够收到）
                "3": onApplyJoinGroupRefuseNotify,//申请加群被拒绝（只有申请人能够收到）
                "4": onKickedGroupNotify,//被管理员踢出群(只有被踢者接收到)
                "5": onDestoryGroupNotify,//群被解散(全员接收)
                "6": onCreateGroupNotify,//创建群(创建者接收)
                "7": onInvitedJoinGroupNotify,//邀请加群(被邀请者接收)
                "8": onQuitGroupNotify,//主动退群(主动退出者接收)
                "9": onSetedGroupAdminNotify,//设置管理员(被设置者接收)
                "10": onCanceledGroupAdminNotify,//取消管理员(被取消者接收)
                "11": onRevokeGroupNotify,//群已被回收(全员接收)
                "255": onCustomGroupNotify//用户自定义通知(默认全员接收)
            };
            
            //监听好友系统通知函数对象，方法都定义在receive_friend_system_msg.js文件中
            var onFriendSystemNotifys={
                "1": onFriendAddNotify,//好友表增加
                "2": onFriendDeleteNotify,//好友表删除
                "3": onPendencyAddNotify,//未决增加
                "4": onPendencyDeleteNotify,//未决删除
                "5": onBlackListAddNotify,//黑名单增加
                "6": onBlackListDeleteNotify//黑名单删除
            };
            
            //监听资料系统通知函数对象，方法都定义在receive_profile_system_msg.js文件中
            var onProfileSystemNotifys={
                "1": onProfileModifyNotify//资料修改  
            };
            
            //监听连接状态回调变化事件
            var onConnNotify=function(resp){
                var info;
                switch(resp.ErrorCode){
                    case webim.CONNECTION_STATUS.ON:
                        webim.Log.warn('建立连接成功: '+resp.ErrorInfo);
                        break;
                    case webim.CONNECTION_STATUS.OFF:
                        info='连接已断开，无法收到新消息，请检查下你的网络是否正常: '+resp.ErrorInfo;
                        alert(info);
                        webim.Log.warn(info);
                        break;
                    case webim.CONNECTION_STATUS.RECONNECT:
                        info='连接状态恢复正常: '+resp.ErrorInfo;
                        alert(info);
                        webim.Log.warn(info);
                        break;
                    default:
                        webim.Log.error('未知连接状态: ='+resp.ErrorInfo);
                        break;
                }
            };
            
            //IE9(含)以下浏览器用到的jsonp回调函数
            function jsonpCallback(rspData) {
                webim.setJsonpLastRspData(rspData);
            }
            
            //监听事件
            var listeners = {
                "onConnNotify": onConnNotify,//监听连接状态回调变化事件,必填
                "jsonpCallback": jsonpCallback,//IE9(含)以下浏览器用到的jsonp回调函数，
                "onMsgNotify": onMsgNotify,//监听新消息(私聊，普通群(非直播聊天室)消息，全员推送消息)事件，必填
                "onBigGroupMsgNotify": onBigGroupMsgNotify,//监听新消息(直播聊天室)事件，直播场景下必填
                "onGroupSystemNotifys": onGroupSystemNotifys,//监听（多终端同步）群系统消息事件，如果不需要监听，可不填
                "onGroupInfoChangeNotify": onGroupInfoChangeNotify,//监听群资料变化事件，选填
                "onFriendSystemNotifys": onFriendSystemNotifys,//监听好友系统通知事件，选填
                "onProfileSystemNotifys": onProfileSystemNotifys//监听资料系统（自己或好友）通知事件，选填
            };
            
            var isAccessFormalEnv=true;//是否访问正式环境
                        
            if(webim.Tool.getQueryString("isAccessFormalEnv")=="false"){
                isAccessFormalEnv=false;//访问测试环境
            }
                        
            var isLogOn=true;//是否开启sdk在控制台打印日志
                        
            //初始化时，其他对象，选填
            var options={
                'isAccessFormalEnv': isAccessFormalEnv,//是否访问正式环境，默认访问正式，选填
                'isLogOn': isLogOn//是否开启控制台打印日志,默认开启，选填
            }
            
            if(accountMode==1){
                //托管模式
                //判断是否已经拿到临时身份凭证
                if (webim.Tool.getQueryString('tmpsig')){
                    if (loginInfo.identifier == null) {
                        webim.Log.info('start fetchUserSig');
                        //获取正式身份凭证，成功后会回调tlsGetUserSig(res)函数
                        TLSHelper.fetchUserSig();
                    }
                } else { //未登录
                    if (loginInfo.identifier == null) {
                        //弹出选择应用类型对话框
                        $('#select_app_dialog').modal('show');
                        $("body").css("background-color", 'white');
                    }
                }
            }else{ //独立模式
                $('#login_dialog').modal('show');
            }
            
        </script>
 
    </body>
</html>