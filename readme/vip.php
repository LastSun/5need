          	<?php
			$place="所有";
			if(@$_GET['place']!="")$place=@$_GET['place'];
			echo "<<".$place.">>";
			$mysql_host		= "localhost";
			$mysql_user		= "root";
			$mysql_pass		= "admin";
			$mysql_dbname	= "5need";
			$link = mysql_connect($mysql_host,$mysql_user,$mysql_pass) or ('连接数据库失败！'.mysql_error());
			if(!mysql_select_db($mysql_dbname,$link)) echo ('连接数据表失败！'.mysql_error());
			mysql_query("SET NAMES GB2312");
			$page=1;
			$page_size=2;
			$query="select * from exercise where id";
			$result=mysql_query($query);
			$field_count=mysql_num_fields($result);
			//echo $field_count."\n";
			$message_count=mysql_num_rows($result);
			//echo $message_count."\n";
			$page_count=ceil($message_count/$page_size);
			//echo $page_count."\n";
			$offset=($page-1)*$page_size;
			//echo $offset."\n";
			$query="select * from exercise where id order by id desc limit $offset,$page_size";
			$result=mysql_query($query);
			/*while($myrow=mysql_fetch_array($result))
			{			
        	echo $myrow['name'];
			}*/
			for($i=1;$i<=$message_count && $i<=4;$i++)
			{
				$myrow=mysql_fetch_array($result);
				echo "<td>".$myrow['name']."</td>";	
			}
			?>
