<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function index()
	{
        $this->load->view('layout/header');
		$this->load->view('user/vw_user');
        $this->load->view('layout/footer');
	}

	public function Dokumentasi()
	{
        $this->load->view('layout/header');
		$this->load->view('user/vw_blog');
        $this->load->view('layout/footer');
	}

	public function Aboutus()
	{
        $this->load->view('layout/header');
		$this->load->view('user/vw_aboutus');
        $this->load->view('layout/footer');
	}

	public function Sarapan()
	{
		$this->load->view('layout/header');
		$this->load->view('user/vw_sarapan');
		$this->load->view('layout/footer');
	}

	public function Makanan()
	{
		$this->load->view('layout/header');
		$this->load->view('user/vw_makanan');
		$this->load->view('layout/footer');
	}

	public function Dessert()
	{
		$this->load->view('layout/header');
		$this->load->view('user/vw_dessert');
		$this->load->view('layout/footer');
	}

	public function Snack()
	{
		$this->load->view('layout/header');
		$this->load->view('user/vw_snack');
		$this->load->view('layout/footer');
	}

	public function Minuman()
	{
		$this->load->view('layout/header');
		$this->load->view('user/vw_minuman');
		$this->load->view('layout/footer');
	}

	public function Donasi()
	{
		$this->load->view('layout/header');
		$this->load->view('admin/vw_isidonasi');
		$this->load->view('layout/footer');
	}
}
