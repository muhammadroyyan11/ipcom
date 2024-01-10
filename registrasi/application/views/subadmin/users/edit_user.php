 <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">Beranda</a></li>
                    <li><a href="#">Users</a></li>
                    <li class="active"><a href="#">Edit User</a></li>
                </ul>
                <!-- END BREADCRUMB -->

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">

                    <div class="row">
                        <div class="col-md-12">
                        <?php foreach($users as $s){ ?>
                        <form class="form-horizontal" action="<?php echo base_url(). 'users/updatedata'; ?>" method="post">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Edit</strong> User</h3>
                                </div>
                                <div class="panel-body">
                                    <p>Silahkan lengkapi form input user di bawah ini</p>.</div>
                                <div class="panel-body">

                                    <div class="form-group">

                                        <input type="hidden" name="id" value="<?php echo $s->id ?>">
                                        <label class="col-md-3 col-xs-12 control-label">Username</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="readonly" placeholder="Masukan Username" name="username" class="form-control" readonly value="<?php echo $s->username ?>"/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Password</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-unlock-alt"></span></span>
                                                <input type="password" placeholder="Kosongkan jika tidak ingin mengganti password" name="password" class="form-control"/>
                                            </div>
                                        </div>
                                    </div>

                                    <input type="hidden" name="active" value="1">

                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Nama Lengkap</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" placeholder="Masukan Nama Lengkap" name="nama" class="form-control" value="<?php echo $s->nama ?>"/>
                                            </div>
                                        </div>
                                    </div>

                                    <input type="hidden" name="foto" value="foto-default.jpg">

                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Level</label>
                                        <div class="col-md-3 col-xs-6">
                                            <select class="form-control select" id="level" name="level" value="<?php echo $s->level ?>">
                                                <option <?php if ($s->level=="") {echo "selected";}?> value="">-- Pilih --</option>
                                                <option <?php if ($s->level=="admin") {echo "selected";}?> value="Admin">Admin</option>
                                                <option <?php if ($s->level=="psy-paper") {echo "selected";}?> value="psy-paper">Psy-Paper</option>
                                                <option <?php if ($s->level=="psy-intervention") {echo "selected";}?> value="Psy-Intervention">Psy-Intervention</option>
                                                <option <?php if ($s->level=="psy-proposal") {echo "selected";}?> value="Psy-Proposal">Psy-Proposal</option>
                                                <option <?php if ($s->level=="alumni") {echo "selected";}?> value="Alumni">Alumni</option>
                                            </select>
                                        </div>
                                    </div>
                                 <!--
                                 <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Active</label>
                                        <div class="col-md-6 col-xs-12">
                                            <select class="form-control select" id="active" name="active" value="<?php echo $s->active ?>">
                                                <option <?php if ($s->active=="") {echo "selected";}?> value="">-- Pilih --</option>
                                                <option <?php if ($s->active=="1") {echo "selected";}?> value="1">Active</option>
                                                <option <?php if ($s->active=="0") {echo "selected";}?> value="0">No Active</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                -->
                                <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">Jabatan</label>
                                                <div class="col-md-3 col-xs-6">
                                                     <select class="form-control select" id="jabatan" name="jabatan" value="<?php echo $s->jabatan ?>">
                                                        <option <?php if ($s->jabatan=="") {echo "selected";}?> value="">-- Pilih --</option>
                                                        <option <?php if ($s->jabatan=="Admin") {echo "selected";}?> value="Admin">Admin</option>
                                                        <option <?php if ($s->jabatan=="Ketua Juri") {echo "selected";}?> value="Ketua Juri">Ketua Juri</option>
                                                        <option <?php if ($s->jabatan=="Anggota Juri") {echo "selected";}?> value="Anggota Juri">Anggota Juri</option>
                                                        
                                                </select>
                                                </div>
                                          </div>
                                       </div>
                                        -

                                <div class="panel-footer">
                                    <?php
                                        $url = isset($_SERVER['HTTP_REFERER']) ? htmlspecialchars($_SERVER['HTTP_REFERER']) : '';
                                        ?>
                                        <a href="<?=$url?>" class="btn btn-danger">Back</a>
                                    
                                    <button class="btn btn-primary pull-right" name="submit">Submit</button>
                                </div>
                            </div>
                            </form>
                          <?php } ?>
                        </div>
                    </div>

                </div>
                <!-- END PAGE CONTENT WRAPPER -->