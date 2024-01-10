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
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">Pengiriman Delegasi <span>*</span></label>
						<div class="col-sm-3">
							<select class="form-control select" id="reg_delegasi" name="reg_delegasi" value="<?php echo $testimonial['reg_delegasi'] ?>">
								<option <?php if ($testimonial['reg_delegasi'] == "") {
											echo "selected";
										} ?> value="">-- Pilih --</option>
								<option <?php if ($testimonial['reg_delegasi'] == "Online") {
											echo "selected";
										} ?> value="Online">Online</option>
								<option <?php if ($testimonial['reg_delegasi'] == "Onsite") {
											echo "selected";
										} ?> value="Onsite">Onsite</option>
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
								<option <?php if ($testimonial['reg_jenis'] == "Psy-Proposal") {
											echo "selected";
										} ?> value="Psy-Proposal">Psy-Proposal</option>
								<option <?php if ($testimonial['reg_jenis'] == "Psy-Lagu Religi") {
											echo "selected";
										} ?> value="Psy-Lagu Religi">Psy-Lagu Religi</option>
								<option <?php if ($testimonial['reg_jenis'] == "Psy-Esai") {
											echo "selected";
										} ?> value="Psy-Essay">Psy-Essay</option>
								<option <?php if ($testimonial['reg_jenis'] == "Psy-Puisi") {
											echo "selected";
										} ?> value="Psy-Puisi">Psy-Puisi</option>
								<option <?php if ($testimonial['reg_jenis'] == "Psy-Vlog") {
											echo "selected";
										} ?> value="Psy-Vlog">Psy-Vlog</option>
								<option <?php if ($testimonial['reg_jenis'] == "Psy-Fotografi") {
											echo "selected";
										} ?> value="Psy-Photography">Psy-Photography</option>
								<option <?php if ($testimonial['reg_jenis'] == "Psy-Pantun") {
											echo "selected";
										} ?> value="Psy-Science">Psy-Pantun</option>
								<option <?php if ($testimonial['reg_jenis'] == "Psy-Poster") {
											echo "selected";
										} ?> value="Psy-Qiraah">Psy-Poster</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">Universitas <span>*</span></label>
						<div class="col-sm-6">
						<select class="form-control select" id="reg_jenis" name="reg_universitas" value="<?php echo $testimonial['reg_universitas'] ?>">
							<option <?php if ($testimonial['reg_universitas'] == "") {
											echo "selected";
										} ?> value="">-- Pilih --</option>
								<option <?php if ($testimonial['reg_universitas'] == "Universitas Islam Riau (UIR) Pekanbaru") {
											echo "selected";
										} ?> value="Universitas Islam Riau (UIR) Pekanbaru">Universitas Islam Riau (UIR) Pekanbaru</option>
								<option <?php if ($testimonial['reg_universitas'] == "UIN Raden Fatah Palembang") {
											echo "selected";
										} ?> value="UIN Raden Fatah Palembang">UIN Raden Fatah Palembang</option>
								<option <?php if ($testimonial['reg_universitas'] == "Universitas Islam Negeri (UIN) Sunan Gunung Djati Bandung") {
											echo "selected";
										} ?> value="Universitas Islam Negeri (UIN) Sunan Gunung Djati Bandung">Universitas Islam Negeri (UIN) Sunan Gunung Djati Bandung</option>
								
								<option <?php if ($testimonial['reg_universitas'] == "Universitas Islam Negeri Sultan Syarif Kasim (UIN SUSKA) Riau") {
											echo "selected";
										} ?> value="Universitas Islam Negeri Sultan Syarif Kasim (UIN SUSKA) Riau">Universitas Islam Negeri Sultan Syarif Kasim (UIN SUSKA) Riau</option>
							</select>
						</div>
					</div>

					<div class="form-group">
						<label for="" class="col-sm-3 control-label">Nama Peserta <span>*</span></label>
						<div class="col-sm-4">
							<input type="text" class="form-control" name="penulis1" value="<?php echo $testimonial['penulis1']; ?>">
						</div>
					</div>

					<div class="form-group">
						<label for="" class="col-sm-3 control-label">HP <span>*</span></label>
						<div class="col-sm-3">
							<input type="text" class="form-control" name="hp" value="<?php echo $testimonial['hp']; ?>">
						</div>
					</div>
					
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">Email <span>*</span></label>
						<div class="col-sm-3">
							<input type="text" class="form-control" name="email" value="<?php echo $testimonial['email']; ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">Link Google Drive <span>*</span></label>
						<div class="col-sm-3">
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