					<table>
						<thead>
							<tr>
								<td>Họ tên</td>
								<td>Tuổi</td>
								<td>Giới tính</td>
								<td>Lớp</td>
								<td>Quản lý</td>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($listofstudent as $val) { ?>
							<tr>
								<td><?php echo $val["name"]; ?></td>
								<td><?php echo $val["age"]; ?></td>
								<td><?php echo $val["gender"]; ?></td>
								<td><span class="status delivered"><?php echo $val["classID"]; ?></span></td>
								<td>
									<a class="admin" href="#">
										<span class="adminicon"><ion-icon name="add-outline"></ion-icon></span>
									</a>
								</td>
								<td>
									<a class="admin" href="#">
										<span class="adminicon"><ion-icon name="caret-forward-outline"></ion-icon></span>
									</a>
								</td>
								<td>
									<a class="admin" href="#">
										<span class="adminicon"><ion-icon name="trash-outline"></ion-icon></span>
									</a>
								</td>
							</tr>
							<?php } ?>
						</tbody>
					</table>