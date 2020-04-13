//Comentarios;
$(document).ready(function() {
    $("#submitComment").click(function() {
        var name = $("input#name").val();
        var comment = $("textarea#comment").val();
        var now = new Date();
        var date_show = now.getDate() + '-' + now.getMonth() + '-' + now.getFullYear() + ' ' + now.getHours() + ':' + + now.getMinutes() + ':' + + now.getSeconds();
 
        if (name === '') {
            alert('Debes añadir un nombre.');
            return false;
        }
 
        if (comment === '') {
            alert('Debes añadir un comentario.');
            return false;
        }
 
        var dataString = 'name=' + name + '&comment=' + comment;
 
        $.ajax({
            type: "POST",
            dataType: "json",
            url: "process.php",
            data: dataString,
            success: function(response) {
                if (response) {
                    $('#new-comment').show();
                    $('#new-comment').find('#author-name').text(response.name);
                    $('#new-comment').find('.comment-text').text(response.comment);
                    $('#new-comment').find('#date-show').text(response.date_show);
                }
            }
        });
        return false;
    });
});

$(document).ready(function() {
 
	var owl = $("#header-slider");

	owl.owlCarousel({
		singleItem : true,
		navigation : true,
		navigationText : ["<i class='ion-ios-arrow-thin-left'></i>","<i class='ion-ios-arrow-thin-right'></i>"],
		transitionStyle : "fade",
		pagination: true,
	});

	$("#Client_Logo").owlCarousel({
		autoPlay : 5000,
	    items : 6,
	    responsiveClass:true,
	    responsive: {
            0:{
                items : 1
            },
            480:{
                items : 1
            },
            768:{
                items : 3
            },
            1200:{
                items: 3
            }
        }
	});

    $("#blog-post").owlCarousel({
        autoPlay : 5000,
        items : 3,
        responsiveClass:true,
        responsive: {
            0:{
                items : 1
            },
            480:{
                items : 1
            },
            768:{
                items : 3
            },
            1200:{
                items: 3
            }
        }
    });


	$(function(){
	    $('#mixed-items').mixItUp();
	});


	new WOW().init();

	// DOM Content Load Event Actions;
	$( window ).load(function() {
		$('div#loading').remove();
		$('body').removeClass('loading');
	});


     $('.menu').onePageNav({
         currentClass: 'active',
         changeHash: true,
         scrollSpeed: 1200,
         top : 0
    });

    $('.counter').counterUp({
        delay: 10,
        time: 2000
    });





	  $('.carousel').carousel();


    /**
     * Google Map
     */
    if ( $('#googleMap').length ) {
        var mapProp = {
            center: new google.maps.LatLng(51.508742,-0.120850),
            zoom:9,
    scrollwheel: false,
    navigationControl: false,
    mapTypeControl: false,
    scaleControl: false,
    draggable: false,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById('googleMap'), mapProp);
    }



	/**
     * Google Map
     */
    if ( $('#googleMap').length ) {
        var mapProp = {
            center: new google.maps.LatLng(41.878114, -87.629798),
            zoom:9,
            scrollwheel: false,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById('googleMap'), mapProp);
    }

    // Animated Scrolling
    (function(){
        var topoffset = 0;
          $('#scroll').click(function() {
            if (location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') && location.hostname === this.hostname) {
              var target = $(this.hash);
              target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
              if (target.length) {
                $('html,body').animate({
                  scrollTop: target.offset().top-topoffset
                }, 1000);
                return false;
              } // target.length
            } //location hostname
          }); //on click

          $.scrollUp({
            scrollDistance: 2000,
            scrollSpeed: 1200,
          });
      }())
 


});
