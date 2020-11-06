<!-- 민수쌤 DB 기준 configuration -->

<?php
$mysql_hostname = "localhost";
$mysql_user = "apple3095";
$mysql_password = "ye6428ye!";
$mysql_database = "kyunghee_db";

$db = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("db connect error");
mysql_select_db($mysql_database, $db) or die("db connect error");
?>