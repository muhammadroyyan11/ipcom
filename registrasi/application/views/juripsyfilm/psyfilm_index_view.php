<ul class="breadcrumb">
                    <li><a href="#">Beranda</a></li>
                    <li class="active">Psy-Film</li>
                </ul>
                <!-- END BREADCRUMB -->
                <!-- PAGE TITLE -->
                <div class="page-title">
                    <h2><span class="fa fa-arrow-circle-o-left"></span> Psy-Movie</h2>
                </div>
                <!-- END PAGE TITLE -->

<!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
				<div class="row">
				<div class="col-lg-12">
                            <a href="<?php echo site_url('nilai/create');?>" class="btn btn-primary"><i class="fa fa-plus"></i> Upload Penilaian Juri</a>
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
                                    <h3 class="panel-title">Data Psy-Film</h3>
                                    <div class="btn-group pull-right">
   <a href="https://kimpsi.uii.ac.id/public/uploads/FORMJURIPSY-MOVIE.xlsx" class="btn btn-danger"><i class="fa fa-download"></i> Download Form Penilaian</a>
</div>
                                </div>
                                <div class="panel-body">
                                <?= showFlashMessage() ?>
                                <?= showMessage() ?>

			<?php
	        if($this->session->flashdata('error')) {
	            ?>
				<div class="callout callout-danger">
					<p><?php echo $this->session->flashdata('error'); ?></p>
				</div>
	            <?php
	        }
	        if($this->session->flashdata('success')) {
	            ?>
				<div class="callout callout-success">
					<p><?php echo $this->session->flashdata('success'); ?></p>
				</div>
	            <?php
	        }
	        ?>

	        
			<div class="box box-info">
				<div class="box-body table-responsive">
                <table id="table" class="table datatable">
						<thead>
							<tr>
								<th width="30">No.</th>
								<th width="60">Delegasi</th>
								<th width="90">Lomba</th>
								<th width="120">Universitas</th>
								<th width="60">HP</th>
								<th width="150">Judul Film</th>
								<th width="70">Kategori</th>
								<th width="100">Creator</th>
								<th width="100">Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$i=0;							
							foreach ($testimonial as $row) {
								$i++;
								?>
								<tr>
									<td><?php echo $i; ?></td>
									<td><?php echo $row['reg_delegasi']; ?></td>
									<td><?php echo $row['reg_jenis']; ?></td>
									<td><?php echo $row['reg_universitas']; ?></td>
									<td><?php echo $row['hp']; ?></td>
									<td><?php echo $row['judul']; ?></td>
									<td><?php echo $row['kategori']; ?></td>
									<td><?php echo $row['penulis1']; ?></td>
									<td>										
										<a href="<?php echo base_url(); ?>JuriPsymovie/edit/<?php echo $row['reg_id']; ?>" <span class="glyphicon glyphicon-th-list" data-toggle="tooltip" title="Lihat Detail Data"></span></a>
										<a href="<?php echo base_url(); ?>JuriPsymovie/download/<?php echo $row['reg_id']; ?>" <span class="glyphicon glyphicon-download-alt" data-toggle="tooltip" title="Download Abstrak"></span></a>
										<a href="<?php echo base_url(); ?>JuriPsymovie/downloadsp/<?php echo $row['reg_id']; ?>" <span class="glyphicon glyphicon-download-alt" data-toggle="tooltip" title="Download Surat Pernyataan"></span></a>
										<a href="<?php echo base_url(); ?>JuriPsymovie/downloadktm/<?php echo $row['reg_id']; ?>" <span class="glyphicon glyphicon-download-alt" data-toggle="tooltip" title="Download KTM"></span></a>
										<a href="<?php echo base_url(); ?>JuriPsymovie/delete/<?php echo $row['reg_id']; ?>" onClick="return confirm('Are you sure?');"><span class="glyphicon glyphicon-trash" data-toggle="tooltip" title="Hapus Peserta"></span></a>
									</td>
								</tr>
								<?php
							}
							?>							
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>


</section>