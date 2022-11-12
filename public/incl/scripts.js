

/* -----loginform ------ */

$('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});


/* -------- menu -------- */

$(function(){
  $('.hamburger-menu').click(function(){
      $('.sliding-navbar').toggleClass('sliding-navbar--open');
      $('.mask').fadeToggle();
      $('.hamburger').toggleClass('menu-opened');
  });

  $('.mask').click(function(){
      $('.sliding-navbar').toggleClass('sliding-navbar--open');
      $('.mask').fadeToggle();
      $('.hamburger').toggleClass('menu-opened');
  })
});


/* ----- tabelrow aanklikbaar */


jQuery(document).ready(function($) {
    $(".clickable-row").click(function() {
        window.location = $(this).data("href");
    });
});


/* ----- modal ------ */



jQuery(function ($) {
  $('#basic-modal .basic1').click(function (e) {		$('#basic-modal-content1').modal();
      return false;
  });
});
jQuery(function ($) {
  $('#basic-modal .basic2').click(function (e) {		$('#basic-modal-content2').modal();
    return false;
  });
});
jQuery(function ($) {
  $('#basic-modal .basic3').click(function (e) {		$('#basic-modal-content3').modal();
    return false;
  });
});
jQuery(function ($) {
  $('#basic-modal .basic4').click(function (e) {		$('#basic-modal-content4').modal();
    return false;
  });
});
jQuery(function ($) {
  $('#basic-modal .basic5').click(function (e) {		$('#basic-modal-content5').modal();
    return false;
  });
});



/* ------- FORM LIMIT TEXT  ---------- */

/* weergeef aantal karakters textbox */
$('#descriptionbox').keyup(updateCount);
$('#descriptionbox').keydown(updateCount);

function updateCount() {
    var cs = $(this).val().length;
    $('#characters').text(cs);
}

/*limiteer invoer */

let name = document.getElementById('descriptionbox');

name.addEventListener('keyup', () => {
		if (name.value.length > 10) {
    		name.value = name.value.slice(0, 400);
    }
})
