<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function index()
	{
		$where = array('nama_mhs LIKE' => '%Rani%');
		$limit = 10;

		$this->data['title'] = 'Data Mahasiswa';
		$this->data['list_mhs'] = $this->db->get_where('m_mhs',$where,$limit)->result_array();

		$this->load->view('mahasiswa/view_index', $this->data);
	}
	public function tambah()
	{
		$this->data['title'] = 'Tambah Mahasiswa';
		$this->data['action'] = 'mahasiswa/tambah_aksi';
		$this->data['data'] = array(
			'nim' => '', 'nama_mhs' => '', 'kelamin_mhs' => '',
			'lahir_mhs' => ''
		);

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
	public function ubah($id)
	{
		$this->data['title'] = 'Ubah Mahasiswa';
		$this->data['action'] = 'mahasiswa/ubah_aksi/'.$id;
		$this->data['data'] = $this->db->get_where('m_mhs', 
				array('id_mhs' => $id))->row_array();
		
		$this->load->view('mahasiswa/view_form', $this->data);
	}
	public function ubah_aksi($id)
	{
		//var db						var form
		$data['nim'] = $this->input->post('nim');
		$data['nama_mhs'] = $this->input->post('nama');
		
		$this->db->where('id_mhs',$id);
		$update = $this->db->update('m_mhs', $data);
		if($update){
			redirect('mahasiswa');
		}else{
			redirect('mahasiswa/ubah/'.$id);
		}
	}
	public function hapus($id)
	{
		$delete = $this->db->delete('m_mhs', array('id_mhs' => $id));
		if($delete){
			redirect('mahasiswa');
		}else{
			redirect('');
		}
	}
}
