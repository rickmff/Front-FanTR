$(function() {
	
    $(window).scroll(function(){

		var wScreen = $(window).width();

		if ($(this).scrollTop() > 160) {
				$('.gotop').addClass("show");
			} else {
				$('.gotop').removeClass("show");
		}

        if ($(this).scrollTop() > 80) {
            $('.header-home').addClass("small-header");
        } else {
            $('.header-home').removeClass("small-header");
        }
    });

    $('.gotop').click(function() {
        $('body,html').animate({scrollTop:0},1000);
    });
});

$(function(){
    $(window).resize(function(){
        if($(this).width() >= 992 || $(this).width() <= 992){
			$('.header-interna').scrollToFixed();
         } else {
             $('.header-interna').unbind('scrollToFixed');

         }
    })
    .resize();//trigger resize on page load
});

function getLoading(){
    var montaLoader = '<div id="elm_loading"><i class="fa fa-circle-o-notch fa-spin fa-3x fa-fw"></i><span class="sr-only">Carregando...</span></div>';
    $('body').prepend(montaLoader).fadeIn();
}

function delLoading(){
    $('#elm_loading').remove();
}

//classie effect text remove in form
(function() {
    // trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
    if (!String.prototype.trim) {
        (function() {
            // Make sure we trim BOM and NBSP
            var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
            String.prototype.trim = function() {
                return this.replace(rtrim, '');
            };
        })();
    }

    [].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
        // in case the input is already filled..
        if( inputEl.value.trim() !== '' ) {
            classie.add( inputEl.parentNode, 'input--filled' );
        }

        // events:
        inputEl.addEventListener( 'focus', onInputFocus );
        inputEl.addEventListener( 'blur', onInputBlur );
    } );

    function onInputFocus( ev ) {
        classie.add( ev.target.parentNode, 'input--filled' );
    }

    function onInputBlur( ev ) {
        if( ev.target.value.trim() === '' ) {
            classie.remove( ev.target.parentNode, 'input--filled' );
        }
    }
})();