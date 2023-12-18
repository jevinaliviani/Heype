<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct()
  	{
    	parent::__construct();
    	$this->load->model('Resep_model');
    	$this->load->model('Donasi_model');
  	}
	public function index()
	{
		$data['user'] = $this->db->get_where('user', 
		['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('layout/header',$data);
		$this->load->view('user/vw_user',$data);
        $this->load->view('layout/footer');
	}

	public function Dokumentasi()
	{	$data['user'] = $this->db->get_where('user', 
		['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('layout/header',$data);
		$this->load->view('user/vw_blog',$data);
        $this->load->view('layout/footer');
	}
	
	public function Aboutus()
	{	
		$data['user'] = $this->db->get_where('user', 
		['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('layout/header',$data);
		$this->load->view('user/vw_aboutus',$data);
        $this->load->view('layout/footer');
	}

	public function Resep()
	{	
		$data['user'] = $this->db->get_where('user', 
		['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('layout/header',$data);
		$this->load->view('user/vw_resep',$data);
		$this->load->view('layout/footer');
	}

	public function Menu()
	{	
		$data['user'] = $this->db->get_where('user', 
		['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('layout/header',$data);
		$this->load->view('user/vw_menu',$data);
		$this->load->view('layout/footer');
	}

	public function Donasi()
	{
		$data['user'] = $this->db->get_where('user', [
			'email' =>
			  $this->session->userdata('email')
		  ])->row_array();
		  $this->form_validation->set_rules('nama', 'Nama Donatur', 'required', [
			'required' => 'Nama Donatur Wajib di isi'
		  ]);
		  $this->form_validation->set_rules('email', 'Email', 'required', [
			'required' => 'Email Donatur Wajib di isi'
		  ]);
		  $this->form_validation->set_rules('no_hp', 'No HP', 'required|numeric', [
			'required' => 'NO HP Donatur Wajib di isi',
			'numeric' => 'NO HP harus Angka'
		  ]);
		if ($this->form_validation->run() == false) {
			$this->load->view('layout/header',$data);
			$this->load->view('user/vw_isidonasi',$data);
			$this->load->view('layout/footer');
		}else{
			$data = [
				'nama' => $this->input->post('nama'),
				'email' => $this->input->post('email'),
				'no_hp' => $this->input->post('no_hp'),
			];
			$upload_image = $_FILES['bukti_pembayaran']['name'];
        	if ($upload_image) {
          		$config['allowed_types'] = 'gif|jpg|png';
          		$config['max_size'] = '2048';
          		$config['upload_path'] = './assets2/img/donasi/';
          		$this->load->library('upload', $config);
            	if ($this->upload->do_upload('bukti_pembayaran')) {
                	$new_image = $this->upload->data('file_name');
                	$this->db->set('bukti_pembayaran', $new_image);
            	} else {
                	echo $this->upload->display_errors();
            	}	
          	}
      		$this->Donasi_model->insert($data, $upload_image);
			redirect('User');
		}
	}
}