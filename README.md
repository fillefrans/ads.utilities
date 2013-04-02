#ads.utilities - templates and support functions for Mobile Apps/Ads


#Documentation


##Mission

To create a HTML5/CSS/JS template/scaffolding that can serve as a starting point for Ads and Landing Pages.
Collect examples and demos in a git repository.



##Requirements
* Responsive design
* Cross-browser
* Cross-device support
* Access to a compatible subset of native resources from JavaScript, such as accelerometer, camera, geolocation


##Target Platforms
* iOs >= 5
* Android >= 4.2 (native browser)
* WebKit + Firefox
* IE 10 (?) on Windows Phone 8

###Non-supported platforms
* Opera Mini


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

*[http://html5boilerplate.com/mobile/](HTML5 Boilerplate - Mobile)

###docs
[http://docs.phonegap.com/en/2.5.0/index.html](PhoneGap API documentation)
[http://dev.w3.org/geo/api/spec-source-orientation.html#devicemotion](DeviceMotion W3 Specification)
[http://api.jquerymobile.com/](jQuery Mobile API Documentation)
[http://en.wikipedia.org/wiki/HTML5_in_mobile_devices#Differences_from_Native_Apps_and_Mobile_Web_Apps](Differences between Native Apps and Mobile Web Apps)

###examples
[http://isthisanearthquake.com/seismograph.html](seismograph.js - WebKit DeviceMotion / MozDeviceOrientation example)
[http://www.mobilexweb.com/blog/android-froyo-html5-accelerometer-flash-player](Accessing Accelerometer on Flash/Android 2.2 - example)
[http://www.mobilexweb.com/samples/ball.html](PhoneGap accelerometer example)


###HTML5 Demos
[http://www.sencha.com/products/touch/demos/](Sencha Touch demos)
[http://www.apple.com/html5/](Apple HTML5 demos)
[http://www.chromeexperiments.com/](Chrome Experiments)

###tricks & fixes
[http://stackoverflow.com/questions/1649086/detect-rotation-of-android-phone-in-the-browser-with-javascript](Detect rotation of Android phone in the browser with javascript)
[http://stackoverflow.com/questions/4378435/how-to-access-accelerometer-gyroscope-data-from-javascript/4378439](How to access accelerometer/gyroscope data from Javascript?)
[http://lab.maltewassermann.com/viewport-resizer/](Viewport resizer - Responsive design bookmarklet)
[http://caniuse.com](Can I use - HTML5 browser support summaries)
[https://github.com/nvie/gitflow](A collection of Git extensions to provide high-level repository operations for Vincent Driessen's branching model)
[http://jeffkreeftmeijer.com/2010/why-arent-you-using-git-flow/](How to use git-flow)
[http://www.blog.highub.com/mobile-2/a-fix-for-iphone-viewport-scale-bug/](A fix for the iPhone ViewPort scale bug)
[http://www.slideshare.net/esrinederland/building-mobile-apps-with-the-arcgis-api-for-javascript-esri-andy-gup-and-antoon-uijtdehaag](Building mobile apps with the ArcGIS api for Javascript)



###Device support
[http://caniuse.com/#feat=deviceorientation](caniuse - DeviceOrientation API)
[http://caniuse.com/#feat=geolocation](caniuse - GeoLocation API)
[http://caniuse.com/#feat=cors](caniuse - CORS (Cross-Origin Resource Sharing))