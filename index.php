<?php

require 'model.php';

if (isset($_GET['id'])){


	require_once 'detalle.php';

}else{

	require_once 'todo.php';
}




?>
	
