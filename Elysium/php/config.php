<!-- DB 연동을 위한 configuration -->

<?php

$hostname = "localhost";
$user = "hyoriinvic";
$password = "King5609!";
$database = "hyoriinvic";

// mysql_something 이 지원되지 않는 호스팅이기에,
// mysqli_something 으로 변경

$db = mysqli_connect($hostname, $user, $password) or die("db connect error");

//mysqli_select_db(연결 객체, DB명)
//mysqli_connect 를 통해 연결된 객체가 선택하고 있는 DB를 다른 DB로 바꾸기 위해 사용?

//불필요하다 생각하여 주석처리 함
//mysqli_select_db($database, $db) or die("db connect error");

?>