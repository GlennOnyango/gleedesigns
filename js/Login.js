$('document').ready(function () {
   $('#btn_login').click(function () {
      let user = $('#username').val();
      let pass = $('#password').val();

      if (user === null || pass === null) {
         $('#notify').text('There is an Empty field');

      }
      else {
         $.post('http://localhost/Chiri_Man/php/Login.php', { username: user, password: pass }, function (data) {


            if (data != 'Invalid entry') {
               window.location.assign(data);
            } else if (data == 'Invalid entry') {
               $("#notify").text('Invalid entry');
            }
         });
      }

   });


   $('#Add_user').click(function () {
      let user = $('#username0').val();
      let pass = $('#password0').val();
      let conpass = $('#confirm_password0').val();

      if (user == "" || pass == "" || conpass == "") {
         $('#reciever').text("There is an empty field");
         setTimeout(function () { $('#reciever').text("") }, 2000);
      } else if (pass == conpass) {
         $.post('http://localhost/Chiri_Man/php/Login.php', { username0: user, password0: pass }, function (data) {
            if (data = 'Saved') {
               $('#reciever').text("User Added");
               setTimeout(function () { $('#reciever').text("") }, 2000);
               $('#username0').val('');
               $('#password0').val('');
               $('#confirm_password0').val('');
            } else {
               $('#reciever').text(data);
               setTimeout(function () { $('#reciever').text("") }, 2000);
               $('#username0').val();
               $('#password0').val('');
               $('#confirm_password0').val('');
            }
         });
      }
      else {
         $('#confirm_password0').val("");
      }
   });

   $('#change_user').click(function () {
      let user = $('#username1').val();
      let pass = $('#password1').val();
      let conpass = $('#confirm_password1').val();


      if (user == "" || pass == "" || conpass == "") {
         $('#change_user1').text("There is an empty field");
         setTimeout(function () { $('#change_user1').text("") }, 2000);
      } else if (pass == conpass) {
         $('#change_user1').text("Your old password can not much your new password");
         setTimeout(function () { $('#change_user1').text("") }, 2000);
      } else {

         $.post('http://localhost/Chiri_Man/php/Login.php', { username1: user, password1: pass, newpass: conpass }, function (data) {

            $('#change_user1').text(data);
            setTimeout(function () { $('#change_user1').text("") }, 3000);
         });


      }


   });

});