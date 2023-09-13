<?php

class Data_menu extends CI_Controller{
	public function index()
	{
		$data['menu'] = $this->model_menu->tampil_data()->result();
		$this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
		$this->load->view('admin/data_menu', $data);
		$this->load->view('template_admin/footer');
	}

	public function tambah_aksi()
	{
		$nama    = $this->input->post('nama');
		$jenis   = $this->input->post('jenis');
		$harga   = $this->input->post('harga');
		$gambar  = $_FILES['gambar']['name'];
		if ($gambar_mn =''){}else{
			$config ['upload_path'] ='./uploads';
		    $config ['allowed_types'] ='jpg|jpeg|png|gif';

		    

		    $this->load->library('upload', $config);
		    if(!$this->upload->do_upload('gambar')){
		    	echo "Gambar gagal diUpload!";
		    }else{
		    	$gambar=$this->upload->data('file_name');
		    }
		 }

        $data = array(
		 	'Nama'    => $nama,
		 	'Jenis'   => $jenis,
		 	'Harga'   => $harga,
		 	'Gambar'  => $gambar
		 );

		 $this->model_menu->tambah_menu($data, 'tb_menu');
		 redirect('admin/data_menu/index');
	}

	public function edit($Id)
	{
		$where = array('Id_menu' => $Id);
		$data['menu'] = $this->model_menu->edit_menu($where,'tb_menu')->result();
		$this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
		$this->load->view('admin/edit_menu', $data);
		$this->load->view('template_admin/footer');

	}

	public function update(){
		$id_menu               =$this->input->post('id_menu');
		$nama                  =$this->input->post('nama');
		$jenis                 =$this->input->post('jenis');
		$harga                 =$this->input->post('harga');

		 $data = array(
		 	'Nama'    => $nama,
		 	'Jenis'   => $jenis,
		 	'Harga'   => $harga,
		 	'Gambar'  => $gambar
		 );

		 $where = array(
		 	'Id_menu' => $id
		 );


		  $this->model_menu->update_data($where,$data, 'tb_menu');
		 redirect('admin/data_menu/index');

	}

	public function hapus ($id_menu)
	{
		$where = array('Id_menu' =>$id_menu);
		$this->model_menu->hapus_data($where, 'tb_menu');
		redirect('admin/data_menu/index');
	}
}