<div class="container">
	<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash');?>"></div>
	<?php if( $this->session->flashdata('flash')) : ?>
	<!-- <div class="roe mt-3">
		<div class="col-md-6">
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				  Data Mahasiswa 
				  <strong>Berhasil</strong> <?= $this->session->flashdata('flash'); ?>
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				  </button>
			</div>
		</div>
	</div> -->
	<script></script>
<?php endif; ?>

	<div class="row mt-3">
		<div class="col-mb-6">
			<a href="<?= base_url(); ?>mahasiswa/tambah" class="btn btn-primary">Tambah Data Mahasiswa</a>
		</div>
	</div>

	<div class="row mt-3">
		<div class="col-md-6">
			<form action="" method="post">
				<div class="input-group ">
				  <input type="text" class="form-control" placeholder="Cari Data Mahasiswa.." name="keyword">
				  <div class="input-group-append">
				  <button class="btn btn-primary" type="submit" >Cari</button>
				  </div>
				</div>
			</form>
		</div>

	</div>

	<div class="row">
		<div class="col-lg-6">
			<h3>Daftar Mahasiswa</h3>
			<?php if(empty($mahasiswa) ) : ?>
				<div class="alert alert-danger" role="alert">
				 Data Mahasiswa Tidak ditemukan
				</div>
			<?php endif; ?>
			<ul class="list-group">
			  <?php foreach( $mahasiswa as $mhs ) : ?>
			  	<li class="list-group-item">
			  	<?= $mhs['nama']; ?>
			  		<a href="<?= base_url(); ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class=" badge badge-danger float-right ml-1 tombol-hapus">Hapus</a>
			  		<a href="<?= base_url(); ?>/mahasiswa/ubah/<?= $mhs['id']; ?>" class=" badge badge-success float-right  ml-1");>Ubah</a>
			  		<a href="<?= base_url(); ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class=" badge badge-primary float-right ml-1");>Detail</a>
			  	</li>
			  <?php endforeach; ?>
			</ul>
		</div>
	</div>
</div>