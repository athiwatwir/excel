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
            <?php
            
            $template = $sheet['template'];
            $formula = $template['formula'];
            
            $columns = ['seq', 'office_center', 'fullname','farmer_code','code','year','plant_type','ppm_as','ppm_cd','ppm_pb','description'];
            ?>
            <?php foreach ($sheet['data_rows'] as $row): ?>
                <tr>
                    <?php foreach ($columns as $key => $column): ?>
                        <?php if ($formula[$key] != 0 && is_numeric($row[$column]) && $row[$column] > $formula[$key]) { ?>
                    <td class="text-danger"><strong><?= h($row[$column]) ?></strong></td>
                        <?php } else { ?>
                            <td><?=($key==1 && $row['status']=='F')?'<i class="mdi mdi-alert-circle text-danger"></i>':''?><?= h($row[$column]) ?></td>
                        <?php } ?>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        </tbody>


    </table>
    
</div>