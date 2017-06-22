<?php
	class Cliente_Model extends CI_Model {
		public function get($cnpj = NULL, $password = NULL, $ID = NULL, $order_by = NULL, $order = NULL) {
			if (!empty($cnpj)) {
				$this->db->where('cnpj', $cnpj);
			}

			if (!empty($password)) {
				$this->db->where('password', $password);
			}

			if (!empty($ID)) {
				$this->db->where('ID', $ID);
			}

			if (!empty($order_by) AND !empty($order)) {
				$this->db->order_by($order_by, $order);
			} else {
				$this->db->order_by('ID', 'DESC');
			}

			$data = $this->db->get('client');

			return $data->result_array();
		}

		public function post($data = array()) {
			$this->db->where('email', $data['email']);
			$this->db->or_where('cnpj', $data['cnpj']);
			$exists = $this->db->get('client');

			if ($exists->num_rows() == 0) {
				$this->db->insert('client', $data);

				if ($this->db->affected_rows()) {
					return "done";
				} else {
					return "error";
				}
			} else {
				return "exist";
			}
		}

		public function put($data = array()) {
			$this->db
			->where('ID !=', $data['ID'])
			->group_start()
			->or_where('email', $data['email'])
			->or_where('cnpj', $data['cnpj'])
			->group_end();

			$exists = $this->db->get('client');

			if ($exists->num_rows() == 0) {
				$this->db->where('ID', $data['ID']);
				$this->db->update('client', $data);

				if ($this->db->error()) {
					return "done";
				} else {
					return "error";
				}
			} else {
				return "exist";
			}
		}

		public function excluir($ID) {
			$this->db->where('ID', $ID);
			$this->db->delete('client');

			return $this->db->affected_rows();
		}
	}
?>
