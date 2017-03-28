// A $( document ).ready() block.
$( document ).ready(function() {
  var fixmeTop = $('#fixedmenu').offset().top;
  $(window).scroll(function() {
    var currentScroll = $(window).scrollTop();
    if (currentScroll >= fixmeTop) {
        $('#fixedmenu').css({
            'position' : 'fixed',
            'width' : '20%',
            'top' : '0px',
            'left' : '-7%',

          });
          $('#fixedcontent').css({'left' : '0px'});
        } else {
          $('#fixedmenu').css({
            'position' : 'static',
            'width' : '90%',
          });
          $('#fixedcontent').css({'left' : '0px'});
  }
});

});
