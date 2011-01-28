<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>个人用户首页</title>
</head>

<body>
<table width="100%" border="1">
  <tr>
    <td><table width="100%" border="1">
        <tr>
          <td width="25%">项目地点</td>
          <td width="10%"><form method="get" action="hp.php">
              <input type="submit" name="city" value="所有"/>
            </form></td>
          <?
			session_start();
			if(!empty($_GET['city']))$_SESSION['city']=$_GET['city'];
			if(!empty($_GET['type']))$_SESSION['type']=$_GET['type'];
			if(!empty($_GET['organization']))$_SESSION['organization']=$_GET['organization'];
			if(empty($_SESSION['city']))$_SESSION['city']="所有";
			if(empty($_SESSION['type']))$_SESSION['type']="所有";
			if(empty($_SESSION['organization']))$_SESSION['organization']="所有";
			$city=$_SESSION['city'];
			$type=$_SESSION['type'];
			$organization=$_SESSION['organization'];
			$mysql_host		= "localhost";
			$mysql_user		= "root";
			$mysql_pass		= "admin";
			$mysql_dbname	= "5need";
			$mysql_tbname	= "data";
			$link = mysql_connect($mysql_host,$mysql_user,$mysql_pass) or ('连接数据库失败！'.mysql_error());
			if(!mysql_select_db($mysql_dbname,$link)) echo ('连接数据表失败！'.mysql_error());
			mysql_query("SET NAMES UTF8");
			$query="select city from $mysql_tbname where city<>''";
			$result=mysql_query($query);
			$message_count=mysql_num_rows($result);
			//echo $message_count."\n";
			for($i=1;$i<=$message_count && $i<=4;$i++)
			{
				$myrow=mysql_fetch_array($result);
				echo "<td width='20'><form method='get' action='hp.php'><input type='submit' name='city' value='".$myrow['city']."'/></td>";	
			}
			?>
          <td width="20"> 更多 </td>
        </tr>
        <tr>
          <td>项目时间</td>
        </tr>
        <tr>
          <td>项目类型</td>
          <td width="10%"><form method="get" action="hp.php">
              <input type="submit" name="type" value="所有" />
            </form></td>
          <?php
			$query="select type from $mysql_tbname where type<>''";
			$result=mysql_query($query);
			$message_count=mysql_num_rows($result);
			//echo $message_count."\n";
			for($i=1;$i<=$message_count && $i<=4;$i++)
			{
				$myrow=mysql_fetch_array($result);
				echo "<td width='20'><form method='get' action='hp.php'><input type='submit' name='type' value='".$myrow['type']."'/></td>";	
			}
			?>
          <td width="20"> 更多 </td>
        </tr>
        <tr>
          <td>举办机构</td>
          <td width="10%"><form method="get" action="hp.php">
              <input type="submit" name="organization" value="所有" />
            </form></td>
          <?php
			$query="select organization from $mysql_tbname where organization<>''";
			$result=mysql_query($query);
			$message_count=mysql_num_rows($result);
			//echo $message_count."\n";
			for($i=1;$i<=$message_count && $i<=4;$i++)
			{
				$myrow=mysql_fetch_array($result);
				echo "<td width='20'><form method='get' action='hp.php'><input type='submit' name='organization' value='".$myrow['organization']."'/></td>";	
			}
			?>
          <td width="20"> 更多 </td>
        </tr>
      </table></td>
  </tr>
  <tr>
    <td><form method="get" action="hp.php">
        <input type="submit" name="exercise" value="人气排序" />
        <input type="submit" name="exercise" value="时间排序" />
      </form></td>
  </tr>
  <?php
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
			if ($city!="所有") $condition.=" and city='$city'";
			if ($type!="所有") $condition.=" and type='$type'";
			if ($organization!="所有") $condition.=" and organization='$organization'";
			//echo $condition;
			$query="select * from exercise $condition order by $exercise desc limit $offset,$page_size";
			$result=mysql_query($query);
			while($myrow=mysql_fetch_array($result))
			{			
        	echo "<tr height='40'><td>".$myrow['type']." ".$myrow['name'].">></td></tr>";
        	echo "<tr height='30'><td>已有".$myrow['attention_number']."人关注，".$myrow['partake_number']."人报名</td></tr>";
			}
			?>
</table>
</body>
</html>