<?php
	if($this->session->has_userdata('username') == false){
		redirect('Laundry');
	}
?>
<?php
    $tipe_pesanan = array("Express", "Reguler", "Satuan Pakaian(Tebal)", "Satuan Pakaian(Tipis)", "Bed Cover", "Karpet", "Sprei");
?>

<div class="container">
	<div class="row" style="padding-bottom:2rem">
		<div class="col-8">
			<h1 style="padding-top:150px ;">DAFTAR PESANAN</h1>
			<p>Halaman ini hanya dapat melihat daftar pesanan</p>
		</div>
		<div class="col-4">
			<img style="height: 300px ;" src="<?php echo base_url('assets/datapesanan.png')?>" alt="">
		</div>
	</div>
	<button type="button" class="btn btn-primary mb-5" data-toggle="modal" data-target="#tambah_pesanan">TAMBAH
		PESANAN
	</button>
	<table id="example" class="display" style="width:100%;">
		<thead>
			<tr>
				<th>Tipe</th>
				<th>Nama</th>
				<th>Kg/Satuan</th>
				<th>Harga</th>
				<th>Alamat</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php
			foreach ($data as $p) {
			?>
			<tr>
				<td><?php echo $p->tipe_laundry?></td>
				<td><?php echo $p->nama_pemesan?></td>
				<td><?php echo $p->kg?></td>
				<td>Rp. <?php echo $p->harga?></td>
				<td><?php echo $p->alamat?></td>
				<td>
					<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit1">
						Edit
					</button>
					<a type="button" class="btn btn-danger"
						href="<?php echo base_url('DataPesanan/hapuspesanan/'.$p->id)?>"
						onClick="return confirm('Apakah Anda Yakin?')">Hapus
					</a>
				</td>

				<!-- Modal Edit -->
				<div class="modal fade" id="edit1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1"
					aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<center>
									<h2>EDIT DATA PESANAN</h2>
								</center>
							</div>
							<div class="modal-body">
								<form method="POST" action="<?php echo base_url('DataPesanan/editpesanan/'.$p->id)?>">
									<div class="form-group">
										<label for="formGroupExampleInput2">Tipe</label>
										<select class="form-control" id="formGroupExampleInput2" name="tipe" required>
											<?php foreach ($tipe_pesanan as $tipe ) {?>
											<option value="<?php echo $tipe; ?>"><?php echo $tipe;  ?></option>
											<?php } ?>
										</select>
									</div>
									<div class="form-group">
										<label for="formGroupExampleInput">Nama</label>
										<input type="text" class="form-control" id="formGroupExampleInput"
											placeholder="Nama" name="nama" required>
									</div>
									<div class="form-group">
										<label for="formGroupExampleInput2">Kg/Satuan</label>
										<input type="text" class="form-control" id="formGroupExampleInput2"
											placeholder="Kg" name="kg" required>
									</div>
									<div class="form-group">
										<label for="formGroupExampleInput2">Harga</label>
										<input type="text" class="form-control" id="formGroupExampleInput2"
											placeholder="ex. 10000" name="harga" required>
									</div>
									<div class="form-group">
										<label for="formGroupExampleInput2">Alamat</label>
										<input type="text" class="form-control" id="formGroupExampleInput2"
											placeholder="" name="alamat" required>
									</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
								<input type="submit" class="btn btn-primary" id="hapus" value="Submit"
									placeholder="Simpan">
								</form>
							</div>
						</div>
					</div>
				</div>
			</tr>
			<?php
			}
			?>
		</tbody>
	</table>
</div>
</div>


<!-- Modal Tambah -->
<div class="modal fade" id="tambah_pesanan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<center>
					<h2>TAMBAH DATA PESANAN</h2>
				</center>
			</div>
			<div class="modal-body">
				<form method="POST" action="<?php echo base_url('DataPesanan/tambahpesanan')?>">
					<div class="form-group">
						<label for="formGroupExampleInput2">Tipe</label>
						<select class="form-control" id="formGroupExampleInput2" name="tipe" required>
							<?php foreach ($tipe_pesanan as $tipe ) {?>
							<option value="<?php echo $tipe; ?>"><?php echo $tipe;  ?></option>
							<?php } ?>
						</select>
					</div>
					<div class="form-group">
						<label for="formGroupExampleInput">Nama</label>
						<input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama"
							name="nama" required>
					</div>
					<div class="form-group">
						<label for="formGroupExampleInput2">Kg/Satuan</label>
						<input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Kg" name="kg"
							required>
					</div>
					<div class="form-group">
						<label for="formGroupExampleInput2">Harga</label>
						<input type="text" class="form-control" id="formGroupExampleInput2" placeholder="ex. 10000"
							name="harga" required>
					</div>
					<div class="form-group">
						<label for="formGroupExampleInput2">Alamat</label>
						<input type="text" class="form-control" id="formGroupExampleInput2" placeholder=""
							name="alamat" required>
					</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
				<input type="submit" class="btn btn-primary" id="hapus" value="Submit" placeholder="Simpan">
				</form>
			</div>
		</div>
	</div>
</div>