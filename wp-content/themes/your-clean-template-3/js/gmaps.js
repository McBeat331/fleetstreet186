// gmaps.js

'use strict';

var map;

function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
        zoom: 16,
        center: new google.maps.LatLng(50.4625744, 30.4144849),
        disableDefaultUI: true,
        styles: [{ "featureType": "water", "elementType": "geometry", "stylers": [{ "color": "#193341" }] }, { "featureType": "landscape", "elementType": "geometry", "stylers": [{ "color": "#2c5a71" }] }, { "featureType": "road", "elementType": "geometry", "stylers": [{ "color": "#29768a" }, { "lightness": -37 }] }, { "featureType": "poi", "elementType": "geometry", "stylers": [{ "color": "#406d80" }] }, { "featureType": "transit", "elementType": "geometry", "stylers": [{ "color": "#406d80" }] }, { "elementType": "labels.text.stroke", "stylers": [{ "visibility": "on" }, { "color": "#3e606f" }, { "weight": 2 }, { "gamma": 0.84 }] }, { "elementType": "labels.text.fill", "stylers": [{ "color": "#ffffff" }] }, { "featureType": "administrative", "elementType": "geometry", "stylers": [{ "weight": 0.6 }, { "color": "#1a3541" }] }, { "elementType": "labels.icon", "stylers": [{ "visibility": "off" }] }, { "featureType": "poi.park", "elementType": "geometry", "stylers": [{ "color": "#2c5a71" }] }],
        mapTypeId: 'terrain'
    });

    var iconBase = 'http://fleetstreet186.com.ua/wp-content/themes/your-clean-template-3/img/';
    var icons = {
        fleetstreet: {
            icon: iconBase + 'marker.png'
        }
    };

    function addMarker(feature) {
        var marker = new google.maps.Marker({
            position: feature.position,
            icon: icons[feature.type].icon,
            map: map
        });
    }

    var features = [{
        position: new google.maps.LatLng(50.4625744, 30.4144849),
        type: 'fleetstreet'
    }];

    for (var i = 0, feature; feature = features[i]; i++) {
        addMarker(feature);
    }
}

//var map2;
//
//function initSmallMap() {
//    map2 = new google.maps.Map(document.getElementById('small-map'), {
//        zoom: 16,
//        center: new google.maps.LatLng(50.4625744, 30.4144849),
//        disableDefaultUI: true,
//        styles: [{ "featureType": "water", "elementType": "geometry", "stylers": [{ "color": "#193341" }] }, { "featureType": "landscape", "elementType": "geometry", "stylers": [{ "color": "#2c5a71" }] }, { "featureType": "road", "elementType": "geometry", "stylers": [{ "color": "#29768a" }, { "lightness": -37 }] }, { "featureType": "poi", "elementType": "geometry", "stylers": [{ "color": "#406d80" }] }, { "featureType": "transit", "elementType": "geometry", "stylers": [{ "color": "#406d80" }] }, { "elementType": "labels.text.stroke", "stylers": [{ "visibility": "on" }, { "color": "#3e606f" }, { "weight": 2 }, { "gamma": 0.84 }] }, { "elementType": "labels.text.fill", "stylers": [{ "color": "#ffffff" }] }, { "featureType": "administrative", "elementType": "geometry", "stylers": [{ "weight": 0.6 }, { "color": "#1a3541" }] }, { "elementType": "labels.icon", "stylers": [{ "visibility": "off" }] }, { "featureType": "poi.park", "elementType": "geometry", "stylers": [{ "color": "#2c5a71" }] }],
//        mapTypeId: 'terrain'
//    });
//    console.log(1111);
//
//    var iconBase = 'http://fleetstreet186.com.ua/wp-content/themes/your-clean-template-3/img/';
//    var icons = {
//        fleetstreet: {
//            icon: iconBase + 'marker.png'
//        }
//    };
//
//    function addMarker(feature) {
//        var marker = new google.maps.Marker({
//            position: feature.position,
//            icon: icons[feature.type].icon,
//            map2: map2
//        });
//    }
//
//    var features = [{
//        position: new google.maps.LatLng(50.4625744, 30.4144849),
//        type: 'fleetstreet'
//    }];
//
//    for (var i = 0, feature; feature = features[i]; i++) {
//        addMarker(feature);
//    }
//}
