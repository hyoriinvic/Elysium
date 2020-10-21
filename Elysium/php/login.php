<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title>MySql-PHP 연결 테스트</title>
</head>
<body>

<?php
echo "MySql 연결 테스트<br>";

$db = mysqli_connect("localhost", "hyoriinvic", "qpwoeiruty98!", "patient_info");

if($db){
    echo "connect : Success<br>";
}
else{
    echo "disconnect : Fail<br>";
}

$result = mysqli_query($db, 'SELECT VERSION() as VERSION');
$data = mysqli_fetch_assoc($result);
echo $data['VERSION'];
?>

</body>
</html>