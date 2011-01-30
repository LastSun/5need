<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>5need</title>
</head>

<body>

<?php

	session_start();
	
	if (isset($_SESSION['userid'])) unset($_SESSION['userid']);
	
?>

	<form action="userregiste.php" method="post">
		<p>
			<label for="new_username">用户名:</label>
			<input type="text" name="new_username" id="new_username" />
			<span class="error">
				<?php
					if (isset($_POST['new_username'])) 
					{
						if (!$_POST['new_username']) echo "必须输入用户名";
					}
				?>
			</span>
		</p>
		<p>
			<label for="new_password">密码:</label>
			<input type="password" name="new_password" id="new_username" />
			<span>
				<?php 
					if(isset($_POST['new_password']))
					{
						if(!$_POST['new_password']) echo "密码不能为空";
						else if (strlen($_POST['new_password']) < 6) echo "密码不得少于6位";
					}	
				?>
			</span>
		</p>
		<p><input type="submit" value="确定" /></p>
	</form>

</body>
</html>