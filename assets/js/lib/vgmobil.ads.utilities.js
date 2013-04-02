/**
 *
 * VgAds
 *
 * Utility JavaScript Object for mobile ads / VG Mobil
 *
 * @author Johan Telstad, jt@kroma.no, 2013
 * 
 */


var VgAds = VgAds || {
  system : {
    isTablet : null,
    isHandset : null,
    connectionType: navigator.connection.type,
    detectFeatures : function(){
    },
  },
  events : {
    types : [
      "ondeviceorientationchange",
      "ononline",
      "onoffline"
    ]
  },
  init = function(){

  }

};

