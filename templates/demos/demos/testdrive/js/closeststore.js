var locations = new Array();
locations.push({id:'1', name:'VILA', adress: 'Bergen – Stavhusgarten 4', lat: '60.39217', lng: '5.32562'});
locations.push({id:'2', name:'VILA', adress: 'Bergen – Åsane Center 1', lat: '60.46496', lng: '5.31821'});
locations.push({id:'3', name:'VILA', adress: 'Bodø – Storgate 8', lat: '67.28346', lng: '14.37856'});
locations.push({id:'4', name:'VILA', adress: 'Bodø - Stormyveien', lat: '67.27727', lng: '14.42832'});
locations.push({id:'5', name:'VILA', adress: 'Fredrikstad - Brochs gate 8', lat: '59.21393', lng: '10.93952'});
locations.push({id:'6', name:'VILA', adress: 'Gjøvik', lat: '60.79999', lng: '10.69363'});
locations.push({id:'7', name:'VILA', adress: 'Gjøvik – Store Gate 2A', lat: '60.79596', lng: '10.69248'});
locations.push({id:'8', name:'VILA', adress: 'Harstad - Rikard Kaarbøs plass 1', lat: '68.79979', lng: '16.54378'});
locations.push({id:'9', name:'VILA', adress: 'Hønefoss - Kong Ringsgate 1', lat: '60.16475', lng: '10.25466'});
locations.push({id:'10', name:'VILA', adress: 'Jessheim – Storgate 6', lat: '60.14276', lng: '11.17183'});
locations.push({id:'11', name:'VILA', adress: 'Kristiansand Sørlandssentret Barstølveien 31-35', lat: '58.17992', lng: '8.12954'});
locations.push({id:'12', name:'VILA', adress: 'Kristiansand Markensgaten Markensgaten 40', lat: '58.14706', lng: '7.99056'});
locations.push({id:'13', name:'VILA', adress: 'Lille hammer Strandtorget', lat: '61.116353', lng: '10.445959'});
locations.push({id:'14', name:'VILA', adress: 'Bergen Vestkanten Loddefjordveien 2', lat: '60.36322', lng: '5.23363'});
locations.push({id:'15', name:'VILA', adress: 'Mo i Rana Ole Tobias Olsens gate 22', lat: '66.31157', lng: '14.13270'});
locations.push({id:'16', name:'VILA', adress: 'Molde Torget 1', lat: '62.73689', lng: '7.15868'});
locations.push({id:'17', name:'VILA', adress: 'Namsos Verftsgata 4', lat: '64.46770', lng: '11.49160'});
locations.push({id:'18', name:'VILA', adress: 'Oslo Storo, Vitaminveien 7-9', lat: '59.94730', lng: '10.77379'});
locations.push({id:'19', name:'VILA', adress: 'Lørenskog Storsenter, Gamleveien 88', lat: '59.91842', lng: '10.95499'});
locations.push({id:'20', name:'VILA', adress: 'Stavanger Mediagården Verksgaten', lat: '58.97090', lng: '5.74180'});
locations.push({id:'21', name:'VILA', adress: 'Torgkvartalet Stokmovegen 2', lat: '63.46878', lng: '10.92427'});
locations.push({id:'22', name:'VILA', adress: 'Trondheim Nordre Gate Nordre Gate 11', lat: '63.43251', lng: '10.39767'});
locations.push({id:'23', name:'VILA', adress: 'Trondheim Solsiden Beddingen 10', lat: '63.43523', lng: '10.41209'});


var wantAllSpots = getUrlVars()["all"];
if(wantAllSpots == undefined || wantAllSpots=="" || wantAllSpots=="no") {
	wantAllSpots = "no";
}

$(document).ready(function() {
   	googleMaps.init(59.914444, 10.736617, wantAllSpots);
});


/*********************************
** Set up google maps
*********************************/
var googleMaps = function() {

	var map;
	var myMarker = null;
    var myLatlng = 0;
    var browserSupportFlag = false;
    var myWantAllSpots = "no";

    var init = function(lat, lng, wantAllSpots) {
		
        myLatlng = new google.maps.LatLng(lat, lng);

        myWantAllSpots = wantAllSpots;

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
	
		$('#spinner').attr('src', 'img/ajax-loader.gif'); 

		///////////////
        // geolocation
        ///////////////

        if (navigator.geolocation) {
            browserSupportFlag = true;
            navigator.geolocation.getCurrentPosition(function(position) {
                
				myLatlng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);

				if(myWantAllSpots=="yes") {
					var centerCountryLatlng = new google.maps.LatLng(65.640155,13.541908);
					var bounds = generateBounds(locations, centerCountryLatlng);
					map.fitBounds(bounds);
					map.setZoom(3);
					$('#spinner').remove();
				} else {
					var bounds = generateBounds(locations, myLatlng);
					map.fitBounds(bounds);
					$('#spinner').remove();
				}
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
		alert('Finner ikke posisjon, vis alle butikker');
					var centerCountryLatlng = new google.maps.LatLng(65.640155,13.541908);
					var bounds = generateBounds(locations, centerCountryLatlng);
					map.fitBounds(bounds);
					map.setZoom(3);
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
				    var pinColor = "00ff5a";
    var pinImage = new google.maps.MarkerImage("http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=%E2%80%A2|" + pinColor,
        new google.maps.Size(21, 34),
        new google.maps.Point(0,0),
        new google.maps.Point(10, 34));
				myMarker = new google.maps.Marker({
				        	position: myPos, 
				        	map: map,
				        	icon: pinImage});
				
				
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
		

		if(myWantAllSpots=="yes") {
			//map.setZoom(3);
		}
	}

    return {
        init: init
    }

} ();



// Read a page's GET URL variables and return them as an associative array.
function getUrlVars()
{
    var vars = [], hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for(var i = 0; i < hashes.length; i++)
    {
        hash = hashes[i].split('=');
        vars.push(hash[0]);
        vars[hash[0]] = hash[1];
    }
    return vars;
}


