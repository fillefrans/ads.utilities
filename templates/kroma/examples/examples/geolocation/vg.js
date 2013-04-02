
var locations = new Array();

locations.push({id:'2001', name:'VG', adress: 'Akersgata 55', lat: '59.915171', lng: '10.743764'});


http://maps.google.com/maps?q=VG,+Akersgata,+Oslo,+Norge&hl=sv&sll=37.0625,-95.677068&sspn=35.410182,70.224609&oq=VG,+&hq=VG,+Akersgata,+Oslo,+Norge&t=m&z=14

/*********************************
** Set up google maps
*********************************/
var googleMaps = function() {

	var map;
	var myMarker = null;
    var myLatlng = 0;
    var browserSupportFlag = false;

    var init = function(lat, lng) {
	
        myLatlng = new google.maps.LatLng(lat, lng);

        var myOptions = {
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            disableDefaultUI: true,
            navigationControl: true,
            scrollwheel: false,
            streetViewControl: false,
        }

        map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

	 	google.maps.event.addListener(map, 'bounds_changed', function() {
	 		redrawMarkers(locations, myLatlng);
	 	});
	
		$('#spinner').attr('src', 'ajax-loader.gif'); 

		///////////////
        // geolocation
        ///////////////

        if (navigator.geolocation) {
            browserSupportFlag = true;
            navigator.geolocation.getCurrentPosition(function(position) {
                
				myLatlng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
				var bounds = generateBounds(locations, myLatlng);
				map.fitBounds(bounds);
				
				$('#spinner').remove();
            },
            function() {
                handleNoGeolocation(browserSupportFlag);
            });
        } else {
            browserSupportFlag = false;
            handleNoGeolocation(browserSupportFlag);
        }

    }

    function handleNoGeolocation(errorFlag) {
		$('#spinner').remove();
		alert('Finner ikke posisjon, setter til Oslo');
		var bounds = generateBounds(locations, myLatlng);
		map.fitBounds(bounds);
    }


	function distanceBetween(latLng1, latLng2) {

		// this = latLng1
		// newLatLng = latLng2
		
	    var lat1 = latLng1.lat() * Math.PI / 180.0;
	    var lat2 = latLng2.lat() * Math.PI / 180.0;
	    var lngDiff = (latLng2.lng() - latLng1.lng()) * Math.PI / 180.0;
	
	    return Math.acos(Math.sin(lat1) * Math.sin(lat2) + Math.cos(lat1)  * Math.cos(lat2) * Math.cos(lngDiff)) * 20902231.0029;
	}

	function generateBounds(locs, myPos) {
		
		var dist = 1000000;
		var currentPos = null;
		
		for (i=0; i < locs.length; i++) {

			var loc = locs[i];
			var locationLatLng = new google.maps.LatLng(loc.lat, loc.lng);
			var tmpDist = distanceBetween(myPos, locationLatLng);
			
			if (tmpDist < dist) {
				dist = tmpDist;
				currentPos = locationLatLng;
			}
			
		}
		
		var bounds = new google.maps.LatLngBounds();
		bounds.extend(currentPos);
		bounds.extend(myPos);
		
		return bounds;
	}
	
	function redrawMarkers(locs, myPos) {
		
		var bounds = map.getBounds();
		var marker, infowindow;
		
		if (!myMarker) {

				myMarker = new google.maps.Marker({
				        	position: myPos, 
				        	map: map,
				        	icon: 'runner.png'});
				
				
			var infow = new google.maps.InfoWindow({content: '<b>Her er jeg</b>'});
			
			google.maps.event.addListener(myMarker, 'click', function() {
				infow.open(map, myMarker);
			});
			
		} else {
			myMarker.setPosition(myPos);
		}
		
		for (i=0; i<locs.length; i++) {
			
			var loc = locs[i];
			var locationLatLng = new google.maps.LatLng(loc.lat, loc.lng);

			if (bounds.contains(locationLatLng) && !loc.mark) {
				
				locs[i].mark = 1;
				
				marker = new google.maps.Marker({
				        position: locationLatLng, 
				        map: map,
				        title:loc.name});
				 
				
				function binder() {
					
					var infow = new google.maps.InfoWindow({
				        content: "<b>" + loc.name + "</b><br>" + loc.adress + "<br> <a href='http://maps.google.no/maps?saddr=" + myLatlng.lat() + ',' + myLatlng.lng() + '&daddr=' + locationLatLng.lat() + ',' + locationLatLng.lng() + "'>Ta meg hit</a>"
				    });
					
					var m = marker;
					return function() {infow.open(map, m);} 
				}
				
				google.maps.event.addListener(marker, 'click', binder());

			}
			
		}
		
	}

    return {
        init: init
    }

} ();

$(document).ready(function() {
   googleMaps.init(59.914444, 10.736617);
});

