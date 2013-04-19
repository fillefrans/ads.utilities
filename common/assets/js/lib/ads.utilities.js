/**
 *
 * Ads.Utilities
 *
 * Utility JavaScript Object for mobile devices
 *
 * @author Johan Telstad, jt@kroma.no, 2013
 *
 */


var Ads = Ads || {
  system : {
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
  },
  events : {
    types : [
      'ondeviceorientationchange',
      'ononline',
      'onoffline',
      'onaccelerometer'
    ]
  },
  init = function(){

  }

};

