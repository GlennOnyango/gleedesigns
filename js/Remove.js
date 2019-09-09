$('#anchor_re').click(function () {
    $.post("http://localhost/Chiri_Man/php/Remove.php",
        function (data, textStatus, jqXHR) {
            $('#remove_place').html(data);
        },

    );



});


