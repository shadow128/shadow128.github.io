<?php
    //蘑菇云主机www.moguyun.xyz
	
	//列表数据删除调用
	session_start(); 
	if (!isset ($_SESSION['login'])) { 
		echo '<script>location.href="login.php"</script>';
	}
	$id = $_GET['id'];
	$from = $_GET['from'];
	include ('../inc/conn.php');//连接数据库
	
	if($from=='love'){
		$result = mysql_query("delete from list where Id = {$id}");
		if($result){
			header('Location:love.php');
		}else{
			echo "删除失败";
		}
	}
?>