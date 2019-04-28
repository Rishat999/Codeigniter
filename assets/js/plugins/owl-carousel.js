var OwlCarousel = function () {

    return {

        //Owl Carousel
        initOwlCarousel: function () {
	        //Owl Slider v1
			var owl = jQuery(".owl-slider").owlCarousel({
                itemsDesktop : [1000,5],
                itemsDesktopSmall : [900,4],
                itemsTablet: [600,3],
                itemsMobile : [479,2],
            });
            jQuery(".next-v1").click(function(){
                owl.trigger('owl.next');
            })
            jQuery(".prev-v1").click(function(){
                owl.trigger('owl.prev');
            })


	        //Owl Slider v2
			var owl1 = jQuery(".owl-slider-v2").owlCarousel({
                itemsDesktop : [1000,5],
                itemsDesktopSmall : [900,4],
                itemsTablet: [600,3],
                itemsMobile : [479,2],
                slideSpeed: 1000
            });
            jQuery(".next-v2").click(function(){
                owl1.trigger('owl.next');
            })
            jQuery(".prev-v2").click(function(){
                owl1.trigger('owl.prev');
            })


	        //Owl Slider v3
			jQuery(".owl-slider-v3").owlCarousel({
            	items : 7,
            	autoPlay : 5000,
				itemsDesktop : [1000,5],
				itemsDesktopSmall : [900,4],
				itemsTablet: [600,3],
				itemsMobile : [300,2]
            });


	        //Owl Slider v4
			jQuery(".owl-slider-v4").owlCarousel({
                items:3,
                itemsDesktop : [1000,3],
                itemsTablet : [600,2],
                itemsMobile : [479,1]
            });


            //Owl Slider v5
            jQuery(document).ready(function() {
            var owl = jQuery(".owl-slider-v5");
                owl.owlCarousel({
                    items:1,
                    itemsDesktop : [1000,1],
                    itemsDesktopSmall : [900,1],
                    itemsTablet: [600,1],
                    itemsMobile : [479,1]
                });
            });


            //Owl Slider v6
            jQuery(document).ready(function() {
            var owl = jQuery(".owl-slider-v6");
                owl.owlCarousel({
                    items:5,
                    itemsDesktop : [1000,4],
                    itemsDesktopSmall : [979,3],
                    itemsTablet: [600,2],
                });
            });

            /*latest dogs carousel*/
            $('#latest_dogs').owlCarousel({
                navigation : true,
                autoPlay : 2000,
                loop:true,
                pagination: true,
                margin:10,                
                items : 3, //10 items above 1000px browser width
                  itemsDesktop : [1000,4], //5 items between 1000px and 901px
                  itemsDesktopSmall : [900,3], // betweem 900px and 601px
                  itemsTablet: [600,2], //2 items between 600 and 0
                  itemsMobile : false 
            })

            //Owl Twitter v1
            jQuery(".owl-twitter-v1").owlCarousel({
                singleItem : true,
                slideSpeed : 1000,
                autoPlay : 10000,
            });


            //Owl Testimonials v1
            jQuery(".owl-ts-v1").owlCarousel({
                slideSpeed : 600,
                singleItem : true,
                navigation : true,
                navigationText : ["",""],
            });


            //Owl Clients v1
            jQuery(".owl-clients-v1").owlCarousel({
                items : 7,
                autoPlay : 5000,
                itemsDesktop : [1000,5],
                itemsDesktopSmall : [900,4],
                itemsTablet: [600,3],
                itemsMobile : [300,2]
            });


            //Owl Clients v2
            jQuery(".owl-clients-v2").owlCarousel({
                items : 5,
                autoPlay : 10000,
                itemsDesktop : [1000,5],
                itemsDesktopSmall : [900,4],
                itemsTablet: [600,3],
                itemsMobile : [300,2]
            });


            //Owl Video
            jQuery(".owl-video").owlCarousel({
                items : 1,
                itemsDesktop : [1000,1],
                itemsDesktopSmall : [900,1],
                itemsTablet: [600,1],
                itemsMobile : [300,1]
            });
		}

    };

}();
