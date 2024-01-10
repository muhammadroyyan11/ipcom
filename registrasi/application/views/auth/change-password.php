<div class="login-container">

    <div class="login-box animated fadeInDown">
        <div class="login-logo"></div>
        <div class="login-title">
            <?= $this->session->flashdata('message'); ?>
        </div>
        <div class="login-body">
            <div class="login-title text-center"><strong>Change</strong> your password?</div>
            <div class="login-title text-center"><small><?= $this->session->userdata('reset_email'); ?></small></div>
            <form action="<?= base_url('auth/changepassword'); ?>" class="form-horizontal" method="post">
                <div class="form-group">
                    <div class="col-md-12">
                        <input type="text" class="form-control" id="password1" name="password1" placeholder="Enter a new password ..." />
                        <?= form_error('password1', '<small class="text-warning pl-3">', '</small>'); ?>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12">
                        <input type="text" class="form-control" id="password2" name="password2" placeholder="Repeat password ..." />
                        <?= form_error('password2', '<small class="text-warning pl-3">', '</small>'); ?>
                    </div>
                </div>

                <div class="form-group">

                    <div class="col-md-12">
                        <button type="submit" class="btn btn-info btn-block">Change Password</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="login-footer">
            <div class="pull-left">
                &copy; 2019 SIAP-APP
            </div>
            <div class="pull-right">
                <a href="#">Psikologi</a> |
                <a href="#">Library</a> |
                <a href="#">E-Learning</a>
            </div>
        </div>
    </div>

</div>