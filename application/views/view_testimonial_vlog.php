<!--Banner Start-->
<div class="banner-slider"
	style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $setting['banner_testimonial']; ?>)">
	<div class="bg"></div>
	<div class="bannder-table">
		<div class="banner-text">
			<h1>
				<?php echo $page_testimonial['testimonial_heading']; ?>
			</h1>
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
				<h4>LIST PESERTA LOMBA</h4>
				<?php
				
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

								<div class="box box-info">
									<div class="box-body table-responsive">
										<table id="example2" class="table table-bordered table-striped">
											<thead>
												<tr>
													<th width="30">No.</th>
													<th width="60">Delegasi</th>
													<th width="90">Lomba</th>
													<th width="120">Universitas</th>
													<th width="70">Kategori</th>
													<th width="100">Peserta 1</th>
													<th width="100">Peserta 2</th>
													<th width="100">Peserta 3</th>
												</tr>
											</thead>
											<tbody>
												<?php
												$i = 0;
												foreach ($testimonials as $row) {
													$i++;
													?>
													<tr>
														<td>
															<?php echo $i; ?>
														</td>
														<td>
															<?php echo $row['reg_delegasi']; ?>
														</td>
														<td>
															<?php echo $row['reg_jenis']; ?>
														</td>
														<td>
															<?php echo $row['reg_universitas']; ?>
														</td>
														<td>
															<?php echo $row['kategori']; ?>
														</td>
														<td>
															<?php echo $row['penulis1']; ?>
														</td>
														<td>
															<?php echo $row['penulis2']; ?>
														</td>
														<td>
															<?php echo $row['penulis3']; ?>
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
			</div>
		</div>
		<!--Contact End-->

	</div>
	<!--Testimonial-Two End-->
	<br><br><br>