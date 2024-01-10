<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<ul class="breadcrumb">
	<li><a href="#">Beranda</a></li>
	<li class="active">Registrasi</li>
</ul>
<div class="page-title">
	<h2><span class="fa fa-arrow-circle-o-left"></span> Registrasi Peserta</h2>
</div>
<div class="page-content-wrap">
	<?= showFlashMessage() ?>
	<?= showMessage() ?>
	<div class="row">
		<div class="col-md-12">
			<form class="form-horizontal" method="post" action="<?php echo base_url(); ?>Registrasi/proses_input"
				enctype="multipart/form-data">

				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title"><strong>Form</strong> Registrasi Peserta</h3>
					</div>
					<div class="panel-body">
						<p></p>
					</div>

					<section class="content">
						<div class="row">
							<div class="col-md-12">

								<?php
								if ($this->session->flashdata('error')) {
									?>
									<div class="callout callout-danger">
										<p>
											<?php echo $this->session->flashdata('error'); ?>
										</p>
									</div>
									<?php
								}
								if ($this->session->flashdata('success')) {
									?>
									<div class="callout callout-success">
										<p>
											<?php echo $this->session->flashdata('success'); ?>
										</p>
									</div>
									<?php
								}
								?>

								<?php echo form_open_multipart(base_url() . 'testimonial/add', array('class' => 'form-horizontal')); ?>
								<div class="box box-info">
									<div class="box-body">
										<div class="form-group">
											<label for="" class="col-sm-3 control-label">Jenis Lomba
												<span>*</span></label>
											<div class="col-sm-3">
												<select class="form-control select" id="reg_jenis" name="reg_jenis">
													<option value="">-- Pilih --</option>
													<option value="Psy-Paper">Psy-Paper</option>
													<option value="Psy-Intervention">Psy-Intervention</option>
													<option value="Psy-Proposal">Psy-Proposal</option>
													<option value="Psy-Design">Psy-Design</option>
													<option value="Psy-Infografis">Psy-Infografis</option>
													<option value="Psy-Essay">Psy-Essay</option>
													<option value="Psy-Film">Psy-Film</option>
													<option value="Psy-Vlog">Psy-Vlog</option>
													<option value="Psy-Photography">Psy-Photography</option>
													<option value="Psy-Preach">Psy-Preach</option>
													<option value="Psy-Qiraah">Psy-Qiraah</option>
												</select>
											</div>
										</div>

										<div class="form-group">
											<label for="" class="col-sm-3 control-label">Judul Poster Infografis
												<span></span></label>
											<div class="col-sm-6">
												<input type="text" class="form-control" name="judul">
											</div>
										</div>
										<div class="form-group">
											<label for="" class="col-sm-3 control-label">Email <span></span></label>
											<div class="col-sm-3">
												<input type="text" class="form-control" name="email">
											</div>
										</div>
										<div class="form-group">
											<label for="" class="col-sm-3 control-label">HP <span></span></label>
											<div class="col-sm-3">
												<input type="text" class="form-control" name="hp">
											</div>
										</div>
										<div class="form-group">
											<label for="" class="col-sm-3 control-label">Kategori <span></span></label>
											<div class="col-sm-3">
												<select class="form-control select" id="kategori" name="kategori"
													value="">
													<option value="">-- Pilih --</option>
													<option value="Perorangan">Perorangan</option>
													<option value="Kelompok">Kelompok</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label for="" class="col-sm-3 control-label">Creator I
												<span>*</span></label>
											<div class="col-sm-4">
												<input type="text" class="form-control" name="penulis1">
											</div>
										</div>
										<div class="form-group">
											<label for="" class="col-sm-3 control-label">Creator II
												<span>*</span></label>
											<div class="col-sm-4">
												<input type="text" class="form-control" name="penulis2">
											</div>
										</div>
										<div class="form-group">
											<label for="" class="col-sm-3 control-label">Creator III
												<span>*</span></label>
											<div class="col-sm-4">
												<input type="text" class="form-control" name="penulis3">
											</div>
										</div>
										<div class="form-group">
											<label for="" class="col-sm-3 control-label">Creator IV
												<span>*</span></label>
											<div class="col-sm-4">
												<input type="text" class="form-control" name="penulis4">
											</div>
										</div>
										<div class="form-group">
											<label for="" class="col-sm-3 control-label">Link Google Drive
												<span>*</span></label>
											<div class="col-sm-4">
												<input type="text" class="form-control" name="link">
											</div>
										</div>

										<div class="form-group">
											<?= form_label('Upload Abstrak', 'userfile', ['class' => 'col-md-3 col-xs-12 control-label col-sm-2']) ?>
											<div class="col-md-6 col-xs-12">
												<input type="file" class="fileinput btn-primary" name="abstrak"
													id="abstrak" title="Telusuri File" />
												<span class="help-block">File dibuat dalam Format PDF. Nama file tidak
													boleh ada spasi dan dimulai dengan No. NPM-Abstract-Kelompok. Contoh
													: 175310005-Abstrak-Kelompok.pdf maksimum ukuran file 1 MB</span>
											</div>

										</div>

										<div class="form-group">
											<?= form_label('Upload Surat Pernyataan', 'userfile2', ['class' => 'col-md-3 col-xs-12 control-label col-sm-2']) ?>
											<div class="col-md-6 col-xs-12">
												<input type="file" class="fileinput btn-primary" name="pernyataan"
													id="pernyataan" title="Telusuri File" />
												<span class="help-block">File dibuat dalam Format JPG/PDF. Nama file
													tidak boleh ada spasi dan dimulai dengan No.
													NPM-Pernyataan-Perorangan. Contoh :
													175310005-Pernyataan-Perorangan.pdf maksimum ukuran file 1 MB</span>
											</div>

										</div>

										<div class="form-group">
											<?= form_label('Upload KTM', 'userfile', ['class' => 'col-md-3 col-xs-12 control-label col-sm-2']) ?>
											<div class="col-md-6 col-xs-12">
												<input type="file" class="fileinput btn-primary" name="ktm" id="ktm"
													title="Telusuri File" />
												<span class="help-block">File dibuat dalam Format JPG/PDF. Nama file
													tidak boleh ada spasi dan dimulai dengan No. NPM-KTM-Kelompok.
													Contoh : 175110005-KTM-Kelompokpdf maksimum ukuran file 1 MB</span>
											</div>
										</div>



										<div class="form-group">
											<?= form_label('Upload Soft Copy Karya', 'userfile3', ['class' => 'col-md-3 col-xs-12 control-label col-sm-2']) ?>
											<div class="col-md-6 col-xs-12">
												<input type="file" class="fileinput btn-primary" name="softcopy"
													id="softcopy" title="Telusuri File" />
												<span class="help-block">File dibuat dalam Format PDF. Nama file tidak
													boleh ada spasi dan dimulai dengan No. NPM-Softcopy-Perorangan.
													Contoh : 175310005-Softcopy-Perorangan.pdf maksimum ukuran file 1
													MB</span>
											</div>

										</div>
										<div class="form-group">
											<?= form_label('Upload Screenshot Karya di Youtube dan Instagram', 'userfile3', ['class' => 'col-md-3 col-xs-12 control-label col-sm-2']) ?>
											<div class="col-md-6 col-xs-12">
												<input type="file" class="fileinput btn-primary" name="screenshoot"
													id="screenshoot" size="25" title="Telusuri File" />
												<span class="help-block">File dibuat dalam Format JPG/PDF. Nama file
													tidak boleh ada spasi dan dimulai dengan No.
													NPM-Screenshoot-Kelompok. Contoh :
													175310005-Screenshoot-Kelompok.pdf </span>
											</div>

										</div>

										<div class="form-group">
											<label for="" class="col-sm-3 control-label"></label>
											<div class="panel-footer">
												<?php
												$url = isset($_SERVER['HTTP_REFERER']) ? htmlspecialchars($_SERVER['HTTP_REFERER']) : '';
												?>
												<a href="<?= $url ?>" class="btn btn-danger">Back</a>
												<button class="btn btn-primary pull-right" type="submit"
													name="submit">Submit</button>
											</div>
										</div>
										<?php echo form_close(); ?>
										<br>
									</div>
								</div>
							</div>
						</div>
					</section>