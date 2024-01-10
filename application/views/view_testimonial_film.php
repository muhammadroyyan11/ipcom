<!--Banner Start-->
<div class="banner-slider" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $setting['banner_testimonial']; ?>)">
	<div class="bg"></div>
	<div class="bannder-table">
		<div class="banner-text">
			<h1><?php echo $page_testimonial['testimonial_heading']; ?></h1>
		</div>
	</div>
</div>
<!--Banner End-->

<!--Testimonial-Two Start-->

<!--Contact Start-->

<div class="container">
	<div class="row">
		<div class="col-12">
			<div class="contact-form headstyle pt_90">
				<h4>FORM REGISTRASI PSY-FILM</h4>
				<?php
				if ($this->session->flashdata('error')) {
					echo '<div class="error-class">' . $this->session->flashdata('error') . '</div>';
				}
				if ($this->session->flashdata('success')) {
					echo '<div class="success-class">' . $this->session->flashdata('success') . '</div>';
				}
				?>
				<!--<?php echo form_open(base_url() . 'contact/send_email', array('class' => '')); ?>-->
				<section class="content">
					<br>
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

								<?php echo form_open_multipart(base_url() . 'testimonial/addfilm', array('class' => 'form-horizontal')); ?>
								<div class="box box-info">
									<div class="box-body">
										<div class="form-group">
											<label for="" class="col-sm-3 control-label">Pengiriman Delegasi <span>*</span></label>
											<div class="col-sm-3">
												<input type="text" class="form-control" name="delegasi" value="Online">
												<input type="hidden" class="form-control" name="currentUri" value="<?= $CurrentUri ?>">

											</div>
										</div>
										<div class="form-group">
											<label for="" class="col-sm-3 control-label">Jenis Lomba <span>*</span></label>
											<div class="col-sm-3">
												<input type="text" class="form-control" name="jenis" value="Psy-Film">
											</div>
										</div>
										<div class="form-group">
											<label for="" class="col-sm-2 control-label">Universitas <span>*</span></label>
											<div class="col-sm-6">
												<select class="form-control select2" name="universitas">
													<option value="">-- Pilih --</option>
													<option value="Universitas Islam Riau (UIR) Pekanbaru">Universitas Islam Riau (UIR) Pekanbaru</option>
													<option value="Universitas Islam Negeri (UIN) Sunan Gunung Djati Bandung">Universitas Islam Negeri (UIN) Sunan Gunung Djati Bandung</option>
													<option value="UIN Raden Fatah Palembang">UIN Raden Fatah Palembang</option>
													<option value="Universitas Islam Negeri Sultan Syarif Kasim (UIN SUSKA) Riau">Universitas Islam Negeri Sultan Syarif Kasim (UIN SUSKA) Riau</option>
													<option value="Universitas Muhammadiyah Bandung">Universitas Muhammadiyah Bandung</option>
													<option value="Universitas Islam Bandung">Universitas Islam Bandung</option>
													<option value="UIN Imam Bonjol Padang">UIN Imam Bonjol Padang</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label for="" class="col-sm-2 control-label">Judul Film <span>*</span></label>
											<div class="col-sm-6">
												<input type="text" class="form-control" name="judul" value="<?php if (isset($_POST['news_title'])) {
																												echo $_POST['news_title'];
																											} ?>">
											</div>
										</div>

										<div class="form-group">
											<label for="" class="col-sm-3 control-label">Link Google Drive <span>*</span></label>
											<div class="col-sm-4">
												<input type="text" class="form-control" name="penulis5" value="<?php if (isset($_POST['news_title'])) {
																													echo $_POST['news_title'];
																												} ?>">
											</div>
										</div>
										<div class="form-group">
											<label for="" class="col-sm-3 control-label">Email <span>*</span></label>
											<div class="col-sm-3">
												<input type="text" class="form-control" name="email" value="<?php if (isset($_POST['news_title'])) {
																												echo $_POST['news_title'];
																											} ?>">
											</div>
										</div>
										<div class="form-group">
											<label for="" class="col-sm-3 control-label">HP <span>*</span></label>
											<div class="col-sm-3">
												<input type="text" class="form-control" name="hp" value="<?php if (isset($_POST['news_title'])) {
																												echo $_POST['news_title'];
																											} ?>">
											</div>
										</div>
										<div class="form-group">
											<label for="" class="col-sm-2 control-label">Kategori <span>*</span></label>
											<div class="col-sm-3">
												<select class="form-control select2" name="kategori">
													<option value="">-- Pilih --</option>
													<option value="Perorangan">Perorangan</option>
													<option value="Kelompok">Kelompok</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label for="" class="col-sm-3 control-label">Creator I <span>*</span></label>
											<div class="col-sm-4">
												<input type="text" class="form-control" name="penulis1" value="<?php if (isset($_POST['news_title'])) {
																													echo $_POST['news_title'];
																												} ?>">
											</div>
										</div>
										<div class="form-group">
											<label for="" class="col-sm-3 control-label">Creator II <span>*</span></label>
											<div class="col-sm-4">
												<input type="text" class="form-control" name="penulis2" value="<?php if (isset($_POST['news_title'])) {
																													echo $_POST['news_title'];
																												} ?>">
											</div>
										</div>
										<div class="form-group">
											<label for="" class="col-sm-3 control-label">Creator III <span>*</span></label>
											<div class="col-sm-4">
												<input type="text" class="form-control" name="penulis3" value="<?php if (isset($_POST['news_title'])) {
																													echo $_POST['news_title'];
																												} ?>">
											</div>
										</div>


										<br><br>
										<h4 class="seo-info">Upload Files</h4>
										<div class="form-group">
											<label for="" class="col-sm-2 control-label">Sinopsis Film *</label>
											<div class="col-sm-6">
												<input type="file" name="abstrak">
											</div>
										</div>
										<div class="form-group">
											<label for="" class="col-sm-2 control-label">Surat Pernyataan *</label>
											<div class="col-sm-6">
												<input type="file" name="pernyataan">
											</div>
										</div>
										<div class="form-group">
											<label for="" class="col-sm-2 control-label">KTM *</label>
											<div class="col-sm-6" style="padding-top:6px;">
												<input type="file" name="ktm">
											</div>
										</div>

										<div class="form-group">
											<label for="" class="col-sm-2 control-label"></label>
											<div class="col-sm-6">
												<button type="submit" class="btn btn-success pull-left" name="form1">Submit</button>
											</div>
										</div>
										<?php echo form_close(); ?>
									</div>
								</div>
							</div>
						</div>
					</section>
					<!--Contact End-->

			</div>
			<!--Testimonial-Two End-->
			<br><br><br>