//javascript functions
//$.noConflict(); //jquery $ sign doesn't conflict with other javascript functions


/*Smooth Scrolling Effect START*/

// jQuery(document).ready(function($){ 
//   $(window).scroll(function(){ 
//     if ($(this).scrollTop() < 200) { 
//       $('#feature-one') .fadeOut(); } 
//     else { $('#feature-one') .fadeIn(); } }); 
//   $('#feature-one').on('click', function(){ 
//     $('html, body').animate({scrollTop:0}, 'fast');
//      return false; }); });

/*Smooth Scrolling Effect END*/




/*Smooth Scrolling Effect START*/


  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
          behavior: 'smooth'
        });
    });
  });




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

jQuery(document).ready(function($){
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



/* Ajax functions page-events.php START */


 /*Ajax functions 
jQuery(document).ready( function($){
  $(document).on('click','.gymnastics-load-more', function(){
    
    var that = $(this);
    var page = $(this).data('page');
    var newPage = page+1;
    var ajaxurl = that.data('url');
    
    $.ajax({
      
      url : ajaxurl,
      type : 'post',
      data : {
        
        page : page,
        action: 'gymnastics_load_more'
        
      },
      error : function( response ){
        console.log(response);
      },
      success : function( response ){
        
        that.data('page', newPage);
        $('.gymnastics-posts-container').append( response );

      }
      
    });
    
  });

});*/



//jQuery.noConflict($);
/* Ajax functions */
$(document).ready(function() {
    //onclick
    $(".gymnastics-load-more").on('click', function(e) {
        //init
        var that = $(this);
        var page = $(this).data('page');
        var newPage = page + 1;
        var ajaxurl = that.data('url');
        //ajax call
        $.ajax({
            url: ajaxurl,
            type: 'post',
            data: {
                page: page,
                action: 'ajax_script_load_more'
 
            },
            error: function(response) {
                console.log(response);
            },
            success: function(response) {
                //check
                if (response == 0) {
                    $('#gymnastics-posts').append('<div class="text-center"><h3>You reached the end of the line!</h3><p>No more posts to load.</p></div>');
                    //mygtukas. Nemeta posto.
                    $('.gymnastics-load-more').hide();
                } else {
                    that.data('page', newPage);
                    $('#gymnastics-posts').append(response);
                }
            }
        });
    });
});



/* Ajax functions page-events.php END */


