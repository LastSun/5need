<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" href="ph.css" rel="stylesheet" />
<title>个人主页</title>
</head>

<body>

	<div id="personal">
    	<p>个人信息</p>
    	<table>
			<?php
					include '../../../../config.php';
			
		    		$mysql_tbname	= "personaluser";
					if(!mysql_select_db($mysql_dbname,$link)) echo ('连接数据表失败！'.mysql_error());
					$query="SELECT * FROM personaluser"; 
					$result=mysql_query($query);
					$myrow=mysql_fetch_array($result);
					for($i=0;$i<mysql_num_fields($result);$i++)   
		    		{   
				         $name=mysql_field_name($result,$i);
						 echo "<tr><td width='30' class='info_name'>".$name."</td>";
				         echo "<td class='info_info'>".$myrow["$name"]."</td></tr>";
		    		}   
			?>
		</table>
	</div>
    
 	<div id="personalaction">
    	<p>个人动态</p>
	</div>
  
	<div id="actionmessage">
    	<p>活动经历</p>
  	</div>
    
	<div id="messages">
    	<p>留言板</p>
 	</div>
</body>
</html>