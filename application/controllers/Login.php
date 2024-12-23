<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/Login
	 *	- or -
	 * 		http://example.com/index.php/Login/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/Login/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('Template/Header_login');
		$this->load->view('Login');
		$this->load->view('Template/Footer');
	}

    public function verifikasi()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $user = $this->db->get_where('tb_users', ['username' => $username])->row_array();
        if ($user) {
            if (password_verify($password,$user['password'])) {
                $data = [
                    'username' => $user['username']
                ];
                $this->session->set_userdata($data);
                redirect('C_Dashboard');
            } else {
                $this->session->set_flashdata('message' ,'<script>
                        alert("Password Salah") ;
                    </script>');
                redirect('Login');
        }
        } else {
            $this->session->set_flashdata('message' ,'<script>
                    alert("Username Salah") ;
                </script>');
            redirect('Login');
        }
    }

    public function logout()
    {
        $this->session->set_flashdata('message' ,"<script>
                alert('Berhasil Logout') ;
            </script>");
        redirect('Login');
    }

}
