<div class="login-container">

    <div class="login-box animated fadeInDown">
        <div class="login-logo"></div>
        <div class="login-body">
            <div class="login-title"><strong>Create</strong> an account!</div>
            <form action="<?= base_url('auth/registration'); ?>" class="form-horizontal" method="post">
                <div class="form-group">
                    <?= showFlashMessage() ?>
                    <?= showMessage() ?>
                    <?= $this->session->flashdata('message'); ?>
                    <div class="col-md-12">
                        <input type="text" class="form-control" id="username" name="username" placeholder="Enter NPM" value="<?= set_value('username'); ?>" />
                        <?= form_error('username', '<small class="text-warning pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Enter Full Name" value="<?= set_value('nama'); ?>" />
                        <?= form_error('nama', '<small class="text-warning pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <input type="text" class="form-control" id="email" name="email" placeholder="Enter E-mail" value="<?= set_value('email'); ?>" />
                        <?= form_error('email', '<small class="text-warning pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6">
                        <input type="password" id="password1" name="password1" class="form-control" placeholder="Password" />
                        <?= form_error('password1', '<small class="text-warning pl-3">', '</small>'); ?>
                    </div>

                    <div class="col-md-6">
                        <input type="password" id="password2" name="password2" class="form-control" placeholder="Repeat Password" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6">
                        <a href="<?= base_url(); ?>auth/forgotpassword" class="btn btn-link btn-block">Forgot your password?</a>
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-info btn-block">Register Account</button>
                    </div>
                </div>
                <div class="login-subtitle">
                    Already have an account? <a href="<?= base_url('auth/') ?>">Login</a>
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