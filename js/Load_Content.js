$(document).ready(function () {
    $('#portfolio').click(function () {
        $.ajax({
            type: 'GET',
            url: 'http://localhost/Chiri_Man/php/Load_Content.php',
            dataType: 'html',
            success: function (data) {
                $('#pic_site').html(data);

            }


        });


    });




});
