$(document).load(function(){ /*code here*/

  $(document).ready(function(){
    //TODO
    $('a#login').bind('click', function(){
      $('input').addClass('warning')
      $('.message').slideDown('slow');
    });
  });
})
