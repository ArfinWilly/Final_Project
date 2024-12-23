<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Lomba extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		is_logged_in();
	}

	public function index()
	{
       // yang atas model
		$this->load->model('m_lomba') ;
		$data['competition'] = $this->m_lomba->getCompetition() ;
        //yang bawah view
		$this->load->view('Template/Header');
		$this->load->view('Template/Menu');
		$this->load->view('Lomba' , $data);
		$this->load->view('Template/Footer');
	}

    public function hapus($id)
	{
		$this->db->delete('tb_lomba',['id' => $id]);
		redirect('C_Lomba');
	}

    public function addCompetition()
	{
        $this->load->view('Template/Header');
         $this->load->view('Template/Menu');
        $this->load->view('Tambah_Lomba');
		$this->load->view('Template/Footer');
	}
	public function simpan()
	{
		$this->load->model('m_lomba');

		$data['tb_lomba'] = $this->m_lomba->addCompetition();

		redirect('C_Lomba');
	}

	public function edit($id)
	{

		$this->load->model('m_lomba');
		$data['edit'] = $this->m_lomba->getCompetitionByid($id);

		$this->load->view('Template/Header');
		$this->load->view('Template/Menu');
		$this->load->view('Update_Lomba',$data);
        $this->load->view('Template/Footer');
	}
	public function update()
	{

		$data=
		[
			"nama_lomba" => $this->input->post('lomba' , true) ,
			"penyelenggara" => $this->input->post('name' , true) 
		]; 

		$this->db->where('id' , $this->input->post('id'));
		$this->db->update('tb_lomba',$data);
		redirect('C_Lomba');

	}

}