<div class="table-responsive text-nowrap" data-pattern="priority-columns">

    <table id="" class="table table-sm table-bordered table-hover" style="font-size: 12px;">
        <thead class="text-center thead-light">
            <tr>
                <th colspan="25" class="h4"><?= h($sheet['title']) ?></th>
            </tr>
            <tr>
                <th rowspan="4" class="align-middle">ลำดับ</th>
                <th rowspan="4" class="align-middle">เจ้าของแปลง</th>
                <th rowspan="4" class="align-middle">ปีที่ตรวจวิเคราะห์</th>
                <th colspan="5" class="align-middle">โลหะหนัก (ppm)</th>
                <th colspan="5" class="align-middle">คุณสมบัติทั่วไป</th>
                <th colspan="8" class="align-middle">สารกำจัดศัตรูพืช (Pesticide)</th>
                <th rowspan="3" colspan="2" class="align-middle">พิกัด</th>
                <th rowspan="4" class="align-middle">ความสูง</th>
                <th rowspan="4" class="align-middle">เลขแปลง</th>
            </tr>
            <tr>
                <th>Cd</th>
                <th>Cr</th>
                <th>Pb</th>
                <th>Hg</th>
                <th>As</th>
                <th>pH</th>
                <th>OM</th>
                <th>N</th>
                <th>P(Available)</th>
                <th>K(Available)</th>
                <th colspan="2">OC</th>
                <th colspan="2">PY</th>
                <th colspan="2">OP</th>
                <th colspan="2">CA</th>

            </tr>
            <tr>
                <th>≤ 0.15</th>
                <th>≤ 300</th>
                <th>≤ 400</th>
                <th>≤ 23</th>
                <th>≤ 30</th>
                <th></th>
                <th>%(wt)</th>
                <th>%(wt)</th>
                <th>mg/kg</th>
                <th>%(wt)</th>
                <th>Items</th>
                <th>mg/kg</th>
                <th>Items</th>
                <th>mg/kg</th>
                <th>Items</th>
                <th>mg/kg</th>
                <th>Items</th>
                <th>mg/kg</th>
            </tr>
            <tr>
                <th>mg/kg</th>
                <th>mg/kg</th>
                <th>mg/kg</th>
                <th>mg/kg</th>
                <th>mg/kg</th>
                <th>NC</th>
                <th>NC</th>
                <th>NC</th>
                <th>NC</th>
                <th>NC</th>
                <th>Lowest</th>
                <th>≤ 0.3</th>
                <th>NC</th>
                <th></th>
                <th>NC</th>
                <th></th>
                <th>NC</th>
                <th></th>
                <th>E</th>
                <th>N</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $template = $sheet['template'];
            $fomula = $template['formula'];
            $columns = ['seq', 'fullname', 'year', 'ppm_cd', 'ppm_cr', 'ppm_pb', 'ppm_hg', 'ppm_as', 'gen_ph', 'gen_om',
                'gen_n', 'gen_p', 'gen_k', 'oc_item', 'oc_weight', 'py_item', 'py_weight', 'op_item', 'op_weight',
                'ca_item', 'ca_weight', 'coordinates_e', 'coordinates_n', 'high', 'area_number'];
            ?>
            <?php foreach ($sheet['data_rows'] as $row): ?>
                <tr>
                    <?php foreach ($columns as $key => $column): ?>
                        <?php if ($fomula[$key] != 0 && is_numeric($row[$column]) && $row[$column] > $fomula[$key]) { ?>
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