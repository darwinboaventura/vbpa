<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Cliente extends CI_Controller {
		public function __construct() {
			parent::__construct();

			$logged_ID = $this->session->userdata('logged_ID');

			if (!empty($logged_ID)) {
				$this->load->model('Cliente_Model');
			} else {
				redirect('admin/login');
			}
		}

		public function index() {
			$data['clientes'] = $this->Cliente_Model->get(NULL, NULL, NULL, 'name', 'ASC');

			$this->load->view('admin/cliente/show', $data);
		}

		public function novo() {
			$this->load->view('admin/cliente/new');
		}

		public function editar($ID) {
			$data['cliente'] = $this->Cliente_Model->get(NULL, NULL, $ID);

			$this->load->view('admin/cliente/edit', $data);
		}

		public function post() {
			$returned = $this->Cliente_Model->post($_POST);

			if ($returned == 'done') {
				redirect('admin/cliente');
			} elseif ($returned == 'error') {
				$this->session->set_flashdata('error', 'O cadastro não foi realizado, tente novamente.');

				redirect('admin/cliente/novo');
			} elseif ($returned = 'exist') {
				$this->session->set_flashdata('error', 'CNPJ ou e-mail já cadastrado.');

				redirect('admin/cliente/novo');
			}
		}

		public function put() {
			$returned = $this->Cliente_Model->put($_POST);

			if ($returned == 'done') {
				redirect('admin/cliente');
			} elseif ($returned == 'error') {
				$this->session->set_flashdata('error', 'A atualização não foi realizado, tente novamente.');

				redirect('admin/cliente/editar/' . $_POST['ID']);
			} elseif ($returned = 'exist') {
				$this->session->set_flashdata('error', 'CNPJ ou e-mail já cadastrado, tente com outro.');

				redirect('admin/cliente/editar/' . $_POST['ID']);
			}
		}

		public function excluir($ID) {
			if ($this->Cliente_Model->excluir($ID)) {
				redirect('admin/cliente');
			}
		}
	}
?>
