//javascript functions
//$.noConflict(); //jquery $ sign doesn't conflict with other javascript functions

/*vertical mousewheel smooth scrolling START*/
if (window.addEventListener) window.addEventListener('MouseScroll', wheel, false);
window.onmousewheel = document.onmousewheel = wheel;

function wheel(event) {
    var delta = 0;
    if (event.wheelDelta) delta = event.wheelDelta / 120;
    else if (event.detail) delta = -event.detail / 3;

    handle(delta);
    if (event.preventDefault) event.preventDefault();
    event.returnValue = false;
}

var goUp = true;
var end = null;
var interval = null;

function handle(delta) {
  var animationInterval = 5; //lower is faster
  var scrollSpeed = 10; //lower is faster

  if (end == null) {
    end = $(window).scrollTop();
  }
  end -= 20 * delta;
  goUp = delta > 0;

  if (interval == null) {
    interval = setInterval(function () {
      var scrollTop = $(window).scrollTop();
      var step = Math.round((end - scrollTop) / scrollSpeed);
      if (scrollTop <= 0 || 
          scrollTop >= $(window).prop("scrollHeight") - $(window).height() ||
          goUp && step > -1 || 
          !goUp && step < 1 ) {
        clearInterval(interval);
        interval = null;
        end = null;
      }
      $(window).scrollTop(scrollTop + step );
    }, animationInterval);
  }
}
// $.noConflict();
/*vertical mousewheel smooth scrolling END*/


/*Smooth Scrolling Effect START
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
          behavior: 'smooth'
        });
    });
  });*/ //SKROLINANT SOKINEJA
/*Smooth Scrolling Effect END*/


/*sipwer slides gallery START*/
// jQuery(document).ready(function($){
//   var swiper = new Swiper('.swiper-container', {
//     slidesPerView: 1,
//     spaceBetween: 0,
//     pagination: {
//       el: '.swiper-pagination',
//       clickable: true,
//     },
//     autoplay: {
//       delay: 3000,
//       disableOnInteraction: false,
//     },
//   });
// });

$(document).ready(function($){
var swiper = new Swiper('.swiper-container', {
      slidesPerView: 1,
      spaceBetween: 0,
      loop: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
});
/*sipwer slides gallery END*/


 $(function(){//Remove inline css of an HTML elements
    $('* [style]').removeAttr('style');
 });


/*grid row cards START*/
$(function() {
    var selectedClass = "";
    $(".filter").click(function(){
        selectedClass = $(this).attr("data-rel");
        $("#gallery").fadeTo(100, 0.1);
        $("#gallery div").not("."+selectedClass).fadeOut().removeClass('animation');
        setTimeout(function() {
            $("."+selectedClass).fadeIn().addClass('animation');
            $("#gallery").fadeTo(300, 1);
        }, 300);
    });
});

/* grid row cards END*/


/*index.html multi-gallery makes image bigger START

$('.pics').hover(function() {
    $(this).data('width', $(this).width());
    $(this).data('height', $(this).height());
    $(this).css({
        width: $(this).width() * 1.1,
        height: $(this).height() * 1.1
    });
}, function() {
    $(this).css({
        width: $(this).data('width'),
        height: $(this).data('height')
    });
});

/*index.html multi-gallery END*/


/*#id map GOOGLE MAPS START*/
function initMap() {
	var location = {lat: 54.892813, lng: 23.916402};
	var map = new google.maps.Map(document.getElementById("map"), {
		zoom: 17,
		center: location
	});
	
	var marker = new google.maps.Marker({ position: new google.maps.LatLng(54.892813, 23.916402), title: 'Gimnastikos centras', map:map});
	var marker = new google.maps.Marker();
		marker.setPosition(new google.maps.LatLng(54.892813, 23.916402));
		marker.setMap(map);
};
//*#id map GOOGLE MAPS END*/


/*page-gallery.php picture gallery START*/

let modalId = $('#image-gallery');

$(document)
  .ready(function () {

    loadGallery(true, 'a.thumbnail');

    //This function disables buttons when needed
    function disableButtons(counter_max, counter_current) {
      $('#show-previous-image, #show-next-image')
        .show();
      if (counter_max === counter_current) {
        $('#show-next-image')
          .hide();
      } else if (counter_current === 1) {
        $('#show-previous-image')
          .hide();
      }
    }

    /**
     *
     * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
     * @param setClickAttr  Sets the attribute for the click handler.
     */

    function loadGallery(setIDs, setClickAttr) {
      let current_image,
        selector,
        counter = 0;

      $('#show-next-image, #show-previous-image')
        .click(function () {
          if ($(this)
            .attr('id') === 'show-previous-image') {
            current_image--;
          } else {
            current_image++;
          }

          selector = $('[data-image-id="' + current_image + '"]');
          updateGallery(selector);
        });

      function updateGallery(selector) {
        let $sel = selector;
        current_image = $sel.data('image-id');
        $('#image-gallery-title')
          .text($sel.data('title'));
        $('#image-gallery-image')
          .attr('src', $sel.data('image'));
        disableButtons(counter, $sel.data('image-id'));
      }

      if (setIDs == true) {
        $('[data-image-id]')
          .each(function () {
            counter++;
            $(this)
              .attr('data-image-id', counter);
          });
      }
      $(setClickAttr)
        .on('click', function () {
          updateGallery($(this));
        });
    }
  });

// build key actions
$(document).keydown(function (e) {
    switch (e.which) {
      case 37: // left
        if ((modalId.data('bs.modal') || {})._isShown && $('#show-previous-image').is(":visible")) {
          $('#show-previous-image')
            .click();
        }
        break;

      case 39: // right
        if ((modalId.data('bs.modal') || {})._isShown && $('#show-next-image').is(":visible")) {
          $('#show-next-image')
            .click();
        }
        break;

      default:
        return; // exit this handler for other keys
    }
    e.preventDefault(); // prevent the default action (scroll / move caret)
  });


/*gallery.html picture gallery END*/



/* AJAX functions page-events.php START */


  $(".gymnastics-load-more:not(.loading)").on('click', function(){
    
    var that = $(this);
    var page = $(this).data('page');
    var newPage = page+1;
    var ajaxurl = that.data('url');


    var max_page = $(this).data('max-num-pages');
    that.addClass('loading');
      if(window.location.pathname == "/lksb/en/"){
          that.find('.button-text').text('Loading');
      }else{
          that.find('.button-text').text('Kraunama');
      }
      that.find('.fa-spinner').addClass("fa-spin");
      that.find('.loader').css('display','inline-block');
        

    
    $.ajax({
      
      url : ajaxurl,
      type : 'post',
      data : {
        
        page : page,
        action: 'load_more_articles_posts'
        
      },
      error : function( response ){
        console.log(response);
      },
      success : function( response ){
        
        that.data('page', newPage);
        $('#gymnastics-posts').append( response );


        that.removeClass('.loading');
        that.find('.fa-spinner').removeClass("fa-spin");
        that.find('.button-text').text('Rodyti daugiau');
        $('.load-more-block').addClass('news-article');
        console.log(newPage);
        var k = newPage - 1;
        if(max_page == k){
          that.find('.fa-spinner').css('display','none');
          that.css('display','none');
          that.find('.loader').css('display','none');
        }

        
      }
      
    });
    
  });


/* AJAX functions page-events.php END */


/*page-trainer.php show/hide button START*/

$(document).ready(function() {

      $("#change2").on('click', function() {
        var hide2 = $("#change2").text();

        if (hide2 == "Daugiau") {
          //Stuff to do when btn is in the read more state
          $("#change2").text("Mažiau");
          $("#text2").slideDown(900);
          //$(".button").animate({marginTop: '-29px'}, 1500);
        } else {
          //Stuff to do when btn is in the read less state
          $("#change2").text("Daugiau");
          $("#text2").slideUp(900);

          //$('.button').animate({marginTop: '-80px'}, 1500);
        }
      });

      $("#change").on('click', function() {
        var hide = $("#change").text();
        if (hide == "Daugiau") {
          //Stuff to do when btn is in the read more state
          $("#change").text("Mažiau");
          $("#text").slideDown(1000);
          //$(".button").animate({marginTop: '-29px'}, 1500);
        } else {
          //Stuff to do when btn is in the read less state
          $("#change").text("Daugiau");
          $("#text").slideUp(1000);
          //$('.button').animate({marginTop: '-80px'}, 1500);
        }
      });
});

/*page-trainer.php show/hide button END*/