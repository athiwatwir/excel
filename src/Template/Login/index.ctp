<div class="row m-t-20">
    <div class="col-12 text-center">
        <?= $this->Html->link('<i class="mdi mdi-radar"></i> <span>' . PAGE_TITLE . '</span>', [], ['class' => 'logo-lg', 'escape' => false]) ?>
    </div>
</div>
<div class="row">
    <div class="col-md-4 offset-md-4">
        <?= $this->Form->create('login', ['id' => 'login', 'novalidate' => true, 'class' => 'g-py-15']) ?>
        <div class="form-group row">
            <div class="col-12 text-center">
                <?= $this->Flash->render() ?>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-12">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="mdi mdi-account-box"></i></div>
                    </div>

                    <input type="text" name="username" class="form-control" id="username" placeholder="username">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-12">

                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="mdi mdi-key"></i></div>
                    </div>

                    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                </div>
            </div>
        </div>

        <div class="form-group row m-t-20">

            <div class="col-sm-12">
                <button class="btn btn-primary btn-block btn-custom w-md waves-effect waves-light" type="submit">Login
                </button>
            </div>

            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

<script>
    var resizefunc = [];
</script>