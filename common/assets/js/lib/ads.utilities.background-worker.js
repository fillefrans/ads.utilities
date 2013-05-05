/**
 *
 * VgAds Background Worker
 *
 * A web worker used to offload as much processing as possible from the main thread
 *   
 * @author Johan Telstad, jt@kroma.no, 2013
 *
 */


/**
 * Why π, you may ask. Because.
 *
 * Because why, you might inquire. Because BECAUSE.
 * 
 */


/**
 *
 *  navigator object
 *  
    appName
    appVersion
    platform
    userAgent

 * 
 */

//  importScripts('foo.js', 'bar.js');      /* imports two scripts and execute in order */
//  you should only do a quick setup in imported scripts, since they are blocking





/**   GLOBALS
 *
 *    We define all globals as object literals for a single reason: it allows us to build namespaces
 */


//  thread global constants

var
  INITIALIZED   = false,
  SYSTEM        = {

  };


//  thread global variables

var

  // simple variables on top
  INITIALIZED   = false,



  // just so we can copy and paste as God intended: pi
  π = null;


  // namespaces down below. 
  // Beware, they are js objects - so remember to use ":" instead of "="

var SYSTEM = {
    browser   :  navigator.appName + ' ' + navigator.appVersion,

    os        :  navigator.os + ' ' + navigator.appVersion,


  // just so we can copy and paste as God intended: pi
    π: null
  };


//  thread global functions

var 
  // feel free to   
  binarySearch = function (list, val) {

    var min = 0, 
        max = list.length-1,
        mid = (min + max) >> 1,
        dat = list[mid];

    for(;;) {
      if (min + 11 > max) {
        for(var i=min ; i<=max; i++) {
          if(val === list[i]) {
            return i;
          }
        }
      return -1;
      }
      if ( val === dat ) {
        return mid;
      } 
      if( val > dat ) {
        min = mid + 1;
      } 
      else {
        max = mid - 1;
      }
    }
  },
  // :end binarySearch

  /**  ------  ADD comma-separated FUNCTIONS BELOW  ------      */






  /**  ^^^^^^  ADD comma-separated FUNCTIONS ABOVE  ^^^^^^      */

  noop = function(){
    return;
  }; 

  /** :end globals  */





// import and run scripts as you please
importScripts();


// start up our event listener, connect to the outside world

self.addEventListener('message', function(e) {
  self.postMessage(e.data);
}, false);


