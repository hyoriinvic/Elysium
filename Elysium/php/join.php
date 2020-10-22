<!doctype html>
<html lang="ko">
    <head>
    <meta charset="utf-8">
    <title>Patients Information</title>
    <body>
        <?php

header('location:http://hyoriinvic.dothome.co.kr/registration.php');

$host = 'localhost';
$user = 'hyoriinvic';
$pw = 'King5609!';
$dbName = 'hyoriinvic';

// MySQL DB 접속
$mysqli = mysqli_connect($host, $user, $pw, $dbName);
if (mysqli_connect_errno()) {
    echo "MySQL 연결 오류: " . mysqli_connect_error();
    exit;
} else {
    echo "DB : \"$db_name\"에 접속 성공.<br/>";
}

// 문자셋 설정, utf8.
mysqli_set_charset($mysqli, "utf8");

$patientName = $_POST['patientName'];
$patientPhone = $_POST['patientPhone'];
$clinicAddress = $_POST['clinicAddress'];
$identificationNumber = $_POST['identificationNumber'];
$recommender = $_POST['recommender'];

$sql = 'INSERT INTO patient_info (patientName, patientPhone, clinicAddress, identificationNumber, recommender)';
$sql = $sql . "VALUES ($patientName, $patientPhone, $clinicAddress, $identificationNumber, $recommender)";

if ($mysqli->query($sql)) {
    echo "<script>alert(\"등록이 완료되었습니다.\");</script>";
} else {
    echo "<script>alert(\"등록에 실패했습니다. 관리자에게 문의하십시오.\");</script>";
}

mysqli_close($mysqli);
?>
        <input type='button' value='메인으로 가기' onclick="location'=http://hyoriinvic.dothome.co.kr/main.php'">
    </body>
</html>