<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Pendaftaran extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		is_logged_in();
	}

	public function index()
	{

		$this->load->helper('tanggal_helper') ;

		$this->load->model('m_pendaftaran');
		$data['p'] = $this->m_pendaftaran->getCompetition() ;
		$this->load->view('Template/Header');
		$this->load->view('Template/Menu');
		$this->load->view('Pendaftaran_Lomba' , $data);
		$this->load->view('Template/Footer');

	}

	public function delete($id)
	{
		$this->db->delete('tb_pendaftaran',['id_pendaftaran' => $id]);
		redirect('C_Pendaftaran');
	}

	public function edit($id)
	{

		$this->load->model('m_pendaftaran');
		$data['edit'] = $this->m_pendaftaran->getRegistrationById($id);
		$data['lomba'] = $this->db->get('tb_lomba')->result_array();

		$this->load->view('Template/Header');
		$this->load->view('Template/Menu');
		$this->load->view('Update_Pendaftaran',$data);
        $this->load->view('Template/Footer');
	}

	public function update()
	{
		$data=

    [
        "id_lomba" => $this->input->post('id_lomba' , true) ,
        "nama_pendaftar" => $this->input->post('nama_pendaftar' , true) ,
        "kelas" => $this->input->post('kelas' , true) ,
        "no_hp" => $this->input->post('no_hp' , true) ,
        "tgl_daftar" => $this->input->post('tgl_daftar' , true) ,

   
      ]; 

      $this->db->where('id_pendaftaran' , $this->input->post('id_pendaftaran'));
      $this->db->update('tb_pendaftaran',$data);
      redirect('C_Pendaftaran');	
	}
}