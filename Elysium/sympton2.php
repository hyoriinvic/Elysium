<!DOCTYPE html>

<html lang="kr">

<head>
    <meta charset="utf-8" />
    <title>Kyung-hee Oriental Clinic</title>
    <link rel="stylesheet" href="css/background.css" />
    <link rel="stylesheet" href="css/sympton2/sympton2.css" />
    <script language="javascript">
        function btn_alert(){
            alert("접수가 완료되었습니다.")
            location.href='http://hyoriinvic.dothome.co.kr/main.php' /* 클릭 시 맨 처음 페이지로 이동*/
        }</script>
</head>

<body>
    <img id="body" src="image/body.png" />
    <img id="head" src="image/head.png" />
    <form>
        <section class="checkbox-container" id="body-img">
            <div>
                <input onclick = "valueChange3();" type="checkbox" id="neck">
                <label class="small-btn" for="neck">목</label>
                <hr class="diagonal" id="line1" width="178.99px" noshade />
                <div class="circle circle-wrapper-body" id="spot-body1">
                    <div class="circle small-circle-body"></div>
                </div>
            </div>
            <div>
                <input onclick = "valueChange3();" type="checkbox" id="sholder">
                <label class="small-btn" for="sholder">어깨</label>
                <hr class="diagonal" id="line2" width="122.1px" noshade />
                <div class="circle circle-wrapper-body" id="spot-body2">
                    <div class="circle small-circle-body"></div>
                </div>
            </div>
            <div>
                <input onclick = "valueChange3();" type="checkbox" id="elbow">
                <label class="small-btn" for="elbow">팔꿈치</label>
                <hr class="diagonal" id="line3" width="99.96px" noshade />
                <div class="circle circle-wrapper-body" id="spot-body3">
                    <div class="circle small-circle-body"></div>
                </div>
            </div>
            <div>
                <input onclick = "valueChange3();" type="checkbox" id="waist">
                <label class="small-btn" for="waist">허리</label>
                <hr class="diagonal" id="line4" width="179.62px" noshade />
                <div class="circle circle-wrapper-body" id="spot-body4">
                    <div class="circle small-circle-body"></div>
                </div>
            </div>
            <div>
                <input onclick = "valueChange3();" type="checkbox" id="wrist">
                <label class="small-btn" for="wrist">손,손목</label>
                <hr class="diagonal" id="line5" width="97.65px" noshade />
                <div class="circle circle-wrapper-body" id="spot-body5">
                    <div class="circle small-circle-body"></div>
                </div>
            </div>
            <div>
                <input onclick = "valueChange3();" type="checkbox" id="chest">
                <label class="small-btn" for="chest">가슴</label>
                <hr class="diagonal" id="line6" width="145px" noshade />
                <div class="circle circle-wrapper-body" id="spot-body6">
                    <div class="circle small-circle-body"></div>
                </div>
            </div>
            <div>
                <input onclick = "valueChange3();" type="checkbox" id="stomach">
                <label class="small-btn" for="stomach">복부</label>
                <hr class="diagonal" id="line7" width="145.34px" noshade />
                <div class="circle circle-wrapper-body" id="spot-body7">
                    <div class="circle small-circle-body"></div>
                </div>
            </div>
            <div>
                <input onclick = "valueChange3();" type="checkbox" id="pelvis">
                <label class="small-btn" for="pelvis">골반</label>
                <hr class="diagonal" id="line8" width="110.04px" noshade />
                <div class="circle circle-wrapper-body" id="spot-body8">
                    <div class="circle small-circle-body"></div>
                </div>
            </div>
            <div>
                <input onclick = "valueChange3();" type="checkbox" id="knee">
                <label class="small-btn" for="knee">무릎</label>
                <hr class="diagonal" id="line9" width="120.54px" noshade />
                <div class="circle circle-wrapper-body" id="spot-body9">
                    <div class="circle small-circle-body"></div>
                </div>
            </div>
            <div>
                <input onclick = "valueChange3();" type="checkbox" id="ankle">
                <label class="small-btn" for="ankle">발,발목</label>
                <hr class="diagonal" id="line10" width="134.33px" noshade />
                <div class="circle circle-wrapper-body" id="spot-body10">
                    <div class="circle small-circle-body"></div>
                </div>
            </div>
        </section>
        <section class="checkbox-container" id="head-img">
            <div>
                <input onclick = "valueChange3();" type="checkbox" id="eye">
                <label class="small-btn" for="eye">눈</label>
                <hr class="diagonal" id="line11" width="152px" noshade />
                <div class="circle circle-wrapper-head" id="spot-head11">
                    <div class="circle small-circle-head"></div>
                </div>
            </div>
            <div>
                <input onclick = "valueChange3();" type="checkbox" id="ear"">
                <label class="small-btn" for="ear"">귀</label>
                <hr class="diagonal" id="line12" width="139.09px" noshade />
                <div class="circle circle-wrapper-head" id="spot-head12">
                    <div class="circle small-circle-head"></div>
                </div>
            </div>
            <div>
                <input onclick = "valueChange3();" type="checkbox" id="nose">
                <label class="small-btn" for="nose">코</label>
                <hr class="diagonal" id="line13" width="219.62px" noshade />
                <div class="circle circle-wrapper-head" id="spot-head13">
                    <div class="circle small-circle-head"></div>
                </div>
            </div>
            <div>
                <input onclick="valueChange3();" type="checkbox" id="mouth">
                <label class="small-btn" for="mouth">입</label>
                <hr class="diagonal" id="line14" width="258.26px" noshade />
                <div class="circle circle-wrapper-head" id="spot-head14">
                    <div class="circle small-circle-head"></div>
                </div>
            </div>
        </section>
        <section class="checkbox-container">
            <input type="checkbox" id="else">
            <label class="btn" for="else">기타</label>
        </section>
        <button class="btn submitInfo" type="button" onclick="btn_alert()">접수하기</button>
    </form>
    <script type="text/javascript" src="./js/selectSymptom.js"></script>
</body>

</html>
