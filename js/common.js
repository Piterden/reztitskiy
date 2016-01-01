jQuery(document).ready(function() {
    function scaleParallax() {
        var windowHeight = $(window).height();
        $('#parallax').css('height', windowHeight - 60 + 'px');
    }
    scaleParallax();
    $(window).bind("load", scaleParallax);
    $(window).bind("resize", scaleParallax);
    $(window).bind("orientationchange", scaleParallax);
    /* Parallax */
    $('div[data-type="background"]').each(function() {
        // declare the variable to affect the defined data-type
        var $scrollVert = $(this);
        $(window).scroll(function() {
            // HTML5 proves useful for helping with creating JS functions!
            // also, negative value because we're scrolling upwards
            var yPos = -($(window).scrollTop() / $scrollVert.data('speed'));
            // background position
            var coordsY = '50% ' + yPos + 'px';
            // move the background
            $scrollVert.css({
                backgroundPosition: coordsY
            });
        }); // end window scroll
    }); // end div function
    $('div[data-type="logo"]').each(function() {
        var $scrollHor = $(this);
        var scrollHorPos = parseFloat($scrollHor.css('top'));
        $(window).scroll(function() {
            var yPos = (scrollHorPos + ($(window).scrollTop() / $scrollHor.data('speed')));
            var opacityVal = 1 - ($(window).scrollTop() / 600);
            $scrollHor.css({
                top: yPos + 'px',
                opacity: opacityVal
            });
        });
    });

    /* This is basic - uses default settings */

    $("a#single_image").fancybox();

    /* Using custom settings */

    $("a#inline").fancybox({
        'hideOnContentClick': true,
        'modal': true
    });

    /* Apply fancybox to multiple items */

    $("a.group").fancybox({
        'cyclic': false,
        'transitionIn': 'elastic',
        'transitionOut': 'elastic',
        'speedIn': 600,
        'speedOut': 200,
        'overlayShow': false,
        'titlePosition': 'over',
        'titleFormat': function(title, currentArray, currentIndex, currentOpts) {
            return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
        }
    });
    
    /* Validation of contact form */

    $.validate({
        form: '#contact-form',
        //validateOnBlur: false,
        modules: 'security',
        borderColorOnError: '',
        scrollToTopOnError: false,
        onError: function($form) {
            //alert('Validation of form ' + $form.attr('id') + ' failed!');
        },
        onSuccess: function($form) {
            $.ajax({
            	url: 'mail.php',
            	type: 'POST',
            	data: $form.serialize()
            })
            .done(function(response) {
            	response = $.parseJSON(response);
            	if (response.success) {
	            	$.notify(response.message, 'success');
            	} else {
	            	$.notify(response.message, 'warn');
            	}
            	//console.log(response);
            })
            .fail(function() {
            	$.notify('Server error', 'error');
            });
            
            return false; // Will stop the submission of the form
        },
        onValidate: function($form) {
            //console.log('Check');
            //return {
            //    element: $('#some-input'),
            //    message: 'This input has an invalid value for some reason'
            //}
        },
        onElementValidate: function(valid, $el, $form, errorMess) {
        	var showCaptcha = [];
    		$('.form-group:not(.captcha)', '#contact-form').each(function(i, e) {
				showCaptcha.push( $(e)[0] != $el.parent()[0] ? $(e).hasClass('has-success') : valid );
    		});
        	(showCaptcha.every(Boolean)) ? $form.children('.captcha').addClass('active') : $form.children('.captcha').removeClass('active');
        }
    });
});
