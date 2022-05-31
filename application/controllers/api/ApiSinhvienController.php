<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	require APPPATH . 'libraries/RestController.php';

	use chriskacerguis\RestServer\RestController;

	class ApiSinhvienController extends RestController
	{
		public function index_get(){
			echo "restful được rồi";
		}
	}
?>