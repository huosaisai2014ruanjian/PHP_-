<?php
function sendSMS($tos,$content){
      $url="http://service.winic.org:8009/sys_port/gateway/?";
      $data = "id=%s&pwd=%s&to=%s&content=%s&time=";
      $id = iconv('UTF-8','GB2312','kdvnszrqu');
      $pwd = '384913ldh';
      $to = $tos; 
      $content = urlencode(iconv("UTF-8","GB2312",$content)); 
      $rdata = sprintf($data, $id, $pwd, $to, $content);
	  
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_POST,1);
      curl_setopt($ch, CURLOPT_POSTFIELDS,$rdata);
      curl_setopt($ch, CURLOPT_URL,$url);
      curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);
      //打印一下参数 可以看到 在GB2312编码模式的浏览器下 显示字符是正常的
      $result = curl_exec($ch);
      curl_close($ch);
      $result = substr($result,0,3);
      if($result=="000")
      {
          return 'true';
       }
      else
      {
          return 'false';
       }
}
 sendSMS('15318173067',"this's\x0dTestMessage --- 111111111111111");
 ?>