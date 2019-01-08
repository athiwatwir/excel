<div class="row">
    <div class="col-12">
        <div class="card-box">
            <div class="row">
                <div class="col-12 m-b-20 ">
                    <h2 class="prompt-400 text-primary"><i class="mdi mdi-account-settings-variant"></i> ตั้งค่าผู้ใช้งาน </h2>
                </div>
                <div class="col-md-6">
                    <h3 class="prompt-400"class="prompt-400">ข้อมูลส่วนตัว</h3>
                    <hr/>
                    <p><strong>ชื่อ-นามสกุล: </strong><?=h($user->fullname)?></p>
                    <p><strong>ชื่อผู้ใช้งาน: </strong><?=h($user->username)?></p>
                    <p><strong>อีเมลล์: </strong><?=h($user->email)?></p>
                    <p><strong>รายละเอียด: </strong><?=h($user->description)?></p>
                </div>
                <div class="col-md-6">
                    <h3 class="prompt-400"class="prompt-400">สิทธิการใช้งาน</h3>
                    <hr/>
                </div>
            </div>
        </div>
    </div>
</div>