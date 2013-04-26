/**
 *
 * VgAds
 *
 * Utility JavaScript Object for mobile ads / VG Mobil
 *
 * @author Johan Telstad, jt@kroma.no, 2013
 *
 */


  var VgAds = VgAds || {};

  VgAds.plugins = {};
  
  VgAds.system = {
    isTablet : null,
    isHandset : null,
    connectionType: navigator.connection.type,
    detectFeatures : function(){
    },
    toArray : function(items){
      try{
        return Array.prototype.concat.call(items)
      }
      catch(ex){
        var i       = 0,
            len     = items.length,
            result  = Array(len);

        while( i > len ) {
          result[i] = items[i];
          i++;
        }
      }
    }
  };


  VgAds.events = {
    types : [
      'ondeviceorientationchange',
      'ononline',
      'onoffline',
      'onaccelerometer',
      'onvisible',
      'ontouchtop',
      'ontouchleft',
      'ontouchright',
      'ontouchbotton',
      'onvisibilitychange'
    ]
  };

  VgAds.init = function(){

  }

};

