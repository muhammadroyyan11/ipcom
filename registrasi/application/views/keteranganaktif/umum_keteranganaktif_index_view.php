<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<ul class="breadcrumb">
                    <li><a href="#">Beranda</a></li>
                    <li class="active">Surat Keterangan Aktif</li>
                </ul>
                <!-- END BREADCRUMB -->
                <!-- PAGE TITLE -->
                <div class="page-title">
                    <h2><span class="fa fa-arrow-circle-o-left"></span> Surat Keterangan Aktif</h2>
                </div>
                <!-- END PAGE TITLE -->

<!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">

                 <div class="row">
                <div class="col-lg-12" style="margin-top: 10px;">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- START DATATABLE EXPORT -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Data Surat Keterangan Aktif</h3>
                                    <div class="btn-group pull-right">
                                        <a href="<?php echo site_url();?>admin" class="btn btn-danger"><i class="fa fa-download"></i> Export Data</a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                <?= showFlashMessage() ?>
                                <?= showMessage() ?>
                                <?php  $no = 0; ?>
                                <?php if($keteranganaktif): ?>
                                <table id="table" class="table datatable">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama</th>
                                            <th>Tanggal</th>
                                            <th>Checked</th>
                                            <th>Agenda</th>
                                            <th>File Permohonan</th>
                                            <th>File SPP</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($keteranganaktif as $row): ?>
                                             <tr>
                                                 <td><?= ++$no ?></td>
                                                 <td><?= $row->nama;?></td>
                                                 <td><?= $row->tglmasehi;?></td>
                                                 <td><?php if($row->tu === '1'){
                                                         echo 'Checked';
                                                     }else if($row->tu === '0'){
                                                         echo 'Proses';
                                                     }else{
                                                         echo 'Error! gagal mengambil status akun';
                                                     } ?></td>
                                                 <td><?php if($row->agenda === '1'){
                                                         echo 'Agenda';
                                                     }else if($row->agenda === '0'){
                                                         echo 'Proses';
                                                     }else{
                                                         echo 'Error! gagal mengambil status akun';
                                                     } ?></td>
                                                 <td><?= $row->filepermohonan;?></td>
                                                 <td><?= $row->filespp;?></td>
                                                 <td>
                                                 <a href="<?php echo base_url();?>KeteranganAktifTU/ubah/<?php echo $row->id; ?>"><span class="glyphicon glyphicon-pencil"></span></a>
                                                 
                                                 <a href="<?php echo base_url();?>KeteranganAktifTU/download/<?php echo $row->id; ?>"><span class="glyphicon glyphicon-save" title="Download Lampiran Permohonan"></span></a>
                                                 <a href="<?php echo base_url();?>KeteranganAktifTU/downloadspp/<?php echo $row->id; ?>"><span class="glyphicon glyphicon-save" title="Downlaod Lampiran SPP"></span></a>                                                
                                                 <a href="<?php echo base_url();?>PrtKeteranganAktifTU/pdfpermohonan/<?php echo $row->id; ?>"><span class="glyphicon glyphicon-print"></span></a>
                                                 <a href="<?php echo base_url();?>KeteranganAktifTU/deletedata/<?php echo $row->id; ?>"><span class="glyphicon glyphicon-trash" onclick ="return confirm('Yakin akan menghapus data ini?')"></span></a>
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