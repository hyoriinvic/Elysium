// AJAX를 이용해 서버에 '환자 개인 정보'를 저장
function patientData() {
    var patientInfo = $("#register").serialize();

    console.log(patientInfo);
    return patientInfo;
}

function AjaxCall(method) {
    var action = $('#login').attr('action');

    $.ajax({
        type: method,
        url: action,
        data: patientData(),
        success: function (response) {
            alert("Success");
            // php POST 전달값 확인
            echo('<pre>'); print_r($_POST); echo('</pre>');
        },
        error: function () {
            $('#msg').html('<h2>error</h2>');
        }
    });
}

