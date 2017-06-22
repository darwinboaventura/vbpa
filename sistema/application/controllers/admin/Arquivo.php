<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Arquivo extends CI_Controller {
		public function __construct() {
			parent::__construct();

			$logged_ID = $this->session->userdata('logged_ID');

			if (!empty($logged_ID)) {
				$this->load->model('Arquivo_Model');
			} else {
				redirect('admin/login');
			}
		}

		public function index() {
			$this->load->model('Cliente_Model');
			$this->load->model('Categoria_Model');
			$data['arquivos'] = $this->Arquivo_Model->get();

			$this->load->view('admin/arquivo/show', $data);
		}

		public function novo() {
			$this->load->model('Cliente_Model');
			$this->load->model('Categoria_Model');

			$data['clientes'] = $this->Cliente_Model->get(NULL, NULL, NULL, 'name', 'ASC');

			$this->load->view('admin/arquivo/new', $data);
		}

		public function editar($ID) {
			$this->load->model('Cliente_Model');
			$this->load->model('Categoria_Model');

			$data['clientes'] = $this->Cliente_Model->get(NULL, NULL, NULL, 'name', 'ASC');
			$data['arquivo'] = $this->Arquivo_Model->get($ID);
			$data['categorias'] = $this->Categoria_Model->get(NULL, $data['arquivo'][0]['section']);

			$this->load->view('admin/arquivo/edit', $data);
		}

		public function post() {
			if (!$this->upload->do_upload()) {
				$file = $this->upload->display_errors();

				$this->session->set_flashdata('error', $file);

				redirect('admin/arquivo/novo');
			} else {
				$file = $this->upload->data();
				
				$_POST['file'] = $file['file_name'];

				// data
				$data = $_POST['date'];				
				$data = explode('/', $data);
				$_POST['date'] = $data[2] . "-" . $data[1] . "-" . $data[0];

				if ($this->Arquivo_Model->post($_POST)) {
					redirect('admin/arquivo');
				} else {
					$this->session->set_flashdata('error', 'O cadastro não foi realizado, tente novamente.');

					redirect('admin/arquivo/novo');
				}
			}
		}

		public function put() {
			if (!empty($_FILES['userfile']['tmp_name'])) {
				if (!$this->upload->do_upload()) {
					$this->session->set_flashdata('error', $this->upload->display_errors());

					redirect('admin/arquivo/editar/' . $_POST['ID']);
				} else {
					$file = $this->upload->data();
					$_POST['file'] = $file['file_name'];
				}
			} else {
				unset($_POST['userfile']);
			}

			// data
			$data = $_POST['date'];				
			$data = explode('/', $data);
			$_POST['date'] = $data[2] . "-" . $data[1] . "-" . $data[0];

			if ($this->Arquivo_Model->put($_POST)) {
				redirect('admin/arquivo');
			} else {
				$this->session->set_flashdata('error', 'A atualização não foi realizado, tente novamente.');

				redirect('admin/arquivo/editar/' . $_POST['ID']);
			}
		}

		public function excluir($ID) {
			if ($this->Arquivo_Model->excluir($ID)) {
				redirect('admin/arquivo');
			}
		}
	}
?>
