$('document').ready(function () {

    $('#portfolio').click(function () {
        $('#home_page').addClass("hide");
        $('#display_page').removeClass("hiddendiv");

    });

    $('#dd2').click(function () {
        $('#home_page').removeClass("hide");
        $('#display_page').addClass("hiddendiv");
    });

    $('#back_home_page_mb').click(function () {
        $('#home_page').removeClass("hide");
        $('#display_page').addClass("hiddendiv");
    });

    $('#add_div').removeClass('hide');
    $('#anchor_add').click(function () {
        $('#add_div').removeClass('hide');
        $('#remove_div').addClass('hide');
        $('#full_disp_div').addClass('hide');
        $('#logout_div').addClass('hide');
    });
    $('#anchor_re').click(function () {
        $('#add_div').addClass('hide');
        $('#remove_div').removeClass('hide');
        $('#full_disp_div').addClass('hide');
        $('#logout_div').addClass('hide');
    });
    $('#anchor_fd').click(function () {
        $('#add_div').addClass('hide');
        $('#remove_div').addClass('hide');
        $('#full_disp_div').removeClass('hide');
        $('#logout_div').addClass('hide');
    });
    $('#anchor_log').click(function () {
        $('#add_div').addClass('hide');
        $('#remove_div').addClass('hide');
        $('#full_disp_div').addClass('hide');
        $('#logout_div').removeClass('hide');
    });

});