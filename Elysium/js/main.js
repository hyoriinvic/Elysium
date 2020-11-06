$(document).ready(function () {
    $('#submitInfo').click(function () {
        var action = $('#login').attr('action');
        var form_data = {
            patientName: $("#patientName").val(),
            patientPhone: $("#patientPhone").val()
        };
        $.ajax({
            type: 'POST',
            url: action,
            data: form_data,
            success: function (response) {
                if (response.trim() == 'success') {
                    sessionStorage.setItem('patientName', form_data.patientName);
                    $('#msg').html('<p>로그인성공!</p>')
                } else {
                    $('#msg').html('<p>로그인실패!</p>');
                }
            },
            error: function () {
                $('#msg').html('<h2>error</h2>');
            }
        });
    });
});