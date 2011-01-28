<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>设置关注</title>
</head>

<body>
<?
			$mysql_host		= "localhost";
			$mysql_user		= "root";
			$mysql_pass		= "admin";
			$mysql_dbname	= "5need";
			$mysql_tbname	= "data";
			$link = mysql_connect($mysql_host,$mysql_user,$mysql_pass) or ('连接数据库失败！'.mysql_error());
			if(!mysql_select_db($mysql_dbname,$link)) echo ('连接数据表失败！'.mysql_error());
			mysql_query("SET NAMES UTF8");
?>
<form method="get" action="fs.php">
<table border="1">
    <tr>
      <td> 举办机构 </td>
      <td><?
            				$query="select organization from $mysql_tbname where organization<>''";
			$result=mysql_query($query);
			$message_count=mysql_num_rows($result);
			//echo $message_count."\n";
			for($i=1;$i<=$message_count && $i<=4;$i++)
			{
				$myrow=mysql_fetch_array($result);
				echo "<input type='checkbox' name='organization' value ='".$myrow['organization']."'>".$myrow['organization'];
			}

			?></td>
    </tr>
    <tr>
      <td> 活动城市 </td>
      <td><?
            			$query="select city from $mysql_tbname where city<>''";
			$result=mysql_query($query);
			$message_count=mysql_num_rows($result);
			//echo $message_count."\n";
			for($i=1;$i<=$message_count && $i<=4;$i++)
			{
				$myrow=mysql_fetch_array($result);
				echo "<input type='checkbox' name='city' value ='".$myrow['city']."'>".$myrow['city'];
			}

			?></td>
    </tr>
    <tr>
      <td> 活动类型 </td>
      <td><?
            			$query="select type from $mysql_tbname where type<>''";
			$result=mysql_query($query);
			$message_count=mysql_num_rows($result);
			//echo $message_count."\n";
			for($i=1;$i<=$message_count && $i<=4;$i++)
			{
				$myrow=mysql_fetch_array($result);
				echo "<input type='checkbox' name='type' value ='".$myrow['type']."'>".$myrow['type'];
			}

			?></td>
    </tr>
    <tr>
      <td><input type="submit" value="确定"/></td>
      <td><input type="reset" value="重置"/></td>
    </tr>
</table>
</form>
</body>
</html>