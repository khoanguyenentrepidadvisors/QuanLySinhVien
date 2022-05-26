<?php

	class m_student_table extends CI_Model
	{
		
		public function getStudent()
		{
			$query = $this->db->query("SELECT * FROM tbl_student");
			if ($query->num_rows() >0 )
				return $query->result_array();
			return false;
		}
		public function addStudent()
		{
			$query = $this->db->query('select * from tbl_student where id=?',array($id));
			if ($query->num_rows() >0 )
				return $query->row_array();
			return false;
		}
		public function eStudent()
		{
			return 'Đã cập nhật sinh viên';
		}
		public function deStudent()
		{
			return 'Đã xóa sinh viên';
		}
	}

?>