<?php

class Dashboard_admin extends CI_Controller{
	public function index()
	{
		$this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
		$this->load->view('admin/dashboard');
		$this->load->view('template_admin/footer');

	}

	public function tambah_ke_keranjang($id_menu)
	{
		$menu = $this->model_menu->find($id_menu);

		$data = array(
		'id'        => $menu->id_menu,
		'qty'       => 1,
		'price'     => $menu->harga,
		'name'      => $menu->nama
		
  
  );

		$this->card->insert($data);
		redirect('dashboard';)


	}
} 