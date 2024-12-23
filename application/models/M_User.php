<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_User extends CI_Model {

	public function simpanUser()
		{
			$data =
			[
				"username" => $this->input->post('username', true),
				"password" => password_hash($this->input->post
				('password'), PASSWORD_DEFAULT),

				"name" => $this->input->post('name', true)
			];

			$this->db->insert('tb_users', $data);
		}

	}