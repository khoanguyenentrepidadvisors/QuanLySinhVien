<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/style.css">
<title>Quản lý sinh viên</title>
</head>

<body>
	<div class="container">
		<?php $this->load->view('student/include/sidebar'); ?>

		<div class="main" id="main">

			<div class="topbar">
				<div class="toogle" id="toogle">
					<ion-icon name="menu-outline"></ion-icon>
				</div>
			</div>

			<div class="detaillist">
				<div class="recentStudent">
					
					<?php
						if (isset($path)) {
							foreach ($path as $path_view) {
								$this->load->view($path_view);
							}
						}
					?>
				</div>
				
			</div>
		</div>
	</div>
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
	<script type="text/javascript">
		let toogle		= 	document.querySelector('#toogle');
		let navigation	=	document.querySelector('#navigation');
		let main		=	document.querySelector('#main');

		document.getElementById('toogle').onclick = function() {
    		navigation.classList.toggle('active');
    		main.classList.toggle('active');
		}

		let list = document.querySelectorAll('#navigation li');
		function activeLink(){
			list.forEach((item) => 
			item.classList.remove('hovered'));
			this.classList.add('hovered');
		}
		list.forEach((item) => 
			item.addEventListener('mouseover',activeLink));
	</script>
</body>
</html>