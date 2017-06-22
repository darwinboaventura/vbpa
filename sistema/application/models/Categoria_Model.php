<?php 
	class Categoria_Model extends CI_Model {
		public function get($ID = NULL, $section = NULL) {
			if (!empty($ID)) {
				$this->db->where('ID', $ID);
			}
			
			if (!empty($section)) {
				$this->db->where('section', $section);
			}
			
			$this->db->order_by('ID', 'DESC');
			
			$data = $this->db->get('categoria');
			
			return $data->result_array();
		}
		
		public function post($data = array()) {			
			$this->db->insert('categoria', $data);
			
			return $this->db->affected_rows();
		}
		
		public function put($data = array()) {
			$this->db->where('ID', $data['ID']);
			$this->db->update('categoria', $data);
		
			if ($this->db->error()) {
				return TRUE;
			} else {
				return FALSE;
			}
		}
		
		public function excluir($ID) {
			$this->db->where('ID', $ID);
			$this->db->delete('categoria');

			return $this->db->affected_rows();
		}
	}
?>