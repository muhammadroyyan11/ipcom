<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
            <ul class="breadcrumb">
                <li><a href="#">Beranda</a></li>
                <li class="active">Keterangan Aktif</li>
            </ul>
                 <div class="page-title">
                    <h2><span class="fa fa-arrow-circle-o-left"></span> Keterangan Aktif</h2>
                </div>
                <div class="page-content-wrap">
                  <?= showFlashMessage() ?>
                  <?= showMessage() ?>
                    <div class="row">
                        <div class="col-md-12">
                           <form class="form-horizontal" method="post" action="<?php echo base_url();?>KeteranganAktif/updatedatamahasiswa" enctype="multipart/form-data">

                             <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Form</strong> Keterangan Aktif</h3>
                                </div>
                                <div class="panel-body">
                                    <p>Silahkan lengkapi form di bawah ini.</p>
                                </div>
                                  <div class="panel-body form-group-separated">
                                  <input type="hidden" class="form-control" id="txt_hidden" name="txt_hidden" value="<?php echo $keteranganaktif->id; ?>" />

                                    <div class="form-group">
                                        <div class="form-group has-feedback ">
                                        <?= form_label('Nama', 'nama', ['class' => 'col-md-3 col-xs-12 control-label']) ?>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" class="form-control" disabled="disabled" id="nama" name="nama" value = "<?php echo $keteranganaktif->nama; ?>" />
                                            </div>
                                            <span class="help-block"></span>
                                        </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="form-group has-feedback ">
                                        <?= form_label('Tempat Lahir', 'tempat_lhr', ['class' => 'col-md-3 col-xs-12 control-label']) ?>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" class="form-control" id="tempat_lhr" name="tempat_lhr" value = "<?php echo $keteranganaktif->tempat_lhr; ?>" />
                                            </div>
                                            <span class="help-block"></span>
                                        </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="form-group has-feedback ">
                                        <?= form_label('Tanggal Lahir', 'tgl_lahir', ['class' => 'col-md-3 col-xs-12 control-label']) ?>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                <input type="text" class="form-control" id="tgl_lahir" name="tgl_lahir" value = "<?php echo $keteranganaktif->tgl_lahir; ?>" />
                                            </div>
                                            <span class="help-block">Format Tanggal valid = Tahun-Bulan-Tanggal "yyyy-mm-dd".</span>
                                        </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="form-group has-feedback ">
                                        <?= form_label('Email', 'email', ['class' => 'col-md-3 col-xs-12 control-label']) ?>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" class="form-control" id="email" name="email" value = "<?php echo $keteranganaktif->email; ?>" />
                                            </div>
                                            <span class="help-block"></span>
                                        </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="form-group has-feedback ">
                                        <?= form_label('NPM', 'username', ['class' => 'col-md-3 col-xs-12 control-label']) ?>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" class="form-control" disabled="disabled" id="username" name="username" value = "<?php echo $keteranganaktif->username; ?>" />
                                            </div>
                                            <span class="help-block"></span>
                                        </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="form-group has-feedback">
                                            <label class="col-md-3 col-xs-12 control-label">Semester</label>
                                                <div class="col-md-3 col-xs-6">
                                                     <select class="form-control select" id="semester" name="semester" value="<?php echo $keteranganaktif->semester ?>">
                                                        <option <?php if ($keteranganaktif->semester=="") {echo "selected";}?> value="">-- Pilih --</option>
                                                        <option <?php if ($keteranganaktif->semester=="I (Satu)") {echo "selected";}?> value="I (Satu)">I (Satu)</option>
                                                        <option <?php if ($keteranganaktif->semester=="II (Dua)") {echo "selected";}?> value="II (Dua)">II (Dua)</option>                                                      
                                                        <option <?php if ($keteranganaktif->semester=="III (Tiga)") {echo "selected";}?> value="III (Tiga)">III (Tiga)</option>
                                                        <option <?php if ($keteranganaktif->semester=="IV (Empat)") {echo "selected";}?> value="IV (Empat)">IV (Empat)</option>
                                                        <option <?php if ($keteranganaktif->semester=="V (Lima)") {echo "selected";}?> value="V (Lima)">V (Lima)</option>                                                      
                                                        <option <?php if ($keteranganaktif->semester=="VI (Enam)") {echo "selected";}?> value="VI (Enam)">VI (Enam)</option>
                                                        <option <?php if ($keteranganaktif->semester=="VII (Tujuh)") {echo "selected";}?> value="VII (Tujuh)">VII (Tujuh)</option>
                                                        <option <?php if ($keteranganaktif->semester=="VIII (Delapan)") {echo "selected";}?> value="VIII (Delapan)">VIII (Delapan)</option>
                                                        <option <?php if ($keteranganaktif->semester=="IX (Sembilan)") {echo "selected";}?> value="IX (Sembilan)">IX (Sembilan)</option>
                                                    </select>
                                                </div>
                                          </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="form-group has-feedback">
                                            <label class="col-md-3 col-xs-12 control-label">Tahun Ajaran</label>
                                                <div class="col-md-3 col-xs-6">
                                                     <select class="form-control select" id="ta" name="ta" value="<?php echo $keteranganaktif->ta ?>">
                                                        <option <?php if ($keteranganaktif->ta=="") {echo "selected";}?> value="">-- Pilih --</option>
                                                        <option <?php if ($keteranganaktif->ta=="2018/2019") {echo "selected";}?> value="2018/2019">2018/2019</option>
                                                        <option <?php if ($keteranganaktif->ta=="2019/2020") {echo "selected";}?> value="2019/2020">2019/2020</option>                                                      
                                                        <option <?php if ($keteranganaktif->ta=="2020/2021") {echo "selected";}?> value="2020/2021">2020/2021</option>
                                                    </select>
                                                </div>
                                          </div>
                                    </div>

                                  <div class="form-group">
                                        <div class="form-group has-feedback ">
                                        <?= form_label('Alamat', 'alamat', ['class' => 'col-md-3 col-xs-12 control-label']) ?>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" class="form-control" id="alamat" name="alamat" value = "<?php echo $keteranganaktif->alamat; ?>" />
                                            </div>
                                            <span class="help-block"></span>
                                        </div>
                                        </div>
                                </div>
                                
                                <div class="form-group">
                                        <div class="form-group has-feedback ">
                                        <?= form_label('Kota/Kabupaten', 'kabupaten', ['class' => 'col-md-3 col-xs-12 control-label']) ?>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" class="form-control" id="kabupaten" name="kabupaten" value = "<?php echo $keteranganaktif->kabupaten; ?>" />
                                            </div>
                                            <span class="help-block"></span>
                                        </div>
                                        </div>
                                </div>
                                  
                                  <div class="form-group">
                                        <div class="form-group has-feedback ">
                                        <?= form_label('Keperluan 1', 'keperluan', ['class' => 'col-md-3 col-xs-12 control-label']) ?>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" class="form-control" id="keperluan" name="keperluan" value = "<?php echo $keteranganaktif->keperluan; ?>" />
                                            </div>
                                            <span class="help-block"></span>
                                        </div>
                                        </div>
                                    </div>
                                    
                     <div class="form-group">
                                        <div class="form-group has-feedback">
                                      <?= form_label('Upload File Permohonan', 'userfile', ['class' => 'col-md-3 col-xs-12 control-label col-sm-2']) ?>
                                        <div class="col-md-6 col-xs-12">
                                            <input type="file" class="fileinput btn-primary" name="userfile" id="userfile" size ="25" title="Telusuri File"/>

                                            <span class="help-block">
                                             </span>
                                        </div>
                                    </div>
                                </div>
                                  
                                <div class="panel-footer">
                                    <?php
                                        $url = isset($_SERVER['HTTP_REFERER']) ? htmlspecialchars($_SERVER['HTTP_REFERER']) : '';
                                        ?>
                                        <a href="<?=$url?>" class="btn btn-danger">Back</a>

                                    <button class="btn btn-primary pull-right" type="submit" name="submit">Submit</button>
                                </div>
                            </div>
                            </form>

                        </div>
                    </div>

                </div>
                <!-- END PAGE CONTENT WRAPPER -->