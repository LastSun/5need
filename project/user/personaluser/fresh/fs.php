<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>新鲜事</title>
</head>

<body>
<table width="100%" border="1">
  <tr>
    <td width="20%">全部</td>
    <td width="20%">项目信息</td>
    <td width="20%">好友信息</td>
    <td width="40%">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4">
	<?
    		$mysql_host		= "localhost";
			$mysql_user		= "root";
			$mysql_pass		= "admin";
			$mysql_dbname	= "5need";
			$mysql_tbname	= "data";
			$link = mysql_connect($mysql_host,$mysql_user,$mysql_pass) or ('连接数据库失败！'.mysql_error());
			if(!mysql_select_db($mysql_dbname,$link)) echo ('连接数据表失败！'.mysql_error());
			mysql_query("SET NAMES UTF8");
			$page=1;
			$page_size=2;
			$exercise="partake_number";
			if($page==""){$page=1;}
			if(@$_GET['exercise']=="人气排序")$exercise="partake_number";
			if(@$_GET['exercise']=="时间排序")$exercise="start_number";
			$query="select id from exercise";
			$result=mysql_query($query);
			$message_count=mysql_num_rows($result);
			//echo $message_count."\n";
			$page_count=ceil($message_count/$page_size);
			//echo $page_count."\n";
			$offset=($page-1)*$page_size;
			//echo $offset."\n";
			$condition="where id";
			//addtime between '$starttime' and '$endtime'";
			$query="select * from exercise $condition order by $exercise desc limit $offset,$page_size";
			$result=mysql_query($query);
			while($myrow=mysql_fetch_array($result))
			{			
        	echo "<tr height='40'><td>".$myrow['type']." ".$myrow['name'].">></td></tr>";
        	echo "<tr height='30'><td>已有".$myrow['attention_number']."人关注，".$myrow['partake_number']."人报名</td></tr>";
			}

	?></td>
  </tr>
</table>
</body>
</html>