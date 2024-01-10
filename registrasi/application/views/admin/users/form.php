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
                                    <option>subadmin</option>
                                    <option>juri</option>
                               </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label"> Jabatan</label>
                            <div class="col-md-6 col-xs-12">
                                <select class="form-control select" id="jabatan" name="jabatan">
                                    <option value="0">-- Pilih --</option>
                                    <option>Admin</option>   
                                    <option>Admin Universitas</option>
                                    <option>Juri</option>
                                   
                                </select>
                            </div>
                        </div>
                        
                         <div class="form-group">
				           <label class="col-md-3 col-xs-12 control-label">Nama Universitas</label>
                            <div class="col-md-6 col-xs-12">
				            	<select class="form-control select2" name="universitas">
				            	    <option value="">-- Pilih --</option>
				            		  <option value="Universitas Islam Riau (UIR) Pekanbaru">Universitas Islam Riau (UIR) Pekanbaru</option>
                                      <option value="Universitas Islam Negeri (UIN) Sunan Gunung Djati Bandung">Universitas Islam Negeri (UIN) Sunan Gunung Djati Bandung</option>
                                      <option value="UIN Raden Fatah Palembang">UIN Raden Fatah Palembang</option>
                                       <option value="Universitas Islam Negeri Sultan Syarif Kasim (UIN SUSKA) Riau">Universitas Islam Negeri Sultan Syarif Kasim (UIN SUSKA) Riau</option>
                                        <option value="Universitas Muhammadiyah Bandung">Universitas Muhammadiyah Bandung</option>
                                      <option value="Universitas Islam Bandung">Universitas Islam Bandung</option>
                                      <option value="UIN Imam Bonjol Padang">UIN Imam Bonjol Padang</option>
 				            	</select>
 				            	</select>
				            </div>
				        </div>
				        
                    <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Jenis Lumba</label>
                            <div class="col-md-6 col-xs-12">
                                <select class="form-control select" id="reg_jenis" name="reg_jenis">
                                    <option value="0">-- Pilih --</option>
                                    <option>Psy-Paper</option>   
                                    <option>Psy-Proposal</option>
                                    <option>Psy-Poster</option>
                                    <option>Psy-HCMotion</option>
                                    <option>Psy-Esai</option>
                                    <option>Psy-Cerpen</option>
                                    <option>Psy-Debat</option>
                                    <option>Psy-Fotografi</option>
                                    <option>Psy-Preach</option>
                                    <option>Psy-Qira'ah</option>
                                    <option>PSY-TAHFIDZ JUZ 1-5</option>
                                    <option>PSY-TAHFIDZ JUZ 30</option>
                                    <option>Psy-Lagu Religi</option>
                                   
                                </select>
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

