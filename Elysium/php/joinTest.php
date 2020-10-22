<?php
$host = 'localhost';
$user = 'hyoriinvic';
$pw = 'King5609!';
$dbName = 'hyoriinvic';

// MySQL DB 접속
$mysqli = mysqli_connect($host, $user, $pw, $dbName);
if (mysqli_connect_errno()) {
    echo "MySQL Connection Error: " . mysqli_connect_error();
    exit;
} else {
    echo "DB : \"$dbName\" Connected.<br/>";
}

// 테이블에 값 쓰기.
$sql = "INSERT INTO patient_info (patientName, patientPhone, clinicAddress, identificationNumber, recommender)";
$sql = $sql . "VALUES ("someone", "00000000000", "Somewhere", "0000001234567", "anyone")"; 
//SQL 쌍따옴표를 해야 함 > 하면 syntex error 발생 - 원인 파악 불가
//Parse error: syntax error, unexpected 'someone' (T_STRING) in /host/home1/hyoriinvic/html/php/joinTest.php on line 18 

if (mysqli_query($mysqli, $sql)) {
    echo "Table Success : $sql<br/>";
} else {
    echo "Table Fail: " . mysqli_error($mysqli);
}
mysqli_close($mysqli);
?>