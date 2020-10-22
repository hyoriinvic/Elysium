<!DOCTYPE html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>MySQL-PHP 연결 테스트</title>
</head>

<body>
<?php
echo "MySql-PHP 연결 테스트<br>";

$host = 'localhost'; // 호스트명
$user = 'hyoriinvic'; // 계정명
$pw = 'King5609!'; // 비밀번호
$dbName = 'hyoriinvic'; // 데이터베이스명

$db = mysqli_connect($host, $user, $pw, $dbName);

if ($db) {
    echo "connect : Success<br>";
} else {
    echo "Connect : Fail<br>";
}

$result = mysqli_query($db, 'SELECT VERSION() as VERSION');
$data = mysqli_fetch_assoc($result);
echo $data['VERSION'];
?>
</body>
</html>