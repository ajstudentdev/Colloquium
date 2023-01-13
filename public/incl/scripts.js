/* ----------- TEXT SLIDERS ------ */


if (window.location.pathname == '/') {

   $(function () {

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

      /* verander de tijd */
      $('.tijdcontainer .tijd:gt(0)').hide();

      function stepTijd() {
         $('.tijdcontainer :first-child').fadeOut(1000).next('.tijd').fadeIn(1000)
            .end().appendTo('.tijdcontainer');
      }

      /* verander de datum */
      $('.datumcontainer .datum:gt(0)').hide();

      function stepDatum() {
         $('.datumcontainer :first-child').fadeOut(1000).next('.datum').fadeIn(1000)
            .end().appendTo('.datumcontainer');
      }

      /* verander de locatie */
      $('.locatiecontainer .locatie:gt(0)').hide();

      function stepLocatie() {
         $('.locatiecontainer :first-child').fadeOut(1000).next('.locatie').fadeIn(1000)
            .end().appendTo('.locatiecontainer');
      }

      /* verander het type */
      $('.typecontainer .type:gt(0)').hide();

      function stepType() {
         $('.typecontainer :first-child').fadeOut(1000).next('.type').fadeIn(1000)
            .end().appendTo('.typecontainer');
      }

      /* verander de omschrijving */
      $('.omschrijvingcontainer .omschrijving:gt(0)').hide();

      function stepOmschrijving() {
         $('.omschrijvingcontainer :first-child').fadeOut(1000).next('.omschrijving').fadeIn(1000)
            .end().appendTo('.omschrijvingcontainer');
      }

      /* verander de bedrijf */
      $('.bedrijfcontainer .bedrijf:gt(0)').hide();

      function stepBedrijf() {
         $('.bedrijfcontainer :first-child').fadeOut(1000).next('.bedrijf').fadeIn(1000)
            .end().appendTo('.bedrijfcontainer');
      }

      /* verander de avatar */
      $('.avatar-img .avatar:gt(0)').hide();

      function stepAvatar() {
         $('.avatar-img :first-child').fadeOut(1000).next('.avatar').fadeIn(1000)
            .end().appendTo('.avatar-img');
      }

      /* verander de logo-bedrijf */
      $('.logo-bedrijf-img .logo-bedrijf:gt(0)').hide();

      function stepLogobedrijf() {
         $('.logo-bedrijf-img :first-child').fadeOut(1000).next('.logo-bedrijf').fadeIn(1000)
            .end().appendTo('.logo-bedrijf-img');
      }

      /* verander de title */
      $('.titlecontainer .title:gt(0)').hide();

      function stepTitle() {
         $('.titlecontainer :first-child').fadeOut(1000).next('.title').fadeIn(1000)
            .end().appendTo('.titlecontainer');
      }

      /* hoofdfunctie, start andere functies om content te wijzigen */
      $(function () {
         setInterval(function () {
            stepTable();
            stepBedrijf();
            stepTijd();
            stepDatum();
            stepLocatie();
            stepType();
            stepOmschrijving();
            stepTitle();
            stepAvatar();
            stepLogobedrijf();
         }, 7000);
      });
   });

}

/* -----loginform ------ */

if (window.location.pathname == '/login') {

   $('.registerlink a').click(function () {
      $('.login-form').animate({
         height: "toggle",
         opacity: "toggle"
      }, "slow");
      $('.register-form').animate({
         height: "toggle",
         opacity: "toggle"
      }, "slow");
   });

   $('.forgotpass a').click(function () {
      $('.login-form').animate({
         height: "toggle",
         opacity: "toggle"
      }, "slow");
      $('.forgotpass-form').animate({
         height: "toggle",
         opacity: "toggle"
      }, "slow");
   });

   $('.forgotpass-form .login a').click(function () {
      $('.forgotpass-form').animate({
         height: "toggle",
         opacity: "toggle"
      }, "slow");
      $('.login-form').animate({
         height: "toggle",
         opacity: "toggle"
      }, "slow");
   });

   $('.register-form .login a').click(function () {
      $('.register-form').animate({
         height: "toggle",
         opacity: "toggle"
      }, "slow");
      $('.login-form').animate({
         height: "toggle",
         opacity: "toggle"
      }, "slow");
   });

}

/* -------- menu -------- */

$(function () {
   $('.hamburger-menu').click(function () {
      $('.sliding-navbar').toggleClass('sliding-navbar--open');
      $('.mask').fadeToggle();
      $('.hamburger').toggleClass('menu-opened');


      if ($(".menu-opened")[0]) {

         /*scroll uitschakelen */
         window.onscroll = function () {
            window.scrollTo(0, 0);
         };
      } else {
         /*scroll inschakelen*/
         window.onscroll = function () {};

      }

   });

   $('.mask').click(function () {
      $('.sliding-navbar').toggleClass('sliding-navbar--open');
      $('.mask').fadeToggle();
      $('.hamburger').toggleClass('menu-opened');
      window.onscroll = function () {};
   })

});


/* ----- tabelrow aanklikbaar */

if (window.location.pathname == '/') {

   jQuery(document).ready(function ($) {
      $(".clickable-row").click(function () {
         window.location = $(this).data("href");
      });
   });

}


/* ----- modal ------ */

//if(window.location.pathname == '/') {

// jQuery(function ($) {
//  $('#basic-modal .basic1').click(function (e) {
// var id =  e.currentTarget.dataset.id;


//console.log(id);
//  let url = "{{ route('readsessie', ':id') }}";


// url = url.replace(':id', id);

//  console.log(url);
// document.location.href=url;

//$('#basic-modal-content1').modal();

//      return false;
//   });
//  });
// }


/* ------- FORM LIMIT TEXT  ---------- */


if (window.location.pathname == '/manage' || '/edit') {


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
         namedescriptionbox.value = namedescriptionbox.value.slice(0, 399);
      }
   })


   /* weergeef aantal karakters textbox title */
   $('#titlebox').keyup(updateCounttitlebox);
   $('#titlebox').keydown(updateCounttitlebox);

   /*limiteer invoer title */

   let nametitlebox = document.getElementById('titlebox');

   nametitlebox.addEventListener('keyup', () => {
      if (nametitlebox.value.length > 10) {
         nametitlebox.value = nametitlebox.value.slice(0, 39);
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
         namesprekerbox.value = namesprekerbox.value.slice(0, 39);
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
         namelocatiebox.value = namelocatiebox.value.slice(0, 39);
      }
   })

   function updateCountlocatiebox() {
      var cs = $(this).val().length;
      $('#characters-locatie').text(cs);
   }


   /* weergeef aantal karakters textbox bedrijfsnaam */
   $('#bedrijfsnaambox').keyup(updateCountbedrijfsnaambox);
   $('#bedrijfsnaambox').keydown(updateCountbedrijfsnaambox);

   /*limiteer invoer bedrijfsnaam */

   let namebedrijfsnaambox = document.getElementById('bedrijfsnaambox');

   namebedrijfsnaambox.addEventListener('keyup', () => {
      if (namebedrijfsnaambox.value.length > 10) {
         namebedrijfsnaambox.value = namebedrijfsnaambox.value.slice(0, 39);
      }
   })

   function updateCountbedrijfsnaambox() {
      var cs = $(this).val().length;
      $('#characters-bedrijfsnaam').text(cs);
   }


}
