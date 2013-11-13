$(window).scroll(function() {

    //After scrolling 181px from the top...
    if ( $(window).scrollTop() >= 181 ) {
        $('#header').css({'display':'none'});
        $('#header-collapse').css({'display' : 'inline'});
        $('#nav').css({'position':'fixed'});
        $('#nav').css({'top':'50px'});

    //Otherwise remove inline styles and thereby revert to original stying
    } else {
        $('#header, #header-collapse, #nav').attr('style', '');

    }
});

$(document).ready(function(){
    
    $('#home').mouseenter(
        function() { $('#header, #header-collapse').css({"background":"linear-gradient(90deg, rgb(187, 85, 26), rgb(234, 106, 32) , rgb(187, 85, 26) )"});
        }
    );
    
    $('#about').mouseenter(
        function() { $('#header, #header-collapse').css({"background":"linear-gradient(90deg, rgb(0,126,154), rgb(16,157,192) , rgb(0,126,154) )"});
        });
    
    $('#projects').mouseenter(
        function() { $('#header, #header-collapse').css({"background":"linear-gradient(90deg, rgb(83,74,66), rgb(104,92,83) , rgb(83,74,66) )"});
        }
    );
    
    $('#classroom').mouseenter(
        function() { $('#header, #header-collapse').css({"background":"linear-gradient(90deg, rgb(69,37,20), rgb(86,46,25) , rgb(69,37,20) )"});
        }
    );
    
    $('#intern').mouseenter(
        function() { $('#header, #header-collapse').css({"background":"linear-gradient(90deg, rgb(145,156,31), rgb(181,195,39) , rgb(145,156,31) )"});
        }
    );
    
    $('#trips').mouseenter(
        function() { $('#header, #header-collapse').css({"background":"linear-gradient(90deg, rgb(46,58,70), rgb(58,73,88) , rgb(46,58,70) )"});
        }
    );
    
    $('#donate').mouseenter(
                function() { $('#header, #header-collapse').css({"background":"linear-gradient(90deg, rgb(107,110,112), rgb(134,137,140) , rgb(107,110,112) )"});
        }
    );
    
    $('#contact').mouseenter(
        function() { $('#header, #header-collapse').css({"background":"linear-gradient(90deg, rgb(130,64,18), rgb(162,80,22) , rgb(130,64,18) )"}); 
        }
    );
        
    $('#gallery').mouseenter(
        function() { $('#header, #header-collapse').css({"background":"linear-gradient(90deg, rgb(69,78,31), rgb(86,97,39) , rgb(69,78,31) )"}); 
        }
    );
    
    $('#nav').mouseleave(
        function() {
          $('#header, #header-collapse').css({"background":""});  
        }
    )
});