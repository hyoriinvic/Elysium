<!DOCTYPE html>

<html lang="kr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kyung-hee Oriental Clinic</title>
    <link rel="stylesheet" href="css/basic.css" />
    <link rel="stylesheet" href="css/main.css" />
</head>

<body>
    <img src="image/logo.png" alt="Kyunghee Oriental" />

    <form method='post' action = "./php/connectionTest.php">
        <main>
            <div><input class="info patientName" required placeholder="이름" autocomplete='off' type="text" /></div>
            <div><input class="info patientPhone" required placeholder="전화번호" autocomplete='off' type="tel" /></div>
        </main>
        <div>
            <button id="submitInfo" type="button" onclick="location.href='http://hyoriinvic.dothome.co.kr/sympton1.php'">증상 입력하기</button>
        </div>
    </form>
    <div>
        <span>처음 방문하셨습니까?</span>
        <a href="http://hyoriinvic.dothome.co.kr/registration.php" target="_self">환자등록</a>
    </div>
</body>

</html>
