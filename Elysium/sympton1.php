<!DOCTYPE html>

<html lang="kr">

<head>
    <meta charset="utf-8" />
    <title>Kyung-hee Oriental Clinic</title>
    <link rel="stylesheet" href="css/background.css" />
    <link rel="stylesheet" href="css/sympton1/sympton1.css" />
</head>

<body>
    <img src="image/logo.png" alt="Kyunghee Oriental Clinic" />

    <span style="color:#9D1C20">해당되는 사항</span>만 클릭해주세요.

    <form>
        <div class="checkbox-container">
            <div>
                <input type="checkbox" id="high_blood_pressure">
                <label class="btn1" for="high_blood_pressure">고혈압</label>
            </div>
            <div>
                <input type="checkbox" id="diabetes">
                <label class="btn1" for="diabetes">당뇨</label>
            </div>
            <div>
                <input type="checkbox" id="hepatitis">
                <label class="btn1" for="hepatitis">간염</label>
            </div>
            <div>
                <input type="checkbox" id="allergy">
                <label class="btn1" for="allergy">알레르기</label>
            </div>
            <div>
                <input type="checkbox" id="surgery_history">
                <label class="btn1" for="surgery_history">수술 이력</label>
            </div>
            <div>
                <input type="checkbox" id="medication">
                <label class="btn1" for="medication">복용약</label>
            </div>
            <div>
                <input type="checkbox" id="drinking">
                <label class="btn2" for="drinking">음주</label>
            </div>
            <div>
                <input type="checkbox" id="smoking">
                <label class="btn2" for="smoking">흡연</label>
            </div>
        </div>
    </form>
    <footer>
        <button id="submitInfo" type="button" onclick="location.href='http://hyoriinvic.dothome.co.kr/sympton2.php'">제출하기</button>
    </footer>
    <script type="text/javascript" src="./js/sympton1.js"></script>
</html>
