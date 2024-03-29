#ads.utilities
Templates and support functions for Mobile ads/landing pages


#Documentation


##Mission

To create a HTML5/CSS3/JS template/scaffolding that can serve as a starting point for Ads and Landing Pages. Incorporate mobile optimized client-side services accessible to creatives.

Collect examples and demos in a git repository. Use shared assets where possible.


---

##Requirements
* Responsive design
* Feature detection
* Optimized for Mobile
* Optimized server/cache setup
* Cross-browser
* Cross-device support (See Target Platforms, below)
* If possible, generic access to a subset of native resources from JavaScript, such as accelerometer, camera, geolocation
* Make allowances for future additions, i.e.
* Easy to copy a template and start adapting it



##Target Platforms
* iOs >= 5.1
* Android >= 4.0 (WebKit browsers)
* WebKit + Firefox
* IE 10 (?) on Windows Phone 8

<pre>
    Følgende enheter må være støttet fullt ut:
    Android v4.0 og nyere, i webkit-baserte browsers
    iOS v5.1 og nyere, i webkit-baserte browsers
    Info: Dette inkluderer ca. 75 % av våre brukere (jan. 2013).
    Øvrige operativsystemer og browsers vil motta
    fallback-annonse.

    Annonsevekter:
    Max kb. Mobil 125
    Max kb. Tablet 150
</pre>



###Not supported
* Opera Mini


##Technologies

* [HTML5 Mobile Boilerplate](https://github.com/h5bp/mobile-boilerplate/tree/master/doc#mobile-boilerplate-documentation)
* jQuery
* [PhoneGap](http://phonegap.com/) for native hardware access
* PHP


###Frameworks
* [Intel Application Framework](http://app-framework-software.intel.com/)
* [MinPubSub - 198 byte pubsub micro-framework](https://github.com/daniellmb/MinPubSub)
* [PhoneGap / Cordova](http://phonegap.com/)

####Client Libraries
* [ImpactJS](http://impactjs.com/)
* [Impact++](https://github.com/collinhover/impactplusplus)
* [Raphaël - SVG library](http://raphaeljs.com/)
* [howler.js - Modern Web Audio Javascript Library](http://goldfirestudios.com/blog/104/howler.js-Modern-Web-Audio-Javascript-Library)
* [Collie](http://colliejs.org/)
* [Introducing Collie: A high-performance animation library for JavaScript](http://www.adobe.com/devnet/html5/articles/introducing-collie.html)
* jQuery
#
###Server libraries
* [ApnsPHP: Apple Push Notification & Feedback Provider](https://github.com/duccio/ApnsPHP)


### Plugins
* [Push Notification Plugin for iOS and Android](https://github.com/phonegap-build/PushPlugin)
* [jScroll: An iScroll Plugin for jQuery](http://teamddm.com/articles/jscroll-an-iscroll-plugin-for-jquery)
* [blueimp jQuery File Uploader](https://github.com/blueimp/jQuery-File-Upload)
* [10 Super useful jQuery plugins for responsive web design](http://www.catswhocode.com/blog/super-useful-jquery-plugins-for-responsive-web-design)


##Implementation

A global JavaScript object VgAds will have basic, cross-browser event handling implementing a pubsub interface for adding event listeners.

We want to be able to extend this object for special functionality and custom handlers, without compromising any other components that are using the global object.

###For speed and memory optimization, keep in mind:

* Files larger than 32KB are not cached on older iPhones
* Avoid DOM manipulation as far as possible
* avoid jQuery's built-in PubSub for high-frequency events, as it relies on the DOM for callbacks (and see also [this](http://jsperf.com/pubsubjs-vs-jquery-custom-events/37))



##Resources
----------------------------
* [Game Content Resources](http://content.gpwiki.org/index.php/Game_Content_Resources)
* [ImpactJS Font Tool](http://impactjs.com/font-tool/)
* [Open Game Art](http://opengameart.org/art-search?keys=icon&page=1)
* [Volumetric Sprites](http://gushh.net/blog/gamedev-resources/volumetric-sprites/)

###HTML5 Game Engines, &c
* [Clay.io/](http://clay.io/)
* []


###Reading
* [Android Push Notifications with PhoneGap](http://www.adobe.com/devnet/phonegap/articles/android-push-notifications-with-phonegap.html)
* [Accelerometer & Gyro Tutorial](http://www.instructables.com/id/Accelerometer-Gyro-Tutorial/)
* [iOS/Android Device orientation (pitch, yaw, roll). Is it better with accelerometer or gyroscope?](http://stackoverflow.com/questions/9304160/ios-android-device-orientation-pitch-yaw-roll-is-it-better-with-acceleromet?rq=1)
* [melonJS: Anatomy of a Game Object](http://blog.kodewerx.org/2013/04/melonjs-anatomy-of-game-object.html)
* [blogwerx](http://blog.kodewerx.org/)
* [MDN - Orientation and motion data explained](https://developer.mozilla.org/en-US/docs/DOM/Orientation_and_motion_data_explained)


###Tools
* [Remote debugging with Chrome Developer Tools](https://developers.google.com/chrome-developer-tools/docs/remote-debugging#remote-debugging)
* [LiveReload - Chrome extension](https://chrome.google.com/webstore/detail/livereload/jnihajbhpnppcggbcgedagnkighmdlei?hl=en)
* [Google PageSpeed](https://developers.google.com/speed/pagespeed/)
* [mod_pagespeed - Apache module for automatic mobile optimization](https://developers.google.com/speed/pagespeed/mod)
* [mod_spdy - Apache SPDY module](http://code.google.com/p/mod-spdy/) -> [browser support](http://caniuse.com/spdy/)
* [HTML5 Boilerplate - Mobile](http://html5boilerplate.com/mobile/)
* [Charles Web Debugging Proxy - Windows/Mac/Linux](http://www.charlesproxy.com/)
* [Google Developers - Web Performance Best Practices](https://developers.google.com/speed/docs/best-practices/)
* [CanIuse.com - HTML5 browser support by feature](http://caniuse.com)
* [git-flow - A collection of Git extensions to provide high-level repository operations for Vincent Driessen's branching model](https://github.com/nvie/gitflow)
* [jsPerf — JavaScript performance playground](http://jsperf.com/)
* [Chocolatey - a package manager for Windows](http://chocolatey.org/)




###Reports & best practices
* [Apache config for HTML5 Mobile Boilerplate ](https://github.com/h5bp/server-configs/tree/master/apache)
* [jQuery vs Zepto vs jQMobi - which one is the fastest?](http://www.codefessions.com/2012/08/performance-of-jquery-compatible-mobile.html)
* [More Bandwidth Doesn’t Matter (much)](http://www.belshe.com/2010/05/24/more-bandwidth-doesnt-matter-much/)
* [Make your mobile pages render in under one second](http://calendar.perfplanet.com/2012/make-your-mobile-pages-render-in-under-one-second/)
* [GoogleTechTalks - Speed Up Your JavaScript](http://www.youtube.com/watch?v=mHtdZgou0qU&feature=channel_page)
* [Mastering HTML5 Prefetching](http://www.catswhocode.com/blog/mastering-html5-prefetching)



###Testing & debugging
* [Using the Android Emulator](http://developer.android.com/tools/devices/emulator.html)
* [Viewport resizer - Responsive design bookmarklet](http://lab.maltewassermann.com/viewport-resizer/)


###Docs
* [iOS Dev Center](https://developer.apple.com/devcenter/ios/index.action)
* [PhoneGap API documentation](http://docs.phonegap.com/en/2.5.0/index.html)
* [DeviceMotion W3 Specification](http://dev.w3.org/geo/api/spec-source-orientation.html#devicemotion)
* [jQuery Mobile API Documentation](http://api.jquerymobile.com/)
* [Differences between Native Apps and Mobile Web Apps](http://en.wikipedia.org/wiki/HTML5_in_mobile_devices#Differences_from_Native_Apps_and_Mobile_Web_Apps)


###Examples
* [Camera and Video Control with HTML5](http://davidwalsh.name/browser-camera)
* [seismograph.js - WebKit DeviceMotion / MozDeviceOrientation example](http://isthisanearthquake.com/seismograph.html)
* [Accessing Accelerometer on Flash/Android 2.2 - example](http://www.mobilexweb.com/blog/android-froyo-html5-accelerometer-flash-player)
* [PhoneGap accelerometer example](http://www.mobilexweb.com/samples/ball.html)

###Videos
* [Video: Google I/O 2012 - High Performance HTML5](http://www.youtube.com/watch?v=6EJ801el-I8)
* [Video: Google I/O 2012 - Making Good Apps Great: More Advanced](http://www.youtube.com/watch?v=PwC1OlJo5VM)
* [Video: Google I/O 2012 - Better Web App Development Through Tooling](http://www.youtube.com/watch?feature=player_embedded&v=Mk-tFn2Ix6g)


###HTML5 Demos
* [Sencha Touch demos](http://www.sencha.com/products/touch/demos/)
* [Apple HTML5 demos](http://www.apple.com/html5/)
* [Chrome Experiments](http://www.chromeexperiments.com/)


###Tricks & fixes
* [Detect rotation of Android phone in the browser with javascript](http://stackoverflow.com/questions/1649086/detect-rotation-of-android-phone-in-the-browser-with-javascript)
* [How to access accelerometer/gyroscope data from Javascript?](http://stackoverflow.com/questions/4378435/how-to-access-accelerometer-gyroscope-data-from-javascript/4378439)
* [How to use git-flow](http://jeffkreeftmeijer.com/2010/why-arent-you-using-git-flow/)
* [A fix for the iPhone ViewPort scale bug](http://www.blog.highub.com/mobile-2/a-fix-for-iphone-viewport-scale-bug/)


###Snippets
####Detect mobile user agent with JS regex:
    var isMobile = /ip(hone|od|ad)|android|blackberry.*applewebkit|bb1\d.*mobile/i.test(navigator.userAgent);


####Speed up DOM manipulation with DocumentFragment:
    var div = document.getElementsByTagName("div");

    var fragment = document.createDocumentFragment();
    for ( var e = 0; e < elems.length; e++ ) {
        fragment.appendChild( elems[e] );
    }

    for ( var i = 0; i < div.length; i++ ) {
        div[i].appendChild( fragment.cloneNode(true) );
    }



###Browser/device feature support
* [caniuse - DeviceOrientation API](http://caniuse.com/#feat=deviceorientation)
* [caniuse - GeoLocation API](http://caniuse.com/#feat=geolocation)
* [caniuse - CORS (Cross-Origin Resource Sharing)](http://caniuse.com/#feat=cors)