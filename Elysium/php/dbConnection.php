<!doctype html>
<html lang="ko">
    <head>
    <meta charset="utf-8">
    <title>Patients Information</title>
    <body>
        <?php

        $host = 'localhost';
        $user = 'hyoriinvic';
        $pw = 'qpwoeiruty98!';
        $dbName = 'patient_info';

        $mysqli = new mysqli($host, $user, $pw, $dbName);
            $patientName = $_POST['patientName'];
            $patientPhone = $_POST['patientPhone'];
            $clinicAddress = $_POST['clinicAddress'];
            $identificationNumber = $_POST['identificationNumber'];
            $recommender = $_POST['recommender'];

            $sql = 'insert into patient_info (patientName, patientPhone, clinicAddress, identificationNumber, recommender)';
            $sql = $sql."values('$patientName', '$patientPhone', '$clinicAddress', '$identificationNumber', '$recommender')";
            if($mysqli->query($sql)){
                echo "<script>alert(\"등록이 완료되었습니다.\");</script>";
            }else{
                echo "<script>alert(\"등록에 실패했습니다. 관리자에게 문의하십시오.\");</script>";
            };
            header('location:http://hyoriinvic.dothome.co.kr/sympton1.php');

        mysqli_close($mysqli);
        
        ?>

        <input type='button' value='메인으로 가기' onclick="location'=http://hyoriinvic.dothome.co.kr/main.php'">
    </body>
</html>