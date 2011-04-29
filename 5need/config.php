<?php 
	$mysql_host		= "localhost";
	
	$mysql_user		= "root";
	
	$mysql_pass		= "admin";
	
	$mysql_dbname	= "5need";
	
	$mysql_prefix	= "rushui_";
	
	$dir_inc		= "include/";
	
	$linktablename  = "rushui_link";
	
	$schoolname		= "USTC";
	
	$dirlogo		= "/upload/smallimg/";
	
	$dirboss		= "../";
	
	$link 			= mysql_connect($mysql_host,$mysql_user,$mysql_pass) or ('连接数据库失败！'.mysql_error());
	
	mysql_select_db($mysql_dbname,$link);
	
	mysql_query("SET NAMES UTF8");

?>