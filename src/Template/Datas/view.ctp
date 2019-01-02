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
                                        <?php
                                        if ($item['header'] == 'PLANT') {
                                            echo $this->element('ViewData/plant', ['sheet' => $item]);
                                        } elseif ($item['header'] == 'WATER') {
                                            echo $this->element('ViewData/water', ['sheet' => $item]);
                                        } elseif ($item['header'] == 'SOIL') {
                                            echo $this->element('ViewData/soil', ['sheet' => $item]);
                                        }
                                        ?>
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


