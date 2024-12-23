<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sign extends CI_Controller {

	public function index()
	{
		$this->load->view('Template/Header_login');
		$this->load->view('Sign');
		$this->load->view('Template/Footer');
}

public function simpan(){

		$this->load->model('m_user');
		$data['user'] = $this->m_user->simpanuser();

		$this->session->set_flashdata('message', '<script>
    			alert("Berhasil Regist") ;
			</script>');
		redirect('login');
	}

}