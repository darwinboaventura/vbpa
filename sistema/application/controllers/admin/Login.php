<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Login extends CI_Controller {
		public function index() {
			$this->load->view('admin/login');
		}

		public function signin() {
			$login = $this->input->post('login');
			$password = $this->input->post('password');

			if (!empty($login) AND !empty($password)) {
				$this->load->model('Administrador_Model');

				$admin = $this->Administrador_Model->get($login, $password);

				if ($admin) {
					$this->session->set_userdata('logged_ID', $admin[0]['ID']);
					$this->session->set_userdata('logged_name', $admin[0]['name']);
					$this->session->set_userdata('logged_thumbnail', $admin[0]['thumbnail']);

					redirect('admin');
				} else {
					$this->session->set_flashdata('error', 'Nenhum usuário encontrado com os dados informados. Tente novamente.');

					redirect('admin/login');
				}
			} else {
				$this->session->set_flashdata('error', 'Preencha os campos e tente novamente');

				redirect('admin/login');
			}
		}

		public function logout() {
			$this->session->unset_userdata('logged_ID');
			$this->session->unset_userdata('logged_name');

			redirect('admin/login');
		}
	}
?>
