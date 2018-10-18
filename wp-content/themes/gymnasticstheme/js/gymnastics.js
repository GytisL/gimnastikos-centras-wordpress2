//javascript functions
//$.noConflict(); //jquery $ sign doesn't conflict with other javascript functions

/*vertical mousewheel smooth scrolling START
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


/*swiper slides gallery START*/
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

/*swiper slides gallery START*/
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
/*swiper slides gallery END*/


/*
 $(function(){//Remove inline css of an HTML elements
    $('* [style]').removeAttr('style');
 });
*/


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

    /*
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
      that.find('.loader').css('display','block');
        
        
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
        that.find('.button-text').text('Rodyti daugiau').slideUp(320);
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


/*page-event-gallery.php multiple carousel START*/
$('#carouselExample').on('slide.bs.carousel', function (e) {

  
    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 4;
    var totalItems = $('.picture-item').length;
    
    if (idx >= totalItems-(itemsPerSlide-1)) {
        var it = itemsPerSlide - (totalItems - idx);
        for (var i=0; i<it; i++) {
            // append slides to end
            if (e.direction=="left") {
                $('.picture-item').eq(i).appendTo('.picture-list');
            }
            else {
                $('.picture-item').eq(0).appendTo('.picture-list');
            }
        }
    }
});


  $('#carouselExample').carousel({ 
                interval: 3000
        });


  $(document).ready(function() {
/* show lightbox when clicking a thumbnail */
    $('a.thumb').click(function(event){
      event.preventDefault();
      var content = $('.modal-body');
      content.empty();
        var title = $(this).attr("title");
        $('.modal-title').html(title);        
        content.html($(this).html());
        $(".modal-profile").modal({show:true});
    });

  });
/*page-event-gallery.php multiple carousel END*/


/*page-trainer.php show/hide button START*/

const toggler = (() => {
  const dataAttr = "data-toggler";

  // Get height of an element object
  // Assumes it is hidden by max-height: 0 in the CSS
  const getHeight = (obj) => {
    obj.setAttribute("style", "max-height: auto");
    const height = obj.scrollHeight + "px";
    obj.removeAttribute("style");
    return height;
  };
  
  // Toggles the show/hide state of button and block using ARIA attributes
  const toggleState = (togglerBtn, isHidden) => {
  
    const toggledAttr = togglerBtn.getAttribute(dataAttr);
    if (!toggledAttr) {return;}
    
    const toggled = document.querySelector(toggledAttr);
    if (!toggled) {return;}

    if (isHidden) { // Show
      //toggled.setAttribute("style", "max-height: " + getHeight(toggled));
      toggled.setAttribute('style', 'max-height:' + toggled.scrollHeight + 'px');
    } else { // Hide
      //toggled.removeAttribute("style");
    }

    togglerBtn.setAttribute("aria-expanded", isHidden);
    toggled.setAttribute("aria-hidden", !isHidden);
  };
  

  const isOpen = (togglerBtn) => {
    return togglerBtn.getAttribute("aria-expanded") === "true";
  };
  

  const togglerClicked = (e) => {
    const togglerBtn = e.target;
    toggleState(togglerBtn, !isOpen(togglerBtn));
  };
  

  const initialise = (() => {

    const togglerButtons = document.querySelectorAll("["+ dataAttr + "]");

    // Run through each toggle button which has a data-toggler3 set
    for (const togglerBtn of togglerButtons) {
      
      // Set ARIA states
      toggleState(togglerBtn, isOpen(togglerBtn));

      // Toggle ARIA state on a button click
      togglerBtn.addEventListener("click", togglerClicked);
    }
  })();
  
})();
/*page-trainer.php show/hide button END*/


/*footer.php back to top button START*/
var btn = $('#ButtonToTop');

$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '300');
});
/*footer.php back to top button END*/