
// Create an array of images that you'd like to use
/*var images = [
    "gfx/bg-default.jpg",
    "img/2.jpg",
    "img/3.jpg",
    "img/4.jpg",
    "img/5.jpg"
];*/

// A little script for preloading all of the images
// It's not necessary, but generally a good idea
$(images).each(function(){
   $(this)[0].src = this; 
});

// The index variable will keep track of which image is currently showing
var index = 0;

// Call backstretch for the first time,
// In this case, I'm settings speed of 500ms for a fadeIn effect between images.
$.backstretch(images[index], {speed: 500});

// Set an interval that increments the index and sets the new image
// Note: The fadeIn speed set above will be inherited
setInterval(function() {
    index = (index >= images.length - 1) ? 0 : index + 1;
    $.backstretch(images[index]);
}, 10000);

// Controlles
$("#controller-previous").click(function(){
    index = (index >= images.length + 1) ? 0 : index + 1;
    $.backstretch(images[index]);
});
$("#controller-next").click(function(){
    index = (index >= images.length - 1) ? 0 : index + 1;
    $.backstretch(images[index]);
});