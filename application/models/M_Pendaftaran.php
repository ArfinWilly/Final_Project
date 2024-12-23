<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Pendaftaran extends CI_Model {

	public function getCompetition()
	{
        //mengambil semua data dari tabel di database
		$this->db->select('*');
		$this->db->from('tb_pendaftaran');
		$this->db->join('tb_lomba', 'tb_lomba.id = tb_pendaftaran.id_lomba');
		return $this->db->get()->result_array();
	}

	public function addRegistration()
	{
		$data =
		[
			"id_lomba" => $this->input->post('id_lomba', true) ,
			"nama_pendaftar" => $this->input->post('name', true) ,
			"kelas" => $this->input->post('class', true) ,
			"no_hp" => $this->input->post('no_hp', true) ,
			"tgl_daftar" => $this->input->post('tgl_daftar', true) ,
		];

		$this->db->insert('tb_pendaftaran', $data);
	}

	public function getRegistrationById($id)
	{
		return $this->db->get_where('tb_pendaftaran', ['id_pendaftaran' => $id])->row_array();
	}
	
}
