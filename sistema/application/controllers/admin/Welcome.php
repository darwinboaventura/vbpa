<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Welcome extends CI_Controller {		
		public function index() {
			// verifica se o usuário está logado						
			$logged_ID = $this->session->userdata('logged_ID'); 

			if (!empty($logged_ID)) {
				// carrega a view
				$this->load->view('admin/welcome');
			} else {
				redirect('admin/login');
			}
		}
	}
?>