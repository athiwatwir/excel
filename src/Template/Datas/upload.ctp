
<?= $this->Html->css('/assetdist/plugins/dropzone/dist/dropzone.css')?>
<?= $this->element('Lib/data_table') ?>

<?= $this->Form->create('', ['id' => 'data', 'type' => 'file']) ?>
<div class="row m-t-70">

    

    <div class="col-12">
        <div class="card m-b-20 card-body">

            <div class="form-group row ">
                <div class="col-12 ">
                    <h2 class="prompt-400 "><i class="fa fa-cloud-upload"></i> อัพโหลดข้อมูล </h2>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-12">
                    <label class="col-form-label">Upload File</label>
                    <?= $this->Form->control('uploadfile', ['id' => 'filein', 'type' => 'file', 'class' => 'form-control', 'label' => false,'multiple'=>'multiple','accept'=>'.xlsx, .xls']) ?>
                </div>

                <div class="col-lg-12 text-right" style="<?= $displaynone ?>">
                    <button type="submit" id="subm" class="btn btn-success waves-effect"><i class="mdi mdi-content-save-all"></i> ตรวจสอบข้อมูล</button>
                </div>
            </div>

        </div>
    </div>



    <div class="col-12">
        <div class="card m-b-20 card-body">
            <div class="form-group row ">
                <div class="col-12 ">
                    <h2 class="prompt-400 "><i class="fa fa-file-excel-o"></i> Excel Template </h2>
                    <ol>
                        <li>Template 1 <?= $this->Html->link('ดูตัวอย่าง', 'javascript::void(0)', []) ?></li>
                        <li>Template 2 <?= $this->Html->link('ดูตัวอย่าง', 'javascript::void(0)', []) ?></li>
                        <li>Template 3 <?= $this->Html->link('ดูตัวอย่าง', 'javascript::void(0)', []) ?></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <?php if (isset($result) && sizeof($result) > 0) { ?>
        <div class="col-12">
            <div class="card m-b-20 card-body">
                <div class="form-group col-lg-12">
                    <ul class="nav nav-tabs">
                        <?php foreach ($result as $key => $item): ?>
                            <li class="nav-item">
                                <?php
                                $showactive = '';
                                $showable = 'false';
                                if ($key == 0) {
                                    $showactive = 'active';
                                    $showable = 'true';
                                }
                                ?>
                                <a href="<?= '#' . $item['sheetname'] ?>" data-toggle="tab" aria-expanded="<?= $showable ?>" class="nav-link <?= $showactive ?>">
                                    <?= $item['sheetname'] ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    <div class="tab-content">
                        <?php
                        foreach ($result as $key => $item):
                            ?>
                            <?php
                            $showtext = '';
                            if ($key == 0) {
                                $showtext = 'show active';
                            }
                            ?>
                            <div class="tab-pane fade <?= $showtext ?>" id="<?= $item['sheetname'] ?>">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="table-responsive" data-pattern="priority-columns">
                                            <table class="table table-sm table-bordered" style="font-size: 12px;">
                                                <thead>
                                                    <?php
                                                    if ($target == 'form1') {
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
                                                <?php foreach ($item['td'] as $itemtr): ?>
                                                    <tr>
                                                        <?php foreach ($itemtr as $keytd => $itemtd): ?>
                                                            <?php
                                                            $color = '';
                                                            if ($target == 'form1') {
                                                                
                                                            } else {
                                                                if ($key == 0) {
                                                                    if ($form2['calculat'][$keytd] != 0) {

                                                                        if (is_float($itemtd) || is_double($itemtd) || is_numeric($itemtd)) {

                                                                            if ($itemtd > $form2['calculat'][$keytd]) {
                                                                                $color = '#FF0000';
                                                                            }
                                                                        }
                                                                    }
                                                                } else {
                                                                    if ($form3['calculat'][$keytd] != 0) {

                                                                        if (is_float($itemtd) || is_double($itemtd) || is_numeric($itemtd)) {
                                                                            if ($keytd == 3) {
                                                                                if ($itemtd < $form3['calculat'][$keytd]) {
                                                                                    $color = '#FF0000';
                                                                                }
                                                                            } else {
                                                                                if ($itemtd > $form3['calculat'][$keytd]) {
                                                                                    $color = '#FF0000';
                                                                                }
                                                                            }
                                                                        }
                                                                    }
                                                                }
                                                            }
                                                            ?>
                                                            <td bgcolor="<?= $color ?>">
                                                                <?= $itemtd ?>
                                                            </td>
                                                        <?php endforeach; ?>
                                                    </tr>
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
    <?php } ?>

    <div class="col-12">
        <?php
        $displaynone = '';
        $displayshow = 'display: none';
        if (sizeof($result) > 0) {
            $displaynone = 'display: none';
            $displayshow = '';
            ?>
        <?php } ?>

        <?php $this->request->getSession()->write('name', $filename) ?>
        <?php $this->request->getSession()->write('detail', $result) ?>
        <?php $this->request->getSession()->write('form1', $form1) ?>
        <?php $this->request->getSession()->write('form2', $form2) ?>
        <?php $this->request->getSession()->write('form3', $form3) ?>

        <div class="col-lg-12 text-right" style="<?= $displayshow ?>">
            <a id="save" href="<?= SITE_URL . 'datas/' . $target ?>" class="btn btn-primary waves-effect waves-light"><span> บันทึกข้อมูล </span></a>
            <a href="<?= SITE_URL . 'datas/upload' ?>" class="btn btn-secondary waves-effect"><span> ยกเลิก </span></a>
        </div>
    </div>



</div>
<?= $this->Form->end() ?>

<?=$this->Html->script('/assetdist/plugins/dropzone/dist/dropzone.js')?>

<script>
    $(document).ready(function () {
        $("#save").click(function () {

            $('#page-load').show();
        });
    });
</script>


