<ul class="breadcrumb">
                    <li><a href="#">Beranda</a></li>
                    <li class="active">Form Penilaian Lomba</li>
                </ul>
                <!-- END BREADCRUMB -->
                <!-- PAGE TITLE -->
                <div class="page-title">
                    <h2><span class="fa fa-arrow-circle-o-left"></span> Form Penilaian Lomba</h2>
                </div>
                <!-- END PAGE TITLE -->

<!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
				<div class="row">
   <div class="col-lg-12">
	<a href="<?php echo site_url('#'); ?>" class="btn btn-primary"><i class="fa fa-plus"></i> Upload Form Penilaian Lomba</a>
   </div>
</div>
<br>
                 <div class="row">
                <div class="col-lg-12" style="margin-top: 10px;">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- START DATATABLE EXPORT -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Data Peserta Lomba</h3>
                                    <div class="btn-group pull-right">
   <a href="#" class="btn btn-danger"><i class="fa fa-download"></i> Download Form Penilaian Lomba</a>
</div>
                                </div>
                                <div class="panel-body">
                                <?= showFlashMessage() ?>
                                <?= showMessage() ?>
                                <?php  $no = 0; ?>
                                <?php if($penilaian): ?>
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
                                    <?php foreach($penilaian as $row): ?>
                                             <tr>
                                                 <td><?= ++$no ?></td>
                                                 <td><?= $row->username;?></td>
                                                 <td><?= $row->nama;?></td>
                                                 <td><?= $row->reg_jenis;?></td>
                                                 <td><?= $row->file;?></td>
                                                 <td>
                                                <a href="<?php echo base_url();?>Penilaian/ubahmahasiswa/<?php echo $row->id; ?>"><span class="glyphicon glyphicon-pencil"></span></a>
                                                
                                                </td>
                                             </tr>
                                          <?php endforeach ?>
                                     </tbody>
                                </table> 
                                <?php endif ?>
                            </div>
			</div>
		</div>
	</div>


</section>