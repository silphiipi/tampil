<div class="container-fluid">
	<button class="btn btn-primary mb-3" data-toggle="modal" data-target="#tambah_menu"><i class="fas fa-plus fa-sm"></i>Tambah Menu</button>

	<table class="table table-bordered">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Jenis</th>
			<th>Harga</th>
			<th colspan="3">Aksi</th>
		</tr>



		<?php
		$no=1;
		foreach($menu as $mn) : ?>

         <tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $mn->Nama ?></td>
			<td><?php echo $mn->Jenis ?></td>
			<td><?php echo $mn->Harga ?></td>
			<td><div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div></td>
			<td><?php echo anchor ('admin/data_menu/edit/'  .$mn->Id_menu, '<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div ') ?></td>
			<td><?php echo anchor('admin/data_menu/hapus/'  .$mn->Id_menu, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>') ?></td>



		</tr>
	<?php endforeach; ?>


	</table>
	
</div>
<!-- Modal -->
<div class="modal fade" id="tambah_menu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">FORM INPUT MENU</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      

        <div class="modal-body">
        <form action="<?php echo base_url(). 'admin/data_menu/tambah_aksi'?>"method="post" enctype="multipart/form-data" >
        	
        	<div class="form-group">
        		<label>Nama</label>
        		<input type="text" name="nama" class="form-control">
        	</div>

        	<div class="form-group">
        		<label>Jenis</label>
        		<input type="text" name="jenis" class="form-control">
        	</div>

        	<div class="form-group">
        		<label>Harga</label>
        		<input type="text" name="harga" class="form-control">
        	</div>

        	<div class="form-group">
        		<label>Gambar</label><br>
        		<input type="file" name="gambar" class="form-control">
        	</div>
        	
        	
   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>

       </form>

    </div>
  </div>
</div>