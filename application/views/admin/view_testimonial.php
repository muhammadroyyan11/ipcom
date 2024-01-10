<?php
if(!$this->session->userdata('id')) {
    redirect(base_url().'admin');
}
?>

<section class="content-header">
	<div class="content-header-left">
		<h1>Data Peserta Lomba</h1>
	</div>
	<div class="content-header-right">
		<a href="<?php echo base_url(); ?>admin/testimonial/add" class="btn btn-primary btn-sm">Export</a>	</div>
</section>

<section class="content">
	<div class="row">
		<div class="col-md-12">

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
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th width="30">SL</th>
								<th width="60">Delegasi</th>
								<th width="90">Lomba</th>
								<th width="120">Universitas</th>
								<th width="60">HP</th>
								<th width="150">Judul</th>
								<th width="70">Kategori</th>
								<th width="100">Penulis</th>
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
										<a href="<?php echo base_url(); ?>admin/testimonial/edit/<?php echo $row['reg_id']; ?>" <span class="glyphicon glyphicon-th-list" data-toggle="tooltip" title="Lihat Detail Data"></span></a>
										<a href="<?php echo base_url(); ?>Testimonial/download/<?php echo $row['reg_id']; ?>" <span class="glyphicon glyphicon-download-alt" data-toggle="tooltip" title="Download Abstrak"></span></a>
										<a href="<?php echo base_url(); ?>Testimonial/downloadsp/<?php echo $row['reg_id']; ?>" <span class="glyphicon glyphicon-download-alt" data-toggle="tooltip" title="Download Surat Pernyataan"></span></a>
										<a href="<?php echo base_url(); ?>admin/Testimonial/downloadktm/<?php echo $row['reg_id']; ?>" <span class="glyphicon glyphicon-download-alt" data-toggle="tooltip" title="Download KTM"></span></a>
										<a href="<?php echo base_url(); ?>Testimonial/downloadsoft/<?php echo $row['reg_id']; ?>" <span class="glyphicon glyphicon-download-alt" data-toggle="tooltip" title="Download Soft Copy"></span></a>
										<a href="<?php echo base_url(); ?>admin/testimonial/delete/<?php echo $row['reg_id']; ?>" onClick="return confirm('Are you sure?');"><span class="glyphicon glyphicon-trash" data-toggle="tooltip" title="Hapus Peserta"></span></a>
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