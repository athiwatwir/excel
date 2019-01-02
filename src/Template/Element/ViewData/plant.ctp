<div class="table-responsive text-nowrap" data-pattern="priority-columns">
    
    <table id="" class="table table-sm table-bordered table-hover" style="font-size: 12px;">
        <thead class="text-center thead-light">
            <tr>
                <th colspan="11" class="h4"><?=h($sheet['title'])?></th>
            </tr>
            <tr>
                <th rowspan="3" class="align-middle">ลำดับ</th>
                <th rowspan="3" class="align-middle">ศูนย์/สถานี</th>
                <th rowspan="3" class="align-middle">ชื่อเกษตรกร</th>
                <th rowspan="3" class="align-middle">รหัสเกษตรกร</th>
                <th rowspan="3" class="align-middle">รหัสตัวอย่าง</th>
                <th rowspan="3" class="align-middle">ปี</th>
                <th rowspan="3" class="align-middle">ชนิดพืช</th>
                <th colspan="3">ผลการทดสอบโลหะหนัก</th>
                <th rowspan="3" class="align-middle">หมายเหตุ</th>
            </tr>
            <tr>
                <th>As</th>
                <th>Cd</th>
                <th>Pb</th>
            </tr>
            <tr>
                <th>2 mg/kg</th>
                <th>0.05 mg/kg</th>
                <th>1 mg/kg</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sheet['data_rows'] as $row):?>
            <tr>
                <td><?=h($row['seq'])?></td>
                <td><?=h($row['office_center'])?></td>
                <td><?=h($row['fullname'])?></td>
                <td><?=h($row['farmer_code'])?></td>
                <td><?=h($row['code'])?></td>
                <td><?=h($row['year'])?></td>
                <td><?=h($row['plant_type'])?></td>
                <td><?=h($row['ppm_as'])?></td>
                <td><?=h($row['ppm_cd'])?></td>
                <td><?=h($row['ppm_pb'])?></td>
                <td><?=h($row['description'])?></td>
            </tr>
            
            <?php endforeach;?>
        </tbody>

    </table>
    
</div>