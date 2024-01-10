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
                                                <option <?php if ($s->level=="subadmin") {echo "selected";}?> value="subadmin">Sub-Admin</option>
                                                <option <?php if ($s->level=="juri") {echo "selected";}?> value="juri">Juri</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Jabatan</label>
                                        <div class="col-md-3 col-xs-6">
                                            <select class="form-control select" id="jabatan" name="jabatan" value="<?php echo $s->jabatan ?>">
                                                <option <?php if ($s->jabatan=="") {echo "selected";}?> value="">-- Pilih --</option>
                                                <option <?php if ($s->jabatan=="admin") {echo "selected";}?> value="Admin">Admin</option>
                                                <option <?php if ($s->jabatan=="Admin Universitas") {echo "selected";}?> value="Admin Universitas">Admin Universitas</option>
                                                <option <?php if ($s->jabatan=="juri") {echo "selected";}?> value="Juri">Juri</option>
                                            </select>
                                        </div>
                                    </div>
                        <div class="form-group">
				           <label class="col-md-3 col-xs-12 control-label">Nama Universitas</label>
                            <div class="col-md-6 col-xs-12">
				            	<select class="form-control select2" name="universitas" value="<?php echo $s->universitas ?>">>
				            	    <option value="">-- Pilih --</option>
				            	    <option <?php if ($s->universitas=="Universitas Islam Riau (UIR) Pekanbaru") {echo "selected";}?> value="Universitas Islam Riau (UIR) Pekanbaru">Universitas Islam Riau (UIR) Pekanbaru</option>
				            	    <option <?php if ($s->universitas=="Universitas Islam Negeri (UIN) Sunan Gunung Djati Bandung") {echo "selected";}?> value="Universitas Islam Negeri (UIN) Sunan Gunung Djati Bandung">Universitas Islam Negeri (UIN) Sunan Gunung Djati Bandung</option>
				            	    <option <?php if ($s->universitas=="UIN Raden Fatah Palembang") {echo "selected";}?> value="UIN Raden Fatah Palembang">UIN Raden Fatah Palembang</option>
				            	    <option <?php if ($s->universitas=="Universitas Islam Negeri Sultan Syarif Kasim (UIN SUSKA) Riau") {echo "selected";}?> value="Universitas Islam Negeri Sultan Syarif Kasim (UIN SUSKA) Riau">Universitas Islam Negeri Sultan Syarif Kasim (UIN SUSKA) Riau</option>
				            	    <option <?php if ($s->universitas=="Universitas Muhammadiyah Bandung") {echo "selected";}?> value="Universitas Muhammadiyah Bandung">Universitas Muhammadiyah Bandung</option>
				            	    <option <?php if ($s->universitas=="Universitas Islam Bandung") {echo "selected";}?> value="Universitas Islam Bandung">Universitas Islam Bandung</option>
				            	    <option <?php if ($s->universitas=="UIN Imam Bonjol Padang") {echo "selected";}?> value="UIN Imam Bonjol Padang">UIN Imam Bonjol Padang</option>
				            		  
 				            	</select>
 				            	</select>
				            </div>
				        </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Jenis Lomba</label>
                                        <div class="col-md-3 col-xs-6">
                                            <select class="form-control select" id="reg_jenis" name="reg_jenis" value="<?php echo $s->reg_jenis ?>">
                                                <option <?php if ($s->reg_jenis=="") {echo "selected";}?> value="">-- Pilih --</option>
                                                <option <?php if ($s->reg_jenis=="Psy-Paper") {echo "selected";}?> value="Psy-Paper">Psy-Paper</option>
                                                <option <?php if ($s->reg_jenis=="Psy-Debat") {echo "selected";}?> value="Psy-Debat">Psy-Debat</option>
                                                <option <?php if ($s->reg_jenis=="Psy-Proposal") {echo "selected";}?> value="Psy-Proposal">Psy-Proposal</option>
                                                <option <?php if ($s->reg_jenis=="Psy-Poster") {echo "selected";}?> value="Psy-Poster">Psy-Poster</option>
                                                <option <?php if ($s->reg_jenis=="Psy-Lagu Religi") {echo "selected";}?> value="Psy-Lagu Religi">Psy-Lagu Religi</option>
                                                <option <?php if ($s->reg_jenis=="Psy-Esai") {echo "selected";}?> value="Psy-Esai">Psy-Esai</option>
                                                <option <?php if ($s->reg_jenis=="PSY-TAHFIDZ JUZ 1-5") {echo "selected";}?> value="PSY-TAHFIDZ JUZ 1-5">PSY-TAHFIDZ JUZ 1-5</option>
                                                <option <?php if ($s->reg_jenis=="PSY-TAHFIDZ JUZ 30") {echo "selected";}?> value="PSY-TAHFIDZ JUZ 30">PSY-TAHFIDZ JUZ 30</option>
                                                <option <?php if ($s->reg_jenis=="Psy-Fotografi") {echo "selected";}?> value="Psy-Fotografi">Psy-Fotografi</option>
                                                <option <?php if ($s->reg_jenis=="Psy-Preach") {echo "selected";}?> value="Psy-Preach">Psy-Preach</option>
                                                <option <?php if ($s->reg_jenis=="Psy-Qiraah") {echo "selected";}?> value="Psy-Qiraah">Psy-Qiraah</option>
                                                <option <?php if ($s->reg_jenis=="Psy-Cerdas Cermat") {echo "selected";}?> value="Psy-Cerdas Cermat">Psy-Cerdas Cermat</option>
                                                <option <?php if ($s->reg_jenis=="Psy-HCMotion") {echo "selected";}?> value="Psy-HCMotion">Psy-HCMotion</option>
                                                <option <?php if ($s->reg_jenis=="Psy-Cerpen") {echo "selected";}?> value="Psy-Cerpen">Psy-Cerpen</option>
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