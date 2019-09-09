$(document).ready(function () {

  $("#dc_gd").click(function (e) {
    send($(this).text());
  });
  $("#dc_mg").click(function (e) {
    send($(this).text());
  });
  $("#dc_a").click(function (e) {
    send($(this).text());
  });
  $("#dc_ve").click(function (e) {
    send($(this).text());
  
  });
  $("#dc_pd").click(function (e) {
    send($(this).text());
  });
  $("#dc_vi").click(function (e) {
    send($(this).text());
    });

  $("#dc_all").click(function (e) {
    all($(this).text());
  });
  $("#dc_sf").click(function(){
    send($(this).text());
    //$('#pic_site').addClass("container");
    $('#pic_site').addClass("center");
   
  });

  //mobile
  $("#mb_gd").click(function (e) {
    send($(this).text());
   
  });
  $("#mb_mg").click(function (e) {
    send($(this).text());
    
  });
  $("#mb_a").click(function (e) {
    send($(this).text());
    
    
  });
  $("#mb_ve").click(function (e) {
    send($(this).text());
  });
  $("#mb_pd").click(function (e) {
    send($(this).text());
  });
  $("#mb_vi").click(function (e) {
    send($(this).text());
     });

  $("#mb_all").click(function (e) {
    all($(this).text());
  });
    function send(sel_option) {
    $.post('http://localhost/Chiri_Man/php/Select_option.php', { option: sel_option }, function (data) {
      $('#pic_site').html(data);
    });
  }
  function all(sel_option) {
    $.post('http://localhost/Chiri_Man/php/Select_option.php', { all_options: sel_option }, function (data) {
      $('#pic_site').html(data);
    });
  } 
  });