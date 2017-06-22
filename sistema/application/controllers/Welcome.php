<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Welcome extends CI_Controller {
		public function __construct() {
				parent::__construct();
				
				$logged_site_ID = $this->session->userdata('logged_site_ID'); 

				if (!empty($logged_site_ID)) {
					$this->load->model('Arquivo_Model');
					$this->load->model('Categoria_Model');
				} else {
					redirect('login');
				}	
		}
		
		public function index() {
			$data['arquivos'] = $this->Arquivo_Model->get(NULL, 5, $this->session->userdata('logged_site_ID'));
			
			$this->load->view('site/welcome', $data);
		}
	}
?>
