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
                <th colspan="4" class="align-middle">เคมีทั่วไป</th>
                <th colspan="4" class="align-middle">สารกำจัดศัตรูพืช (Pesticide)</th>
                <th colspan="5" class="align-middle">โลหะหนัก (ppm)</th>

                <th colspan="2" class="align-middle">ธาตุอาหาร</th>
                <th colspan="2" class="align-middle">จุลินทรีย์</th>
                <th rowspan="3" colspan="2" class="align-middle">พิกัด</th>
                <th rowspan="4" class="align-middle">ความสูง</th>

            </tr>
            <tr>
                <th>DO</th>
                <th>BOD</th>
                <th>NO3-N</th>
                <th>NH3-N</th>
                <th>OC</th>
                <th>OP</th>
                <th>CA</th>
                <th>PY</th>
                <th>Cd</th>
                <th>Cr</th>
                <th>Pb</th>
                <th>Hg</th>
                <th>As</th>
                <th>Cu</th>
                <th>Ca</th>
                <th>Coliform</th>
                <th>Fecal</th>
            </tr>
            <tr>
                <th>mg/L</th>
                <th>mg/L</th>
                <th>mg/L</th>
                <th>mg/L</th>
                <th>mg/L</th>
                <th>mg/L</th>
                <th>mg/L</th>
                <th>mg/L</th>
                <th>mg/L</th>
                <th>mg/L</th>
                <th>mg/L</th>
                <th>mg/L</th>
                <th>mg/L</th>
                <th>mg/L</th>
                <th>mg/L</th>
                <th>MPN/100mL</th>
                <th>MPN/100mL</th>
            </tr>
            <tr>
                <th>>4.0</th>
                <th><2.0</th>
                <th><5.0</th>
                <th><0.5</th>
                <th><0.5</th>
                <th><0.01</th>
                <th><0.01</th>
                <th><0.01</th>
                <th><0.05</th>
                <th><0.05</th>
                <th><0.05</th>
                <th><0.002</th>
                <th><0.01</th>
                <th><1.0</th>
                <th>NC</th>
                <th><2000</th>
                <th><4000</th>
                <th>E</th>
                <th>N</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $template = $sheet['template'];
            $fomula = $template['fomula'];
            $columns = ['seq', 'fullname', 'year', 'chemical_do', 'chemical_bod', 'chemical_no3n', 'chemical_nh3n', 'oc_weight', 'op_weight', 'ca_weight',
                'py_weight', 'ppm_cd', 'ppm_cr', 'ppm_pb', 'ppm_hg', 'ppm_as', 'nutrient_cu', 'nutrient_ca', 'coliform',
                'fecal', 'coordinates_e', 'coordinates_n', 'high'];
            ?>
            <?php foreach ($sheet['data_rows'] as $row): ?>
                <tr>
                    <?php foreach ($columns as $key => $column): ?>
                        <?php if ($key == 3) { ?>
                            <?php if ($fomula[$key] != 0 && is_numeric($row[$column]) && $row[$column] <= $fomula[$key]) { ?>
                                <td class="text-danger"><strong><?= h($row[$column]) ?></strong></td>
                            <?php } else { ?>
                                <td><?= h($row[$column]) ?></td>
                            <?php } ?>
                            <?php continue; ?>    
                        <?php } ?>

                        <?php if ($fomula[$key] != 0 && is_numeric($row[$column]) && $row[$column] > $fomula[$key]) { ?>
                            <td class="text-danger"><strong><?= h($row[$column]) ?></strong></td>
                                <?php } else { ?>
                            <td><?= h($row[$column]) ?></td>
                        <?php } ?>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        </tbody>

    </table>

</div>