<div class="login-container">

    <div class="login-box animated fadeInDown">
        <div class="login-logo"></div>
        <div class="login-title">
            <?= $this->session->flashdata('message'); ?>
        </div>
        <div class="login-body">
            <div class="login-title"><strong>Log In</strong> to your account</div>
            <form action="<?= base_url('auth'); ?>" class="form-horizontal" method="post">
                <div class="form-group">
                    <div class="col-md-12">
                        <input type="text" class="form-control" id="username" name="username" placeholder="Enter NPM" value="<?= set_value('username'); ?>" />
                        <?= form_error('email', '<small class="text-warning pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <input type="password" id="password" name="password" class="form-control" placeholder="Password" />
                        <?= form_error('password', '<small class="text-warning pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6">
                        <a href="<?= base_url(); ?>auth/forgotpassword" class="btn btn-link btn-block">Forgot your password?</a>
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-info btn-block">Log In</button>
                    </div>
                </div>
                <div class="login-subtitle">
                    Don't have an account yet? <a href="<?= base_url('auth/'); ?>registration">Create an account!</a>
                </div>
            </form>
        </div>
        <div class="login-footer">
            <div class="pull-left">
                &copy; 2019 SIAP-APP
            </div>
            <div class="pull-right">
                <a href="http://psy.uir.ac.id">Psikologi</a> |
                <a href="https://siapuir.com/perpustakaan">Library</a> |
                <a href="https://elearningpsyuir.com">E-Learning</a>
            </div>
        </div>
    </div>

</div>