<?php
	class Administrador_Model extends CI_Model {
		public function get($login = NULL, $password = NULL, $ID = NULL) {
			if (!empty($login)) {
				$this->db->where('login', $login);
			}

			if (!empty($password)) {
				$this->db->where('password', $password);
			}

			if (!empty($ID)) {
				$this->db->where('ID', $ID);
			}

			$data = $this->db->get('administrador');

			return $data->result_array();
		}

		public function post($data = array()) {
			$this->db->where('email', $data['email']);
			$this->db->or_where('login', $data['login']);
			$exists = $this->db->get('administrador');

			if ($exists->num_rows() == 0) {
				$this->db->insert('administrador', $data);

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
			->or_where('login', $data['login'])
			->group_end();

			$exists = $this->db->get('administrador');

			if ($exists->num_rows() == 0) {
				$this->db->where('ID', $data['ID']);
				$this->db->update('administrador', $data);

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
			$this->db->delete('administrador');

			return $this->db->affected_rows();
		}
	}
?>
