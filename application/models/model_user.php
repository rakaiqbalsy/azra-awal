<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_user extends CI_Model {

	public function getById($id)
    {
        return $this->db->get_where('tbl_user', ['id_user' => $id])->row();
    }

	public function userList() {
		// Query pada tabel user

		$result = $this->db->get_where('tbl_user', ['role_id' => 1]);

		if($result->num_rows() > 0) {
			return $result->result();
		}

		else{
			return array();
		}
	}

	// List Petugas
	public function petugasList() {
		// Query pada tabel user

		$result = $this->db->get_where('tbl_user', ['role_id' => 2]);

		if($result->num_rows() > 0) {
			return $result->result();
		}

		else{
			return array();
		}
	}

	public function find($id) {
		// Cari Record
		$result = $this	->db->where('id_user', $id)
							->limit(1)
							->get('tbl_user');

		if ($result->num_rows() > 0) {
			return $result->row();
		} else {
			return array();
		}
	}

	public function update($id) {
		$this->db->where('id_user', $id)
				 ->update('tbl_user', $data_users);
	}

	public function delete($id) {
		$this->db->where('id_user', $id)
				 ->delete('tbl_user');
	}
}

?>