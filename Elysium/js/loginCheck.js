function check_login() {
    $.ajax({
        type: 'POST',
        url: 'lib/login.php',
        data: "username=" + $('#username').val() + "&password=" + $('#password').val()