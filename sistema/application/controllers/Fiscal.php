<?php 
	class Fiscal extends CI_Controller {
		public function __construct() {
			parent::__construct();
			
			$logged_site_ID = $this->session->userdata('logged_site_ID'); 

			if (!empty($logged_site_ID)) {
				$this->load->model('Categoria_Model');
				$this->load->model('Arquivo_Model');
			} else {
				redirect('login');
			}	
		}
		
		public function index() {
			$data['anos'] = $this->Arquivo_Model->getDYear();
			
			$this->load->view('site/fiscal', $data);
		}
		
		public function filter() {
			$data['page'] = 'filter';
			$data['anos'] = $this->Arquivo_Model->getDYear();
			$data['month'] = $this->input->post('month');
			$data['year'] = $this->input->post('year');			
			$data['categorias'] = $this->Categoria_Model->get(NULL, 'fiscal');
			
			$this->load->view('site/fiscal', $data);
		}
	}
?>