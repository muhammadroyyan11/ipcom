<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
            <ul class="breadcrumb">
                <li><a href="#">Beranda</a></li>
                <li class="active">Profil</li>
            </ul>
                 <div class="page-title">
                    <h2><span class="fa fa-arrow-circle-o-left"></span> Edit Profil Lomba</h2>
                </div>
                <div class="page-content-wrap">

                    <div class="row">
                        <div class="col-md-12">

                            <form class="form-horizontal" method="post" action="<?php echo base_url();?>profildb/proses_ubahlomba" enctype="multipart/form-data">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Form</strong> Edit Profil Lomba</h3>
                                </div>
                                <div class="panel-body">
                                    <p>Silahkan Edit form di bawah ini.</p>
                                </div>
                                <div class="panel-body form-group-separated">
                                 <?php
                                          foreach($users as $p){
                                        ?>

                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Nama</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" class="form-control" name="nama" value="<?php echo $p->nama ?>"/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Password</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="password" class="form-control" id="password" name="password" value=""/>
                                            </div>
                                            <span class="help-block">Jika password tidak dirubah, kolom password kosongkan saja!</span>
                                        </div>
                                    </div>
                                <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label">Upload Foto</label>
                                    <div class="col-md-6 col-xs-12">
                                        <input type="file" class="fileinput btn-primary" name="userfile" id="userfile" size ="25" title="Telusuri File"/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label"></label>
                                    <div class="col-md-6 col-xs-12">
                                        <a href="#"><img class="img-thumbnail" src="<?php echo base_url() . 'foto/'.$p->foto  ?>"/></a>
                                        <span class="help-block">Format file jpg, gif atau png</span>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <?php $url = isset($_SERVER['HTTP_REFERER']) ?htmlspecialchars($_SERVER['HTTP_REFERER']) : ''; ?>
                                    <a href="<?=$url ?>" class="btn btn-danger">Back</a>
                                    <button class="btn btn-primary pull-right" type="submit" name="submit">Update</button>
                                </div>
                                <?php } ?>
                            </div>
                            </form>
                         </div>
                        </div>
                    </div>

                </div>
                <!-- END PAGE CONTENT WRAPPER -->