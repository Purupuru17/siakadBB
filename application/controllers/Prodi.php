<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prodi extends CI_Controller {

	public function index()
	{
		$this->data['title'] = 'Data Program Studi';
		
		$this->load->view('prodi/view_index', $this->data);
	}
	public function tambah()
	{
		$this->data['title'] = 'Tambah Program Studi';
		
		$this->load->view('prodi/view_form', $this->data);
	}
	public function ubah()
	{
		$this->data['title'] = 'Ubah Program Studi';
		
		$this->load->view('prodi/view_form', $this->data);
	}
	public function hapus()
	{
		//hapus disini tanpa view
	}
}
