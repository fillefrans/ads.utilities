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
* [jScroll: An iScroll Plugin for jQuery](http://teamddm.com/articles/jscroll-an-iscroll-plugin-for-jquery)
* [blueimp jQuery File Uploader](https://github.com/blueimp/jQuery-File-Upload)



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


###tools
[Google PageSpeed](https://developers.google.com/speed/pagespeed/)  
[mod_pagespeed - Apache module for automatic mobile optimization](https://developers.google.com/speed/pagespeed/mod)  
[mod_spdy - Apache SPDY module](http://code.google.com/p/mod-spdy/)  
[HTML5 Boilerplate - Mobile](http://html5boilerplate.com/mobile/)  
[Charles Web Debugging Proxy - Windows/Mac/Linux](http://www.charlesproxy.com/)  
[Google Developers - Web Performance Best Practices](https://developers.google.com/speed/docs/best-practices/)  
[Can I use - HTML5 browser support](http://caniuse.com)  
[git-flow - A collection of Git extensions to provide high-level repository operations for Vincent Driessen's branching model](https://github.com/nvie/gitflow)  
[jsPerf — JavaScript performance playground](http://jsperf.com/)  

###reports & best practices
[More Bandwidth Doesn’t Matter (much)](http://www.belshe.com/2010/05/24/more-bandwidth-doesnt-matter-much/)  
[Make your mobile pages render in under one second](http://calendar.perfplanet.com/2012/make-your-mobile-pages-render-in-under-one-second/)  


###testing & debugging
[Using the Android Emulator](http://developer.android.com/tools/devices/emulator.html)  
[Viewport resizer - Responsive design bookmarklet](http://lab.maltewassermann.com/viewport-resizer/)  


###docs
[iOS Dev Center](https://developer.apple.com/devcenter/ios/index.action)  
[PhoneGap API documentation](http://docs.phonegap.com/en/2.5.0/index.html)  
[DeviceMotion W3 Specification](http://dev.w3.org/geo/api/spec-source-orientation.html#devicemotion)  
[jQuery Mobile API Documentation](http://api.jquerymobile.com/)  
[Differences between Native Apps and Mobile Web Apps](http://en.wikipedia.org/wiki/HTML5_in_mobile_devices#Differences_from_Native_Apps_and_Mobile_Web_Apps)  


###examples
[seismograph.js - WebKit DeviceMotion / MozDeviceOrientation example](http://isthisanearthquake.com/seismograph.html)  
[Accessing Accelerometer on Flash/Android 2.2 - example](http://www.mobilexweb.com/blog/android-froyo-html5-accelerometer-flash-player)  
[PhoneGap accelerometer example](http://www.mobilexweb.com/samples/ball.html)  


###HTML5 Demos
[Sencha Touch demos](http://www.sencha.com/products/touch/demos/)  
[Apple HTML5 demos](http://www.apple.com/html5/)  
[Chrome Experiments](http://www.chromeexperiments.com/)  


###tricks & fixes
[Detect rotation of Android phone in the browser with javascript](http://stackoverflow.com/questions/1649086/detect-rotation-of-android-phone-in-the-browser-with-javascript)  
[How to access accelerometer/gyroscope data from Javascript?](http://stackoverflow.com/questions/4378435/how-to-access-accelerometer-gyroscope-data-from-javascript/4378439)  
[How to use git-flow](http://jeffkreeftmeijer.com/2010/why-arent-you-using-git-flow/)  
[A fix for the iPhone ViewPort scale bug](http://www.blog.highub.com/mobile-2/a-fix-for-iphone-viewport-scale-bug/)  
[Building mobile apps with the ArcGIS api for Javascript](http://www.slideshare.net/esrinederland/building-mobile-apps-with-the-arcgis-api-for-javascript-esri-andy-gup-and-antoon-uijtdehaag)  

###Snippets
    var isMobile = /ip(hone|od|ad)|android|blackberry.*applewebkit|bb1\d.*mobile/i.test(navigator.userAgent);



###Device support
[caniuse - DeviceOrientation API](http://caniuse.com/#feat=deviceorientation)  
[caniuse - GeoLocation API](http://caniuse.com/#feat=geolocation)  
[caniuse - CORS (Cross-Origin Resource Sharing)](http://caniuse.com/#feat=cors)  