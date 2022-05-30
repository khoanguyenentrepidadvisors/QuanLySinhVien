<?php

	class m_student_table extends CI_Model
	{
		
		public function getStudent()
		{
			$query = $this->db->query('SELECT * FROM tbl_student');
			if ($query->num_rows()>0)
				return $query->result_array();
			return false;	
		}
		public function addStudent()
		{
			$stringsql = "INSERT INTO `tbl_student`(`id`, `name`, `classID`, `age`, `gender`, `address`, `phone`, `email`, `password`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9])";
			

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