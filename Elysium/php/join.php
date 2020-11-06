
<?php

// $hostName = "localhost";
// $user = "hyoriinvic";
// $password = "King5609!";
// $dbName = "hyoriinvic";

//PHP mysqli_connect / mysqli_close: php에서 MySQL을 연결/해제
// $mysqli = mysqli_connect($hostName, $user, $password) or die("db connect error");
// $db_handle = mysqli_select_db($mysqli, $dbName) or die("db connect error");

include "config.php";

$join_patientName = $_POST['join_patientName']; //성명
$join_patientPhone = $_POST['join_patientPhone']; //전화번호
$join_clinicAddress = $_POST['join_clinicAddress']; //한의원 주소
$join_identificationNumber = $_POST['join_identificationNumber']; //주민등록번호
$join_recommender = $_POST['join_recommender']; //추천자

//query 전송
$patientQuery = 'insert into patient_info (join_patientName, join_patientPhone, join_clinicAddress, join_identificationNumber, join_recommender)';
$patientQuery = $patientQuery . "values ($join_patientName, $join_patientPhone, $join_clinicAddress, $join_identificationNumber, $join_recommender)";

mysqli_query($mysqli, $patientQuery);

if (mysqli_query($mysqli, $patientQuery)) {
    echo "Success. ";
} else {
    echo "Fail. " . mysqli_error($mysqli); //현재 등록에 실패했습니다 뜸
}

// header('location:http://hyoriinvic.dothome.co.kr/registration.php');

mysqli_close($mysqli);
?>

