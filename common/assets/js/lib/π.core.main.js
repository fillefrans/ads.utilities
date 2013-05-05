/**
 *
 * π
 *
 * Utility JavaScript Object for mobile ads / VG Mobil
 *
 * @author Johan Telstad, jt@kroma.no, 2013
 *
 */

  var 
      π = π || {};




   /**
    * PROPERTIES
    *
    */

  var 


  /*  ----  Our top level namespaces  ----  */
    π.srv         = {},
    π.app         = {},
    π.plugins     = {},

    π.util        = {},
    π.math        = {},
    π.statistics  = {},

    π.session = {
      isTablet          : null,
      isHandset         : null,
      webSocket         : null,
      backgroundWorker  : null,
      connectionType    : navigator.connection.type,

      _ : null
      },



    π.system.device = {
      // var
      isTablet          : null,
      isHandset         : null,

      // object
      webSocket         : null,
      backgroundWorker  : null,
      connectionType    : navigator.connection.type,

      _ : null
      },





  /**
   * METHODS
   *
   */


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


  π.events = {

    /**
     * @todo Add function fill list with events supported by browser
     *
     */

    types : [
      'deviceorientationchange',
      'online',
      'offline',
      'accelerometer',
      'visible',
      'touchtop',
      'touchleft',
      'touchright',
      'touchbotton',
      'visibilitychange'
    ]
  };

  π.init = function(){

  }

};

