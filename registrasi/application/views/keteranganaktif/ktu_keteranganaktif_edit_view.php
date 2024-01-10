<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
            <ul class="breadcrumb">
                <li><a href="#">Beranda</a></li>
                <li class="active">Surat Keterangan Aktif</li>
            </ul>
                 <div class="page-title">
                    <h2><span class="fa fa-arrow-circle-o-left"></span> Surat Keterangan Aktif</h2>
                </div>
                <div class="page-content-wrap">
                  <?= showFlashMessage() ?>
                  <?= showMessage() ?>
                    <div class="row">
                        <div class="col-md-12">
                           <form class="form-horizontal" method="post" action="<?php echo base_url();?>KeteranganAktif/updatedataktu" enctype="multipart/form-data">

                             <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Form</strong> Surat Keterangan Aktif</h3>
                                </div>
                                <div class="panel-body">
                                    <p>Silahkan lengkapi form di bawah ini.</p>
                                </div>
                                  <div class="panel-body form-group-separated">
                                  <input type="hidden" class="form-control" id="txt_hidden" name="txt_hidden" value="<?php echo $keteranganaktif->id; ?>" />
                                  
                                  <div class="panel-body form-group-separated">
                                  <input type="hidden" class="form-control" id="email" name="email" value="<?php echo $keteranganaktif->email; ?>" />
                                  
                                  <div class="panel-body form-group-separated">
                                  <input type="hidden" class="form-control" id="nama" name="nama" value="<?php echo $keteranganaktif->nama; ?>" />

                                  <div class="form-group">
                                        <div class="form-group has-feedback ">
                                        <?= form_label('Nomor Surat', 'nosurat', ['class' => 'col-md-3 col-xs-12 control-label']) ?>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" class="form-control" id="nosurat" name="nosurat" value = "<?php echo $keteranganaktif->nosurat; ?>" />
                                            </div>
                                            <span class="help-block"></span>
                                        </div>
                                        </div>
                                    </div>

                                  <div class="form-group">
                                        <div class="form-group has-feedback">
                                                <label class="col-md-3 col-xs-12 control-label">Tanggal</label>
                                                <div class="col-md-6 col-xs-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                        <input type="text" class="form-control datepicker" name="tglmasehi"  value = "<?php echo $keteranganaktif->tglmasehi; ?>"/>
                                                    </div>
                                                    <span class="help-block">Format tanggal yang valid adalah tahun-bulan-tanggal "yyyy-mm-dd".</span>
                                                </div>
                                            </div>
                                    </div>

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
                                        <?= form_label('Keperluan', 'keperluan', ['class' => 'col-md-3 col-xs-12 control-label']) ?>
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
                                        <div class="form-group has-feedback ">
                                        <label class="col-md-3 col-xs-12 control-label">Status</label>
                                        <div class="col-md-6 col-xs-12">
                                            <select class="form-control select" id="verifikasi" name="verifikasi" value="<?php echo $keteranganaktif->verifikasi ?>">
                                                <option <?php if ($keteranganaktif->verifikasi=="") {echo "selected";}?> value="">-- Pilih --</option>
                                                <option <?php if ($keteranganaktif->verifikasi=="1") {echo "selected";}?> value="1">Verifikasi</option>
                                                <option <?php if ($keteranganaktif->verifikasi=="0") {echo "selected";}?> value="0">Proses</option>
                                            </select>
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