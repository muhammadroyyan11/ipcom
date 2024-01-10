<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
            <ul class="breadcrumb">
                <li><a href="#">Beranda</a></li>
                <li class="active">Surat Keterangan Aktif</li>
            </ul>
                 <div class="page-title">
                    <h2><span class="fa fa-arrow-circle-o-left"></span> Surat Keterangan Aktif</h2>
                </div>
                <div class="page-content-wrap">

                    <div class="row">
                        <div class="col-md-12">
                           <?= form_open_multipart('KetAktif/submit', ['class' => 'form-horizontal', 'role' => 'form']) ?>
                               <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Form</strong> Surat Keterangan Aktif</h3>
                                </div>
                                <div class="panel-body">
                                    <p>Silahkan lengkapi form di bawah ini.</p>
                                </div>
                                <div class="panel-body form-group-separated">
                                    <div class="form-group">
                                        <input type="hidden" class="form-control" id="username" name="username" value=<?= $username ?> />
                                    </div>
                                    <div class="form-group">
                                         <input type="hidden" class="form-control" id="level" name="level" value=<?= $level ?> />
                                    </div>

                                    <div class="form-group">
                                        <div class="form-group has-feedback">
                                        <?= form_label('Nama', 'nama', ['class' => 'col-md-3 col-xs-12 control-label']) ?>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" class="form-control" disabled="disabled" id="nama" name="nama" value="<?php echo $this->session->userdata('nama'); ?>" />

                                            </div>
                                            <?php if (form_error('nama')) : ?>
                                             <?php endif ?>
                                           </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                    <?php
                                        foreach ($records as $row){
                                    ?>

                                        <div class="form-group has-feedback">
                                            <?= form_label('Tempat Lahir', 'tgl_lahir', ['class' => 'col-md-3 col-xs-12 control-label']) ?>
                                            <div class="col-md-6 col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>

                                                     <input type="text" class="form-control" id="tempat_lhr" name="tempat_lhr"  value="<?php echo $row['tempat_lhr'] ?>" />
                                                     </div>
                                                <?php if (form_error('nama')) : ?>
                                                <?php endif ?>
                                            </div>
                                        </div>

                                     <?php
                                        }
                                     ?>
                                    </div>
                                    
                                    <div class="form-group">
                                    <?php
                                        foreach ($records as $row){
                                    ?>

                                        <div class="form-group has-feedback">
                                            <?= form_label('Tgl Lahir', 'tgl_lahir', ['class' => 'col-md-3 col-xs-12 control-label']) ?>
                                            <div class="col-md-6 col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-calendar"></span></span>

                                                     <input type="text" class="form-control" id="tgl_lahir" name="tgl_lahir"  value="<?php echo $row['tgl_lahir'] ?>" />
                                                     </div>
                                                <?php if (form_error('nama')) : ?>
                                                <?php endif ?>
                                            </div>
                                        </div>

                                     <?php
                                        }
                                     ?>
                                    </div>
                                    
                                     <div class="form-group">
                                    <?php
                                        foreach ($records as $row){
                                    ?>

                                        <div class="form-group has-feedback">
                                            <?= form_label('Email', 'email', ['class' => 'col-md-3 col-xs-12 control-label']) ?>
                                            <div class="col-md-6 col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>

                                                     <input type="text" class="form-control" id="email" name="email"  value="<?php echo $row['email'] ?>" />
                                                     </div>
                                                <?php if (form_error('nama')) : ?>
                                                <?php endif ?>
                                            </div>
                                        </div>

                                     <?php
                                        }
                                     ?>
                                    </div>
                                                     
                                    <div class="form-group">
                                        <div class="form-group has-feedback">
                                            <?= form_label('NPM', 'username', ['class' => 'col-md-3 col-xs-12 control-label']) ?>
                                            <div class="col-md-6 col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                    <input type="text" class="form-control" disabled="disabled" id="username" name="username" value=" <?php echo $this->session->userdata('username'); ?>" />

                                                </div>
                                                <?php if (form_error('nama')) : ?>
                                                <?php endif ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="form-group has-feedback">
            <label class="col-md-3 col-xs-12 control-label">Semester</label>
                                                <div class="col-md-3 col-xs-6">
                                                    <select class="form-control select" id="jenjang" name="semester">
                                                        <option value="0">-- Pilih --</option>
                                                        <option>I (Satu)</option>
                                                        <option>II (Dua)</option>
                                                        <option>III (Tiga)</option>
                                                        <option>IV (Empat)</option>
                                                        <option>V (Lima)</option>
                                                        <option>VI (Enam)</option>
                                                        <option>VII (Tujuh)</option>
                                                        <option>VIII (Delapan</option>
                                                    </select>
                                                </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="form-group has-feedback">
            <label class="col-md-3 col-xs-12 control-label">Tahun Ajaran</label>
                                                <div class="col-md-3 col-xs-6">
                                                    <select class="form-control select" id="ta" name="ta">
                                                        <option value="0">-- Pilih --</option>
                                                        <option>2018/2019</option>
                                                        <option>2019/2020</option>
                                                        <option>2020/2021</option>
                                                        
                                                    </select>
                                                </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                    <?php
                                        foreach ($records as $row){
                                    ?>

                                        <div class="form-group has-feedback">
                                            <?= form_label('Alamat', 'alamat', ['class' => 'col-md-3 col-xs-12 control-label']) ?>
                                            <div class="col-md-6 col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>

                                                     <input type="text" class="form-control" id="alamat" name="alamat"  value="<?php echo $row['alamat'] ?>" />
                                                     
                         

                                                    <!--<input type="text" class="form-control" disabled="disabled" id="alamat" name="alamat" value= "<?php echo $this->session->userdata('alamat'); ?>" />-->
                                                </div>
                                                <?php if (form_error('nama')) : ?>
                                                <?php endif ?>
                                            </div>
                                        </div>

                                     <?php
                                        }
                                     ?>
                                    </div>
                                    
                                    <div class="form-group">
                                    <?php
                                        foreach ($records as $row){
                                    ?>

                                        <div class="form-group has-feedback">
                                            <?= form_label('Kota/Kabupaten', 'kabupaten', ['class' => 'col-md-3 col-xs-12 control-label']) ?>
                                            <div class="col-md-6 col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>

                                                     <input type="text" class="form-control" id="kabupaten" name="kabupaten"  value="<?php echo $row['id_kab'] ?>" />
                                                     
                         

                                                    <!--<input type="text" class="form-control" disabled="disabled" id="alamat" name="alamat" value= "<?php echo $this->session->userdata('alamat'); ?>" />-->
                                                </div>
                                                <?php if (form_error('nama')) : ?>
                                                <?php endif ?>
                                            </div>
                                        </div>

                                     <?php
                                        }
                                     ?>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="form-group has-feedback ">
                                        <?= form_label('Keperluan', 'keperluan', ['class' => 'col-md-3 col-xs-12 control-label']) ?>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" class="form-control" id="keperluan" name="keperluan" value = "" />
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
                                              <span class="help-block"></span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="form-group has-feedback">
                                            <?= form_label('Upload File SPP Terakhir', 'userfile2', ['class' => 'col-md-3 col-xs-12 control-label col-sm-2']) ?>
                                            <div class="col-md-6 col-xs-12">
                                              <input type="file" class="fileinput btn-primary" name="userfile2" id="userfile2" size ="25" title="Telusuri File"/>
                                              <span class="help-block"></span>
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
                            <?= form_close() ?>
                        </div>
                    </div>
                </div>
                <!-- END PAGE CONTENT WRAPPER -->