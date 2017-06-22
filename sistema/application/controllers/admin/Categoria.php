<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Categoria extends CI_Controller {
		public function __construct() {
			parent::__construct();
			
			$logged_ID = $this->session->userdata('logged_ID'); 

			if (!empty($logged_ID)) {
				$this->load->model('Categoria_Model');
			} else {
				redirect('admin/login');
			}	
		}
		
		public function index() {
			$data['categorias'] = $this->Categoria_Model->get();
			
			$this->load->view('admin/categoria/show', $data);
		}
		
		public function novo() {
			$this->load->view('admin/categoria/new');
		}
		
		public function editar($ID) {
			$data['categoria'] = $this->Categoria_Model->get($ID);
			
			$this->load->view('admin/categoria/edit', $data);
		}
		
		public function post() {
			if ($this->Categoria_Model->post($_POST)) {
				redirect('admin/categoria');
			} else {
				$this->session->set_flashdata('error', 'O cadastro não foi realizado, tente novamente.');
				
				redirect('admin/categoria/novo');
			}
		}
		
		public function put() {			
			if ($this->Categoria_Model->put($_POST)) {
				redirect('admin/categoria');
			} else {
				$this->session->set_flashdata('error', 'A atualização não foi realizado, tente novamente.');
				
				redirect('admin/categoria/editar/' . $_POST['ID']);
			}
		}
		
		public function excluir($ID) {
			if ($this->Categoria_Model->excluir($ID)) {
				redirect('admin/categoria');
			}
		}
		
		public function section() {
			$selected = $_POST['selected'];
			
			$data['categorias'] = $this->Categoria_Model->get(NULL, $selected);
			
			echo '<label>Categoria</label>';
			echo '<select name="category" class="form-control" required>';
			echo '<option value="">Selecione</option>';
			
			if (!empty($data['categorias'])) : foreach ($data['categorias'] as $categoria) :
				echo '<option value="' . $categoria['ID'] . '">' . $categoria['name'] . '</option>';
			endforeach; endif;
			
			echo '</select>';
		}
	}
?>