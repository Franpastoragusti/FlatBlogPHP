<?php

function open_db(){

	$db = new PDO("mysql:host=localhost;dbname=blog_flatphp", "root");

	return $db;
}

function close_db(){

	$db = null;
}

function getPost(){

	$db = open_db();


	$result = $db->query("SELECT * FROM entradas");

	$post = array();

	while ($fila= $result->fetch(PDO::FETCH_ASSOC)){

		$post[]=$fila;
	
	}


	close_db($db);
	
	return $post;


}

function getPostById($id){

	$db = open_db();


	$query = "SELECT titulo, descripcion FROM entradas WHERE id=:id;";

	$statement=$db->prepare($query);

	$statement->bindValue(':id', $id, PDO::PARAM_INT);
	$statement->execute();

	$file = $statement->fetch(PDO::FETCH_ASSOC);

	close_db($db);

	return $file;

}



?>