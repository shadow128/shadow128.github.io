<?php
    //蘑菇云主机www.moguyun.xyz
	
	include ('../inc/conn.php');
	ob_start();
	header("Content-type: text/html; charset=utf-8");
	mysql_query("set names utf8");

	$from = $_POST['from'];
	
	if($from == 'relove'){
		
		$id = $_POST['id'];
		$fromname = $_POST['fromname'];
		$toname = $_POST['toname'];
		$content = $_POST['content'];
		$sql = "update list set fromname='$fromname',toname='$toname',content='$content' where Id ='".$id."'";
		$result = mysql_query($sql);
		header('Location:love.php');
		
	}elseif($from == 'passwd'){
		
		$password = md5($_POST['password']);
		$sql = "update admin set pswd='$password' where Id ='1'";
		$result = mysql_query($sql);
		header('Location:pswd.php');
		
	}elseif($from == 'system'){
		
		$title = $_POST['title'];
		$titlesm = $_POST['titlesm'];
		$keywords = $_POST['keywords'];
		$description = $_POST['description'];
		$weburl = $_POST['weburl'];
		$footer = $_POST['footer'];
		$qq = $_POST['qq'];
		$school = $_POST['school'];
		$sql = "update system set title='$title',titlesm='$titlesm',keywords='$keywords',description='$description',weburl='$weburl',footer='$footer',qq='$qq',school='$school' where Id ='1'";
		$result = mysql_query($sql);
		header('Location:system.php');
		
	}
?>