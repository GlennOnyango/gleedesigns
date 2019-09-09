$(document).ready(function () {

/*Any changes on notification to be made here*/
    $('#store').click(function () {
        $.get("http://localhost/Chiri_Man/php/Upload.php", function (data, status) {
            $('#notification_for_update').text('Status :    ' + status);
            if (status == 'success') {
                $('#name').val(''); $('#type_of_work').val(''); $('#text_file').val('');
                setTimeout($('#notification_for_update').hide('slow'), 10000);
            }

        });
    });




});