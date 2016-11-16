jQuery(document).ready(function ($) {

    var marker;
    var map;

    function initialize() {
        var lat = '10.780591';
        var lng = '106.6597953';
        var Latlng = new google.maps.LatLng(lat, lng);
        var mapOptions = {
            zoom: 10,
            center: Latlng
        }
        map = new google.maps.Map(document.getElementById('map-canvas'),
            mapOptions);
        marker = new google.maps.Marker({
            position: Latlng,
            map: map,
            animation: google.maps.Animation.DROP,
            draggable: true
        });
        google.maps.event.addListener(marker, 'click', toggleBounce);
    }

    function toggleBounce() {
        if (marker.getAnimation() != null) {
            marker.setAnimation(null);
        } else {
            marker.setAnimation(google.maps.Animation.BOUNCE);
        }
    }

    google.maps.event.addDomListener(window, 'load', initialize);

});