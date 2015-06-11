<?php
	if(empty($this->session->userdata['user_info']))
	{
		redirect('/');
	}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>HomePage</title>
</head>
<body>
	<h1>Welcome <?=$this->session->userdata['user_info']['first_name']?></h1>
</body>
</html>