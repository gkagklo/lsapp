$(".btn-refresh").click(function () {
    $.ajax({
        type: 'GET',
        url: '/refresh_captcha',
        success: function success(data) {
            $(".captcha span").html(data.captcha);
        }
    });
});