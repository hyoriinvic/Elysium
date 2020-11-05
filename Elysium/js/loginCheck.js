function check_login() {
    $.ajax({
        type: 'POST',
        url: 'php/login.php',
        data: "username=" + $('#username').val() + "&password=" + $('#password').val()
    })
}