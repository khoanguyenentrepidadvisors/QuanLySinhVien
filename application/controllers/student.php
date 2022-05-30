<?php
	
	class Student extends CI_Controller
	{
		var $template = 'student';
		var $title 	  =	'Quản lý sinh viên';
		
		public function __construct()
		{
			parent::__construct();
			$this->load->model('student/m_student_table');
			$this->load->helper('url');

		}

		public function index()
		{
			echo "welcome to iuh";
		}

		public function liststudent()
		{
			$listofstudent = $this->m_student_table->getStudent();
			$data['listofstudent'] = $listofstudent;
			$data['path'] = array('student/dashboard/v_index');
			$this->load->view('student/v_studentmasterlayout',$data);
		}

		public function addstudent()
		{
			$data['path'] = array('student/dashboard/v_add');
			$this->load->view('student/v_studentmasterlayout',$data);	
		}
		public function editstudent()
		{
			$this->load->model('student/m_student_table','tblST');
			$resulte = $this->tblST->eStudent();
			$data['viewe'] = $resulte;
			$this->load->view('student/v_estudent',$data);
		}
		public function deletestudent()
		{
			$this->load->model('student/m_student_table');
			$resultde = $this->m_student_table->deStudent();
			$data['viewde'] = $resultde;
			$this->load->view('student/v_destudent',$data);
		}

	}

?>