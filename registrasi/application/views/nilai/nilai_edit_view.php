<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Penilaian Juri</li>
            </ul>
                 <div class="page-title">
                    <h2><span class="fa fa-arrow-circle-o-left"></span> Penilaian Juri</h2>
                </div>
                <div class="page-content-wrap">
                  <?= showFlashMessage() ?>
                  <?= showMessage() ?>
                    <div class="row">
                        <div class="col-md-12">
                           <form class="form-horizontal" method="post" action="<?php echo base_url();?>nilai/updatedata" enctype="multipart/form-data">

                             <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Form</strong> Penilaian Juri</h3>
                                </div>
                                <div class="panel-body">
                                    <p>Silahkan lengkapi form di bawah ini.</p>
                                </div>
                                    <input type="hidden" class="form-control" id="txt_hidden" name="txt_hidden" value="<?php echo $nilai->id; ?>" />

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
                                                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nilai->nama; ?>"/>
                                                
                                            </div>
                                            <?php if (form_error('nama')) : ?>
                                            <div class=" col-sm-5">
                                                <?= form_error('nama');?>
                                            </div>
                                            <?php endif ?>
                                           </div>
                                    </div>

                                    <div class="form-group">
                                        <?= form_label('Univeristas', 'reg_jenis', ['class' => 'col-md-3 col-xs-12 control-label']) ?>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" class="form-control" id="reg_jenis" name="reg_jenis" value="<?php echo $nilai->reg_jenis; ?>"/>
                                                
                                            </div>
                                            <?php if (form_error('reg_jenis')) : ?>
                                            <div class=" col-sm-5">
                                                <?= form_error('reg_jenis');?>
                                            </div>
                                            <?php endif ?>
                                        </div>
                                    </div>

                                   

                                    <div class="form-group">
                                      <?= form_label('Upload Ijazah', 'userfile', ['class' => 'col-md-3 col-xs-12 control-label col-sm-2']) ?>
                                        <div class="col-md-6 col-xs-12">
                                            <input type="file" class="fileinput btn-primary" name="file" id="file" size ="25" title="Telusuri File"/>

                                            <span class="help-block">
                                             </span>
                                        </div>
                                </div>

                                <div class="panel-footer">
                                    <a href="<?php echo base_url();?>nilai/getPreach" class="btn btn-danger">Back</a>
                                    <button class="btn btn-primary pull-right" type="submit" name="submit">Submit</button>
                                </div>
                            </div>
                            </form>

                        </div>
                    </div>                    
                    
                </div>
                <!-- END PAGE CONTENT WRAPPER -->  