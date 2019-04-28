/* Write here your custom javascript codes */
jQuery(document).ready(function() {
      App.init();
      App.initCounter();
      App.initParallaxBg();
      LoginForm.initLoginForm();
      ContactForm.initContactForm();
      OwlCarousel.initOwlCarousel();
      StyleSwitcher.initStyleSwitcher();
      RevolutionSlider.initRSfullScreen();
      /*$("#latest_dogs").owlCarousel({
	    items: 2,
	    loop: true,
	    autoplay: true,
	    autoplayTimeout: 1000,
	    stopOnHover : false
	  });*/
	  /*$('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' // optional
      });*/
    /*add new blog*/
    $(".add_blog_form").submit(function(e){
      e.preventDefault();
      var username = $("#username").val();
      var title = $(".title").val();
      var url = $(".url").val();
      var email = $(".email").val();
      var content = $("#content").val();
      var photo = $('#photo').prop('files')[0];
      var fdata = new FormData();        
      fdata.append('photo', photo);
      fdata.append('username', username); 
      fdata.append('title', title);
      fdata.append('url', url);
      fdata.append('email', email);
      fdata.append('content', content);
      $.ajax({
        url : '/blog/add_blog',
        dataType: 'text',  // what to expect back from the PHP script, if anything
        cache: false,
        contentType: false,
        processData: false,
        type : 'POST',
        data : fdata,
        success : function(response) {   
          if(response == 'success')
          {   
              window.location.reload();
              
          } 
          else
          {
            Lobibox.notify('error', {
                        msg: 'Try again!'
                    });   
          }                      
          }                   
      });
    })
    /*contact form*/
    $("#sky-form3").submit(function(e){
      e.preventDefault();
      var data = $(this).serialize();
      $.ajax({
        url : '/contact/add_contact',
        type : 'POST',
        data : data,
        success : function(response) {                         
          }                   
    });
        return false;
    })
    });