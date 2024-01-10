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
                                    <h3 class="panel-title"><strong>DATA</strong> PRIBADI</h3>
                                </div>
                                <div class="panel-body">

                                    <div class="row">

                                        <div class="col-md-6">
                                           <input type="hidden" class="form-control" name ="akun" value="<?php echo $s->akun ?>" />

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Nama</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" class="form-control" name ="id" readonly value ="<?php echo $s->nama ?>" />
                                                    </div>
                                                 </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Tempat Lahir</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" class="form-control" name ="tempat_lhr" value="<?php echo $s->tempat_lhr ?>" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Datepicker</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                        <input type="text" class="form-control datepicker" name="tgl_lahir" value="<?php echo $s->tgl_lahir ?>">
                                                    </div>
                                                    <span class="help-block">Format tanggal yang valid adalah tahun-bulan-tanggal "yyyy-mm-dd".</span>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Jenis Kelamin</label>
                                                <div class="col-md-9">
                                                    <select class="form-control select" id="jenkel" name="jenkel" value="<?php echo $s->jenkel ?>">
                                                        <option <?php if ($s->jenkel=="") {echo "selected";}?> value="">-- Pilih --</option>
                                                        <option <?php if ($s->jenkel=="Laki-laki") {echo "selected";}?> value="Laki-laki">Laki-laki</option>
                                                        <option <?php if ($s->jenkel=="Perempuan") {echo "selected";}?> value="Perempuan">Perempuan</option>
                                                   </select>
                                               </div>
                                            </div>

                                           <div class="form-group">
                                                <label class="col-md-3 control-label">No Telp/HP</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" class="form-control" name ="notelp" value="<?php echo $s->notelp ?>" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">E-mail</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" class="form-control" name ="email" value="<?php echo $s->email ?>" />
                                                    </div>
                                                 </div>
                                            </div>
                                            </div>
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Alamat</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" class="form-control" name ="alamat" value="<?php echo $s->alamat ?>" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Provinsi</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" class="form-control" name ="id_prov" value="<?php echo $s->id_prov ?>" />
                                                    </div>
                                                 </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Kota/Kabupaten</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" class="form-control" name ="id_kab" value="<?php echo $s->id_kab ?>" />
                                                    </div>
                                               </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Kecamatan</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" class="form-control" name ="id_kec" value="<?php echo $s->id_kec ?>" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Kelurahan</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" class="form-control" name ="id_kel" value="<?php echo $s->id_kel ?>" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Hobby</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="tagsinput" id="hobby" name="hobby" value="<?php echo $s->hobby ?>"/>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Bakat</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="tagsinput" id="bakat" name="bakat" value="<?php echo $s->bakat ?>" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                            
                            <div class="row">
                                <div class="col-md-12">
                                                       
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
                                    <a href="<?php echo base_url();?>dataprofil/index" class="btn btn-primary col-sm-1 col-sm-offset-5">Back</a>
                                 </div>
                            </div>
                            </form>
                           <?php } ?>
                        </div>
                    </div>

                </div>