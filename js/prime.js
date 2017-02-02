jQuery(document).ready(function ($) {
    'use strict';
    
    $('#demo').fsBanner({

  // show image descriptions
  'showName':true,  

  // up<a href="http://www.jqueryscript.net/time-clock/">date</a> other slides
  'toUpdate':{},

  // set default values for slides
  'whenEmpty':{},

  // or 'mouse'
  'trigger':'mouse', 

  // If set, the whenEmpty option will be ignored. 
  // When there is no banner and hideParent is set, the script will hide the element based on the selector passed.
  'hideParent':null,

  // callback
  'onChanged':null
  
});
    
       
$(".dropdown").hover(            
            function() {
                $('.sub-menu', this).stop( true, true ).fadeIn("fast");
                $(this).toggleClass('open');
            },
            function() {
                $('.sub-menu', this).stop( true, true ).fadeOut("fast");
                $(this).toggleClass('open');            
            });
    
    

});