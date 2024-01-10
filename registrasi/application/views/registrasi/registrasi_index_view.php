<ul class="breadcrumb">
                    <li><a href="#">Beranda</a></li>
                    <li class="active">Registrasi</li>
                </ul>
                <!-- END BREADCRUMB -->
                <!-- PAGE TITLE -->
                <div class="page-title">
                    <h2><span class="fa fa-arrow-circle-o-left"></span> Registrasi</h2>
                </div>
                <!-- END PAGE TITLE -->

<!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
				<div class="row">
					<div class="col-lg-12">
						<a href="<?php echo site_url('registrasi/create'); ?>" class="btn btn-primary"><i class="fa fa-plus"></i> Registrasi</a>
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
                                    <h3 class="panel-title">Data Registrasi</h3>
                                    <div class="btn-group pull-right">
                                        <a href="<?php echo site_url();?>admin" class="btn btn-danger"><i class="fa fa-download"></i> Export Data</a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                <?= showFlashMessage() ?>
                                <?= showMessage() ?>

<?php  $no = 0; ?>
            <?php if($testimonial): ?>
			<div class="box box-info">
				<div class="box-body table-responsive">
                <table id="table" class="table datatable">
						<thead>
							<tr>
								<th width="30">No.</th>
								<th width="90">Lomba</th>
								<th width="180">Universitas</th>
								<th width="60">HP</th>
								<th width="150">Judul</th>
								<th width="70">Kategori</th>
								<th width="100">Penulis</th>
								<th width="100">Aksi</th>
							</tr>
						</thead>
						<tbody>
						<?php foreach($testimonial as $row): ?>
								<tr>
								<td><?= ++$no ?></td>
                                    <td><?= $row->reg_jenis;?></td>
                                    <td><?= $row->reg_universitas;?></td>
                                    <td><?= $row->hp;?></td>
                                    <td><?= $row->judul;?></td>
                                    <td><?= $row->kategori;?></td>
                                    <td><?= $row->penulis1;?></td>
									<td>										
									<a href="<?php echo base_url(); ?>Registrasi/edit/<?php echo $row->reg_id; ?>" <span class="glyphicon glyphicon-th-list" data-toggle="tooltip" title="Lihat Detail Data"></span></a>
										<a href="<?php echo base_url(); ?>Registrasi/download/<?php echo $row->reg_id; ?>" <span class="glyphicon glyphicon-download-alt" data-toggle="tooltip" title="Download Abstrak"></span></a>
										<a href="<?php echo base_url(); ?>Registrasi/downloadsp/<?php echo $row->reg_id; ?>" <span class="glyphicon glyphicon-download-alt" data-toggle="tooltip" title="Download Surat Pernyataan"></span></a>
										<a href="<?php echo base_url(); ?>Registrasi/downloadktm/<?php echo $row->reg_id; ?>" <span class="glyphicon glyphicon-download-alt" data-toggle="tooltip" title="Download KTM"></span></a>
										<a href="<?php echo base_url(); ?>Registrasi/downloadsoft/<?php echo $row->reg_id; ?>" <span class="glyphicon glyphicon-download-alt" data-toggle="tooltip" title="Download Soft Copy"></span></a>
										<a href="<?php echo base_url(); ?>Registrasi/downloadscreenshoot/<?php echo $row->reg_id; ?>" <span class="glyphicon glyphicon-download-alt" data-toggle="tooltip" title="Download Screenshoot"></span></a>
										<a href="<?php echo base_url(); ?>Registrasi/delete/<?php echo $row->reg_id; ?>" onClick="return confirm('Are you sure?');"><span class="glyphicon glyphicon-trash" data-toggle="tooltip" title="Hapus Peserta"></span></a>
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