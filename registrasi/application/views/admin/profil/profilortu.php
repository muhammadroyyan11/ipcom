<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<ul class="breadcrumb">
                    <li><a href="#">Beranda</a></li>
                    <li class="active">Profil</li>
                </ul>
                <!-- END BREADCRUMB -->
                <!-- PAGE TITLE -->
                <div class="page-title">
                    <h2><span class="fa fa-arrow-circle-o-left"></span> Profil</h2>
                </div>
                <!-- END PAGE TITLE -->

<!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    <div class="row">
                        <div class="col-lg-12">
                        <h2>PROFIL ORANG TUA</h2>
                        </div>
                    </div>
                 <div class="row">
                <div class="col-lg-12" style="margin-top: 10px;">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- START DATATABLE EXPORT -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">DataTable Export</h3>
                                    <div class="btn-group pull-right">
                                        <a href="<?php echo site_url();?>admin" class="btn btn-danger"><i class="fa fa-download"></i> Export Data</a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                <table id="table" class="table datatable">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                           
                                            <th>Nama Mahasiswa</th>
                                            <th>Nama Orang Tua</th>
                                            <th>Alamat</th>
                                            <th>Kab/Kota</th>
                                            <th>Kecamatan</th>
                                            <th>No Telp</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php
                                        $no = 1;
                                        foreach($data_users as $d){
                                      ?>
                                       <tr>
                                           <td><?= $no;?></td>
                                          
                                           <td><?= $d->nama;?></td>
                                           <td><?= $d->orangtua;?></td>
                                           <td><?= $d->alamat;?></td>
                                           <td><?= $d->id_kab_ortu;?></td>
                                           <td><?= $d->id_kec_ortu;?></td>
                                           <td><?= $d->notelp;?></td>
                                           <td>
                                           <a href="<?php echo base_url();?>dataprofilortu/profil/<?php echo $d->id ?>" class="btn btn-sm-btn-warning"><i class="glyphicon glyphicon-search"></i></a>
                                           </td>
                                       </tr>
                                    <?php 
                                      $no++;
                                        }                                  
                                    ?>
                                    </tbody>
                                </table>

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

