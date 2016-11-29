$(document).ready(function(){

    $('form').on('submit', function(e) {
        e.preventDefault();
        var email = $('#email').val();
        var password = $('#password').val();
        $.ajax({
            url : "user/login",
            type: "POST",
            data : {
                email:email,
                password: password
            },
            beforeSend: function(){
                $('#login_icon').removeClass();
                $('#login_icon').addClass('fa fa-spinner fa-spin');
            },
            success: function(data) {

                if(data.success) {
                    console.log(data);
                    location.replace('user/dashboard');
                }else {
                    window.location.replace('');
                }

            },
            error: function (data) {
                console.log(data);
            }
        });
    });


});