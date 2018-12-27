<?php if ($status == 'DR') { ?>
    <?= $this->Form->create('', ['id' => 'data', 'type' => 'file', 'enctype' => 'multipart/form-data']) ?>
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
                        <?= $this->Form->hidden('taskid', ['value' => $taskId]) ?>
                        <?= $this->Form->control('uploadfile[]', ['id' => 'uploadfile', 'type' => 'file', 'class' => 'form-control', 'label' => false, 'multiple', 'accept' => '.xlsx, .xls']) ?>
                    </div>

                    <div class="col-lg-12 text-right" style="">
                        <button type="submit" id="subm" class="btn btn-success waves-effect"><i class="mdi mdi-content-save-all"></i> ส่งข้อมูล</button>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <?= $this->Form->end() ?>
    <script>
        $(document).ready(function () {
            $("#save").click(function () {

                $('#page-load').show();
            });
        });
    </script>

<?php } elseif ($status == 'UPLOADED') { ?>
    <div class="row">
        <div class="col-12">
            <div class="card m-b-20 card-body">
                <h2 class="prompt-400 "><i class="fa fa-cloud-upload"></i> ผลการอัพข้อมูล </h2>
                <table class="table table-sm" id="tb_result">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>ชื่อไฟล์</th>
                            <th>สถานะ</th>
                            <th>Action</th>
                            <th>หมายเหตุ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($upload_files as $key => $file): ?>
                            <tr data-name="<?=$file?>" data-task="<?=$taskId?>">
                                <td><?= h($key + 1) ?></td>
                                <td><?= h($file) ?></td>
                                <td data-id="status">กำลังบันทึก กรุณารอสักครู่...</td>
                                <td data-id="button"></td>
                                <td data-id="msg"></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <script>
        var siteurl = '<?=SITE_URL?>';
        $(document).ready(function () {
            $('#tb_result > tbody > tr').each(function(e){
                
                //console.log($(this).find('td[data-id="status"]').text());
                var file_name = $(this).attr('data-name');
                var task_id = $(this).attr('data-task');
                var objRow = $(this);
                
                console.log(file_name);
                
                //$('#page-load').show();
                $.get(siteurl+'upload/save-file',{task_id:task_id,file_name:file_name}).done(function(data){
                    var json = JSON.parse(data);
                    console.log(json);
                    if(json.status == 200){
                        objRow.find('td[data-id="status"]').text('');
                        objRow.find('td[data-id="status"]').append('<span class="text-success">เสร็จแล้ว</span>');
                        objRow.find('td[data-id="button"]').append('<a class="btn btn-sm btn-success waves-effect waves-light" href="'+siteurl+'datas/view/'+json.data.data_id+'" target="_blank">View</a>');
                    }else{
                        objRow.find('td[data-id="status"]').text('');
                        objRow.find('td[data-id="status"]').append('<span class="text-danger">ผิดพลาด</span>');
                        objRow.find('td[data-id="msg"]').text(json.message);
                    }
                });
            });
        });
    </script>

<?php } ?>

