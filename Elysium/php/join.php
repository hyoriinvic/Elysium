
<?php

include "config.php";

$join_patientName = $_POST['join_patientName']; //성명
$join_patientPhone = $_POST['join_patientPhone']; //전화번호
$join_addressSearch = $_POST['join_addressSearch']; //한의원 주소
$join_juminNumber = $_POST['join_juminNumber']; //주민등록번호
$join_recommendPatient = $_POST['join_recommendPatient']; //추천자

//query 전송
$patientQuery = 'insert into patient_info (join_patientName, join_patientPhone, join_addressSearch, join_juminNumber, join_recommendPatient)';
$patientQuery = $patientQuery . "values ($join_patientName, $join_patientPhone, $join_addressSearch, $join_juminNumber, $join_recommendPatient)";

mysqli_query($mysqli, $patientQuery);

if (mysqli_query($mysqli, $patientQuery)) {
    echo "Success. ";
} else {
    echo "Fail. " . mysqli_error($mysqli); //현재 등록에 실패했습니다 뜸
}

// header('location:http://127.0.0.1/registration.php');

mysqli_close($mysqli);
?>

