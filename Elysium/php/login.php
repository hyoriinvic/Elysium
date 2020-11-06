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

$existingPatient = "SELECT * FROM patient_info WHERE patientName = '$patientName' AND patientPhone = '$patientPhone'";

$result = mysqli_query($mysqli, $existingPatient);
$row = mysqli_fetch_array($result);

if ($patientName === $row['patientName'] && $patientPhone === $row['patientPhone']) {
    //session , local
    session_start();
    $_SESSION['patientName'] = $row['patientName'];
    $_SESSION['patientPhone'] = $row['patientPhone'];

    ?>
            <script>
                alert("Success.");
                location.href='http://hyoriinvic.dothome.co.kr/sympthon1.php';
            </script>
        <?php
} else {
    echo "session fail";
    ?>
            <script>
                alert("Fail. Information not matched.");
                history.back()
            </script>
        <?php
}

?>
    </body>
</html>