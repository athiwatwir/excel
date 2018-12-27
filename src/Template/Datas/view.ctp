<?= $this->element('Lib/data_table') ?>
<?= $this->element('Lib/table_export_master') ?>
<style>
    td{
        word-break: break-word;
    }
</style>
<div class="row m-t-70">
    <div class="col-lg-12">
        <div class="card m-b-20 card-body">
            <?= $this->Form->create('', ['id' => 'data', 'type' => 'file']) ?>
            <div class="row">
                <div class="col-md-12">
                    <button class="btn btn-primary pull-left m-b-25" id="export_btn" type="button">
                        <i class="fa fa-file-excel-o"></i> Export with Excel format
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-lg-12">
                    <ul class="nav nav-tabs">
                        <?php foreach ($data['data_sheets'] as $key => $item): ?>
                            <li class="nav-item">
                                <?php
                                $showactive = '';
                                $showable = 'false';
                                if ($key == 0) {
                                    $showactive = 'active';
                                    $showable = 'true';
                                }
                                ?>
                                <a href="<?= '#' . $item['name'] ?>" data-toggle="tab" aria-expanded="<?= $showable ?>" class="nav-link <?= $showactive ?>">
                                    <?= $item['name'] ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    <div class="tab-content">
                        <?php
                        foreach ($data['data_sheets'] as $key => $item):
                            ?>
                            <?php
                            $showtext = '';
                            if ($key == 0) {
                                $showtext = 'show active';
                            }
                            ?>
                            <div class="tab-pane fade <?= $showtext ?>" id="<?= $item['name'] ?>">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="table-responsive text-nowrap" data-pattern="priority-columns">
                                            <?=$this->Html->link('<i class="mdi mdi-google-maps"></i> Map',['controller'=>'datas','action'=>'map-view',$item['id']],['escape'=>false,'class'=>'btn btn-secondary waves-effect m-b-5','target'=>'_blank'])?>
                                            <table id="" class="table table-sm table-bordered" style="font-size: 12px;">
                                                <thead>
                                                    <?php
                                                    echo $item['title'];
                                                    if ($item['header'] == 'form1') {
                                                        echo $form1['title'];
                                                        echo $form1['header'];
                                                    } else {
                                                        if ($key == 0) {
                                                            echo $form2['title'];
                                                            echo $form2['header'];
                                                        } else {
                                                            echo $form3['title'];
                                                            echo $form3['header'];
                                                        }
                                                    }
                                                    ?>
                                                </thead>
                                                <?php foreach ($item['data_rows'] as $itemtr): ?>
                                                    <?php if ($item['header'] == 'form1') { ?>
                                                        <tr>
                                                            <td><?= $itemtr->seq ?></td>
                                                            <td><?= $itemtr->office_center ?></td>
                                                            <td><?= $itemtr->fullname ?></td>
                                                            <td><?= $itemtr->farmer_code ?></td>
                                                            <td><?= $itemtr->code ?></td>
                                                            <td><?= $itemtr->plant_type ?></td>
                                                            <td><?= $itemtr->ppm_as ?></td>
                                                            <td><?= $itemtr->ppm_cd ?></td>
                                                            <td><?= $itemtr->ppm_pb ?></td>
                                                            <td><?= $itemtr->description ?></td>
                                                        </tr>
                                                        <?php
                                                    } else {
                                                        if ($key == 0) {
                                                            ?>
                                                            <tr>
                                                                <td><?= $itemtr->seq ?></td>
                                                                <td><?= $itemtr->fullname ?></td>
                                                                <td><?= $itemtr->year ?></td>
                                                                <?php if (($itemtr->ppm_cd ) > $form2['calculat'][3]) { ?> 
                                                                    <td style="background-color: #FF0000;"><?= $itemtr->ppm_cd ?></td>
                                                                <?php } else { ?> 
                                                                    <td><?= $itemtr->ppm_cd ?></td>
                                                                <?php } ?>

                                                                <?php if (($itemtr->ppm_cr ) > $form2['calculat'][4]) { ?> 
                                                                    <td style="background-color: #FF0000;"><?= $itemtr->ppm_cr ?></td>
                                                                <?php } else { ?> 
                                                                    <td><?= $itemtr->ppm_cr ?></td>
                                                                <?php } ?>
                                                                <?php if (($itemtr->ppm_pb ) > $form2['calculat'][5]) { ?> 
                                                                    <td style="background-color: #FF0000;"><?= $itemtr->ppm_pb ?></td>
                                                                <?php } else { ?> 
                                                                    <td><?= $itemtr->ppm_pb ?></td>
                                                                <?php } ?>
                                                                <?php if (($itemtr->ppm_hg ) > $form2['calculat'][6]) { ?> 
                                                                    <td style="background-color: #FF0000;"><?= $itemtr->ppm_hg ?></td>
                                                                <?php } else { ?> 
                                                                    <td><?= $itemtr->ppm_hg ?></td>
                                                                <?php } ?>
                                                                <?php if (($itemtr->ppm_as ) > $form2['calculat'][7]) { ?> 
                                                                    <td style="background-color: #FF0000;"><?= $itemtr->ppm_as ?></td>
                                                                <?php } else { ?> 
                                                                    <td><?= $itemtr->ppm_as ?></td>
                                                                <?php } ?>
                                                                <td><?= $itemtr->gen_ph ?></td>
                                                                <td><?= $itemtr->gen_om ?></td>
                                                                <td><?= $itemtr->gen_n ?></td>
                                                                <td><?= $itemtr->gen_p ?></td>
                                                                <td><?= $itemtr->gen_k ?></td>
                                                                <td><?= $itemtr->oc_item ?></td>
                                                                <td><?= $itemtr->oc_weight ?></td>
                                                                <td><?= $itemtr->py_item ?></td>
                                                                <td><?= $itemtr->py_weight ?></td>
                                                                <td><?= $itemtr->op_item ?></td>
                                                                <td><?= $itemtr->op_weight ?></td>
                                                                <td><?= $itemtr->ca_item ?></td>
                                                                <td><?= $itemtr->ca_weight ?></td>
                                                                <td><?= $itemtr->coordinates_e ?></td>
                                                                <td><?= $itemtr->coordinates_n ?></td>
                                                                <td><?= $itemtr->high ?></td>
                                                                <td><?= $itemtr->area_number ?></td>
                                                            </tr>
                                                        <?php } else {
                                                            ?>
                                                            <tr>
                                                                <td><?= $itemtr->seq ?></td>
                                                                <td><?= $itemtr->fullname ?></td>
                                                                <td><?= $itemtr->year ?></td>
                                                                <?php if (($itemtr->chemical_do ) < $form3['calculat'][3]) { ?> 
                                                                <td style="background-color: #FF0000;"><?= $itemtr->chemical_do ?></td>
                                                                <?php } else { ?> 
                                                                    <td><?= $itemtr->chemical_do ?></td>
                                                                <?php } ?>

                                                                <?php if (($itemtr->chemical_bod ) > $form3['calculat'][4]) { ?> 
                                                                    <td style="background-color: #FF0000;"><?= $itemtr->chemical_bod ?></td>
                                                                <?php } else { ?> 
                                                                    <td><?= $itemtr->chemical_bod ?></td>
                                                                <?php } ?>
                                                                <?php if (($itemtr->chemical_no3n ) > $form3['calculat'][5]) { ?> 
                                                                    <td style="background-color: #FF0000;"><?= $itemtr->chemical_no3n ?></td>
                                                                <?php } else { ?> 
                                                                    <td><?= $itemtr->chemical_no3n ?></td>
                                                                <?php } ?>
                                                                <?php if (($itemtr->chemical_nh3n ) > $form3['calculat'][6]) { ?> 
                                                                    <td style="background-color: #FF0000;"><?= $itemtr->chemical_nh3n ?></td>
                                                                <?php } else { ?> 
                                                                    <td><?= $itemtr->chemical_nh3n ?></td>
                                                                <?php } ?>
                                                                <?php if (($itemtr->oc_weight ) > $form3['calculat'][7]) { ?> 
                                                                    <td style="background-color: #FF0000;"><?= $itemtr->oc_weight ?></td>
                                                                <?php } else { ?> 
                                                                    <td><?= $itemtr->oc_weight ?></td>
                                                                <?php } ?>
                                                                <?php if (($itemtr->op_weight ) > $form3['calculat'][8]) { ?> 
                                                                    <td style="background-color: #FF0000;"><?= $itemtr->op_weight ?></td>
                                                                <?php } else { ?> 
                                                                    <td><?= $itemtr->op_weight ?></td>
                                                                <?php } ?>
                                                                <?php if (($itemtr->ca_weight ) > $form3['calculat'][9]) { ?> 
                                                                    <td style="background-color: #FF0000;"><?= $itemtr->ca_weight ?></td>
                                                                <?php } else { ?> 
                                                                    <td><?= $itemtr->ca_weight ?></td>
                                                                <?php } ?>
                                                                <?php if (($itemtr->py_weight ) > $form3['calculat'][10]) { ?> 
                                                                    <td style="background-color: #FF0000;"><?= $itemtr->py_weight ?></td>
                                                                <?php } else { ?> 
                                                                    <td><?= $itemtr->py_weight ?></td>
                                                                <?php } ?>
                                                                <?php if (($itemtr->ppm_cd ) > $form3['calculat'][11]) { ?> 
                                                                    <td style="background-color: #FF0000;"><?= $itemtr->ppm_cd ?></td>
                                                                <?php } else { ?> 
                                                                    <td><?= $itemtr->ppm_cd ?></td>
                                                                <?php } ?>

                                                                <?php if (($itemtr->ppm_cr ) > $form3['calculat'][12]) { ?> 
                                                                    <td style="background-color: #FF0000;"><?= $itemtr->ppm_cr ?></td>
                                                                <?php } else { ?> 
                                                                    <td><?= $itemtr->ppm_cr ?></td>
                                                                <?php } ?>
                                                                <?php if (($itemtr->ppm_pb ) > $form3['calculat'][13]) { ?> 
                                                                    <td style="background-color: #FF0000;"><?= $itemtr->ppm_pb ?></td>
                                                                <?php } else { ?> 
                                                                    <td><?= $itemtr->ppm_pb ?></td>
                                                                <?php } ?>
                                                                <?php if (($itemtr->ppm_hg ) > $form3['calculat'][14]) { ?> 
                                                                    <td style="background-color: #FF0000;"><?= $itemtr->ppm_hg ?></td>
                                                                <?php } else { ?> 
                                                                    <td><?= $itemtr->ppm_hg ?></td>
                                                                <?php } ?>
                                                                <?php if (($itemtr->ppm_as ) > $form3['calculat'][15]) { ?> 
                                                                    <td style="background-color: #FF0000;"><?= $itemtr->ppm_as ?></td>
                                                                <?php } else { ?> 
                                                                    <td><?= $itemtr->ppm_as ?></td>
                                                                <?php } ?>
                                                                <?php if (($itemtr->nutrient_cu ) > $form3['calculat'][16]) { ?> 
                                                                    <td style="background-color: #FF0000;"><?= $itemtr->nutrient_cu ?></td>
                                                                <?php } else { ?> 
                                                                    <td><?= $itemtr->nutrient_cu ?></td>
                                                                <?php } ?>
                                                                <td><?= $itemtr->nutrient_ca ?></td>
                                                                <?php if (($itemtr->coliform ) > $form3['calculat'][18]) { ?> 
                                                                    <td style="background-color: #FF0000;"><?= $itemtr->coliform ?></td>
                                                                <?php } else { ?> 
                                                                    <td><?= $itemtr->coliform ?></td>
                                                                <?php } ?>
                                                                <?php if (($itemtr->fecal ) > $form3['calculat'][19]) { ?> 
                                                                    <td style="background-color: #FF0000;"><?= $itemtr->fecal ?></td>
                                                                <?php } else { ?> 
                                                                    <td><?= $itemtr->fecal ?></td>
                                                                <?php } ?>
                                                                <td><?= $itemtr->coordinates_e ?></td>
                                                                <td><?= $itemtr->coordinates_n ?></td>
                                                                <td><?= $itemtr->high ?></td>
                                                            </tr>
                                                            <?php
                                                        }
                                                    }
                                                    ?>
                                                <?php endforeach; ?>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $("#save").click(function () {

            $('#page-load').show();
        });


        var exportTable = $("table");
        var export_tables = new TableExport(exportTable, {
            formats: ['xlsx'],
            bootstrap: true,
            exportButtons: false
        });
        var tables_data = export_tables.getExportData();
        var export_data = [];
        var xlsx_info = {};
        for (table_id in tables_data) {
            xlsx_info = tables_data[table_id]["xlsx"];
            export_data.push(tables_data[table_id]["xlsx"].data);
        }
        var fileExtension = xlsx_info.fileExtension;
        var mimeType = xlsx_info.mimeType;
        $("#export_btn").click(function () {
            export_tables.exportmultisheet(export_data, mimeType, "Test Export", ["week plan", "person"],
                    fileExtension, {}, []);
        });



    });
</script>


