<?php
if (!$this->session->userdata('id')) {
	redirect(base_url() . 'admin');
}
?>
<section class="content-header">
	<div class="content-header-left">
		<h1>Edit Testimonial</h1>
	</div>
	<div class="content-header-right">
		<a href="<?php echo base_url(); ?>admin/testimonial" class="btn btn-primary btn-sm">View All</a>
	</div>
</section>

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
						<label for="" class="col-sm-3 control-label">Pengiriman Delegasi <span>*</span></label>
						<div class="col-sm-3">
							<select class="form-control select" id="reg_delegasi" name="reg_delegasi"
								value="<?php echo $testimonial['reg_delegasi'] ?>">
								<option <?php if ($testimonial['reg_delegasi'] == "") {
									echo "selected";
								} ?> value="">--
									Pilih --</option>
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
							<select class="form-control select" id="reg_jenis" name="reg_jenis"
								value="<?php echo $testimonial['reg_jenis'] ?>">
								<option <?php if ($testimonial['reg_jenis'] == "") {
									echo "selected";
								} ?> value="">--
									Pilih --</option>
								<option <?php if ($testimonial['reg_jenis'] == "Psy-Paper") {
									echo "selected";
								} ?> value="Psy-Paper">Psy-Paper</option>
								<option <?php if ($testimonial['reg_jenis'] == "Psy-Intervention") {
									echo "selected";
								} ?> value="Psy-Intervention">Psy-Intervention</option>
								<option <?php if ($testimonial['reg_jenis'] == "Psy-Proposal") {
									echo "selected";
								} ?> value="Psy-Proposal">Psy-Proposal</option>
								<option <?php if ($testimonial['reg_jenis'] == "Psy-Design") {
									echo "selected";
								} ?> value="Psy-Design">Psy-Design</option>
								<option <?php if ($testimonial['reg_jenis'] == "Psy-Infografis") {
									echo "selected";
								} ?> value="Psy-Infografis">Psy-Infografis</option>
								<option <?php if ($testimonial['reg_jenis'] == "Psy-Essay") {
									echo "selected";
								} ?> value="Psy-Essay">Psy-Essay</option>
								<option <?php if ($testimonial['reg_jenis'] == "Psy-Film") {
									echo "selected";
								} ?> value="Psy-Film">Psy-Film</option>
								<option <?php if ($testimonial['reg_jenis'] == "Psy-Vlog") {
									echo "selected";
								} ?> value="Psy-Vlog">Psy-Vlog</option>
								<option <?php if ($testimonial['reg_jenis'] == "Psy-Photography") {
									echo "selected";
								} ?> value="Psy-Photography">Psy-Photography</option>
								<option <?php if ($testimonial['reg_jenis'] == "Psy-Science") {
									echo "selected";
								} ?> value="Psy-Science">Psy-Science</option>
								<option <?php if ($testimonial['reg_jenis'] == "Psy-Debate") {
									echo "selected";
								} ?> value="Psy-Debate">Psy-Debate</option>
								<option <?php if ($testimonial['reg_jenis'] == "Psy-Preach") {
									echo "selected";
								} ?> value="Psy-Preach">Psy-Preach</option>
								<option <?php if ($testimonial['reg_jenis'] == "Psy-Qiraah") {
									echo "selected";
								} ?> value="Psy-Qiraah">Psy-Qiraah</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">Universitas <span>*</span></label>
						<div class="col-sm-6">
							<select class="form-control select" id="reg_jenis" name="reg_universitas"
								value="<?php echo $testimonial['reg_universitas'] ?>">
								<option <?php if ($testimonial['reg_universitas'] == "") {
									echo "selected";
								} ?> value="">
									-- Pilih --</option>
								<option <?php if ($testimonial['reg_universitas'] == "Universitas Islam Riau (UIR) Pekanbaru") {
									echo "selected";
								} ?> value="Universitas Islam Riau (UIR) Pekanbaru">
									Universitas Islam Riau (UIR) Pekanbaru</option>
								<option <?php if ($testimonial['reg_universitas'] == "Universitas Islam Sultan Agung (UNISSULA) Semarang") {
									echo "selected";
								} ?> value="Universitas Islam Sultan Agung (UNISSULA) Semarang">Universitas Islam Sultan
									Agung (UNISSULA) Semarang</option>
								<option <?php if ($testimonial['reg_universitas'] == "Universitas Islam Negeri (UIN) Sunan Gunung Djati Bandung") {
									echo "selected";
								} ?> value="Universitas Islam Negeri (UIN) Sunan Gunung Djati Bandung">Universitas Islam
									Negeri (UIN) Sunan Gunung Djati Bandung</option>
								<option <?php if ($testimonial['reg_universitas'] == "Universitas Islam Negeri (UIN) Sunan Gunung Djati Bandung") {
									echo "selected";
								} ?> value="Universitas Islam Negeri (UIN) Sunan Gunung Djati Bandung">Universitas Islam
									Negeri (UIN) Sunan Gunung Djati Bandung</option>
								<option <?php if ($testimonial['reg_universitas'] == "Universitas Muhammadiyah Malang (UMM)  Malang") {
									echo "selected";
								} ?> value="Universitas Muhammadiyah Malang (UMM)  Malang">Universitas Muhammadiyah
									Malang (UMM) Malang</option>
								<option <?php if ($testimonial['reg_universitas'] == "Unniversitas Muhammdiyah Prof. Dr. Hamka (UHAMKA) Jakarta") {
									echo "selected";
								} ?> value="Unniversitas Muhammdiyah Prof. Dr. Hamka (UHAMKA) Jakarta">Unniversitas
									Muhammdiyah Prof. Dr. Hamka (UHAMKA) Jakarta</option>
								<option <?php if ($testimonial['reg_universitas'] == "Universitas Muhammadiyah Surakarta (UMS) Surakrta") {
									echo "selected";
								} ?> value="Universitas Muhammadiyah Surakarta (UMS) Surakrta">Universitas Muhammadiyah
									Surakarta (UMS) Surakrta</option>
								<option <?php if ($testimonial['reg_universitas'] == "Universitas Islam Bandung (UNISBA) Bandung") {
									echo "selected";
								} ?> value="Universitas Islam Bandung (UNISBA) Bandung">Universitas Islam Bandung
									(UNISBA) Bandung</option>
								<option <?php if ($testimonial['reg_universitas'] == "UIN Sunan Kalijaga Yogyakarta") {
									echo "selected";
								} ?> value="UIN Sunan Kalijaga Yogyakarta">UIN Sunan Kalijaga
									Yogyakarta</option>
								<option <?php if ($testimonial['reg_universitas'] == "Universitas Abdurrab Pekanbaru") {
									echo "selected";
								} ?> value="Universitas Abdurrab Pekanbaru">Universitas Abdurrab
									Pekanbaru</option>
								<option <?php if ($testimonial['reg_universitas'] == "Universitas Muhammadiyah Riau (UMRI) Pekanbaru ") {
									echo "selected";
								} ?> value="Universitas Muhammadiyah Riau (UMRI) Pekanbaru ">Universitas Muhammadiyah
									Riau (UMRI) Pekanbaru </option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">Judul Paper <span>*</span></label>
						<div class="col-sm-6">
							<input type="text" class="form-control" name="judul"
								value="<?php echo $testimonial['judul']; ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">Email <span>*</span></label>
						<div class="col-sm-3">
							<input type="text" class="form-control" name="email"
								value="<?php echo $testimonial['email']; ?>">
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
							<select class="form-control select" id="reg_delegasi" name="reg_delegasi"
								value="<?php echo $testimonial['kategori'] ?>">
								<option <?php if ($testimonial['kategori'] == "") {
									echo "selected";
								} ?> value="">--
									Pilih --</option>
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
							<input type="text" class="form-control" name="penulis1"
								value="<?php echo $testimonial['penulis1']; ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">Penulis II <span>*</span></label>
						<div class="col-sm-4">
							<input type="text" class="form-control" name="penulis2"
								value="<?php echo $testimonial['penulis2']; ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">Penulis III <span>*</span></label>
						<div class="col-sm-4">
							<input type="text" class="form-control" name="penulis3"
								value="<?php echo $testimonial['penulis3']; ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">Penulis IV <span>*</span></label>
						<div class="col-sm-4">
							<input type="text" class="form-control" name="penulis4"
								value="<?php echo $testimonial['penulis4']; ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">Penulis V <span>*</span></label>
						<div class="col-sm-4">
							<input type="text" class="form-control" name="penulis5"
								value="<?php echo $testimonial['penulis5']; ?>">
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
				</div>
			</div>
		</div>
	</div>
</section>