<script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet-src.js"
crossorigin=""></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/proj4js/2.4.3/proj4.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAjwYiy1hsl0NL2mJQOjNL0NlTDbcSsrug" async defer></script>

<div class="row m-t-70 d-print-none">
    <div class="col-12">
        <div class="card m-b-20 card-body">

            <div class="form-group row ">
                <div class="col-12 ">
                    <h2 class="prompt-400 "><i class="fa fa-cloud-upload"></i> รายงาน </h2>
                </div>
            </div>
            <?= $this->Form->create('') ?>
            <div class="row">
                <div class="form-group col-12">
                    <label><strong>หัวข้อ/โครงการ</strong></label>
                    <input type="text" class="form-control" name="title" value="">
                </div>
                <div class="form-group col-4">
                    <label><strong>ประเภท</strong></label>
                    <div class="checkbox checkbox-primary">
                        <input id="soli" type="checkbox" name="type[]" value="SOIL">
                        <label for="soli">
                            รวมดิน
                        </label>
                    </div><div class="checkbox checkbox-primary">
                        <input id="water" type="checkbox" name="type[]" value="WATER">
                        <label for="water">
                            รวมน้ำ
                        </label>
                    </div>
                </div>

                <div class="form-group col-4">
                    <label><strong>ปีที่ตรวจวิเคราะห์</strong></label>
                    <?= $this->Form->select('year', $yearList, ['class' => 'form-control','empty'=>'ทุกปี']) ?>

                </div>

                <div class="col-lg-12 text-center" style="">
                    <button type="submit" id="subm" class="btn btn-success waves-effect"><i class="mdi mdi-content-save-all"></i> ค้นหา</button>
                </div>
            </div>
            <?= $this->Form->end() ?>

        </div>
    </div>

</div>
<?php if (isset($result)) { ?>
    <div class="row m-t-70">

        <div class="col-12">
            <div class="card m-b-20 card-body">
                <div class="row d-print-none">
                    <div class="col-12 ">
                        <div class="text-left">
                            <a href="javascript:window.print()" class="btn btn-dark waves-effect waves-light"><i class="fa fa-print"></i> Print</a>

                        </div>
                    </div>

                </div>
                <hr>
                <div class="row">
                    
                    <div class="col-12">
                        <h4>แผนที่</h4>
                        <div id="map" style="height: 600px;"></div>
                    </div>
                    
                </div>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <h4 class="m-b-20">รายชื่อ</h4>
                        <table class="table table-sm">
                            <thead>
                                <tr>
                                    <th>ลำดับ</th>
                                    <th>รายชื่อ</th>
                                    <th>ปีที่วิเคราะห์</th>
                                    <th>โครงการ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($result as $key=>$item):?>
                                <tr class="<?=$item['status']=='F'?'text-danger':''?>">
                                    <td><?=($key+1)?></td>
                                    <td><?=h($item['fullname'])?></td>
                                    <td><?=h($item['year'])?></td>
                                    <td><?=h($item['title'])?></td>
                                </tr>
                                
                                <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>
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
                if (key == 0) {
                    setCenter(latLong.lat, latLong.lng);
                }
                if(value.status =='F'){
                    addNewMarkerRed(latLong.lat, latLong.lng, value.fullname);
                }else{
                    addNewMarkerBlue(latLong.lat, latLong.lng, value.fullname);
                }
                
            });


        });
    </script>

    <?php
}?>