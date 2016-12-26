<?php if (!defined('THINK_PATH')) exit();?><!-- 
 * document：商品发布
 * User: 周博学
 * Date: 2016/12/2417
 * Time: 11：00
-->
<!DOCTYPE html>
<html>

<head>
    <title>发布二手宝贝</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--IE8-->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <!--屏幕自适应-->
    <link rel="stylesheet" type="text/css" href="/market/Public/lib/weui.min.css">
    <link rel="stylesheet" type="text/css" href="/market/Public/lib/weui.min.css">
    <link rel="stylesheet" type="text/css" href="/market/Public/css/define.css">
    <style type="text/css">
    html,
    body {
        height: 100%;
    }
    
    .weui_uploader_input {
        display: none;
    }
    
    #upload1 {
        display: block;
    }
    </style>

    <body>
        <div class="weui_tab">
            <div class="weui_tab_bd">
                <!--上传图片-->
                <form action="/market/index.php/Home/Goods/doupload" method="post" enctype="multipart/form-data">
                    <div class="weui_cell">
                        <div class="weui_cell_bd weui_cell_primary">
                            <div class="weui_uploader">
                                <div class="weui_uploader_hd weui_cell">
                                    <div class="weui_cell_bd weui_cell_primary">图片上传</div>
                                    <div class="weui_cell_ft js_counter">0/6</div>
                                </div>
                                <div class="weui_uploader_bd">
                                    <ul class="weui_uploader_files">
                                        <!-- 预览图插入到这 -->
                                    </ul>
                                    <div class="weui_uploader_input_wrp">
                                        <input class="weui_uploader_input js_file" type="file" name="photo1" accept="image/jpg,image/jpeg,image/png,image/gif" multiple="" id="upload1">
                                        <input class="weui_uploader_input js_file" type="file" name="photo2" accept="image/jpg,image/jpeg,image/png,image/gif" multiple="">
                                        <input class="weui_uploader_input js_file" type="file" name="photo3" accept="image/jpg,image/jpeg,image/png,image/gif" multiple="">
                                        <input class="weui_uploader_input js_file" type="file" name="photo4" accept="image/jpg,image/jpeg,image/png,image/gif" multiple="">
                                        <input class="weui_uploader_input js_file" type="file" name="photo5" accept="image/jpg,image/jpeg,image/png,image/gif" multiple="">
                                        <input class="weui_uploader_input js_file" type="file" name="photo6" accept="image/jpg,image/jpeg,image/png,image/gif" multiple="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script src="/market/Public/js/zepto_min.js"></script>
                    <!--名称-->
                    <div class="weui_cell weui_cells_form">
                        <div class="weui_cell_bd weui_cell_primary">
                            <input class="weui_input" type="text" name="name" placeholder="请输入宝贝名称">
                        </div>
                    </div>
                    <!--介绍-->
                    <div class="weui_cells weui_cells_form">
                        <div class="weui_cell">
                            <div class="weui_cell_bd weui_cell_primary">
                                <textarea class="weui_textarea" name="description" placeholder="请输入宝贝描述，越详细越容易卖出噢" rows="3"></textarea>
                                <!-- <div class="weui_textarea_counter"><span>0</span>/200</div> -->
                                <div class="textareaTip weui_textarea_counter"><span id="textareaCount">0</span>/200</div>
                            </div>
                        </div>
                        <!--价格-->
                        <div class="weui_cells weui_cells_form">
                            <div class="weui_cell">
                                <div class="weui_cell_hd">
                                    <label class="weui_label">价格</label>
                                </div>
                                <div class="weui_cell_bd weui_cell_primary">
                                    <input class="weui_input" type="tel" name="price" placeholder="￥">
                                </div>
                            </div>
                            <!--分类-->
                            <div class="weui_cell weui_cell_select">
                                <div class="weui_cell_bd weui_cell_primary" name="category_id" id="category_id">
                                    <select class="weui_select" name="category_id">
                                        <option value="0" selected="selected">所属分类</option>
                                        <?php if(is_array($category)): $i = 0; $__LIST__ = $category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$category): $mod = ($i % 2 );++$i;?><option value="<?php echo ($category["id"]); ?>"><?php echo ($category["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                </div>
                            </div>
                            <!--是否全新-->
                            <div class="weui_cell weui_cell_select">
                                <div class="weui_cell_bd weui_cell_primary">
                                    <select class="weui_select" name="degree">
                                        <option selected="" value="0" name="degree">是否全新</option>
                                        <option value="是">是</option>
                                        <option value="否">否</option>
                                    </select>
                                </div>
                            </div>
                            <!--卖家id-->
                        </div>
                        <div class="buttonc">
                            <br>
                            <input class="button orange" type="submit" width="100%" value="发布">
                        </div>
                    </div>
            </div>
            </form>
            <input type="hidden" value="<?php echo (session('rz_status')); ?>" id="rz_tus">
            <input type="hidden" value="<?php echo (session('id')); ?>" id="id_num">
        </div>
        <!-- tab   -->
        <div class="weui_tabbar">
            <a href="/market/index.php/Home/index/index" class="weui_tabbar_item">
                <div class="weui_tabbar_icon">
                    <img src="/market/Public/images/first.png" alt="">
                </div>
                <p class="weui_tabbar_label">首页</p>
            </a>
            <a href="javascript:;" class="weui_tabbar_item  weui_bar_item_on" id="rz_sta">
                <div class="weui_tabbar_icon">
                    <img src="/market/Public/images/jiahao.png" width="100%">
                </div>
                <p class="weui_tabbar_label">发布</p>
            </a>
            <a href="/market/index.php/Home/Personal/zhanghuguanli/id/<?php echo (session('id')); ?>" class="weui_tabbar_item">
                <div class="weui_tabbar_icon">
                    <img src="/market/Public/images/mine.png" alt="">
                </div>
                <p class="weui_tabbar_label">我的</p>
            </a>
        </div>
        </div>
    </body>
    <script type="text/javascript" src="/market/Public/lib/jquery-2.1.4.js"></script>
    <script type="text/javascript" src="/market/Public/js/jquery-weui.min.js"></script>
    <script type='text/javascript' src='/market/Public/js/swiper.js' charset='utf-8'>
    </script>
    <script>
    $(".swiper-container").swiper({
        loop: true,
        autoplay: 3000
    });
    </script>
    <script>
    var photo = document.getElementsByClassName('weui_uploader_input js_file');
    for (var i = photo.length - 1; i >= 0; i--) {

        photo[i].i = i;
        photo[i].onchange = function() {

            //alert('1');
            //图片显示效果

            var num = this.i + 1;
            if (num < 6) {
                photo[num - 1].style.display = "none";
                photo[num].style.display = "inline";
            }

        }
    }
    </script>
    <script>
    $.weui = {};
    $.weui.alert = function(options) {
        options = $.extend({
            title: '警告',
            text: '警告内容'
        }, options);
        var $alert = $('.weui_dialog_alert');
        $alert.find('.weui_dialog_title').text(options.title);
        $alert.find('.weui_dialog_bd').text(options.text);
        $alert.on('touchend click', '.weui_btn_dialog', function() {
            $alert.hide();
        });
        $alert.show();
    };

    $(function() {
        // 允许上传的图片类型
        var allowTypes = ['image/jpg', 'image/jpeg', 'image/png', 'image/gif'];
        // 1024KB，也就是 1MB
        var maxSize = 5 * 1024 * 1024;
        // 图片最大宽度
        var maxWidth = 300;
        // 最大上传图片数量
        var maxCount = 6;
        $('.js_file').on('change', function(event) {
            var files = event.target.files;

            // 如果没有选中文件，直接返回
            if (files.length === 0) {
                return;
            }

            for (var i = 0, len = files.length; i < len; i++) {
                var file = files[i];
                var reader = new FileReader();

                // 如果类型不在允许的类型范围内
                if (allowTypes.indexOf(file.type) === -1) {
                    $.weui.alert({
                        text: '该类型不允许上传'
                    });
                    continue;
                }

                if (file.size > maxSize) {
                    $.weui.alert({
                        text: '图片太大，不允许上传'
                    });
                    continue;
                }

                if ($('.weui_uploader_file').length >= maxCount) {
                    $.weui.alert({
                        text: '最多只能上传' + maxCount + '张图片'
                    });
                    return;
                }

                reader.onload = function(e) {
                    var img = new Image();
                    img.onload = function() {
                        // 不要超出最大宽度
                        var w = Math.min(maxWidth, img.width);
                        // 高度按比例计算
                        var h = img.height * (w / img.width);
                        var canvas = document.createElement('canvas');
                        var ctx = canvas.getContext('2d');
                        // 设置 canvas 的宽度和高度
                        canvas.width = w;
                        canvas.height = h;
                        ctx.drawImage(img, 0, 0, w, h);
                        var base64 = canvas.toDataURL('image/png');

                        // 插入到预览区
                        var $preview = $('<li class="weui_uploader_file weui_uploader_status" style="background-image:url(' + base64 + ')"><div class="weui_uploader_status_content">0%</div></li>');
                        $('.weui_uploader_files').append($preview);
                        var num = $('.weui_uploader_file').length;
                        $('.js_counter').text(num + '/' + maxCount);

                        // 然后假装在上传，可以post base64格式，也可以构造blob对象上传，也可以用微信JSSDK上传

                        var progress = 0;

                        function uploading() {
                            $preview.find('.weui_uploader_status_content').text(++progress + '%');
                            if (progress < 100) {
                                setTimeout(uploading, 30);
                            } else {
                                // 如果是失败，塞一个失败图标
                                //$preview.find('.weui_uploader_status_content').html('<i class="weui_icon_warn"></i>');
                                $preview.removeClass('weui_uploader_status').find('.weui_uploader_status_content').remove();
                            }
                        }
                        setTimeout(uploading, 30);
                    };

                    img.src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });
    });
    //# sourceURL=pen.js
    </script>
    <script>
    $(function() {
        $('textarea').keyup(function(event) {
            /* Act on the event */
            var maxLength = 200;
            var len = $('textarea').val().length;
            $('#textareaCount').html(len);
            if (parseInt($('#textareaCount').text()) > 200) {
                $('#textareaCount').html('200');
                var res = $(this).val().substring(0, 200);
                $(this).val(res);
            }
        });
    });
    $('#rz_sta').click(function() {
    var status = $('#rz_tus').val();
    if (status == '1') {
        return true;
    } else {
        $.confirm({
            title: '尚未认证',
            text: '跳转至认证页面',
            onOK: function () {
               // window.location.href="home/Personal/percenter/id/"+num+"";
              //$state.go('http://www.baidu.com');
              top.location="../Personal/percenter"; 
            },
            onCancel: function () {
            }
          });
          return false;
    }
});
    </script>

</html>