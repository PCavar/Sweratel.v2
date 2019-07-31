$(document).ready(function() {

  // Hamburger menu for mobile
    $('.ui.sidebar').sidebar({
        context: $('.ui.pushable.segment'),
        transition: 'overlay',
        dimPage: false,
        closable: false
    }).sidebar('attach events', '#mobile_item');

    // Smooth scroll to section on click
    function scrollNav() {
        $('.right.menu a').click(function(){  
          //Toggle Class
          $(".active").removeClass("active");      
          $(this).closest('a').addClass("active");
          var theClass = $(this).attr("class");
          $('.'+theClass).parent('a').addClass('active');
          //Animate
          $('html, body').stop().animate({
              scrollTop: $( $(this).attr('href') ).offset().top - 60
          }, 800);
          return false;
        });
        $('.scrollTop a').scrollTop();
      }
      scrollNav();

      $('.special.cards .image').dimmer({
        on: 'hover'
      });
      

      // Form activate/disable button
        $('.field input').keyup(function() {
      
          var empty = false;
          $('.field input').each(function() {
              if ($(this).val().length == 0) {
                  empty = true;
              }
          });
      
          if (empty) {
              $('.actions input').attr('disabled', 'disabled');
          } else {
              $('.actions input').removeAttr('disabled');
          }
        });

        $( ".bigger-image-1" ).click(function() {
          $('.modal-1')
          .modal('show')
          ;
        });

        $( ".bigger-image-2" ).click(function() {
          $('.modal-2')
          .modal('show')
          ;
        });


    


});
