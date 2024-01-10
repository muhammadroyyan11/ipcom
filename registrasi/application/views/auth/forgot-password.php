<div class="login-container">

    <div class="login-box animated fadeInDown">
        <div class="login-logo"></div>
        <div class="login-title">
            <?= $this->session->flashdata('message'); ?>
        </div>
        <div class="login-body">
            <div class="login-title"><strong>Forgot</strong> your password?</div>
            <form action="<?= base_url('auth/forgotpassword'); ?>" class="form-horizontal" method="post">
                <div class="form-group">
                    <div class="col-md-12">
                        <input type="text" class="form-control" id="email" name="email" placeholder="Enter E-mail Address" value="<?= set_value('email'); ?>" />
                        <?= form_error('email', '<small class="text-warning pl-3">', '</small>'); ?>
                    </div>
                </div>

                <div class="form-group">

                    <div class="col-md-12">
                        <button type="submit" class="btn btn-info btn-block">Reset Password</button>
                    </div>
                </div>
                <div class="login-subtitle text-center">
                    <a href="<?= base_url('auth'); ?>">Back to Login </a>
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