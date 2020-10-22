<!DOCTYPE html>

<html lang="kr">

<head>
    <meta charset="utf-8" />
    <title>Kyung-hee Oriental Clinic</title>
    <link rel="stylesheet" href="css/basic.css" />
    <link rel="stylesheet" href="css/registration.css" />
</head>

<body>
    <image src="image/logo.png" alt="Kyunghee Oriental Clinic"/>

    <form method='post' action = "./php/join.php">
        <main>
            <div><input class="info" id="patientName" name = "patientName" required placeholder="이름" type="text" /></div>
            <div><input class="info" id="patientPhone" name = "patientPhone" required placeholder="전화번호" type="tel" /></div>

            <div>
                <input id="clinicAddress" name="clinicAddress" required placeholder="한의원 주소를 검색하세요." type="text" />
                <button class="btn" id="searchAddress">주소 검색</button>
            </div>

            <div><input class="info" id="identificationNumber" name="identificationNumber" required placeholder="주민등록번호" type="text" required pattern="[0-9]{13}" /></div>
            <div><input class="info" id="recommender" name="recommender" placeholder="소개환자(선택)" type="text" /></div>
        </main>
        <button class="btn" id="submitInfo" type="button"
            onclick="location.href='http://hyoriinvic.dothome.co.kr/sympton1.php'">증상 입력하기</button>
    </form>
</body>

</html>
