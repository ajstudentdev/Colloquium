
/* ----------- TEXT SLIDERS ------ */

$(function(){

/*highlight de eerste tabelrow bij het laden van de pagina */
$('#row1').addClass('focused');

var tabledivs = $('.clickable-row');
var i = 1;

/* verander de gefocuste tabelrow */
function stepTable() {
    if (i >= tabledivs.length)
        i = 0;
    $('.focused').removeClass('focused');
    $(tabledivs[i]).addClass('focused');
    i++;
}

/* verander de bedrijfsnaam */
$('.bedrijfsnaamcontainer .bedrijfsnaam:gt(0)').hide();
function stepBedrijfsnaam(){
    $('.bedrijfsnaam :first-child').fadeOut(1000).next('.bedrijfsnaam').fadeIn(1000)
    .end().appendTo('.bedrijfsnaamcontainer');
}

/* verander de tijd */
$('.tijdcontainer .tijd:gt(0)').hide();
function stepTijd(){
    $('.tijdcontainer :first-child').fadeOut(1000).next('.tijd').fadeIn(1000)
    .end().appendTo('.tijdcontainer');
}

/* verander de datum */
$('.datumcontainer .datum:gt(0)').hide();
function stepDatum(){
    $('.datumcontainer :first-child').fadeOut(1000).next('.datum').fadeIn(1000)
    .end().appendTo('.datumcontainer');
}

/* verander de locatie */
$('.locatiecontainer .locatie:gt(0)').hide();
function stepLocatie(){
    $('.locatiecontainer :first-child').fadeOut(1000).next('.locatie').fadeIn(1000)
    .end().appendTo('.locatiecontainer');
}

/* verander het type */
$('.typecontainer .type:gt(0)').hide();
function stepType(){
    $('.typecontainer :first-child').fadeOut(1000).next('.type').fadeIn(1000)
    .end().appendTo('.typecontainer');
}

/* verander de omschrijving */
$('.omschrijvingcontainer .omschrijving:gt(0)').hide();
function stepOmschrijving(){
    $('.omschrijvingcontainer :first-child').fadeOut(1000).next('.omschrijving').fadeIn(1000)
    .end().appendTo('.omschrijvingcontainer');
}

/* hoofdfunctie, haalt omschrijving op en start andere functies om content te wijzigen */
  $(function(){
    setInterval(function(){
      stepTable();
      stepBedrijfsnaam();
      stepTijd();
      stepDatum();
      stepLocatie();
      stepType();
      stepOmschrijving();
  }, 7000);
  });
});

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


 if ($(".menu-opened")[0]) {

    /*scroll uitschakelen */
    window.onscroll = function () { window.scrollTo(0, 0); };
}
else {
    /*scroll inschakelen*/
    window.onscroll = function() {};

}

  });

  $('.mask').click(function(){
      $('.sliding-navbar').toggleClass('sliding-navbar--open');
      $('.mask').fadeToggle();
      $('.hamburger').toggleClass('menu-opened');
      window.onscroll = function() {};
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

/* weergeef aantal karakters textbox omschrijving */
$('#descriptionbox').keyup(updateCountdescriptionbox);
$('#descriptionbox').keydown(updateCountdescriptionbox);

function updateCountdescriptionbox() {
    var cs = $(this).val().length;
    $('#characters-description').text(cs);
}

/*limiteer invoer omschrijving */

let namedescriptionbox = document.getElementById('descriptionbox');

namedescriptionbox.addEventListener('keyup', () => {
		if (namedescriptionbox.value.length > 10) {
    		namedescriptionbox.value = namedescriptionbox.value.slice(0, 400);
    }
})


/* weergeef aantal karakters textbox title */
$('#titlebox').keyup(updateCounttitlebox);
$('#titlebox').keydown(updateCounttitlebox);

/*limiteer invoer title */

let nametitlebox = document.getElementById('titlebox');

nametitlebox.addEventListener('keyup', () => {
		if (nametitlebox.value.length > 10) {
    		nametitlebox.value = nametitlebox.value.slice(0, 40);
    }
})

function updateCounttitlebox() {
    var cs = $(this).val().length;
    $('#characters-title').text(cs);
}


/* weergeef aantal karakters textbox spreker */
$('#sprekerbox').keyup(updateCountsprekerbox);
$('#sprekerbox').keydown(updateCountsprekerbox);

/*limiteer invoer spreker */

let namesprekerbox = document.getElementById('sprekerbox');

namesprekerbox.addEventListener('keyup', () => {
		if (namesprekerbox.value.length > 10) {
    		namesprekerbox.value = namesprekerbox.value.slice(0, 40);
    }
})

function updateCountsprekerbox() {
    var cs = $(this).val().length;
    $('#characters-spreker').text(cs);
}

/* weergeef aantal karakters textbox locatie */
$('#locatiebox').keyup(updateCountlocatiebox);
$('#locatiebox').keydown(updateCountlocatiebox);

/*limiteer invoer locatie */

let namelocatiebox = document.getElementById('locatiebox');

namelocatiebox.addEventListener('keyup', () => {
		if (namelocatiebox.value.length > 10) {
    		namelocatiebox.value = namelocatiebox.value.slice(0, 40);
    }
})

function updateCountlocatiebox() {
    var cs = $(this).val().length;
    $('#characters-locatie').text(cs);
}


