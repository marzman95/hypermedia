// A $( document ).ready() block.
$( document ).ready(function() {
  var fixmeTop = $('#fixedmenu').offset().top;
  $(window).scroll(function() {
    var currentScroll = $(window).scrollTop();
    if (currentScroll >= fixmeTop) {
        $('#fixedmenu').css({
            'position' : 'fixed',
            'top' : '0px',
          });
          $('#fixedcontent').css({'left' : '380px'});


        } else {
          $('#fixedmenu').css({
            position: 'static',
          });
          $('#fixedcontent').css({'left' : '0px'});
  }
});

});
