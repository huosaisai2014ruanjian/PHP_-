<?php
/**
 * Created by PhpStorm.
 * User:周博学
 * Date: 
 */


// 评论显示替换表情标签
function reFace($str){
    for($i=1;$i<76;$i++){

        $str = str_replace("[em_$i]","<img src='".__ROOT__."/Public/Face/$i.gif'/>",$str);
        
    }
    return $str;
}

