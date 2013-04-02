#ads.utilities - templates and support functions for Mobile Apps/Ads


#Documentation


##Mission

To create a HTML5/CSS/JS template/scaffolding that can serve as a starting point for Ads and Landing Pages.


##Specification



##Technologies

jQuery, jQuery Mobile, wrapper scripts for native hardware access

###jQuery Plugins
* [http://teamddm.com/articles/jscroll-an-iscroll-plugin-for-jquery](jScroll: An iScroll Plugin for jQuery)
* [https://github.com/blueimp/jQuery-File-Upload](blueimp jQuery File Uploader)



##Implementation

A global JavaScript object VgAds will have basic, cross-browser event handling implementing a pubsub interface for adding event listeners.

We want to be able to extend this object for special functionality and custom handlers, without compromising any other components that are using the global object.

###For speed and memory optimization, keep in mind:

* Files larger than 32KB are not cached on iPhone
* Don't define functions more than once
* Avoid DOM manipulation as far as possible
* avoid jQuery's built-in PubSub for high-frequency events, as it relies on the DOM for callbacks




##Resources
----------------------------
###docs

[http://dev.w3.org/geo/api/spec-source-orientation.html#devicemotion](DeviceMotion Specification)
[http://www.mobilexweb.com/blog/android-froyo-html5-accelerometer-flash-player](Accessing Accelerometer on Flash/Android 2.2)
[http://www.mobilexweb.com/samples/ball.html](PhoneGap accelerometer example)


###tricks & traps
[https://github.com/nvie/gitflow](A collection of Git extensions to provide high-level repository operations for Vincent Driessen's branching model)
[http://jeffkreeftmeijer.com/2010/why-arent-you-using-git-flow/](How to use git-flow)
[http://www.blog.highub.com/mobile-2/a-fix-for-iphone-viewport-scale-bug/](A fix for the iPhone ViewPort scale bug)



###Device support
[http://caniuse.com/#feat=deviceorientation](caniuse - DeviceOrientation API)
[http://caniuse.com/#feat=geolocation](caniuse - GeoLocation API)
[http://caniuse.com/#feat=cors](caniuse - CORS (Cross-Origin Resource Sharing))