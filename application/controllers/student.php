<?php
	
	class Student extends CI_Controller
	{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->model('student/m_student_table','tblST');

		}

		public function index()
		{
			echo "Welcome to IUH";
		}

		public function liststudent()
		{
			$listofstudent = $this->tblST->getStudent();
			var_dump($listofstudent);
		}

		public function addstudent()
		{
			$this->load->model('student/m_student_table','tblST');
			$resultadd = $this->tblST->addStudent();
			$data['viewadd'] = $resultadd;
			$this->load->view('student/v_addstudent',$data);

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