<?= $this->element('Lib/data_table') ?>
<div class="row">
    <div class="col-12">
        <div class="card-box">
            <div class="row">
                <div class="col-md-6"><h2 class="prompt-400 text-primary"><i class="mdi mdi-account-network"></i> ผู้ใช้งาน </h2></div>
                <div class="col-md-6 text-right">
                    <?= $this->Html->link('อัพเดชรายชื่อจาก AD', ['controller' => 'users', 'action' => 'ad-update'], ['id' => 'bt_update_ad_user', 'class' => 'btn btn-primary waves-effect waves-light right-align', 'escape' => false]) ?>
                </div>
            </div>



        </div>

    </div>
    <div class="col-12">
        <div class="card-box">
            <table class="table table-sm table-hover" id="datatable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>ชื่อ-นามสกุล</th>
                        <th>ชื่อผู้ใช้งาน</th>
                        <th>Email</th>
                        <th>รายละเอียด</th>
                        <th style="width: 100px;"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $key => $user): ?>
                        <tr>
                            <td><?= $key + 1 ?></td>
                            <td><?= h($user->fullname) ?></td>
                            <td><?= h($user->username) ?></td>
                            <td><?= h($user->email) ?></td>
                            <td><?= h($user->description) ?></td>

                            <td class="actions">
                                <?=$this->Html->link('<i class="fa fa-pencil"></i> ตั้งค่า',['controller'=>'users','action'=>'setting',$user->id],[
                                    'class'=>'on-default','data-toggle'=>'tooltip','data-placement'=>'top',
                                    'data-original-title'=>'ตั้งค่า','escape'=>false
                                    ])?>
                                
                            </td>

                        </tr>

                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('#bt_update_ad_user').on('click', function () {
            $('#page-load').show();
        });

    });
</script>