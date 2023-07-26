<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function index()
	{
		$where = array('nama_mhs LIKE' => '%Galih%');
		$limit = 5;

		$this->data['title'] = 'Data Mahasiswa';
		$this->data['list_mhs'] = $this->db->get_where('m_mhs',$where,$limit)->result_array();

		$this->load->view('mahasiswa/view_index', $this->data);
	}
	public function tambah()
	{
		$this->data['title'] = 'Tambah Mahasiswa';
		
		$this->load->view('mahasiswa/view_form', $this->data);
	}
	public function tambah_aksi()
	{
		//var db						var form
		$data['nim'] = $this->input->post('nim');
		$data['nama_mhs'] = $this->input->post('nama');
		
		$this->db->set('id_mhs','UUID()',false);
		$insert = $this->db->insert('m_mhs', $data);
		if($insert){
			redirect('mahasiswa');
		}else{
			redirect('mahasiswa/tambah');
		}
	}
	public function ubah()
	{
		$this->data['title'] = 'Ubah Mahasiswa';
		
		$this->load->view('mahasiswa/view_form', $this->data);
	}
	public function hapus()
	{
		//hapus disini tanpa view
	}
}
