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
                           <form class="form-horizontal" method="post" action="<?php echo base_url();?>KeteranganAktif/updatedatadekan" enctype="multipart/form-data">

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
                                                <input type="text" class="form-control" disabled="disabled" id="nosurat" name="nosurat" value = "<?php echo $keteranganaktif->nosurat; ?>" />
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
                                                        <input type="text" class="form-control datepicker" name="tglmasehi"  disabled="disabled" value = "<?php echo $keteranganaktif->tglmasehi; ?>"/>
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
                                        <div class="form-group has-feedback ">
                                        <label class="col-md-3 col-xs-12 control-label">Status</label>
                                        <div class="col-md-6 col-xs-12">
                                            <select class="form-control select" id="approval" name="approval" value="<?php echo $keteranganaktif->approval ?>">
                                                <option <?php if ($keteranganaktif->approval=="") {echo "selected";}?> value="">-- Pilih --</option>
                                                <option <?php if ($keteranganaktif->approval=="1") {echo "selected";}?> value="1">Approval</option>
                                                <option <?php if ($keteranganaktif->approval=="0") {echo "selected";}?> value="0">Proses</option>
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