#ads.utilities  
Templates and support functions for Mobile ads/landing pages


#Documentation


##Mission

To create a HTML5/CSS/JS template/scaffolding that can serve as a starting point for Ads and Landing Pages.
Collect examples and demos in a git repository. Use shared assets where possible.


##Requirements
* Responsive design
* Feature detection
* Optimized for Mobile
* Cross-browser
* Cross-device support (See Target Platforms, below)
* If possible, generic access to a subset of native resources from JavaScript, such as accelerometer, camera, geolocation


##Target Platforms
* iOs >= 5.1
* Android >= 4.0 (WebKit browsers)
* WebKit + Firefox
* IE 10 (?) on Windows Phone 8


    Følgende enheter må være støttet fullt ut:
    Android v4.0 og nyere, i webkit-baserte browsers
    iOS v5.1 og nyere, i webkit-baserte browsers
    Info: Dette inkluderer ca. 75 % av våre brukere (jan. 2013).
    Øvrige operativsystemer og browsers vil motta
    fallback-annonse. 
     
     
    Annonsevekter: 
    Max kb. Mobil 125
    Max kb. Tablet 150 
 


###Not supported
* Opera Mini


##Technologies

jQuery, jQuery Mobile, wrapper scripts for native hardware access
PHP

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


###Tools
[Google PageSpeed](https://developers.google.com/speed/pagespeed/)  
[mod_pagespeed - Apache module for automatic mobile optimization](https://developers.google.com/speed/pagespeed/mod)  
[mod_spdy - Apache SPDY module](http://code.google.com/p/mod-spdy/)  
[HTML5 Boilerplate - Mobile](http://html5boilerplate.com/mobile/)  
[Charles Web Debugging Proxy - Windows/Mac/Linux](http://www.charlesproxy.com/)  
[Google Developers - Web Performance Best Practices](https://developers.google.com/speed/docs/best-practices/)  
[Can I use - HTML5 browser support](http://caniuse.com)  
[git-flow - A collection of Git extensions to provide high-level repository operations for Vincent Driessen's branching model](https://github.com/nvie/gitflow)  
[jsPerf — JavaScript performance playground](http://jsperf.com/)  


###Reports & best practices
[More Bandwidth Doesn’t Matter (much)](http://www.belshe.com/2010/05/24/more-bandwidth-doesnt-matter-much/)  
[Make your mobile pages render in under one second](http://calendar.perfplanet.com/2012/make-your-mobile-pages-render-in-under-one-second/)  


###Testing & debugging
[Using the Android Emulator](http://developer.android.com/tools/devices/emulator.html)  
[Viewport resizer - Responsive design bookmarklet](http://lab.maltewassermann.com/viewport-resizer/)  


###Docs
[iOS Dev Center](https://developer.apple.com/devcenter/ios/index.action)  
[PhoneGap API documentation](http://docs.phonegap.com/en/2.5.0/index.html)  
[DeviceMotion W3 Specification](http://dev.w3.org/geo/api/spec-source-orientation.html#devicemotion)  
[jQuery Mobile API Documentation](http://api.jquerymobile.com/)  
[Differences between Native Apps and Mobile Web Apps](http://en.wikipedia.org/wiki/HTML5_in_mobile_devices#Differences_from_Native_Apps_and_Mobile_Web_Apps)  


###Examples
[seismograph.js - WebKit DeviceMotion / MozDeviceOrientation example](http://isthisanearthquake.com/seismograph.html)  
[Accessing Accelerometer on Flash/Android 2.2 - example](http://www.mobilexweb.com/blog/android-froyo-html5-accelerometer-flash-player)  
[PhoneGap accelerometer example](http://www.mobilexweb.com/samples/ball.html)  


###HTML5 Demos
[Sencha Touch demos](http://www.sencha.com/products/touch/demos/)  
[Apple HTML5 demos](http://www.apple.com/html5/)  
[Chrome Experiments](http://www.chromeexperiments.com/)  


###Tricks & fixes
[Detect rotation of Android phone in the browser with javascript](http://stackoverflow.com/questions/1649086/detect-rotation-of-android-phone-in-the-browser-with-javascript)  
[How to access accelerometer/gyroscope data from Javascript?](http://stackoverflow.com/questions/4378435/how-to-access-accelerometer-gyroscope-data-from-javascript/4378439)  
[How to use git-flow](http://jeffkreeftmeijer.com/2010/why-arent-you-using-git-flow/)  
[A fix for the iPhone ViewPort scale bug](http://www.blog.highub.com/mobile-2/a-fix-for-iphone-viewport-scale-bug/)  
[Building mobile apps with the ArcGIS api for Javascript](http://www.slideshare.net/esrinederland/building-mobile-apps-with-the-arcgis-api-for-javascript-esri-andy-gup-and-antoon-uijtdehaag)  

###Snippets
####Detect mobile user agent with regex:
    var isMobile = /ip(hone|od|ad)|android|blackberry.*applewebkit|bb1\d.*mobile/i.test(navigator.userAgent);

---
####Speed up DOM manipulation woith DocumentFragment:
    var div = document.getElementsByTagName("div");
     
    var fragment = document.createDocumentFragment();
    for ( var e = 0; e < elems.length; e++ ) {
        fragment.appendChild( elems[e] );
    }
         
    for ( var i = 0; i < div.length; i++ ) {
        div[i].appendChild( fragment.cloneNode(true) );
    }


###Browser/device feature support
[caniuse - DeviceOrientation API](http://caniuse.com/#feat=deviceorientation)  
[caniuse - GeoLocation API](http://caniuse.com/#feat=geolocation)  
[caniuse - CORS (Cross-Origin Resource Sharing)](http://caniuse.com/#feat=cors)  