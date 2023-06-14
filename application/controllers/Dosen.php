<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {

	public function index()
	{
		$this->data['title'] = 'Data Dosen';
		
		$this->load->view('dosen/view_index', $this->data);
	}
	public function tambah()
	{
		$this->data['title'] = 'Tambah Dosen';
		
		$this->load->view('dosen/view_form', $this->data);
	}
	public function ubah()
	{
		$this->data['title'] = 'Ubah Dosen';
		
		$this->load->view('dosen/view_form', $this->data);
	}
	public function hapus()
	{
		//hapus disini tanpa view
	}
}
