<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<ul class="breadcrumb">
                    <li><a href="#">Beranda</a></li>
                    <li class="active">Penilaian Juri</li>
                </ul>
                <!-- END BREADCRUMB -->
                <!-- PAGE TITLE -->
                <div class="page-title">
                    <h2><span class="fa fa-arrow-circle-o-left"></span> Penilaian Juri</h2>
                </div>
                <!-- END PAGE TITLE -->

<!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    <div class="row">
                       
                    </div>
                 <div class="row">
                <div class="col-lg-12" style="margin-top: 10px;">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- START DATATABLE EXPORT -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Data Penilaian Juri</h3>
                                    <div class="btn-group pull-right">
                                        <a href="#" class="btn btn-danger"><i class="fa fa-download"></i> Export Data</a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                <?= showFlashMessage() ?>
                                <?= showMessage() ?>
                                <?php  $no = 0; ?>
                                <?php if($nilai): ?>
                                <table id="table" class="bordered table">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Username</th>
                                            <th>Nama</th>
                                            <th>Jenis Lomba</th>
                                            <th>File</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($nilai as $didik): ?>
                                             <tr>
                                                 <td><?= ++$no ?></td>
                                                 <td><?= $didik->username;?></td>
                                                 <td><?= $didik->nama;?></td>
                                                 <td><?= $didik->reg_jenis;?></td>
                                                 <td><?= $didik->file;?></td>
                                                 <td>
                                                 
                                                 <a href="<?php echo base_url();?>Nilai/download/<?php echo $didik->id; ?>"><span class="glyphicon glyphicon-save"></span></a>
                                               
                                                 </td>
                                             </tr>
                                          <?php endforeach ?>
                                     </tbody>
                                </table> 
                                <?php endif ?>
                            </div>
                        </div>
                            <!-- END DATATABLE EXPORT -->
                       </div>
                    </div>
                 </div>

                <!-- PAGE CONTENT WRAPPER -->
              <div class="page-content-wrap">

         </div>
    </div>
</div>