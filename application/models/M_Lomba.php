<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Lomba extends CI_Model {

	public function getCompetition()
    {
		return $this->db->get('tb_lomba')->result_array();
    }

    public function addCompetition()
	{
		$data =
		[
			"nama_lomba" => $this->input->post('lomba', true) ,
			"penyelenggara" => $this->input->post('name', true)
		];

		$this->db->insert('tb_lomba', $data);
	}

	public function getCompetitionByid($id)
	{
		return $this->db->get_where('tb_lomba', ['id' => $id])->row_array();
	}

}