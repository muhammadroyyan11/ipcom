 <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">Beranda</a></li>
                     <li class="active"><a href="#"> Profil</a></li>
                </ul>
                <!-- END BREADCRUMB -->
                <div class="page-title">
                    <h2><span class="fa fa-arrow-circle-o-left"></span> Profil</h2>
                </div>

 <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">

                    <div class="row">
                        <div class="col-md-12">
                        <?php foreach($data_users as $s){ ?>
                        <form class="form-horizontal" action="<?php echo base_url(). 'pengguna/updatedata'; ?>" method="post">

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>DATA</strong> ORANG TUA</h3>
                                </div>
                                <div class="panel-body">

                                    <div class="row">

                                        <div class="col-md-6">
                                           <input type="hidden" class="form-control" name ="akun" value="<?php echo $s->akun ?>" />

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Nama Mahasiswa</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" class="form-control" name ="id" readonly value ="<?php echo $s->nama ?>" />
                                                    </div>
                                                 </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Nama Orang Tua</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" class="form-control" id="orangtua" name="orangtua" value="<?php echo $s->orangtua ?>"/>
                                                    </div>
                                                    <span class="help-block"></span>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">No Telp/HP</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" class="form-control" name ="notelp_ortu" value="<?php echo $s->notelp_ortu ?>" />
                                                    </div>
                                                    <span class="help-block"></span>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Alamat</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" class="form-control" name ="alamat_ortu" value="<?php echo $s->alamat_ortu ?>" />
                                                    </div>
                                                    <span class="help-block"></span>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-md-6">

                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Provinsi</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" class="form-control" name ="prov_ortu" value="<?php echo $s->id_prov_ortu ?>" />
                                                    </div>
                                                    <span class="help-block"></span>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Kota/Kabupaten</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" class="form-control" name ="kab_ortu" value="<?php echo $s->id_kab_ortu ?>" />
                                                    </div>
                                                    <span class="help-block"></span>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Kecamatan</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" class="form-control" name ="kec_ortu" value="<?php echo $s->id_kec_ortu ?>" />
                                                    </div>
                                                    <span class="help-block"></span>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Kelurahan</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" class="form-control" name ="kel_ortu" value="<?php echo $s->id_kel_ortu ?>" />
                                                    </div>
                                                    <span class="help-block"></span>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                            <hr />
                            <div class="row">
                                  <div class="form-group">
                                         <div class="col-md-4 col-sm-offset-4">
                                            <div class="input-group">
                                                <a href="#"><img class="img-thumbnail" width="300px" height="100%" src="<?php echo base_url() . 'foto/'.$s->foto  ?>"/></a>
                                            </div>
                                            <span class="help-block"><?php echo $s->nama ?></span>
                                        </div>
                                    </div>
                            </div>
                            
                                </div>
                                <div class="panel-footer">
                                    <a href="<?php echo base_url();?>dataprofilortu/index" class="btn btn-primary col-sm-1 col-sm-offset-5">Back</a>
                                 </div>
                            </div>
                            </form>
                           <?php } ?>
                        </div>
                    </div>

                </div>