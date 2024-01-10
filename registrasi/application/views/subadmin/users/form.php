<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="#">Beranda</a></li>
    <li><a href="#">Users</a></li>
    <li class="active"><a href="#">Input Users</a></li>
</ul>
<!-- END BREADCRUMB -->

<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">

    <div class="row">
        <div class="col-md-12">
            <form class="form-horizontal" action="<?php echo base_url(). 'users/proses_input'; ?>" method="post">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><strong>Input</strong> User</h3>
                    </div>
                    <div class="panel-body">
                        <p>Silahkan lengkapi form input user di bawah ini.</div>
                    <div class="panel-body">

                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Username</label>
                            <div class="col-md-6 col-xs-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                    <input type="text" placeholder="Masukan Username" name="username" class="form-control"/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Password</label>
                            <div class="col-md-6 col-xs-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-unlock-alt"></span></span>
                                    <input type="password" placeholder="Masukan Password" name="password" class="form-control"/>
                                </div>
                            </div>
                        </div>

                        <input type="hidden" name="active" value="1">

                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Nama Lengkap</label>
                            <div class="col-md-6 col-xs-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                    <input type="text" placeholder="Masukan Nama Lengkap" name="nama" class="form-control"/>
                                </div>
                            </div>
                        </div>

                        <input type="hidden" name="foto" value="foto-default.jpg">

                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Level</label>
                            <div class="col-md-6 col-xs-12">
                                <select class="form-control select" id="level" name="level">
                                    <option value="0">-- Pilih --</option>
                                    <option>admin</option>
                                    <option>psy-paper</option>
                                    <option>psy-intervention</option>
                                    <option>psy-proposal</option>
                                    <option>psy-design</option>
                                    <option>psy-infografis</option>
                                    <option>psy-essay</option>
                                    <option>psy-film</option>
                                    <option>psy-vlog</option>
                                    <option>psy-photography</option>
                                    <option>psy-science</option>
                                    <option>psy-debate</option>
                                    <option>psy-preach</option>
                                    <option>psy-Qiraah</option>
                                </select>
                            </div>
                        </div>
              
                    <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Jabatan</label>
                            <div class="col-md-6 col-xs-12">
                                <select class="form-control select" id="jabatan" name="jabatan">
                                    <option value="0">-- Pilih --</option>
                                    <option>Admin</option>
                                    <option>Ketua Juri</option>
                                    <option>Anggota Juri</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="panel-footer">
                        <a href="<?php echo base_url();?>users/index" class="btn btn-default">Back</a>
                        <button class="btn btn-primary pull-right">Submit</button>
                    </div>
                </div>
            </form>

        </div>
    </div>

</div>
<!-- END PAGE CONTENT WRAPPER -->

