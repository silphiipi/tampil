  <div class="container-fluid">
	<h3><i class="fas fa-edit"></i>EDIT DATA MENU</h3>

	<?php foreach($menu as $mn) : ?>

		<form method="post" action="<?php echo base_url(). 'admin/data_menu/update' ?>">

			<div class="for-group">
			   <label>Nama</label>
			   <input type="text" name="nama" class="form-control" value="<?php echo $mn->Nama ?>">
			</div>
			<div class="for-group">
			   <label>Jenis</label>
			   <input type="hidden" name="Id_menu" class="form-control" value="<?php echo $mn->Id_menu ?>">
			   <input type="text" name="jenis" class="form-control" value="<?php echo $mn->Jenis ?>">
			</div>
			<div class="for-group">
			   <label>Harga</label>
			   <input type="text" name="harga" class="form-control" value="<?php echo $mn->Harga ?>">
			</div>

			<button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>
			
		</form>
	<?php endforeach; ?>


</div>
