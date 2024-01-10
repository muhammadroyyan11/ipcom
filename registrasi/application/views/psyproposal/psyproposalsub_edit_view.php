<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
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
                           <form class="form-horizontal" method="post" action="<?php echo base_url();?>PenelitianMahasiswa/updatedatamahasiswa" enctype="multipart/form-data">

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
					<p><?php echo $this->session->flashdata('error'); ?></p>
				</div>
			<?php
			}
			if ($this->session->flashdata('success')) {
			?>
				<div class="callout callout-success">
					<p><?php echo $this->session->flashdata('success'); ?></p>
				</div>
			<?php
			}
			?>

			<?php echo form_open_multipart(base_url() . 'testimonial/add', array('class' => 'form-horizontal')); ?>
			<div class="box box-info">
				<div class="box-body">
					<div class="box-body">
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">Pengiriman Delegasi <span>*</span></label>
						<div class="col-sm-3">
							<select class="form-control select" id="reg_delegasi" name="reg_delegasi" value="<?php echo $testimonial['reg_delegasi'] ?>">
								<option <?php if ($testimonial['reg_delegasi'] == "") {
											echo "selected";
										} ?> value="">-- Pilih --</option>
								<option <?php if ($testimonial['reg_delegasi'] == "Modus Daring 1") {
											echo "selected";
										} ?> value="Modus Daring 1">Modus Daring 1</option>
								<option <?php if ($testimonial['reg_delegasi'] == "Modus Daring 2") {
											echo "selected";
										} ?> value="Modus Daring 2">Modus Daring 2</option>
								<option <?php if ($testimonial['reg_delegasi'] == "Modus Daring 3") {
											echo "selected";
										} ?> value="Modus Daring 3">Modus Daring 3</option>		
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">Jenis Lomba <span>*</span></label>
						<div class="col-sm-3">
							<select class="form-control select" id="reg_jenis" name="reg_jenis" value="<?php echo $testimonial['reg_jenis'] ?>">
								<option <?php if ($testimonial['reg_jenis'] == "") {
											echo "selected";
										} ?> value="">-- Pilih --</option>
								<option <?php if ($testimonial['reg_jenis'] == "Psy-Paper") {
											echo "selected";
										} ?> value="Psy-Paper">Psy-Paper</option>
								<option <?php if ($testimonial['reg_jenis'] == "PSY-TAHFIDZ JUZ 30") {
											echo "selected";
										} ?> value="PSY-TAHFIDZ JUZ 30">Psy-Tahfidz Juz 30</option>
								<option <?php if ($testimonial['reg_jenis'] == "PSY-TAHFIDZ JUZ 1-5") {
											echo "selected";
										} ?> value="PSY-TAHFIDZ JUZ 1-5">Psy-Tahfidz Juz 1-5</option>		
								<option <?php if ($testimonial['reg_jenis'] == "Psy-Proposal") {
											echo "selected";
										} ?> value="Psy-Proposal">Psy-Proposal</option>
								<option <?php if ($testimonial['reg_jenis'] == "Psy-Lagu Religi") {
											echo "selected";
										} ?> value="Psy-Lagu Religi">Psy-Lagu Religi</option>
								<option <?php if ($testimonial['reg_jenis'] == "Psy-Cerpen") {
											echo "selected";
										} ?> value="Psy-Cerpen">Psy-Cerpen</option>
								<option <?php if ($testimonial['reg_jenis'] == "Psy-Esai") {
											echo "selected";
										} ?> value="Psy-Esai">Psy-Esai</option>
								<option <?php if ($testimonial['reg_jenis'] == "Psy-Poster") {
											echo "selected";
										} ?> value="Psy-Poster">Psy-Poster</option>
								<option <?php if ($testimonial['reg_jenis'] == "Psy-HCMotion") {
											echo "selected";
										} ?> value="Psy-HCMotion">Psy-HCMotion</option>
								<option <?php if ($testimonial['reg_jenis'] == "Psy-Fotografi") {
											echo "selected";
										} ?> value="Psy-Fotografi">Psy-Fotografi</option>
								<option <?php if ($testimonial['reg_jenis'] == "Psy-Cerdas Cermat") {
											echo "selected";
										} ?> value="Psy-Cerdas Cermat">Psy-Cerdas Cermat</option>
								<option <?php if ($testimonial['reg_jenis'] == "Psy-Debat") {
											echo "selected";
										} ?> value="Psy-Debat">Psy-Debat</option>
								<option <?php if ($testimonial['reg_jenis'] == "Psy-Preach") {
											echo "selected";
										} ?> value="Psy-Preach">Psy-Preach</option>
								<option <?php if ($testimonial['reg_jenis'] == "Psy-Qira\'ah") {
											echo "selected";
										} ?> value="Psy-Qira\'ah">Psy-Qira'ah</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">Judul Proposal <span>*</span></label>
						<div class="col-sm-6">
							<input type="text" class="form-control" name="judul" value="<?php echo $testimonial['judul']; ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">Email <span>*</span></label>
						<div class="col-sm-3">
							<input type="text" class="form-control" name="email" value="<?php echo $testimonial['email']; ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">HP <span>*</span></label>
						<div class="col-sm-3">
							<input type="text" class="form-control" name="hp" value="<?php echo $testimonial['hp']; ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">Kategori <span>*</span></label>
						<div class="col-sm-3">
							<select class="form-control select" id="reg_delegasi" name="reg_delegasi" value="<?php echo $testimonial['kategori'] ?>">
								<option <?php if ($testimonial['kategori'] == "") {
											echo "selected";
										} ?> value="">-- Pilih --</option>
								<option <?php if ($testimonial['kategori'] == "Perorangan") {
											echo "selected";
										} ?> value="Perorangan">Perorangan</option>
								<option <?php if ($testimonial['kategori'] == "Kelompok") {
											echo "selected";
										} ?> value="Kelompok">Kelompok</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">Penulis I <span>*</span></label>
						<div class="col-sm-4">
							<input type="text" class="form-control" name="penulis1" value="<?php echo $testimonial['penulis1']; ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">Penulis II <span>*</span></label>
						<div class="col-sm-4">
							<input type="text" class="form-control" name="penulis2" value="<?php echo $testimonial['penulis2']; ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">Penulis III <span>*</span></label>
						<div class="col-sm-4">
							<input type="text" class="form-control" name="penulis3" value="<?php echo $testimonial['penulis3']; ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">Penulis IV <span>*</span></label>
						<div class="col-sm-4">
							<input type="text" class="form-control" name="penulis4" value="<?php echo $testimonial['penulis4']; ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">Penulis V <span>*</span></label>
						<div class="col-sm-4">
							<input type="text" class="form-control" name="penulis5" value="<?php echo $testimonial['penulis5']; ?>">
						</div>
					</div>

					<div class="form-group">
						<label for="" class="col-sm-3 control-label"></label>
						<div class="col-sm-6">
							<?php
							$url = isset($_SERVER['HTTP_REFERER']) ? htmlspecialchars($_SERVER['HTTP_REFERER']) : '';
							?>
							<a href="<?= $url ?>" class="btn btn-danger">Back</a>
						</div>
					</div>
					<?php echo form_close(); ?>
					<br>
				</div>
			</div>
		</div>
	</div>
</section>