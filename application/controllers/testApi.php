<?php
//define('BASEPATH') OR exit('No direct script access allowed');
	class testApi extends CI_Controller
	{
		
		function index()
		{
			$this->load->view('Api_view');
		}

		function action()
		{
			if ($this->input->post('data_action')) {
				$data_action = $this->input->post('data_action');

				if ($data_action == "fetch_all") {
					$api_url = "http://localhost:89/project/Codeigniter/QuanLySinhVien/index.php/Api";

					$client = curl_init($api_url);
					curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

					$response = curl_exec($client);

					curl_close($client);

					$result = json_decode($response);

					$output = '';

					if (count($result) > 0){ 
						foreach ($result as $row) {
							$output .= '
								<tr>
									<td>'.$row->name.'</td>
									<td>'.$row->classID.'</td>
									<td><button type="button" name="edit" class="btn btn-warning btn-xs edit" id="'.$row->id.'">edit</button></td>
									<td><button type="button" name="delete" class="btn btn-warning btn-xs delete" id="'.$row->id.'">delete</button>
									</td>
								</tr>

							';
						}
					}
					else{
						$output .= '
								<tr>
									<td colspan="4" align="center">No data found</td>
								</tr>

							';
					}

					echo $output;
				}
			}
		}
	}
?>