<!-- php 에서 MySQL에 접속 -->
<?php
    $host = 'localhost'; // 호스트명
    $user = 'hyoriinvic'; // 계정명
    $pw = 'qpwoeiruty98!'; // 비밀번호
    $dbName = 'patient_info'; // 데이터베이스명
    $mysqli = new mysqli($host, $user, $pw, $dbName);

    if($mysqli){
        echo "MySQL 접속 성공";
    } else{
        echo "MySQL 접속 실패";
    }
?>


