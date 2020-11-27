<?php
    $host = 'localhost';
    $user = 'root';
    $pw = 'autoset';
    $dbName = 'kyunghee';
    $connect = new mysqli($host, $user, $pw, $dbName);

    if($connect -> connect_errno){
        die("Connect Error: ".$connect -> connect_error);
    }
?>

<?php
    $join_patientName = $_POST["join_patientName"]; //성명
    $join_patientTel = $_POST["join_patientTel"]; //전화번호
    $join_addressSearch = $_POST["join_addressSearch"]; //한의원 주소 (우편번호 + 주소) - 주소 API에서 가져옴
    $join_addressDetail = $_POST["join_addressDetail"]; //상세 주소 - 사용자가 입력할 
    $join_addressExtra = $_POST["join_addressExtra"]; //한의원 주소 (참고 주소) - 주소 API에서 가져옴
    $join_juminNumber = $_POST["join_juminNumber"]; //주민등록번호
    $join_recommendPatient = $_POST["join_recommendPatient"]; //추천자

//query 전송
    $sql = "INSERT INTO patient_db (join_patientName, join_patientTel, join_addressSearch, join_addressDetail, join_addressExtra, join_juminNumber, join_recommendPatient)";
    $sql = $sql."VALUES ('$join_patientName', '$join_patientTel', '$join_addressSearch', '$join_addressDetail', '$join_addressExtra', $join_juminNumber', '$join_recommendPatient')";
    
    if($connect->query($sql)){
        echo "<script>alert(\"회원가입이 완료되었습니다.\");</script>";
        echo "patientName: $join_patientName <br>";
        echo "patientTel: $join_patientTel <br>";
        echo "address:".$join_addressSearch." ".$join_addressDetail." ".$join_addressExtra."<br>";
        echo "juminNumber: $join_juminNumber <br>";
        echo "recommender: $join_recommendPatient <br>";
    }else{
        echo "<script>alert(\"회원가입에 실패했습니다. 관리자에게 문의하십시오.\");</script>";
        echo("Error description: " . mysqli_error($connect));
    };

mysqli_close($connect);

?>
