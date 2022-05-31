<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class StudentModel extends CI_Model
	{
		public function get_student()
		{
			$query = $this->db->get('tbl_student');
			return $query->result();
		}
		public function insertStudent($data)
		{
			return $this->db->insert('tbl_student', $data);
		}
		public function editStudent($id)
		{
			$this->db->where('id', $id);
			$query = $this->db->get('tbl_student');
			return $query->row();
		}
		public function update_Student($id, $data)
		{
			$this->db->where('id', $id);
			return $this->db->update('tbl_student', $data);
		}
		public function delete_Student($id)
		{
			return $this->db->delete('tbl_student', ['id' => $id]);
		}
	}
?>