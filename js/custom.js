$(document).ready(function(){
  var url      = window.location.href;
  var ur = url.split("index.php");
  var hostname = $('<a>').prop('href', url).prop('hostname');
  $('#loginbtn').click(function(event){
    event.preventDefault();
    $.ajax({
      url: "/testapp/index.php/glogin/Loga",
      success: function(result){
      $("#loginbody").html(result);
      console.log(result);
    }});


  });

  // signup form ajax
  $('#signbtn').click(function(event){
    event.preventDefault();
    $.ajax({
      url: "/testapp/index.php/gtest/View",
      success: function(result){
      $("#signbody").html(result);
      console.log(result);
    }});
  });

$('body').on('blur','#gtable-form input',function(e){
//  alert($(this).val());
e.preventDefault();
var regex = /^[a-zA-Z ]*$/;
var emailRegex = /^[a-z]+@[a-z0-9-]+\.[a-z0-9-.]+$/;
var trimStr = $.trim($(this).val());
//alert('nn'+trimStr+'hh');
  if(trimStr == "" || $(this).val().length > 20 )
  {
  $(this).parent().find('.jerror').html('Please fill valid information.');
  }
  else {
    $(this).parent().find('.jerror').html('');
  }
  if($(this).attr('type') != 'email' && regex.test(trimStr) == false)
  {
    $(this).parent().find('.jerror').html('Please enter characters only.');
  }
  if($(this).attr('type') == 'email' && emailRegex.test(trimStr) == false)
  {
    $(this).parent().parent().find('#sb').css('pointer-events','none');
    $(this).parent().find('.jerror').html('Please enter valid email address.');

  }
  else {
    $(this).parent().parent().find('#sb').css('pointer-events','');
  }
});

$('body').on('blur','#gtest-form input',function(e){

  var regex = /^[a-zA-Z ]*$/;
   var emailRegex = /^[a-z]+@[a-z0-9-]+\.[a-z0-9-.]+$/;
  var trimStr = $.trim($(this).val());
  if(trimStr == "" || $(this).val().length > 11 )
  {
    //alert('Please fill valid information.');
  $(this).parent().find('.jerror').html('Please fill valid information.');
  }
  else {
    $(this).parent().find('.jerror').html('');
  }

  if($(this).attr('type') != 'email' && regex.test(trimStr) == false)
  {
    $(this).parent().find('.jerror').html('Please enter characters only.');
  }

});

$('body').on('blur','#glogin-form input',function(e){
//  alert($(this).val());
var regex = /^[a-zA-Z ]*$/;
var emailRegex = /^[a-z]+@[a-z0-9-]+\.[a-z0-9-.]+$/;
var trimStr = $.trim($(this).val());
//alert('nn'+trimStr+'hh');
  if($(this).attr('type') != 'email' && regex.test(trimStr) == false)
  {
    $(this).parent().find('.jerror').html('Please enter characters only.');
  }
  else {
    $(this).parent().find('.jerror').html('');
  }
  if($(this).attr('type') == 'email' && emailRegex.test(trimStr) == false)
  {
    $(this).parent().parent().find('#sb').css('pointer-events','none');
    $(this).parent().find('.jerror').html('Please enter valid email address.');
  }
  else {
    $(this).parent().parent().find('#sb').css('pointer-events','');
  }
});

//query message Form
$('#msgSub').click(function(event){
  event.preventDefault();
  $.ajax({
    url: "/testapp/index.php/glogin/Msg",
    method: 'post',
    data: $("#Gmsg").serialize(),
    success: function(result){
    $("#frmsucs").html(result);
    $('#msgSub input').val("");
    console.log(result);
  }});


});


});
