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
