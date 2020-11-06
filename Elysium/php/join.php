
<?php

// $hostName = "localhost";
// $user = "hyoriinvic";
// $password = "King5609!";
// $dbName = "hyoriinvic";

//PHP mysqli_connect / mysqli_close: php에서 MySQL을 연결/해제
// $mysqli = mysqli_connect($hostName, $user, $password) or die("db connect error");
// $db_handle = mysqli_select_db($mysqli, $dbName) or die("db connect error");

include "config.php";

$patientName = $_POST['patientName']; //성명
$patientPhone = $_POST['patientPhone']; //전화번호
$clinicAddress = $_POST['clinicAddress']; //한의원 주소
$identificationNumber = $_POST['identificationNumber']; //주민등록번호
$recommender = $_POST['recommender']; //추천자

// echo (array("mode" => $_REQUEST['mode'], "patientName" => $patientName, "patientPhone" => $patientPhone, "clinicAddress" => $clinicAddress, "identificationNumber" => $identificationNumber, "recommender" => $recommender));

//query 전송
$patientQuery = 'insert into patient_info (patientName, patientPhone, clinicAddress, identificationNumber, recommender)';
$patientQuery = $patientQuery . "values ($patientName, $patientPhone, $clinicAddress, $identificationNumber, $recommender)";

mysqli_query($mysqli, $patientQuery);

if (mysqli_query($mysqli, $patientQuery)) {
    echo "Success. ";
} else {
    echo "Fail. " . mysqli_error($mysqli); //현재 등록에 실패했습니다 뜸
}

// header('location:http://hyoriinvic.dothome.co.kr/registration.php');

mysqli_close($mysqli);
?>

