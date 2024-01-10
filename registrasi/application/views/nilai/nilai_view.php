<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Penilaian Juri</li>
            </ul>
                 <div class="page-title">
                    <h2><span class="fa fa-arrow-circle-o-left"></span> Penilaian Juri</h2>
                </div>
                <div class="page-content-wrap">

                    <div class="row">
                        <div class="col-md-12">
                           <?= form_open_multipart('nilai/submit', ['class' => 'form-horizontal', 'role' => 'form']) ?>
                           <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Form</strong> Penilaian Juri</h3>
                                </div>
                                <div class="panel-body">
                                    <p>Silahkan lengkapi form di bawah ini.</p>
                                </div>
                                     <div class="form-group">
                                        <input type="hidden" class="form-control" id="username" name="username" value=<?= $username ?> />
                                    </div>
                                    <div class="form-group">
                                         <input type="hidden" class="form-control" id="level" name="level" value=<?= $level ?> />
                                    </div>
                                       
                                    <div class="form-group">
                                         <?= form_label('Nama', 'nama', ['class' => 'col-md-3 col-xs-12 control-label']) ?>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" class="form-control" id="nama" name="nama" value="<?= $this->session->userdata('nama') ;?>"/>
                                                
                                            </div>
                                            <?php if (form_error('fakultas')) : ?>
                                            <div class=" col-sm-5">
                                                <?= form_error('fakultas');?>
                                            </div>
                                            <?php endif ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                         <?= form_label('Universitas', 'reg_jenis', ['class' => 'col-md-3 col-xs-12 control-label']) ?>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" class="form-control" id="reg_jenis" name="reg_jenis" value="<?php echo $this->session->userdata('reg_universitas');?>"/>
                                                
                                            </div>
                                            <?php if (form_error('reg_jenis')) : ?>
                                            <div class=" col-sm-5">
                                                <?= form_error('reg_jenis');?>
                                            </div>
                                            <?php endif ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                      <?= form_label('Upload Penilaian', 'file', ['class' => 'col-md-3 col-xs-12 control-label col-sm-2']) ?>
                                        <div class="col-md-6 col-xs-12">
                                            <input type="file" class="fileinput btn-primary" name="file" id="file" size ="25" title="Telusuri File"/>

                                           
                                        </div>
                                         <span class="help-block">
                                             </span>
                                </div>
                                <div class="panel-footer">
                                    <a href="<?php echo base_url();?>nilai/getPreach" class="btn btn-danger">Back</a>
                                    <button class="btn btn-primary pull-right" type="submit" name="submit">Submit</button>
                                </div>
                            </div>
                            <?= form_close() ?>
                        </div>
                    </div>
                </div>
                <!-- END PAGE CONTENT WRAPPER -->