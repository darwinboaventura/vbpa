<?php 
	class Arquivo_Model extends CI_Model {
		public function get($ID = NULL, $limit = NULL, $client = NULL, $category = NULL, $section = NULL, $year = NULL, $month = NULL) {
			if (!empty($ID)) {
				$this->db->where('ID', $ID);
			}
			
			if (!empty($limit)) {
				$this->db->limit($limit);
			}
			
			if (!empty($client)) {
				$this->db->where('client', $client);
			}
			
			if (!empty($category)) {
				$this->db->where('category', $category);
			}
			
			if (!empty($section)) {
				$this->db->where('section', $section);
			}
			
			if (!empty($year)) {
				$this->db->where('YEAR(date)', $year);
			}
			
			if (!empty($month)) {
				$this->db->where('MONTH(date)', $month);
			}
			
			$this->db->order_by('ID', 'DESC');
			
			$data = $this->db->get('arquivo');
			
			return $data->result_array();
		}
		
		public function getDYear() {
			$this->db->order_by('YEAR(date)', 'DESC');
			$this->db->distinct();
			$this->db->select('YEAR(date)');
			$data = $this->db->get('arquivo');
			
			return $data->result_array();
		}
		
		public function post($data = array()) {			
			$this->db->insert('arquivo', $data);
			
			return $this->db->affected_rows();
		}
		
		public function put($data = array()) {
			$this->db->where('ID', $data['ID']);
			$this->db->update('arquivo', $data);
		
			if ($this->db->error()) {
				return TRUE;
			} else {
				return FALSE;
			}
		}
		
		public function excluir($ID) {
			$this->db->where('ID', $ID);
			$this->db->delete('arquivo');

			return $this->db->affected_rows();
		}
	}
?>