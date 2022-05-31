<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	require APPPATH . 'libraries/RestController.php';

	use chriskacerguis\RestServer\RestController;

	class ApiStudentController extends RestController
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('StudentModel');
		}

		public function index_get()
		{
			$student = new StudentModel;
			$result_emp = $student->get_student();
			$this->response($result_emp, 200);
		}

		public function storeStudent_post()
		{
			$student = new StudentModel;
			$data = [
				'name'	=>	$this->input->post('name'),
				'classID'	=>	$this->input->post('classID'),
				'age'	=>	$this->input->post('age'),
				'gender'	=>	$this->input->post('gender'),
				'address'	=>	$this->input->post('address'),
				'phone'	=>	$this->input->post('phone'),
				'email'	=>	$this->input->post('email'),
			];
			$result = $student->insertStudent($data);
			if ($result > 0) {
				$this->response([
					'status'	=>	true,
					'message'	=>	'ĐÃ THÊM SINH VIÊN MỚI',
				],RestController::HTTP_OK);
			}else{
				$this->response([
					'status'	=>	false,
					'message'	=>	'CHƯA THÊM ĐƯỢC SINH VIÊN MỚI',
				],RestController::HTTP_BAD_REQUEST);
			}
		}

		public function findStudent_get($id)
		{
			$student = new StudentModel;
			$result  = $student->editStudent($id);
			$this->response($result, 200);

		}

		public function updateStudent_put($id)
		{
			$student = new StudentModel;
			$data = [
				'name'		=>	$this->put('name'),
				'classID'	=>	$this->put('classID'),
				'age'		=>	$this->put('age'),
				'gender'	=>	$this->put('gender'),
				'address'	=>	$this->put('address'),
				'phone'		=>	$this->put('phone'),
				'email'		=>	$this->put('email'),
			];
			$update_result = $student->update_Student($id, $data);
			if ($update_result > 0) {
				$this->response([
					'status'	=>	true,
					'message'	=>	'ĐÃ CẬP NHẬT SINH VIÊN',
				],RestController::HTTP_OK);
			}else{
				$this->response([
					'status'	=>	false,
					'message'	=>	'CHƯA CẬP NHẬT ĐƯỢC SINH VIÊN',
				],RestController::HTTP_BAD_REQUEST);
			}
		}

		public function deleteStudent_delete($id)
		{
			$student = new StudentModel;
			$result = $student->delete_Student($id);
			if ($result > 0) {
				$this->response([
					'status'	=>	true,
					'message'	=>	'ĐÃ XÓA SINH VIÊN',
				],RestController::HTTP_OK);
			}else{
				$this->response([
					'status'	=>	false,
					'message'	=>	'CHƯA XÓA ĐƯỢC SINH VIÊN',
				],RestController::HTTP_BAD_REQUEST);
			}
		}
	}
?>