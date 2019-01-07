<div class="row">
    <div class="col-lg-7">
        <div class="card-box">
            <h4 class="text-dark  header-title m-t-0">รายการบันทึกล่าสุด</h4>


            <table class="table mb-0 ">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>รายการ</th>
                        <th>วันที่</th>
                        <th>ผู้ทำรายการ</th>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($datas as $key => $item): ?>
                        <tr>
                            <td><?= h($key + 1) ?></td>
                            <td><?= h($item->name) ?></td>
                            <td><?= h($item->created->i18nFormat(DATE_TIME_FORMATE, null, TH_DATE)) ?></td>
                            <td><?= h($item->user->username) ?></td>

                        </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>
    </div>
    <!-- end col -8 -->

    <div class="col-lg-5">
        <div class="card-box">
            <h4 class="text-dark header-title m-t-0 m-b-30">จำนวนแปลงแบ่งตามประเภท</h4>

            <div class="widget-chart text-center">
                <div id="sparkline3">
                    <canvas width="200" height="200" style="display: inline-block; width: 200px; height: 200px; vertical-align: top;"></canvas>
                </div>
                <ul class="list-inline m-t-15 mb-0">
                    <li  style="color: #E65100;">
                        <h5 class=" m-t-20">รวมดิน</h5>
                        <h4 class="m-b-0"><?=$this->Number->format($stat['SOIL']['total'])?></h4>
                    </li>
                    <li  style="color: #424242;">
                        <h5 class=" m-t-20">รวมน้ำ</h5>
                        <h4 class="m-b-0"><?=$this->Number->format($stat['WATER']['total'])?></h4>
                    </li>
                    <li  style="color: #0277BD;">
                        <h5 class=" m-t-20">รวมพืช</h5>
                        <h4 class="m-b-0"><?=$this->Number->format($stat['PLANT']['total'])?></h4>
                    </li>
                </ul>
            </div>
        </div>

    </div>

</div>
<script>
    /**
     * Theme: Minton Admin Template
     * Author: Coderthemes
     * Component: Dashboard
     *
     */
    $(document).ready(function () {

        var DrawSparkline = function () {

            $('#sparkline3').sparkline([<?=$stat['SOIL']['percent']?>, <?=$stat['WATER']['percent']?>, <?=$stat['PLANT']['percent']?>], {
                type: 'pie',
                width: '200',
                height: '200',
                sliceColors: ['#E65100', '#424242', '#0277BD']
            });


        };


        DrawSparkline();

        var resizeChart;

        $(window).resize(function (e) {
            clearTimeout(resizeChart);
            resizeChart = setTimeout(function () {
                DrawSparkline();
            }, 300);
        });
    });
</script>