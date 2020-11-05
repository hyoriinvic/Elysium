<!-- 등록에 실패했습니다가 뜨는 상태 - because of 'null given' -->

<!doctype html>
<html lang="ko">
    <head>
    <meta charset="utf-8">
    <title>Patients Information</title>
    <body>
        <?php
// header('location:http://hyoriinvic.dothome.co.kr/registration.php');

include "config.php";
mysqli_set_charset($mysqli, "utf8"); // 문자셋 설정, utf8

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

mysqli_close($mysqli);
?>
        <input type='button' value='메인으로 가기' onclick="location'=http://hyoriinvic.dothome.co.kr/main.php'">
    </body>
</html>