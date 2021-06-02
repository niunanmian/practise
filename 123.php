<!DOCTYPE html>
<html>
<body>

<h1>我的第一张 PHP 页面</h1>

<?php

//如果需要设置允许所有域名发起的跨域请求，可以使用通配符 *
header("Access-Control-Allow-Origin: *");

echo  file_get_contents("http://www.weather.com.cn/data/cityinfo/101220701.html");
?>

</body>
</html>