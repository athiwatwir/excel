var map, marker, position;
var default_latLong = {lat: 17.745431, lng: 99.950923};

function newMap(id, latLong = {}) {
    console.log('latLong.length:' + latLong.lat);
    if (latLong.lat === undefined) {
        latLong = default_latLong;
    }
    map = new google.maps.Map(document.getElementById(id), {
        center: latLong,
        zoom: 15
    });
}
function mapWithMarker(id, latLong = {}){
    if (latLong.lat === undefined) {
        latLong = default_latLong;
    }

    map = new google.maps.Map(document.getElementById(id), {
        zoom: 11,
        center: latLong
    });

    marker = new google.maps.Marker({
        map: map,
        draggable: false,
        animation: google.maps.Animation.DROP,
        position: latLong
    });

}

function mapWithMarkerDraggable(id, latLong = {}){
    if (latLong.lat === undefined) {
        latLong = default_latLong;
    }

    map = new google.maps.Map(document.getElementById(id), {
        zoom: 11,
        center: latLong
    });

    marker = new google.maps.Marker({
        map: map,
        draggable: true,
        animation: google.maps.Animation.DROP,
        position: latLong
    });
    //console.log(map);
    //marker.addListener('click', toggleBounce);
    map.addListener('mousemove', function () {
        //console.log(marker.getPosition().lat());
        //alert(marker.getPosition());
        position = marker.getPosition();
        document.getElementById('latitude').value = position.lat();
        document.getElementById('longitude').value = position.lng();
    });
}

function setCenter(lat, lng) {
    var myLatLng = new google.maps.LatLng(lat, lng);
    map.setCenter(myLatLng);
}

function addNewMarker(lat, lng,name) {
    console.log(lat);
    var myLatLng = new google.maps.LatLng(lat, lng);
    var assetMarker = new google.maps.Marker({
        map: map,
        draggable: false,
        animation: google.maps.Animation.DROP,
        position: myLatLng,
        label: {
            text: name,
            color: "#424242",
            fontWeight: "bold"
        }
    });
}

function addNewMarkerBlue(lat, lng, name) {
    console.log(lat);
    var myLatLng = new google.maps.LatLng(lat, lng);
    var assetMarker = new google.maps.Marker({
        map: map,
        draggable: false,
        animation: google.maps.Animation.DROP,
        position: myLatLng,
        label: {
            text: name,
            color: "#424242",
            fontWeight: "bold"
        },
        icon: {
            url: "http://maps.google.com/mapfiles/ms/micons/green-dot.png"
        }
    });
}
function addNewMarkerRed(lat, lng, name) {
    console.log(lat);
    var myLatLng = new google.maps.LatLng(lat, lng);
    var assetMarker = new google.maps.Marker({
        map: map,
        draggable: false,
        animation: google.maps.Animation.DROP,
        position: myLatLng,
        label: {
            text: name,
            color: "#424242",
            fontWeight: "bold"
        },
        icon: {
            url: "http://maps.google.com/mapfiles/ms/micons/red-dot.png"
        }
    });
}