<!doctype html>
<html lang="ko">
    <head>
    <meta charset="utf-8">
    <title>Patients Information</title>
    <body>
        <?php

// $hostName = "localhost";
// $user = "hyoriinvic";
// $password = "King5609!";
// $dbName = "hyoriinvic";

// $mysqli = mysqli_connect($hostName, $user, $password) or die("db connect error");
// $db_handle = mysqli_select_db($mysqli, $dbName) or die("db connect error");

include "config.php";

// mysqli_set_charset($db_handle, "utf8"); // 문자셋 설정, utf8

$patientName = $_POST['patientName']; //성명
$patientPhone = $_POST['patientPhone']; //전화번호
$clinicAddress = $_POST['clinicAddress']; //한의원 주소
$identificationNumber = $_POST['identificationNumber']; //주민등록번호
$recommender = $_POST['recommender']; //추천자

$sql = 'INSERT INTO patient_info (patientName, patientPhone, clinicAddress, identificationNumber, recommender)';
$sql = $sql . "VALUES ($patientName, $patientPhone, $clinicAddress, $identificationNumber, $recommender)";

if ($mysqli->query($sql)) {
    echo "<script>alert(\"등록이 완료되었습니다.\");</script>";
} else {
    echo "<script>alert(\"등록에 실패했습니다. 관리자에게 문의하십시오.\");</script>";
}

// header('location:http://hyoriinvic.dothome.co.kr/registration.php');

mysqli_close($mysqli);
?>
    </body>
</html>