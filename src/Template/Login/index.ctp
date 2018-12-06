<div class="wrapper-page">
    <div class="text-center">
        <a href="<?=SITE_URL?>" class="logo-lg"><i class="mdi mdi-radar"></i> <span><?= PAGE_TITLE ?></span> </a>
    </div>

    <?= $this->Form->create('login', ['id' => 'login', 'novalidate' => true, 'class' => 'g-py-15']) ?>
    <div class="form-group row">
        <div class="col-12">
            <div class="input-group">
                <span class="input-group-addon"><i class="mdi mdi-account"></i></span>
                <input class="form-control" type="email" required="" placeholder="email" name="email">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-12">
            <div class="input-group">
                <span class="input-group-addon"><i class="mdi mdi-radar"></i></span>
                <input class="form-control" type="password" required="" placeholder="Password" name="password">
            </div>
        </div>
    </div>

    <div class="form-group row m-t-30">
        <div class="col-sm-7">
            <?= $this->Html->link('<i class=" fa fa-lock m-r-5"></i>  <span>Forgot your password?</span>', ['action' => 'recoverpw'], ['class' => 'text-muted', 'escape' => false]) ?>
        </div>
        <div class="col-sm-5">
            <button class="btn btn-primary btn-block btn-custom w-md waves-effect waves-light" type="submit">Login
            </button>
        </div>
        <div class="col-12 text-center">
            <?= $this->Flash->render() ?>
        </div>
    </div>
</form>
</div>
<script>
    var resizefunc = [];
</script>