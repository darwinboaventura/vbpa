<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Administrador extends CI_Controller {
        public function __construct() {
			parent::__construct();

			$logged_ID = $this->session->userdata('logged_ID');

			if (!empty($logged_ID)) {
				$this->load->model('Administrador_Model');
			} else {
				redirect('admin/login');
			}
		}

        public function index() {
			$data['administradores'] = $this->Administrador_Model->get();

			$this->load->view('admin/administrador/show', $data);
		}

        public function novo() {
			$this->load->view('admin/administrador/new');
		}

        public function editar($ID) {
			$data['administrador'] = $this->Administrador_Model->get(NULL, NULL, $ID);

			$this->load->view('admin/administrador/edit', $data);
		}

        public function post() {
            if (!$this->upload->do_upload()) {
				$file = $this->upload->display_errors();

				$this->session->set_flashdata('error', $file);

				redirect('admin/administrador/novo');
			} else {
				$file = $this->upload->data();

				$_POST['thumbnail'] = $file['file_name'];

                $returned = $this->Administrador_Model->post($_POST);

    			if ($returned == 'done') {
    				redirect('admin/administrador');
    			} elseif ($returned == 'error') {
    				$this->session->set_flashdata('error', 'O cadastro não foi realizado, tente novamente.');

    				redirect('admin/administrador/novo');
    			} elseif ($returned = 'exist') {
    				$this->session->set_flashdata('error', 'Login ou e-mail já cadastrado.');

    				redirect('admin/administrador/novo');
    			}
			}
		}

        public function put() {
			if (!empty($_FILES['userfile']['tmp_name'])) {
				if (!$this->upload->do_upload()) {
					$this->session->set_flashdata('error', $this->upload->display_errors());

					redirect('admin/administrador/editar/' . $_POST['ID']);
				} else {
					$file = $this->upload->data();
					$_POST['thumbnail'] = $file['file_name'];
				}
			} else {
				unset($_POST['userfile']);
			}

            $returned = $this->Administrador_Model->put($_POST);

			if ($returned == 'done') {
				redirect('admin/administrador');
			} elseif ($returned == 'error') {
				$this->session->set_flashdata('error', 'A atualização não foi realizado, tente novamente.');

				redirect('admin/administrador/editar/' . $_POST['ID']);
			} elseif ($returned = 'exist') {
				$this->session->set_flashdata('error', 'Login ou e-mail já cadastrado, tente com outro.');

				redirect('admin/administrador/editar/' . $_POST['ID']);
			}
		}

        public function excluir($ID) {
			if ($this->Administrador_Model->excluir($ID)) {
				redirect('admin/administrador');
			}
		}
    }
?>
