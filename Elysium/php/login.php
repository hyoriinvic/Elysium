<!doctype html>

<html lang="ko">
    <head>
        <meta charset="utf-8">
        <title>Login </title>
    </head>

    <body>
        <?php

include "config.php";

$patientName = $_POST['patientName'];
$patientPhone = $_POST['patientPhone'];

$query = "SELECT * FROM patient_info WHERE patientName = '$patientName' AND patientPhone = '$patientPhone'";

$result = mysqli_query($db_handle, $query);
$row = mysqli_fetch_array($result);

if ($patientName === $row['patientName'] && $patientPhone === $row['patientPhone']) {
    session_start();
    $_SESSION['patientName'] = $row['patientName'];
    $_SESSION['patientPhone'] = $row['patientPhone'];

    ?>
            <script>
                alert("로그인 되었습니다.");
                location.href='http://hyoriinvic.dothome.co.kr/sympthon1.php';
            </script>
        <?php
} else {
    echo "session fail";
    ?>
            <script>
                alert("입력한 정보가 일치하지 않습니다.");
                history.back()
            </script>
        <?php
}

?>
    </body>
</html>