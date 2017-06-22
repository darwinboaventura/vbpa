<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Societario extends CI_Controller {
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
			$data['categorias'] = $this->Categoria_Model->get(NULL, 'societario');
					
			$this->load->view('site/societario', $data);
		}
	}
?>
