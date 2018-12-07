<script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet-src.js"
      crossorigin=""></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/proj4js/2.4.3/proj4.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAjwYiy1hsl0NL2mJQOjNL0NlTDbcSsrug" async defer></script>

<div class="">
    <div class="row no-gutters">
        <div class="col-12">
            <h3><?= $sheet->name ?></h3>
        </div>
        <div class="col-12">
            <div id="map" style="height: 600px;"></div>
        </div>

    </div>
</div>
<?= $this->Html->script('map.js') ?>
<?= $this->Html->script('L.LatLng.UTM.js') ?>
<script>


    $(document).ready(function () {
        function toLatLng(x, y) {

            var utm = L.utm(x, y, 47, 'S');
            var ll = utm.latLng();
            if (ll) {
                //marker.setLatLng(ll).bindPopup(utm + '<br>' + ll).openPopup()
                var lat = ll.lat.toFixed(6);
                var lng = ll.lng.toFixed(6);
                var latLong = {lat: lat, lng: lng};

                return latLong;
            }
        }


        var str = '<?= ($json) ?>';
        var jsonData = JSON.parse(str);

        //console.log(jsonData);
        newMap('map');
        var latLong = {};

        $.each(jsonData, function (key, value) {
            latLong = toLatLng(value.coordinates_e, value.coordinates_n);
            if(key==0){
                setCenter(latLong.lat, latLong.lng);
            }
            addNewMarker(latLong.lat, latLong.lng,value.office_center);
        });


    });
</script>