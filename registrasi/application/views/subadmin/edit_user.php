 <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">Beranda</a></li>
                    <li><a href="#">Profil</a></li>
                    <li class="active"><a href="#">Edit User</a></li>
                </ul>
                <!-- END BREADCRUMB -->
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">
                        <?php foreach($users as $s){ ?>
                        <form class="form-horizontal" action="<?php echo base_url(). 'admin/user/update_user'; ?>" method="post">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Edit</strong> User</h3>
                                </div>
                                <div class="panel-body">
                                    <p>Silahkan lengkapi form input user di bawah ini</p>.</div>
                                <div class="panel-body">                                                                        
                                    
                                    <div class="form-group">
                                        <input type="hidden" name="id" value="<?php echo $s->id ?>">
                                        <label class="col-md-3 col-xs-12 control-label">Username</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" placeholder="Masukan Username" name="username" class="form-control" value="<?php echo $s->username ?>"/>
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
                                                <input type="text" placeholder="Masukan Nama Lengkap" name="nama" class="form-control" value="<?php echo $s->nama ?>"/>
                                            </div>                                            
                                        </div>
                                    </div>   

                                    <input type="hidden" name="foto" value="foto-default.jpg">                                              
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Level</label>
                                        <div class="col-md-6 col-xs-12">
                                            <select class="form-control select" id="level" name="level" value="<?php echo $s->level ?>">
                                                <option <?php if ($s->level=="") {echo "selected";}?> value="">-- Pilih --</option>
                                                <option <?php if ($s->level=="admin") {echo "selected";}?> value="Admin">Admin</option>
                                                <option <?php if ($s->level=="dosen") {echo "selected";}?> value="Dosen">Dosen</option>
                                                <option <?php if ($s->level=="staff") {echo "selected";}?> value="Staff">Staff</option>
                                                <option <?php if ($s->level=="mahasiswa") {echo "selected";}?> value="Mahasiswa">Mahasiswa</option>
                                                <option <?php if ($s->level=="alumni") {echo "selected";}?> value="Alumni">Alumni</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel-footer">
                                    <button class="btn btn-default">Clear Form</button>                                    
                                    <button class="btn btn-primary pull-right" name="submit">Submit</button>
                                </div>
                            </div>
                            </form>
                          <?php } ?>
                        </div>
                    </div>                    
                    
                </div>
                <!-- END PAGE CONTENT WRAPPER --> 