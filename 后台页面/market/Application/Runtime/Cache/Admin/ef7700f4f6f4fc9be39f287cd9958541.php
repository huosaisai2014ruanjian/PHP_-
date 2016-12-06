<?php if (!defined('THINK_PATH')) exit();?><html>
<style>
    .pageFormContent dd{
        width:135px;
    }
    .upload{
        display: none;
    }
    #upload1{
        display: block;
    }
    #nownum{
        float: none;
        display: inline;
    }
</style>
<form action="/market/index.php/Admin/AdminManage/add" method="post" enctype="multipart/form-data" class="pageForm required-validate" onsubmit="return validateCallback(this)">
    <div class="pageFormContent nowrap" layoutH="37">
        <dl>
            <dt>管理员账户：</dt>
            <dd>
                <input type="text" name="admin" class="required" maxlength="30" alt=""/>
            </dd>
        </dl>
        <dl>
            <dt>管理员账户密码：</dt>
            <dd>
                <input id="pw1" type="password" name="password" class="required alphanumeric" maxlength="30" alt=""/>
            </dd>
        </dl>
        <dl>
            <dt>密码确认：</dt>
            <dd>
                <input id="pw2" type="password" name="cpassword" class="required" equalto="#pw1" maxlength="30" alt="" onBlur="validate()"/>
                <span id="tishi"></span>
            </dd>
        </dl>




    </div>
    <div class="formBar" style="position:absolute;bottom:0;right:0;width:100%;">
        <ul>
            <li>
                <div class="buttonActive">
                    <div class="buttonContent">
                        <button type="submit">保存</button>
                    </div>
                </div>
            </li>
            <li>
                <div class="button">
                    <div class="buttonContent">
                        <button type="button" class="close">取消</button>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</form>
<script>
    function validate() {
        var pw1 = document.getElementById("pw1").value;
        var pw2 = document.getElementById("pw2").value;
        if(pw1 == pw2) {
            document.getElementById("tishi").innerHTML="<p  style='color: #0bb20c'>两次密码相同</p>";
            document.getElementById("submit").disabled = false;
        }
        else {
            document.getElementById("tishi").innerHTML="<p style='color: #942a25'>两次密码不相同</p>";
            document.getElementById("submit").disabled = true;
        }
    }
</script>
</html>