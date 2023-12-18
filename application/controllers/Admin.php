<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function index()
	{
        $this->load->view('layout2/header');
		$this->load->view('admin/vw_admin');
        $this->load->view('layout2/footer');
	}

	public function Pesan()
	{
        $this->load->view('layout2/header');
		$this->load->view('admin/vw_pesan');
        $this->load->view('layout2/footer');
	}
	public function Dokumentasi()
	{
        $this->load->view('layout2/header');
		$this->load->view('admin/vw_blog');
        $this->load->view('layout2/footer');
	}

	public function Aboutus()
	{
        $this->load->view('layout2/header');
		$this->load->view('admin/vw_aboutus');
        $this->load->view('layout2/footer');
	}

	public function Resep()
	{
		$this->load->view('layout2/header');
		$this->load->view('admin/vw_resep');
		$this->load->view('layout2/footer');
	}

	public function Sarapan()
	{
		$this->load->view('layout2/header');
		$this->load->view('admin/vw_sarapan');
		$this->load->view('layout2/footer');
	}

	public function Makanan()
	{
		$this->load->view('layout2/header');
		$this->load->view('admin/vw_makanan');
		$this->load->view('layout2/footer');
	}

	public function Dessert()
	{
		$this->load->view('layout2/header');
		$this->load->view('admin/vw_dessert');
		$this->load->view('layout2/footer');
	}

	public function Snack()
	{
		$this->load->view('layout2/header');
		$this->load->view('admin/vw_snack');
		$this->load->view('layout2/footer');
	}

	public function Minuman()
	{
		$this->load->view('layout2/header');
		$this->load->view('admin/vw_minuman');
		$this->load->view('layout2/footer');
	}

	public function UploadResep()
	{
		$this->load->view('layout2/header');
		$this->load->view('admin/vw_uploadresep');
		$this->load->view('layout2/footer');
	}

	public function UploadDokumentasi()
	{
		$this->load->view('layout2/header');
		$this->load->view('admin/vw_uploaddokum');
		$this->load->view('layout2/footer');
	}

	public function UploadPesan(){
		$this->load->view('layout2/header');
		$this->load->view('admin/vw_uploadpesan');
		$this->load->view('layout2/footer');
	}
	
	public function Donasi()
	{
		$this->load->view('layout2/header');
		$this->load->view('admin/vw_isidonasi');
		$this->load->view('layout2/footer');
	}
}
