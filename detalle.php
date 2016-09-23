<?php
/*
Create By Fran Pastor
*/
	require 'model.php';
	$post = getPostById($_GET['id']);
	require 'views/show.php';
?>
