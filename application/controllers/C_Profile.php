<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Profile extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		is_logged_in();
	}

	public function index()
	{
		$data['user'] = $this->db->get_where('tb_users', ['username' => $this->session->userdata('username')])->row_array();
		$this->load->view('Template/Header');
		$this->load->view('Template/Menu');
		$this->load->view('Profil' , $data);
		$this->load->view('Template/Footer');

	}

	public function editUser() {
        $data['user'] = $this->db->get_where('tb_users', ['username' => $this->session->userdata('username')])->row_array();
    
        if (empty($data['user'])) {
            // Jika data pengguna tidak ditemukan, bisa redirect atau tampilkan pesan error
            show_error('Data user tidak ditemukan', 404);
            return;
        }
    
        $this->load->view('Template/Header');
        $this->load->view('Template/Menu');
		$this->load->view('Update_Profil', $data);
		$this->load->view('Template/Footer') ;
    }
    

    public function updateUser() {
		$data = 
        [
            "name" => $this->input->post('nama', true),
            "username" => $this->input->post('username', true),
            "password" => $this->input->post('password', PASSWORD_DEFAULT)
        ];

        $this->db->where('id' , $this->input->post('id'));
        $this->db->update('tb_users' , $data);

        $this->session->set_flashdata('message', '<script>
    			alert("Harap Login Ulang!") ;
			</script>');
        redirect('login');
    }

}