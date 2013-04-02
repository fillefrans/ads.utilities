$(document).ready(function(){	
        var sudoSlider = $("#slider").sudoSlider({ 
                prevNext: false,
                customLink:'a.eventclass'
        });
        $('a.nextclass').click(function() {
                alert("hej")
                sudoSlider.goToSlide("next");
        });
        
        $('a.previousclass').click(function() {
                sudoSlider.goToSlide("prev");
        });		
//Assign handlers to the simple direction handlers.
        var swipeOptions=
        {
                swipe:swipe,
                threshold:0
        }
        
        $(function()
        {			
                //Enable swiping...
                $("#slider").swipe( swipeOptions );

        });

        //Swipe handlers.
        //The only arg passed is the original touch event object			
        function swipe(event, direction)
        {
                if (direction == "left") {
                        sudoSlider.goToSlide("next");
                }
                else if (direction == "right") {
                        sudoSlider.goToSlide("prev");
                }
        }
});