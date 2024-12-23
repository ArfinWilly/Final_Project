<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_tambahPendaftaran extends CI_Controller {

	public function index()
	{

		$this->load->helper('tanggal_helper') ;
		
		$data['registration'] = $this->db->get('tb_lomba')->result_array();

		$this->load->view('template/Header');
		$this->load->view('template/Menu');
		$this->load->view('Tambah_Pendaftaran',$data);
		$this->load->view('template/Footer');
	}
	
	public function tambah()
	{
		$this->load->model('m_pendaftaran');

		$data['registration'] = $this->m_pendaftaran->addRegistration();

		redirect('C_Pendaftaran');
	}
}