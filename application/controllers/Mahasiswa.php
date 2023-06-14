<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function index()
	{
		$this->data['title'] = 'Data Mahasiswa';
		
		$this->load->view('mahasiswa/view_index', $this->data); //view 1
	}
	public function tambah()
	{
		$this->data['title'] = 'Tambah Mahasiswa';
		
		$this->load->view('mahasiswa/view_form', $this->data); //view 2
	}
	public function ubah()
	{
		$this->data['title'] = 'Ubah Mahasiswa';
		
		$this->load->view('mahasiswa/view_form', $this->data); //view 2
	}
	public function hapus()
	{
		//hapus disini tanpa view
	}
}
