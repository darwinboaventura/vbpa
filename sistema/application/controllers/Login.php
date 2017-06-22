<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Login extends CI_Controller {
		public function index() {
			$this->load->view('site/login');
		}
		
		public function signin() {
			$cnpj = $this->input->post('cnpj');
			$password = $this->input->post('password');
			
			if (!empty($cnpj) AND !empty($password)) {
				$this->load->model('Cliente_Model');
				
				$admin = $this->Cliente_Model->get($cnpj, $password);
				
				if ($admin) {
					$this->session->set_userdata('logged_site_ID', $admin[0]['ID']);
					$this->session->set_userdata('logged_site_name', $admin[0]['name']);
					
					redirect('welcome');
				} else {
					$this->session->set_flashdata('error', 'Nenhum usuário encontrado com os dados informados. Tente novamente.');
					
					redirect('login');
				}
			} else {
				$this->session->set_flashdata('error', 'Preencha os campos e tente novamente');
					
				redirect('login');
			}
		}

		public function esqueceu() {
			$this->load->view('site/esqueceu');
		}

		public function password() {
			$cnpj = $this->input->post('cnpj');

			if (!empty($cnpj)) {
				$this->load->model('Cliente_Model');

				$user = $this->Cliente_Model->get($cnpj);

				if ($user) {
					// send email with the password
					$this->email->from('contato@vbpa.com.br', 'VBPA');
					$this->email->to($user[0]['email']); 

					$this->email->subject('Esqueceu sua senha - VBPA');
					$this->email->message("Olá " . $user[0]['name'] . ", a sua senha de acesso ao sistema é <strong>" . $user[0]['password'] . "</strong>");	

					if ($this->email->send()) {
						$this->session->set_flashdata('success', 'A senha foi enviada para seu e-mail.');
					
						redirect('login');
					}
				} else {
					$this->session->set_flashdata('error', 'Nenhum usuário encontrado com os dados informados. Tente novamente.');
					
					redirect('login/esqueceu');
				}
			} else {
				$this->session->set_flashdata('error', 'Preencha os campos e tente novamente');
					
				redirect('login/esqueceu');
			}
		}
		
		public function logout() {
			$this->session->unset_userdata('logged_site_ID');
			$this->session->unset_userdata('logged_site_name');
			
			redirect('http://www.clientesgrupoa2.com.br/vbpa/');
		}
	}
?>