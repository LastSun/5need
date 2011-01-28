<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>个人主页</title>
</head>

<body>
<table width="100%" border="1">
  <tr>
    <td colspan="2">留言板</td>
  </tr>
  <tr>
    <td colspan="2">个人信息</td>
  </tr>

	<?php
    		$mysql_host		= "localhost";
			$mysql_user		= "root";
			$mysql_pass		= "";
			$mysql_dbname	= "5need";
			$mysql_tbname	= "personaluser";
			$link = mysql_connect($mysql_host,$mysql_user,$mysql_pass) or ('连接数据库失败！'.mysql_error());
			if(!mysql_select_db($mysql_dbname,$link)) echo ('连接数据表失败！'.mysql_error());
			mysql_query("SET NAMES UTF8");
			$query="SELECT * FROM personaluser"; 
			$result=mysql_query($query);
			$myrow=mysql_fetch_array($result);
			for($i=0;$i<mysql_num_fields($result);$i++)   
    		{   
		         $name=mysql_field_name($result,$i);
				 echo "<tr><td width='30'>".$name."</td>";
		         echo "<td>".$myrow["$name"]."</td></tr>";
    		}   


	?>
    
  <tr>
    <td colspan="2">个人动态</td>
  </tr>
  <tr>
    <td colspan="2">活动经历</td>
  </tr>
</table>

</body>
</html>